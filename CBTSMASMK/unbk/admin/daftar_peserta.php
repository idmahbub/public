
 <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        Daftar Peserta <a class="btn btn-success" href="kartu.php" target="_blank">Cetak Kartu</a></div>
                                     <div class="actions">
                          				<a class="btn btn-circle btn-icon-only btn-default" href="#form_modal2" title="Upload Data" data-toggle="modal" >
                                            <i class="icon-action-redo"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#form_modal3" title="Upload Data" data-toggle="modal">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row">
                                    <table class="table table-striped table-hover">
                                            <thead>
                                                <tr style="color:#FFF" bgcolor="#333333">
                                                    
                                                    <th> No</th>
                                                    <th> User name </th>
                                                    <th> Password </th>
                                                    <th> Nama </th>
                                                    <th> Jurusan </th>
													<th> Tingkat </th>
                                                    <th> NIS </th>
                                                    <th> Aksi </th>
                                                   
                                              </tr>
                                          </thead>
                                          
                                            <?php
										    $no = 1;
										    $sql0 = "select * from cbt_siswa order by XNomerUjian asc";
											$result0 = mysql_query($sql0);
											while($mhs0 = mysql_fetch_array($result0)){ 
											$nom = $mhs0['Urut'];
											?>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $no++; ?> </td>
                                                    <td> <?php echo $mhs0['XNomerUjian']; ?> </td>
                                                    <td> <?php echo $mhs0['XPassword']; ?> </td>
                                                    <td> <?php echo $mhs0['XNamaSiswa']; ?> </td>
                                                    <td> <?php echo $mhs0['XKodeKelas']; ?> </td>
													<td> <?php echo $mhs0['XNamaKelas']; ?> </td>
                                                    <td> <?php echo $mhs0['XNIK']; ?></td>
                                                    <td>

                                                    <a class="btn btn-primary btn-sm" href="index.php?page=edit_peserta&id=<?php echo $nom ?>" title="Upload Data" data-toggle="modal">Edit
												   </a>
													<a class="btn btn-danger btn-sm" href="hapus_peserta.php?id=<?php echo $mhs0['XNomerUjian']; ?>" onclick="return confirm('Anda Yakin akan menghapus data peserta ini?')" > Hapus
                                                    </a>
                                                   </td>
                                                </tr>
                                               
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                        <div id="form_modal2" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Tambah Peserta Ujian</h4>
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
                                    
                                    
                                    <div id="form_modal3" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Upload Data Peserta</h4>
                                                </div>
                                                <div class="modal-body">
 

<form method="post" enctype="multipart/form-data" action="uploadsoal/proses_siswa.php">
<input name="userfile" type="file"><br />
<p>Format Upload download <a href="../file-excel/siswa_temp.xls"><strong>Disini </strong></a></p>
<div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input type="submit" name="Upload" class="btn green" value="Import"/></input>
</form>
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
