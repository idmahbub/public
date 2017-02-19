<?php
if (isset($_GET['id'])) {
	$nom = $_GET['id'];
} else {
	die ("Error. No Nip Selected! ");	
}

$query = "SELECT * FROM cbt_kelas WHERE Urut='$nom'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$kodelevel = $hasil['XKodeLevel'];
$levelkelas = $hasil['XLevelKelas'];
$kodekelas = $hasil['XKodeKelas'];
?>

<div class="row">
<div class="col-md-6">
<div class="portlet light bordered">
<div class="portlet-title"> 
<div class="caption">
<i class="icon-edit font-dark"></i>
<span class="caption-subject font-red bold uppercase">Edit Kelas</span>
</div>
</div>

<!-- start form edit  -->
<form method="POST">
<div class="form-group">
<span class="caption-subject font-dark bold uppercase">Jenjang</span>

		<select name="kodelevel" class="bs-select form-control" data-width="75%" tabindex="-98">
		<option value="<?php echo $kodelevel;?>" selected><?php echo $kodelevel;?></option>
		<option value="SD">SD</option>
		<option value="SMP">SMP</option>
		<option value="SMA">SMA</option>
		<option value="SMK">SMK</option>
		</select> 

</div>
<div class="form-group">
<span class="caption-subject font-dark bold uppercase">Tingkat</span>

		<select name="levelkelas" class="bs-select form-control" data-width="75%" tabindex="-98">
		<option value="<?php echo $levelkelas;?>" selected><?php echo $levelkelas;?></option>
		<option value="I">I</option>
		<option value="II">II</option>
		<option value="III">III</option>
		<option value="IV">IV</option>
		<option value="V">V</option>
		<option value="VI">VI</option>
		<option value="VII">VII</option>
		<option value="VIII">VIII</option>
		<option value="IX">IX</option>
		<option value="X">X</option>
		<option value="XI">XI</option>
		<option value="XII">XII</option>
		</select> 

</div>
<div class="form-group">
	<span class="caption-subject font-dark bold uppercase">Nama Kelas</span>

	     <input name="kodekelas" class="form-control input-medium date-picker" size="16" type="text" value="<?php echo $kodekelas;?>"> 

</div>
<button type="submit" name="update" class="btn btn-primary"><i class="fa fa-pencil"></i>Ubah</button>
	<button type="submit" name="close" class="btn btn-danger" href="index.php?page=pengaturan_kelas"><i class="fa fa-pencil"></i>Close</button>
</form>
<!-- end form edit  -->


</div>
</div>
</div>


<?php
if(isset($_POST['update']))
{
	$xkodelevel = $_POST['kodelevel'];
	$xlevelkelas = $_POST['levelkelas'];
	$xkodekelas = $_POST['kodekelas'];
	$query = "UPDATE cbt_kelas SET XKodeLevel='$xkodelevel',XLevelKelas='$xlevelkelas',XKodeKelas='$xkodekelas' WHERE Urut='$nom'";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color=blue>Edit Berhasil</font></h2>";
		header("location:index.php?page=pengaturan_kelas");		
	} else {
		echo "<h2><font color=red>Edit Gagal</font></h2>";	
	}
	//echo "<script>alert(Data telah berubah);</script>";
	//echo "<script>window.location='index.php?halaman=download';</script>";
}
elseif(isset($_POST['close']))
{
header("location:index.php?page=pengaturan_kelas");	
}
?>




     
                    