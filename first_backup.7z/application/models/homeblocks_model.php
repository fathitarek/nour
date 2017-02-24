<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Homeblocks_model extends CI_Model{

	public function __construct(){
        parent::__construct();
    }

    public function homeBlocksDetails(){
        //return $this->db->get('homeblocks')->result('array');
        
        $this->db->select('*');
	$this->db->from('homeblocks');
	$this->db->join('colors', 'homeblocks.color = colors.id');
	$this->db->order_by('homeblocks.id asc');
	return $this->db->get()->result('array');
    }
    
}