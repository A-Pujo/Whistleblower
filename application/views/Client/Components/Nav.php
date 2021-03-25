<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-light" style="padding: 12px 48px">
        <a class="navbar-brand" href="<?=base_url()?>">
            <img src="<?=base_url()?>/favicon-32x32.png" alt="logo" style="width:40px;">
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>kirim-laporan">Unggah Laporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>daftar-laporan">Kelola Laporan</a>
                </li>
            </ul>
            
            <form class="form-inline" method="GET" action="<?=base_url()?>daftar-laporan">
                <div class="input-group">
                    <input class="form-control" name="q" type="text" placeholder="Search">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i> </button>
                    </div>
                </div>
            </form>
        </div>
    </nav> 