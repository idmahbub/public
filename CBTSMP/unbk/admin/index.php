<?php ob_start(); ?>
<?php
session_start();
if(!isset($_SESSION['login'])) {
	include("login.php");
}
else {
?>
<?php include "../cbt_con.php" ?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

   <head>
        <meta charset="utf-8">
        <title>ADMIN | CBT APLIKASI</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="" name="description">
        <meta content="" name="author">
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css">
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css">
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css">
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css">
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css">
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout6/css/layout.min.css" rel="stylesheet" type="text/css">
        <link href="../assets/layouts/layout6/css/custom.min.css" rel="stylesheet" type="text/css">
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="../admin/images/icon.ico"> </head>
    <!-- END HEAD -->

    <body >
    <script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
var htmlobjek;

$(document).ready(function(){
//apabila terjadi event onchange terhadap object <select id=propinsi>
$("#txt_level").change(function(){
var txt_level = $("#txt_level").val();
var txt_mapel = $("#txt_mapel").val();
$.ajax({
url: "ambil_level.php",
data: "txt_level="+txt_level+"&txt_mapel="+txt_mapel,
cache: false,
success: function(msg){
//jika data sukses diambil dari server kita tampilkan
//di <select id=kota>
$("#txt_ujian").html(msg);
}
});
});



	$("#txt_ujian").change(function(){
	var txt_ujian = $("#txt_ujian").val();
	$.ajax({
	url: "ambil_token.php",
	data: "txt_ujian="+txt_ujian,
	cache: false,
	success: function(msg){
	$("#txt_token").val(msg);
	}
	});
	});
	
	$("#txt_ujian").change(function(){
	var txt_ujian = $("#txt_ujian").val();
	$.ajax({
	url: "ambil_soal.php",
	data: "txt_ujian="+txt_ujian,
	cache: false,
	success: function(msg1){
	$("#txt_jumsoal").html(msg1);
	}
	});
	});

});
 
</script>
        <!-- BEGIN HEADER -->
        <header class="page-header">
            <nav class="navbar" role="navigation">
                <div class="container-fluid">
                    <div class="havbar-header">
                        <!-- BEGIN LOGO -->
                        <a id="index" class="navbar-brand" href="index.php">
                            <img src="../assets/layouts/layout6/img/logo.png" alt="Logo"> </a>
                        <!-- END LOGO -->
                        <!-- BEGIN TOPBAR ACTIONS -->
                        <div class="topbar-actions" style="margin-right:30px">
                        <H3><a class="btn red" href="#form_modal24" title="Tambah Data" data-toggle="modal" ><i class="icon-user"></i> UBAH PASSWORD</a>
</H3>
 <div id="form_modal24" class="modal fade" role="dialog" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Ubah Admin</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="index.php" class="form-horizontal" method="post">
                                                        <div class="form-group">
                                                            <label class="control-label col-md-4">User Admin</label>
                                                            <div class="col-md-3">
                                                            <input name="usr" class="form-control input-medium date-picker" size="16" type="text" value="" required="required">  </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label class="control-label col-md-4">Password</label>
                                                            <div class="col-md-8">
                                                                <input name="pas" class="form-control input-medium date-picker" size="16" type="password" value="" required="required"> </div>
                                                        </div>
                                                       
                                                         
                                                           

                                                <div class="modal-footer">
                                                    <button class="btn dark btn-outline" data-dismiss="modal" aria-hidden="true">Close</button>
                                                    <input type="submit" class="btn green" value="Ubah" name="ubad"/></input>
                                                 </form>   
	</div>												
                        </div>
                        <!-- END TOPBAR ACTIONS -->
                    </div>
                </div>
                <!--/container-->
            </nav>
        </header>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="container-fluid">
            <div class="page-content page-content-popup">
                <div class="page-content-fixed-header">
                    <!-- BEGIN BREADCRUMBS -->
                    <ul class="page-breadcrumb">
                      <li>Dashboard</li>
                      
                    </ul>
                    <!-- END BREADCRUMBS -->
                    <div class="content-header-menu">
                        <!-- BEGIN DROPDOWN AJAX MENU -->
                        <div class="dropdown-ajax-menu btn-group">
                          <ul class="dropdown-menu-v2">
                          <li>
                                    <a href="start.html">Application</a>
                            </li>
                                <li>
                                    <a href="start.html">Reports</a>
                                </li>
                                <li>
                                    <a href="start.html">Templates</a>
                                </li>
                                <li>
                                    <a href="start.html">Settings</a>
                                </li>
                          </ul>
                        </div>
                        <!-- END DROPDOWN AJAX MENU -->
                        <!-- BEGIN MENU TOGGLER -->
                    <button type="button" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="toggle-icon">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </span>
                      </button>
                        <!-- END MENU TOGGLER -->
                    </div>
                </div>
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                            <li class="nav-item  ">
                                <a href="index.php" class="nav-link ">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                              </a>
                                <a href="index.php?page=status_tes" class="nav-link ">
                                    <i class="icon-note"></i>
                                    <span class="title">Status Tes</span>
                                    </a>
                                <a href="index.php?page=daftar_peserta" class="nav-link ">
                                    <i class="icon-docs"></i>
                                    <span class="title">Daftar Peserta</span>
                                </a>
                               <a href="index.php?page=ctkabs" class="nav-link ">
                                    <i class="icon-docs"></i>
                                    <span class="title">Cetak Daftar Hadir</span>
                              </a>
							  <a href="index.php?page=pengaturan_kelas" class="nav-link ">
                                    <i class="icon-cloud-download"></i>
                                    <span class="title">Daftar Kelas</span>
                              </a>
							  <a href="index.php?page=pengaturan_mapel" class="nav-link ">
                                    <i class="icon-cloud-download"></i>
                                    <span class="title">Daftar Mapel</span>
                              </a>
                                 <a href="index.php?page=status_peserta" class="nav-link ">
                                    <i class="icon-user"></i>
                                    <span class="title">Status Peserta</span>
                              </a>
                                <a href="index.php?page=reset" class="nav-link ">
                                    <i class="icon-refresh"></i>
                                    <span class="title">Reset Login Peserta</span>
                                </a>
                                <a href="index.php?page=buat_soal" class="nav-link ">
                                    <i class="icon-pencil"></i>
                                    <span class="title">Buat Soal</span>
                                </a>
                                <a href="index.php?page=hasil_tes" class="nav-link ">
                                    <i class="icon-book-open"></i>
                                    <span class="title">Laporan Tes</span>
                                </a>
                                <a href="index.php?page=backup_restore" class="nav-link">
                                    <i class="icon-folder-alt"></i>
                                    <span class="title">Backup & Restore </span>
                                    </a>
                                <a href="logout.php" class="nav-link ">
                                    <i class="icon-logout"></i>
                                    <span class="title">Log Out</span>
                                </a>
                            </li>
                            
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
              <div class="page-fixed-main-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <?php 	
		if(!isset($_GET["page"])){
			require "content.php"; 
		}else{
			if($_GET['page'] == "status_tes"){
				require "status_tes.php";
			}else if($_GET['page'] == "content"){
				require "";
            }else if($_GET['page'] == "ctkabs"){
                require "cetak_absen.php";
			}else if($_GET['page'] == "daftar_peserta"){
				require "daftar_peserta.php";
			}else if($_GET['page'] == "edit_peserta"){
				require "edit_peserta2.php";
			}else if($_GET['page'] == "status_peserta"){
				require "status_peserta.php";
			}else if($_GET['page'] == "tsiswa"){
				require "tsiswa.php";
			}else if($_GET['page'] == "tkelas"){
				require "tkelas.php";
			}else if($_GET['page'] == "tmapel"){
				require "tmapel.php";
			}else if($_GET['page'] == "audio"){
				require "audio.php";
			}else if($_GET['page'] == "pengaturan_tes"){
				require "pengaturan_tes.php";
			}else if($_GET['page'] == "pengaturan_kelas"){
				require "pengaturan_kelas.php";
			}else if($_GET['page'] == "edit_kelas"){
				require "edit_kelas2.php";		
			}else if($_GET['page'] == "pengaturan_mapel"){
				require "pengaturan_mapel.php";		
			}else if($_GET['page'] == "edit_mapel"){
				require "edit_mapel2.php";		
			}else if($_GET['page'] == "reset"){
				require "tampiltabel.php";	
			}else if($_GET['page'] == "hasil_tes"){
				require "hasil_tes.php";
			}else if($_GET['page'] == "hasil_essay"){
				require "hasil_essay.php";
			}else if($_GET['page'] == "buat_soal"){
				require "backup.php";	
			}else if($_GET['page'] == "list_soal"){
				require "list_soal2.php";	
			}else if($_GET['page'] == "ubah_soal"){
				require "ubah_soal2.php";
			}else if($_GET['page'] == "ubah_tysoal"){
				require "ubah_tysoal.php";
			}else if($_GET['page'] == "hapus_persoal"){
				require "hapus_persoal.php";	
            }elseif($_GET['page'] == "backup_restore"){
                require "backuprestore.php";
			}elseif($_GET['page'] == "edit_kosoal"){
                require "edit_kosoal.php";
			}elseif($_GET['page'] == "edit_status"){
                require "edit_status.php";
            }elseif($_GET['page'] == "keluar"){
                require "logout.php";
            }elseif($_GET['page'] == "rekap_pdf"){
                require "rekap_pdf.php";	
			}else{
				echo "<div id='rightContent'><h2 style='color:red;'>Page not found !!</h2></div>";
			}
		}

	?>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <p><!-- BEGIN FOOTER --></p>

                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
         <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="../assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout6/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
<!-- FOOTER -->
<div class="well well-sm" align="center"><a href="http://wokaproject.id">WOKA</a><span><b> Version 2.4</b></div> 
</html>
<?php } ?>
<?php ob_flush(); ?>