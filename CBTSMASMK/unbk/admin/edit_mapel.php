<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
include("cbt_con.php"); 

if (isset($_GET['id'])) 
	{
	    $newID = $_GET['id'];
	} 
else 
    {
	   die ("Error. None Selected! ");	
    }
$query 			= "SELECT * from cbt_mapel WHERE id='$newID'";
$sql 			= mysql_query ($query);
$hasil 			= mysql_fetch_array ($sql);
$nom 			= stripslashes ($hasil['Urut']);
$kode 			= stripslashes ($hasil['XKodeMapel']);
$nama   		= stripslashes ($hasil['XNamaMapel']);


?>
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
