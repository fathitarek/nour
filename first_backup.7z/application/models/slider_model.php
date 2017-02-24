<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of slider_model
 *
 * @author mohamed
 */
class slider_model extends CI_Model{
    public function get_slider(){
        return $this->db->get('slider')->result('array');
    }
}
