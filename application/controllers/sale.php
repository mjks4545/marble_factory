<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sale extends CI_Controller {

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
	
	// --------------------------------------------------------------------

	public function index()
	{
	    $this->db->order_by("sale_id", "desc"); 
	    $query = $this->db->get('sale');
	    $result ['result'] = $query->result(); 
	    $this->db->order_by("sale_id", "desc"); 
	    $query = $this->db->get('size');
	    $result ['size'] = $query->result(); 
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('sale/sale_view' , $result);
	    $this->load->view('include/footer');
	}
	
	// --------------------------------------------------------------------
	public function sale_print( $id = null )
	{    
	    $this->id_null( $id );
	    $this->db->order_by("size_id", "desc"); 
	    $query = $this->db->get_where( 'size' , ['sale_id'=>$id] );
	    $result ['size'] = $query->result();
	    $this->db->order_by("sale_id", "desc"); 
	    $query = $this->db->get_where( 'sale' , ['sale_id'=>$id] );
	    $result ['sale'] = $query->result();
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('sale/print_view',$result);
	    $this->load->view('include/footer');
	}
	// --------------------------------------------------------------------

	public function create_sale()
	{ 
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('sale/create_sale_view');
	    $this->load->view('include/footer');
	}
	// --------------------------------------------------------------------

	public function create_sale_after_post()
	{ 
	    
	    $name_of_buyer    = $this->input->post('name_of_buyer');
	    $marble_patty     = $this->input->post('marble_patty');
	    $datestring       = "%Y-%m-%d";
	    $date_added       = mdate($datestring , '');
		
	    $query = $this->db->insert('sale',
					[
					    'buyer_name'      => $name_of_buyer,
					    'marble_type'     => $marble_patty,
					    'date_added'      => $date_added
					]
		                      );
	    $sale_id = $this->db->insert_id();
	    $counter          = $this->input->post('counter');
	    for( $i=1; $i <= $counter ; $i++ ){
		
		$patty_size      = 'patty_size_' . $i;
		$number_of_items = 'number_of_items_' . $i;
		$price           = 'price_' . $i;
		
		$query_1 = $this->db->insert('size',
					[
					    'sale_id'      => $sale_id,
					    'size'         => $_POST[$patty_size],
					    'date_added'   => $date_added,
					    'quantity'     => $_POST[$number_of_items],
					    'price'        => $_POST[$price],
					]
		                      );
	    }
	    
	    $this->output->set_content_type('application_json');
	    $this->output->set_output( json_encode([
                'result' => 1,
                'success'  => 'The record is being sucess full inserted'
            ]) );
	    return FALSE;
	    
	}
	
	// --------------------------------------------------------------------

	public function single_sale( $id = null )
	{ 
	    
	    $this->id_null( $id );
	    $this->db->order_by("size_id", "desc"); 
	    $query = $this->db->get_where( 'size' , ['sale_id'=>$id] );
	    $result ['size'] = $query->result();
	    $this->db->order_by("sale_id", "desc"); 
	    $query = $this->db->get_where( 'sale' , ['sale_id'=>$id] );
	    $result ['sale'] = $query->result();
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('sale/single_sale',$result);
	    $this->load->view('include/footer');
	    
	}
	
	// --------------------------------------------------------------------

	public function delete_sale( $id = null )
	{ 
	    
	    $this->id_null( $id );
	    $this->db->where('sale_id', $id);
	    $query = $this->db->delete('sale');
	    $this->db->where('sale_id', $id);
	    $query = $this->db->delete('size');
	    $this->output->set_content_type('application_json');
	    if($query){
		$this->output->set_output( json_encode([
		    'result' => 1
		]) );
	    }
	    return FALSE;
	    
	}
	
	// --------------------------------------------------------------------

	public function edit_sale( $id = null )
	{ 
	    
	    $this->id_null( $id );
	    $this->db->order_by("sale_id", "desc"); 
	    $query = $this->db->get_where( 'sale' , ['sale_id'=>$id] );
	    $result = $query->result();
	    $result['sale'] = $result[0];
	    $this->db->order_by("size_id", "desc"); 
	    $query = $this->db->get_where( 'size' , ['sale_id'=>$id] );
	    $result ['size'] = $query->result();
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('sale/edit_sale' , $result);
	    $this->load->view('include/footer');
	    
	}
	
	// --------------------------------------------------------------------

	public function edit_sale_after_post( $id = null )
	{ 
	    
	    $this->id_null( $id );
	    $name_of_buyer  = $this->input->post('name_of_buyer');
	    $marble_patty   = $this->input->post('marble_patty');
	    $this->db->update('sale',
			[
			    'buyer_name' => $name_of_buyer,
			    'marble_type' => $marble_patty
			]
		    ,[ 'sale_id' => $id ] );
	    $this->output->set_output( json_encode([
		    'result' => 1,
		    'success' => 'The filed are edited sucess fully'
		]) );
	    return FALSE;
	    
	}
	// --------------------------------------------------------------------

	public function edit_single_sale( $id = null )
	{ 
	    $this->id_null( $id );
	    $this->db->order_by("size_id", "desc"); 
	    $query = $this->db->get_where( 'size' , ['size_id'=>$id] );
	    $result = $query->result();
	    $result['size'] = $result[0];
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('sale/edit_single_sale' , $result);
	    $this->load->view('include/footer');
	    
	}
	
	// --------------------------------------------------------------------
	
	public function id_null( $id ){
	    
	    if( $id == null ){
		    redirect( site_url() . '/sale' );
	    }
	    
	}
	
	// --------------------------------------------------------------------
	
	public function edit_single_sale_after_post( $id = null ){
	    
	    $this->id_null( $id );
	    $size      = $this->input->post('size');
	    $quantity  = $this->input->post('quantity');
	    $price     = $this->input->post('price');
	    $this->db->update('size',
			[
			    'size'       => $size,
			    'quantity'   => $quantity,
			    'price'      => $price
			]
		    ,[ 'size_id' => $id ] );
	    $this->output->set_output( json_encode([
		    'result' => 1,
		    'success' => 'The fields are edited sucessfully'
		]) );
	    return FALSE;
	}
	
	// --------------------------------------------------------------------
	
	public function delete_single_sale( $id = null ){
	    
	    $this->id_null( $id );
	    $this->db->where('size_id', $id);
	    $query = $this->db->delete('size');
	    $this->output->set_content_type('application_json');
	    if($query){
		$this->output->set_output( json_encode([
		    'result'  => 1,
		    'success' => 'The record has been successfull Deleted'
		]) );
	    }
	    return FALSE;
	}
	
	// --------------------------------------------------------------------
	
	public function print_view( $id = null ){
	    $this->id_null( $id );
	    $this->db->order_by("size_id", "desc"); 
	    $query = $this->db->get_where( 'size' , ['sale_id'=>$id] );
	    $result ['size'] = $query->result();
	    $this->db->order_by("sale_id", "desc"); 
	    $query = $this->db->get_where( 'sale' , ['sale_id'=>$id] );
	    $result ['sale'] = $query->result();
	    $this->load->view('sale/print',$result);
	    
	}
	
	// --------------------------------------------------------------------

}
