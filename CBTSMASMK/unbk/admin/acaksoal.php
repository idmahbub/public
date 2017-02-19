<?php
include("cbt_con.php"); 
$kodesoal = $_POST['kodesoal'];


if(isset($_POST['acak'])){
	$query = "UPDATE cbt_soal SET Xidacak = '1' WHERE XKodeSoal = '$kodesoal'";
$result = mysql_query($query);
header("location:index.php?page=buat_soal");
	}elseif(isset($_POST['tidak'])){
		$query0 = "UPDATE cbt_soal SET Xidacak = '0' WHERE XKodeSoal = '$kodesoal'";
$result0 = mysql_query($query0);
header("location:index.php?page=buat_soal");
	}else{
header("location:index.php?page=buat_soal");
	
}
	?>

