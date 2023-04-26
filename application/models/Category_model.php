<?php
class Category_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function create_category($data_post){
        return $this->db->insert('etemp_category',$data_post);
    }


    public function get_category(){
        $query = $this->db->get('etemp_category');
        return $query->result_array();

    }

    public function get_category_id($id = FALSE){
        $query = $this->db->get_where('etemp_category', array('id' => $id));
        return $query->row_array();
    }
}
