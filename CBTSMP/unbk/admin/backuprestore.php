            <div class="container">
            <div class="row">
                <h1>Backup dan Restore</h1>
            
        </div><!--/.row-->
        <div class="row">
            
            <ul class="nav nav-tabs">
            <!-- Untuk Semua Tab.. pastikan a href=”#nama_id” sama dengan nama id di “Tap Pane” dibawah-->
              <li class="active"><a href="#backup" data-toggle="tab"><i class="icon-docs"></i> Backup</a></li> <!-- Untuk Tab pertama berikan li class=”active” agar pertama kali halaman di load tab langsung active-->
              <li><a href="#restore" data-toggle="tab"><i class="icon-reload"></i> Restore</a></li>
              <li><a href="#hapus" data-toggle="tab"><i class="icon-close"></i> Hapus</a></li>
            
            </ul>
            <!-- Tab panes, ini content dari tab di atas -->
            <div class="tab-content">
              <div class="tab-pane active" id="backup">
                <form action="" method="post" name="postform">
                <div class="form-group">
                    <label for="exampleInputFile">Backup</label>
                    <p>Gunakan fasilitas ini untuk melakukan <strong><a href='?page=backup_restore'>backup</a></strong> database. Mohon lakukan backup database secara berkala.</p>
                  </div>
                 <input type="submit" name="backup" class="btn btn-success"  onClick="return confirm('Apakah Anda yakin?')"value="Proses Backup" />
                
                </form>

            <?php
                if(isset($_POST['backup'])){

                    //membuat nama file
                    $file = "woka_".date("d-m-Y").'.sql';

                    //panggil fungsi dengan memberi parameter untuk koneksi dan nama file untuk backup
                    $a = backup_tables("localhost","root","","cbt",$file);
            ?>

                    <p align="center">&nbsp;</p>
                        <p align="left"><a style="cursor:pointer" onClick="location.href='../admin/download_backup_data.php?nama_file=<?php echo $file; ?>'" title="Download"><div class="well well-sm"><i class="icon-check"></i> Backup database telah selesai. <font color="#0066FF">Download file database</font></a></div>
                   <span>
     
     
                    Silahkan Lakukan Hapus data untuk memperingan server anda
                    </p>
              

            <?php
                }else{
                    unset($_POST['backup']);
                }

                /*
                untuk memanggil nama fungsi :: jika anda ingin membackup semua tabel yang ada didalam database, biarkan tanda BINTANG (*) pada variabel $tables = '*'
                jika hanya tabel-table tertentu, masukan nama table dipisahkan dengan tanda KOMA (,)
                */
                
                date_default_timezone_set("ASIA/JAKARTA");
                function backup_tables($host,$user,$pass,$name,$nama_file,$tables = '*')
                {
                    //untuk koneksi database
                    $connect = mysqli_connect($host,$user,$pass,$name);

                    if($tables == '*')
                    {
                        $tables = array();
                        $result = mysqli_query($connect, 'SHOW TABLES');
                        while($row = mysqli_fetch_row($result))
                        {
                            $tables[] = $row[0];
                        }
                    }else{
                        //jika hanya table-table tertentu
                        $tables = is_array($tables) ? $tables : explode(',',$tables);
                    }

                    //looping dulu
                    foreach($tables as $table)
                    {
                        $result = mysqli_query($connect, 'SELECT * FROM '.$table);
                        $num_fields = mysqli_num_fields($result);

                        //menyisipkan query drop table untuk nanti hapus table yang lama
                        $return.= 'DROP TABLE '.$table.';';
                        $row2 = mysqli_fetch_row(mysqli_query($connect, 'SHOW CREATE TABLE '.$table));
                        $return.= "\n\n".$row2[1].";\n\n";

                        for ($i = 0; $i < $num_fields; $i++)
                        {
                            while($row = mysqli_fetch_row($result))
                            {
                                //menyisipkan query Insert. untuk nanti memasukan data yang lama ketable yang baru dibuat. so toy mode : ON
                                $return.= 'INSERT INTO '.$table.' VALUES(';
                                for($j=0; $j<$num_fields; $j++)
                                {
                                    //akan menelusuri setiap baris query didalam
                                    $row[$j] = addslashes($row[$j]);
                                    $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                                    if ($j<($num_fields-1)) { $return.= ','; }
                                }
                                $return.= ");\n";
                            }
                        }
                        $return.="\n\n\n";
                    }

                    //simpan file di folder yang anda tentukan sendiri. kalo saya di folder "DATA"
                    $nama_file;

                    $handle = fopen('../admin/Data/'.$nama_file,'w+');
                    fwrite($handle,$return);
                    fclose($handle);
                }
            ?>

                  
                    
                    
              </div><!-- Untuk Tab pertama berikan div class=”active” agar pertama kali halaman di load content langsung active-->
              <div class="tab-pane" id="restore">
                <form enctype="multipart/form-data" action="" method="post">
                <div class="form-group">
                    <label for="exampleInputFile">Restore</label>
                    <p class="help-block">Halaman ini digunakan untuk fasilitas Database yang akan di restore<strong></strong></p>
                    <input type="file" name="datafile" size="30" id="gambar">
                    <p class="help-block">File Restore Database (*.sql)</p>
                  </div>
                <button type="submit" onclick="return confirm('Apakah Anda yakin akan restore database?')" name="restore" class="btn btn-success">Proses Restore</button>
                </form>
                <br>
                

                        <?php
                            if(isset($_POST['restore'])){
                                $koneksi=mysql_connect("localhost","root","");
                                mysql_select_db("cbt",$koneksi);
    
                                $nama_file=$_FILES['datafile']['name'];
                                $ukuran=$_FILES['datafile']['size'];
    
                            //periksa jika data yang dimasukan belum lengkap
                                if ($nama_file=="")
                                {
                                    echo "Fatal Error";
                                }else{
        
                            //definisikan variabel file dan alamat file
                                $uploaddir='../admin/restore/';
                                $alamatfile=$uploaddir.$nama_file;

                            //periksa jika proses upload berjalan sukses
                                if (move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile))
                                {
            
                                    $filename = '../admin/restore/'.$nama_file.'';
            
                            // Temporary variable, used to store current query
                                $templine = '';
            
            // Read in entire file
            $lines = file($filename);
            // Loop through each line
            foreach ($lines as $line)
            {
                // Skip it if it's a comment
                if (substr($line, 0, 2) == '--' || $line == '')
                    continue;
             
                // Add this line to the current segment
                $templine .= $line;
                // If it has a semicolon at the end, it's the end of the query
                if (substr(trim($line), -1, 1) == ';')
                {
                    // Perform the query
                    mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
                    // Reset temp variable to empty
                    $templine = '';
                }
            }
            echo "<div class='well well-sm'><i class='icon-check'></i> Berhasil Restore Database, silahkan di cek.</div>";
        
        }else{
            //jika gagal
            echo "Proses upload gagal, kode error = " . $_FILES['location']['error'];
        }   
    }

}else{
    unset($_POST['restore']);
}
?>



</body>
</head>

    

              </div>
              <div class="tab-pane" id="hapus">
          <form enctype="multipart/form-data" action="" method="post">
                <div class="form-group">
                    <label for="exampleInputFile">Hapus</label>
                    <p class="help-block">Halaman ini digunakan untuk menghapus jawaban siswa yang telah ujian untuk memperingan server anda<strong></strong></p>
                    PASTIKAN ANDA SUDAH MEMBACKUP DATABASE ANDA
                  </div>
                <button type="submit" onclick="return confirm('Apakah Anda yakin akan Menghapus database?')" name="hapusx" class="btn btn-success">Hapus</button>
                
                </form>
                <br>
                <?php
if(isset($_POST['hapusx'])){ $query = "TRUNCATE TABLE cbt_jawaban";
    $querya = "TRUNCATE TABLE cbt_siswa_ujian";
    $hasila = mysql_query($query);
	$hasil = mysql_query($querya);
	
	if ($hasila){
   echo " Berhasil Hapus database " ;
    }else{
		echo " gagal Hapus Database " ;}
    
}
    ?>

  
        </div>
            </div>
        </div><!--/.row-->
        </div><!--/.container-->
        </div>
        </div>

        