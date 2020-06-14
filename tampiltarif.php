<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['Username'])) {


?>

<!DOCTYPE html>
<html>
<head>
	<title>tampil</title>
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
	<form action="" method="">
		<h1 align="center">Tampil tarif</h1>
		<tr>
			<td>No</td>
			<td>Daya</td>
			<td>TarifPerKwh</td>
			<td>Beban</td>
			<td>Aksi</td>
		</tr>
		<?php 
$sql="select * from tbtarif where KodeTarif";
$query=mysql_query($sql);
$no=1;
while ($data=mysql_fetch_array($query)) {

?>
<tr>
	<td><?php echo $no ; ?></td>
	<td><?php echo $data['Daya'] ; ?></td>
	<td><?php echo $data['TarifPerKwh'] ; ?></td>
	<td><?php echo $data['Beban'] ; ?></td>
	<td><a href="deletetarif.php?del=<?php echo $data['KodeTarif'] ?>">delete</a>|<a href="edittarif.php?edit=<?php echo $data['KodeTarif'] ?>">edit</a></td>
</tr>
<?php
$no++;  
}
?>
	</form>
</table>
</body>
</html>



<?php
}else{
	echo "<script>alert('login dahulu');location.href='index.php'</script>";
}

?>