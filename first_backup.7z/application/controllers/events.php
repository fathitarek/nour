<?php

class events extends CI_Controller {

    public function __construct() {
        include_once 'admin.php';
        parent::__construct();
        include_once 'person.php';
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function events_management() {
        $admin = new admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_subject('حدث');
                $crud->set_theme('datatables');
                $crud->set_table('events');

                $crud->display_as('title', 'العنوان');
                $crud->display_as('image', 'الصورة');
                $crud->display_as('desc', 'وصف الحدث');
                $crud->display_as('date', 'ميعاد الحدث');
                $crud->display_as('cat','تصنيف الحدث');
                $crud->set_relation('cat','events_cat','name');
                
                $crud->columns('title', 'desc', 'date');
                $crud->set_field_upload('image');

                $crud->required_fields('title', 'image', 'desc','cat','date');
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function displayEvent($eventId = NULL) {
        if (isset($eventId)) {
            $this->load->model('settings_model');
            $this->load->model('events_model');
            $this->load->library('parser');
            $data['event'] = $this->events_model->getEvent($eventId)->result();
            $data['team'] = $this->getTeam();
            $person = new person();
            $data['balance'] = $person->getBalance();
            $data['settings'] = $this->settings_model->getSiteSettings()->result();
            $this->parser->parse('event', $data);
        } else {
            $this->index();
        }
    }

    public function getTeam() {
        $this->load->model('team_model');
        return $res['team'] = $this->team_model->getTeam()->result();
    }

}