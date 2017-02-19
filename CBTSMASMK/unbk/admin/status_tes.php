<head>
		<link rel="stylesheet" href="css/jquery-ui.custom.min.css" />
		<link rel="stylesheet" href="css/chosen.min.css" />
		<link rel="stylesheet" href="css/bootstrap-datepicker3.min.css" />
		<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
		<link rel="stylesheet" href="css/daterangepicker.min.css" />
		<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" />
</head>




 <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
var htmlobjek;

$(document).ready(function(){
//apabila terjadi event onchange terhadap object <select id=propinsi>
$("#txt_level").change(function(){
var txt_level = $("#txt_level").val();
var txt_mapel = $("#txt_mapel").val();
$.ajax({
url: "ambil_level.php",
data: "txt_level="+txt_level+"&txt_mapel="+txt_mapel,
cache: false,
success: function(msg){
//jika data sukses diambil dari server kita tampilkan
//di <select id=kota>
$("#txt_ujian").html(msg);
}
});
});



	$("#txt_ujian").change(function(){
	var txt_ujian = $("#txt_ujian").val();
	$.ajax({
	url: "ambil_token.php",
	data: "txt_ujian="+txt_ujian,
	cache: false,
	success: function(msg){
	$("#txt_token").val(msg);
	}
	});
	});
	
	$("#txt_ujian").change(function(){
	var txt_ujian = $("#txt_ujian").val();
	$.ajax({
	url: "ambil_soal.php",
	data: "txt_ujian="+txt_ujian,
	cache: false,
	success: function(msg1){
	$("#txt_jumsoal").html(msg1);
	}
	});
	});

});
 
</script>

<script>    
$(document).ready(function(){

	var loading = $("#loading");
	var tampilkan2 = $("#tampilkan2");

	function tampildata2(){
	tampilkan2.hide();
	loading.fadeIn();
	
	
	$.ajax({
    type:"POST",
    url:"tampiltes.php",  
	data:"aksi=tampil",  
	success: function(data){ 
		loading.fadeOut();
		tampilkan2.html(data);
		tampilkan2.fadeIn(10);
	   }
    }); 
	}// akhir fungsi tampildata
	tampildata2();


 $("#simpan").click(function(){
 var txt_ujian = $("#txt_ujian").val();
 var txt_waktu = $("#datetimepicker_mask").val();
 var txt_token = $("#txt_token").val();
 var txt_durasi = $("#txt_durasi").val();
 var txt_telat = $("#txt_telat").val();
 var txt_soal = $("#txt_soal").val();  
 var txt_mapel = $("#txt_mapel").val();
 var txt_level = $("#txt_level").val();  
  
 $.ajax({
     type:"POST",
     url:"ubahtes.php",    
     data: "aksi=simpan&txt_ujian=" + txt_ujian + "&txt_waktu=" + txt_waktu + "&txt_token=" + txt_token + "&txt_telat=" + txt_telat + "&txt_durasi=" + txt_durasi + "&txt_soal=" + txt_soal + "&txt_level=" + txt_level + "&txt_mapel=" + txt_mapel,
	 success: function(data){
	 $("#info").html(data);
	 tampildata2();
	 }
	 });
	 });

$("#tambah").click(function(){
 var pesan = $("#pesan").val();
 var kelas = $("#kelas").val();
 var pesan = $("#pesan").val();
 var jawaban = $("#jawaban").val();

 
 $.ajax({
     type:"POST",
     url:"jawab.php",    
     data: "aksi=simpan&pesan=" + pesan + "&kelas=" + kelas + "&jawaban=" + jawaban,
	 success: function(data){
	 $("#info").html(data);
	 tampildata();
	 }
	 });
	 });

}); // akhir script
</script>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
	jQuery(function($) {
	//datepicker plugin
	//link
	$('#datetimepicker_mask').datetimepicker({
  			format: 'YYYY/MM/DD HH:mm', 
  			minDate: new Date()
			});
	});
