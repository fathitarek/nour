<?php

class caseSupport_model extends CI_Model {

    public function countSupport($personId) {
        $this->db->from('casesupport');
        $this->db->where('person_id', $personId);
        return $this->db->count_all_results();
    }

    public function person_support($personID, $caseID) {
        return $this->db->get_where('casesupport', array('case_id' => $caseID, 'person_id' => $personID));
    }

    public function addNewCaseSupport($data) {
        $this->db->insert('casesupport', $data);
    }

    public function updateSupport($caseId, $personId, $support_value) {
        $row = $this->db->get_where('casesupport', array('case_id' => $caseId, 'person_id' => $personId))->row();
        $data['amountOfMony'] = $row->amountOfMony + $support_value;
        $this->db->where(array('case_id' => $caseId, 'person_id' => $personId));
        $this->db->update('casesupport', $data);
    }

}
