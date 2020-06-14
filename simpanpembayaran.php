<?php  
include 'koneksi.php';
$KodeTagihan=$_POST['KodeTagihan'];
$TglBayar=$_POST['TglBayar'];
$JumlahTagihan=$_POST['JumlahTagihan'];
$BuktiPembayaran=$_POST['BuktiPembayaran'];
$Status=$_POST['Status'];
$sql="insert into tbpembayaran values(null,'$KodeTagihan','$TglBayar','$JumlahTagihan','$BuktiPembayaran','$Status')";
$query=mysql_query($sql);
if ($query) {
	echo"<script>alert('berhasil');location.href='pembayaran.php'</script>";
}else{
	echo"<script>alert('gagal');location.href='pembayaran.php'</script>";
}
?>