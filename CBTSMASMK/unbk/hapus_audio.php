<?
include("cbt_con.php");
$id = $_POST['id'];
$query = "delete from cbt_tabel_data where id = '$_POST[id]'";
$result = mysql_query($query);

if ($result) {
	header("location:../unbk/admin/index.php?page=audio");
}
else {
	echo "proses simpan gagal !.";
}
$nm = $_POST['nn'];
$files = glob('audio/'.$nm); //get all file names
foreach($files as $file){
    if(is_file($file))
    unlink($file); //delete file
}
?>