<?php


class Feedback extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        include_once 'admin.php';
    }

    public function index() {
        include_once 'homepage.php';
        $home = new homepage();
        $home->index();
    }
    
    public function feedback_management() {
        $admin = new admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('feedback');

                $crud->display_as('name', 'الاسم');
                $crud->display_as('email', 'البريد الالكتروني');
                $crud->display_as('msg', 'الرسالة');

                $crud->unset_add();
                $crud->unset_edit();
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function getSettings() {
        $this->load->model('settings_model');
        return $this->settings_model->getSiteSettings()->result();
    }

    public function feedbackform() {
        $this->load->library('parser');
        $this->load->helper('form');
        $data['settings'] = $this->getSettings();
        $this->parser->parse('contact', $data);
    }

    public function collectfeedback() {
        if (isset($_GET['submit'])) {            
                $this->load->model('feedback_model');
                unset($_GET['submit']);
                $res = $this->feedback_model->addfeedback($_GET);
                if ($res == 1) {
                    $data['msg'] = "تم ارسال رسالتك بنجاح";
                } else {
                    $data['msg'] = "عفوا لم يتم ارسال رسالتك";
                }
                $data['settings'] = $this->getSettings();
                $this->parser->parse('contact', $data);
                
        } else {
            $this->feedbackform();
        }
    }

    

}