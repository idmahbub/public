<script type="text/javascript" src="/js/jquery.gdocsviewer.min.js"></script> 

<script type="text/javascript"> 
/*<![CDATA[*/
$(document).ready(function() {
	$('a.embed').gdocsViewer({width: 600, height: 750});
	$('#embedURL').gdocsViewer();
});
/*]]>*/
</script> 
<body>
<iframe src="<?php echo "cetakabsen.php?kelas=$_REQUEST[iki1]&jur=$_REQUEST[jur1]"; ?>" style="display:none;" name="frame"></iframe>
<button type="button" class="btn btn-default btn-sm" onClick="frames['frame'].print()" style="margin-top:10px; margin-bottom:5px"><i class="glyphicon glyphicon-print"></i> Cetak Daftar Hadir
</button>
<button type="button" class="btn btn-default btn-sm" onClick="frames['frame'].print()" style="margin-top:10px; margin-bottom:5px"><i class="glyphicon glyphicon-download"></i> Unduh File Document
</button>
<?php
error_reporting(0);
//koneksi database
include "../../cbt_con.php";
$BatasAwal = 50;
 if(isset($_REQUEST['iki1'])){ 
$cekQuery = mysql_query("SELECT * FROM cbt_siswa where XKodeKelas = '$_REQUEST[iki1]' and  XKodeJurusan = '$_REQUEST[jur1]' ");
}else{
$cekQuery = mysql_query("SELECT * FROM cbt_siswa ");
}
$sqlad = mysql_query("select * from cbt_admin");
$ad = mysql_fetch_array($sqlad);
$namsek = strtoupper($ad['XSekolah']);
$kepsek = $ad['XKepSek'];
$logsek = $ad['XLogo'];

$jumlahData = mysql_num_rows($cekQuery);
$jumlahn = 24;
$n = ceil($jumlahData/$jumlahn);
$nomz = 1;
for($i=1;$i<=$n;$i++){ ?>
	<div style="background:#999; height:1275px;" ><br>
	<div style="background:#fff; width:90%; margin:0 auto; padding:30px; height:90%;">
    <table border="0" width="100%">
        	 <tr>
   
   <td><center><font size="5"><b>DAFTAR HADIR PESERTA <br>UJIAN BERBASIS KOMPUTER</b></font></center>
                 <br><center><font size="4">Tahun Akademik 2016/2017</font></center></td>
                 
  </tr>
  <tr>
    
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr>
    <td></td>
  </tr>
  </table><br>
 <tr><td width="90"><b>Hari,Tanggal</b></td><td width="8"> : .......................................................</td><td width="226" style="font-size:12px;font-weight:bold;"><?php echo $record['XNamaSiswa']; ?></td></tr>
        <br><br>
					
					<tr><td><b>Nama Ruang</b></td><td> : ........................................................</td><td style="font-size:12px;font-weight:bold;"><?php echo $record['XNomerUjian']; ?></td></tr>
        <br><br>
					
        
  <table border="1" width="100%">
  <tr bgcolor="#40e0d0" height="40"><th align="center" width="5%">No.</th><th align="center"  width="13%">No. Ujian</th><th align="center"   width="13%"><center>NIK</center></th><th align="center" width="37%"><center>Nama Siswa</center></th><th colspan="2" align="center"   width="40%"><center>Tanda Tangan</center></th></tr>
<?php
$mulai = $i-1;
$batas = ($mulai*$jumlahn);
$startawal = $batas;
$batasakhir = $batas+$jumlahn;

$s = $i-1;

?>
<?php
 if(isset($_REQUEST['iki1'])){ 
$cekQuery1 = mysql_query("SELECT * FROM cbt_siswa where XKodeKelas = '$_REQUEST[iki1]' and  XKodeJurusan = '$_REQUEST[jur1]' limit $batas,$jumlahn");
}else{
$cekQuery1 = mysql_query("SELECT * FROM cbt_siswa limit $batas,$jumlahn");
}
while($f= mysql_fetch_array($cekQuery1)){
 if ($nomz % 2 == 0) {
	  echo "<tr height=30px><td>&nbsp;$nomz</td><td>&nbsp;$f[XNomerUjian]</td><td><center>&nbsp;$f[XNIK]</center></td><td><center>&nbsp;$f[XNamaSiswa]</center></td><td align='center'>&nbsp;$nomz.</td></tr>";
	  } else {
	  echo "<tr height=30px><td>&nbsp;$nomz</td><td>&nbsp;$f[XNomerUjian]</td><td><center>&nbsp;$f[XNIK]</center></td><td><center>&nbsp;$f[XNamaSiswa]</center></td><td align='left'>&nbsp;$nomz.</td></tr>";
	  }
  $nomz++;
?>
<?php } ?>        
        </table>
        <br>
       <td><center>Pengawas Ujian</center></td> 
        <br>
        <br>
        <br>
        <b><center>Muhammad Raka Yusrifan</center></b>
        <b><center>NPSN :000001</center></b>
        <br><br>
    </div>
    </div>
<?php } ?>            
</body>