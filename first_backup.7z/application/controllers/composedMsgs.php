<?php

class composedMsgs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        include_once 'admin.php';
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function composedMsgs_management() {
        $admin = new admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_subject('رسالة');
                $crud->set_theme('datatables');
                $crud->set_table('composedmsgs');

                $crud->display_as('title', 'عنوان الرسالة');
                $crud->display_as('body', 'موضوع الرسالة');

                $crud->add_action('ارسل الرسالة', '', '', 'ui-icon-image', array($this, 'send_msg'));

                $crud->required_fields('title','body');
                $crud->fields('title', 'body');


                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    function send_msg($primary_key, $row) {
        return site_url("composedMsgs/send/$primary_key");
    }

    public function send($msgId) {
        $this->load->model('composedMsgs_model');
        $this->load->model('Subscriber_model');
        $msg = $this->composedMsgs_model->getMsgById($msgId)->row();
        $subscribers = $this->Subscriber_model->allSubscribers()->result();
        
        foreach ($subscribers as $row) {
            $this->email->from('info@mennacharity.com', 'رسالة من موقع منة العيون الخيرية');
            $this->email->to($row->email);
            $this->email->subject($msg->title);
            $this->email->message($msg->body);
            $this->email->send();
        }
        $this->composedMsgs_management();
    }

}