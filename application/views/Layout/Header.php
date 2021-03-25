<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= (!empty($title)) ? $title . ' - ' . $this->config->item('APP_name') : $this->config->item('APP_name') . ' - ' . $this->config->item('APP_title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="<?= $this->config->item('APP_description'); ?>" name="description" />
    <meta content="<?= $this->config->item('APP_keywords'); ?>" name="keywords" />
    <meta content="<?= $this->config->item('APP_author'); ?>" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/front/dist/img/logo.png">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/dist/css/adminlte.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/select2/css/select2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>favicon-16x16.png">
    <link rel="manifest" href="<?= base_url(); ?>manifest.json">
    <link rel="mask-icon" href="<?= base_url(); ?>safari-pinned-tab.svg" color="#007bff">
    <meta name="msapplication-TileColor" content="#007bff">
    <meta name="theme-color" content="#007bff">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>