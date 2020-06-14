<?php 
include 'koneksi.php';
$NoPelanggan=$_GET['NoPelanggan'];
$Status=$_GET['Status'];
$KodeTagihan=$_GET['KodeTagihan'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>cetak nota</title>
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<?php    
	if ($Status=="Belum") {
		
	?>
	<div class="kotak"><table><form>
		<p>PT.PLN Sejahtera</p>
		<p>dengan Ini anda dinyatakan belum bayar tagihan anda silahkan 
		bayar di tempat tokopedia ataupun bank terdekat</p>
		<p>Halaman Tagihan..</p>
		<table border="1px;" align="center"><form>
		
		<tr>
			<td>no</td>
			<td>NoTagihan</td>
			<td>NoPelanggan</td>
			<td>Tahun</td>
			<td>Bulan</td>
			<td>JumlahPemakaian</td>
			<td>Status</td>
			<td>TotalBayar</td>
			<td>Bayar</td>
		</tr>
		<?php
		$sql="select * from tbtagihan where KodeTagihan='$KodeTagihan'";
		$query=mysql_query($sql);
		$no=1;
		while ($data=mysql_fetch_array($query)) {
			
		
		?>
		    <td><?php echo $no; ?></td>
			<td><?php echo $data['NoTagihan']; ?></td>
			<td><?php echo $data['NoPelanggan']; ?></td>
			<td><?php echo $data['TahunTagih']; ?></td>
			<td><?php echo $data['BulanTagih']; ?></td>
			<td><?php echo $data['JumlahPemakaian']; ?></td>
			<td><?php echo $data['Status']; ?></td>
			<td><?php echo $data['TotalBayar']; ?></td>
			<td><a href="pembayaran.php">Bayar</a></td>
			<?php
$no++;
}
			?>
</form></table>

<p>Silahakan bayar di tempat yg sudah di sediakan</p>
<a href="home.php">Halama Utama</a>
		<style type="text/css">
			.kotak{
				padding: 10px;
				text-align: center;
				font-family:Verdana, Geneva, sans-serif;
				border: 1px #000 solid; 

			}
		</style>
	</div>
<?php 
}
?>

<?php    
	if ($Status=="Lunas") {
		
	?>
	<div class="kotak"><table><form>
		<p>PT.PLN Sejahtera</p>
		<p>Terima kasih anda sudah membayar tagihan anda</p>
		<p>Halaman Tagihan..</p>
		<table border="1px;" align="center"><form>
		
		<tr>
			<td>no</td>
			<td>NoTagihan</td>
			<td>NoPelanggan</td>
			<td>Tahun</td>
			<td>Bulan</td>
			<td>JumlahPemakaian</td>
			<td>Status</td>
			<td>TotalBayar</td>
			<td>Bayar</td>
		</tr>
		<?php
		$sql="select * from tbtagihan where KodeTagihan='$KodeTagihan'";
		$query=mysql_query($sql);
		$no=1;
		while ($data=mysql_fetch_array($query)) {
			
		
		?>
		    <td><?php echo $no; ?></td>
			<td><?php echo $data['NoTagihan']; ?></td>
			<td><?php echo $data['NoPelanggan']; ?></td>
			<td><?php echo $data['TahunTagih']; ?></td>
			<td><?php echo $data['BulanTagih']; ?></td>
			<td><?php echo $data['JumlahPemakaian']; ?></td>
			<td><?php echo $data['Status']; ?></td>
			<td><?php echo $data['TotalBayar']; ?></td>
			<td><a href="pembayaran.php">Bayar</a></td>
			<?php
$no++;
}
			?>
</form></table>

<p>Silahakan bayar di tempat yg sudah di sediakan</p>
<a href="home.php">Halama Utama</a>
		<style type="text/css">
			.kotak{
				padding: 10px;
				text-align: center;
				font-family:Verdana, Geneva, sans-serif;
				border: 1px #000 solid; 

			}
		</style>
	</div>
<?php 
}
?>
</body>
</html>