<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Crud2_model', 'CRUD');
        $this->load->helper('form');
    }

    public function index($s = 0)
    {
        $data['title'] = 'Daftar Laporan - Wbs BEM PKN STAN';
        $data['UserData'] = $this->UserData;

        $q = $this->input->get('q', TRUE);

        if (!empty($this->UserData)) $filter = ($this->UserData->kementerian != 3) ? array('visibilitas' => '1') : null;
        else $filter = array('visibilitas' => '1');

        $order_by = 'DESC';
        $dataRows = $this->CRUD->get_rows('data_laporan', $filter, $q);
        $uri_segment = 3;
        $config['base_url'] = base_url() . 'daftar-laporan';//url to set pagination
        $config['reuse_query_string'] = TRUE;

        $data['dataLaporan'] = $this->CRUD->filter_get('data_laporan', $s, $filter, $order_by, $q);                
        
        //pagination !-fix the active page
        $this->load->library('pagination');
        
        $config['total_rows'] = $dataRows;
        $config['per_page'] = 6;
        $config["uri_segment"] = $uri_segment;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<nav class="pagging text-center"><ul class="pagination pagination-sm justify-content-center">';
        $config['full_tag_close']   = '</ul></nav>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
    
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links(); //Links of pages

        $this->load->view('Layout/Header', $data);
        $this->load->view('Client/Components/Nav');
        $this->load->view('Client/Pages/Kelola', $data);
        $this->load->view('Layout/Footer', $data);
    }

    public function p($id)
    {
        $data['title'] = 'Single Page - Wbs BEM PKN STAN';
        if(!empty($this->UserData)) $data['UserData'] = $this->UserData;

        $data['laporan'] = $this->CRUD->get1('data_laporan', array('id' => $id));

        $this->load->view('Layout/Header', $data);
        $this->load->view('Client/Components/Nav');
        $this->load->view('Client/Pages/P', $data);
        $this->load->view('Layout/Footer', $data);
    }

    public function update($id)
    {
        if ($this->UserData->kementerian != 3) {
            redirect(base_url());
        }

        $update = array(
            'status' => $this->input->post('status', true),
            'visibilitas' => $this->input->post('visibilitas', true),
            'updated_at' => date("Y-m-d")
        );
        
        $this->CRUD->update1('data_laporan', $update, array('id' => $id));

        redirect('daftar-laporan');
    }
}
