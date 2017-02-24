<?php

class page_model extends CI_Model {
    public function getPage($id = NULL){
        return $this->db->get_where('pages',  array('id'=>$id))->result();
    }
}
