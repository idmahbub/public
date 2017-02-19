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
                                    <th>Tanggal Ujian</th>
                                    <th>Waktu</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Kelas</th>
                                    <th>Group Soal</th>
									<th>Jumlah Soal</th>
                                    <th>Token</th>
									<th>Cetak</th>
                              
                                </tr>
 <?                    
include "cbt_con.php";
$sqltoken = mysql_query("SELECT * FROM cbt_ujian");
$nom = 1;								
while($s= mysql_fetch_array($sqltoken)){ 
$kodekelas = str_replace("  ","",$s['XKodeKelas']); 
$kodemapel = str_replace("  ","",$s['XKodeMapel']); 
$kodesoal = str_replace("  ","",$s['XKodeSoal']); 
$jumsoal = str_replace("  ","",$s['XJumSoal']); 
$tglujian = str_replace("  ","",$s['XTglUjian']);
$jamujian = str_replace("  ","",$s['XJamUjian']);
$tokenujian = str_replace("  ","",$s['XTokenUjian']);
	
?>
                                <tr height="40px">
                                    <td width="5%">&nbsp;<? echo $nom ; ?></td>
                                    <td width="15%"><? echo $tglujian; ?></td>
                                    <td width="5%"><? echo $jamujian; ?></td>
                                    <td width="25%">
									<? $sq = mysql_query("SELECT * FROM cbt_mapel where XKodeMapel = '$kodemapel'");
										$m= mysql_fetch_array($sq); ?>
									<? echo $m['XNamaMapel']; ?>
                                    
                                    </td>
                                    <td width="15%"><? echo $kodekelas; ?></td>
                                    <td width="15%"><? echo $kodesoal; ?></td>
									<td width="10%"><? echo $jumsoal; ?></td>
                                    <td width="5%"><? echo $tokenujian; ?></td>

                                    <td width="5%" align="center"><a href="ctk_hasilpeserta.php?token=<? echo $tokenujian; ?>" target="_blank"><img src="images/printer.png"/></a></td>
                                    </td>
                                </tr>
                                
<? $nom++; } ?>
                                </table>