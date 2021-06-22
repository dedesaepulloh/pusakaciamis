<?php 
    include "koneksi.php";
    $edit = mysqli_query($koneksi, "UPDATE t_supplier SET nama_organisasi = '$_POST[nama_organisasi]', nama_supplier = '$_POST[nama_supplier]', alamat = '$_POST[alamat]', no_hp = '$_POST[no_hp]' WHERE id_supplier = '$_POST[id_supplier]'");

    if(edit){
        header("location:supplier.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='supplier.php'>Kembali</a>";
    }
?>