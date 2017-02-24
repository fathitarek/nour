<?php

class membershiprenew extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include_once 'admin.php';
        $this->load->model('membershiprenew_model');
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function membershiprenew_management() {
        $admin = new admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_subject('تجديد اشتراك');
                $crud->set_theme('datatables');
                $crud->set_table('membershiprenew');

                $crud->display_as('renewBalanceNo', 'رقم كارت الشحن');
                $crud->display_as('person_id', 'اسم العضو');
                $crud->display_as('newbalance', 'الرصيد الجديد');

                $crud->set_relation('person_id', 'person', 'name');
                $crud->columns('renewBalanceNo', 'person_id');

                $crud->add_action('جدد الإشتراك', '', '', 'ui-icon-image', array($this, 'balanceRenew'));
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    public function balanceRenew($primary_key, $posted_array) {
        return site_url("membershiprenew/renewform/" . $posted_array->person_id . "/" . $posted_array->id);
    }

    public function renewform($person_id, $renew_id) {
        $this->load->library("parser");
        $data['person_id'] = $person_id;
        $data['id'] = $renew_id;
        $this->parser->parse('admin/balanceRenew', $data);
    }

    public function renewbalance($balanceNo = NULL) {
        if (empty($balanceNo)) {
            echo "برجاء ادخال رقم كارت الشحن";
        } else {
            $data['person_id'] = $this->session->userdata('memberId');
            $data['renewBalanceNo'] = $balanceNo;
            $this->membershiprenew_model->renew($data);
            echo "لقد تم تسجيل رقم كارت الشحن بنجاح";
        }
    }

}

?>