<?php
include 'koneksi.php';
session_start();
$Username=$_POST['Username'];
$Password=$_POST['Password'];
$sql="select * from tblogin where Username='$Username' and Password='$Password'";
$query=mysql_query($sql);
$data=mysql_num_rows($query);
if ($data>0) {
	$hasil=mysql_fetch_array($query);

	$Username=$hasil['Username'];
	$_SESSION['Username']=$Username;

	$NamaLengkap=$hasil['NamaLengkap'];
	$_SESSION['NamaLengkap']=$NamaLengkap;

	$KodeLogin=$hasil['KodeLogin'];
	$_SESSION['KodeLogin']=$KodeLogin;

	$Level=$hasil['Level'];
	$_SESSION['Level']=$Level;

	echo "<script>alert('berhasil login');location.href='home.php'</script>";
}else{
	echo "<script>alert('gagal login');location.href='index.php'</script>";
}

?>