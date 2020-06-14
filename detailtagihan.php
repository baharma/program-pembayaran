<?php 
include 'koneksi.php';
$NoPelanggan=$_POST['NoPelanggan'];
$sql="SELECT * FROM tbpelanggan where NoPelanggan='$NoPelanggan'";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>detail tagihan</title><link rel="stylesheet" type="text/css" href="halaman.css">

</head>
<body>
	
	<table>
		<form>
			<tr>
				<td>Nama Pelanggan</td>
				<td>:</td>
				<td><?php echo $data['NamaLengkap'] ; ?></td>
			</tr>
			<tr>
				<td>Nomor Meter</td>
				<td>:</td>
				<td><?php echo $data['NoMeter'] ; ?></td>

			</tr>
		</form>
	</table>
	<hr>
<table align="center" border="1px">
	<form>
		<tr>
			<td>no</td>
			<td>Tahun</td>
			<td>Bulan</td>
			<td>jumlah pemakaian</td>
			<td>Total bayar</td>
			<td>Status</td>
			<td>Aksi</td>
		</tr>
		<?php 
		$sql2="SELECT tbtagihan.*, tbpelanggan.* FROM tbtagihan INNER JOIN tbpelanggan ON tbtagihan . NoPelanggan=tbpelanggan .NoPelanggan";
		$query2=mysql_query($sql2);
		$no=1;
		while ($data2=mysql_fetch_array($query2)) {
		

		 ?><tr>
		 <td><?php echo $no ; ?></td>
		 <td><?php echo $data2['TahunTagih']  ; ?></td>
		  <td><?php echo $data2['BulanTagih']  ; ?></td>
		   <td><?php echo $data2['JumlahPemakaian']  ; ?></td>
		    <td><?php echo $data2['TotalBayar']  ; ?></td>
		     <td><?php echo $data2['Status']  ; ?></td>
		     <td><a href="detailalur.php?<?php echo"NoPelanggan=" .$data2['NoPelanggan'] ?>&<?php echo"KodeTagihan=" .$data2['KodeTagihan'] ?>">detail</a>|<a href="cetaknota.php?<?php echo"NoPelanggan=" .$data2['NoPelanggan'] ?>&<?php echo"KodeTagihan=" .$data2['KodeTagihan'] ?>&<?php echo"Status=" .$data2['Status'] ?>">chack</a></td>
		</tr>
		<?php 
	$no++;
	}
	 ?>
	</form>
</table>
<table>
	<form action="simpantagihan.php" method="POST">
		<tr>
			<td>Jumlah Pemakaiyan</td>
			<td>:</td>
			<td>
				<input type="hidden" name="NoPelanggan" value="<?php echo $NoPelanggan ?>">
				<input type="text" name="JumlahPemakaian"></td>
		</tr>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><input type="text" name="BulanTagih"></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><input type="text" name="TahunTagih"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit"></td>
		</tr>
	</form>
</table>
</body>
</html>