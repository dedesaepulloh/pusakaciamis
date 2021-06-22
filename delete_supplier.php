<?php 
    include "koneksi.php";
    $hapus = mysqli_query($koneksi, "DELETE FROM t_supplier WHERE id_supplier = '$_GET[id_supplier]'");

    if(hapus){
        header("location:supplier.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='supplier.php'>Kembali</a>";
    }
?>