<?php
include"koneksi.php";
$KodeTagihan=$_POST['KodeTagihan'];
$Status=$_POST['Status'];

$sql="UPDATE tbtagihan set Status='$Status' where KodeTagihan='$KodeTagihan'";
$query=mysql_query($sql);
if ($query) {
	echo "<script>alert('berhasil');location.href='tagihan.php'</script>";
}else{
	echo "<script>alert('Gagal');location.href='tagihan.php'</script>";
}
?>