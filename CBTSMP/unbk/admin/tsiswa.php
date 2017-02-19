 <?php
include("cbt_con.php"); 
$nomer = $_POST['nomor'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$kodekelas = $_POST['kelas'];
$namakelas = $_POST['level'];
$jk = $_POST['jk'];
$password = $_POST['password'];

$query = "INSERT INTO `cbt_siswa` (`Urut`, `XNomerUjian`, `XNIK`, `XNamaSiswa`, `XKodeKelas`, `XNamaKelas`, `XJenisKelamin`, `XPassword`, `XFoto`) VALUES ('', '$nomer', '$nik', '$nama', '$kodekelas', '$namakelas', '$jk', '$password', '');";
$result = mysql_query($query);

if ($result) {
header("location:index.php?page=daftar_peserta");
}
else {
	echo "proses simpan gagal !.";
}
?>