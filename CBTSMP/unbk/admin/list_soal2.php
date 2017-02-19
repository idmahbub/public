

<div class="row">
<div class="col-md-12">
<div class="portlet light bordered">
<div class="portlet-title"> 
<div class="caption">
<i class="icon-edit font-dark"></i>
<span class="caption-subject font-red bold uppercase">Dashboard Edit Soal</span>
</div>
</div>
<?php include "cbt_con.php"; 
$sql011 = "select DISTINCT XKodeMapel,XKodeKelas,XKodeSoal  from cbt_soal where XKodeSoal = '$_GET[id]' order by Urut asc";
$result011 = mysql_query($sql011);
while($mhs011 = mysql_fetch_array($result011)){
$km = $mhs011['XKodeMapel'];	  ?>
<table class="table table-bordered">
  <tr>
    <td width="93"><strong>Nama Mapel  <br>
 Kode Soal </strong></td>
    <td width="468" valign="top"><strong>:
        <?php $sql0111 = "select *  from cbt_mapel where XKodeMapel = '$km'";
$result0111 = mysql_query($sql0111);
while($mhs0111 = mysql_fetch_array($result0111)){  ?>
        <? echo $mhs0111['XNamaMapel']; ?>
        <? } ?>
        <br>
      : <?php echo $mhs011['XKodeSoal']; ?></strong>
    </td>
    <td class="danger" width="155" valign="top"><strong><a href="index.php?page=buat_soal">Ke Admin Panel <br /></a>
    <a href="index.php?page=edit_kosoal&id=<?php echo $mhs011['XKodeSoal']; ?>">Edit</a></strong></td>
  </tr><? } ?>
</table>
<br>
<table class="table table-bordered">
  <tr >
    <td>
<?php
$no1 = 1;
$sql01 = "select * from cbt_soal where XKodeSoal = '$_GET[id]' order by Urut asc";
$result01 = mysql_query($sql01);
while($mhs01 = mysql_fetch_array($result01)){ 
?>
</div>
</div>

<!-- start form edit  -->

<style type="text/css">
.ss {
	color: #F00;
}
</style>

<table class="table">
  <tr>
    <td align="center" valign="top"><strong><?php echo $mhs01['XNomerSoal']; ?>.</strong></td>
    <td><?php echo $mhs01['XTanya']; ?></td>
    <td class="info"><strong><a href="index.php?page=ubah_soal&id=<?php echo $mhs01['Urut']; ?>">Edit</a></strong> | <strong><a href="index.php?page=hapus_persoal&id=<?php echo $mhs01['Urut']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus Soal ini ? ')">Hapus</a><br />
    <?
$sql013 = "select * from cbt_soal where Urut = '$mhs01[Urut]' ";
$result013 = mysql_query($sql013);
$mhs013 = mysql_fetch_array($result013);
$ts = $mhs013['XTypeSoal'];
$ks = $mhs013['XKodeSoal'];
if ($ts=='1'){ echo "Essai";} else {echo "PG" ;}
?>: <a href="index.php?page=ubah_tysoal&id=<?php echo $mhs01['Urut']; ?>&<? echo $ks ; ?>">Ubah</a></strong></td>
  </tr>
  <tr>
    <td width="59" align="center" valign="top">&nbsp;</td>
    <td width="580" align="left" valign="top">&nbsp;</td>
    <td width="73">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>A. <?php echo $mhs01['XJawab1']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>B. <?php echo $mhs01['XJawab2']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>C. <?php echo $mhs01['XJawab3']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>D. <?php echo $mhs01['XJawab4']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td><span class="ss"><strong>Kunci</strong><strong> <?php echo $mhs01['XKunciJawaban']; ?>  <br />
Audio : <?php echo $mhs01['XAudioTanya']; ?></strong></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="center"><hr></td>
  </tr>
</table>

<?php } ?>
&nbsp;</td>
  </tr>
</table>

<!-- end form edit  -->
</div>






     
                    