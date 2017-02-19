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
  $xnik = $data->val($i, 2);
  $xnama = $data->val($i, 3);
  $xlevel = $data->val($i, 4);
  $xkelas = $data->val($i, 5);
  $xjekel = $data->val($i, 6);
  $xpass = $data->val($i, 7);
  $xfoto = $data->val($i, 8);
 
		  // setelah data dibaca, sisipkan ke dalam tabel mhs
		  $query = "INSERT INTO cbt_siswa (XNomerUjian,  XNamaSiswa,XNIK,XKodeKelas, XNamaKelas, XJenisKelamin, XPassword, XFoto) 
		  VALUES ('$xnomer', '$xnik', '$xnama','$xlevel','$xkelas','$xjekel','$xpass','$xfoto')";
		  $hasil = mysql_query($query);
  if ($hasil) $sukses++;
  else $gagal++;
  }
  // jika proses insert data sukses, maka counter $sukses bertambah
  // jika gagal, maka counter $gagal yang bertambah


// tampilan status sukses dan gagal
header("location:../index.php?page=daftar_peserta");

?>