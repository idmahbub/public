<?php ob_start(); ?>
 <?php
include("cbt_con.php"); 
$nil = $_POST['point'];
$xkodesoal = $_POST['kso'];
$xtokenujian = $_POST['tujian'];
$sis = $_POST['sis'];
$nrso = $_POST['nrso'];
$urutan = $_POST['urtn'];

$query = "update cbt_jawaban set XNilai='$nil' where XKodeSoal = '$xkodesoal' and XNomerSoal = '$nrso' and XTokenUjian = '$xtokenujian'";
$result = mysql_query($query);

if ($result) {
header("location:jawabansiswa.php?nomer=$sis&ujian=$xkodesoal");
}
else {
	echo "proses simpan gagal !.";
}
?>

<?php ob_flush(); ?>