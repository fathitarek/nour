<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of photosModel
 *
 * @author yousef
 */
class photos_model extends CI_Model{
    public function getGalleryPhotos($galleryId){
        return $this->db->get_where('photos',array('gallery_id'=>$galleryId))->result();
    }
}
