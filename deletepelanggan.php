<?php 
include 'koneksi.php';
$kode=$_GET['del'];
$sql="delete from tbpelanggan where KodePelanggan='$kode'";
$query=mysql_query($sql);
if ($query) {
	echo "<script>alert('berhasil dihapus');location.href='Tampilpelanggan.php'</script>";
}else{
	echo "<script>alert('gagal dihapus');location.href='Tampilpelanggan.php'</script>";

}
?>