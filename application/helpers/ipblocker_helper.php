<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



function block_ip(){
    // Allowed IPs 
    $allowIP = array("127.0.0.1", "116.89.246.48", "112.199.52.250", "49.148.242.151"); 

    if (!in_array ($_SERVER['REMOTE_ADDR'], $allowIP)) { 
        // redirect('/');
        echo "<div style='display: block; color: red; font-size: 50px; text-align: center'>Restricted Area!<br> Get Out!</div>
        
        <img src='".base_url()."/assetsv2/images/213.jpg' alt='image' style='margin: 0 auto; display: block'>";
        exit;
    }
        
}

