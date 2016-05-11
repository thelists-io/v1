<?php

Class Lists_model extends CI_Model {
    
    public function get_base_category_by_id($id) {
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('id', $id);
        $this->db->where_not_in('parent_id', 0);
        
        return $this->db->get()->row();
    }
    
    public function add_list($data) {
        $this->db->insert('lists', $data);
        return;
    }
    
    public function get_lists_by_category($category_id) {
        $this->db->select('*');
        $this->db->from('lists');
        $this->db->where('category_id', $category_id);
        $this->db->where('active', 1);
        $this->db->order_by('order', 'desc');

        return $this->db->get()->result();
    }

    public function get_sub_categories_by_category_id($id) {
        $this->db->select('*');
        $this->db->from('categories');
	$this->db->where('is_active', 1);
        $this->db->where('parent_id', $id);
        
        return $this->db->get()->result();
    }
    
}


