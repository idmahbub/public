 <script type="text/javascript" src="jquery-1.4.js"></script>
 <script>    
$(document).ready(function(){
 $("#simpan").click(function(){
 //alert("hai");
 var nompes = $("#nompes").val();
 //alert(nompes);
 $.ajax({
     type:"POST",
     url:"resetlogin.php",    
     data: "aksi=simpan&nompes=" + nompes,
	 success: function(data){
	 $("#info").html(data);
	 tampildata();
	 }
	 });
	 });

});
</script>
<br>
<table class="table table-bordered" cellpadding="30px" width="100%" border="0">
								<tr height="50px" bgcolor="#E4E6DD">
                                    <th>&nbsp;No.</th>
                                    <th>Nomer Peserta</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>NIK</th>
									<th>Kode Mapel </th>
									<th>Token</th>                                    
                                    <th>Analisa</th>                                    
                                </tr>
 <?                    
include "cbt_con.php";
$sqltoken = mysql_query("SELECT * FROM cbt_ujian where XStatusUjian = '1'");
$t = mysql_fetch_array($sqltoken);
$tokenujian = $t['XTokenUjian'];


$sql = mysql_query("SELECT *,u.XStatusUjian as ujsta,c.XTokenUjian as tokenz,u.XNomerUjian as noujian
FROM cbt_siswa s
LEFT JOIN `cbt_siswa_ujian` u ON u.XNomerUjian = s.XNomerUjian
LEFT JOIN cbt_ujian c ON (u.XKodeSoal = c.XKodeSoal and u.XTokenUjian = c.XTokenUjian)
WHERE c.XStatusUjian = '1'");
$nom = 1;								
while($s= mysql_fetch_array($sql)){ 
$nama = str_replace("  ","",$s['XNamaSiswa']); 
$nouji = str_replace("  ","",$s['noujian']); 
$kodekelas = str_replace("  ","",$s['XKodeKelas']); 
$kodeNIK = str_replace("  ","",$s['XNIK']); 
$KodeMapel = str_replace("  ","",$s['XKodeMapel']);
$staujian = str_replace("  ","",$s['ujsta']);
$token = str_replace("  ","",$s['tokenz']);
$soaluji = str_replace("  ","",$s['XKodeSoal']);
	
	$sqldijawab = mysql_num_rows(mysql_query(" SELECT * FROM `cbt_jawaban` WHERE XTokenUjian = '$token' and XJawaban != '' and XUserJawab = '$nouji'"));
	$sqljawaban = mysql_query(" SELECT count( XNilai ) AS HasilUjian FROM `cbt_jawaban` WHERE XNilai = '1' and XTokenUjian = '$token' and XUserJawab = '$nouji'");
	$sqlsalah = mysql_query(" SELECT count( XNilai ) AS HasilUjian FROM `cbt_jawaban` WHERE XNilai = '0' and XTokenUjian = '$token' and XUserJawab = '$nouji'");
	$sqj = mysql_fetch_array($sqljawaban);
	$sqs = mysql_fetch_array($sqlsalah);
	$jumbenar = $sqj['HasilUjian'];
	$jumsalah = $sqs ['HasilUjian'];
?>
                                <tr height="40px">
                                    <td width="5%">&nbsp;<? echo $nom ; ?></td>
                                    <td width="15%"><? echo $nouji; ?></td>
                                    <td width="25%"><? echo $nama; ?></td>
                                    <td width="15%"><? echo $kodekelas; ?></td>
                                    <td width="15%"><? echo $kodeNIK; ?></td>
									<td width="10%"><? echo $KodeMapel; ?></td>
                                    <td width="5%"><? echo $token; ?></td>
                                    <td width="5%" align="center"><a href="jawabansiswa.php?nomer=<? echo $nouji; ?>&ujian=<? echo "$soaluji"; ?>" target="_blank"><img src="images/printer.png"/></a></td>
                                    </td>
                                </tr>
                                
<? $nom++; } ?>
                                </table>