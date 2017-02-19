<?php
include("cbt_con.php");
$query = "delete from cbt_siswa where XNomerUjian = '$_GET[id]'";
$result = mysql_query($query);

if ($result) {
	header("location:index.php?page=daftar_peserta");
}
else {
	echo "proses simpan gagal !.";
}
?>
