
<?php  
include 'koneksi.php';
$NoPelanggan=$_GET['NoPelanggan'];
$KodeTagihan=$_GET['KodeTagihan'];
$sql="select * from tbpelanggan where NoPelanggan='$NoPelanggan'";
$query=mysql_query($sql);
$data=mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>detail</title>
</head>
<body>
<table>
	<form>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $data['NamaLengkap'] ?></td>
		</tr>
		<tr>
			<td>NoMeter</td>
			<td>:</td>
			<td><?php echo $data['NoMeter'] ?></td>
		</tr>
		<tr>
			<td>NoPelanggan</td>
			<td>:</td>
			<td><?php echo $data['NoPelanggan'] ?></td>
		</tr>
	</form>
</table>
<hr>
<?php 
$sql2="select * from tbtagihan where KodeTagihan='$KodeTagihan'";

$query2=mysql_query($sql2);
$hasil=mysql_fetch_array($query2);
?>
<table>
	<form action="updatetagihan.php" method="POST">
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><?php echo $hasil['TahunTagih']; ?></td>
		</tr>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo $hasil['BulanTagih']; ?></td>
		</tr>
		<tr>
			<td>JumlahPemakaian</td>
			<td>:</td>
			<td><?php echo $hasil['JumlahPemakaian']; ?></td>
		</tr>
		<tr>
			<td>Status</td>
			<td>:</td>
			<td>
			<select name="Status">
			<option><?php echo  $hasil['Status'] ?></option>	
			<option>Lunas</option>
			<option>Belum</option>
			</select>
		</td>
		</tr>
			<tr>
			<td>JumlahPemakaian</td>
			<td>:</td>
			<td><input type="hidden" name="KodeTagihan" value="<?php echo $KodeTagihan ?>">
				<?php   
			$sql3="select * from tbpembayaran where KodeTagihan='$KodeTagihan'";
			$query3=mysql_query($sql3);
			$row=mysql_num_rows($query3);
			if ($row>0) {
				$data1=mysql_fetch_array($query3);
				$BuktiPembayaran=$data1['BuktiPembayaran'];

				echo "<img src='foto/$BuktiPembayaran' width='100px'  height='100px'/>";
			}else{
				echo "Tidak Ada";
			}
			?>	</td>
		</tr>
			<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="update" ></td>
		</tr>
	</form>
	<a href="home.php">home</a>
</table>
</body>
</html>