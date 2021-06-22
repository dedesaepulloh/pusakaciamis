<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM t_pelanggan WHERE id_pelanggan = '$_GET[id_pelanggan]'");

    if(hapus){
        header("location:pelanggan.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='pelanggan.php'>Kembali</a>";
    }
?>