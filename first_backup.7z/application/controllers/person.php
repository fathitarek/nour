<?php

class person extends CI_Controller {

    public function __construct() {        
        parent::__construct();
        $this->load->library('email');
        include_once 'admin.php';
        $this->load->library('parser');
        $this->load->model('person_model');
        $this->load->model('Subscriber_model');        
    }

    public function index() {
        include_once 'homePage.php';
        $home = new homePage();
        $home->index();
    }

    public function person_management() {
        include_once 'admin.php';
        $admin = new Admin();
        if ($admin->checkLogin() == 1) {
            try {
                $crud = new grocery_CRUD();
                $crud->set_theme('datatables');
                $crud->set_table('person');
                $crud->set_subject('عضو');

                $crud->display_as('name', 'الاسم');
                $crud->display_as('birthdate', 'تاريخ الميلاد');
                $crud->display_as('address', 'العنوان');
                $crud->display_as('mob1', 'موبايل 1');
                $crud->display_as('mob2', 'موبايل 2');
                $crud->display_as('active', 'نشط');

                $crud->display_as('job', 'الوظيفة');
                $crud->display_as('ssn', 'رقم البطاقة');
                $crud->display_as('balance', 'قيمة الإشتراك');
                $crud->display_as('email', 'البريدالالكتروني');

                $crud->columns('name', 'active', 'email', 'job', 'birthdate','ssn');
                $crud->required_fields('name','birthdate','address','mob1','active','job','balance','email');
                
                $crud->callback_after_insert(array($this, 'generatePass'));
                
                $crud->unset_add_fields('active');
                $crud->unset_fields('username', 'password');
                $crud->set_field_upload('image');
                $crud->unset_delete();
                $this->load->view('admin/example.php', $crud->render());
            } catch (Exception $e) {
                show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
            }
        } else {
            $admin->index();
        }
    }

