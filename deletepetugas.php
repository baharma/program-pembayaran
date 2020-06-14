<?php
include 'koneksi.php';
$kode=$_GET['del'];
$sql="DELETE FROM tblogin WHERE KodeLogin='$kode'";
$query=mysql_query($sql);
if ($query) {
	echo "<script>alert('terhapus');location.href='tampilpetugas.php'</script>";
}else{
	echo "<script>alert('gagal terhapus');location.href='tampilpetugas.php'</script>";
}
?>