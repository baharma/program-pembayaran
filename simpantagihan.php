<?php
include 'koneksi.php';
$NoPelanggan=$_POST['NoPelanggan'];
$TahunTagih=$_POST['TahunTagih'];
$BulanTagih=$_POST['BulanTagih'];
$JumlahPemakaian=$_POST['JumlahPemakaian'];
$Status="Belum";

function NoTagihan(){
	$kode="123456789QQWERTYUIPASDFGHJKLZXCVBNM";
	$log=substr(str_shuffle($kode),0,6);
	return $log;
	
}
$NoTagihan=NoTagihan();

function kodetarif($NoPelanggan){
	$sql="select KodeTarif from tbpelanggan where NoPelanggan='$NoPelanggan'";
	$query=mysql_query($sql);
	$row=mysql_num_rows($query);
	if ($row>0) {
		$hasil=mysql_fetch_array($query);
		$KodeTarif=$hasil['KodeTarif'];
	}
	else{
		$KodeTarif=0;
	}return $KodeTarif;
}
$KodeTarif=kodetarif($NoPelanggan);

function TotalBayar($JumlahPemakaian,$KodeTarif){
$sql2="select * from tbtarif where KodeTarif='$KodeTarif'";
$query2=mysql_query($sql2);
$rows=mysql_num_rows($query2);
if ($rows>0) {
	$data=mysql_fetch_array($query2);
	$Beban=$data['Beban'];
	$TarifPerKwh=$data['TarifPerKwh'];
	$TotalBayar=($TarifPerKwh*$JumlahPemakaian)+$Beban;
}else{
	$TotalBayar=0;
}return $TotalBayar;

}
$TotalBayar=TotalBayar($JumlahPemakaian,$KodeTarif);

$db="select * from tbtagihan where BulanTagih='$BulanTagih' and TahunTagih='$TahunTagih' and NoPelanggan='$NoPelanggan' ";
$query5=mysql_query($db);
$roww=mysql_num_rows($query5);
if ($roww>0) {
	echo "<script>alert('tidak boleh data sama');location.href='tagihan.php' </script>";
}else{

	$sql4="insert into tbtagihan values(null,'$NoTagihan','$NoPelanggan','$TahunTagih','$BulanTagih','$JumlahPemakaian','$Status','$TotalBayar')";
$query4=mysql_query($sql4);
if ($sql4) {
 	
	echo"<script>alert('Berhasil');location.href='tagihan.php'</script>";
}else{
	echo"gagal";
}
}

?>