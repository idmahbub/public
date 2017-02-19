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

$sqlujian = mysql_query("select * from cbt_ujian c left join cbt_mapel m on m.XKodeMapel = c.XKodeMapel where c.XKodeSoal = '$var_soal' and c.XStatusUjian = '1'"); 
$u = mysql_fetch_array($sqlujian);
$namamapel = $u['XNamaMapel'];
$xtokenujian = $u['XTokenUjian'];

$nom = 1;								

$sqlsiswa = mysql_query("SELECT * FROM `cbt_siswa` WHERE XNomerUjian= '$var_siswa'");
$s = mysql_fetch_array($sqlsiswa);
$namsis = $s['XNamaSiswa'];
$namkel = $s['XNamaKelas'];
$nomsis = $s['XNIK'];

?>
 <div class="panel panel-default">
                              <div class="panel-heading">
                                <h3 class="panel-title">Data Peserta Ujian : </h3>
                              </div>
                              <div class="panel-body">
                              	<table>
                                <tr><td rowspan="6" width="200px"><img src="fotosiswa/nouser.png" /></td></tr>
                                	<tr><td width="30%">Nomer Ujian </td><td>: <? echo $var_siswa; ?></td></tr>
                                	<tr><td>Nomer Induk (NIK)</td><td>: <? echo $nomsis; ?></td></tr>
                                	<tr><td>Nama Lengkap </td><td>: <? echo $namsis; ?></td></tr>
                                	<tr><td>Kelas</td><td>: <? echo $var_siswa; ?></td></tr>
                                	<tr><td>Mata Pelajaran</td><td>: <? echo $namamapel; ?></td></tr>
                                </table>    
                              </div>
</div>

<link href="../dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../lib/jquery.min.js"></script>
<script type="text/javascript" src="../dist/jplayer/jquery.jplayer.min.js"></script>



 <div class="panel panel-default">
                              <div class="panel-heading">
                                <h3 class="panel-title">Hasil CBT Online Siswa : </h3>
                              </div>

                              <div class="panel-body">
