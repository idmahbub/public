<?php
error_reporting(0);
require_once 'plugins/excel/PHPExcel.php';
include "cbt_con.php"; 

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

//$var_soal = "$_REQUEST[ujian]";

$hasil = mysql_query("SELECT * from cbt_soal");

// Set properties
$objPHPExcel->getProperties()->setCreator("Sigit Hariono")
      ->setLastModifiedBy("Sigit Hariono")
      ->setTitle("Office 2007 XLSX Test Document")
      ->setSubject("Office 2007 XLSX Test Document")
       ->setDescription("Salary Report")
       ->setKeywords("office 2007 openxml php")
       ->setCategory("Rekap Hasil Tes :");
 
// Add some data
$objPHPExcel->setActiveSheetIndex(0)
       	->setCellValue('A1', 'NO')
       	->setCellValue('B1', 'NO. PESERTA')
       	->setCellValue('C1', 'NAMA SISWA')
       	->setCellValue('D1', 'KELAS')
       	->setCellValue('E1', 'NIK')
		->setCellValue('F1', 'NAMA MAPEL')
       	->setCellValue('G1', 'JAWAB')
       	->setCellValue('H1', 'BENAR')
		->setCellValue('I1', 'SALAH')
       	->setCellValue('J1', 'NILAI'); 

$baris = 2;
$no = 0;		

while($p = mysql_fetch_array($hasil)){
    $t = "$p[XTanya]";
	$a = "$p[XJawab1]";
	$b = "$p[XJawab2]";

	

//----- php excel 

$no = $no +1;


$objPHPExcel->setActiveSheetIndex(0)
     	->setCellValue("A$baris", $no)
     	->setCellValue("B$baris", $t)
     	->setCellValue("C$baris", $a)
     	->setCellValue("D$baris", $b)
     	->setCellValue("E$baris", $nomsis)
		->setCellValue("F$baris", $namamapel)
     	->setCellValue("G$baris", $sqldijawab)
     	->setCellValue("H$baris", $jumbenar)
		->setCellValue("I$baris", $jumsalah)
     	->setCellValue("J$baris", $totalnilai);				

$baris = $baris + 1;
}
 
// Rename sheet
$objPHPExcel->getActiveSheet()->setTitle('transaksi');
 
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);
 
// Redirect output to a client's web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="HasilUjian-'.$var_soal.'.xls"');
header('Cache-Control: max-age=0');
 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>