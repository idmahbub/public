<?php
include("cbt_con.php");
$result = mysql_query("update cbt_siswa_ujian set XStatusUjian = '1' where XNomerUjian = '$_GET[id]'");

if ($result) {
	header("location:index.php?page=reset");
}
else {
	echo "proses simpan gagal !.";
}
?>
