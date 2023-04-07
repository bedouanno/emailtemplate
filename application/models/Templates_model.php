<?php
class Templates_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function create_template($data_post){
        return $this->db->insert('etemp_templates',$data_post);
    }


    public function get_templates(){
        $query = $this->db->get('etemp_templates');
        return $query->result_array();

    }
}
