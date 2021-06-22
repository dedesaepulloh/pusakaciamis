<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM t_kategori WHERE id_kategori = '$_GET[id_kategori]'");

    if(hapus){
        header("location:kategori.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='kategori.php'>Kembali</a>";
    }
?>