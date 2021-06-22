<?php 
    include "koneksi.php";
    $edit = mysqli_query($koneksi, "UPDATE t_tanaman SET id_kategori = '$_POST[id_kategori]', nama_tanaman = '$_POST[nama_tanaman]', tinggi = '$_POST[tinggi]', berat = '$_POST[berat]', satuan = '$_POST[satuan]', harga_beli = '$_POST[harga_beli]', harga_jual = '$_POST[harga_jual]' WHERE id_tanaman = '$_POST[id_tanaman]'");

    if(edit){
        header("location:tanaman.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='tanaman.php'>Kembali</a>";
    }
?>