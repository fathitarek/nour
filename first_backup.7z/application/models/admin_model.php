<?php

class Admin_model extends CI_Model {

    public function login($username, $password) {
        if (!empty($username) && !empty($password)) {
            return $this->db->get_where('accounts', array("username" => $username, "password" => $password));
        }
    }

    public function getVisitsNumber() {
        return $this->db->get('visits')->num_rows();
    }
    
    
}

?>
