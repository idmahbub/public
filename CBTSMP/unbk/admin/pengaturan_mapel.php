 <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        DASBOARD
                                    </div>
                                    
                                </div>
								    <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-edit font-dark"></i>
                                        <span class="caption-subject font-dark bold uppercase">Mata Pelajaran</span>
                                    </div>
                                    <div class="actions">
                          				<a class="btn btn-circle btn-icon-only btn-default" href="#form_modal3" title="Upload Data" data-toggle="modal">
                                            <i class="icon-action-redo"></i>
                                        </a>
										<a class="btn btn-circle btn-icon-only btn-default" href="#form_modal5" title="Upload Data"       data-toggle="modal">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                    
                                    <div id="form_modal5" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Upload Data Mata Pelajaran</h4>
                                                </div>
                                                <div class="modal-body">
 

<form method="post" enctype="multipart/form-data" action="uploadsoal/proses_mapel.php">
<input name="userfile" type="file"><br />
<p>Format Upload download <a href="../file-excel/mapel_temp.xls"><strong>Disini </strong></a></p>
<div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input type="submit" name="Upload" class="btn green" value="Import"/></input>
</form>
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="portlet-body">
                                    <div class="row"></div>
                                    <table class="table table-striped table-hover">
                                            <thead>
                                                <tr style="color:#FFF" bgcolor="#333333">
                                                    
                                                    <th> No</th>
                                                    <th> Kode </th>
                                                    <th> Nama </th>
                                                    <th> Aksi </th>
                                                   
                                              </tr>
                                          </thead>
                                          
                                          <?php
										  $no = 1;
										  $sql0 = "select * from cbt_mapel order by XKodeMapel asc";
										  $result0 = mysql_query($sql0);
										  while($mhs0 = mysql_fetch_array($result0)){
										  $nom = $mhs0['Urut'];
										  $kode = $mhs0['XKodeMapel'];
										  $nama = $mhs0['XNamaMapel'];
										  ?>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $no++; ?> </td>
                                                    <td> <?php echo $mhs0['XKodeMapel']; ?> </td>
                                                    <td> <?php echo $mhs0['XNamaMapel']; ?> </td>
                                                    <td>
                                                   
												   <a class="btn btn-primary btn-sm" href="index.php?page=edit_mapel&id=<?php echo $nom ?>" title="Upload Data" data-toggle="modal">Edit
                                              
                                                  </a>
												   
										 <a class="btn btn-danger btn-sm" href="hapus_mapel.php?id=<?php echo $nom ?>"  onclick="return confirm('Anda Yakin akan menghapus data mata pelajaran ini?')" >
                                            Hapus
                                        </a>
                                                 
                                                   </td>
                                                </tr>
                                               
                                            </tbody>
											
                                            <?php } ?>
                                        </table>
                                 
                            <div id="form_modal3" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Tambah Mata Pelajaran</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="index.php?page=tmapel" class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Kode Mapel</label>
                                                             <div class="col-md-8">
                                                                <input name="kodemapel" class="form-control input-medium date-picker" size="16" type="text" value=""> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Nama Mapel</label>
                                                              <div class="col-md-8">
                                                                <input name="namamapel" class="form-control input-medium date-picker" size="16" type="text" value=""> </div>
                                                     </div>
                                                 <div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input type="submit" class="btn green" value="Tambah"/></input>
                                                 </form>       

												</div>
                                            </div>
                                        </div>
                                    </div>
							</div>
                            <!-- modal edit -->
							 <div id="form_modal9" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Edit Mata Pelajaran</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="index.php?page=edit_mapel" class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Kode Mapel</label>
                                                             <div class="col-md-8">
                                                                <input name="kodemapel" class="form-control input-medium date-picker" size="16" type="text" value="<?php echo $kode ?>"> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Nama Mapel</label>
                                                              <div class="col-md-8">
                                                                <input name="namamapel" class="form-control input-medium date-picker" size="16" type="text" value="<?php echo $nama ?>"> </div>
                                                     </div>
                                                 <div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input type="submit" class="btn green" value="Edit"/></input>
                                                 </form>       

												</div>
                                            </div>
                                        </div>
                                    </div>
							</div>
							
                            <!-- BEGIN PROGRESS BARS PORTLET--><!-- END PROGRESS BARS PORTLET-->
                            <!-- BEGIN LABELS AND BADGES PORTLET--><!-- END LABELS AND BADGES PORTLET-->
                            <!-- BEGIN PAGINATION PORTLET--><!-- END PAGINATION PORTLET-->
                            <!-- BEGIN PAGINATION PORTLET-->
                            
                            <!-- END THUMBNAILS PORTLET-->
                        
                    </div>
                            </div>
                        </div>
                  
                    <div id="form_modal4" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Upload Data Peserta</h4>
                                                </div>
                                                <div class="modal-body">
 

<form method="post" enctype="multipart/form-data" action="uploadsoal/proses_kelas.php">
<input name="userfile" type="file">
<p>Format Upload download <a href="../file-excel/kelas_temp.xls"><strong>Disini </strong></a></p>
<div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input type="submit" name="Upload" class="btn green" value="Import"/></input>
</form>
</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
