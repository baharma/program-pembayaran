<?php
include 'koneksi.php';
$KodeTarif=$_POST['KodeTarif'];
$Daya=$_POST['Daya'];
$TarifPerKwh=$_POST['TarifPerKwh'];
$Beban=$_POST['Beban'];
$sql="update tbtarif set Daya='$Daya',TarifPerKwh='$TarifPerKwh',Beban='$Beban' where KodeTarif='$KodeTarif'";
$query=mysql_query($sql);
if ($query) {
	echo "<script>alert('berhasil');location.href='tampiltarif.php'</script>";
}
?>