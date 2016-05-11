<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index() {
        
        $data['all_main_categories'] = $this->Home_model->get_all_main_categories();
        $data['all_sub_categories'] = $this->Home_model->get_all_sub_categories();
        
        $this->_load_view_layout('home',$data);
    }

    private function _load_view_layout($view_name, $data = null) {
        $this->load->view('header');
        $this->load->view($view_name,$data);
        $this->load->view('footer');
    }
    
    public function about() {
        $this->_load_view_layout('about');
    }
    
    public function contributors() {
        $this->_load_view_layout('contributors');
    }
    
    public function contact_us () {
        $this->_load_view_layout('contact_us');
    }
    
    public function join_us () {
        $this->_load_view_layout('join_us');
    }
    
    public function send_feedback() {
        $this->_load_view_layout('send_feedback');
    }
    
    public function terms() {
        $this->_load_view_layout('terms');
    }

}

