<?php

class Newsletter_subscriber extends CI_Controller {

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function test() {
        echo "Done";
    }

    public function add() {
        include_once 'homePage.php';
        $this->load->model('Subscriber_model');
        $home = new homePage();
        if ($this->input->post('submit')) {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('email', 'البريد الإلكتروني', 'required|valid_email');

            if ($this->form_validation->run() == TRUE) {
                include_once 'homePage.php';
                $if_Exist = $this->Subscriber_model->search($_POST['email']);
                if ($if_Exist == 1) {
                    $data['msg'] = "هذا البريد مسجل من قبل برجاء التأكد من ادخال البريد بشكل سليم";
                    $home->index();
                } else {
                    unset($_POST['submit']);
                    $this->Subscriber_model->addSubscriber($_POST);
                    $data['msg'] = "شكرا لك قد تم تسجيل البريد الالكتروني الخاص بك";
                    $home->index();
                }
            } else {
                $home->index();
            }
        } else {
            $home->index();
        }
    }

    public function addSubscriber($email = NULL) {
        if (empty($email)) {
            echo "برجاء ادخال البريد الالكتروني الخاص بك";
        } else {
            $this->load->model('Subscriber_model');
            $if_Exist = $this->Subscriber_model->search($email);
            if ($if_Exist == 1) {
                echo "هذا البريد مسجل من قبل برجاء التأكد من ادخال البريد بشكل سليم";
            } else {
                $data['email'] = $email;
                $this->Subscriber_model->addSubscriber($data);
                echo "شكرا لك قد تم تسجيل البريد الالكتروني الخاص بك";
            }
        }
    }

}
