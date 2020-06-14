<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['Username'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tarif</title>
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
		<li><a href="#" >Pembayaran</a></li>
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
<table align="center">
	<form action="prosesinputtarif.php" method="POST">
		<h1 align="center">Input Tarif</h1>
		<tr>
			<td>Daya</td>
			<td>:</td>
			<td><input type="text" name="Daya"></td>
		</tr>
		<tr>
			<td>TarifPerKwh</td>
			<td>:</td>
			<td><input type="text" name="TarifPerKwh"></td>
		</tr>
		<tr>
			<td>Beban</td>
			<td>:</td>
			<td><input type="text" name="Beban"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="register"> <input type="reset" name="reset" value="reset"></td>
		</tr>
		<tr>
			<td><a href="tampiltarif.php" style="padding: 5px;
	background: #9F0; text-decoration: none; color: #fff;">Tampil</a></td>
			<td><a href="home.php" style="padding: 5px;
	background: #9F0; text-decoration: none; color: #fff;">Home</a></td>
		</tr>
	</form>
</table>
</body>
</html>

<?php }else{
	echo "<script>alert('login dahulu');location.href='index.php'</script>";
}

?>