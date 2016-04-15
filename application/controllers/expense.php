<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expense extends CI_Controller {

    /**
     * expense controller
     */

    // -------------------------------------------------------------------------
    
    public function index()
    {	
	$this->db->order_by("expense_id", "desc"); 
	$query  = $this->db->get('expense');
	$result['result'] = $query->result(); 
	$this->load->view('include/header');
	$this->load->view('include/sidebar');
	$this->load->view( 'expense/expense_view' , $result );
	$this->load->view('include/footer');
    }
    
    // -------------------------------------------------------------------------

    public function edit_expense( $id = null )
    {
	if( $id == null ){
	    redirect('/');
	}
	$this->db->where( 'expense_id',$id ); 
	$query = $this->db->get('expense');
	$result = $query->result();
	$result['result'] = $result[0];
	$this->load->view('include/header');
	$this->load->view('include/sidebar');
	$this->load->view('expense/edit_expense_view', $result);
	$this->load->view('include/footer');
	
    }
    
    // -------------------------------------------------------------------------

    public function edit_expense_after_post( $id = null )
    {
	
	if( $id == null ){
	    redirect('/');
	}
	$paidto       = $this->input->post('paidto');
	$reason       = $this->input->post('reason');
	$amount       = $this->input->post('amount');
	$datestring   = "%Y-%m-%d";
	$date_added   = mdate($datestring , '');
	    
	$query = $this->db->update('expense',
				    [
					'paid_to'          => $paidto,
					'reason'           => $reason,
					'amount'           => $amount,
					'date_updated'     => $date_added,
				    ]
				  ,[ 'expense_id' => $id ]);
	$this->output->set_content_type('application_json');
	$this->output->set_output( json_encode([
	    'result' => 1,
	    'success'  => 'The Expense is being sucessfully updated'
	]) );
	return FALSE;
	
    }
    
    // -------------------------------------------------------------------------

    public function create_expense()
    {
	
	$this->load->view('include/header');
	$this->load->view('include/sidebar');
	$this->load->view('expense/create_expense_view');
	$this->load->view('include/footer');
	
    }
    
    // -------------------------------------------------------------------------

    public function create_expense_after_post()
    {
	
	$paidto       = $this->input->post('paidto');
	$reason       = $this->input->post('reason');
	$amount       = $this->input->post('amount');
	$datestring       = "%Y-%m-%d";
	$date_added       = mdate($datestring , '');
	    
	$query = $this->db->insert('expense',
				    [
					'paid_to'          => $paidto,
					'reason'           => $reason,
					'amount'           => $amount,
					'date_added'       => $date_added,
				    ]
				  );
	$this->output->set_content_type('application_json');
	$this->output->set_output( json_encode([
	    'result' => 1,
	    'success'  => 'The Expense is being sucessfully inserted'
	]) );
	return FALSE;
	
    }

    // -------------------------------------------------------------------------

    public function delete_expense( $id = null )
    {
	
	if( $id == null ){
	    redirect('/');
	}

	$this->db->where('expense_id', $id);
	$query = $this->db->delete('expense');
	$this->output->set_content_type('application_json');
	if($query){
	    $this->output->set_output( json_encode([
		'result' => 1
	    ]) );
	}
	return FALSE;
	
    }

    // -------------------------------------------------------------------------

}
