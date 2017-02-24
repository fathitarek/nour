<?php

class Photos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include_once 'admin.php';
    }

    public function index(){
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }
    
    
    public function photo_management() {
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('gallery');
                $crud->set_subject('صورة جديدة');
                $crud->display_as('photo', 'الصورة');
                $crud->display_as('gallery_id', 'يتبع البوم');
                $crud->set_field_upload('photo');
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function galleryPhotos($galleryId) {
        $this->load->model('photos_model');
        $this->load->library('parser');
        include_once 'project.php';
        $project = new project();
        $data['photos'] = $this->photos_model->getGalleryPhotos($galleryId);
        $data['team'] = $project->getTeam();
        $this->parser->parse('galleryphotos',$data);
    }

}
