<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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


                $data['title'] = 'Dashboard';
                $this->load->view('includes/head', $data);
                $this->load->view('includes/siderbar');
                $this->load->view('includes/header', $data);
                $this->load->view('index', $data);
                $this->load->view('includes/footer');
        }

        public function error_page(){
                $data = $this->general_info;
        
                $this->load->view('includes/head', $data);
                $this->load->view('404');
                $this->load->view('includes/footer');
        }

}