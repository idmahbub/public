<div id="form_modal3" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Ubah Dataa Peserta Ujian</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="index.php?page=tsiswa" class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Nomor Peserta</label>
                                                            <div class="col-md-8">
                                                                <input name="nomor" class="form-control input-medium date-picker" size="16" type="text" value=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Nama Peserta</label>
                                                            <div class="col-md-8">
                                                                <input name="nama" class="form-control input-medium date-picker" size="16" type="text" value=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Jenis Kelamin</label>
                                                            <div class="col-md-3">
                                                               <select name="jk" class="bs-select form-control" data-width="75%" tabindex="-98">
                                                            <option>- Pilih -</option>
                                                            <option value="L">Laki - Laki</option>
                                                            <option value="P">Perempuan</option>
                                                        </select> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">NIK</label>
                                                            <div class="col-md-8">
                                                                <input name="nik" class="form-control input-medium date-picker" size="16" type="text" value=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Password</label>
                                                            <div class="col-md-8">
                                                                <input name="password" class="form-control input-medium date-picker" size="16" type="password" value=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Tingkat</label>
                                                            <div class="col-md-4">
                                                              <select id="level" name="level" class="bs-select form-control" data-width="75%" tabindex="-98" >  <? 
								echo "<option>-- Pilih Kelas --</option>";
                                include "../cbt_con.php";
                                $sqlkelas = mysql_query("select DISTINCT XLevelKelas from cbt_kelas where XStatusKelas = '1' order by Urut");
                                while($sk = mysql_fetch_array($sqlkelas)){
                                echo "<option value='$sk[XLevelKelas]'>$sk[XLevelKelas]</option>";
                                }
                                ?></select> </div>
                                                        </div>
                                                         
                                                              <span id="kelas"></span></div>

                                                <div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input type="submit" class="btn green" value="Tambah"/></input>
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
                                                 

    </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                            </div>