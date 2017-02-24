<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of feedback_model
 *
 * @author yousef
 */
class feedback_model extends CI_Model{
    
    public function getFeedback(){
        return $this->db->count_all('feedback');
    }
    
    public function addfeedback($data){

        return $this->db->insert('feedback',$data);
    }
    
}
