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


    public function get_tag($id = NULL){
        $this->db->where('etemp_tags.id', $id);
        $query = $this->db->get('etemp_tags');
        return $query->row_array();

    }

    public function get_tags_template($data_new = 0){
        $this->db->where_not_in('etemp_tags.id', $data_new);
        $query = $this->db->get('etemp_tags');    
        return $query->result_array();
    }


    public function get_tags_condition($id = NULL){
        $this->db->where('etemp_templates_tags.id_template', $id);
        $query = $this->db->get('etemp_templates_tags');
        return $query->result_array();

    }

    public function get_template_tags($id = 0){
        $this->db->where('etemp_templates_tags.id_template', $id);
        $query = $this->db->get('etemp_templates_tags');
        return $query->result_array();

    }

    public function get_template_tags_view($id = NULL){

        $this->db->where('etemp_templates_tags.id_tag', $id);
        $query = $this->db->get('etemp_templates_tags');
        return $query->result_array();

    }

    public function get_temp_tags($data_new = NULL){
        $this->db->where_in('etemp_tags.id', $data_new);
        $query = $this->db->get('etemp_tags');    
        return $query->result_array();
    }


    public function get_temp_count($id = NULL) {
        return $this->db->where('id_tag', $id)->from("etemp_templates_tags")->count_all_results();
     }



}
