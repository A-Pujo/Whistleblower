    <div class="contaner content-dock">
        <div class="card">
            <div class="card-header row">
                <div class="col-md-9"><h4><?=$laporan->judul?></h4></div>
                <div class="col-md-3">
                    <?php
                        if (isset($UserData) && $UserData->kementerian == 3) {
                    ?>
                    <?= form_open_multipart(base_url().'kelola/update/'.$laporan->id, array('class' => 'form-inline')) ?>
                        <div class="form-group">
                            <select name="visibilitas" class="form-control">
                                <option value="0">invisible</option>
                                <option value="1">visible</option>
                            </select>
                        </div> 
                        
                        &nbsp;<div class="form-group">
                            <select name="status" class="form-control">
                                <option value="proses">proses</option>
                                <option value="selesai">selesai</option>
                            </select>
                        </div> 

                        &nbsp;<button class="btn btn-info" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
                    </form>
                    <?php } ?>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 text-cyan">Subjek: <?=$laporan->terlapor?></div>
                    <div class="col-md-3 text-cyan">Tanggal Kejadian: <?=$laporan->waktu_kejadian?></div>
                </div>
                <div class="row">
                    <div class="col-md-12"><?=$laporan->detil_laporan?></div>
                </div>
            </div>

            <div class="card-footer">
                <h6 style="margin-bottom: 16px;"><a href="<?=base_url()?>upload/bukti/<?=$laporan->bukti?>" download><i class="fa fa-paperclip" aria-hidden="true"></i> Download Lampiran</h6></a>
            </div>
        </div>
    </div>

    <style>
        body{
            background-color: #FAE3D9;
            overflow-x: hidden;
        }

        @media (min-width:320px)  { /* smartphones, iPhone, portrait 480x320 phones */ 
            .content-dock{
                margin: 32px;
            }
        }
        @media (min-width:481px)  { /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
        @media (min-width:641px)  { /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
        @media (min-width:961px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */ 
            .content-dock{
                margin: 32px 88px;
            }
        }
        @media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */ }
        @media (min-width:1281px) { /* hi-res laptops and desktops */ }
    </style>