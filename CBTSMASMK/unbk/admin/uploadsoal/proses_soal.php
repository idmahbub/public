<?php
// menggunakan class phpExcelReader
include "excel_reader2.php";

// koneksi ke mysql
include "../../cbt_con.php";
$xkodemapel = "$_REQUEST[txt_mapel]";
$xkodesoal = "$_REQUEST[txt_ujian]";
$xkodekelas = "$_REQUEST[txt_level]";
// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
$sukses = 0;
$gagal = 0;

// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
for ($i=2; $i<=$baris; $i++)
{
  // membaca data soalid (kolom ke-1 FIELD)
  $fieldz = $data->val($i, 1);
  // membaca data pertanyaan (kolom ke-2 R)
  $xnomer = $data->val($i, 1);
  $xtanya = $data->val($i, 2);
  $xjawab1 = $data->val($i, 3);
  $xjawab2 = $data->val($i, 4);
  $xjawab3 = $data->val($i, 5);
  $xjawab4 = $data->val($i, 6);
  $xjawab5 = $data->val($i, 7);
  $xaudio = $data->val($i, 8);
  $xjwban = $data->val($i, 9);

 
		  // setelah data dibaca, sisipkan ke dalam tabel mhs
		  $query = "INSERT INTO cbt_soal (XNomerSoal, XKodeMapel, XKodeSoal,XKodeKelas, XTanya, XJawab1, XJawab2, XJawab3, XJawab4, XJawab5,
		  XAudioTanya, XKunciJawaban) VALUES ('$xnomer', '$xkodemapel', '$xkodesoal','$xkodekelas','$xtanya','$xjawab1',
		  '$xjawab2','$xjawab3','$xjawab4','$xjawab5','$xaudio','$xjwban')";
		   $query2 = "delete from cbt_soal where XNomerSoal='0'";
		  $hasil = mysql_query($query);
		  $hasil2 = mysql_query($query2);
  if ($hasil) $sukses++;
  else $gagal++;
  }
  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah


// tampilan status sukses dan gagal
echo "<h3>Proses import data selesai.</h3>";
echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
echo "Jumlah data yang gagal diimport : ".$gagal."</p>";
echo "<a href='../'><b>Ke Admin Panel</b></a></p>";

?>