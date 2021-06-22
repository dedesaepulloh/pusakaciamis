<?php 
    include "koneksi.php";
    $simpan = mysqli_query($koneksi, "INSERT INTO tmp_penjualan (id_penjualan, id_tanaman, harga, qty, harga_total) VALUES ('$_POST[id_penjualan]', '$_POST[id_tanaman]', '$_POST[harga_jual]', '$_POST[qty]', '$_POST[harga_total]')");

    if($simpan){
        header("location:penjualan.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='penjualan.php'>Kembali</a>";
    }
?>