    function generatePass($post_array,$primary_key){
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
         }
          $data['password'] = implode($pass); //turn the array into a string
          if($this->person_model->getSimilarUserPass($post_array['email'],$data['password']) ==1){
                $this->generatePass($post_array,$primary_key);
          }else{
                $this->person_model->update_person($primary_key,$data);
                $this->email->from('info@mennacharity.com', 'موقع منة العيون الخيرية');
                $this->email->to($post_array['email']);
                $this->email->subject('رمز الدخول الخاص بك على موقع مؤسسة منة العيون الخيرية');
                $this->email->message('عزيزي عضو جمعية منة العيون الخيرية رمز الدخول الخاص بك على الموقع هو :	'.$data['password']);
                $this->email->send();
          }
          
    }


    public function member_login() {
        include 'homepage.php';
        $home = new homepage();
        if (isset($_GET['login'])) {
                $accountInfo = $this->person_model->member_login($_GET['email'], $_GET['password']);
                if ($accountInfo) {
                    $data['member_name'] = $accountInfo->name;
                    $data['image'] = $accountInfo->image;
                    $data['balance'] = $accountInfo->balance;
                    $data['username'] = $accountInfo->username;
                    $data['memberId'] = $accountInfo->id;
                    $data['balance'] = $accountInfo->balance;
                    $this->session->set_userdata($data);
                    $msg = "تم تسجيل الدخول بنجاح";
                    $home->index($msg);
                } else {
                    $msg = "لم يتم تسجيل الدخول من فضلك تأكد من بياناتك";
                    $home->index($msg);
                }
            
        }
    }

    public function addMemberForm() {
        $this->load->model('team_model');
        $res['team'] = $this->team_model->getTeam()->result();
        $this->parser->parse('addMemberForm', $res);
    }

    public function recordMember() {
        $this->load->model('team_model');
        $res['team'] = $this->team_model->getTeam()->result();
        if(isset($_GET['submit'])){
            if ($this->person_model->getSimilar(array('mob1' => $_GET['mob1'])) >= 1 ||
                    $this->person_model->getSimilar(array('ssn' => $_GET['ssn'])) >= 1 ||
                    $this->person_model->getSimilar(array('email' => $_GET['email'])) >= 1 ||
                    $this->person_model->getSimilarUserPass($_GET['username'], $_GET['password']) >= 1) {
                $res['msg'] = "هذه البيانات مسجلة من قبل برجاء اعادة كتابة البيانات بشكل صحيح";
            } else {                
                if ($_GET['subscribe'] == 1) {
                    if ($this->Subscriber_model->search($_GET['email']) != 1) {
                        $data['email'] = $_GET['email'];
                        $this->Subscriber_model->addSubscriber($data);
                    }
                }
                unset($_GET['subscribe']);
                unset($_GET['submit']);
                unset($_GET['repassword']);
                $this->person_model->insertMember($_GET);
                $res['msg'] = "تم اضافة البيانات بنجاح يرجى الانتظار حتى يتم تفعيل عضويتك من قبل الإدارة";
            }
            }else{
	            $this->parser->parse('addMemberForm', $res);
            }
            $this->parser->parse('addMemberForm', $res);
            
    }

    public function rememberPasswordForm() {
        $this->load->model('team_model');
        $res['team'] = $this->team_model->getTeam()->result();
        $this->parser->parse('rememberPasswordForm', $res);
    }

    public function remember() {
        $member = $this->person_model->getMemberByEmail($_POST['rememberPassword']);
        if ($member->num_rows() > 0) {
            $this->load->library('email');
            $this->email->from('info@mennacharity.com', 'مدير الموقع');
            $this->email->to($member->row()->email);

            $this->email->subject('استعادة رمز المرور الخاص بك على موقع مؤسسة منة العيون الخيرية');
            $this->email->message('رمز المرور الخاص بك هو : ' . $member->row()->password . '');
            $this->email->send();
            $res['msg'] = "تم ارسال رمز المرور الي البريد الإلكتروني الخاص بك الان برجاء التحقق من الرسائل الجديدة";
        } else {
            $res['msg'] = "عفوا هذا البريد غير مسجل برجاء التأكد من البريد  الإلكتروني الخاص بك";
        }
        $this->parser->parse('rememberPasswordForm', $res);
    }

    public function rememberPassword($email) {
        $member = $this->person_model->getMemberByEmail($email);
        if ($member->num_rows() > 0) {
            $this->load->library('email');
            $this->email->from('info@mennacharity.com', 'مدير الموقع');
            $this->email->to($member->row()->email);
            $this->email->subject('استعادة رمز المرور الخاص بك على موقع مؤسسة منة العيون الخيرية');
            $this->email->message('رمز المرور الخاص بك هو : ' . $member->row()->password . '');
            $this->email->send();
            echo "تم ارسال رمز المرور الي البريد الإلكتروني الخاص بك الان برجاء التحقق من الرسائل الجديدة";
        } else {
            echo "عفوا هذا البريد غير مسجل برجاء التأكد من البريد الإلكتروني الخاص بك";
        }        
    }

    public function updatePersonBalance() {
        if (isset($_GET['submit'])) {
            $this->load->model('person_model');
            $this->load->model('membershiprenew_model');
            $this->load->library('parser');
            $this->person_model->updatePersonBalance($_GET['person_id'], $_GET['newbalance']);
            $this->membershiprenew_model->removeRenew($_GET['id']);
            $admin = new Admin();
            $admin->adminPanel();
        } else {
            $admin = new Admin();
            $admin->adminPanel();
        }
    }

    public function getBalance() {
        if ($this->session->userdata('memberId') != NULL) {
            return $this->person_model->getMemberById($this->session->userdata('memberId'))->balance;
        }
    }
    
    
    
    public function addBanner() {
    
        if (isset($_GET['submit'])) {                    
            if ($this->getBalance() > 0) {
                    $con = array('upload_path'=>base_url().'assets/uploads/files/','allowed_types'=>'gif|jpg|png');                            
                    $this->load->library('upload',$con);
                    $this->upload->do_upload('image');
                    $imageDetails = $this->upload->data('file_name');
                    $_GET['image'] =  $imageDetails['file_name'];
                    $this->load->model('banners_model');                                                                               
                    $_GET['person_id'] = $this->session->userdata('memberId');
                    
                    unset($_GET['submit']);
                    $this->banners_model->addBanner($_GET);
                    $this->addBannerForm();
                } else {
                    $this->addBannerForm();
                }
            } else {
                include_once 'homePage.php';
                $home = new homePage();
                $home->index("عفوا ليس لديك رصيد كافي");
            }
    }
    
    
    public function addbannerform() {
        $person = new person();
        $this->load->helper('form');
        if ($this->session->userdata('memberId') != NULL) {
            include_once 'project.php';
            $project = new project();
            $data['balance'] = $person->getBalance();
            $data['team'] = $project->getTeam();
            $this->parser->parse('addBannerForm', $data);
        } else {
            $this->index();
        }
    }
    
    

}

?>