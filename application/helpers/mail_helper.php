<?php

function send($set, $view, $data = null)
{
    $CI = get_instance();
    $config = [
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_user' => 'mohwalid.jaeger@gmail.com',
        'smtp_pass' => 'Since20002018',
        'smtp_port' => 465,
        'mailtype' => 'html',
        'charset' => 'utf-8',
        'newline' => "\r\n"
    ];

    $CI->load->library('email', $config);
    $CI->email->initialize($config);

    $CI->email->from('mohwalid.jaeger@gmail.com', 'Siska dari BEM PKN STAN');
    $CI->email->to($set['to']);
    $CI->email->subject($set['subject']);
    (!empty($set['cc'])) ? $CI->email->cc($set['cc']) : false;
    (!empty($set['bcc'])) ? $CI->email->cc($set['bcc']) : false;
    $CI->email->message($CI->load->view($view, ($data != null) ?
        $data : null, true));

    if ($CI->email->send()) {
        return true;
    } else {
        return false;
    };
}
