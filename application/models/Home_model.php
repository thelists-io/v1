<?php

Class Home_model extends CI_Model {
    
    public function get_all_main_categories() {
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('parent_id', 0);
        
        return $this->db->get()->result();
    }
    
    public function get_all_sub_categories() {
        $this->db->select('*');
        $this->db->from('categories');
	$this->db->where('is_show', 1);
        $this->db->where_not_in('parent_id', 0);
        
        return $this->db->get()->result();
    }
    
}

