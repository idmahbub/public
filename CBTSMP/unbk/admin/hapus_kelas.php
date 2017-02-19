<?php
include("cbt_con.php");
$query = "delete from cbt_kelas where Urut = '$_GET[id]'";
$result = mysql_query($query);

if ($result) {
	header("location:index.php?page=pengaturan_kelas");
}
else {
	echo "proses simpan gagal !.";
}
?>
