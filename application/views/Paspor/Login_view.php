</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-logo mb-n2">
            <img class="img" alt="<?= $this->config->item('APP_name'); ?>" height="150" src="<?= base_url(); ?>/assets/front/dist/img/kucing-1.gif">
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <!-- <p class="login-box-msg">Selamat Datang di <?= $this->config->item('APP_name'); ?></p> -->
                <div class="social-auth-links text-center mb-3">
                    <a href="<?= $login_url; ?>" class="btn btn-block btn-primary p-2 btn-load">
                        <i class="fab fa-google mr-2"></i>Login dengan Google
                    </a>
                </div>
                <!-- /.social-auth-links -->

                <p class="mb-1 mt-4 text-center">
                    <span class="font-weight-bold">&copy; 2020 <?= $this->config->item('APP_name'); ?>. All Rights Reserved</span>
                    <br>
                    Powered by Kementerian Kominfo
                    <br>
                    <a href="http://instagram.com/bempknstan" target="_blank">BEM KM PKN STAN</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->


    <script src="<?= base_url(); ?>/assets/front/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/front/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>