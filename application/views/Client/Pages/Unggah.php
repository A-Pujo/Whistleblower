    <div class="container-fluid" style="background-color: #ffc7c7;">
        <div class="container" style="padding:24px 0;">
            <div class="row" >
                <div class="col-md-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Objek laporan</b> merupakan intisari atau garis besar tindakan yang ingin dilaporkan oleh pelapor. </li>
                        <li class="list-group-item"><b>Pihak terlapor</b> merupakan pihak yang bersangkutan, perorangan maupun golongan, yang melakukan tindakan yang disebut dalam <b>Objek laporan</b>.</li>
                        <li class="list-group-item"><b>Tanggal kejadian</b> menunjukkan tanggal pasti kapan <b>Pihak terlapor</b> melakukan tindakan.</li>
                        <li class="list-group-item"><b>Detail laporan</b> merupakan penjabaran atas tindakan yang dilaporankan. Seminimal mungkin memuat <code>apa, siapa, kapan, dimana, dan bagaimana</code>. Penulisan dianjurkan dalam format yang ringkas, jelas, dan mudah dipahami.</li>
                        <li class="list-group-item"><b>Bukti</b> merupakan file dengan format <code>png atau jpg atau pdf</code> dengan ukuran maksimal untuk setiap file <i class="text-info"> 3MB</i></li>
                        <li class="list-group-item text-danger">Bila ditemukan suatu kesalahan dalam pembuatan laporan bisa mengakibatkan laporan tidak tercatat.</li>
                    </ul> 
                </div>
                <div class="col-md-9" style=" padding: 16px;">
                    <?php 
                        if ($isFormError && !empty(validation_errors())) {
                            ?>
                                <div class="alert alert-danger alert-dismissible show">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <h6><strong>Ups!</strong> Ditemukan beberapa kesalah nih.. </h6><p style="padding-left: 16px;">
                            <?php
                            echo validation_errors().'</p></div>';
                        }
                    ?>
                    <?=form_open_multipart(base_url().'kirim-laporan');?>
                        <div class="form-group">
                        <label>Objek laporan:</label>
                        <input minlength="4" type="text" class="form-control" placeholder="misal: tindakan korupsi" name="judul">
                    </div>
                    <div class="form-group">
                        <label>Pihak terlapor:</label>
                        <input minlength="4" type="text" class="form-control" placeholder="Terlapor" name="terlapor">
                    </div>
                    <div class="form-group">
                        <label>Tanggal kejadian:</label>
                        <input type="date" class="form-control" name="waktu_kejadian">
                    </div>
                    <div class="form-group">
                        <label>Detail laporan:</label>
                        <textarea minlength="32" class="form-control" rows="7" placeholder="isi laporan" name="isi"> </textarea>
                    </div>
                    <div  class="form-group row"> 
                        <label class="col-md-12">Bukti:</label>
                        <input type="file" class="form-control col-md-4" name="userfile">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 text-center unselectable" style="background-color: <?=$bgCaptcha?>; padding: 6px; background-image:url(<?=base_url()?>assets/front/dist/img/abstract-1175.png); background-size: <?=$dotSize?>"><?=$randNum1.'+'.$randNum2?></label>
                        <input class="col-md-2 form-control" type="text" name="captcha">
                        <input class="col-md-2" disabled style="display: none;" type="text" value="<?php echo strval($randNum1+$randNum2);?>" name="kunciCaptcha">
                    </div>
                    <button id="form-submit-button" type="submit" class="text-center btn btn-primary disabled" style="margin: 10PX 0px;">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("input[name='captcha']").keyup(function() {
            if($("input[name='captcha']").val() == $("input[name='kunciCaptcha']").val()){
                $("#form-submit-button").removeClass("disabled");
            }
            else
            {
                $("#form-submit-button").addClass("disabled");
            }
        });
    </script>

    <style>
        .unselectable {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        label.unselectable {
            margin-right: 12px;
        }
    </style>