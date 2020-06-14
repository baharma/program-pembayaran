<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['Username'])) {


?>
<?php
$kode=$_GET['edit'];
$sql="select * from tbtarif where KodeTarif='$kode'";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit Tarif</title>
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
<table>
	<form action="prosesedittarif.php" method="POST">
		<tr>
			<td>Daya</td>
			<td>:</td>
			<td><input type="text" name="Daya" value="<?php echo $data['Daya']; ?>">
			    <input type="hidden" name="KodeTarif" value="<?php echo $data['KodeTarif']; ?>"></td>
		</tr>
		<tr>
			<td>TarifPerKwh</td>
			<td>:</td>
			<td><input type="text" name="TarifPerKwh" value="<?php echo $data['TarifPerKwh']; ?>"></td>
		</tr>
		<tr>
			<td>Beban</td>
			<td>:</td>
			<td><input type="text" name="Beban" value="<?php echo $data['Beban']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="update"></td>
		</tr>
		<tr>
			<td><a href="tampiltarif.php">Tampil</a></td>
			<td><a href="home.php">Home</a></td>
		</tr>
	</form>
</table>
</body>
</html>
<?php
}else{
	echo "<script>alert('login dahulu');location.href='index.php'</script>";
}

?>