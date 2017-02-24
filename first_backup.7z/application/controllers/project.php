<?php

class project extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('project_model', 'team_model', 'person_model'));
        $this->load->library('email');        
        include_once 'person.php';        
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }
    
    
    public function project_management() {
        include_once 'admin.php';
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('project');
                $crud->set_subject('مشروع');

                $crud->display_as('title', 'عنوان المشروع');
                $crud->display_as('desc', 'وصف المشروع');
                $crud->display_as('video', 'فيديو توضيحي للمشروع');
                $crud->display_as('date', 'تاريخ تسجيل المشروع');
                $crud->display_as('image', 'الصورة');
                $crud->display_as('active', 'نشط');
                $crud->display_as('cat_id', 'تصنيف المشروع');
                $crud->display_as('person_id', 'اسم صاحب المشروع');
                $crud->display_as('requiredAmountOfMony', 'المبلغ المطلوب لتنفيذ المشروع');
                $crud->display_as('reached_balance', 'المبلغ الذي تم تجميعه لهذا المشروع');


                $crud->set_field_upload('image');

                $crud->columns('person_id', 'title', 'date', 'active', 'cat_id', 'reached_balance');
                $crud->edit_fields('active', 'video');
                $crud->set_relation('cat_id', 'project_category', 'cat_name');
                $crud->set_relation('person_id', 'person', 'name');

                $crud->unset_add();
                $crud->callback_before_update(array($this, 'balance_decrement'));

                $this->load->view('admin/projectsForm.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function balance_decrement($post_array, $primary_key) {
        if ($post_array['active'] == 1) {
            $projectInfo = $this->project_model->getProjectById($primary_key);
            $personId = $projectInfo->person_id;
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

    public function projectCats() {
        $this->load->model('project_model');
        return $this->project_model->getProjectsCats();
    }

    public function getProjects() {
        $person = new person();
        $res['data'] = $this->project_model->getProjects()->result();
        $res['team'] = $this->getTeam();
        $res['balance'] = $person->getBalance();
        $this->parser->parse('projects', $res);
    }

    public function getProject($id) {
        $person = new person();
        $data['data'] = $this->project_model->projectDetails($id)->result();
        $data['id'] = $this->project_model->projectDetails($id)->result();
        $data['team'] = $this->getTeam();
        $data['balance'] = $person->getBalance();
        if ($this->session->userdata('member_name')) {
            $data['link'] = "<center><a class='btn btn-primary' href=" . base_url() . "support/supportProject/$id>دعم هذا المشروع</a></center>";
        } else {
            $data['link'] = "";
        }
        $this->parser->parse("page", $data);
    }

    public function addProjectForm() {
        $person = new person();
        if ($this->session->userdata('memberId') != NULL) {
            $res['cats'] = $this->projectCats();
            $res['team'] = $this->getTeam();
            $res['balance'] = $person->getBalance();
            $this->parser->parse('addnewproject', $res);
        } else {
            $this->index();
        }
    }

    public function recordProject() {
        $this->load->library('parser');
        $res['cats'] = $this->projectCats();
        $res['team'] = $this->getTeam();
        if (isset($_GET['submit'])) {
            unset($_GET['submit']);
            $this->load->model('projectSupport_model');
            $person = new person();            
            $count = $this->projectSupport_model->countSupport($this->session->userdata('memberId'));
            if ($person->getBalance() > 10) {
                if ($count > 10) {
                        $this->upload->do_upload('image');                        
                        $_GET['date'] = date('Y-m-d');
                        $_GET['person_id'] = $this->session->userdata('memberId');
                        $imageDetails = $this->upload->data('file_name');
                        $_GET['image'] = $imageDetails['file_name'];
                        $this->project_model->insertProject($_GET);
                        $res['balance'] = $person->getBalance();
                        $res['msg'] = 'تم اضافة مشروعك بنجاح يرجى الانتظار حتى يتم قبول عرض مشروعك من قبل الادارة';
                        $this->parser->parse('addnewproject', $res);
                    //fe 7alet en ana msh d3amt 10 mshare3
                } else {
                    $res['msg'] = 'عفوا لايمكن اضافة مشروعك قبل ان تدعم  10 مشروعات على الاقل';
                    $this->parser->parse('addNewProject', $res);
                }
                //da fe 7alet en ana msh m3aya raseed kfaya
            } else {
                $res['balance'] = $person->getBalance();
                $res['msg'] = 'عفوا ليس لديك الرصيد الكافي لإضافة مشروع جديد رجاء تجديد الرصيد واضافة مشروعك';
                $this->parser->parse('addNewProject', $res);
            }

            //da fe 7alet en ana msh dost 3la zorar submit
        } else {
            include_once 'homePage.php';
            $home = new homePage();
            $home->index();
        }
    }

    public function send_delete_reason() {
        include_once 'admin.php';
        $admin = new Admin();
        $this->load->model('project_model');

        if (isset($_GET['submit'])) {
            $person_mail = $this->project_model->getProjectPerson($_GET['projectId']);
            $this->email->from('info@mennacharity.com', 'موقع مؤسسة منة العيون الخيرية');
            $this->email->to($person_mail->email);
            $this->email->subject('سبب رفض المشروع المقدم  على موقع مؤسسة نور العيون الخيرية');
            $this->email->message($_GET['reason']);
            $this->email->send();
            $admin->adminPanel();
        }
    }

}