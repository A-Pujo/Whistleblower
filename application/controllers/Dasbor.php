<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dasbor extends MY_Controller
{
    public function index()
    {
        $data['title'] = 'Beranda - Wbs BEM PKN STAN';

        $data['UserData'] = $this->UserData;

        $this->load->view('Layout/Header', $data);
        $this->load->view('Client/Components/Nav');
        $this->load->view('Client/Pages/Home');
        $this->load->view('Layout/Footer', $data);
    }
}