</script>

 
  <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">Daftar Jadwal Ujian <a href="#form_modal2" class="btn green-sharp btn-sm" data-toggle="modal" >Tambah</a></div>
                                     <div id="form_modal2" class="modal fade" role="dialog" aria-hidden="true" style="display: ;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Tambah Jadwal Ujian </h4>
                                                </div>
                                                <div class="modal-body">
                                                   <table border="0" width="90%" align="center">
                        <tr height="40px"><td width="66%"> Mata Uji </td><td width="34%">
								<select name="txt_mapel" id="txt_mapel" class="form-control input-large input-inline">
                                <? 
                                include "../cbt_con.php";
                                $sqlkelas = mysql_query("select * from cbt_mapel order by XNamaMapel");
                                while($sk = mysql_fetch_array($sqlkelas)){
                                echo "<option value='$sk[XKodeMapel]'>$sk[XNamaMapel]</option>";
                                }
                                ?>
                                </select>
                            </td></tr>
                        	<tr height="40px"><td> Kelas </td><td>
								<select name="txt_level" id="txt_level" class="form-control input-large input-inline">
                                <? 
								echo "<option>-- Pilih Kelas --</option>";
                                include "../cbt_con.php";
                                $sqlkelas = mysql_query("select * from cbt_kelas where XStatusKelas = '1' order by Urut");
                                while($sk = mysql_fetch_array($sqlkelas)){
                                echo "<option value='$sk[XKodeKelas]'>$sk[XKodeLevel] - $sk[XLevelKelas] - $sk[XKodeKelas]</option>";
                                }
                                ?>
                                </select>
                            </td></tr>
                        	<tr height="40px"><td> Grup Soal </td><td>
                                <select name="txt_ujian" id="txt_ujian" class="form-control input-large input-inline">
                                <? 
								echo "<option>-- Pilih Tes --</option>";
                                $sqltes= mysql_query("select * from cbt_ujian where XStatusKelas = '1' order by XKodeKelas");
                                while($sk = mysql_fetch_array($sqlkelas)){
                                echo "<option value='$sk[XKodeSoal]'>$sk[XKodeSoal]</option>";
                                }
                                ?>
                                </select>
                            </td></tr>
                        	<tr height="40px"><td> Jumlah Soal </td><td>
                            		<input type="text" value="" id="txt_soal" size="2" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    &nbsp;<label id="txt_jumsoal" style="font-style:normal; font-weight:normal; color:#999"></label>
                            </td></tr>
                            
                        	<tr height="40px">
                        	  <td> Tanggal Tes </td><td>
                            		<input type="text" value="" id="datetimepicker_mask" class="form-control"/> 
                            </td></tr>
                        	<tr height="40px"><td> Durasi Tes</td><td>
                            	<input type="text" id="txt_durasi" name="txt_durasi" size="2" onkeypress='return event.charCode >= 48 && event.charCode <= 57'> Menit 
                            </td></tr>
                        	<tr height="40px"><td> Maks. Terlambat </td><td>
                                <input type="text" id="txt_telat" name="txt_telat" size="2" onkeypress='return event.charCode >= 48 && event.charCode <= 57'> Menit
                            </td></tr>
                        	<tr height="40px"><td> Token </td><td>
                                <input type="text" id="txt_token" name="txt_token" value="-" size="" readonly>
                            </td></tr>
                        	<tr height="40px"><td>  </td><td>
							<a href="../admin/index.php?page=status_tes"><input type="submit" class="btn btn-success" id="simpan" value="Simpan"></a>
                            </td></tr></table>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>

                            </div> <?php include "tampiltes.php"; ?></div>
                                    <div class="actions">
                                        
                                    </div>
                                </div>
                                
                        </div>
                        
                        
                        
                                        </div>
                                    </div>
                                    <div class="row margin-top-30">
                                      <div class="col-md-12"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
