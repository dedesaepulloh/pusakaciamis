<?php 
session_start();
session_destroy();
echo "<script>alert('Anda sudah keluar !'); window.location = 'login.php'</script>";
?>