<?php include"data_atas.php";?>
    <?php include"data_navbar.php";?>
        <?php include"koneksi.php";?>
            <div class="row">
                <section class="col-lg-9 connectedSortable">  
                    <div class="col-md-6">
                <div class="box">
            <div class="box-header">
        <h3 class="box-title">Lihat data</h3>
    </div>
        <div class="box-body">
            <table class="table table-bordered">
            <tr>
                <th style="width: 10px">No.</th>
                    <th>Nama</th>
                        <th>Alamat</th>
                    <th style="width: 40px">Option</th>
                </tr>
        <?php include"koneksi.php";
                $verliqueri=$verlipdo->prepare("select*from tb_siswa order by nama_siswa");
                    $verliqueri->execute();
                        $no = 0; 
                            while($verlitampil=$verliqueri->fetch()){
                        $nama=$verlitampil['nama_siswa'];
                    $alamat=$verlitampil['alamat_siswa'];
                $no++; 
        ?>
            <tr>
                <td><?php echo $no;?></td>
                    <td><?php echo $nama;?></td>
                        <td>
                            <?php echo $alamat;?></td>
                                <td>
                            <a href="data_ubah.php?idubah=<?php echo $verlitampil['id_siswa'];?>"<span class="badge bg-blue">Ubah</span></a>
                        <a href="data_hapus.php?idhapus=<?php echo $verlitampil['id_siswa'];?>"<span class="badge bg-red">Hapus</span></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Form Input Peserta Didik</h3>
                    </div>
                        <form action="data_simpan.php" method="post" role="form">
                            <div class="box-body">
                                <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" name="ver_nama" placeholder="Silahkan masukan nama.." required>
                    </div>
                <div class="form-group">
            <label for="exampleInputPassword1">Alamat</label>
                <input type="text" class="form-control" name="ver_alamat" placeholder="Silahkan masukan alamat anda.." required>
                    <input type="submit" value="Simpan">
                        </div>
                    </div>                       
                </section>
            </div>
        </section>
    </aside>
</div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
    </body>
</html>