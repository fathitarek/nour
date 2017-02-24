<?php

class banners_model extends CI_Model {
    public function addBanner($data){
        $this->db->insert('banners',$data);
    }
    
    public function getBanners(){
        return $this->db->get_where('banners',array('active'=>1))->result();
    }
    
    public function getBannerById($id){
        return $this->db->get_where('banners',array('id'=>$id))->row();
    }
}
