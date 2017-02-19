							  <? 
							  include "../cbt_con.php";?>
				<table class="table table-striped table-hover">
								<tr style="color:#FFF" bgcolor="#333333">
                                    <th bgcolor="#333333">&nbsp;No.</th>
                                  <th bgcolor="#333333">Mata Pelajaran</th>
                                  <th bgcolor="#333333">Kelas</th>
                                  <th bgcolor="#333333">Tanggal Tes</th>
                                  <th bgcolor="#333333">Waktu Ujian</th>
                                  <th bgcolor="#333333">Jumlah Soal</th>
                                  <th bgcolor="#333333">Token</th>                                    
                                    <th bgcolor="#333333">Aksi</th>                                    
    </tr>
              <?
			  				  $no = 1;
							  $sqluji = mysql_query("select *,u.XKodeSoal as koso,u.XKodeKelas as koke,u.Urut as xurut from cbt_ujian u left join cbt_mapel m on m.XKodeMapel = u.XKodeMapel");
							  $jumsoal = mysql_num_rows(mysql_query("select * from cbt_soal where  XKodeSoal = '$val_soal'"));
							   while ($su = mysql_fetch_array($sqluji)){
								   $val_status = str_replace("  ","",$su['XStatusUjian']);
							  ?><form action="aktiftes.php" method="post">
                                <tr>
                                    <td><? echo $no++ ?><input type="text" style="display:none" name="status" value="<? echo $val_status = str_replace("  ","",$su['XStatusUjian']); ?>" ></td>
                                    <td ><? echo $val_nmapel = str_replace("  ","",$su['XNamaMapel']); ?></td>
                                      
                                    <td>
																	
									<? echo $val_kelas = str_replace("  ","",$su['koke']); ?> -
                                    	<? include "../cbt_con.php";
                                $sqlkelas = mysql_query("select * from cbt_kelas where XKodeKelas = '$val_kelas' ");
                                while($sk = mysql_fetch_array($sqlkelas)){
                                echo $sk['XLevelKelas'];
                                }
									?></td>
                                    <td><? echo $val_tgl = str_replace("  ","",$su['XTglUjian']); ?></td>
                                    <td><? echo $val_late = str_replace("  ","",$su['XJamUjian']); ?> s/d <? echo $val_late = str_replace("  ","",$su['XBatasMasuk']); ?></td>
                                    <td><center><? echo $val_jumsoal = str_replace("  ","",$su['XJumSoal']); ?></center></td>
                                    <td><input name="token" type="hidden" style="border:none" value="<? echo $val_token = str_replace("  ","",$su['XTokenUjian']); ?>" size="5" ><? echo $val_token = str_replace("  ","",$su['XTokenUjian']); ?></td>
                                    <td>
                                                    <input onclick="return confirm('Anda Yakin Akan Menghapus Jadwal ini ? ')" class="btn btn-danger btn-sm" type="submit" value="Hapus" name="hapus"/>
                                                    <?php if($val_status=='0'){echo '<input class="btn btn-success btn-sm" type="submit" value="Aktifkan" name="aktifkan"/>';} else {
	echo '<input class="btn btn-warning btn-sm" type="submit" value="Nonaktifkan" name="nonaktifkan"/>';}
?> </form>
 <a class="btn green-sharp btn-sm" href="index.php?page=edit_status&id=<?php echo $su['XTokenUjian']; ?>">Edit</a></strong>
</td>                                   
                                </tr>                
 <? } ?>
                    </table>