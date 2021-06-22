<?php 
    include "koneksi.php";
    include "template/header.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Form Login Animasi</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <div  class="box">
 <form action="" method="post">
  <h1>Sign In</h1>
  <input type="text" name="" placeholder="Username">
  <input type="password" name="" placeholder="Password">
  <input type="submit" name="" value="login">
  <a href="#" style="text-decoration:none;">Forget Password </a> I
  <a href="http://localhost/form-login-animasi/form-register.html" style="text-decoration:none;">Sign Up</a>
 </form>
 </div>
</body>
</html>

Disini admin tidak perlu menjelaskan fungsi dari komponen Html diatas karena di website Zikritekno ini sudah menyediakan tutorial belajar bahasa pemrograman HTML.

Jikas sudah disimpan kemudian buat file baru dan simpan dengan fromat style.css ,simpan bersamaan dengan file form-login.html dalam sebuah folder form-login-animasi. Dan ketikkan syntak berikut :

Kode CSS style.css
body{
 margin: 0;
 padding: 0;
 font-family: sans-serif;
 background: #006064;
}
.box {
 width: 300px;
 padding: 40px;
 position: absolute;
 top: 50%;
 left: 50%;
 transform : translate(-50%,-50%);
 background: #191919;
 text-align: center;
}
.box h1{
 color: white;
 text-transform: uppercase;
 font-weight: 500;
}
.box input[type = "text"],.box input[type = "password"]{
 border: 0;
 background: none;
 display: block;
 margin: 20px auto;
 text-align: center;
 border: 2px solid #3498db;
 padding: 14px 10px;
 width: 200px;
 outline: none;
 color: white;
 border-radius: 24px;
 transition: 0.25s;
}
.box input[type = "text"]:focus,.box input[type = "password"]:focus{
 width: 280px;
 border-color: #2ecc71;
}
.box input[type ="submit"]{
 border: 0;
 background: none;
 display: block;
 margin: 20px auto;
 text-align: center;
 border: 2px solid #2ecc71;
 padding: 14px 40px;
 outline: none;
 color: white;
 border-radius: 24px;
 transition: 0.25s;
 cursor: pointer;
}
.box input[type ="submit"]:hover{
 background: #2ecc71;
}

Untuk belajar CSS admin juga sudah menyediakan tutorial belajar CSS, tinggal teman cari aja dimana property CSS pada syntak diatas yang kurang dimengerti.

Sebagai tambahan buat pula form register/sign up. Buat file baru dan simpan dengan format form-register.html ketikkan syntak berikut :

Kode Html form-register.html
<!DOCTYPE html>
<html>
<head>
 <title>Form Register Animasi</title>
 <link rel="stylesheet" href="Style.css">
</head>
<body>
 <div class="box">
 <form action="" method="post">
  <h1>Sign Up</h1>
  <input type="text" name="" placeholder="Username">
  <input type="text" name="" placeholder="Email">
  <input type="password" name="" placeholder="Password">
  <input type="submit" name="" value="Register">
 </form>
 </div>
</body>
</html>