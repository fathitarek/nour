<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of composedMsgs
 *
 * @author yousef
 */
class composedmsgs_model extends CI_Model {
    public function add($row){
        $this->db->insert('composedmsgs',$row);
    }
    
    public function getMsgById($msgId){
        return $this->db->get_where('composedmsgs',array('id'=>$msgId));
    }
}
