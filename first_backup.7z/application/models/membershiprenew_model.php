<?php

class Membershiprenew_model extends CI_Model {

    public function removeRenew($id) {
        $this->db->where('id', $id);
        $this->db->delete('membershiprenew');
    }

    public function renew($data) {
        $this->db->insert('membershiprenew', $data);
    }

}
