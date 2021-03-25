<?php

use phpDocumentor\Reflection\Types\False_;
use phpDocumentor\Reflection\Types\True_;

defined('BASEPATH') or exit('No direct script access allowed');

class Unggah extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Crud2_model', 'CRUD');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Unggah Laporan - Wbs BEM PKN STAN';
        $data['UserData'] = $this->UserData;

        $data['randNum1'] = mt_rand(1, 20);
        $data['randNum2'] = mt_rand(1, 20);
        
        $bgCaptcha = array('#3c5782', '#3c827d', '#76823c', 'blue', 'magenta', '#632937', '#195e5c', '#6e6567', '#248f37');
        $dotSize = array('200px', '70px', '234px', '188px', '270px', '100', '332px', '100px');
        $data['bgCaptcha'] = $bgCaptcha[mt_rand(0,8)];
        $data['dotSize'] = $dotSize[mt_rand(0,7)];

        $formConfig = array(
            array(
                'field' => 'judul',
                'label' => 'Objek Laporan',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Kolom <b>%s</b> belum kamu isi <br>'
                )
            ),
            array(
                'field' => 'terlapor',
                'label' => 'Pihak Terlapor',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Kolom <b>%s</b> belum kamu isi <br>'
                )
            ),
            array(
                'field' => 'waktu_kejadian',
                'label' => 'Tanggal Kejadian',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Kolom <b>%s</b> belum kamu isi <br>'
                )
            ),
            array(
                'field' => 'isi',
                'label' => 'Detail Laporan',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Kolom <b>%s</b> belum kamu isi <br>'
                )
            ),
            array(
                'field' => 'captcha',
                'label' => 'Nilai Captcha',
                'rules' => 'trim|required',
                'errors' => array(
                    'required' => '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Kolom <b>%s</b> belum kamu isi <br>',
                )
            )    
        );

        $this->form_validation->set_rules($formConfig);
        if (empty($_FILES['userfile']['name']))
        {
            $this->form_validation->set_rules('userfile', 'Dokumen Bukti', 'trim|required', array(
                'required' => '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Kolom <b>%s</b> belum kamu isi <br>'
            ));
        }

        $data['isFormError'] = ($this->form_validation->run() == False) ? True : False;
        if (!$data['isFormError']) {
            $config['upload_path'] = APPPATH.'../upload/bukti';
            $config['allowed_types'] = 'jpg|png|jpeg|pdf';
            $config['max_size'] = 3000;
            $config['encrypt_name'] = TRUE;
        
            $this->load->library('upload', $config);
            if($this->upload->do_upload())
            {
                $file_info = $this->upload->data();
                $form_data = array(
                    'judul' => $this->input->post('judul', TRUE),
                    'terlapor' => $this->input->post('terlapor', TRUE),
                    'waktu_kejadian' => $this->input->post('waktu_kejadian', TRUE),
                    'detil_laporan' => $this->input->post('isi', TRUE),
                    'status' => 'proses',
                    'bukti' => $file_info['file_name'],
                    'created_at' => date("Y-m-d"),
                    'updated_at' => date("Y-m-d"),
                );
                $this->CRUD->insert1('data_laporan', $form_data);
                $this->session->set_flashdata('alert', ['type' => 'success', 'title' => 'Unggah Laporan Berhasil', 'content' => 'Laporan berhasil dicatat.']);
                redirect(base_url());
            }
            else{
                redirect('kirim-laporan');
            }
        }

        $this->load->view('Layout/Header', $data);
        $this->load->view('Client/Components/Nav');
        $this->load->view('Client/Pages/Unggah', $data);
        $this->load->view('Layout/Footer', $data);
    }
}
