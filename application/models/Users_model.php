<?php
class Users_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function get_user_session($username = FALSE){
    
        if($username === FALSE){
            $query = $this->db->get('etemp_users');
            return $query->result_array();

        }  

        $query = $this->db->get_where('etemp_users', array('username' => $username));


        return $query->row_array();
    }

}
