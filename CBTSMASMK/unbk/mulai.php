<?
 include "cbt_con.php";
 $txtuser = str_replace(" ","",$_REQUEST['UserName']);
 $txtpass = str_replace(" ","",$_REQUEST['Password']);
 
 $sqllogin = mysql_query("SELECT * FROM  `cbt_siswa` WHERE XNomerUjian = '$txtuser' and XPassword = '$txtpass'");
 $sis = mysql_fetch_array($sqllogin);
  $val_siswa = $sis['XNamaSiswa'];
  $xjeniskelamin= $sis['XJenisKelamin']; 
  if($xjeniskelamin=="L"){$jekel = "LAKI-LAKI";} else {$jekel = "PEREMPUAN";}
 
 /*
 $jmlsqllogin = mysql_num_rows($sqllogin);
 if($jmlsqllogin<1){header('Location:login.php?salah=1');
 }
 */
 $tglujian = date("Y-m-d");
 $xjam1 = date("H:i:s");
 $user = "$_COOKIE[PESERTA]";
// setcookie('PESERTA',$user);

 //  $user = $_COOKIE['PESERTA'];
//  setcookie('PESERTA',$user);
  $sqluser = mysql_query("SELECT *,s.XKodeKelas as kelassiswa FROM  `cbt_siswa` s LEFT JOIN cbt_ujian u ON s.XKodeKelas = u.XKodeKelas
  left join cbt_mapel m on  m.XKodeMapel = u.XKodeMapel
  WHERE XNomerUjian = '$user' and u.XStatusUjian = '1'");
  $s = mysql_fetch_array($sqluser);
  $xkodesoal = $s['XKodeSoal'];
  $xkodekelas = $s['kelassiswa'];
  $xtglujian = $s['XTglUjian'];  
  $xkodemapel = $s['XKodeMapel'];
  $xjumlahsoal = $s['XJumSoal'];
  $xtokenujian = $s['XTokenUjian'];  
  $xlamaujian= $s['XLamaUjian'];
  $xjamujian= $s['XJamUjian'];    
  $xbatasmasuk= $s['XBatasMasuk'];   
  $xnamamapel = $s['XNamaMapel'];
    
 if($_REQUEST['KodeToken']!==$xtokenujian){
header('Location:konfirm.php?salah=1');
 echo "Token Salah";
 } 
?>

<!DOCTYPE html>
<html class="no-js" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>CBT ONLINE | APLIKASI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        function disableBackButton() {
            window.history.forward();
        }
        setTimeout("disableBackButton()", 0);
    </script>
    
<style>
    .no-close .ui-dialog-titlebar-close {
        display: none;
    }
</style>

    <link href="css/fonts.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">

    <script src="js/inline.js"></script>

<body class="font-medium">

<main>
        
<header>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="http://rahmanardisaputra.com">CBT ONLINE | APLIKASI</a>
            <div class="pull-right bg-dark">
                <div class="access-panel">
                    <div class="ac-avatar"></div>
                    <div class="ac-info">
                        <span class="ac-welcome">Selamat Datang</span>

                        <span class="ac-name"><? echo "$val_siswa"; ?></span>
                                <a href="logout.php" class="logout">Logout</a>                    </div>
                </div>
            </div>
      </div>
    </nav>
</header>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-lg-8"><!--GRID 6 DI LAYAR SMALL + GRID 8 DI LAYAR LEBAR-->
<br>
<form action="puspendik.php" method="post">    
		<div class="page-column">
        	<!-- <div class="alert alert-danger" role="alert" style="font-size: 16px;">
            <div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
            </ul>
            </div>
            !-->
            
        </div>
        <div class="page-col-left col-centered">
            <div class="list-group">
                <div class="list-group-item top-heading">
                    <h1 class="list-group-item-heading page-label">Konfirmasi Data Tes</h1>
                </div>
                <div class="list-group-item">
                    <label class="list-group-item-heading">Kode Tes</label>
                    <p class="list-group-item-text"><? echo "$xkodesoal"; ?></p>
                    <!--<input id="KodeNik" name="KodeNik" type="hidden" value="21605111610018">!-->
                    <input id="KodeNik" name="KodeNik" type="hidden" value="<? echo "$user"; ?>">
                </div>
                <div class="list-group-item">
                    <label class="list-group-item-heading">Status Tes</label>
                    <p class="list-group-item-text"><? echo "$val_siswa ($xkodekelas)"; ?></p>
                    <input id="NamaPeserta" name="NamaPeserta" type="hidden" value="Ariel Leviano De Eluzai">
                </div>
                <div class="list-group-item">
                    <label class="list-group-item-heading">Mata Uji Tes</label>
                    <p class="list-group-item-text"><? echo "$xnamamapel"; ?></p>
                    <input id="Gender" name="Gender" type="hidden" value="Pria">
                </div>
<?  
$sqlcekujian = mysql_num_rows(mysql_query("SELECT * FROM cbt_ujian where XKodeKelas = '$xkodekelas' and XStatusUjian = '1'"));
if($sqlcekujian>0){ 
$xtglujian0 = strtotime($xtglujian);
$xtglujian1 = date('d/m/Y', $xtglujian0);
$xtglujian2 = date('d/M/Y', $xtglujian0);
$j1 = substr($xlamaujian,0,2)*60;
$m1 = substr($xlamaujian,3,2);
$jumtotwaktu = $j1+$m1;
?>

                <div class="list-group-item">
                    <label class="list-group-item-heading">Tanggal Tes </label>
                    <p class="list-group-item-text"><? echo "$xtglujian2"; ?></p>
                    <input id="KodePaket" name="KodePaket" type="hidden" value="IPA - SMP">
                </div>
                  <div class="list-group-item">
                    <label class="list-group-item-heading">Waktu Tes </label>
                    <p class="list-group-item-text"><? echo "$xtglujian1 $xjamujian"; ?></p>
                    <input id="KodePaket" name="KodePaket" type="hidden" value="IPA - SMP">
                </div>
                 <div class="list-group-item">
                    <label class="list-group-item-heading">Alokasi Waktu Tes </label>
                    <p class="list-group-item-text"><? echo "$jumtotwaktu menit"; ?></p>
                    <input id="KodePaket" name="KodePaket" type="hidden" value="IPA - SMP">
                </div>
             
<? } ?>

          
  		</div>
        </div>

</form>

			</div>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<link href="css/main.css" rel="stylesheet">
			<div class="col-sm-6 col-lg-4"><!--GRID 6 DI LAYAR SMALL + GRID 4 DI LAYAR LEBAR-->
<br>
<div id="myerror" class="alert alert-warning" role="alert" style="font-size: 13px; font-style:normal; font-weight:normal><ul><li style="display:none">
    <i class="glyphicon glyphicon-warning-sign"></i>  <font size="3px">Tombol MULAI hanya akan aktif apabila waktu sekarang sudah melewati waktu mulai tes. Tekan tombol F5 untuk merefresh halaman</font>
    </li></ul> </div>
 

                            <div class="page-col-left col-centered">
                            <br><a href=ujian.php><button type="submit" class="btn btn-danger btn-block doblockui">MULAI</button></a>
                            </div>


			</div>
		</div>
	</div>
</div>

                <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label">Konfirmasi Tes</h1>
                </div>
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="wysiwyg-content">
                            <p>
                                Terimakasi telah berpartisipasi dalam tes ini.<br>
                                Silahkan klik tombol LOGOUT untuk mengakhiri test.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-offset-3 col-xs-6">
                            <button type="submit" class="btn btn-success btn-block" data-dismiss="modal">LOGOUT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </main>
<footer>
    <div class="container">
        <p>Semangat Baru Indonesia | Education Partner</p>
    </div>
</footer>


    <script src="js/jquery.cookie.js"></script>
<script src="js/common.js"></script>
<script src="js/main.js"></script>
<script src="js/cookieList.js"></script>
<script src="js/backend.js"></script>

    
    

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div></body></html>