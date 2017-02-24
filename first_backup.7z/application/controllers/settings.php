<?php

class settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include_once 'admin.php';
    }

    public function index(){
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }
    
    
    public function settings_management() {
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('settings');

                $crud->display_as('address', 'عنوان المؤسسة');
                $crud->display_as('phone', 'الهاتف الارضي للمؤسسة');
                $crud->display_as('mobile', 'موبايل المؤسسة');
                $crud->display_as('email', 'البريد الالكتروني للمؤسسة');
                $crud->display_as('teamTitle','عنوان الفريق');
                
                $crud->required_fields('address','phone','mobile','email','teamTitle');
                $crud->unset_add();
                $crud->unset_delete();
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

}
