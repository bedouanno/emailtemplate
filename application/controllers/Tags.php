<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends CI_Controller {

        var $general_info;

        function __construct(){
                parent::__construct(); // needed when adding a constructor to a controller
                new DateTime();

                if(empty($this->session->userdata('loggedin'))){
                        $username_session = "";
                }else{
                        $username_session = $this->users_model->get_user_session($this->session->userdata('loggedin')['username']);
                }

                $this->general_info = array(
                        'sitename' => 'Email Templates',
                        'robots' => 'noindex,nofollow',
                        'user_info' => $username_session,
                        'current_datetime' => date('y-m-d H:i:s')
                );
            } 

        public function session_users(){
                if(!isset($this->session->userdata['loggedin']) && !isset($_SESSION["loggedin"])){ 
                        redirect('/logout');
                }
        }

        public function index(){
                $this->session_users();
                $data = $this->general_info;
                $data['title'] = 'Tags';


                $data['tags'] = $this->tags_model->get_tags();

                $tagname = $this->input->post('tag_name');
                $created_by = $data['user_info']['id'];
                
                
                // exit;
                $this->form_validation->set_rules('tag_name','Tag Name','required|is_unique[etemp_tags.tag_name]');
                $this->form_validation->set_error_delimiters('', '');

                if($this->form_validation->run() === FALSE){
                        $this->load->view('includes/head', $data);
                        $this->load->view('includes/siderbar');
                        $this->load->view('includes/header', $data);
                        $this->load->view('tags/index', $data);
                        $this->load->view('includes/footer');
                }else{

                        $data_post = array(
                                'tag_name' => $tagname,
                                'created_by' => $created_by
                        );

                        $this->tags_model->create_tag($data_post);
                        $this->session->set_flashdata('msg', 'Added Successfully!');
                        redirect('tags');
                }
        }
}