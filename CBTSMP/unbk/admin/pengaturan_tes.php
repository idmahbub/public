 <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        DASBOARD
                                    </div>
                                    
                                </div>
                           <div class="row">
                        <div class="col-md-6">
                            <!-- BEGIN PORTLET-->
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
	?>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $no++; ?> </td>
                                                    <td> <?php echo $mhs0['XKodeLevel']; ?> </td>
                                                    <td> <?php echo $mhs0['XLevelKelas']; ?> </td>
                                                    <td> <?php echo $mhs0['XKodeKelas']; ?> </td>
                                                    <td>
                                                   <a class="btn btn-circle btn-icon-only btn-default" href="hapus_kelas.php?id=<?php echo $mhs0['Urut']; ?>"  onclick="return confirm('Anda Yakin akan menghapus data Kelas ini?')" >
                                            <i class="icon-trash"></i>
                                        </a>
                                                    </a>
                                                   </td>
                                                </tr>
                                               
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                </div>
                            </div>
                            
                            
                            
                            
                            <!-- END PORTLET-->
                            <!-- BEGIN PORTLET--><!-- END PORTLET-->
                            <!-- BEGIN PORTLET--><!-- END PORTLET-->
                            <!-- BEGIN PORTLET--><!-- END MODAL DIALOG PORTLET-->
                            <!-- BEGIN TOOLTIPS PORTLET--><!-- END TOOLTIPS PORTLET-->
                            <!-- BEGIN POPOVERS PORTLET--><!-- END POPOVERS PORTLET-->
                            <!-- BEGIN LIST PORTLET--><!-- END LIST PORTLET-->
                            <!-- BEGIN PANELS PORTLET--><!-- END PANELS PORTLET-->
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN PORTLET-->
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
<a class="btn btn-circle btn-icon-only btn-default" href="#form_modal5" title="Upload Data" data-toggle="modal">
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
	?>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $no++; ?> </td>
                                                    <td> <?php echo $mhs0['XKodeMapel']; ?> </td>
                                                    <td> <?php echo $mhs0['XNamaMapel']; ?> </td>
                                                    <td>
                                                   <a class="btn btn-circle btn-icon-only btn-default" href="hapus_mapel.php?id=<?php echo $mhs0['Urut']; ?>"  onclick="return confirm('Anda Yakin akan menghapus data mata pelajaran ini?')" >
                                            <i class="icon-trash"></i>
                                        </a>
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
                                    
                            <!-- END PORTLET-->
                            <!-- BEGIN PROGRESS BARS PORTLET--><!-- END PROGRESS BARS PORTLET-->
                            <!-- BEGIN LABELS AND BADGES PORTLET--><!-- END LABELS AND BADGES PORTLET-->
                            <!-- BEGIN PAGINATION PORTLET--><!-- END PAGINATION PORTLET-->
                            <!-- BEGIN PAGINATION PORTLET-->
                            
                            <!-- END THUMBNAILS PORTLET-->
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
                                    
                                    
