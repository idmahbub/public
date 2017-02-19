<?php
include "../cbt_con.php";
$level = $_GET['txt_level'];
$mapel = $_GET['txt_mapel'];

echo "<option selected>-- Pilih Soal --</option>\n";
//$soal = mysql_query("select * from cbt_ujian where  XKodeKelas = '$level' and XKodeMapel = '$mapel' order by XKodeSoal");
$soal = mysql_query("select DISTINCT XKodeSoal from cbt_soal ");
while($k = mysql_fetch_array($soal)){
echo "<option value=\"".$k['XKodeSoal']."\">".$k['XKodeSoal']."</option>\n";
}

?>