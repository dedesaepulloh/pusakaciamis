<?php 
include "koneksi.php";
    $add = $_POST['add'];
    $temporary_value = json_decode($add);
    foreach((array)$temporary_value as $row){
        $order 	= $row[0];
        $tanggal 	= $row[1];
        $supplier 	= $row[2]; 
        $tanaman 	= $row[3]; 
        $qty 	= $row[4]; 
        $satuan 	= $row[5]; 
   
        // query insert
        $simpan = mysqli_query($koneksi, "INSERT INTO t_preorder (id_po,tanggal,supplier,tanaman,qty,satuan) VALUES ('$order', '$tanggal', '$supplier', '$tanaman', '$qty', '$satuan')");

        if($simpan){
            header("location:struk_preorder.php?id_po=$order");
        }else{
            echo "<p>Gagal Menyimpan</p><a href='preorder.php'>Kembali</a>";
        }
    }
?>