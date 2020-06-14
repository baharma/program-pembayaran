<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['Username'])) {


?>
<?php  
$Kode=$_GET['edit'];
$sql="SELECT * FROM tblogin WHERE KodeLogin='$Kode'";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>editpetugas</title>
	<link rel="stylesheet" type="text/css" href="halaman.css">
</head>
<body>
<table>
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
	<form action="proseseditpetugas.php" method="POST">
			<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="Username" readonly value="<?php echo $data['Username'] ?>">
				<input type="hidden" name="KodeLogin" value="<?php echo $data['KodeLogin'] ?>"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="Password" name="Password" value="<?php echo $data['Password'] ?>"></td>
		</tr>
		<tr>
			<td>NamaLengkap</td>
			<td>:</td>
			<td><input type="text" name="NamaLengkap" value="<?php echo $data['NamaLengkap'] ?>"></td>
		</tr>
		<tr>
			<td>Level</td>
			<td>:</td>
			<td><select name="Level">
				<option><?php echo $data['Level'] ?></option>
				<option>Admin</option>
				<option>Petugas</option>
			</select></td>
		</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" name="submit" value="Edit"> </td>
</tr><tr>
	<td><a href="home.php">Home</a></td>
	<td><a href="tampilpetugas.php">tampil</a></td>
</tr>
	</form>
</table>
</body>
</html>
<?php }else{
	echo "<script>alert('login dahulu');location.href='index.php'</script>";
}

?>