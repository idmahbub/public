<?php
if (isset($_GET['id'])) {
	$nom = $_GET['id'];
} else {
	die ("Error. No Nip Selected! ");	
}

$query = "SELECT * FROM cbt_mapel WHERE Urut='$nom'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$kode = $hasil['XKodeMapel'];
$nama = $hasil['XNamaMapel'];
?>

<div class="row">
<div class="col-md-6">
<div class="portlet light bordered">
<div class="portlet-title"> 
<div class="caption">
<i class="icon-edit font-dark"></i>
<span class="caption-subject font-red bold uppercase">Edit Mata Pelajaran</span>
</div>
</div>

<!-- start form edit  -->
<form method="POST">
	<div class="form-group">
		<span class="caption-subject font-dark bold uppercase">Kode Mapel</span>
		<input type="text" name="tkode" class="form-control" value=" <?php echo $kode; ?>">
	</div>
	<div class="form-group">
		<span class="caption-subject font-dark bold uppercase">Nama Mapel</span>
		<input type="text" name="tnama" class="form-control" value="<?php echo $nama;?>">
	</div>
	<button type="submit" name="update" class="btn btn-primary"><i class="fa fa-pencil"></i>Ubah</button>
	<button type="submit" name="close" class="btn btn-danger" href="index.php?page=pengaturan_mapel"><i class="fa fa-pencil"></i>Close</button>
</form>
<!-- end form edit  -->
</div>
</div>
</div>
<?php
if(isset($_POST['update']))
{
	$xkode = $_POST['tkode'];
	$xnama = $_POST['tnama'];
	$query = "UPDATE cbt_mapel SET XKodeMapel='$xkode',XNamaMapel='$xnama' WHERE Urut='$nom'";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color=blue>Edit Berhasil</font></h2>";
		header("location:index.php?page=pengaturan_mapel");		
	} else {
		echo "<h2><font color=red>Edit Gagal</font></h2>";	
	}
	//echo "<script>alert(Data telah berubah);</script>";
	//echo "<script>window.location='index.php?halaman=download';</script>";
}
elseif(isset($_POST['close']))
{
header("location:index.php?page=pengaturan_mapel");	
}
?>




     
                    