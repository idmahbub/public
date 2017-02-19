<?php
if (isset($_GET['id'])) {
	$kodesoal = $_GET['id'];
} else {
	die ("Error. No Nip Selected! ");	
}

$query = "SELECT * FROM cbt_soal WHERE XKodeSoal='$kodesoal'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$kodesoal = $hasil['XKodeSoal'];
$kodemapel = $hasil['XKodeMapel'];
?>

<div class="row">
<div class="col-md-6">
<div class="portlet light bordered">
<div class="portlet-title"> 
<div class="caption">
<i class="icon-edit font-dark"></i>
<span class="caption-subject font-red bold uppercase">Edit Identitas Soal</span>
</div>
</div>

<!-- start form edit  -->
<form method="POST">
<div class="form-group">
<span class="caption-subject font-dark bold uppercase">Nama Mapel </span>

	<select name="kodemapel" class="form-control input-medium">
                                <? 
                                include "../cbt_con.php";
                                $sqlkelas = mysql_query("select * from cbt_mapel order by XNamaMapel");
                                while($sk = mysql_fetch_array($sqlkelas)){
                                echo "<option value='$sk[XKodeMapel]'>$sk[XNamaMapel]</option>";
                                }
                                ?>
                                </select>

</div>
<div class="form-group">
  <span class="caption-subject font-dark bold uppercase">Kode Soal</span>
  
  <input name="kodesoal" class="form-control input-medium " size="16" type="text" value="<?php echo $kodesoal;?>"> 

</div>
<button type="submit" name="update" class="btn btn-primary"><i class="fa fa-pencil"></i>Ubah</button>
	<button type="submit" name="close" class="btn btn-danger" href="index.php?page=buat_soal"><i class="fa fa-pencil"></i>Close</button>
</form>
<!-- end form edit  -->


</div>
</div>
</div>


<?php
if(isset($_POST['update']))
{
	$xkodesoal = $_POST['kodesoal'];
	$xkodemapel = $_POST['kodemapel'];
		$query = "UPDATE cbt_soal SET XKodeSoal='$xkodesoal',XKodeMapel='$xkodemapel' WHERE XKodeSoal='$kodesoal'";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color=blue>Edit Berhasil</font></h2>";
		header("location:index.php?page=buat_soal");		
	} else {
		echo "<h2><font color=red>Edit Gagal</font></h2>";	
	}
	//echo "<script>alert(Data telah berubah);</script>";
	//echo "<script>window.location='index.php?halaman=download';</script>";
}
elseif(isset($_POST['close']))
{
header("location:index.php?page=buat_soal");	
}
?>




     
                    