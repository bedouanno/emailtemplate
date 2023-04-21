<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewer extends CI_Controller {

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
      
                $data = $this->general_info;
                $data['title'] = 'Home';

                $data['list_templates'] = $this->templates_model->get_templates();
                
                $this->load->view('includes/head', $data);
      
                $this->load->view('public_view/index', $data);
                $this->load->view('includes/footer');
       
        }


        public function view_tags(){
      
                $data = $this->general_info;
                $data['title'] = 'Tags';

                $data['tags'] = $this->tags_model->get_tags();
     
                
                $this->load->view('includes/head', $data);
      
                $this->load->view('public_view/view_tags', $data);
                $this->load->view('includes/footer');
       
        }

        public function view_tag($id = NULL){
                $data = $this->general_info;

                $tag = $this->tags_model->get_tag($id);

                $data['title'] = $tag['tag_name'];


                $this->tags_model->get_template_tags_view($id);

                // print_r($this->tags_model->get_template_tags_view($id));

                $temp = $this->tags_model->get_template_tags_view($id);

                $new_data = [];

                foreach($temp as $tmp):

                    $new_data[] = $tmp['id_template'];

                endforeach;

                if(!empty($new_data)){
                       $data['list_templates'] = $this->templates_model->get_template_w_tag($new_data);
                
                }else{
                        $data['list_templates'] = NULL;

                }

     
                $this->load->view('includes/head', $data);
                $this->load->view('public_view/view_tag', $data);
                $this->load->view('includes/footer');

        }

        public function search(){
                $data = $this->general_info;
                $data['title'] = "Search";


                $this->load->view('includes/head', $data);
                $this->load->view('public_view/search', $data);
                $this->load->view('includes/footer');
        
        }


}