
 <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        PENGATURAN SOAL UJIAN <a href="../unzip.php" class="btn green-sharp btn-sm" data-toggle="modal" >Upload Gambar ZIP</a></div>
                                     <div class="actions">
                                     
                                            
                                        </a>
                          				<a class="btn btn-circle btn-icon-only btn-default" href="#form_modal4" title="Buat Soal" data-toggle="modal" >
                                            <i class="icon-action-redo"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#form_modal5" title="Upload Data" data-toggle="modal">
                                            <i class="icon-cloud-upload"></i>
                                        </a>
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                    
                                </div>
                                <table class="table table-striped table-hover">
                                            <thead>
                                                <tr style="color:#FFF" bgcolor="#333333">
                                                    
                                                    <th> No</th>
                                                    <th> Nama Mapel </th>
                                                    <th> Kode Soal </th>
                                                    <th> Jumlah Soal </th>
                                                    <th> Acak Soal </th>
                                                    <th> Aksi </th>
                                                   
                                              </tr>
                                          </thead>
                                          
                                          <?php
										  $no1 = 1;
										   $sql01 = "select DISTINCT XKodeSoal,XKodeMapel,XKodeKelas,Xidacak from cbt_soal order by XKodeSoal asc";
    $result01 = mysql_query($sql01);
	while($mhs01 = mysql_fetch_array($result01)){ 
	?>
                                            <tbody>
                                                <tr>
                                                    <td> <?php echo $no1++; ?> </td>
                                                    			  <?php $no1 = 1;
																  $km = $mhs01['XKodeMapel'];
										   $sql012 = "select * from cbt_mapel where XKodeMapel = '$km'";
    $result012 = mysql_query($sql012);
	while($mhs012 = mysql_fetch_array($result012)){ 
	?>
                                                    <td> <?php echo $mhs012['XNamaMapel']; ?> <?php } ?></td>
                                                    <td> <?php echo $mhs01['XKodeSoal']; ?> </td>
                                                    <td> <?php 
//Here you specify how many characters the returning string must have 
include "../cbt_con.php";
$soal = $mhs01['XKodeSoal'];
$jumsoal = mysql_num_rows(mysql_query("select * from cbt_soal where  XKodeSoal = '$soal'"));
echo "$jumsoal"; 
?></td>
<td>
      <form action="acaksoal.php" method="post">
                                                    <input name="kodesoal" type="hidden" style="border:none" value="<?php echo $mhs01['XKodeSoal']; ?>" />
                                                <?php
 $ack = $mhs01['Xidacak']; 
 if ($ack==1){
	 echo '<input class="btn btn-success btn-sm" type="submit" value="Tidak" name="tidak"/>';
 }
 else {
	 echo '<input class="btn btn-warning btn-sm" type="submit" value="Acak" name="acak"/>';
 }
 
 ?>
                            </form></td>
                                                    <td>
                                                    
    <a class="btn btn-primary btn-sm" href="index.php?page=list_soal&id=<?php echo $mhs01['XKodeSoal']; ?>" title="Edit Soal">
                                            Lihat
                                        </a>
                                                    <a class="btn btn-danger btn-sm" href="hapus_soal.php?id=<?php echo $mhs01['XKodeSoal']; ?>" title="Hapus Soal" onclick="return confirm('Anda Yakin akan menghapus Semua soal ini?')" > Hapus
                                                    </a>
                                              
                                                   </td>
                                                </tr>
                                               
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                                                       
                                <div id="form_modal4" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Buat Soal Langsung</h4>
                                                </div>
                                                <div class="modal-body">
                                                  <?php include "buatsoal/index.php"; ?>
 
<div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                            <input type="submit" class="btn btn-success" value="Buat"/>
</form>
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                     <div id="form_modal12" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Upload Gambar Zip</h4>
                                                </div>
                                                <div class="modal-body">
                                               

<? include "unzip.php" ?> 
<br />

<div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
													<input type="submit" class="btn btn-success" name="submit" value="Upload"/>
 
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      </div>
                       <div id="form_modal5" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Upload Data Soal</h4>
                                                </div>
                                                <div class="modal-body">
  <div class="panel panel-default">
                      <div class="panel-heading">Buat Grup Soal </div>
                      <div class="panel-body"><form method="post" enctype="multipart/form-data" action="uploadsoal/proses_soal.php">
                                <table border="0" width="90%" align="center">
                        <tr height="40px"><td> Mata Uji </td><td>
								<select name="txt_mapel" id="txt_mapel">
                                <? 
                                    $conn = $sqlconn;
    mysql_select_db("cbt",$conn);
                                $sqlkelas = mysql_query("select * from cbt_mapel order by XNamaMapel");
                                while($sk = mysql_fetch_array($sqlkelas)){
                                echo "<option value='$sk[XKodeMapel]'>$sk[XNamaMapel]</option>";
                                }
                                ?>
                                </select>
                            </td></tr>
                        	<tr height="40px"><td> Grup Soal </td><td>
                                <input type="text" name="txt_ujian" id="txt_ujian" />
                            </td></tr>
                        	</table>
                      </div>
                    </div>

                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h3 class="panel-title">Upload File Soal</h3>
                      </div>
                      <div class="panel-body">
<table width="100%" border="0"><tr><td>
Excel File : <input name="userfile" type="file" class="btn btn-danger"></td><td>
</td></tr>
<tr>
<td colspan="2"><br>
Format Upload download <a href="../file-excel/soal_temp.xls"><strong>Disini </strong></a>
			<?
            if(isset($_POST['upload'])){
            //echo "$_REQUEST[Kode]";
            // menggunakan class phpExcelReader
            include "excel_reader2.php";
            
            // koneksi ke mysql
            include "../../cbt_con.php";
            $xkodemapel = "GAL1";
            $xkodesoal = "XGAL1SOAL2";
            
            // membaca file excel yang diupload
            $data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
            
            // membaca jumlah baris dari data excel
            $baris = $data->rowcount($sheet_index=0);
            
            // nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
            $sukses = 0;
            $gagal = 0;
            
            // import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
            for ($i=2; $i<=$baris; $i++)
            {
              // membaca data soalid (kolom ke-1 FIELD)
              $fieldz = $data->val($i, 1);
              // membaca data pertanyaan (kolom ke-2 R)
              $xlevel = $data->val($i, 1);
              $xkelas = $data->val($i, 2);
             
                      // setelah data dibaca, sisipkan ke dalam tabel mhs
                      $query = "INSERT INTO cbt_mapel ( XKodeMapel, XNamaMapel, XKodeSoal) VALUES ('$xlevel', '$xkelas','$_REQUEST[txt_ujian]')";
                      $hasil = mysql_query($query);
              if ($hasil) $sukses++;
              else $gagal++;
              }
              // jika proses insert data sukses, maka counter $sukses bertambah
              // jika gagal, maka counter $gagal yang bertambah
            
            
            // tampilan status sukses dan gagal
            echo "<h3>Proses import data selesai.</h3>";
            echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
            echo "Jumlah data yang gagal diimport : ".$gagal."</p>";
            
            
            }
            
            ?>
</td></tr>

</table>


                      </div>
<div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input name="upload" type="submit" class="btn btn-success" value="Import">
</form>
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
