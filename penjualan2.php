<?php 
    session_start();
    if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
        echo "<script>alert('Anda Harus Login Dulu !'); window.location = 'login.php'</script>";
    }else{
    include "koneksi.php";
    include "template/header2.php";
        $sql_no_transaksi = mysqli_query($koneksi,"SELECT max(id_penjualan) as max from t_penjualan_head");
          $baca_no_transaksi = mysqli_fetch_array($sql_no_transaksi);
          $no_transaksi = $baca_no_transaksi['max'];

          $no_urut = (int) substr($no_transaksi, 3,7);
          $no_urut++;
          $char ="TRX";
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
                                            <li><span class="bread-blod" class="hilang">Penjualan</span>
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
                                            <li><a href="index2.php" class="hilang">Home</a> <span class="bread-slash">/</span>
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
            <form method = "POST" action="insert_penjualan.php" id="penjualan" target="_blank">
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
                                                    <a href="#" class="hilang"><h1>Persediaan Bibit Tanaman</h1>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>ID Penjualan</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="login-input-area">
                                                    <input type="text" name="id_penjualan" id="id_penjualan" value="<?php echo $nomor_transaksi; ?>" readonly />
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
                                                    <p>Pelanggan</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="interested-input-area">
                                                    <select name="id_pelanggan" id="id_pelanggan" class="form-control">
                                                    <option value=""></option>
                                                        <?php 
                                                            $tampil = mysqli_query($koneksi,"SELECT * FROM t_pelanggan");
                                                            while($data=mysqli_fetch_array($tampil)){                                                    ?>
                                                            <option value="<?php echo "$data[id_pelanggan]" ?>"><?php echo "$data[nama_pelanggan]" ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>Nama Tanaman</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="interested-input-area">
                                                    <select name="id_tanaman" id="id_tanaman" class="form-control">
                                                    <option value=""></option>
                                                        <?php 
                                                            $tampil = mysqli_query($koneksi,"SELECT * FROM t_tanaman");
                                                            while($data=mysqli_fetch_assoc($tampil)){                                                    
                                                        ?>
                                                            <option value="<?php echo "$data[id_tanaman]" ?>"><?php echo "$data[nama_tanaman]" ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <div class="login-input-head">
                                                    <p>Harga</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="login-input-area">
                                                    <input type="number" name="harga_jual" id="harga_jual" class="form-control" readonly />
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
                                                    <p>Harga Total</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="login-input-area">
                                                    <input type="text" name="harga_total" id="harga_total" class="form-control" readonly />
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
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
                                                    <table id="sementara" class="table table-striped table-bordered" style="width:100%">
                                                        <thead>
                                                        <tr>
                                                            <th>ID Penjualan</th>
                                                            <th>ID Tanaman</th>
                                                            <th>Harga</th>
                                                            <th>Qty</th>
                                                            <th>Harga Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        
                                                        </tbody>
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
                                                                        <p>Potongan</p>
                                                                    </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="login-input-area">
                                                                    <input type="number" name="potongan" id="potongan" value= "0" class="form-control" />
                                                                            
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                        <div class="login-input-head">
                                                                            <p>Total Bayar</p>
                                                                        </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="login-input-area">
                                                                        <input type="number" name="total_bayar" id="total_bayar" class="form-control" readonly />
                                                                                
                                                                    </div>
                                                                </div>
                                                            <div class="col-sm-2">
                                                                    <div class="login-input-head">
                                                                        <p>Kembali</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <div class="login-input-area">
                                                                        <input type="text" name="kembali" id="kembali" class="form-control" readonly/>
                                                                            
                                                                    </div>
                                                                </div>
                                                                                                                       
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-2">
                                                                    <div class="login-input-head">
                                                                        <p>Bayar</p>
                                                                    </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="login-input-area">
                                                                    <input type="number" name="bayar" id="bayar" class="form-control" />
                                                                            
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="login-input-head">
                                                                    <input type="submit" class="btn btn-info btn-sm" name="submit" id="submit" value="Submit" onClick="document.location.reload(true)">
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
            
            </form>

    
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
                var id_penjualan = $("#id_penjualan").val();
                var id_tanaman = $("#id_tanaman").val();
                var harga = $("#harga_jual").val();
                var qty = $("#qty").val();
                var harga_total = $("#harga_total").val();
                var baris_baru = "<tr><td>"+id_penjualan+"</td><td>"+id_tanaman+"</td><td>"+harga+"</td><td>"+qty+"</td><td>"+harga_total+"</td><td><input type='button' class='btn btn-danger btn-sm' onclick='hapus(this)' id='delCol' value='x'></td></tr>";
                $("#sementara").append(baris_baru);

                var table = document.getElementById("sementara"), sumHsl = 0;
                for(var t = 1; t < table.rows.length; t++)
                {
                    sumHsl = sumHsl + parseInt(table.rows[t].cells[4].innerHTML);
                }
                document.getElementById("total_harga").value =  sumHsl;

                
                    var total = parseInt($("#total_harga").val())
                    var potongan = parseInt($("#potongan").val())
                    
                    var tot_bayar = total - potongan;
                    $("#total_bayar").attr("value",tot_bayar)
                

            })
            
        });
        

    function hapus(r) {
        var i = r.parentNode.parentNode.rowIndex;
        document.getElementById("sementara").deleteRow(i);
        var table = document.getElementById("sementara"), sumHsl = 0;
		for(var t = 1; t < table.rows.length; t++)
		{
			sumHsl = sumHsl + parseInt(table.rows[t].cells[4].innerHTML);
		}
		document.getElementById("total_harga").value =  sumHsl;
    }
    $("#penjualan").submit(function(e) {
	var form = this;
	var temporary_tbl = $('table#sementara tbody tr').get().map(function(row) {
		return $(row).find('td').get().map(function(cell) {
			return $(cell).html();
		});
	});
	$("#submit").val(JSON.stringify(temporary_tbl));
});
</script>
    <script type ="text/javascript">
		$("#penjualan").keyup(function(){
			var harga = parseInt($("#harga_jual").val())
			var qty = parseInt($("#qty").val())
			
			var total = harga * qty;
			$("#harga_total").attr("value",total)
			
			});
        $("#penjualan").keyup(function(){
            var total = parseInt($("#total_harga").val())
            var potongan = parseInt($("#potongan").val())
                    
            var tot_bayar = total - potongan;
            $("#total_bayar").attr("value",tot_bayar)
        });
		
		$("#penjualan").keyup(function(){
			var total = parseInt($("#total_bayar").val())
            var bayar = parseInt($("#bayar").val())
			
			var kembali = bayar - total;
			$("#kembali").attr("value",kembali)
		});
	</script>
