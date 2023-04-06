<?php

Class Login extends CI_Controller {


    var $general_info;
    function __construct(){
            parent::__construct(); // needed when adding a constructor to a controller
            new DateTime();
    
          
            $this->general_info = array(
                'sitename' => 'Email Templates',
                'robots' => 'noindex,nofollow',
                'current_datetime' => date('y-m-d H:i:s')
            );
        } 


// Check for user login process
public function index() {
    $data = $this->general_info;
     $data['title'] = 'Login';

    $this->load->helper("ipblocker_helper");
    block_ip();

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == FALSE) {

        if(isset($this->session->userdata['loggedin'])){
                redirect('home');
            }else{
                $this->load->view('includes/head', $data);
                $this->load->view('login');
                $this->load->view('includes/footer');
            }
        } else {
        $data_login = array(
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password')
        );
        $result = $this->login_model->login($data_login);
        if ($result == TRUE) {
            $username = $this->input->post('username');
            $result = $this->login_model->read_user_information($username);
            if ($result != false) {
                $session_data = array(
                    'username' => $result[0]->username,
                    );

                // Add user data in session
                $this->session->set_userdata('loggedin', $session_data);
                redirect('home');
            }
        } else {
            $data["errors"] = array('error_message' => 'Invalid Username or Password');
            $this->load->view('includes/head', $data );
            $this->load->view('login');
            $this->load->view('includes/footer');
        }
    }
}

// Logout from admin page
public function logout($page = 'logout') {
    $this->load->helper("ipblocker_helper");
    block_ip();
    $data['sitename'] = 'PluginTracker';
    // Removing session data
    $sess_array = array('username' => '');
    $this->session->unset_userdata('loggedin', $sess_array);
        // $data['message_display'] = 'Successfully Logout';

        redirect('login');
 
}

}
?>
