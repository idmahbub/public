<?php
include("cbt_con.php"); 
$token = $_POST['token'];
$status = $_POST['status'];

if(isset($_POST['hapus'])){
	$query = "delete from cbt_ujian WHERE XTokenUjian = '$token'";
$result = mysql_query($query);
header("location:index.php?page=status_tes");
	}elseif(isset($_POST['aktifkan'])){
		$query0 = "UPDATE cbt_ujian SET XStatusUjian = '1' WHERE XTokenUjian = '$token'";
$result0 = mysql_query($query0);
header("location:index.php?page=status_tes");
	}else{$query1 = "UPDATE cbt_ujian SET XStatusUjian = '0' WHERE XTokenUjian = '$token'";
$result1 = mysql_query($query1);
header("location:index.php?page=status_tes");
	
}
	?>

