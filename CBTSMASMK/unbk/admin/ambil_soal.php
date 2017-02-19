<?php 
//Here you specify how many characters the returning string must have 
include "../cbt_con.php";
$soal = $_GET['txt_ujian'];
$jumsoal = mysql_num_rows(mysql_query("select * from cbt_soal where  XKodeSoal = '$soal'"));
echo "Maks. : $jumsoal"; 
?>