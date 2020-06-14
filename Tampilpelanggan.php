<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['Username'])) {


?>

<!DOCTYPE html>
<html>
<head>
	<title>tampil pelanggan</title>
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
<table border="1px" align="center">
	<form><h1 align="center">Halaman Tampil Pelanggan</h1>
		<tr>
			<td>No</td>
			<td>NomerPelanggan</td>
			<td>NoMeter</td>
			<td>KodeTarif</td>
			<td>NamaLengkap</td>
			<td>Telp</td>
			<td>Alamat</td>
			<td>Aksi</td>
		</tr>
		<?php 
		$sql="SELECT tbpelanggan.*, tbtarif.* FROM tbpelanggan INNER JOIN tbtarif ON tbpelanggan . KodeTarif=tbtarif . KodeTarif";
		$no=1;
		$query=mysql_query($sql);
		while ($data=mysql_fetch_array($query)) {
		
		?><tr>
			<td><?php echo $no ; ?></td>
			<td><?php echo $data['NoPelanggan'] ; ?></td>
			<td><?php echo $data['NoMeter'] ; ?></td>
			<td><?php echo $data['KodeTarif'] ; ?></td>
			<td><?php echo $data['NamaLengkap'] ; ?></td>
			<td><?php echo $data['Telp'] ; ?></td>
			<td><?php echo $data['Alamat'] ; ?></td>
			<td><a href="deletepelanggan.php?del=<?php echo $data['KodePelanggan'] ?>">delete</a>|<a href="editpelanggan.php?edit=<?php echo $data['KodePelanggan'] ?>">edit</a></td>

		</tr>
		<?php  
$no++;
	}
		?>
	</form>
</table>
</body>
</html>
<?php }else{
	echo "<script>alert('login dahulu');location.href='index.php'</script>";
}

?>