<?php

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('admin/login');
    }
    

    public function login() {
        if (isset($_GET['submit'])) {
            $this->load->model('admin_model');
            $res = $this->admin_model->login($_GET['username'], $_GET['password']);
            if ($res && $res->num_rows() > 0) {
                $result = $res->row();
                $id = $result->admin_id;
                $user = $result->username;
                $data = array(
                    "id" => $id,
                    "username" => $user
                );
                $this->session->set_userdata($data);
                $this->adminPanel();
            } else {
                $error['error'] = 'من فضلك ادخل اسم دخول ورقم سري صحيح';
                $this->load->view('admin/login.php', $error);
            }
        }
    }

    public function adminPanel() {
        if ($this->checkLogin() == 1) {
            $this->load->model('feedback_model');
            $this->load->model('person_model');
            $this->load->model('project_model');
            $this->load->model('admin_model');
            $this->load->model('humancases_model');
            $this->load->model('events_model');

            $data['feedback'] = $this->feedback_model->getFeedback();
            $data['nonActivePersons'] = $this->person_model->getNonActivePersons();
            $data['nonActiveProjects'] = $this->project_model->getNonActiveProjects();
            $data['person_count'] = $this->person_model->getAllPersons();
            $data['project_count'] = $this->project_model->getAllProjects();
            $data['visitsNum'] = $this->admin_model->getVisitsNumber();
            $data['humancases'] = $this->humancases_model->getAllCases();
            $data['events'] = $this->events_model->events_count();
            $this->parser->parse('admin/index.php', $data);
        }else{
            $this->index();
        }
    }

    public function checkLogin() {
        $user = $this->session->userdata('username');
        if ($user != '') {
            return 1;
        } else {
            return 0;
        }
    }

    public function pageNotFound() {
        $this->load->view('404');
    }

}