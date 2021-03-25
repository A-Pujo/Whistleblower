<?php

function isLoggedIn()
{
    $CI = get_instance();

    if (!empty($CI->session->userdata('access_token')) and !empty($CI->session->userdata('user_data'))) {
        redirect('dasbor');
    }
}

function isLoggedOut()
{
    $CI = get_instance();

    if (empty($CI->session->userdata('access_token')) and empty($CI->session->userdata('user_data'))) {
        if (uri_string() != 'paspor/logout') {
            redirect('paspor?redirect=' . urlencode(uri_string()));
        } else {
            redirect('paspor');
        }
    }
}

function isLengkapData()
{
    $CI = get_instance();

    if (empty($CI->session->UserTemp)) {
        redirect('dasbor');
    }
}
