<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of settings_model
 *
 * @author mohamed
 */
class settings_model extends CI_Model{
    public function getSiteSettings(){
        return $this->db->get('settings');
    }
}
