<?php

class project_model extends CI_Model{
    public function getNonActiveProjects() {        
        $this->db->where('active',0);
        $this->db->from('project');
        return $this->db->count_all_results();
    }
    
    
    public function getAllProjects(){
        return $this->db->count_all('project');
    }
    
    public function getProjects() {
        $this->db->select('project.title,project.desc,project.id,project.image,person.name,project.date,project.requiredAmountOfMony');
        $this->db->from('project');
        $this->db->where('project.active = 1');
        $this->db->where('person.active = 1');
        $this->db->join('person', 'project.person_id = person.id');
        return $this->db->get();
    }
    
    public function projectDetails($id){
        $this->db->select('person.name,project.title,project.desc,project.video,project.image,project.date,project.requiredAmountOfMony,project.reached_balance');
        $this->db->from('project');
        $this->db->where(array('project.id'=>$id,'project.active'=>1,"person.active"=>1));
        $this->db->join('person','project.person_id = person.id');
        return $this->db->get();
    }
    
    public function insertProject($data){
        $this->db->insert('project',$data);
    }
    
    
    public function updateProject($data,$projectId){        
        $this->db->where(array('id'=>$projectId));
        $this->db->update('project',$data);
    }
    
    public function getProjectPerson($projectId){
        $this->db->select('person.email');
        $this->db->from('project');
        $this->db->where(array('project.id'=>$projectId));
        $this->db->join('person', 'person.id = project.person_id');
        return $this->db->get()->row();
    }
    
    public function getProjectsCats(){
        return $this->db->get('project_category')->result();
    }
    
    public function getProjectById($id){
        return $this->db->get_where('project',array('id'=>$id))->row();
    }
}
