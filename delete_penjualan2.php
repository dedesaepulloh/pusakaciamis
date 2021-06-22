<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM t_penjualan_detail WHERE id_penjualan = '$_GET[id_penjualan]'");

    if(hapus){
        header("location:laporan_penjualan2.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='laporan_penjualan2.php'>Kembali</a>";
    }
?>