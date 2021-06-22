<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM t_user WHERE id_user = '$_GET[id_user]'");

    if(hapus){
        header("location:user.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='user.php'>Kembali</a>";
    }
?>