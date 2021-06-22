<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM t_preorder WHERE id_po = '$_GET[id_po]'");

    if(hapus){
        header("location:preorder.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='preorder.php'>Kembali</a>";
    }
?>