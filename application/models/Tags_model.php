<?php
class Tags_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function create_tag($data_post){
        return $this->db->insert('etemp_tags',$data_post);
    }


    public function get_tags(){
        $query = $this->db->get('etemp_tags');
        return $query->result_array();

    }
}
