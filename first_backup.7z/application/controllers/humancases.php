<?php

class HumanCases extends CI_Controller {

    public function __construct() {
        include_once 'admin.php';
        include_once 'project.php';
        parent::__construct();
        include_once 'person.php';
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function humancases_management() {
        $admin = new admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_subject('حالة انسانية');
                $crud->set_theme('datatables');
                $crud->set_table('humancases');

                $crud->display_as('name', 'الاسم');
                $crud->display_as('title', 'عنوان الحالة');
                $crud->display_as('age', 'السن');
                $crud->display_as('image', 'الصورة');
                $crud->display_as('desc', 'وصف الحالة');
                $crud->display_as('phoneNo', 'رقم للتواصل مع الحالة');

                $crud->set_field_upload('image');
                $crud->columns('name', 'age', 'desc', 'phoneNo');
                $crud->required_fields('name', 'age', 'image', 'desc', 'phoneNo', 'title');
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function caseDisplay($id = NULL) {
        if (isset($id)) {
            $this->load->model('settings_model');
            $this->load->library('parser');
            $this->load->model('humancases_model');
            $project = new project();
            $data['case'] = $this->humancases_model->getCaseDetails($id);
            $person = new person();
            $data['balance'] = $person->getBalance();
            $data['team'] = $project->getTeam();
            if ($data['balance'] > 0) {
                //$data['support'] = "<a href=" . base_url() . "support/caseSupport/$id class='btn btn-warning'>دعم هذه الحالة</a>";
                $data['support'] = ""
                        . "<form method='get' action=".base_url()."support/caseSupport>"
                        ."<input type=number name='supportValue' min='1' max='".$data['balance']."' placeholder='ادخل مبلغ التبرع' class='support-input'/>"
                        ."<input type='hidden' name='caseId' value=".$id." />"
                        ."<input type='submit' value='دعم هذه الحالة' name='submit' class='btn-warning support-btn' />"
                        . "</form> ";
            } else {
                $data['support'] = "";
            }
            $data['settings'] = $this->settings_model->getSiteSettings()->result();
            $this->parser->parse('showCase', $data);
        } else {
            include_once 'homePage.php';
            $home = new homePage();
            $home->index();
        }
    }

    public function cases_render() {

        $this->load->model('humancases_model');
        $this->load->model('settings_model');
        $project = new project();
        $person = new person();
        $data['team'] = $project->getTeam();
        $data['data'] = $this->humancases_model->casesDetails();
        $data['balance'] = $person->getBalance();
        $data['settings'] = $this->settings_model->getSiteSettings()->result();
        $this->parser->parse('projects.php', $data);
    }

}
