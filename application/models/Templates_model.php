<?php
class Templates_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function create_template($data_post){
        return $this->db->insert('etemp_templates',$data_post);
    }


    public function get_templates(){

        $this->db->select('*');
        $this->db->from('etemp_category');
        $this->db->join('etemp_templates', 'etemp_category.id = etemp_templates.template_category');
        $query = $this->db->get();
        // $query = $this->db->get();

        return $query->result_array();
    }


    public function get_template($id = FALSE){
        if($id === FALSE){
            $query = $this->db->get('etemp_templates');
            return $query->result_array();
        }

        $this->db->select('*');
        $this->db->from('etemp_category');
       

        $this->db->join('etemp_templates', 'etemp_templates.template_category = etemp_category.id');
        $this->db->where('etemp_templates.id', $id); // Add a condition to match the ID
        $query = $this->db->get(); // Execute the query
        return $query->row_array();

        // $query = $this->db->get_where('etemp_templates', array('id' => $id));
        
    }

    public function get_template_w_tag($new_data = FALSE){
        $this->db->select('*');
        // $this->db->from('etemp_category');
        $this->db->where_in('etemp_templates.id', $new_data);
        $this->db->join('etemp_category', 'etemp_category.id = etemp_templates.template_category');

        $query = $this->db->get('etemp_templates');    
        return $query->result_array();

    }


    public function update_template($id = NULL, $data = NULL) {
        $ps = $data;
        $this->db->set($ps);
        $this->db->where('etemp_templates.id', $id);
        $this->db->update('etemp_templates');
        $result =  $this->db->affected_rows(); 
        return $result;
     }

    public function add_tags_template($data_post){
        return $this->db->insert('etemp_templates_tags',$data_post);
    }


}
