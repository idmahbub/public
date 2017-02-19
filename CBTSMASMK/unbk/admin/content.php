 <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        DASBOARD
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <div class="row"><H3><FONT class="font-red" >
                                   <?php $nn = $_POST['pilih'];
if(isset($_POST['ubad'])){
	$usr = $_POST['usr'];
	$pas = $_POST['pas'];
	$querysr = "update cbt_admin set user = '$usr', password = '$pas'";
	$hasilsr = mysql_query($querysr);
	if ($hasilsr){
		echo "DATA USERNAME DAN PASSWORD ADMIN BERHASIL DIUBAH";
	}else {
		echo "GAGAL UPDATE DATA ADMIN";
	}
};
?></FONT></H3>
                                        <div class="col-md-10"> <H3><FONT class="font-green" ><strong>AKTIF<br />
</strong></FONT></H3>
                                            <div class="form-group">
                                                <label class="control-label" for="title"><div class="alert alert-success">
                                        WokaAdminCBT v.2.4 Siap digunakan</div>
                                        <div class="alert alert-info">
                                        <font color="#333333">Server ID :</font> 
                                        <label for="textfield"></label>
                                        <FONT style="background-color:#32C5D2" color="#FFFFFF" >F4609282-MD</FONT>
                                        </div><div class="alert alert-danger">
                                       
<form action="index.php" method="post" >
<label for="select"> Pilih Hapus</label>
<select name="pilih" id="select">
  <option value="1">Tabel Siswa</option>
  <option value="2">Tabel Kelas</option>
  <option value="3">Tabel Mapel</option>
  <option value="4">Tabel Soal</option>
  <option value="5">Tabel Jadwal</option>
</select>
<input class="btn red" type="submit" name="hapusx" id="button" value="Hapus"  onclick="return confirm('Anda yakin akan mengosongkan tabel ini ?')">
</form>
<?php

$nn = $_POST['pilih'];
if(isset($_POST['hapusx'])){
	if ($nn==1){
	$query = "TRUNCATE TABLE cbt_siswa";
	$querya = "TRUNCATE TABLE cbt_siswa_ujian";
	$hasil = mysql_query($query);
	$hasila = mysql_query($querya);
	header("location:../admin");
	}elseif($nn==2){$query2 = "TRUNCATE TABLE cbt_kelas";
	$hasil2 = mysql_query($query2);
	header("location:../admin");
	}elseif($nn==3){$query3 = "TRUNCATE TABLE cbt_mapel";
	$hasil3 = mysql_query($query3);
	header("location:../admin");
	}elseif($nn==4){
	$query4 = "TRUNCATE TABLE cbt_soal";
	$query4a = "TRUNCATE TABLE cbt_jawaban";
	$hasil = mysql_query($query4);
	$hasila = mysql_query($query4a);
	header("location:../admin");
	}else{$query5 = "TRUNCATE TABLE cbt_ujian";
	$hasil5 = mysql_query($query5);
	header("location:../admin");}
	
}
	?>
                                        </div></div>
                                            <div class="form-group"></div>
                                        </div>
                                    </div>
                                    <div class="row margin-top-30">
                                      <div class="col-md-12"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                   