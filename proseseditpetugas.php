<?php 
include 'koneksi.php';
$KodeLogin=$_POST['KodeLogin'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$NamaLengkap=$_POST['NamaLengkap'];
$Level=$_POST['Level'];
$sql="UPDATE tblogin SET  Username='$Username',Password='Password',NamaLengkap='$NamaLengkap',Level='$Level' WHERE KodeLogin='$KodeLogin'";
$query=mysql_query($sql);
if ($query) {
	echo "<script>alert('berhasil');location.href='tampilpetugas.php'</script>";
}
?>