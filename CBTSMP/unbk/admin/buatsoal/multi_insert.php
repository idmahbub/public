<?php
include "../cbt_con.php";

for($i=0;$i<$_POST['jumlah'];$i++){
 $koma = $_POST['mapel'];
 $grup = $_POST['grup'];
 $soal = $_POST['soal'.$i];
 $a= $_POST['a'.$i];
 $b= $_POST['b'.$i];
 $c= $_POST['c'.$i];
 $d= $_POST['d'.$i];
 $kunci= $_POST['kunci'.$i];
 $acak= $_POST['acak'];
 $noso = $_POST['nomor'.$i];
 $audio = $_POST['audio'.$i];
 
  
 $query = "insert into cbt_soal(XKodeMapel,XKodeSoal,XNomerSoal,XTanya,XAudioTanya,XJawab1,XJawab2,XJawab3,XJawab4,XKunciJawaban,Xidacak)
values
('$koma','$grup','$noso','$soal','$audio','$a','$b','$c','$d','$kunci','$acak')";
 $mysqli = mysql_query($query);
}
if ($mysqli){header("location:../index.php?page=buat_soal");}
?>