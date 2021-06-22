<?php 
    session_start();
    if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Anda Harus Login Dulu !'); window.location = 'login.php'</script>";
    }else{
    include "koneksi.php";
    include "template/header.php";
        $sql_no_transaksi = mysqli_query($koneksi,"SELECT max(id_pembelian) as max from t_pembelian_head");
          $baca_no_transaksi = mysqli_fetch_array($sql_no_transaksi);
          $no_transaksi = $baca_no_transaksi['max'];

          $no_urut = (int) substr($no_transaksi, 3,7);
          $no_urut++;
          $char ="BL";
          $nomor_transaksi = $char.sprintf("%04s",$no_urut);
?>
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn" class="hilang">
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
                                            <li><a href="#" class="hilang">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod" class="hilang">Pembelian</span>
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
                                        <div class="breadcome-heading" >
                                            <form role="search">
												<input type="text" placeholder="Search..." class="form-control hilang">
												<a href="" ><i class="fa fa-search hilang"></i></a>
											</form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="index.php" class="hilang">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod hilang">Pembelian</span>
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
            <form method = "POST" action="<?php echo $_SERVER["PHP_SELF"];?>" id="pembelian">
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <!-- <form id="penjualan" class="adminpro-form"> -->
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="login-bg">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="logo">
                                                    <a href="#" class="hilang"><h1>PURCHASE ORDER</h1>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>ID Pembelian</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-10">
                                                <div class="interested-input-area">
                                                    <input type="text" name="id_pembelian" id="id_pembelian" value="<?= $nomor_transaksi; ?>" readonly class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get"> -->
                                            <div class="form-group row">
                                                <div class="col-sm-2">
                                                    <div class="login-input-head">
                                                        <p>ID PO</p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="login-input-area">
                                                    <select class="form-control" name="id_po" id="id_po">
                                                            <?php
                                                            $sql="select distinct id_po from t_preorder";

                                                            $hasil=mysqli_query($koneksi,$sql);
                                                            $no=0;
                                                            while ($data = mysqli_fetch_array($hasil)) {
                                                            $no++;

                                                            $ket="";
                                                            if (isset($_POST['pilih'])) {
                                                                $id_po = trim($_POST['id_po']);

                                                                if ($id_po==$data['id_po'])
                                                                {
                                                                    $ket="selected";
                                                                }
                                                            }
                                                            ?>
                                                            <option <?php echo $ket; ?> value="<?php echo $data['id_po'];?>"><?php echo $data['id_po'];?></option>
                                                            <?php
                                                            }
                                                        ?>
                                                    </select>
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
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-info" id="pilih" name="pilih" value="Proses">
                                        </div>
                                    <!-- </form> -->

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="data-table-area  mg-b-15">
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
                                                <table id="sementara" class="table table-striped table-bordered" style="width:100%">
                                                    <thead>
                                                    <tr>
                                                        <th>ID PO</th>
                                                        <th>Supplier</th>
                                                        <th>Tanaman</th>
                                                        <th>Satuan</th>
                                                        <th>Harga Beli</th>
                                                        <th>Qty</th>
                                                        <th>Harga Total</th>
                                                    </tr>
                                                    </thead>
                                                    <?php

                                                    if (isset($_POST['pilih'])) {
                                                        $id_po=trim($_POST['id_po']);
                                                        $sql="select * from t_preorder where id_po='$id_po'";
                                                    }else {
                                                        $sql="select * from t_preorder ";
                                                    }


                                                    $hasil=mysqli_query($koneksi,$sql);
                                                    $no=0;
                                                    while ($data = mysqli_fetch_array($hasil)) {
                                                        $no++;

                                                        ?>
                                                        <tbody>
                                                        <tr>
                                                            <td><?php echo $data["id_po"]; ?></td>
                                                            <td><?php echo $data["supplier"]; ?></td>
                                                            <td><?php echo $data["tanaman"];   ?></td>
                                                            <td><?php echo $data["satuan"];   ?></td>
                                                            <?php 
                                                                $tampil2 = mysqli_query($koneksi, "SELECT * FROM t_preorder INNER JOIN t_tanaman ON t_preorder.tanaman = t_tanaman.nama_tanaman WHERE id_po = '$data[id_po]' AND nama_tanaman = '$data[tanaman]'");
                                                                while($data2 = mysqli_fetch_array($tampil2)){

                                                                    $total = $data['qty'] * $data2['harga_beli'];
                                                            ?>
                                                            <td id="harga_beli"><?php echo "$data2[harga_beli]";   ?></td>

                                                            
                                                            <?php } ?>
                                                            <td id="qty"><?php echo $data["qty"];   ?></td>
                                                            <td id="harga_total"><?php echo $total; ?></td>
                                                        </tr>
                                                        </tbody>
                                                        <?php
                                                    }
                                                    ?>
                                                </table>
                                                
                                                    <div class="form-group row">
                                                        <div class="col-sm-2">
                                                            <div class="login-input-head">
                                                                <p>Total Harga</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="login-input-area">
                                                                <input type="number" name="total_harga" id="total_harga" class="form-control" readonly/>
                                                                    
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <div class="login-input-head">
                                                                <input type="submit" class="btn btn-info btn-sm" name="submit" id="submit" value="Submit">
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
                        <!-- </form> -->
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            <!-- Order Form End-->

            <!-- <span id="hasil"></span> -->
            </form>

    <!-- SUBMIT PEMBELIAN -->
    

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
      jQuery(function ($) {
        $("#id_po").change(function(){
                
                var id_po=$("#id_po").val()
                console.log(id_po);
            $.ajax({
              type:'GET',
              data:'id_po='+id_po,
              url:'json_po.php',
              dataType:'json',
              success:function(data){
                for(var i=0; i < data.length; i++){
                  $("#supplier").val(data[i].supplier)
                }
              }
            });
          });


          });

          var table = document.getElementById("sementara"), sumHsl = 0;
		for(var t = 1; t < table.rows.length; t++)
		{
			sumHsl = sumHsl + parseInt(table.rows[t].cells[6].innerHTML);
		}
		document.getElementById("total_harga").value =  sumHsl;
</script>

<script>
    $("#pembelian").submit(function(e) {
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
    $(document).ready(function () {
        $("#id_po").select2({
            placeholder: "Please Select"
        });
    });
</script>

</body>

</html>
        <?php } ?>

<?php 

if(isset($_POST['submit'])){
    $id_pembelian = $_POST['id_pembelian'];
    $add = $_POST['submit'];
    $temporary_value = json_decode($add);
    $simpan = mysqli_query($koneksi, "INSERT INTO t_pembelian_head (id_pembelian, id_po, tanggal) VALUES ('$_POST[id_pembelian]', '$_POST[id_po]', '$_POST[tanggal]')");

    if($simpan){
        foreach((array)$temporary_value as $row){
            $id_po 	= $row[0];
            $supplier 	= $row[1];
            $tanaman 	= $row[2]; 
            $satuan 	= $row[3]; 
            $harga_beli 	= $row[4]; 
            $qty = $row[5];
            $harga_total = $row[6];
            $id_pembelian = $_POST['id_pembelian'];
            $total_harga = $_POST['total_harga'];
            // query insert
            $simpan1 = mysqli_query($koneksi, "INSERT INTO t_pembelian_detail (id_pembelian, id_po, supplier, tanaman, satuan, harga_beli, qty, harga_total, total_harga) VALUES ('$id_pembelian', '$id_po', '$supplier', '$tanaman', '$satuan', '$harga_beli', '$qty', '$harga_total', '$total_harga')");

            $edit = mysqli_query($koneksi, "UPDATE t_tanaman SET stok = stok + '$row[5]' WHERE nama_tanaman = '$row[2]'");
    }
    }else{

    }

    echo "<script>alert('Berhasil')</script>";
}
?>