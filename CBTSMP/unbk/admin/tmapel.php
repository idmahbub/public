 <?php
include("cbt_con.php"); 
$namamapel = $_POST['namamapel'];
$kodemapel = $_POST['kodemapel'];

$query = "INSERT INTO `cbt_mapel` (`Urut`, `XKodeKelas`, `XKodeMapel`, `XNamaMapel`,`XKodeSoal`) VALUES ('', '', '$kodemapel', '$namamapel', '');";
$result = mysql_query($query);

if ($result) {
header("location:index.php?page=pengaturan_mapel");
}
else {
	echo "proses simpan gagal !.";
}
?>