<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>404 Not Found - <?= config_item('APP_name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="<?= config_item('APP_description'); ?>" name="description" />
	<meta content="<?= config_item('APP_keywords'); ?>" name="keywords" />
	<meta content="<?= config_item('APP_author'); ?>" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="shortcut icon" href="<?= config_item('base_url'); ?>assets/front/images/favicon.ico">
	<link rel="stylesheet" href="<?= config_item('base_url'); ?>/assets/front/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="<?= config_item('base_url'); ?>/assets/front/dist/css/adminlte.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body class="login-page">
	<div class="login-box">
		<div class="login-logo">
			<div class="d-block">
				<img class="img" src="<?= config_item('base_url'); ?>/assets/front/dist/img/404.gif" alt="<?= config_item('base_url'); ?>" height="100" />
				<span class="font-weight-bold mb-0">404</span>
			</div>
			<a href="<?= config_item('base_url'); ?>" class="btn btn-primary text-white mt-3"><i class="fas fa-home mr-2"></i>Ke Beranda</a>
		</div>
	</div>
</body>

</html>