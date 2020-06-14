<?php 
include 'koneksi.php';
$Daya=$_POST['Daya'];
$TarifPerKwh=$_POST['TarifPerKwh'];
$Beban=$_POST['Beban'];
$sql="insert into tbtarif values(null,'$Daya','$TarifPerKwh','$Beban')";
$query=mysql_query($sql);
if ($query) {
	echo "<script>alert('berhasil');location.href='tarif.php'</script>";
}
else{
	echo "<script>alert('gagal');location.href='tarif.php'</script>";
}
?>