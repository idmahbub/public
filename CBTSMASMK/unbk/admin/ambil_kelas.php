<?php

include "cbt_con.php";

$id_kelas = $_GET['id'];

?>

 <div class="form-group">
                                                            <label class="control-label col-md-4">Tingkat</label>
                                                            <div class="col-md-4">

<select name="kelas" class="bs-select form-control" data-width="75%" tabindex="-98" >

	<option value="">--Pilih Kelas--</option>

	<?php

		$sql_kota = mysql_query("SELECT * FROM cbt_kelas WHERE XLevelKelas='$id_kelas' ORDER by XKodeKelas ASC");

		while ( $r = mysql_fetch_array($sql_kota)){

	?>
			<option value="<?php echo $r['XKodeKelas']; ?>"> <?php echo $r['XKodeKelas']; ?> </option>

	<?php } /* end while */	?>

</select></div></div>

      