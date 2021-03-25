<?php if(!empty($UserData->kementerian)) {?>
    <a id="fixedbutton" data-placement="left" href="<?=base_url()?>paspor/logout" data-toggle="tooltip" title="Log out!"><button class="btn btn-info"><i class="fa fa-user" aria-hidden="true"></i></button></a>
<?php } ?>
<style>
    #fixedbutton {
        position: fixed;
        bottom: 24px;
        right: 40px; 
    }
</style>

<script type="text/javascript" src="<?= base_url(); ?>/assets/front/plugins/sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/assets/front/dist/js/app.js"></script>
<script src="<?= base_url(); ?>upup.min.js"></script>
<script>
    UpUp.start({
        'content-url': '<?= base_url(); ?>offline.html',
        'assets': ['<?= base_url(); ?>assets/front/dist/css/adminlte.css', '<?= base_url(); ?>assets/front/dist/img/404.gif', '<?= base_url(); ?>assets/front/dist/js/adminlte.js', '<?= base_url(); ?>assets/front/images/favicon.ico', '<?= base_url(); ?>manifest.json'],
        'service-worker-url': '<?= base_url(); ?>upup.sw.min.js'
    });
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
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