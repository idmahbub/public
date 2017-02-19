<?php
include("cbt_con.php"); 
$urut = $_GET['id'];
$sql013 = "select * from cbt_soal where Urut = '$urut' ";
$result013 = mysql_query($sql013);
$mhs013 = mysql_fetch_array($result013);
$ts = $mhs013['XTypeSoal'];
$ks = $mhs013['XKodeSoal'];
if($ts =='0'){
	$query = "update cbt_soal set XTypeSoal='1' WHERE Urut = '$urut'";
$result = mysql_query($query);
header("location:index.php?page=list_soal&id=$ks");
}else{
	$query1 = "update cbt_soal set XTypeSoal='0' WHERE Urut = '$urut'";
$result1 = mysql_query($query1);
header("location:index.php?page=list_soal&id=$ks");
}
	?>

