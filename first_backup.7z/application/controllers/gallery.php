<?php

class Gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include_once 'admin.php';
    }

    public function index(){
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }
    
    
    public function gallery_management() {
        $admin = new admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('gallery');
                $crud->set_subject('البوم');
                $crud->required_fields('title','desc', 'mainPhoto', 'date');
                $crud->display_as('title', 'عنوان الالبوم');
                $crud->display_as('desc', 'وصف الالبوم');
                $crud->display_as('mainPhoto', 'الصورة الرئيسية');
                $crud->display_as('date', 'تاريخ الالبوم');
                $crud->columns('title', 'desc', 'date');
                $crud->set_field_upload('mainPhoto');
                
                //$crud->add_action('شاهد صور الالبوم', '', '', 'ui-icon-image', array('example2.php', 'showImages'));
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function showImages() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');
            $crud->set_table('photos');
            $crud->set_subject('صورة');
            $crud->set_relation('gallery_id', 'gallery', 'title');
            $crud->display_as('photo', 'صورة');
            $crud->display_as('gallery_id', 'الالبوم');

            $crud->set_field_upload('photo');
            $this->load->view('admin/example.php', $crud->render());
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    public function allGalleries() {
        $this->load->library('parser');
        $this->load->model('gallery_model');
        include_once 'project.php';
        $project = new project();
        $data['galleries'] = $this->gallery_model->getGalleries();
        $data['team'] = $project->getTeam();
        $this->parser->parse('galleries', $data);
    }

}
