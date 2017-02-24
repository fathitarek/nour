<?php

class Person_model extends CI_Model {

    public function getNonActivePersons() {
        $this->db->where('active', 0);
        $this->db->from('person');
        return $this->db->count_all_results();
    }

    public function getAllPersons() {
        return $this->db->count_all('person');
    }

    public function member_login($email, $pass) {
        return $this->db->get_where('person', array('email' => $email, 'password' => $pass, 'active' => 1))->row('array');
    }

    public function insertMember($data) {
        $this->db->insert('person', $data);
    }

    public function getSimilar($personData) {
        return $this->db->get_where('person', $personData)->num_rows();
    }

    public function getSimilarUserPass($email, $pass) {
        return $this->db->get_where('person', array('email' => $email, 'password' => $pass))->num_rows();
    }

    public function getMemberByEmail($email) {
        return $this->db->get_where('person', array('email' => $email));
    }

    public function support($memberId,$support_value) {
        $row = $this->db->get_where('person', array('id' => $memberId))->row();
        $newBalance = ($row->balance) - $support_value;
        $this->db->where(array('id' => $memberId));
        $data['balance'] = $newBalance;
        $this->db->update('person', $data);
    }

    public function getMemberById($memberId) {
        return $this->db->get_where('person', array('id' => $memberId))->row();
    }

    public function updatePersonBalance($person_id, $balance) {
        $oldBalance = $this->getMemberById($person_id);
        $newBalance = $oldBalance->balance + $balance;
        $data['balance'] = $newBalance;
        $this->db->where('id', $person_id);
        $this->db->update('person', $data);
    }
    
    public function decrease_balance($person_id,$data){
        $this->db->where('id',$person_id);
        $this->db->update('person',$data);
    }

    function update_person($id,$data){
        $this->db->where('id',$id);
        $this->db->update('person',$data);
    }
}
