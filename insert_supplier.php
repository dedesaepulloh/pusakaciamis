<?php 
    include "koneksi.php";
    $simpan = mysqli_query($koneksi, "INSERT INTO t_supplier (nama_organisasi, nama_supplier, alamat, no_hp) VALUES ('$_POST[nama_organisasi]', '$_POST[nama_supplier]', '$_POST[alamat]', '$_POST[no_hp]')");

    if($simpan){
        header("location:supplier.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='supplier.php'>Kembali</a>";
    }
?>