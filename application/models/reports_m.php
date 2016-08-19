<?php
class reports_m extends CI_Model
{
    
    // -------------------------------------------------------------------------
    
    public function __construct() {
	
	parent::__construct();
	
    }

    // -------------------------------------------------------------------------
    public function get_purchase( $from, $to ){
	
		 $this->db->where( 'date_added >=', $from);
		 $this->db->where( 'date_added <=', $to);
	$query = $this->db->get( 'purchase' );
	
	$result = $query->result();
	return $result;
    }
    // -------------------------------------------------------------------------
    
}