<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Database Error - <?= config_item('APP_name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
	<meta content="Coderthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= config_item('base_url'); ?>/assets/front/images/favicon.ico">

	<!-- App css -->
	<link href="<?= config_item('base_url'); ?>/assets/front/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?= config_item('base_url'); ?>/assets/front/css/app.css" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg">

	<div class="account-pages my-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-8">
					<div class="text-center">

						<div>
							<img src="<?= config_item('base_url'); ?>/assets/front/images/not-found.png" alt="" class="img-fluid" />
						</div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-12 text-center">
					<h3 class="mt-3">Terjadi Kesalahan</h3>
					<h6 class="d-block"><?= $heading; ?></h6>
					<p class="text-muted">
						<?= $message; ?>
					</p>
					<a href="<?= config_item('base_url'); ?>" class="btn btn-lg btn-primary mt-4">Kembali ke Beranda</a>
				</div>
			</div>
		</div>
		<!-- end container -->
	</div>

</body>

</html>