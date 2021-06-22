<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM t_tanaman WHERE id_tanaman = '$_GET[id_tanaman]'");

    if(hapus){
        header("location:tanaman.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='tanaman.php'>Kembali</a>";
    }
?>