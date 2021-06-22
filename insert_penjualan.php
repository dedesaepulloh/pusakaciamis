<?php 
    include "koneksi.php";

    if($_POST['kembali'] < 0){
        echo "<script>alert('Jumlah Bayar Anda Kurang Dari Total Yang Harus Dibayar'); window.location.href='penjualan.php';</script>";
        
    }else{
    
        $id_penjualan = $_POST['id_penjualan'];
        $add = $_POST['submit'];
        $temporary_value = json_decode($add);
        $simpan = mysqli_query($koneksi, "INSERT INTO t_penjualan_head (id_penjualan, id_pelanggan, tanggal) VALUES ('$_POST[id_penjualan]', '$_POST[id_pelanggan]', '$_POST[tanggal]')");

        if($simpan){
            foreach((array)$temporary_value as $row){
                $id_penjualan 	= $row[0];
                $id_tanaman 	= $row[1];
                $harga 	= $row[2]; 
                $qty 	= $row[3]; 
                $harga_total 	= $row[4]; 
                $total_harga = $_POST['total_harga'];
                $potongan = $_POST['potongan'];
                $total_bayar = $_POST['total_bayar'];
                $bayar = $_POST['bayar'];
                $kembali = $_POST['kembali'];
                // query insert
                $simpan1 = mysqli_query($koneksi, "INSERT INTO t_penjualan_detail (id_penjualan, id_tanaman, harga, qty, harga_total, total_harga, potongan, total_bayar, bayar, kembali) VALUES ('$id_penjualan', '$id_tanaman', '$harga', '$qty', '$harga_total', '$total_harga', '$potongan', '$total_bayar', '$bayar', '$kembali')");


                // UPDATE STOK TANAMAN
                // $sql1  =  mysqli_query ($koneksi,"SELECT SUM(qty) AS total FROM t_penjualan_detail WHERE id_tanaman = '$id_tanaman' ")  ;
                // $data1 = mysqli_fetch_array ($sql1);
                
                // $tampil = mysqli_query($koneksi, "SELECT * FROM t_tanaman");
                // $data = mysqli_fetch_array($tampil);

                // $stok = $data['stok'] - $qty;

                $edit = mysqli_query($koneksi, "UPDATE t_tanaman SET stok = stok - '$row[3]' WHERE id_tanaman = '$row[1]'");
                
                header("location:struk_penjualan.php?id_penjualan=$id_penjualan");

                
        }
    }else{
        echo "<p>Gagal Menyimpan</p><a href='penjualan.php'>Kembali</a>";
    }
}
?>