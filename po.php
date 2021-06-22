<?php 
    session_start();
    if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Anda Harus Login Dulu !'); window.location = 'login.php'</script>";
    }else{
    include "koneksi.php";
    include "template/header.php";

    $sql_no_transaksi = mysqli_query($koneksi,"SELECT max(id_po) as max from t_preorder");
          $baca_no_transaksi = mysqli_fetch_array($sql_no_transaksi);
          $no_transaksi = $baca_no_transaksi['max'];

          $no_urut = (int) substr($no_transaksi, 3,7);
          $no_urut++;
          $char ="PO";
          $nomor_transaksi = $char.sprintf("%04s",$no_urut);
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
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Order</span>
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
            <?php include "template/mobile.php" ?>
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
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Pre Order</span>
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
            <!-- Order Form Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                       
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="login-bg">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="logo">
                                                    <a href="#"><h1>Persediaan Bibit Tanaman</h1>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>ID PO</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="login-input-area">
                                                    <input type="text" name="id_po" id="id_po" value="<?php echo $nomor_transaksi; ?>" readonly />
                                                    <i class="fa fa-briefcase login-user" aria-hidden="true"></i>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>Tanggal</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="login-input-area">
                                                    <input type="date" name="tanggal" id="tanggal" value="<?= date("Y-m-d") ?>" readonly class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>Supplier</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="interested-input-area">
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
                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>Qty</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="login-input-area">
                                                    <input type="number" name="qty" id="qty" class="form-control" />
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="form-group row">
                                        <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>Tanaman</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="interested-input-area">
                                                    <select name="id_tanaman" id="id_tanaman" class="form-control">
                                                        <option value=""></option>
                                                        <?php 
                                                            $tampil = mysqli_query($koneksi,"SELECT * FROM t_tanaman");
                                                            while($data=mysqli_fetch_array($tampil)){                                                    ?>
                                                            <option value="<?php echo "$data[nama_tanaman]" ?>"><?php echo "$data[nama_tanaman]" ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>Satuan</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="login-input-area">
                                                    <input type="text" name="satuan" id="satuan" class="form-control" />
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-4">
                                                <div class="login-button-pro">
                                                    <input type="button" class="login-button btn-sm" id="tambah" name="tambah" value="Add">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="sparkline13-list shadow-reset">
                                                        <div class="sparkline13-hd">
                                                            <div class="main-sparkline13-hd">
                                                                <div class="sparkline13-outline-icon">
                                                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                                    <span><i class="fa fa-wrench"></i></span>
                                                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                    <form method = "POST" action="insert_po.php" id="tsemen" data-parsley-validate class="form-horizontal form-label-left" target="_blank">
                                                        <table id="sementara" class="table table-striped table-bordered" style="width:100%">
                                                            <thead>
                                                            <tr>
                                                                <th>ID PO</th>
                                                                <th>Tanggal</th>
                                                                <th>Supplier</th>
                                                                <th>Tanaman</th>
                                                                <th>Qty</th>
                                                                <th>Satuan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            
                                                            </tbody>
                                                        </table>
                                                        <div class="clearfix">
                                                            <input type="submit" class="btn btn-info btn-sm" name="add" id="submit" value="Submit">
                                                        </div>
                                                    </form>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <!-- Order Form End-->

        </div>
        
    </div>
    
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
        $(document).ready(function() {
            $("#tambah").click(function() {
                var order = $("#id_po").val();
                var tanggal = $("#tanggal").val();
                var supplier = $("#id_supplier").val();
                var tanaman = $("#id_tanaman").val();
                var qty = $("#qty").val();
                var satuan = $("#satuan").val();
                var baris_baru = "<tr><td>"+order+"</td><td>"+tanggal+"</td><td>"+supplier+"</td><td>"+tanaman+"</td><td>"+qty+"</td><td>"+satuan+"</td><td><input type='button' class='btn btn-danger btn-sm' onclick='hapus(this)' id='delCol' value='x'></td></tr>";
                $("#sementara").append(baris_baru);
            })
        });
</script>
<script>
    $("#tsemen").submit(function(e) {
            var form = this;
            var temporary_tbl = $('table#sementara tbody tr').get().map(function(row) {
                return $(row).find('td').get().map(function(cell) {
                    return $(cell).html();
                });
            });

            $("#submit").val(JSON.stringify(temporary_tbl));
        });
</script>
<script>
function hapus(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("sementara").deleteRow(i);
}
</script>
<script>
    $(document).ready(function () {
        $("#id_supplier").select2({
            placeholder: "Please Select"
        });
        $("#id_tanaman").select2({
            placeholder: "Please Select"
        });
    });
</script>
</body>

</html>
    <?php } ?>