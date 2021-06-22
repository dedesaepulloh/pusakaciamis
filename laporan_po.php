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
                                            <li><span class="bread-blod">Laporan Pre Order</span>
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
                                            <li><span class="bread-blod">Laporan Pre Order</span>
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
            <form method="post" action="cetak_po.php" target="_blank">
                          
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
                                    <input type="date" name="tanggal_akhir" class="form-control" id="tanggal_akhir" >
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group row">
                            <label class="col-sm-2">ID PO</label>
                            <div class="login-input-area col-sm-6">
                                <select class="form-control" name="id_po" id="id_po" >
                                    <option value=""></option>
                                    <?php
                                        $sql="select distinct id_po from t_preorder";
                                        $hasil=mysqli_query($koneksi,$sql);
                                        $no=0;
                                        while ($data = mysqli_fetch_array($hasil)) {
                                            $no++;
                                            $ket="";
                                            if (isset($_POST['pilih'])) {
                                                $id_po = trim($_POST['id_po']);
                                                
                                                if ($id_po==$data['id_po']){
                                                    $ket="selected";
                                                }
                                            }
                                    ?>
                                    <option <?php echo $ket; ?> value="<?php echo $data['id_po'];?>" ><?php echo $data['id_po'];?></option>
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
                                        <h2>Laporan Pre Order</h2>
                                        <br>
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
                                                    <th>ID Pre Order</th>
                                                    <th>Tanggal</th>
                                                    <th>Supplier</th>
                                                    <th>Tanaman</th>
                                                    <th>Qty</th>
                                                    <th>Satuan</th>
                                                </tr>
                                            </thead>
                                            <tbody id="data">
                                                <?php 
                                                    $tampil3 = mysqli_query($koneksi, "SELECT * FROM t_preorder");
                                                    while($data3 = mysqli_fetch_array($tampil3)){
                                                ?>

                                                <tr>
                                                        <td><?php echo "$data3[id_po]"; ?></td>
                                                        <td><?php echo "$data3[tanggal]"; ?></td>
                                                        <td><?php echo "$data3[supplier]"; ?></td>
                                                        <td><?php echo "$data3[tanaman]"; ?></td>
                                                        <td><?php echo "$data3[qty]"; ?></td>
                                                        <td><?php echo "$data3[satuan]"; ?></td>
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
            <!-- Static Table End -->
            </form>
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
                url:"ajax_filter_range.php",
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
                url:"ajax_filter_range.php",
                data:"tanggal_awal="+tanggal_awal+"&tanggal_akhir="+tanggal_akhir,
                success:function (data) {
                $("#data").html(data);
                }
            });
            });

            $("#id_po").change(function () {
            var id_po = $(this).val();

            $.ajax({
                type:"POST",
                url:"ajax_filter_id_po.php",
                data:"id_po="+id_po,
                success:function (data) {
                $("#data").html(data);
                }
            });
            });

            $("#id_supplier").change(function () {
            var id_supplier = $(this).val();

            $.ajax({
                type:"POST",
                url:"ajax_filter_id_supplier.php",
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
        $("#id_po").select2({
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
