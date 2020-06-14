<?php
include'koneksi.php';
$NoPelanggan=$_POST['NoPelanggan'];
$NoMeter=$_POST['NoMeter'];
$KodeTarif=$_POST['KodeTarif'];
$NamaLengkap=$_POST['NamaLengkap'];
$Telp=$_POST['Telp'];
$Alamat=$_POST['Alamat'];
$cekdulu="select * from tbpelanggan where NoPelanggan='$NoPelanggan'";
$cek=mysql_query($cekdulu);
$row=mysql_num_rows($cek);
if ($row>0) {
	echo"<script>alert('Data Sudah ada');location.href='pelanggan.php'</script>";
}
else{

	$sql="insert into tbpelanggan values(null,'$NoPelanggan','$NoMeter','$KodeTarif','$NamaLengkap','$Telp','$Alamat')";
$query=mysql_query($sql);
if ($query) {

	
	echo"<script>alert('berhasil disimpan');location.href='pelanggan.php'</script>";
	
}

}
?>