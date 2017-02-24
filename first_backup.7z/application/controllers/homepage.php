<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
class Homepage extends CI_Controller {
     
    
    public function __construct() {        
        parent::__construct(); 
        
    }
    
    public function index($msg = NULL) { 
        
    	$this->load->model('slider_model');
        $this->load->model('humancases_model');
        $this->load->model('homeblocks_model');
        $this->load->model('events_model');
        $this->load->model('visits_model');
        $this->load->model('banners_model');
        //include_once 'banners.php';
        //$banners = new banners();
        $data['banners'] = $this->callBanners();


        $data['slider'] = $this->slider_model->get_slider();
        $data['humanCases'] = $this->humancases_model->casesDetails();
        $data['homeBlocks'] = $this->homeblocks_model->homeBlocksDetails();
        $data['last'] = $this->events_model->last()->result('array');        
        $data['msg'] = $msg;
	
        

        $ip = $this->input->ip_address();
        if ($this->visits_model->search($ip)->num_rows() < 1) {
            $visit['ip'] = $ip;
            $visit['visitDate'] = date('Y-m-d');
            $this->visits_model->addNewVisit($visit);
        }         
        $this->parser->parse('index', $data);

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


    public function logout() {
        $this->session->sess_destroy();
        $this->index();
    }

}