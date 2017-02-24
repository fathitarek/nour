<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author yousef
 */
class test extends CI_Model {

    public function addTest($data) {
        $this->db->insert('test', $data);
    }

}
