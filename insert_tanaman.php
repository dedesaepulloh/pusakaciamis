<?php 
    include "koneksi.php";
    $simpan = mysqli_query($koneksi, "INSERT INTO t_tanaman (id_kategori, nama_tanaman, tinggi, berat, satuan, harga_beli, harga_jual) VALUES ('$_POST[id_kategori]', '$_POST[nama_tanaman]', '$_POST[tinggi]', '$_POST[berat]', '$_POST[satuan]', '$_POST[harga_beli]', '$_POST[harga_jual]')");

    if($simpan){
        header("location:tanaman.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='tanaman.php'>Kembali</a>";
    }
?>