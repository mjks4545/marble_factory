<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salary extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
	public function index()
	{
	    $query          = $this->db->get('user');
	    $result['data'] = $query->result();
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view( 'salary/salary_view', $result );
	    $this->load->view('include/footer');
	}
	
	public function salary_add()
	{
	    $query          = $this->db->get('user');
	    $result['data'] = $query->result();
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view( 'salary/salary_add', $result );
	    $this->load->view('include/footer');
	}
	
	public function salary_details( $id = null )
	{
	    $this->db->where( 'user_id',$id );
	    $query          = $this->db->get('salary');
	    $result['data'] = $query->result();
	    if( empty( $result['data'] ) ){
		redirect('salary/');
	    }
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view( 'salary/salary_detail', $result );
	    $this->load->view('include/footer');
	}
	
	public function salary_add_post()
	{
	    $userid       = $this->input->post('user');
	    $reason       = $this->input->post('reason');
	    $amount       = $this->input->post('amount');
	    $datestring   = "%Y-%m-%d";
	    $date_added   = mdate($datestring , '');

	    $insert = $this->db->insert( 'salary',
		
		[
		    
		    'amount'        => $amount, 
		    'reason'        => $reason, 
		    'user_id'       => $userid, 
		    'created_date'  => $date_added 
		
		]
	    
	    );
	    $this->output->set_content_type('application_json');
	    if( $insert ){
		$this->output->set_output( json_encode([
		    'result' => 1,
		    'success'  => 'The Salary is being sucessfully Added'
		]) );
		return FALSE;
	    }else{
		$this->output->set_output( json_encode([
		    'result' => 0,
		    'success'  => 'Sorry there was some error'
		]) );
	    }
	}
	
	public function delete_user( $id = null ){
	    
	    $this->db->where('user_id', $id);
	    $this->db->delete('user');
	    redirect( '/salary/' );
	    
	}
	
	
}
