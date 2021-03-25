    
    <div class="container">
        <div class="d-flex">
            <div class="order-1 align-content-end" id="mailbox-container">
                <img id="mailbox-image" src="<?=base_url();?>assets/front/dist/img/taxi-63.png" width="200">
            </div>
            <div class="order-2 flex-grow-1">
                <div class="row content-dock">
                    <?php
                        $i = 0;
                            foreach ($dataLaporan as $laporan) {
                                ?>
                                
                                <div class="col-md-4">
                                    <div class="card" style="width:100%">
                                        <img class="card-img-top" src="<?=base_url()?>upload/bukti/<?=$laporan->bukti?>" alt="Card image" height="300px">
                                        <div class="card-body">
                                            <h4 class="card-title"><?=$laporan->judul?></h4> <br> <span class="badge badge-info"> <i class="fa fa-smile" aria-hidden="true"></i> &nbsp; <?=$laporan->status?></span>
                                            <p class="card-text"><?=substr($laporan->detil_laporan, 0, 30).' . . .';?></p>
                                            <a href="<?=base_url()?>p/<?=$laporan->id?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php
                            }
                    ?>
                </div>
                <div class=row>
                    <div class="col-md-12">
                        <?=$pagination?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@100;400;700&display=swap');

        body{
            overflow-x: hidden;
            background-color: #ffc7c7;
        }

        @media (min-width:320px)  { /* smartphones, iPhone, portrait 480x320 phones */ 
            #mailbox-image{
                padding-top: 128px;
                transform: translateX(24px);
                display: none;
            }

            .content-dock{
                margin: 32px 0;  
                padding: 16px 16px;
                background-color: #ffffff; 
            }
        }
        @media (min-width:481px)  { /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ 
            
        }
        @media (min-width:641px)  { /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ 
            
        }
        @media (min-width:961px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */ 
            #mailbox-image{
                padding-top: 128px;
                transform: translateX(24px);
                display: block;
            }

            .content-dock{
                margin: 32px 0;  
                padding: 16px 16px;
                background-color: #ffffff; 
            }

        }
        @media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */ 
            
        }
        @media (min-width:1281px) { /* hi-res laptops and desktops */ 
            
        }
    </style>