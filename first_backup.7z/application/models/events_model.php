<?php

class events_model extends CI_Model {

    public function events_count() {
        return $this->db->count_all('events');
    }

    public function last(){
        $this->db->where('date >',date('Y-m-d'));
        $this->db->order_by('id','desc');
        return $this->db->get('events');
    }

    public function getEvent($id){
        return $this->db->get_where('events',array('id'=>$id));
    }

    public function get_event_by_cat($catid){
        return $this->db->get_where('events',array('cat'=>$catid));
    }
}
