<?php

class banners extends CI_Controller {

    public function __construct() {
        include_once 'admin.php';
        include_once 'project.php';
        include_once 'person.php';
        parent::__construct();
        $this->load->model('person_model');
        $this->load->model('banners_model');
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function banners_management() {
        $admin = new admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_subject('إعلان');
                $crud->set_theme('datatables');
                $crud->set_table('banners');

                $crud->display_as('title', 'العنوان');
                $crud->display_as('image', 'الصورة');
                $crud->display_as('url', 'الرابط');
                $crud->display_as('active', 'نشط');
                $crud->display_as('person_id', 'واضع الاعلان');
                $crud->display_as('start_date', 'تاريخ وضع الاعلان');

                $crud->set_relation('person_id', 'person', 'name');
                $crud->unset_edit_fields('start_date', 'person_id');
                $crud->unset_add_fields('start_date');
                $crud->set_field_upload('image');

                $crud->unset_columns('image');


                $crud->required_fields('title', 'image', 'url','active');

                $crud->callback_after_insert(array($this, 'balance_decrement'));
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function balance_decrement($post_array, $primary_key) {
        if ($post_array['active'] == 1) {
            $bannerInfo = $this->banners_model->getBannerById($primary_key);
            $personId = $bannerInfo->person_id;
            $person_details = $this->person_model->getMemberById($personId);
            $newBalance = $person_details->balance - 10;
            $data['balance'] = $newBalance;
            $this->person_model->decrease_balance($personId, $data);
        }
    }
    
    
    public function getTeam() {
        $this->load->model('team_model');
        return $res['team'] = $this->team_model->getTeam()->result();
    }


    public function addbannerform() {
        $person = new person();
        if ($this->session->userdata('memberId') != NULL) {
            $data['balance'] = $person->getBalance();
            $data['team'] = $this->getTeam();
            $this->load->helper('forms');						
            $this->parser->parse('addBannerForm', $data);
        } else {
            $this->index();
        }
    }

    public function addBanner() {
        if (isset($_GET['submit'])) {
            include_once 'person.php';
            $person = new person();
            if ($person->getBalance() > 0) {
                $this->load->model('banners_model');
                    unset($_GET['submit']);
                    $_GET['person_id'] = $this->session->userdata('memberId');
                    if(isset($_FILES)){
                    $_GET['image'] = 'fromwoman13645872384.jpg';
                    }
                    $this->banners_model->addBanner($_GET);
                    $this->addBannerForm();
            } else {
                include_once 'homePage.php';
                $home = new homePage();
                $home->index("عفوا ليس لديك رصيد كافي");
            }
        } else {
            $this->index();
        }
    }

    public function callBanners() {
        $this->load->model('banners_model');
        $res = $this->banners_model->getBanners();
        foreach ($res as $row) {
            $diff = date_diff(date_create($row->start_date), date_create(date('Y-m-d')))->format("%a");
            if ($diff < 30) {
                $data[] = $row;
            }
        }
        return $data;
    }

}