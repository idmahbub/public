<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!-- TinyMCE 4.x -->
 
<script type="text/javascript" src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
 
tinymce.init({
  selector: "textarea",
  
  // ===========================================
  // INCLUDE THE PLUGIN
  // ===========================================
	
  plugins: [
    "eqneditor advlist lists charmap anchor",
    "code fullscreen",
    "table contextmenu paste jbimages"
  ],
	
  // ===========================================
  // PUT PLUGIN'S BUTTON on the toolbar
  // ===========================================
	
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	
  // ===========================================
  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
  // ===========================================
	
  relative_urls: false,
 forced_root_block : "", 
    force_br_newlines : true,
    force_p_newlines : false,
});
 
</script>
<!-- /TinyMCE -->
  
</head>

<body>
<center><strong>
<h2>Pembuatan Identitas Soal | <a href="index.php">Kembali</a></h2></strong>

<form method="post" action="multi_insert.php">
  <input type="hidden" name="jumlah" value="<?php echo $_POST['angka']?>"/>
</p>
  <?php
  $no= 1;
   for($i=0;$i<$_POST['angka'];$i++){
	   $ns = $no++
  ?>

<input type="hidden" style="display:none" name="nomor<?php echo $i?>" value="<? echo $ns ?>" >
<input type="hidden" name="a<?php echo $i?>" value="" id="textfield9" size="50" >
<input type="hidden" name="b<?php echo $i?>" value="" size="50" >
<input type="hidden" name="c<?php echo $i?>" value="" size="50" >
<input type="hidden" name="d<?php echo $i?>" value="" size="50" >
<input type="hidden" name="e<?php echo $i?>" value="" size="50" >
<input type="hidden" name="soal<?php echo $i?>" value="" >
<input type="hidden" name="audio<?php echo $i?>" value="" >
<input type="hidden" name="kunci<?php echo $i?>" value="" >    <?php
   }
  ?>

Mata Uji
  <select name="mapel" id="txt_mapel">
    <? 
                                    include ('../cbt_con.php');
                                $sqlkelas = mysql_query("select * from cbt_mapel order by XNamaMapel");
                                while($sk = mysql_fetch_array($sqlkelas)){
                                echo "<option value='$sk[XKodeMapel]'>$sk[XNamaMapel]</option>";
                                }
                                ?>
  </select>
Nama Paket Soal
 <label for="textfield14"></label>
<input type="text" name="grup" />
<p> 
    Pegaturan Tambahan :       Acak Soal 
  <label for="select2"></label>
  <select name="acak" id="select2">
    <option value="1">YA</option>
    <option value="0">TIDAK</option>
  </select>
</p>
  <input type="submit" value="BUAT SOAL"/>
  <input type="hidden" name="jumlah" value="<?php echo $_POST['angka']?>"/>
</form>
</center>
</body>
</html>