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
                                    <th>Status Tes Peserta</th>
                                </tr>
 <?                    
include "cbt_con.php";
$sql = mysql_query("SELECT *,u.XStatusUjian as ujsta
FROM cbt_siswa s
LEFT JOIN `cbt_siswa_ujian` u ON u.XNomerUjian = s.XNomerUjian
LEFT JOIN cbt_ujian c ON (u.XKodeSoal = c.XKodeSoal and u.XTokenUjian = c.XTokenUjian)
WHERE c.XStatusUjian = '1'"); 
$nom = 1;								
while($s= mysql_fetch_array($sql)){ 
$nama = str_replace("  ","",$s['XNamaSiswa']); 
$nouji = str_replace("  ","",$s['XNomerUjian']); 
$kodekelas = str_replace("  ","",$s['XKodeKelas']); 
$kodeNIK = str_replace("  ","",$s['XNIK']); 
$staujian = str_replace("  ","",$s['ujsta']); 
if($staujian =='0'){$staujian = "Belum Login";}
elseif($staujian =='1'){$staujian = "Sedang Dikerjakan";}
elseif($staujian =='9'){$staujian = "Tes SELESAI";}
?>
                                <tr height="40px">
                                    <td width="5%">&nbsp;<? echo $nom ; ?></td>
                                    <td width="15%"><? echo $nouji; ?></td>
                                    <td width="40%"><? echo $nama; ?></td>
                                    <td width="5%"><? echo $kodekelas; ?></td>
                                    <td width="5%"><? echo $kodeNIK; ?></td>
                                    <td width="20%"><? echo "$staujian"; ?></td>
                                    </td>
                                </tr>
                                
                                <? $nom++; } ?>
                                </table>