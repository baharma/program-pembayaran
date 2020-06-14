<?php
include 'koneksi.php';
$kode=$_GET['del'];
$sql="delete from tbtarif where KodeTarif='$kode' ";
$query=mysql_query($sql);
if ($query) {
	echo "<script>alert('terhapus');location.href='tampiltarif.php' </script>";
}else{
	echo "<script>alert('gagal terhapus');location.href='tampiltarif.php' </script>";
}
	?>
}





