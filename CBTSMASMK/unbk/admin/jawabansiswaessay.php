<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ANALISIS JAWABAN | CBT APLIKASI</title>
</head>
    <link href="css/nedna.css" rel="stylesheet">
    <Link rel="shortcut icon" href="images/icon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body style="width:90%; margin:0 auto;margin-top:50px; ">
	<?
include "cbt_con.php";

$var_soal = "$_REQUEST[ujian]";
$var_siswa = "$_REQUEST[nomer]";

$sqlujian2 = mysql_query("select * from cbt_ujian c left join cbt_mapel m on m.XKodeMapel = c.XKodeMapel where c.XKodeSoal = '$var_soal' and c.XStatusUjian = '1'"); 
$u2 = mysql_fetch_array($sqlujian2);
$namamapel2 = $u2['XNamaMapel'];
$xtokenujian2 = $u2['XTokenUjian'];

$nom2 = 1;								

$sqlsiswa2 = mysql_query("SELECT * FROM `cbt_siswa` WHERE XNomerUjian= '$var_siswa'");
$s2 = mysql_fetch_array($sqlsiswa2);
$namsis2 = $s2['XNamaSiswa'];
$namkel2 = $s2['XNamaKelas'];
$nomsis2 = $s2['XNIK'];

?>

 <div class="panel panel-default">
                              <div class="panel-heading">
                                <h3 class="panel-title">Hasil CBT Online Siswa Sal Essai </h3>
<?
$nomer2 = 1;
$sql2 = mysql_query("
SELECT * FROM `cbt_jawaban` j left join cbt_soal s on s.XNomerSoal = j.XNomerSoal WHERE j.XKodeSoal = '$var_soal' and  s.XKodeSoal = '$var_soal' and  j.XUserJawab = '$var_siswa' and s.XTypeSoal = '0'
and j.XTokenUjian = '$xtokenujian' order by j.XNomerSoal");
while($r2 = mysql_fetch_array($sql2)){

$audiofile2 = $r2['XAudioTanya']; 

echo "<table width=90% ><tr><td width='20'  valign='top' ><strong>$nomer.</strong></td><td  valign='top'>$r2[XTanya] </td></tr>
";

if(str_replace("  ","",$audiofile2!=="")){
echo "File Listening : $audiofile2";
}
echo "<tr><td></td>";

$PilE2 = $r2['XEssay'];
$PilJwb2 = "$PilE2";
	$sqlpil2 = mysql_query("SELECT * FROM `cbt_jawaban` WHERE XKodeSoal = '$var_soal' and XNomerSoal = '$r2[XNomerSoal]'");
	$jwb2 = mysql_fetch_array($sqlpil);
	$nn2 = $jwb2['XNilai'];
	$jawab2 = $jwb2['XEssay'];
	$kso2 = $jwb2['XKodeSoal'];
	$nrso2 = $jwb2['XNomerSoal'];
	$urtn2 = $jwb2['Urutan'];
	
echo "<form method='post' action='pessai.php' class='form-pt'><td><strong>Point : </strong>
<input type='hidden' value='$var_soal' name='kso'>
<input type='hidden' value='$nrso' name='nrso'>
<input type='hidden' value='$var_siswa' name='sis'>
<input type='hidden' value='$xtokenujian' name='tujian'>
<input type='hidden' value='$urtn' name='urtn'>


<select name='point'>";
    if($nn=="0"){
        echo "<option selected>0</option>
			<option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
		}elseif($nn=="1"){
        echo "<option selected>1</option>
            <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
    }elseif($nn=="2"){
        echo "<option selected>2</option>
            <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
    }elseif($nn=="3"){
        echo "<option selected>3</option>
            <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
    }elseif($nn=="4"){
        echo "<option selected>4</option>
            <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
	}elseif($nn=="5"){
        echo "<option selected>5</option>
           <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
	}elseif($nn=="6"){
        echo "<option selected>6</option>
            <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
	}elseif($nn=="7"){
        echo "<option selected>7</option>
            <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
	}elseif($nn=="8"){
        echo "<option selected>8</option>
            <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
	}elseif($nn=="9"){
        echo "<option selected>9</option>
          <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
    }else{
        echo "<option selected>10</option>
           <option value='0'>0</option>\n
			<option value='1'>1</option>\n
            <option value='2'>2</option>\n
			<option value='3'>3</option>\n
			<option value='4'>4</option>\n
			<option value='5'>5</option>\n
			<option value='6'>6</option>\n
			<option value='7'>7</option>\n
			<option value='8'>8</option>\n
			<option value='9'>9</option>\n
			<option value='10'>10</option>\n";
    }
    echo "</select> | <button type='submit' class='tbl' name='jawab'>simpan</button></form><p>";
echo "<br />Jawaban :  </strong><br /> $jawab2</td></tr> <br /> <hr size='1'>";

echo "<table>";	

$nomer2++;
}
?>
              </div>        
         </div>

</body>
</html>

