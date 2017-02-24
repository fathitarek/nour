<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of subscriber_model
 *
 * @author yousef
 */
class Subscriber_model extends CI_Model{
    public function search($email){
        return $this->db->get_where('newsletter_subscriber',array('email'=>$email))->num_rows();
    }
    
    public function addSubscriber($data){
        $this->db->insert('newsletter_subscriber',$data);
    }
    
    public function allSubscribers(){
        return $this->db->get('newsletter_subscriber');
    }
    
    public function add($data){
        $this->db->insert('composedmsgs',$data);
    }
    
}
