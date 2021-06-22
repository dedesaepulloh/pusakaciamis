<?php 
    include "koneksi.php";
    $simpan = mysqli_query($koneksi, "INSERT INTO t_pelanggan (nama_pelanggan, alamat, no_hp) VALUES ('$_POST[nama_pelanggan]', '$_POST[alamat]', '$_POST[no_hp]')");

    if($simpan){
        header("location:pelanggan.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='pelanggan.php'>Kembali</a>";
    }
?>