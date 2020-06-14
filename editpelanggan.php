<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['Username'])) {


?>
<?php 
$kode=$_GET['edit'];
$sql="SELECT * FROM tbpelanggan where KodePelanggan='$kode'";
$query=mysql_query($sql);
$data=mysql_fetch_array($query)
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>edit pelanggan</title>
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
	<table><form action="proseseditpelanggan.php" method="POST">
<h1 align="center">Input Login</h1>
		<tr>
			<td>NoPelanggan</td>
			<td>:</td>
			<td>
				<input type="hidden" name="KodePelanggan" value="<?php echo $data['KodePelanggan'] ?>"><input type="text" name="NoPelanggan" value="<?php echo $data['NoPelanggan'] ?>"></td>
		</tr>

		<tr>
			<td>NoMeter</td>
			<td>:</td>
			<td><input type="text" name="NoMeter" value="<?php echo $data['NoMeter'] ?>"></td>
		</tr>
		<tr>
			<td>KodeTarif</td>
			<td>:</td>
			<td><select name="KodeTarif" >
				<option><?php echo $data['KodeTarif'] ?></option>
				<?php 
				$sql2="select * from tbtarif where KodeTarif";
				$query2=mysql_query($sql2);
				while ($data2=mysql_fetch_array($query2)) {
					
				 ?>
				 <option value="<?php echo $data2['KodeTarif'] ?>">RP.<?php echo $data2['TarifPerKwh'] ; ?>  |Kwh.<?php echo $data2['Daya'] ; ?></option><?php } ?>
			</select></td>
		</tr>
		<tr>
			<td>NamaLengkap</td>
			<td>:</td>
			<td><input type="text" name="NamaLengkap" value="<?php echo $data['NamaLengkap'] ?>"></td>
		</tr>
		<tr>
			<td>Telp</td>
			<td>:</td>
			<td><input type="text" name="Telp" value="<?php echo $data['Telp'] ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="Alamat" value="<?php echo $data['Alamat'] ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="input"> <input type="reset" name="reset" value="reset"></td>

		</tr>
			<tr>
			<td><a href="home.php">Home</a></td>
	<td><a href="tampilpelanggan.php">tampil</a></td></tr></form></table>
</body>
</html>

<?php }else{
	echo "<script>alert('login dahulu');location.href='index.php'</script>";
}

?>