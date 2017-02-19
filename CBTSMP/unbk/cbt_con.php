<?
// 1. Connect ke database
$sqlconn=mysql_connect("localhost","root","");
$db = "cbt";
// 2. Pilih database
date_default_timezone_set("Asia/Jakarta");
mysql_select_db($db, $sqlconn);
$tahun = date("Y");
$bulan = date("m");
$tanggal = date("d");
if($bulan<12){
	if($bulan>6&&$tanggal>25){
	$tahun=$tahun;}
	else {
    $tahun=$tahun-1;}
}	
$tanggal2=date("Y-m-d");
$auo = '/xampplite/htdocs/unbk/audio/'; // 3. Letak File Audio anda
?>