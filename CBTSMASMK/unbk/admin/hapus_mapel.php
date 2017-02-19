<?php
include("cbt_con.php");
$query = "delete from cbt_mapel where Urut = '$_GET[id]'";
$result = mysql_query($query);

if ($result) {
	header("location:index.php?page=pengaturan_mapel");
}
else {
	echo "proses simpan gagal !.";
}
?>
