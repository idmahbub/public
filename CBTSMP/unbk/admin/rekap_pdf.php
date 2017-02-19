<?php
error_reporting(0);
include "cbt_con.php";
require('fpdf16/fpdf.php');

//Menampilkan data dari tabel di database

//$var_soal = "$_REQUEST[ujian]";

$result = mysql_query("SELECT *,u.XStatusUjian as ujsta
FROM cbt_siswa s
LEFT JOIN `cbt_siswa_ujian` u ON u.XNomerUjian = s.XNomerUjian
LEFT JOIN cbt_ujian c ON (u.XKodeSoal = c.XKodeSoal and u.XTokenUjian = c.XTokenUjian)
WHERE c.XStatusUjian = '1'") or die(mysql_error());

//Inisiasi untuk membuat header kolom
$column_nik = "";
$column_nama = "";
$column_kelas = "";
$column_namakel = "";
$column_namamapel = "";
$column_dijawab = "";
$column_benar = "";
$column_salah = "";
$column_nilai ="";


//For each row, add the field to the corresponding column
$baris = 2;
$no = 0;		

while($p = mysql_fetch_array($result)){
    $var_siswa = "$p[XNomerUjian]";
	$var_token = "$p[XTokenUjian]";
	$var_soal = "$p[XKodeSoal]";

	$sqlujian = mysql_query("SELECT * FROM `cbt_jawaban` j left join cbt_soal s on s.XNomerSoal = j.XNomerSoal WHERE j.XKodeSoal = '$var_soal' and j.XUserJawab = '$var_siswa'
	and XTokenUjian = '$var_token'");
	
	$sqlmapel = mysql_query("select * from cbt_ujian c left join cbt_mapel m on m.XKodeMapel = c.XKodeMapel where c.XKodeSoal = '$var_soal'"); 
	$u = mysql_fetch_array($sqlmapel);
	$namamapel = $u['XNamaMapel'];
	
	$sqlsiswa = mysql_query("SELECT * FROM `cbt_siswa` WHERE XNomerUjian= '$var_siswa'");
	$s = mysql_fetch_array($sqlsiswa);
	$namsis = $s['XNamaSiswa'];
	$nk = $s['XNamaKelas'];
	$kk = $s['XKodeKelas'];
	$namkel = $s['XKodeMapel'];
	$nomsis = $s['XNIK'];

//----- php excel 

$no = $no +1;

	$sqldijawab = mysql_num_rows(mysql_query(" SELECT * FROM `cbt_jawaban` WHERE XKodeSoal = '$var_soal' and XUserJawab = '$var_siswa' and XJawaban != '' and XTokenUjian = '$var_token'"));

	$sqljawaban = mysql_query(" SELECT count( XNilai ) AS HasilUjian FROM `cbt_jawaban` WHERE XKodeSoal = '$var_soal' and XUserJawab = '$var_siswa' and XNilai = '1' and XTokenUjian = '$var_token'");
	$sqj = mysql_fetch_array($sqljawaban);
	$jumbenar = $sqj['HasilUjian'];

	$sqlsalah = mysql_query(" SELECT count( XNilai ) AS HasilUjian FROM `cbt_jawaban` WHERE XKodeSoal = '$var_soal' and XUserJawab = '$var_siswa' and XNilai = '0' and XTokenUjian = '$var_token'");
	$sqs = mysql_fetch_array($sqlsalah);
	$jumsalah = $sqs['HasilUjian'];
	
	$sqljumsoal = mysql_query(" SELECT count( XNilai ) AS HasilUjian FROM `cbt_jawaban` WHERE XKodeSoal = '$var_soal' and XUserJawab = '$var_siswa' and XTokenUjian = '$var_token'");
	$sqjsoal = mysql_fetch_array($sqljumsoal);
	$jumsoal = $sqjsoal['HasilUjian'];

	$totalnilai = ($jumbenar/$jumsoal)*100;
 
    

    $column_nik 		= $column_nik.$nomsis."\n";
    $column_nama 		= $column_nama.$namsis."\n";
    $column_kelas 		= $column_kelas.$nk."\n";
    $column_namakel 	= $column_namakel.$kk."\n";
    $column_namamapel 	= $column_namamapel.$namamapel."\n";
    $column_dijawab 	= $column_dijawab.$sqldijawab."\n";
    $column_benar 		= $column_benar.$jumbenar."\n";
    $column_salah 		= $column_salah.$jumsalah."\n";
    $column_nilai 		= $column_nilai.$totalnilai."\n";
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(297,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
//$pdf->Image('../foto/logo.png',10,10,-175);


$pdf->SetFont('Arial','B',13);
$pdf->Cell(125);
$pdf->Cell(30,10,'LAPORAN HASIL UJIAN ',0,0,'C');
$pdf->Ln();
$pdf->Cell(125);
$pdf->Cell(30,10,'WOKA INC | www.wokaproject.id',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(25,8,'NIK',1,0,'C',1);
$pdf->SetX(30);
$pdf->Cell(60,8,'Nama',1,0,'C',1);
$pdf->SetX(90);
$pdf->Cell(25,8,'Kelas',1,0,'C',1);
$pdf->SetX(115);
$pdf->Cell(25,8,'Jurusan',1,0,'C',1);
$pdf->SetX(140);
$pdf->Cell(60,8,'Kode Mapel',1,0,'C',1);
$pdf->SetX(200);
$pdf->Cell(35,8,'Benar',1,0,'C',1);
$pdf->SetX(235);
$pdf->Cell(25,8,'Salah',1,0,'C',1);
$pdf->SetX(260);
$pdf->Cell(25,8,'Salah',1,0,'C',1);
$pdf->SetX(260);
$pdf->Cell(32,8,'Nilai',1,0,'C',1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(25,6,$column_nik,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(60,6,$column_nama,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(90);
$pdf->MultiCell(25,6,$column_kelas,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(25,6,$column_namakel,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(140);
$pdf->MultiCell(60,6,$column_namamapel,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(200);
$pdf->MultiCell(35,6,$column_benar,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(235);
$pdf->MultiCell(25,6,$column_salah,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(260);
$pdf->MultiCell(32,6,$column_nilai,1,'C');

$pdf->Output();
?>