<?
$nomer = 1;
$sql = mysql_query("
SELECT * FROM `cbt_jawaban` j left join cbt_soal s on s.XNomerSoal = j.XNomerSoal WHERE j.XKodeSoal = '$var_soal' and  s.XKodeSoal = '$var_soal' and  j.XUserJawab = '$var_siswa'
and j.XTokenUjian = '$xtokenujian' order by j.XNomerSoal");
while($r = mysql_fetch_array($sql)){
$ts = $r['XTypeSoal'];
if($ts=='0'){
$audiofile = $r['XAudioTanya']; 

echo "<table width=90%><tr><td width=50px valign='top'>$nomer.</td><td>$r[XTanya] </td></tr>
<tr><td width=50px colspan=2></td></tr>
";

if(str_replace("  ","",$audiofile!=="")){
echo "<tr><td width=50px colspan=2>File Listening : $audiofile</td></tr>";
}
?>
<?
if(str_replace("  ","",$r['XGambarTanya']!=="")){
 echo "$vidfile"; 
echo "
<tr><td width=50px colspan=2>&nbsp; </td></tr>
<tr><td colspan=2><img src=../Pictures/$r[XGambarTanya] width=50%></td></tr>";}

echo "<tr><td width=50px colspan=2>&nbsp;</td></tr>";
$PilA = $r['XA'];
$PilJwb = "XJawab$PilA";
echo "<tr><td width=50px align=center> A. </td>"; 
	$sqlpil = mysql_query("SELECT $PilJwb as pilsoal FROM `cbt_soal` WHERE XKodeSoal = '$var_soal' and XNomerSoal = '$r[XNomerSoal]'");
	$jwb = mysql_fetch_array($sqlpil);
	$jawab = $jwb['pilsoal'];
echo "<td>$jawab</td></tr>";	
$PilB = $r['XB'];
$PilJwb = "XJawab$PilB";
echo "<tr><td width=50px align=center> B. </td>"; 
	$sqlpil = mysql_query("SELECT $PilJwb as pilsoal FROM `cbt_soal` WHERE XKodeSoal = '$var_soal' and XNomerSoal = '$r[XNomerSoal]'");
	$jwb = mysql_fetch_array($sqlpil);
	$jawab = $jwb['pilsoal'];
echo "<td>$jawab</td></tr>";	
$PilC = $r['XC'];
$PilJwb = "XJawab$PilC";
echo "<tr><td width=50px align=center> C. </td>"; 
	$sqlpil = mysql_query("SELECT $PilJwb as pilsoal FROM `cbt_soal` WHERE XKodeSoal = '$var_soal' and XNomerSoal = '$r[XNomerSoal]'");
	$jwb = mysql_fetch_array($sqlpil);
	$jawab = $jwb['pilsoal'];
echo "<td>$jawab</td></tr>";	
$PilD = $r['XD'];
$PilJwb = "XJawab$PilD";
echo "<tr><td width=50px align=center> D. </td>"; 
	$sqlpil = mysql_query("SELECT $PilJwb as pilsoal FROM `cbt_soal` WHERE XKodeSoal = '$var_soal' and XNomerSoal = '$r[XNomerSoal]'");
	$jwb = mysql_fetch_array($sqlpil);
	$jawab = $jwb['pilsoal'];
echo "<td>$jawab</td></tr>";	
$PilE = $r['XE'];
$PilJwb = "XJawab$PilE";
echo "<tr><td width=50px align=center> E. </td>"; 
	$sqlpil = mysql_query("SELECT $PilJwb as pilsoal FROM `cbt_soal` WHERE XKodeSoal = '$var_soal' and XNomerSoal = '$r[XNomerSoal]'");
	$jwb = mysql_fetch_array($sqlpil);
	$jawab = $jwb['pilsoal'];
echo "<td>$jawab</td></tr>";

	if($r['XKunciJawaban']==$r['XA']){$jwbsiswa = "A";}
	if($r['XKunciJawaban']==$r['XB']){$jwbsiswa = "B";}	
	if($r['XKunciJawaban']==$r['XC']){$jwbsiswa = "C";}
	if($r['XKunciJawaban']==$r['XD']){$jwbsiswa = "D";}	
	if($r['XKunciJawaban']==$r['XE']){$jwbsiswa = "E";}
	
	if($jwbsiswa==$r['XJawaban']){$ikon = "images/benar.gif";}else{$ikon = "images/salah.gif";}
echo "<tr><td colspan=2><br>Kunci Jawaban : $jwbsiswa, Jawaban Siswa : $r[XJawaban] <img src=$ikon> | <strong>Point : $r[XNilai]</strong></td></tr>";	
echo "<tr><td colspan=2><hr></td></tr>";
echo "<table>";	}
else { 
echo "<form method='post' action='pessai.php' class='form-pt'><table width=90%><tr><td width=50px valign='top'>$nomer.</td><td>$r[XTanya] </td></tr>
<tr><td width=50px colspan=2></td></tr>
";

if(str_replace("  ","",$audiofile!=="")){
echo "<tr><td width=50px colspan=2>File Listening : $audiofile</td></tr>";
}
?>
<?
if(str_replace("  ","",$r['XGambarTanya']!=="")){
 echo "$vidfile"; 
echo "
<tr><td width=50px colspan=2>&nbsp; </td></tr>
<tr><td colspan=2><img src=../Pictures/$r[XGambarTanya] width=50%></td></tr>";}

echo "<tr><td width=50px colspan=2></td></tr>";
$PilJwb = $r['XEssay'];
echo "<tr><td width=50px align=center> </td>"; 
	$sqlpil = mysql_query("SELECT * FROM `cbt_jawaban` WHERE XKodeSoal = '$var_soal' and XNomerSoal = '$r[XNomerSoal]' and XUserJawab = '$var_siswa'");
	$jwb = mysql_fetch_array($sqlpil);
	$jawab = $jwb['XEssay'];
		$nn = $jwb['XNilai'];
	$jawab = $jwb['XEssay'];
	$kso = $jwb['XKodeSoal'];
	$nrso = $jwb['XNomerSoal'];
	$urtn = $jwb['Urutan'];
echo "<td><strong>Jawaban :<br /> </strong>$jawab<br /></td></tr>";	
echo "<tr><td colspan=2><strong><br />Point : $jwb[XNilai] </strong>| Ubah Nilai 
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
    echo "</select> | <input type='submit' value='Simpan'> </form><p></td></tr>";	
echo "<tr><td colspan=2><hr></td></tr>";
echo "<table>"; }
$nomer++;
}

?>

                              </div>                           
         </div>
         
</div>


</body>
</html>

