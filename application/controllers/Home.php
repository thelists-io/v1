<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Email_model');
    }

    public function index() {

        $data['all_main_categories'] = $this->Home_model->get_all_main_categories();
        $data['all_sub_categories'] = $this->Home_model->get_all_sub_categories();

        $this->_load_view_layout('home', $data);
    }

    private function _load_view_layout($view_name, $data = null) {
        $this->load->view('header');
        $this->load->view($view_name, $data);
        $this->load->view('footer');
    }

    public function about() {
        $this->_load_view_layout('about');
    }

    public function contributors() {
        $this->_load_view_layout('contributors');
    }

    public function contact_us() {
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        
        
        
        $post = $this->input->post();

        $name = isset($post['name']) ? trim($post['name']) : '';
        $email = isset($post['email']) ? trim($post['email']) : '';
        $message = isset($post['message']) ? $post['message'] : '';
        
        if (!empty($post)) {
            
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('message', 'Message', 'trim|required');

           if ($this->form_validation->run() == TRUE) {
                $this->Email_model->sendEmail($email, $name, $message);
                $response = array('status' => 'success', 'message' => 'Your message was successfull sent!');
                echo json_encode($response);
                return;
            } else {
                $errors = $this->form_validation->error_array();
                $response = array('status' => 'error', 'errors' => $errors);
                echo json_encode($response);
                return;
            }
        }

        $this->_load_view_layout('contact_us');
    }

    public function join_us() {

        $post = $this->input->post();

        $this->_load_view_layout('join_us');
    }

    public function send_feedback() {
        $this->_load_view_layout('send_feedback');
    }

    public function terms() {
        $this->_load_view_layout('terms');
    }

}

