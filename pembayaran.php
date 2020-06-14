<!DOCTYPE html>
<html>
<head>
	<title>pembayaran</title>
</head>
<body>
<table>
	<form action="simpanpembayaran.php" method="POST">
		<tr>
			<td>NoTagihan</td>
			<td>:</td>
			<td>
				<select name="KodeTagihan">
					<option></option>
					<?php  
					include 'koneksi.php';
					$sql="select * from tbtagihan where KodeTagihan";
					$query=mysql_query($sql);
					while ($data=mysql_fetch_array($query)) {
						
					?>
					<option value="<?php echo $data['KodeTagihan'] ?>"><?php echo $data['NoTagihan'] ?></option><?php } ?>
				</select>
			</td>
		</tr>

		<tr>
			<td>Tgl Bayar</td>
			<td>:</td>
			<td>
				<input type="date" name="TglBayar">
			</td>
		</tr>

		<tr>
			<td>JumlahTagihan</td>
			<td>:</td>
			<td>
				<input type="text" name="JumlahTagihan">
			</td>
		</tr>


		<tr>
			<td>BuktiPembayaran</td>
			<td>:</td>
			<td>
				<input type="file" name="BuktiPembayaran">
			</td>
		</tr>
		<td>Status</td>
		<td>:</td>
<td>
		<select name="Status">
			<option></option>
			<option>Lunas</option>
			<option>Belum</option>
		</select></td>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="bayar"></td>
		</tr>

	</form>
</table>
</body>
</html>