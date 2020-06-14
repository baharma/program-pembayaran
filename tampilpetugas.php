<?php
include 'koneksi.php';
session_start();
if (isset($_SESSION['Username'])) {


?>

<!DOCTYPE html>
<html>
<head>
	<title>Tampil Petugas</title>
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
	<table align="center" border="1px">
		<form>
			<h1 align="center">Tampil Petugas</h1>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>NamaLengKap</th>
				<th>Level</th>
				<th>Aksi</th>
			</tr>

			<?php 
			$sql="select * from tblogin order by KodeLogin";
			$query=mysql_query($sql);
			$no=1;
			while($data=mysql_fetch_array($query)) {
			
			 ?>
			 <tr>
			 	<td><?php echo $no ;  ?></td>
			 	<td><?php echo $data['Username'] ;  ?></td>
			 	<td>*********</td>
			 	<td><?php echo $data['NamaLengkap'] ;  ?></td>
			 	<td><?php echo $data['Level'] ;  ?></td>
			 	<td><a href="deletepetugas.php?del=<?php echo $data['KodeLogin'] ?>">Delete</a>|<a href="editpetugas.php?edit=<?php echo $data['KodeLogin'] ?>">Edit</a></td>
			 </tr>

			 <?php  
			$no++;
			}

			 ?>

		</form>
	</table><table align="center">
		 <tr >
	<td><a href="home.php" style="padding: 5px;
	background: #9F0; text-decoration: none; color: #fff;">Home</a></td>
	<td><a href="tampilpetugas.php" style="padding: 5px;
	background: #9F0; text-decoration: none; color: #fff;">tampil</a></td>
</tr></table>
</body>
</html>


<?php }else{
	echo "<script>alert('login dahulu');location.href='index.php'</script>";
}

?>