<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxController extends CI_Controller {
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

    public function do_ajax_post() {
        // Handle the AJAX POST request
        if ($this->input->is_ajax_request()) {
            $data = $this->input->post(); // Retrieve POST data
            // Process the data and send response back
            $result = $this->category_model->create_category($data);
            
            // Send response back
            if ($result) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data processed successfully!',
                    'data' => $result
                );
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Data processing failed!',
                    'data' => null
                );
            }
            echo json_encode($response);
        } else {
            show_404(); // Return a 404 error if it's not an AJAX request
        }
    }


    public function do_create_tag() {
        // Handle the AJAX POST request
        if ($this->input->is_ajax_request()) {
            $data = $this->input->post(); // Retrieve POST data
            // Process the data and send response back
            $result = $this->tags_model->create_tag($data);
            
            // Send response back
            if ($result) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data processed successfully!',
                    'data' => $result
                );
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Data processing failed!',
                    'data' => null
                );
            }
            echo json_encode($response);
        } else {
            show_404(); // Return a 404 error if it's not an AJAX request
        }
    }

            public function get_ajax_category() {
                // Fetch data from the database
                $data = $this->category_model->get_category();

                echo json_encode($data, TRUE);


        }

          public function get_ajax_tag($id = NULL) {
                $data = $this->tags_model->get_tags_condition($id);

                $new_data = [];

                foreach($data as $d):
                    $new_data[] = $d['id_tag'];
                endforeach;


                // print_r($new_data);


                if(!empty($new_data)){
                $data2 = $this->tags_model->get_tags_template($new_data);
                
                }else{
                $data2 = $this->tags_model->get_tags();

                }





                echo json_encode($data2, TRUE);

                // $this->load->view('ajax/index', $data);


        }


        public function do_ajax_tags($id = NULL) {
        
        // Handle the AJAX POST request
        if ($this->input->is_ajax_request()) {
            $selectedValues = $this->input->post('selectedValues'); // Retrieve POST data
 
        foreach($selectedValues as $selectedValue):
            $data_post =  array(
                'id_template' => $id,
                'id_tag' => $selectedValue
            );
                // print_r($post_array);
              $result =  $this->templates_model->add_tags_template($data_post);

        endforeach;


            
            // Send response back
            if ($result) {
                $response = array(
                    'status' => 'success',
                    'message' => 'Data processed successfully!',
                    'data' => $result
                );
            } else {
                $response = array(
                    'status' => 'error',
                    'message' => 'Data processing failed!',
                    'data' => null
                );
            }
            echo json_encode($response);
        } else {
            show_404(); // Return a 404 error if it's not an AJAX request
        }
    }


        public function get_tags_template($id = NULL) {


           $data = $this->tags_model->get_template_tags($id);


   
            $new_data = [];

            foreach($data as $d):
                $new_data[] = $d['id_tag'];
            endforeach;

            $data2 = $this->tags_model->get_temp_tags($new_data);
            
            echo json_encode($data2, TRUE);


        }


        public function delete_tag_ajax($temp_id =  NULL, $id = NULL){
                $this->session->set_flashdata('msg', 'Deleted Success');
                $array_post = array(
                    'id_template' => $temp_id,
                    'id_tag' => $id

                );
            
                // $this->db->where('etemp_templates_tags', $array_post);
                $this->db->delete('etemp_templates_tags', $array_post); 


            // Check if the DELETE query was successful
            if ($this->db->affected_rows() > 0) {
            // Return a success response to the front-end
                $this->session->set_flashdata('msg', 'Deleted Success');

                redirect('email-templates/view/'.$temp_id);
            // $response = array('status' => 'success', 'message' => 'Record deleted successfully');
            } else {
            // Return an error response to the front-end
            // $response = array('status' => 'error', 'message' => 'Failed to delete record');
            }

        }
}
?>
