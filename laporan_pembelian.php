<?php 
    session_start();
    if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Anda Harus Login Dulu !'); window.location = 'login.php'</script>";
    }else{
include "koneksi.php";
    include"template/header.php";
?>

<!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Laporan Pembelian</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <!-- Mobile Menu start -->
            <?php include "template/mobile.php"; ?>
            <!-- Mobile Menu end -->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 des-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Laporan Pembelian</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcome End-->
            <form method="post" action="cetak_pembelian.php" target="_blank"> 
                <div class="col-lg-12">
                    <div class="col-lg-4">
                        <div class="form-group row">
                                <label class="login-input-head col-sm-2">Dari Tanggal</label>
                                <div class="login-input-area col-sm-6">
                                    <input type="date" name="tanggal_awal" class="form-control" id="tanggal_awal">
                                </div>
                        </div>
                        <div class="form-group row">
                                <label class="login-input-head col-sm-2">Sampai</label>
                                <div class="login-input-area col-sm-6">
                                    <input type="date" name="tanggal_akhir" class="form-control" id="tanggal_akhir">
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="form-group row">
                                <label class="col-sm-2">ID BL</label>
                                <div class="login-input-area col-sm-6">
                                    <select class="form-control" name="id_pembelian" id="id_pembelian" >
                                        <option value=""></option>
                                        <?php
                                            $sql="select distinct id_pembelian from t_pembelian_detail";
                                            $hasil=mysqli_query($koneksi,$sql);
                                            $no=0;
                                            while ($data = mysqli_fetch_array($hasil)) {
                                                $no++;
                                                $ket="";
                                                if (isset($_POST['pilih'])) {
                                                    $id_pembelian = trim($_POST['id_pembelian']);
                                                    
                                                    if ($id_pembelian==$data['id_pembelian']){
                                                        $ket="selected";
                                                    }
                                                }
                                        ?>
                                        <option <?php echo $ket; ?> value="<?php echo $data['id_pembelian'];?>" ><?php echo $data['id_pembelian'];?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="form-group row">
                                <label class="col-sm-2">Supplier</label>
                                <div class="login-input-area col-sm-6">
                                    <select name="id_supplier" id="id_supplier" class="form-control">
                                        <option value=""></option>
                                        <?php 
                                            $tampil = mysqli_query($koneksi,"SELECT * FROM t_supplier");
                                            while($data=mysqli_fetch_array($tampil)){                                                    ?>
                                        <option value="<?php echo "$data[nama_organisasi]" ?>"><?php echo "$data[nama_organisasi]" ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <br>
                
                <!-- Static Table Start -->
                <div class="data-table-area mg-b-15">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sparkline13-list shadow-reset">
                                    <div class="sparkline13-hd">
                                    <input type="submit" name="cetak" value="Cetak" class="btn btn-info" onClick="document.location.reload(true)"> 
                                        <div class="col-lg-12" align="center">
                                            <h2>Laporan Pembelian</h2>
                                            <br>
                                            <div class="sparkline13-outline-icon">
                                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                <span><i class="fa fa-wrench"></i></span>
                                                <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sparkline13-graph">
                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                            <div id="toolbar">
                                                <select class="form-control">
                                                    <option value="">Export Basic</option>
                                                    <option value="all">Export All</option>
                                                    <option value="selected">Export Selected</option>
                                                </select>
                                            </div>
                                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                <thead>
                                                    <tr>
                                                        <th>ID Pembelian</th>
                                                        <th>ID PO</th>
                                                        <th>Supplier</th>
                                                        <th>Tanggal</th>
                                                        <th>Tanaman</th>
                                                        <th>Satuan</th>
                                                        <th>Harga Beli</th>
                                                        <th>Qty</th>
                                                        <th>Harga Total</th>
                                                        <th>Total Harga</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="data">
                                                <?php                                        
                                                    $sql = mysqli_query($koneksi,"SELECT * FROM t_pembelian_head INNER JOIN t_pembelian_detail ON t_pembelian_head.id_pembelian = t_pembelian_detail.id_pembelian");
                                                    while($data=mysqli_fetch_array($sql)){
                                                ?>
                                                    <tr>
                                                        <td><?php echo "$data[id_pembelian]"; ?></td>
                                                        <td><?php echo "$data[id_po]"; ?></td>
                                                        <td><?php echo "$data[supplier]"; ?></td>
                                                        <td><?php echo "$data[tanggal]"; ?></td>
                                                        <td><?php echo "$data[tanaman]"; ?></td>
                                                        <td><?php echo "$data[satuan]"; ?></td>
                                                        <td>Rp. <?php echo number_format($data['harga_beli']); ?></td>
                                                        <td><?php echo "$data[qty]"; ?></td>
                                                        <td>Rp. <?php echo number_format($data['harga_total']); ?></td>
                                                        <td>Rp. <?php echo number_format($data['total_harga']); ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Static Table End -->
        </div>
    </div>
    
    <!-- Footer Start-->
<?php include "template/footer.php"; ?>
    <!-- Footer End-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <script src="js/select2/select2.full.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <!-- peity JS
		============================================ -->
    <script src="js/peity/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- data table JS
		============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>

    <script type="text/javascript">
        $(window).ready(function () {
            $("#tanggal_awal").change(function () {
            var tanggal_awal = $(this).val();
            var tanggal_akhir = $("#tanggal_akhir").val();

            $.ajax({
                type:"POST",
                url:"ajax_tanggal_beli.php",
                data:"tanggal_awal="+tanggal_awal+"&tanggal_akhir="+tanggal_akhir,
                success:function (data) {
                $("#data").html(data);
                }
            });
            });
            $("#tanggal_akhir").change(function () {
            var tanggal_awal = $("#tanggal_awal").val();
            var tanggal_akhir = $(this).val();

            $.ajax({
                type:"POST",
                url:"ajax_tanggal_beli.php",
                data:"tanggal_awal="+tanggal_awal+"&tanggal_akhir="+tanggal_akhir,
                success:function (data) {
                $("#data").html(data);
                }
            });
            });

            $("#id_pembelian").change(function () {
            var id_pembelian = $(this).val();

            $.ajax({
                type:"POST",
                url:"ajax_filter_id_pembelian.php",
                data:"id_pembelian="+id_pembelian,
                success:function (data) {
                $("#data").html(data);
                }
            });
            });

            $("#id_supplier").change(function () {
            var id_supplier = $(this).val();

            $.ajax({
                type:"POST",
                url:"ajax_supplier_beli.php",
                data:"id_supplier="+id_supplier,
                success:function (data) {
                $("#data").html(data);
                }
            });
            });

        });
    </script>

    <script>
    $(document).ready(function () {
        $("#id_pembelian").select2({
            placeholder: "Please Select"
        });
        $("#id_supplier").select2({
            placeholder: "Please Select"
        });
    });
</script>


</body>

</html>

                                                <?php } ?>

