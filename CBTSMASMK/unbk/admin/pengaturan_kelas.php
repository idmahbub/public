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
                                        <span class="caption-subject font-dark bold uppercase">Data Kelas</span>
                                    </div>
                                    <div class="actions">
                          				<a class="btn btn-circle btn-icon-only btn-default" href="#form_modal2" title="Tambah Data" data-toggle="modal" >
                                            <i class="icon-action-redo"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#form_modal4" title="Upload Data" data-toggle="modal">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="portlet-body">
                                   <table class="table table-striped table-hover">
                                            <thead>
                                                <tr style="color:#FFF" bgcolor="#333333">
                                                    
                                                    <th> No</th>
                                                    <th> Kode </th>
                                                    <th> Jenjang </th>
                                                    <th> Kelas </th>
                                                    <th> Aksi </th>
                                                   
                                              </tr>
                                          </thead>
                                          
                                          <?php
										    $no = 1;
										    $sql0 = "select * from cbt_kelas order by XLevelKelas desc";
											$result0 = mysql_query($sql0);
											while($mhs0 = mysql_fetch_array($result0)){ 
											$nom = $mhs0['Urut'];
											?>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $no++; ?> </td>
                                                    <td> <?php echo $mhs0['XKodeLevel']; ?> </td>
                                                    <td> <?php echo $mhs0['XLevelKelas']; ?> </td>
                                                    <td> <?php echo $mhs0['XKodeKelas']; ?> </td>
                                                    <td>
                                                   <a class="btn btn-primary btn-sm" href="index.php?page=edit_kelas&id=<?php echo $nom ?>" title="Upload Data" data-toggle="modal">Edit
												   </a>
												   <a class="btn btn-danger btn-sm" href="hapus_kelas.php?id=<?php echo $mhs0['Urut']; ?>"  onclick="return confirm('Anda Yakin akan menghapus data Kelas ini?')" >Hapus
												   </a>

                                                
                                                   </td>
                                                </tr>
                                               
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                </div>
                           
              
                
                            <!-- BEGIN PORTLET-->
                          <div class="portlet light bordered">
                           
                                 <div class="portlet-body">

                                   
                                        <div id="form_modal2" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Tambah Data kelas</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="index.php?page=tkelas" class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Jenjang</label>
                                                            <div class="col-md-3">
                                                               <select name="kodelevel" class="bs-select form-control" data-width="75%" tabindex="-98">
                                                            <option>- Pilih -</option>
                                                            <option value="SD">SD</option>
                                                            <option value="SMP">SMP</option>
                                                            <option value="SMA">SMA</option>
                                                            <option value="SMK">SMK</option>
                                                        </select> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Tingkat</label>
                                                            <div class="col-md-3">
                                                               <select name="namalevel" class="bs-select form-control" data-width="75%" tabindex="-98">
                                                            <option>- Pilih -</option>
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
                                                        </select> </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">Nama Kelas</label>
                                                            <div class="col-md-8">
                                                                <input name="kodekelas" class="form-control input-medium date-picker" size="16" type="text" value=""> </div>
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
                                        </div>
                                    </div>
                                    
                               
                            </div>
                          
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
									</div>
                                    
                                    
