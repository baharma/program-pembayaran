<?php 
include 'koneksi.php';
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$NamaLengkap=$_POST['NamaLengkap'];
$Level=$_POST['Level'];

$cekdulu="select * from tblogin where Username='$Username'";

$cek=mysql_query($cekdulu);
$row=mysql_num_rows($cek);
if ($row>0) {
	echo"<script>alert('Username sudah ada ');location.href='petugas.php'</script>";
}else{

	$sql="insert into tblogin values(null,'$Username','$Password','$NamaLengkap','$Level')";
$query=mysql_query($sql);
if ($query) {
	echo "<script>alert('Berhasil');location.href='petugas.php'</script>";
}else{
	echo "<script>alert('gagal');location.href='petugas.php'</script>";
}
}
?>