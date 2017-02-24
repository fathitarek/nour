<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of team_model
 *
 * @author yousef
 */
class team_model extends CI_Model{
    public function getTeam(){
        $this->db->limit(5);
        return $this->db->get_where('team',array('active'=>1));
    }
    
    public function getActivityMembers($cat_id){
    	$this->db->limit(5);
        return $this->db->get_where('team',array('active'=>1,'cat_id'=>$cat_id));
    }
}