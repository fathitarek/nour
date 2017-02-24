<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of humancases_model
 *
 * @author mohamed
 */
class humancases_model extends CI_Model {
    private $table = 'humancases';
    public function getAllCases() {
        return $this->db->count_all($this->table);
    }
    
    public function casesDetails(){
        return $this->db->get($this->table)->result('array');
    }
    
    public function getCaseDetails($id){
        return $this->db->get_where($this->table,array('id'=>$id))->result();
    }
    
}