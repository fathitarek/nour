<?php

class Support extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include_once 'admin.php';
        include_once 'person.php';
        include_once 'humancases.php';
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function Support_management() {
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('casesupport');

                $crud->display_as('case_id', 'الحالة');
                $crud->display_as('person_id', 'الشخص المتبرع للحالة');
                $crud->display_as('amountOfMony', 'مبلغ التبرع');

                $crud->set_relation('case_id', 'humancases', 'name');
                $crud->set_relation('person_id', 'person', 'name');


                $crud->columns('case_id', 'person_id', 'amountOfMony');
                $crud->unset_add();
                $crud->unset_delete();
                $crud->unset_edit();
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function supportProject($projectId) {
        $this->load->model('projectSupport_model');
        $this->load->model('person_model');
        $this->load->model('project_model');
        include_once 'project.php';
        $project = new project();
        $support_previous = $this->projectSupport_model->person_support($this->session->userdata('memberId'), $projectId);
        if ($this->session->userdata('balance') >= 1) {
            if ($support_previous->num_rows() == 1) {
                $this->projectSupport_model->updateSupport($projectId, $this->session->userdata('memberId'));
                $this->person_model->support($this->session->userdata('memberId'));
                $memberRow = $this->person_model->getMemberById($this->session->userdata('memberId'));


                //awel 7aga hgeeb el project details!!!
                $pdetails = $this->project_model->projectDetails($projectId)->row();
                $reach['reached_balance'] = $pdetails->reached_balance + 1;
                $this->project_model->updateProject($reach, $projectId);

                $project->getProject($projectId);
            } else {
                $data['project_id'] = $projectId;
                $data['person_id'] = $this->session->userdata('memberId');
                $data['amountOfMony'] = 1;
                $this->projectSupport_model->addNewProjectSupport($data);
                $memberRow = $this->person_model->getMemberById($this->session->userdata('memberId'));

                $pdetails = $this->project_model->projectDetails($projectId)->row();
                $reach['reached_balance'] = $pdetails->reached_balance + 1;
                $this->project_model->updateProject($reach, $projectId);

                $project->getProject($projectId);
            }
        } else {
            include_once 'homePage.php';
            $home = new homePage();
            $home->index("عفوا ليس لديك رصيد كافي لتدعيم هذه الحالة برجاء تجديد الرصيد واعادة المحاولة");
        }
    }

    public function caseSupport($caseId) {
        if (isset($_GET['submit'])) {
            $this->load->model('caseSupport_model');
            $this->load->model('person_model');
            unset($_GET['submit']);
            $support_value = $_GET['supportValue'];
            $caseId = $_GET['caseId'];
            $person = new person();
            $case = new humancases();
            $balance = $person->getBalance();
            if ($balance >= $support_value) {
                $support_previous = $this->caseSupport_model->person_support($this->session->userdata('memberId'), $caseId);
                if ($support_previous->num_rows() == 1) {
                    $this->caseSupport_model->updateSupport($caseId, $this->session->userdata('memberId'), $support_value);
                    $this->person_model->support($this->session->userdata('memberId'), $support_value);
                    $case->caseDisplay($caseId);
                    //if support_previous != 1
                } else {
                    $data['case_id'] = $caseId;
                    $data['person_id'] = $this->session->userdata('memberId');
                    $data['amountOfMony'] = $support_value;
                    $this->caseSupport_model->addNewcaseSupport($data);
                    $this->person_model->support($this->session->userdata('memberId'), $support_value);
                    $case->caseDisplay($caseId);
                }
            } else {
                include_once 'homePage.php';
                $home = new homePage();
                $home->index("عفوا ليس لديك رصيد كافي لتدعيم هذه الحالة برجاء تجديد الرصيد واعادة المحاولة");
            }
        } else {
            include_once 'homePage.php';
            $home = new homePage();
            $home->index();
        }
    }

}
