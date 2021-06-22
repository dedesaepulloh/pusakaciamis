<?php
    include "koneksi.php";
    include"template/header.php";
?>

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

	$koneksi = new mysqli("localhost", "root", "", "bibit_tanaman");

    date_default_timezone_set('Asia/Jakarta');

    function tgl_indo($tanggal){
        $bulan = array (
            1 =>    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
        );
        $pecahkan = explode('-', $tanggal);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }

	$tanggal_awal = $_POST['tanggal_awal'];
	$tanggal_akhir = $_POST['tanggal_akhir'];
?>

<script>
     window.print()
</script>

<div class="page-header">
        <div class="row">
            <div class="col-lg-12" align="center">
                <h2 class="mb-3 line-head" >LAPORAN DATA RAWAT INAP </h2>
                <h4 class="mb-3 line-head" >PER-PERIODE</h4>
                <?php echo date("d-m-Y", strtotime($tanggal_awal))." s/d ".date("d-m-Y", strtotime($tanggal_akhir)) ?>
            </div>
        </div>
    </div><br>

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table align="center" width="100%" border="1" style="border-collapse: collapse;">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>ID Penjualan</th>
                            <th>ID Pelanggan</th>
                            <th>Tanggal</th>
                            <th>ID Tanaman</th>
                            <th>Harga</th>
                            <th>Qty</th>
                            <th>Harga Total</th>
                            <th>Total Harga</th>
                            </tr>
                            <?php 
                                            
                                                // $tampil2 = mysqli_query($koneksi, "SELECT * FROM t_penjualan_head INNER JOIN t_pelanggan ON t_penjualan_head.id_pelanggan = t_pelanggan.id_pelanggan");
                                                // $data2 = mysqli_fetch_assoc($tampil2);
                                                // $tampil3 = mysqli_query($koneksi, "SELECT * FROM t_penjualan_detail INNER JOIN t_tanaman ON t_penjualan_detail.id_tanaman = t_tanaman.id_tanaman");
                                                // $data3 = mysqli_fetch_assoc($tampil3);
                                        
                                                $no = 1;
                                                if(isset($_GET['filter'])){
                                                    $awal = $_GET['tanggal_awal'];
                                                    $akhir = $_GET['tanggal_akhir'];
                                                    $sql = mysqli_query($koneksi, "SELECT * FROM t_penjualan_head INNER JOIN t_penjualan_detail ON t_penjualan_head.id_penjualan = t_penjualan_detail.id_penjualan WHERE t_penjualan_head.tanggal BETWEEN '$awal' AND '$akhir'");  
                                                }else{
                                                    $sql = mysqli_query($koneksi,"SELECT * FROM t_penjualan_head INNER JOIN t_penjualan_detail ON t_penjualan_head.id_penjualan = t_penjualan_detail.id_penjualan");
                                                }

                                                while($data=mysqli_fetch_array($sql)){
                                            ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo "$data[id_penjualan]"; ?></td>
                                                    <td><?php echo "$data[id_pelanggan]"; ?></td>
                                                    <td><?php echo "$data[tanggal]"; ?></td>
                                                    <td><?php echo "$data[id_tanaman]"; ?></td>
                                                    <td><?php echo "$data[harga]"; ?></td>
                                                    <td><?php echo "$data[qty]"; ?></td>
                                                    <td><?php echo "$data[harga_total]"; ?></td>
                                                    <td><?php echo "$data[total_harga]"; ?></td>
                                                </tr>
                                                <?php } ?>
                    </table>
                    <br></br>
                    <br></br>
                    <br></br>
                </div>
            </div>
        </div>
    </div>

<?php include('bottom.php'); ?>