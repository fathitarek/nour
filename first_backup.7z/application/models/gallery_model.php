<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gallery_model
 *
 * @author yousef
 */
class gallery_model extends CI_Model {

    public function getGalleries() {
        return $this->db->get('gallery')->result();
    }

}
