<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// --------------------------------------------------------------------

	public function index()
	{   
	    
	    $config = array();
	    $config["base_url"] = site_url() . "home/index/";
	    $config["total_rows"] = $this->db->count_all("purchase");
	    $config["per_page"] = 25;
	    $config["uri_segment"] = 3;
	    $config['full_tag_open'] = "<ul class='pagination'>";
	    $config['full_tag_close'] ="</ul>";
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
	    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
	    $config['next_tag_open'] = "<li>";
	    $config['next_tagl_close'] = "</li>";
	    $config['prev_tag_open'] = "<li>";
	    $config['prev_tagl_close'] = "</li>";
	    $config['first_tag_open'] = "<li>";
	    $config['first_tagl_close'] = "</li>";
	    $config['last_tag_open'] = "<li>";
	    $config['last_tagl_close'] = "</li>";
	    $this->pagination->initialize($config);
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	    $this->db->limit($config["per_page"], $page);
	    $this->db->order_by("purchase_id", "desc"); 
	    $query = $this->db->get('purchase');
	    $data['result'] = $query->result();
	    $data["links"] = $this->pagination->create_links();
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('home/home_view' , $data);
	    $this->load->view('include/footer');
	}
	
	// --------------------------------------------------------------------
	
	public function create_invoice()
	{
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('home/create_invoice_view');
	    $this->load->view('include/footer');
	}
	
	// --------------------------------------------------------------------
	
	public function create_invoice_after_post()
	{ 
	    
	    $vehicle_no       = $this->input->post('Vehicle_no');
	    $mining           = $this->input->post('Mining');
	    $type             = $this->input->post('type');
	    $weight_ton       = $this->input->post('weight_ton');
	    $price            = $this->input->post('price');
	    $car_rent_man     = $this->input->post('Car_rent_man');
	    $weight_man       = $this->input->post('Weight_man');
	    $tax              = $this->input->post('tax');
	    $bonus            = $this->input->post('bonus');
	    $datestring       = "%Y-%m-%d";
	    $date_added       = mdate($datestring , '');
	    
	    $query = $this->db->insert('purchase',
					[
					    'vehicle_no'      => $vehicle_no,
					    'mining'          => $mining,
					    'type'            => $type,
					    'weight_ton'      => $weight_ton,
					    'price'           => $price,
					    'weight_man'      => $weight_man,
					    'car_rent_man'    => $car_rent_man,
					    'tax'             => $tax,
					    'bonus'           => $bonus,
					    'date_added'      => $date_added,
					]
		                      );
	    $this->output->set_content_type('application_json');
	    $this->output->set_output( json_encode([
                'result' => 1,
                'success'  => 'The record is being sucess full inserted'
            ]) );
	    //return FALSE;
	}
	
	// --------------------------------------------------------------------
	
	function edit_invoice( $id = null ){
	    if( $id == null ){
		redirect('/');
	    }
	    $this->db->where( 'purchase_id',$id ); 
	    $query = $this->db->get('purchase');
	    $result = $query->result();
	    $result['result'] = $result[0];
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('home/edit_purchase_view',$result);
	    $this->load->view('include/footer');
	    
	}
	
	// --------------------------------------------------------------------
	
	function edit_invoice_after_post( $id = null ){
	    
	    $vehicle_no       = $this->input->post('Vehicle_no');
	    $mining           = $this->input->post('Mining');
	    $type             = $this->input->post('type');
	    $weight_ton       = $this->input->post('weight_ton');
	    $price            = $this->input->post('price');
	    $car_rent_man     = $this->input->post('Car_rent_man');
	    $weight_man       = $this->input->post('Weight_man');
	    $tax              = $this->input->post('tax');
	    $bonus            = $this->input->post('bonus');
	    $datestring       = "%Y-%m-%d";
	    $date_added       = mdate($datestring , '');
	    $this->db->where('purchase_id', $id);
	    $query = $this->db->update('purchase',
					[
					    'vehicle_no'      => $vehicle_no,
					    'mining'          => $mining,
					    'type'            => $type,
					    'weight_ton'      => $weight_ton,
					    'price'           => $price,
					    'weight_man'      => $weight_man,
					    'car_rent_man'    => $car_rent_man,
					    'tax'             => $tax,
					    'bonus'           => $bonus,
					    'date_updated'    => $date_added,
					    'added_by'        => 'admin'
					]
		                      );
	    $this->output->set_content_type('application_json');
	    $this->output->set_output( json_encode([
                'result'   => 1,
                'success'  => 'The record is being sucess full edited'
            ]) );
	    return FALSE;
	}
	
	// --------------------------------------------------------------------
	
	function delete_invoice( $id = null ){
	    
	    if( $id == null ){
		redirect('/');
	    }
	    
	    $this->db->where('purchase_id', $id);
	    $query = $this->db->delete('purchase');
	    $this->output->set_content_type('application_json');
	    if($query){
		$this->output->set_output( json_encode([
		    'result' => 1
		]) );
	    }
	    return FALSE;

	}
	
	// --------------------------------------------------------------------
	
}
