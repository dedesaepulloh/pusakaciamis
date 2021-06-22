<?php 
    include "koneksi.php";
    $pass = $_POST['password'];
    $md5 = md5 ($pass);
    $simpan = mysqli_query($koneksi, "INSERT INTO t_user (nama_user, level, username, password) VALUES ('$_POST[nama_user]', '$_POST[level]', '$_POST[username]', '$md5')");

    if($simpan){
        header("location:user.php");
    }else{
        echo "<p>Gagal Menyimpan</p><a href='user.php'>Kembali</a>";
    }
?>