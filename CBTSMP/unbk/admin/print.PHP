<?php include ('cbt_con.php') ?>

<body onLoad="window.print();">
<table class="basic"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="89" rowspan="3" align="center"><img src="1.jpg" width="88" height="85"></td>
    <td height="30" align="center" valign="bottom"><font size="3"><strong>HASIL UJIAN CBT WOKA CBT </strong></font></td>
    <td width="70" rowspan="3" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="527" height="23" align="center" valign="middle"><h3>Kementerian Pendidikan dan Kebudayaan, Republik Indonesia</h3></td>
  </tr>
  <tr>
    <td height="38" align="center" valign="top"><p><font size="1+"><br></font></p></td>
  </tr>   
</table>
<hr size="3">
<table width="772" border="0">
  <tr>
    <td width="134">Kelas</td>
    <td width="10">:</td>
      <?php
    $sql01 = "select * from kelas where id_kelas='".$mhs0['id_kelas']."'";
    $result01 = mysql_query($sql01);
	while($mhs01 = mysql_fetch_array($result01)){ 
	?>
    <td width="621"><?php echo $mhs01['nama']; ?></td>
    <?php } ?>
  </tr>
  <tr>
    <td>Mata Pelajaran</td>
    <td>:</td>
    <?php
    $sql012 = "select * from mpel where id_mpel='".$mhs0['id_mpel']."'";
    $result012 = mysql_query($sql012);
	while($mhs012 = mysql_fetch_array($result012)){ 
	?>
    <td><?php echo $mhs012['nama']; ?></td>
    <?php
	}
	?>
  </tr>
  <tr>
    <td>Waktu Pelaksanaan</td>
    <td>:</td>
    <td>	<?php echo $dayList[$day];?>, <?php echo substr($mhs0['tgl_mulai'],0,10); ?> , Pukul : <?php echo substr($mhs0['tgl_mulai'],11,20); ?>      

</td>
  </tr>
</table>
<?php
	}
	?>
</p>
<table width=100% border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="3%" align="center">No.</td>
    <td width="16%" height="29" align="center" valign="middle">ID LOGIN</td>
    <td width="31%" align="center" valign="middle">NAMA</td>
    <td width="18%" align="center" valign="middle">BENAR</td>
    <td width="14%" align="center" valign="middle">SALAH</td>
    <td width="18%" align="center" valign="middle">NILAI</td>
  </tr>
 
    <?php
    $conn = mysql_connect("localhost","root","");
    mysql_select_db("exm4_luk",$conn);
	$no=1;
    $sql = "select * from tiket where id_jadwal='$_GET[jwl]'";
    $result = mysql_query($sql);
	while($mhs = mysql_fetch_array($result)){
    ?>
  <tr>
    <td align="center"><?php echo $no++ ?></td> 								
    <?php 
    $sql2 = "select * from hasil where id_tiket='".$mhs['id_tiket']."'";
    $result2 = mysql_query($sql2);
	while($mhs2 = mysql_fetch_array($result2)){
    				?>                      
                                    <?php 
    $sql3 = "select * from tiket where id_tiket='".$mhs2['id_tiket']."'";
    $result3 = mysql_query($sql3);
	while($mhs3 = mysql_fetch_array($result3)){
    				?>
                    <?php 
    $sql4 = "select * from peserta where id_peserta='".$mhs3['id_peserta']."'";
    $result4 = mysql_query($sql4);
	while($mhs4 = mysql_fetch_array($result4)){
    				?>

    <td height="40" align="center"><?php echo $mhs4['id_login'];?></td>
    <td><?php echo $mhs4['nama'];?></td>
       <?php 
					}
					?>
                    <?php 
					}
					?>
    <td align="center" valign="middle"><?php echo $benar = $mhs2['soal11']+$mhs2['soal21']+$mhs2['soal31']+$mhs2['soal41'];?></td>
       <td align="center" valign="middle"><?php echo $salah = ($mhs2['soal10']+$mhs2['soal20']+$mhs2['soal30']+$mhs2['soal40'])-($mhs2['soal11']+$mhs2['soal21']+$mhs2['soal31']+$mhs2['soal41']);?></td>
    <td align="center" valign="middle"><?php echo $total = number_format($benar*100/($benar+$salah),2);?></td>
       <?php 
					}
					?>
  </tr>
  
     <?php 
					}
					?>

</table> 


<table width=100%>
  <tr>
    <td colspan="2"></td>
    <td width="286"></td>
  </tr>
  <tr>
    <td width="230" align="center">&nbsp;</td>
    <td width="530"></td>
    <td align="left">Mengetahui <br> 
    Pengawas Ruangan</td>
  </tr>
  <tr>
    <td height="91" align="center">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><br /><br /><br /></td>
    <td>&nbsp;</td>
    <td align="left" valign="top">(.......................................................)<br /></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table> 
</body>