<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Lists extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Lists_model');
        $this->load->model('Home_model');
    }

    public function index($id = 0) {

        $id = (int) $id;
        $category = $this->Lists_model->get_base_category_by_id($id);
        
        if($category->is_show == 0) {
            return show_404();
        }
        
        if ($id == 0 || empty($category)) {
            redirect(base_url());
        }
        $data['category'] = $category;
        $data['all_sub_categories'] = $this->Lists_model->get_sub_categories_by_category_id($id);

        $this->_load_view_layout('list', $data);
    }

    public function save_list() {

        $post = $this->input->post();
        $list = isset($post['list']) ? $post['list'] : array();
        
        
        $title = $list['title'];
        if(empty($title)) {
            $response = array('status' => 'empty');
            echo json_encode($response);
            return;
        }
        
        if (empty($list)) {
            $response = array('status' => 'false');
            echo json_encode($response);
            return;
        }
        
        $category_id = isset($list['categoryID']) ? (int) $list['categoryID'] : 0;
        $data_list = array('title' => $title, 'category_id' => $category_id);

        $this->Lists_model->add_list($data_list);

        $response = array('status' => 'OK');
        echo json_encode($response);
        return;
    }

    public function get_list() {
        $post = $this->input->post();

        $category_id = isset($post['category_id']) ? (int) $post['category_id'] : 0;
        $lists = $this->Lists_model->get_lists_by_category($category_id);
        
        echo json_encode($lists);
        return;
    }

    public function menu_list($category_id) {
        $category_id = (int) $category_id; 
        
        $menu_category = $this->Lists_model->get_sub_categories_by_category_id($category_id);
        
        echo json_encode($menu_category);
        return;
    }
    
    private function _load_view_layout($view_name, $data = null) {
        $this->load->view('header');
        $this->load->view($view_name, $data);
        $this->load->view('footer');
    }
    
    public function page404() {
        $this->_load_view_layout('page404');
    }

}

