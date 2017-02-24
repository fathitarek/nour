<?php

class pages extends CI_Controller {

    public function __construct() {        
        parent::__construct();
        $this->load->model('page_model');
        $this->load->model('events_model');
        include_once 'admin.php';
    }

    public function index(){
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }
    
    
    public function pages_management() {
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('pages');

                $crud->set_subject('صفحة');
                $crud->display_as('title', 'عنوان الصفحة');
                $crud->display_as('desc', 'محتوى الصفحة');
                $crud->display_as('image','الصورة الرئيسية');
                $crud->display_as('image_title','عنوان الصورة الرئيسية');
                $crud->set_field_upload('image');
                $crud->required_fields('title','desc','image','image_title');
                
                $crud->unset_fields('title');
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

    public function displaypage($pageId = NULL){        
        if(!isset($pageId)){
            $this->index();
        }else{
            include_once 'homepage.php';
            $this->load->model('team_model');
            $this->load->model('settings_model');
            $home = new homepage();
            $pages['page'] = $this->page_model->getPage($pageId);
            $pages['banners'] = $home->callBanners();
            $pages['links']=$this->events_model->get_event_by_cat($pageId)->result();
            $pages['team']=$this->team_model->getActivityMembers($pageId)->result();
            $pages['settings'] = $this->settings_model->getSiteSettings()->result();
            if($pageId == 1){
            $pages['team'] = $this->team_model->getTeam()->result();
            }
            $this->parser->parse('page_display',$pages);
            
        }
    }
}