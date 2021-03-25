<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        /* Load Model and Helper */
        $this->load->helper('login');
        $this->load->model('User_model', 'USER');
        //isLoggedOut();

        /* Get Userdata */
        $this->UserData = $this->USER->readFirst([
            'id' => $this->session->userdata('user_data')['id'],
            'email' => $this->session->userdata('user_data')['email']
        ]);
    }
}
