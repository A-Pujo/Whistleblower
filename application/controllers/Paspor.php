<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paspor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('login');
        $this->load->model('User_model', 'USER');

        include_once __DIR__ . '/../../vendor/autoload.php';
        $this->GoogleOauth = new Google_Client();
        $this->GoogleOauth->setClientId($this->config->item('clientId'));
        $this->GoogleOauth->setClientSecret($this->config->item('clientSecret'));
        $this->GoogleOauth->setRedirectUri($this->config->item('redirectUri'));
        $this->GoogleOauth->addScope('email');
        $this->GoogleOauth->addScope('profile');
        $this->GoogleOauth->setAccessType('offline');
    }

    public function index()
    {
        isLoggedIn();

        $RedirectUri = $this->input->get('redirect', true);
        if ($RedirectUri != null) {
            $this->session->set_userdata('RedirectUri', $RedirectUri);
        }

        $data['title'] = 'Masuk';

        $data['login_url'] = $this->GoogleOauth->createAuthUrl();
        $this->load->view('Layout/Header', $data);
        $this->load->view('Paspor/Login_view', $data);
        $this->load->view('Layout/Footer', $data);
    }

    public function oauth2()
    {
        isLoggedIn();

        $RedirectUri = urldecode($this->session->userdata('RedirectUri'));

        if (!empty($this->input->get('code'))) {
            $Token = $this->GoogleOauth->authenticate($this->input->get('code'));
            if (empty($Token['error'])) {
                $this->GoogleOauth->setAccessToken($Token['access_token']);
                $this->session->set_userdata('access_token', $Token['access_token']); //Initialize TOKEN
                $GoogleService = new Google_Service_Oauth2($this->GoogleOauth);
                $InfoLogin = $GoogleService->userinfo->get();
                // var_dump($InfoLogin);
                // die;
                $DataLogin = $this->USER->readFirst(['email' => $InfoLogin->email, 'oauth_id' => $InfoLogin->id]);
                if ($DataLogin > 0) {
                    $UserData = [
                        'id' => $DataLogin->id,
                        'email' => $DataLogin->email
                    ];
                    $this->session->set_userdata('user_data', $UserData);
                    // $this->session->set_flashdata('alert', ['type' => 'success', 'title' => 'Selamat Datang :)', 'content' => 'hALO']);
                    redirect($RedirectUri);
                } else {
                    /* PENDAFTARAN DITUTUP */
                    // $UserTemp = [
                    //     'id' => $InfoLogin->id,
                    //     'email' => $InfoLogin->email,
                    //     'nama' => $InfoLogin->name,
                    //     'image' => $InfoLogin->picture
                    // ];
                    // $this->session->set_userdata('UserTemp', $UserTemp);

                    // $this->session->set_flashdata('alert', ['type' => 'success', 'title' => 'Selamat Datang :)', 'content' => 'Silakan lengkapi data berikut untuk melanjutkan.']);
                    // redirect('paspor/lengkapi-data');
                    $this->session->set_flashdata('alert', ['type' => 'error', 'title' => 'Login Gagal', 'content' => 'Pendaftaran akun baru otomatis telah ditutup, hubungi administrator untuk membuat akun baru.']);
                    redirect('paspor');
                }
            } else {
                $this->session->set_flashdata('alert', ['type' => 'error', 'title' => 'Login Gagal', 'content' => 'Google OAuth: ' . $Token['error_description']]);
                redirect('paspor');
            }
        } else {
            $this->session->set_flashdata('alert', ['type' => 'error', 'title' => 'Login Gagal', 'content' => 'Google OAuth Error']);
            redirect('paspor');
        }

        $this->session->unset_userdata('RedirectUri');
    }

    public function logout()
    {
        isLoggedOut();

        $this->GoogleOauth->revokeToken($this->session->userdata('access_token'));
        $this->session->unset_userdata('access_token');
        $this->session->unset_userdata('user_data');

        $this->session->set_flashdata('alert', ['type' => 'success', 'title' => 'Logout Berhasil', 'content' => 'Akun telah dilogout.']);
        redirect(base_url());
    }
}
