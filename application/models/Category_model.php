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
}
