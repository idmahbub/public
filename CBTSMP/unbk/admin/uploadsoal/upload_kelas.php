<h1>Import Kelas dari Excel</h1>
<form method="post" enctype="multipart/form-data" action="upload_kelas.php">
  Excel File : <input name="userfile" type="file">
<input name="upload" type="submit" value="Import">
</form>

<p>Format Upload download <a href="../../file-excel/kelas_temp.xls"><strong>Disini </strong></a></p>
<p>&nbsp;</p>
<?php
if(isset($_POST['upload'])){
// menggunakan class phpExcelReader
include "excel_reader2.php";

// koneksi ke mysql
include "../../cbt_con.php";
$xkodemapel = "GAL1";
$xkodesoal = "XGAL1SOAL2";

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
  $xlevel = $data->val($i, 1);
  $xkelas = $data->val($i, 2);
  $xkode = $data->val($i, 3);
 
		  // setelah data dibaca, sisipkan ke dalam tabel mhs
		  $query = "INSERT INTO cbt_kelas ( XKodeLevel, XLevelKelas,XKodeKelas,XStatusKelas) VALUES ('$xlevel','$xkelas', '$xkode','1')";
		  $hasil = mysql_query($query);
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

}
?>