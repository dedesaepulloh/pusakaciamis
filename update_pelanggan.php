<?php 
    include "koneksi.php";
    $edit = mysqli_query($koneksi, "UPDATE t_pelanggan SET nama_pelanggan = '$_POST[nama_pelanggan]', alamat = '$_POST[alamat]', no_hp = '$_POST[no_hp]' WHERE id_pelanggan = '$_POST[id_pelanggan]'");

    if(edit){
        header("location:pelanggan.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='pelanggan.php'>Kembali</a>";
    }
?>