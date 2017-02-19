
<table class="table table-bordered" cellpadding="30px" width="100%" border="0">
								<tr height="50px" bgcolor="#E4E6DD">
                                    <th>&nbsp;No.</th>
                                    <th>Nomer Peserta</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>NIK</th>
                                    <th>Tindakan</th>                                    
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
                                    <td width="30%"><? echo $nama; ?></td>
                                    <td width="10%"><? echo $kodekelas; ?></td>
                                    <td width="10%"><? echo $kodeNIK; ?></td>
                                    <td width="20%">
                                    <a class="btn btn-success btn-small" href="reset_peserta.php?id=<? echo $nouji; ?>" onclick="return confirm('Tombol ini akan Mereset Ujian Siswa Yang anda pilih, Anda Yakin ?')">Reset</a>
                                    <a class="btn btn-danger btn-small" href="logout_peserta.php?id=<? echo $nouji; ?>" onclick="return confirm('Tombol ini akan membuat siswa yang anda pilih akan logout, untuk melanjutkan nya lagi silahkan reset siswa,')">Logout</a>
                                    </td>
                                </tr>
                                
                                <?  }$nom++; ?>
                                </table>