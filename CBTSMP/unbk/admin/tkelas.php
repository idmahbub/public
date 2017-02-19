 <?php
include("cbt_con.php"); 
$kodelevel = $_POST['kodelevel'];
$namalevel = $_POST['namalevel'];
$kodekelas = $_POST['kodekelas'];

$query = "INSERT INTO `cbt_kelas` (`Urut`, `XKodeLevel`, `XLevelKelas`, `XKodeKelas`, `XStatusKelas`) VALUES ('', '$kodelevel', '$namalevel', '$kodekelas','1');";
$result = mysql_query($query);

if ($result) {
header("location:index.php?page=pengaturan_kelas");
}
else {
	echo "proses simpan gagal !.";
}
?>