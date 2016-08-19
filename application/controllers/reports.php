<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

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
	
	public function __construct() {
	    
	    parent::__construct();
	    $this->load->model('reports_m');
	    
	}


	// --------------------------------------------------------------------

	public function index()
	{ 
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('reports/reports_view');
	    $this->load->view('include/footer');
	}
	
	// --------------------------------------------------------------------
	
	public function pro()
	{ 
	    
	    $from = $this->input->post('from');
	    $to   = $this->input->post('to');
	    $result['data']   = $this->reports_m->get_purchase( $from, $to );
	    $this->load->view('include/header');
	    $this->load->view('include/sidebar');
	    $this->load->view('reports/reports_view');
	    $this->load->view('include/footer');
	    
	}
	
	// --------------------------------------------------------------------

}
