<?php
include 'koneksi.php';
session_start();
session_destroy();
echo "<script>alert('Selamat Jalan');location.href='index.php'</script>";


?>