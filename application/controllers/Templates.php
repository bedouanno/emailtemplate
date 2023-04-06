<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends CI_Controller {

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
                $data['title'] = 'List of Email Templates';

                $this->load->view('includes/head', $data);
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('email_templates/index', $data);
                $this->load->view('includes/footer');
       
        }

        public function create(){
                $this->session_users();
                $data = $this->general_info;
                $data['title'] = 'Create Email Templates';
                $created_by = $data['user_info']['id'];

                $data['list_category'] = $this->category_model->get_category();

                $this->form_validation->set_rules('category_name','Category Name','required|is_unique[etemp_category.category_name]');
                $this->form_validation->set_error_delimiters('', '');


                if($this->form_validation->run() === FALSE){
                        $this->load->view('includes/head', $data);
                        $this->load->view('includes/siderbar');
                        $this->load->view('includes/header', $data);
                        $this->load->view('email_templates/create', $data);
                        $this->load->view('includes/footer');
                }else{
                
                        if($this->input->post('submit_category')):
                                $category_name = $this->input->post('category_name');


                                $data_post = array(
                                'category_name' => $category_name
                                );

                                $this->category_model->create_category($data_post);
                                $this->session->set_flashdata('msg', 'Added Successfully!');
                                redirect('email-templates/create');
                        endif;

                
                }

        }
}