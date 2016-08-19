<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

	// ---------------------------------------------------------------------
    
	public function index()
	{
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view( 'user/user_view' );
	    $this->load->view('include/footer');
	}
	
	// ---------------------------------------------------------------------
	
	public function user_add()
	{
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view( 'user/user_add' );
	    $this->load->view('include/footer');
	}
	
	public function user_add_after_post()
	{
	    
	    $user = $this->input->post('paidto');
	    $father = $this->input->post('fathername');
	    $insert = $this->db->insert( 'user',
		
		[ 'username' => $user, 'fathername' => $father ]
	    
	    );
	    $this->output->set_content_type('application_json');
	    if( $insert ){
		$this->output->set_output( json_encode([
		    'result' => 1,
		    'success'  => 'The Expense is being sucessfully updated'
		]) );
		return FALSE;
	    }else{
		$this->output->set_output( json_encode([
		    'result' => 0,
		    'success'  => 'Sorry there was some error'
		]) );
	    }
	}
	
	
	
}
