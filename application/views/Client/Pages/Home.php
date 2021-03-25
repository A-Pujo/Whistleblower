    
    <div class="container-fluid h-100" style="background-color: #ffc7c7;">
        <div class="row" style="background-color: #ffc7c7; height: 26px;"></div>
        <div class="row h-100 mx-auto justify-content-center align-items-center" style="border-radius: 32px 32px 0 0;padding-top: 20px; ; width: 80%; background-color: #ffb6b9;">
            <div class="col-md-6">
                <img id="home-img" src="<?=base_url()?>/assets/front/dist/img/abstract-customer-support.png" alt="" width="100%" height="auto" style="box-shadow: 10px 10px #cf9598;">
            </div>
            <div class="col-md-6" style="padding: 24px 88px;">
                <h5 class="header-text">Selamat Datang di Situs</h5>
                <h2 class="header-text">Whistleblowing System BEM PKN STAN</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="max-width: 100%;">
        <img id="top-divider" src="<?=base_url()?>/assets/front/dist/img/wave.png" style="width: 125%; height:170px">
        <div class="row" style="padding: 16px 60px;">
            <div class="col-md-4">
                <span style="font-family: sans-serif; font-weight: 600; font-size: 20px">Apa itu Whistleblowing System</span>
                <img class="btn btn-success" data-toggle="collapse" data-target="#q-definisi" src="<?=base_url()?>/assets/front/dist/img/bermuda-156.png" style="width: 50px; height:auto;">
                <div class="collapse" id="q-definisi">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Whistleblowing System adalah aplikasi yang disediakan oleh Inspektorat Jenderal bersama dengan Kementerian Kominfo bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi pelanggaran yang terjadi di lingkungan BEM KM PKN STAN. </li>
                    </ul>
                </div>    
            </div>
            <div class="col-md-4">
                <span style="font-family: sans-serif; font-weight: 600; font-size: 20px">Apa saja unsur pengaduannya</span>
                <img class="btn btn-warning" data-toggle="collapse" data-target="#q-unsur" src="<?=base_url()?>/assets/front/dist/img/bermuda-156.png" style="width: 50px; height:auto;">
                <div class="collapse" id="q-unsur">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>What</b> Perbuatan berindikasi pelanggaran yang diketahui </li>
                        <li class="list-group-item"><b>Where</b> Dimana perbuatan tersebut dilakukan.</li>
                        <li class="list-group-item"><b>When</b> Kapan perbuatan tersebut dilakukan.</li>
                        <li class="list-group-item"><b>Who</b> Siapa saja yang terlibat dalam perbuatan tersebut.</li>
                        <li class="list-group-item"><b>How</b> Bagaimana perbuatan tersebut dilakukan (modus, cara, dsb.)</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <span style="font-family: sans-serif; font-weight: 600; font-size: 20px">Bagaimana kerahasiaan pelapor terjaga</span>
                <img class="btn btn-info" data-toggle="collapse" data-target="#q-pelapor" src="<?=base_url()?>/assets/front/dist/img/bermuda-156.png" style="width: 50px; height:auto;">
                <div class="collapse" id="q-pelapor">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Whistleblowing System <b>tidak mencatat</b> informasi mengenai pelapor. Untuk membantu menjaga keamanan rahasia anda, anda dimohon untuk tidak menulis hal yang berkaitan dengan pribadi anda secara langsung pada saat mengunggah.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row" id="action-box">
            <div class="col-md-3">
            </div>
            <div class="col-md-3 text-center" id="burger-1">
                <div class="burger-bun-top"></div>
                <div class="burger-tomato"></div>
                <div class="burger-cheese"></div>
                <a href="#"><h4 class="burger-link" id="burger-link-1">Unggah Laporan</h4></a>
                <div class="burger-meat"></div>
                <div class="burger-salad-top"></div>
                <div class="burger-bun-bottom"></div>
            </div>
            <div class="col-md-3 text-center" id="burger-2">
                <div class="burger-bun-top"></div>
                <div class="burger-tomato"></div>
                <div class="burger-cheese"></div>
                <a href="#"><h4 class="burger-link" id="burger-link-2">Lihat Laporan</h4></a>
                <div class="burger-meat"></div>
                <div class="burger-salad-top"></div>
                <div class="burger-bun-bottom"></div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@100;400;700&display=swap');
        
        body{
            background-color: #F6F6F6;
            overflow-x: hidden;
        }

        h5{
            font-family: 'Roboto', sans-serif;
            font-weight: 100;
            
        }

        h2{
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }


        @media (min-width:320px)  { /* smartphones, iPhone, portrait 480x320 phones */
            #top-divider{
                margin-top: -100px;
                margin-left: -50px;
                margin-bottom: 20px;
            }
            h5.header-text{
                font-size: 16px;
            }
            h2.header-text{
                font-size: 24px;
                padding-bottom: 40px;
            }
            #home-img{
                transform: scale(0.7)
            }
            #action-img{
                display: none;
            }
            #action-box{
                padding: 40px 64px; 
                margin: 54px 20px; 
                box-shadow: 10px -10px #cf9598;
                background-color: #fae3d9;
            }
            .burger-bun-top{
                height:90px; 
                width:110%; 
                clear:both; 
                background-color: #F7BD8D; 
                border-radius: 128px 128px 0 0;
                margin-top: 16px;
                background-image: url(<?=base_url()?>/assets/front/dist/img/wave-bun-top.png); 
                background-size: contain;
                background-repeat: no-repeat;
                background-position: top;
            }
            .burger-bun-bottom{
                height:90px; 
                width:110%; 
                clear:both; 
                background-color: #F7BD8D; 
                border-radius: 0 0 128px 128px;
                margin-bottom: 24px;
                background-image: url(<?=base_url()?>/assets/front/dist/img/wave-bun.png); 
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center bottom;
            }
            .burger-salad-top{
                height:10px; 
                width:110%; 
                clear:both; 
                background-color: #8BF7B6; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-meat{
                height: 24px;
                width: 110%;
                clear:both; 
                background-color: #AE866E;
                border-radius: 6px 6px 6px 6px;
                background-image: url(<?=base_url()?>/assets/front/dist/img/wave-cheese.png); 
                background-size: 100% 90%;
                background-repeat: no-repeat;
                background-position: top;
            }
            .burger-tomato{
                height:10px; 
                width:110%; 
                clear:both; 
                background-color: #D3221F; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-cheese{
                height:10px; 
                width:110%; 
                clear:both; 
                background-color: #F6CD40; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-link{
                color: #CF9598; 
                width: 110%; 
                margin: 12px 0; 
                font-weight: 700;
                display: none;
            }
        }
        @media (min-width:481px)  { /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ 
            #top-divider{
                margin-top: -100px;
                margin-left: -50px;
                margin-bottom: 70px;
            }
            .col-md-6 h4{
                font-family: 'Open Sans', sans-serif;
                font-weight: 700;
                font-size: 20px;
                margin-bottom: 16px;
                color: #CF9598;
            }
            #home-img{
                transform: translate(20px, 50px);
            }
            #top-divider{
                margin-top: -120px;
                margin-left: -50px;
                margin-bottom: 70px;
            }
            #action-img{
                width: 70%; 
                height:auto;
            }
            #action-box{
                padding: 40px 64px; 
                margin: 54px 20px; 
                box-shadow: 10px -10px #cf9598;
                background-color: #fae3d9;
            }
            .burger-bun-top{
                height:100px; 
                width:251px; 
                clear:both; 
                background-color: #F7BD8D; 
                border-radius: 128px 128px 0 0;
            }
            .burger-bun-bottom{
                height:100px; 
                width:251px; 
                clear:both; 
                background-color: #F7BD8D; 
                border-radius: 0 0 128px 128px;
            }
            .burger-salad-top{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #8BF7B6; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-meat{
                height: 24px;
                width: 251px;
                clear:both; 
                background-color: #AE866E;
                border-radius: 6px 6px 6px 6px;
            }
            .burger-tomato{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #D3221F; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-cheese{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #F6CD40; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-link{
                color: #CF9598; 
                width: 251px; 
                margin: 12px 0; 
                font-weight: 700;
            }
        }
        @media (min-width:641px)  { /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
            #home-img{
                transform: translate(20px, 50px);
            }
            #top-divider{
                margin-top: -120px;
                margin-left: -50px;
                margin-bottom: 70px;
            }
            #action-img{
                width: 70%; 
                height:auto;
            }
            #action-box{
                padding: 40px 64px; 
                margin: 54px 100px; 
                box-shadow: 10px -10px #cf9598;
                background-color: #fae3d9;
                background-image: url(<?=base_url()?>/assets/front/dist/img/wave-bg.png); 
                background-size: contain;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .burger-bun-top{
                height:100px; 
                width:251px; 
                clear:both; 
                background-color: #F7BD8D; 
                border-radius: 128px 128px 0 0;
            }
            .burger-bun-bottom{
                height:100px; 
                width:251px; 
                clear:both; 
                background-color: #F7BD8D; 
                border-radius: 0 0 128px 128px;
            }
            .burger-salad-top{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #8BF7B6; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-meat{
                height: 24px;
                width: 251px;
                clear:both; 
                background-color: #AE866E;
                border-radius: 6px 6px 6px 6px;
            }
            .burger-tomato{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #D3221F; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-cheese{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #F6CD40; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-link{
                color: #CF9598; 
                width: 251px; 
                margin: 12px 0; 
                font-weight: 700;
            }
        }
        @media (min-width:961px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */
            #home-img{
                transform: translate(20px, 50px);
            }
            #top-divider{
                margin-top: -120px;
                margin-left: -50px;
                margin-bottom: 70px;
            }
            #action-img{
                width: 70%; 
                height:auto;
            }
            #action-box{
                padding: 40px 64px; 
                margin: 54px 100px; 
                box-shadow: 10px -10px #cf9598;
                background-color: #fae3d9;
                background-image: url(<?=base_url()?>/assets/front/dist/img/wave-bg.png); 
                background-size: contain;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .burger-bun-top{
                height:100px; 
                width:251px; 
                clear:both; 
                background-color: #F7BD8D; 
                border-radius: 128px 128px 0 0;
            }
            .burger-bun-bottom{
                height:100px; 
                width:251px; 
                clear:both; 
                background-color: #F7BD8D; 
                border-radius: 0 0 128px 128px;
            }
            .burger-salad-top{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #8BF7B6; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-meat{
                height: 24px;
                width: 251px;
                clear:both; 
                background-color: #AE866E;
                border-radius: 6px 6px 6px 6px;
            }
            .burger-tomato{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #D3221F; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-cheese{
                height:10px; 
                width:251px; 
                clear:both; 
                background-color: #F6CD40; 
                border-radius: 24px 24px 24px 24px;
            }
            .burger-link{
                color: #CF9598; 
                width: 251px; 
                margin: 12px 0; 
                font-weight: 700;
            }
        }
        @media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */ 
            #home-img{
                transform: translate(20px, 50px);
            }
            h5.header-text{
                font-size: 24px;
            }
            h2.header-text{
                font-size: 40px;
            }
        }
        @media (min-width:1281px) { /* hi-res laptops and desktops */
            #home-img{
                transform: translate(20px, 50px);
            }
        }
    </style>

    <script>
        if($(window).width() >= 1024){
            $("#burger-1").hover(function(){
                $("#burger-link-1").css("display", "block");
            });
            $("#burger-1").mouseleave(function(){
                $("#burger-link-1").css("display", "none");
            });
            $("#burger-2").hover(function(){
                $("#burger-link-2").css("display", "block");
            });
            $("#burger-2").mouseleave(function(){
                $("#burger-link-2").css("display", "none");
            });
        }
        else{
            $("#burger-link-1").css("display", "block");
            $("#burger-link-2").css("display", "block");
        }
    </script>