<?php

class HomeBlocks extends CI_Controller {

    public function __construct() {        
        parent::__construct();
        include_once 'admin.php';
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }
    
    public function blocks_management() {
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_subject('بلوك الفصحة الرئيسية');
                $crud->set_theme('datatables');
                $crud->set_table('homeblocks');
                $crud->display_as('title', 'العنوان');
                $crud->display_as('desc', 'الوصف');
                $crud->display_as('image', 'الصورة');
                $crud->display_as('color','اللون');
                $crud->columns('title','desc','color');
                $crud->fields('title','desc','color');
                $crud->unset_fields('image');
                $crud->set_field_upload('image');
                $crud->set_relation('color','colors','name');
                $crud->unset_delete();
                $crud->unset_add();
                $crud->required_fields('title', 'desc','image','color');
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    

}
