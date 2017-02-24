<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of visits
 *
 * @author mohamed
 */
class Visits_model extends CI_Model {
    public function search($IP){
        return $this->db->get_where('visits',array('ip'=>$IP));
    }
    
    public function addNewVisit($data){
        $this->db->insert('visits',$data);
    }
}
