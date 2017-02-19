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
                                        <span class="caption-subject font-dark bold uppercase">Data Audio </span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#form_modal4" title="Upload Data" data-toggle="modal">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                
                                
                          <?
include "cbt_con.php";

$download=mysql_query("select * from cbt_tabel_data");
$cek=mysql_num_rows($download);

if($cek){
	
	?>      
                                
                                <div class="portlet-body">
<table class="table table-striped table-hover">
                                            <thead>
                                                <tr style="color:#FFF" bgcolor="#333333">
                                                    
                                                    <th> No</th>
                                                    <th> Nama File </th>
                                                    <th> Keterangan </th>
                                                    <th> Tanggal</th>
                                                 	<th>aksi</th>
                                                   
                                              </tr>
                                          </thead>
                                          
                                     
                                            <tbody>
                                            	<?
	while($row=mysql_fetch_array($download)){
		?>
                                                <tr><form action="../hapus_audio.php" method="post">
                                                    <td> <? echo $c=$c+1;?></td>
                                                    <td><?=$row['nama_file'];?></td>
                                                    <input type="hidden" name="nn" value="<?=$row['nama_file'];?>"  />
                                                    <input type="hidden" name="id" value="<?=$row['id'];?>"  />
                                                    <td><?=$row['keterangan'];?></td>
                                                    <td><?=$row['tgl_upload'];?></td>
                                                 <td> <input onclick="return confirm('Anda Yakin Akan Menghapus Audio ini ? ')" class="btn btn-danger btn-sm" type="submit" value="Hapus" name="hapus"/></td>
                                                </tr>
                                               </form>
                                            </tbody>

                                        
	<?
	}
	?>
    </table>
    	<?
	
}else{
	echo "<font color=red><center><b>Belum Ada Data!!</b><center</font>";
}


?>
                                </div>
                           
              
                
                            <!-- BEGIN PORTLET-->
                          <div class="portlet light bordered">
                           
                                 <div class="portlet-body">

                                   
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
 

<form enctype="multipart/form-data" action="p_upload.php" method="post">
<table class="datatable" align="center">
  <tr>
  Pastikan Format File Anda adalah .mp3 dan nama file anda Tidak lebih dari 20 karakter, dan Jangan ada Spasi. <br />

    <td width="29%" height="37" valign="middle"><font size="2" face="verdana">File Audio</font></td>
    <td><input type="file" name="datafile" size="30" id="gambar" /></td>
  </tr>
  
  <tr>
    <td height="32"><font face="verdana" size="2">Keterangan</font></td>
    <td><input type="text" name="keterangan" cols="30" rows="10"></textarea></td>
  </tr>
</table>
<div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input type="submit" name="Upload" class="btn green" value="Import"/></input>
</form>
</div>
                                            </div>
                                        </div>
                                    </div>
									</div>
                                    
                                    
