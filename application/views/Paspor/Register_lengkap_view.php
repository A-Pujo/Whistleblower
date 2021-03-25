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
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/front/images/favicon.ico">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/dist/css/adminlte.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/select2/css/select2.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/front/plugins/daterangepicker/daterangepicker.css">
</head>

<body class="register-page">
    <div class="register-box mt-5">
        <!-- <div class="register-logo">
            <a href="<?= base_url(); ?>"><?= $this->config->item('APP_name'); ?></a>
        </div> -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg"><b>Eyooo!</b>
                    <br>Mari lengkapi data diri kamu dulu bre.</p>
                <?= form_open(current_url(), ['class' => 'my-form']); ?>
                <div class="input-group mt-2">
                    <label>Data Akun</label>
                </div>
                <div class="input-group mb-3">
                    <input disabled class="form-control" value="<?= (!empty($UserTemp['email'])) ? $UserTemp['email'] : NULL; ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3 <?= (!empty(form_error('kementerian'))) ? 'is-invalid' : null ?>">
                    <select name="kementerian" class="form-control select2 <?= (!empty(form_error('kementerian'))) ? 'is-invalid' : null ?>" id="kementerian" style="width: 100%;">
                        <option disabled <?= (set_value('kementerian') == 0) ? 'selected' : null ?>>Pilih Kementerian..</option>
                        <?php foreach ($kementerian as $k) : ?>
                            <option value="<?= $k->id_kementerian; ?>" <?= (set_value('kementerian') == $k->id_kementerian) ? 'selected' : null ?>><?= $k->nama_kementerian; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (!empty(form_error('kementerian'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('kementerian'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3 <?= (!empty(form_error('jabatan'))) ? 'is-invalid' : null ?>">
                    <select name="jabatan" class="form-control select2 <?= (!empty(form_error('jabatan'))) ? 'is-invalid' : null ?>" id="jabatan" style="width: 100%;">
                        <option disabled <?= (set_value('jabatan') == 0) ? 'selected' : null ?>>Pilih jabatan..</option>
                        <?php foreach ($jabatan as $k) : ?>
                            <option value="<?= $k->id_jabatan; ?>" <?= (set_value('jabatan') == $k->id_jabatan) ? 'selected' : null ?>><?= $k->nama_jabatan; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (!empty(form_error('jabatan'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('jabatan'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Data Profil</label>
                </div>
                <div class="input-group mb-3">
                    <input name="nama" type="text" class="form-control <?= (!empty(form_error('nama'))) ? 'is-invalid' : null ?>" id="nama" placeholder="Nama Lengkap" <?= (!empty(form_error('nama'))) ? 'autofocus' : null ?> value="<?= (!empty(set_value('nama'))) ? set_value('nama') : ((!empty($UserTemp['nama'])) ? $UserTemp['nama'] : NULL); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <?php if (!empty(form_error('nama'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('nama'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3">
                    <input name="npm" type="number" class="form-control <?= (!empty(form_error('npm'))) ? 'is-invalid' : null ?>" id="npm" placeholder="NPM" <?= (!empty(form_error('npm'))) ? 'autofocus' : null ?> value="<?= (!empty(set_value('npm'))) ? set_value('npm') : ((!empty($UserTemp['npm'])) ? $UserTemp['npm'] : NULL); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-address-card"></span>
                        </div>
                    </div>
                    <?php if (!empty(form_error('npm'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('npm'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3 <?= (!empty(form_error('prodi'))) ? 'is-invalid' : null ?>">
                    <select name="prodi" class="form-control select2 <?= (!empty(form_error('prodi'))) ? 'is-invalid' : null ?>" id="prodi" style="width: 100%;">
                        <option disabled <?= (set_value('prodi') == 0) ? 'selected' : null ?>>Pilih Program Studi..</option>
                        <?php foreach ($prodi as $k) : ?>
                            <option value="<?= $k->id_prodi; ?>" <?= (set_value('prodi') == $k->id_prodi) ? 'selected' : null ?>><?= $k->nama_prodi; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (!empty(form_error('prodi'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('prodi'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3">
                    <input name="angkatan" type="number" class="form-control <?= (!empty(form_error('angkatan'))) ? 'is-invalid' : null ?>" id="angkatan" placeholder="Tahun Angkatan" <?= (!empty(form_error('angkatan'))) ? 'autofocus' : null ?> value="<?= (!empty(set_value('angkatan'))) ? set_value('angkatan') : ((!empty($UserTemp['angkatan'])) ? $UserTemp['angkatan'] : NULL); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-graduation-cap"></span>
                        </div>
                    </div>
                    <?php if (!empty(form_error('angkatan'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('angkatan'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3">
                    <input name="tempat" type="text" class="form-control <?= (!empty(form_error('tempat'))) ? 'is-invalid' : null ?>" id="tempat" placeholder="Tempat Lahir" <?= (!empty(form_error('tempat'))) ? 'autofocus' : null ?> value="<?= (!empty(set_value('tempat'))) ? set_value('tempat') : ((!empty($UserTemp['tempat'])) ? $UserTemp['tempat'] : NULL); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-map-marker-alt"></span>
                        </div>
                    </div>
                    <?php if (!empty(form_error('tempat'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('tempat'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3 date" id="tanggal" data-target-input="nearest">
                    <input name="tanggal" placeholder="Tanggal Lahir" type="text" class="form-control datetimepicker-input <?= (!empty(form_error('tanggal'))) ? 'is-invalid' : null ?>" data-target="#tanggal" data-toggle="datetimepicker" value="<?= (!empty(set_value('tanggal'))) ? set_value('tanggal') : ((!empty($UserTemp['tanggal'])) ? $UserTemp['tanggal'] : NULL); ?>" <?= (!empty(form_error('tanggal'))) ? 'autofocus' : null ?>>
                    <div class="input-group-append" data-target="#tanggal">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                    <?php if (!empty(form_error('tanggal'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('tanggal'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3">
                    <input name="asal_daerah" type="text" class="form-control <?= (!empty(form_error('asal_daerah'))) ? 'is-invalid' : null ?>" id="asal_daerah" placeholder="Asal Daerah" <?= (!empty(form_error('asal_daerah'))) ? 'autofocus' : null ?> value="<?= (!empty(set_value('asal_daerah'))) ? set_value('asal_daerah') : ((!empty($UserTemp['asal_daerah'])) ? $UserTemp['asal_daerah'] : NULL); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-map-marked-alt"></span>
                        </div>
                    </div>
                    <?php if (!empty(form_error('asal_daerah'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('asal_daerah'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3">
                    <input name="whatsapp" type="number" class="form-control <?= (!empty(form_error('whatsapp'))) ? 'is-invalid' : null ?>" id="whatsapp" placeholder="No. WhatsApp" <?= (!empty(form_error('whatsapp'))) ? 'autofocus' : null ?> value="<?= (!empty(set_value('whatsapp'))) ? set_value('whatsapp') : ((!empty($UserTemp['whatsapp'])) ? $UserTemp['whatsapp'] : NULL); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fab fa-whatsapp"></span>
                        </div>
                    </div>
                    <?php if (!empty(form_error('whatsapp'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('whatsapp'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3">
                    <input name="line" type="text" class="form-control <?= (!empty(form_error('line'))) ? 'is-invalid' : null ?>" id="line" placeholder="ID Line" <?= (!empty(form_error('line'))) ? 'autofocus' : null ?> value="<?= (!empty(set_value('line'))) ? set_value('line') : ((!empty($UserTemp['line'])) ? $UserTemp['line'] : NULL); ?>">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fab fa-line"></span>
                        </div>
                    </div>
                    <?php if (!empty(form_error('line'))) : ?>
                        <span class="error invalid-feedback"><?= form_error('line'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Foto Profil</label>
                </div>
                <div class="input-group mb-3">
                    <img class="img-circle" src="<?= $UserTemp['image']; ?>" height="100" alt="<?= $UserTemp['image']; ?>">
                </div>
                <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="agreement" class="custom-control-input <?= (!empty(form_error('agreement'))) ? 'is-invalid' : null ?>" id="agreement" <?= (!empty(set_value('agreement'))) ? 'checked' : null ?>>
                        <label class="custom-control-label" for="agreement">Saya menyetujui seluruh <a href="<?= site_url('syarat-dan-ketentuan'); ?>">syarat dan ketentuan</a> layanan <?= $this->config->item('APP_name'); ?> yang berlaku.</label>
                    </div>
                    <?php if (!empty(form_error('agreement'))) : ?>
                        <span id="terms-error" class="error invalid-feedback" style="display: inline;"><?= form_error('agreement'); ?></span>
                    <?php endif; ?>
                </div>
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Simpan Data</button>
                </div>
                <?= form_close(); ?>
                <!-- /.social-auth-links -->

                <p class="mb-1 mt-4">
                    &copy; 2020 <?= $this->config->item('APP_name'); ?>. All Rights Reserved
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
    <script src="<?= base_url(); ?>/assets/front/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url(); ?>/assets/front/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url(); ?>/assets/front/plugins/select2/js/select2.full.min.js"></script>
    <script src="<?= base_url(); ?>/assets/front/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="<?= base_url(); ?>/assets/front/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?= base_url(); ?>/assets/front/dist/js/app.js"></script>
    <script>
        $("#tanggal").datetimepicker({
            format: "YYYY/MM/DD",
        });
    </script>

    <?php if ($this->session->flashdata('alert')) : ?>
        <script type="text/javascript">
            Swal.fire({
                title: '<?= $this->session->flashdata('alert')['title']; ?>',
                text: '<?= $this->session->flashdata('alert')['content']; ?>',
                icon: '<?= $this->session->flashdata('alert')['type']; ?>',
                allowOutsideClick: false
            });
        </script>
    <?php endif; ?>
</body>

</html>