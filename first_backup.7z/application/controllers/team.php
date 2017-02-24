<?php

class Team extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include_once 'admin.php';
    }

    public function index(){
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }
    
    
    public function team_management() {
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('team');

                $crud->set_subject('عضو');
                $crud->display_as('name', 'اسم العضو');
                $crud->display_as('image', 'صورة العضو');
                $crud->display_as('role', 'الدور الذي يلعبه العضو في المؤسسة');
                $crud->display_as('desc', 'وصف مختصر عن وظيفة العضو');
                $crud->display_as('cat_id','النشاط المشترك فيه العضو');
                $crud->display_as('active','نشط');

                $crud->set_field_upload('image');
                
                $crud->set_relation('cat_id','events_cat','name');
                $crud->columns('name','role','desc','cat_id','active');
                
                $crud->required_fields('name','image','role','desc','active');

                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    
}