<script type="text/javascript">
      jQuery(function ($) {
        $("#id_tanaman").change(function(){
                
                var id_tanaman=$("#id_tanaman").val()
                console.log(id_tanaman);
            $.ajax({
              type:'GET',
              data:'id_tanaman='+id_tanaman,
              url:'json_tanaman.php',
              dataType:'json',
              success:function(data){
                for(var i=0; i < data.length; i++){
                  $("#harga_jual").val(data[i].harga_jual)
                }
              }
            });
          });


    });

</script>

<script>
    $(document).ready(function () {
        $("#id_tanaman").select2({
            placeholder: "Please Select"
        });
        $("#id_pelanggan").select2({
            placeholder: "Please Select"
        });
    });
</script>

</body>

</html>
        <?php } ?>

<?php 

    if(isset($_POST['tambah'])){
        $cek = mysqli_query($koneksi, "SELECT * FROM t_tanaman WHERE id_tanaman = '$_POST[id_tanaman]'");
        $data = mysqli_fetch_array($cek);

        if($_POST['qty'] >= $data['stok']){
            echo "  <script>
                        alert('Maaf Stok Tanaman tidak mencukupi,  Mohon cek Stok Tanaman yang tersedia dan coba kembali');window.location.href='penjualan2.php';
                    </script>";
        }
    }

?>