<?php
if (isset($_GET['id'])) {
	$nom = $_GET['id'];
} else {
	die ("Error. No Nip Selected! ");	
}

$query = "SELECT * FROM cbt_siswa WHERE Urut='$nom'";
$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$nomerujian 	= $hasil['XNomerUjian'];
$nik 			= $hasil['XNIK'];
$namasiswa 		= $hasil['XNamaSiswa'];
$kodekelas 		= $hasil['XKodeKelas'];
$namakelas 		= $hasil['XNamaKelas'];
$jeniskelamin 	= $hasil['XJenisKelamin'];
$password 		= $hasil['XPassword'];

?>

<div class="row">
<div class="col-md-6">
<div class="portlet light bordered">
<div class="portlet-title"> 
<div class="caption">
<i class="icon-edit font-dark"></i>
<span class="caption-subject font-red bold uppercase">Edit Data Peserta Ujian</span>
</div>
</div>

<!-- start form edit  -->
<form method="POST">
	<div class="form-group">
		<span class="caption-subject font-dark bold uppercase">Nomor Peserta</span>
		<input type="text" name="tnomor" class="form-control" value=" <?php echo $nomerujian; ?>">
	</div>
	<div class="form-group">
		<span class="caption-subject font-dark bold uppercase">Nama Peserta</span>
		<input type="text" name="tnama" class="form-control" value="<?php echo $namasiswa;?>">
	</div>
	<div class="form-group">
    <span class="caption-subject font-dark bold uppercase">Jenis Kelamin</span>
		<select name="tjk" class="bs-select form-control" data-width="75%" tabindex="-98">
			<option value="" selected><?php echo $jeniskelamin;?></option>
			<option value="L">Laki - Laki</option>
			<option value="P">Perempuan</option>
		</select> 
    </div>
	<div class="form-group">
        <span class="caption-subject font-dark bold uppercase">NIK</span>
        <input name="tnik" class="form-control input-medium date-picker" size="16" type="text" value="<?php echo $nik;?>"> 
    </div>
    <div class="form-group">
        <span class="caption-subject font-dark bold uppercase">Password</span>
        <input name="tpassword" class="form-control input-medium date-picker" size="16" type="password" value="<?php echo $password;?>"> 
    </div>
	<div class="form-group">
    <span class="caption-subject font-dark bold uppercase">Tingkat</span>
    <select id="level" name="ttingkat" class="bs-select form-control" data-width="75%" tabindex="-98" >  
		<option value="" selected><?php echo $namakelas;?></option>
	<? 
		echo "<option>-- Pilih Kelas --</option>";
		include "../cbt_con.php";
		$sqlkelas = mysql_query("select DISTINCT XLevelKelas from cbt_kelas where XStatusKelas = '1' order by Urut");
		while($sk = mysql_fetch_array($sqlkelas)){
			echo "<option value='$sk[XLevelKelas]'>$sk[XLevelKelas]</option>";
			}
    ?>
	</select> 
    </div>
	
	
  <span id="kelas"></span>
  
  <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-pencil"></i>Ubah</button>
	<button type="submit" name="close" class="btn btn-danger" href="index.php?page=daftar_peserta"><i class="fa fa-pencil"></i>Close</button>
	</div>
</form>
<script>

	$(function(){ // sama dengan $(document).ready(function(){

		$('#level').change(function(){

			$('#kelas').html("<img src='ajax-loader.gif'>"); //Menampilkan loading selama proses pengambilan data kota

			var id = $(this).val(); //Mengambil id provinsi

			$.get("ambil_kelas.php", {id:id}, function(data){
				$('#kelas').html(data);
			});
		});

	});

	</script>
<!-- end form edit  -->
</div>
</div>
</div>
<?php
if(isset($_POST['update']))
{
$xnomerujian 	= $_POST['tnomor'];
$xnamasiswa 	= $_POST['tnama'];
$xjeniskelamin 	= $_POST['tjk'];
$xnik 			= $_POST['tnik'];
$xpassword 		= $_POST['tpassword'];
$xnamakelas 	= $_POST['ttingkat'];
$xkodekelas 	= $_POST['kelas'];

	$query = "UPDATE cbt_siswa SET XNomerUjian='$xnomerujian',XNIK='$xnik',XNamaSiswa='$xnamasiswa',XKodeKelas='$xkodekelas',XNamaKelas='$xnamakelas',XJenisKelamin='$xjeniskelamin',XPassword='$xpassword' WHERE Urut='$nom'";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color=blue>Edit Berhasil</font></h2>";
		header("location:index.php?page=daftar_peserta");		
	} else {
		echo "<h2><font color=red>Edit Gagal</font></h2>";	
	}
	//echo "<script>alert(Data telah berubah);</script>";
	//echo "<script>window.location='index.php?halaman=download';</script>";
}
elseif(isset($_POST['close']))
{
header("location:index.php?page=daftar_peserta");	
}
?>




     
                    