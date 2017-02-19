<h2 align="center">Upload Files</h2>
<form enctype="multipart/form-data" action="p_upload.php" method="post">
<table class="datatable" align="center">
  <tr>
    <td width="29%" height="37" valign="middle"><font size="2" face="verdana">File</font></td>
    <td><input type="file" name="datafile" size="30" id="gambar" /></td>
  </tr>
  
  <tr>
    <td height="32"><font face="verdana" size="2">Keterangan</font></td>
    <td><input type="text" name="keterangan" cols="30" rows="10"></textarea></td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td width="71%"><input name="submit" type="submit" value="Upload" />&nbsp;</td>
  </tr>
</table>
</form>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<?
include "cbt_con.php";

$download=mysql_query("select * from tabel_data");
$cek=mysql_num_rows($download);

if($cek){
	
	?>
	<h2 align="center">Download Files</h2>
	<table class="datatable" align="center">
		<tr>
			<th>No</th>
			<th>Nama File</th>
			<th>Ukuran (byte)</th>
			<th>Tgl Upload</th>
			<th>Keterangan</th>
			<th>Download</th>
		</tr>
	<?
	while($row=mysql_fetch_array($download)){
		?>
		<tr>
			<td><? echo $c=$c+1;?></td>
			<td><?=$row['nama_file'];?></td>
			<td><?=$row['ukuran'];?></td>
			<td><?=$row['tgl_upload'];?></td>
			<td><?=$row['keterangan'];?></td>
			<td>
            <a href="<?=$row['url'];?>">download</a>
            </td>
		</tr>
		<?
	}
	?>
	</table>
	<?
	
}else{
	echo "<font color=red><center><b>Belum Ada Data!!</b><center</font>";
}


?>

