<?php
include("cbt_con.php");
$query = "delete from cbt_soal where Urut = '$_GET[id]'";
$result = mysql_query($query);

if ($result) {
	header("location:index.php?page=buat_soal");
}
else {
	echo "proses simpan gagal !.";
}
?>
