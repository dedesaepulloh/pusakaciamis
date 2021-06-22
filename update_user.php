<?php 
    include "koneksi.php";
    $pass = $_POST['password'];
    $md5 = md5 ($pass);
    $edit = mysqli_query($koneksi, "UPDATE t_user SET nama_user = '$_POST[nama_user]', level = '$_POST[level]', username = '$_POST[username]', password = '$md5' WHERE id_user = '$_POST[id_user]'");

    if($edit){
        header("location:user.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='user.php'>Kembali</a>";
    }
?>