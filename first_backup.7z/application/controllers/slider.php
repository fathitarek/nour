<?php

class Slider extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include_once 'admin.php';
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function slider_management() {
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('slider');
                $crud->set_subject('صورة');
                $crud->display_as('title', 'العنوان');
                $crud->display_as('image', 'الصورة');

                $crud->set_field_upload('image');
                
                $crud->required_fields('title','image');
                $crud->unset_add();
                $crud->unset_delete();
                $crud->unset_export();
                $crud->unset_print();
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function get_slider() {
        $this->load->model('slider_model');
        $this->load->library('parser');
        $res = $this->slider_model->get_slider();
        $this->parser->parse('test', $res);
    }

}
