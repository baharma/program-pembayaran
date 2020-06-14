<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['Username'])) {


?>

<!DOCTYPE html>
<html>
<head>

	<title>Home</title>
		<link rel="stylesheet" type="text/css" href="halaman.css">
</head>
<body>
	<?php 
$Level=$_SESSION['Level'];
if ($Level=='Admin') {

	?>

<table class="bagiaa"><div class="sub">
	<ul style="list-style: none;" class="sub">
		<li><a href="petugas.php" >Input Petugas</a></li>
		<li><a href="tarif.php" >Input Tarif</a></li>
		<li><a href="pelanggan.php" >Input Pelanggan</a></li>
		<li><a href="tagihan.php" >Tagihan</a></li>
		<li><a href="pembayaran.php" >Pembayaran</a></li>
		<li><a href="keluar.php" >Keluar</a></li>

	</ul>
</table></div>
<?php
}else{
?>
<table class="bagiaa">
	<ul style="list-style: none;" class="sub">
		
		<li><a href="#">Tagihan</a></li>
		<li><a href="#">Pembayaran</a></li>
		<li><a href="keluar.php">Keluar</a></li>

	</ul>
</table>
<?php  
}
?>

</body>
</html>
<?php
}else{
	echo "<script>alert('login dahulu');location.href='index.php'</script>";
}

?>