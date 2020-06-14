<?php 
include 'koneksi.php';
$KodePelanggan=$_POST['KodePelanggan'];
$NoPelanggan=$_POST['NoPelanggan'];
$KodeTarif=$_POST['KodeTarif'];
$NamaLengkap=$_POST['NamaLengkap'];
$Telp=$_POST['Telp'];
$Alamat=$_POST['Alamat'];
$sql="update tbpelanggan set NoPelanggan='$NoPelanggan',KodeTarif='$KodeTarif',NamaLengkap='$NamaLengkap',Telp='$Telp',Alamat='$Alamat' where KodePelanggan='$KodePelanggan'";
$query=mysql_query($sql);
if ($query) {
 	echo "<script>alert('Berhasil');location.href='Tampilpelanggan.php'</script>";
}
?>