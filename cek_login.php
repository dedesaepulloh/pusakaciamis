<?php 
    session_start();
    include "koneksi.php";

    $password = md5 ($_POST['password']);
    $username = $_POST['username'];

    $login = mysqli_query($koneksi, "SELECT * FROM t_user WHERE username='$username' AND password='$password'");

    $data = mysqli_fetch_assoc($login);
    $cek = mysqli_num_rows($login);

    if($cek > 0){

        // cek jika user login sebagai admin
        if($data['level']=="admin"){

            // buat session login dan username
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['nama_user'] = $data['nama_user'];
            $_SESSION['level']    = "admin";
            // alihkan ke halaman dashboard admin
            header("location:index.php");

        // cek jika user login sebagai kasir
        }else if($data['level']=="kasir"){
            // buat session login dan username
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['nama_user'] = $data['nama_user'];
            $_SESSION['level']    = "kasir";
            // alihkan ke halaman dashboard pegawai
            header("location:index2.php");
    
        // cek jika user login sebagai pengurus
        }else{
            // alihkan ke halaman login kembali
            header("location:login.php?pesan=gagal");
        }
    
    }else{
        header("location:login.php?pesan=gagal");
    }

?>