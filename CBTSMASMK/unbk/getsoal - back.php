<body>
<style>
input[type="radio"] {
    /* hide the real radio button - but not with display:none as it causes x-browser problems */
    opacity:0.2;
    position:absolute;
    /*left:-10000;*/
}
input[type="radio"] + label {
    cursor: pointer;
}
.jawaban	{
	padding-bottom:10px;
	font-size: 10pt;
	border:solid;
	border-color:#CCC;
	}	
.pilihanjawaban	{
	font-size: 10pt;
	padding-bottom:15px;
	}	

.noti-jawab {
    position:absolute;
    background-color:white;
    color:#999;
    padding:4px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
	border-style:solid;
	border-color:#999;
    width:27px;
    height:27px;
    text-align:center;
}

.labele {
  display: block;
  padding-top:10px;
  padding-bottom:10px;
  font-size: 18px;
  margin-left:15%;
  background-color: #eaca08;
  margin-top:-11px;
  border-radius: 2px;
  cursor:pointer;
  width:200px;
  color:#FFF;  
  &:hover {
    cursor: pointer;
  }
input[type="checkbox"] {
  position: relative;
  top: 3px;
  font-size:18px;
    border: 2px solid black;
    width: 20px;
    height: 20px;
    margin: 0;
    padding: 0;
}
.flatRoundedCheckbox
{
    width: 120px;
    height: 40px;
    margin: 20px 50px;
    position: relative;
}
.flatRoundedCheckbox div
{
    width: 100%;
    height:100%;
    background: #d3d3d3;
    border-radius: 50px;
    position: relative;
    top:-30px;
}  		
.cc-selector input{
	margin-left:0px;
	padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
							margin-top:-90px;
				top:-90px;
}
.A{background-image:url(images/A.png);}
.B{background-image:url(images/B.png);}
.C{background-image:url(images/C.png);}
.D{background-image:url(images/D.png);}
.E{background-image:url(images/E.png);}

.piljwb{
	margin-left:0;    
	border-radius: 30px;
	border-style:solid;
	border-color:#999;
	list-style:none;}

.cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector input:checked +.drinkcard-cc{
	background-image:url(images/pilih.png);
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:38px;height:28px;;

}

.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}	
</style>
<!-- Slider !-->

<style>

#slideMenu.closed{
	right:-400px;
}

#slideMenu{
	position:fixed;
	right:0;
	top:120px;
	width:380px;
	height:500px;
	border-left:0px;
	background-color:#efefef;
	z-index:20;
}

#slideMenu a.toggleBtn{
	position:absolute;
	left:-420px;
	margin-left:300px;
	top:0;
	outline:none;
	display:block;
	height:50px;
	background-color:#e46f69;
	width:98px;
	border-width:1px 1px 1px 0px;
	padding:0 5px 0;
	color:#000;
	text-decoration:none;
	font:12px/25px Verdana, Arial, Helvetica, sans-serif;
	z-index:0;
}

#slideMenu a.toggleBtnHighlight{
	position:absolute;
	right:0px;
	margin-right:400px;	
	top:0;
	outline:none;
	display:block;
	height:47px;
	background-color:#e46f69;	
	width:35px;
	border-width:1px 1px 1px 0px;
	padding:0 5px 0;
	color:#000;
	text-decoration:none;
	font:12px/25px Verdana, Arial, Helvetica, sans-serif;
	z-index:0;
}

.contente{
	margin-top:20px;
	margin-left:20px;
	margin-bottom:20px;
	margin-right:20px;
	width:340px;
	z-index:20;
	border-style:solid;
	border:thin;
	border-color:#ccc;
	padding:20px;
	background-color:#FFF;
	overflow:scroll; height:460px;
	font:12px/25px Verdana, Arial, Helvetica, sans-serif;
}

#noti-count {
    position:absolute;
    top:-12px;
    right:-15px;
    background-color:white;
    color:#313132;
    padding:5px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
	border-style:solid;
	border-color:#313132;
    width:27px;
    height:27px;
    text-align:center;
}
#noti-count div {
    margin-top:-5px;
}
</style>
<div id="slideMenu" class="closed">
	<div class="contente">
<style>
#awal{
	color:#FFF;
	font-family:Arial, Helvetica, sans-serif;
	line-height: 90%;
	margin:0px auto;
	margin-top:20px;
}
#ahir{
	color:#FFF;
	font-family:Arial, Helvetica, sans-serif;
	line-height: 120%;
	margin:0px auto;
	margin-top:10px;
}
#noti-count {
    position:absolute;
    top:-12px;
    right:-15px;
    background-color:white;
    color:#313132;
    padding:5px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
	border-style:solid;
	border-color:#313132;
    width:30px;
    height:30px;
    text-align:center;
}
#noti-count div {
    margin-top:-5px;
}
</style>
				
        <div id="container" style="text-align:center; height:300px;">
<? 
include "cbt_con.php";
$xkodemapel = "GAL1";
//$xkodesoal = "XGAL1SOAL1";
  //$user = "P090100000";
  $user = "$_COOKIE[PESERTA]";
  $sqluser = mysql_query("SELECT * FROM  `cbt_siswa` s LEFT JOIN cbt_ujian u ON s.XKodeKelas = u.XKodeKelas WHERE XNomerUjian = 
  '$user' and u.XStatusUjian = '1'");
  $s0 = mysql_fetch_array($sqluser);
  $xkodesoal = $s0['XKodeSoal'];
  $xtokenujian = $s0['XTokenUjian'];  
 
 
$sql = mysql_query("SELECT j.Urut as Urut, j.XJawaban as XJawaban , c.XNomerSoal as XNomerSoal, j.XRagu as XRagu
FROM  `cbt_soal` c
LEFT JOIN cbt_jawaban j ON ( j.XNomerSoal = c.XNomerSoal
AND j.XKodeSoal = c.XKodeSoal ) where c.XKodeSoal = '$xkodesoal' and j.XUserJawab = '$user' and j.XTokenUjian = '$xtokenujian' order by j.Urut");
while($s = mysql_fetch_array($sql)){ 

if($s['XRagu']=='1'){$cssb = "#eaca08";$csst = "#000";$noti = "noti-ragu";$border = "#eaca08";
$iki = 'R';
} 
elseif(
//$s['XNomerSoal']==$_REQUEST['pic']
$s['Urut']==$_REQUEST['pic']
){
		$cssb = "#336898";
		$csst = "#fff";
		$noti = "noti-ragu";
		$border = "#336898";
		$iki = 'S';
}
else {
		if(!$s['XJawaban']==''){$cssb = "#313132";$csst = "#fff";$noti = "noti-count";$border = "#313132";} 
		else {$cssb = "#fff";$csst = "#313132";$noti = "noti-count";$border = "#313132";}
		$iki = 'N';
}


?>        
           
            <? // echo '<a href="#" data-id="'.$s['XNomerSoal'].'" class="get_pic">'; ?>
            <? echo '<a href="#" data-id="'.$s['Urut'].'" class="get_pic">'; ?>
           <div class="item" style="background-color:<? echo $cssb; ?>; color:<? echo $csst; ?>;border-color:<? echo $border; ?>"><p style="margin-top:-9px; margin-left:-9px; font-family:Arial, Helvetica, sans-serif; font-size:24px">
		   <? // echo "$iki|$_REQUEST[pic]|$s[XNomerSoal]|"; ?>
		   <? // echo $s['Urut']; 
		   echo "$s[Urut]";
		   ?></p>
           <div  id='noti-count' style="border-color:<? echo $border; ?>"><div><? echo $s['XJawaban']; ?></div></div></div></a>
           <? } ?>         
        </div>
        
    </body>
    <style>
        #container
        {
			height:300px;
        }
        
        .item
        {
            width: 50px;
            height: 50px;
/*            background-color: green; */
			border:#313132;
			color:#fff;
			border-style:solid;
            margin-bottom: 17px;
			font-size:18px;
			line-height:normal;
        }

    </style>
    <script src="js/masonry.pkgd.min.js"></script>
    <script>
        var container = document.querySelector('#container');
        var msnry = new Masonry( container, {
          //here we define grid system column width to be 320px. This remains constant throughout all viewport sizes. Columns are dropped when they have no space which makes them a responsive grid system similarly columns are added when viewport size increases.
          columnWidth: 55,
          //select all grid boxes
          itemSelector: '.item',
          //gutter property here
          gutter: 17
        });
        
        //script to add elements using javascript
       /* var elem = document.createElement('div');
        elem.className = "item";
        elem.innerHTML = "Inserted using javascript";
        container.appendChild(elem);
        var elements = [elem];
        //appended method does the re-layout after new element is inserted into the container.
        msnry.appended(elements);
        
        //script to remove elements using javascript
        function remove_item()
        {
            msnry.remove(elements);
        }
        
        //event trigger when item is removed usin js
        msnry.on('removeComplete', function(msnryInstance, removedItems) {
          alert('Removed ' + removedItems.length + ' items');
        });
		*/
    </script>
    
	</div>
	<a style="top:100px; right: -42px;" href="#" class="toggleBtn" id="toggleLink">
    <div id="awal" align="center"><font size="+3"> > </font></div>
    <div id="ahir"> <table border="0"><tr><td valign="middle" width="50px" align="center"><font size="+3" color="#FFFFFF">< </font></td><td> 	
    <font size="-1" color="#FFFFFF">DAFTAR</font> <br><font size="-1" color="#FFFFFF"> SOAL</font></td></tr></table>
    </div></a>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
$(document).keydown(function(e) { 
	  var soale = $('#soale').val();  
	  var urlString = 'url(images/pilih.png)';
	  
//      e.preventDefault();  
      if (e.which == 65) {
		var tekan = 'A';
		document.getElementById("A").checked = true;	
	  } 
	  else if (e.which == 66) {
		var tekan = 'B';		
		document.getElementById("B").checked = true;
	  }
	  else if (e.which == 67) {
		var tekan = 'C';		  
		document.getElementById("C").checked = true;		
	  }
	  else if (e.which == 68) {
		var tekan = 'D';		  
		document.getElementById("D").checked = true;		
	  }
	  else if (e.which == 69) {
		var tekan = 'E';		  
		document.getElementById("E").checked = true;		
	  }
				
				if(e.which==65||e.which==66||e.which==67||e.which==68||e.which==69) {
				
				  $("#tkn").html(tekan+' '+soale);
                    var data = 'nama=' + tekan + '& soale=' + soale;
                    $.ajax({
                        type: 'POST',
                        url: "simpan.php?kode=<? echo $xkodesoal; ?>",
                        data: data,
                        success: function() {
                            //$('#tampil').load("lihat.php");
                        }
                    });				  
					
				}
//		  alert(tekan);
          // Whatever...
});
	
$(document).ready(function(){
	
	
	
				$("#awal").hide();
				$("#ahir").show();	
	$(".toggleBtn").click(function(e){
		
			if($("#slideMenu").hasClass('closed')){
				$("#slideMenu").animate({right:0}, 200, function(){
					$(this).removeClass('closed').addClass('opened');
					document.getElementById("kakisoal").style.width = '74%';					
					$("a#toggleLink").removeClass('toggleBtn').addClass('toggleBtnHighlight');
				});
				$("#ahir").hide();	
				$("#awal").show();
e.preventDefault();
		//return false;
			}//if close
			if($("#slideMenu").hasClass('opened')){
				$("#slideMenu").animate({right:-400}, 200, function(){
					$(this).removeClass('opened').addClass('closed');
					document.getElementById("kakisoal").style.width = '97.7%';
					$("a#toggleLink").removeClass('toggleBtnHighlight').addClass('toggleBtn');
				});
				$("#ahir").show();	
				$("#awal").hide()
e.preventDefault();
			}//if close
			
	});//toggleBtn click close

	/* Mouse Enter Event (that is mouseover event)
	$(".toggleBtn").bind("mouseenter",function(){
			if($("#slideMenu").hasClass('closed')){
				$("#slideMenu").animate({left:0}, 500, function(){
					$(this).removeClass('closed').addClass('opened');
					$("a#toggleLink").removeClass('toggleBtn').addClass('toggleBtnHighlight');
				});
			}//if close
			
			$('#slideMenu').bind("mouseleave",function(){
				$("#slideMenu").animate({left:-300}, 500, function(){
					$(this).removeClass('opened').addClass('closed');
					$("a#toggleLink").removeClass('toggleBtnHighlight').addClass('toggleBtn');
				});
			});//bind close
	});//toggleBtn click close*/

});//ready close
</script>

<?php
//include "cbt_con.php";

//get pic id from ajax request
if(isset($_POST["pic"]) && is_numeric($_POST["pic"]))
{
	$current_picture = filter_var($_POST["pic"], FILTER_SANITIZE_NUMBER_INT);
}else{
	$current_picture=1;
}


//Connect to Database
//$sqlj = mysql_query("SELECT * from cbt_jawaban where Urut = '$_POST[pic]' and XKodeSoal = '$xkodesoal' and XUserJawab = '$user'");
$sqlj = mysql_query("
SELECT * 
FROM cbt_soal s
LEFT JOIN cbt_jawaban j ON (j.XNomerSoal = s.XNomerSoal and j.XKodeSoal = s.XKodeSoal)
WHERE j.Urut =  '$_POST[pic]'
AND s.XKodeSoal =   '$xkodesoal'
AND XUserJawab =  '$user' and j.XTokenUjian = '$xtokenujian'
");


$sj = mysql_fetch_array($sqlj);
$sj1 = $sj['XJawaban'];

 $ambiljwbA = "XJawab".$sj['XA'];
 $ambiljwbB = "XJawab".$sj['XB'];
 $ambiljwbC = "XJawab".$sj['XC'];
 $ambiljwbD = "XJawab".$sj['XD'];
 $ambiljwbE = "XJawab".$sj['XE'];
 
 $ambilgjwbA = "XGambarJawab".$sj['XA'];
 $ambilgjwbB = "XGambarJawab".$sj['XB'];
 $ambilgjwbC = "XGambarJawab".$sj['XC'];
 $ambilgjwbD = "XGambarJawab".$sj['XD'];
 $ambilgjwbE = "XGambarJawab".$sj['XE'];
 
$jwbA = "$sj[$ambiljwbA]";
$jwbB = "$sj[$ambiljwbB]";
$jwbC = "$sj[$ambiljwbC]";
$jwbD = "$sj[$ambiljwbD]";
$jwbE = "$sj[$ambiljwbE]";

$gjwbA = "$sj[$ambilgjwbA]";
$gjwbB = "$sj[$ambilgjwbB]";
$gjwbC = "$sj[$ambilgjwbC]";
$gjwbD = "$sj[$ambilgjwbD]";
$gjwbE = "$sj[$ambilgjwbE]";


if($sj1=='A'){$nilaiA="checked";} else {$nilaiA="";}
if($sj1=='B'){$nilaiB="checked";} else {$nilaiB="";}
if($sj1=='C'){$nilaiC="checked";} else {$nilaiC="";}
if($sj1=='D'){$nilaiD="checked";} else {$nilaiD="";}
if($sj1=='E'){$nilaiE="checked";} else {$nilaiE="";}
//get next picture id
//$sql = mysql_query("SELECT id FROM pictures WHERE id > '$current_picture' ORDER BY id ASC LIMIT 1");
//$sql = mysql_query("SELECT XNomerSoal FROM cbt_soal WHERE XNomerSoal > '$current_picture' and XKodeSoal = '$xkodesoal' ORDER BY XNomerSoal ASC LIMIT 1");

$sql = mysql_query("SELECT Urut FROM cbt_jawaban WHERE Urut > '$current_picture' and XKodeSoal = '$xkodesoal'
and XUserJawab = '$user' and XTokenUjian = '$xtokenujian' ORDER BY Urut ASC LIMIT 1");
$result = mysql_fetch_array($sql);
if($result){
	//$next_id = $result['XNomerSoal'];
	$next_id = $result['Urut'];
}

//get previous picture id
//$sql = mysql_query("SELECT XNomerSoal FROM cbt_soal WHERE XNomerSoal < $current_picture and XKodeSoal = '$xkodesoal' ORDER BY XNomerSoal DESC LIMIT 1");

$sql = mysql_query("SELECT Urut FROM cbt_jawaban WHERE Urut < '$current_picture' and XKodeSoal = '$xkodesoal'
and XUserJawab = '$user' and XTokenUjian = '$xtokenujian' ORDER BY Urut DESC LIMIT 1");
$result = mysql_fetch_array($sql);
if($result){
	//$prev_id = $result['XNomerSoal'];
	$prev_id = $result['Urut'];
}

$jmlsoal = 4;

//echo "SELECT * FROM cbt_soal WHERE XNomerSoal = $current_picture and XKodeSoal = '$xkodesoal' LIMIT 1";
//get details of current from database
//$sql = mysql_query("SELECT * FROM cbt_soal WHERE XNomerSoal = $current_picture and XKodeSoal = '$xkodesoal' LIMIT 1");
$sql = mysql_query("SELECT * 
FROM cbt_soal s
LEFT JOIN cbt_jawaban j ON (j.XNomerSoal = s.XNomerSoal and j.XKodeSoal = s.XKodeSoal)
WHERE j.Urut =  '$_POST[pic]'
AND s.XKodeSoal =   '$xkodesoal'
AND XUserJawab =  '$user'  and j.XTokenUjian = '$xtokenujian'
LIMIT 1");
$result = mysql_fetch_array($sql);
if($result){
	//construct next/previous button
	$prev_button = (isset($prev_id) && $prev_id>0)?'<a href="#" data-id="'.$prev_id.'" class="get_pic"><img src="prev.png" border="0" /></a>':'';
	$next_button = (isset($next_id) && $next_id>0)?'<a href="#" data-id="'.$next_id.'" class="get_pic"><img src="next.png" border="0" /></a>':'';

?>
<div id="lembaran">
<div id="lembaransoal">
<div class="cc-selector">

<link type="text/css" rel="stylesheet" href="css/jfontsize.css" />
<link type="text/css" rel="stylesheet" href="css/shCoreDefault.css" />

<script type="text/javascript" language="javascript" src="js/jquery.jfontsize-1.0.js"></script>
<script type="text/javascript" language="javascript">
                        $('.some-class-name2').jfontsize({
                            btnMinusClasseId: '#jfontsize-m2',
                            btnDefaultClasseId: '#jfontsize-d2',
                            btnPlusClasseId: '#jfontsize-p2',
                            btnMinusMaxHits: 1,
                            btnPlusMaxHits: 1,
                            sizeChange: 5
                        });
						 $('.pilihanjawaban').jfontsize({
                            btnMinusClasseId: '#jfontsize-m2',
                            btnDefaultClasseId: '#jfontsize-d2',
                            btnPlusClasseId: '#jfontsize-p2',
                            btnMinusMaxHits: 1,
                            btnPlusMaxHits: 1,
                            sizeChange: 5
                        });
						 $('.jawab').jfontsize({
                            btnMinusClasseId: '#jfontsize-m2',
                            btnDefaultClasseId: '#jfontsize-d2',
                            btnPlusClasseId: '#jfontsize-p2',
                            btnMinusMaxHits: 1,
                            btnPlusMaxHits: 1,
                            sizeChange: 5
                        });
</script> 
<?

 if(str_replace(" ","",$result['XAudioTanya'])!==''){
		echo "
		<span class=jawab> <b><font color='red'>Jika tidak muncul tombol play, maka tekan tombol F5 (refresh). </font></b></span>"; 
?>	
<!-- Audio Biasa 	
    <div class="play"> 
	<? 
	$audfile = str_replace(" ","",$result['XAudioTanya']); 
	$audfile = "audio/$audfile";
	?>
  <audio id="audio" controls="controls" height="130" width="100">
  <source src="<? echo "$audfile"; ?>" type="audio/mpeg">
  <source src="<? echo "$audfile"; ?>" type="audio/ogg">
  <embed height="90" width="100"  src="<? echo "$audfile"; ?>">
  </embed>
  </audio>
  </div>
 !-->
 <? } ?> 
 
<? if(str_replace(" ","",$result['XVideoTanya'])!==''){
	$vidfile = str_replace(" ","",$result['XVideoTanya']); 
	$vidfile = "video/$vidfile";
	
	?>
<!-- Audio Biasa     
<div class="play"> 
 <video width="400" controls>
  <source src="<? echo "$vidfile"; ?>" type="video/mp4">
  <source src="<? echo "$vidfile"; ?>" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
</div>
!-->
<? } ?>
<link href="dist/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="dist/jplayer/jquery.jplayer.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	$("#jquery_jplayer_1").jPlayer({
		ready: function (event) {
			$(this).jPlayer("setMedia", {
				title: "Listening",
				m4a: "<? echo "$audfile"; ?>",
				oga: "<? echo "$audfile"; ?>"
			});
		},
		swfPath: "dist/jplayer",
		supplied: "m4a, oga",
		wmode: "window",
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true,
		remainingDuration: true,
		toggleDuration: true
	});
	
	$("#jquery_jplayer_3").jPlayer({
		ready: function () {
			$(this).jPlayer("setMedia", {
				title: "Finding Nemo Teaser",
				m4v: "<? echo "$vidfile"; ?>",
				ogv: "<? echo "$vidfile"; ?>",
				webmv: "<? echo "$vidfile"; ?>",
				poster: "http://www.jplayer.org/video/poster/Finding_Nemo_Teaser_640x352.png"
			});
		},
		play: function() { // To avoid multiple jPlayers playing together.
			$(this).jPlayer("pauseOthers");
		},
		swfPath: "dist/jplayer",
		supplied: "webmv, ogv, m4v",
		cssSelectorAncestor: "#jp_container_3",
		globalVolume: true,
		useStateClassSkin: true,
		autoBlur: false,
		smoothPlayBar: true,
		keyEnabled: true
	});
	
	
	
});
//]]>
</script>

<?
if(str_replace(" ","",$result['XAudioTanya'])!==''){
$audfile = str_replace(" ","",$result['XAudioTanya']); 
$audfile = "audio/$audfile";
?>


<div id="jquery_jplayer_1" class="jp-jplayer"></div>
<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
	<div class="jp-type-single">
		<div class="jp-gui jp-interface">
			<div class="jp-controls">
				<button class="jp-play" role="button" tabindex="0">play</button>
				
			</div>
			<div class="jp-progress">
				<div class="jp-seek-bar">
					<div class="jp-play-bar"></div>
				</div>
			</div>
			<div class="jp-volume-controls">
				<button class="jp-mute" role="button" tabindex="0">mute</button>
				<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
				<div class="jp-volume-bar">
					<div class="jp-volume-bar-value"></div>
				</div>
			</div>
			<div class="jp-time-holder">
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<!-- <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
				<div class="jp-toggles">
					<button class="jp-repeat" role="button" tabindex="0">repeat</button>
				</div> !-->
			</div>
		</div>
		<div class="jp-details">
			<div class="jp-title" aria-label="title">&nbsp;</div>
		</div>
		<div class="jp-no-solution">
			&nbsp;
		</div>
	</div>
</div><br>
<? } ?>

<? if(str_replace(" ","",$result['XVideoTanya'])!==''){
	$vidfile = str_replace(" ","",$result['XVideoTanya']); 
	$vidfile = "video/$vidfile";
?>	
<div id="jp_container_3" class="jp-video jp-video-270p" role="application" aria-label="media player">
	<div class="jp-type-single">
		<div id="jquery_jplayer_3" class="jp-jplayer"></div>
		<div class="jp-gui">
			<div class="jp-video-play">
				<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
			</div>
			<div class="jp-interface">
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
				<div class="jp-controls-holder">
					<div class="jp-controls">
						<button class="jp-play" role="button" tabindex="0">play</button>
						<button class="jp-stop" role="button" tabindex="0">stop</button>
					</div>
					<div class="jp-volume-controls">
						<button class="jp-mute" role="button" tabindex="0">mute</button>
						<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
						<div class="jp-volume-bar">
							<div class="jp-volume-bar-value"></div>
						</div>
					</div>
					<div class="jp-toggles">
						<button class="jp-repeat" role="button" tabindex="0">repeat</button>
						<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
					</div>
				</div>
				<div class="jp-details">
					<div class="jp-title" aria-label="title">&nbsp;</div>
				</div>
			</div>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>
<? } ?>
<!-- identifikasi penekanan tombol 
<div id="tkn"></div>
!-->
<?	//output html
	echo "
	<span class=jawab>$result[XTanya]<br /><br />";
	if($result['XGambarTanya']==''){} else {
	echo "<a href='#' id='pop'>";
	echo "<img src='pictures/$result[XGambarTanya]'></a><br /><br />";}
	echo "</span>";

?>
<!-- konflik dengan audio       
<script type="text/javascript" src="js/jquery.js"></script>

!-->
       <script type="text/javascript">
            $('document').ready(function() {
                $('#A').click(function() {
                    var A = $('#A').val();
                    var soale = $('#soale').val();					
                    var data = 'nama=' + A + '& soale=' + soale;
                    $.ajax({
                        type: 'POST',
                        url: "simpan.php?kode=<? echo $xkodesoal; ?>",
                        data: data,
                        success: function() {
                            //$('#tampil').load("lihat.php");
                        }
                    });
                });
                $('#B').click(function() {
                    var B = $('#B').val();
                    var soale = $('#soale').val();					
                    var data = 'nama=' + B + '& soale=' + soale;
                    $.ajax({
                        type: 'POST',
                        url: "simpan.php?kode=<? echo $xkodesoal; ?>",
                        data: data,
                        success: function() {
                            //$('#tampil').load("lihat.php");
                        }
                    });
                });
                $('#C').click(function() {
                    var C = $('#C').val();
                    var soale = $('#soale').val();					
                    var data = 'nama=' + C + '& soale=' + soale;
                    $.ajax({
                        type: 'POST',
                        url: "simpan.php?kode=<? echo $xkodesoal; ?>",
                        data: data,
                        success: function() {
                            //$('#tampil').load("lihat.php");
                        }
                    });
                });
                $('#D').click(function() {
                    var D = $('#D').val();
                    var soale = $('#soale').val();					
                    var data = 'nama=' + D + '& soale=' + soale;
                    $.ajax({
                        type: 'POST',
                        url: "simpan.php?kode=<? echo $xkodesoal; ?>",
                        data: data,
                        success: function() {
                            //$('#tampil').load("lihat.php");
                        }
                    });
                });
                $('#E').click(function() {
                    var E = $('#E').val();
                    var soale = $('#soale').val();					
                    var data = 'nama=' + E + '& soale=' + soale;
                    $.ajax({
                        type: 'POST',
                        url: "simpan.php?kode=<? echo $xkodesoal; ?>",
                        data: data,
                        success: function() {
                            //$('#tampil').load("lihat.php");
                        }
                    });
                });
            });
        </script>

<!--		
		<input id="soale" type="hidden" name="soale" value="<? echo $current_picture; ?>"/>
		<table border="0" cellpadding="0px" cellspacing="0px">
		<tr><td valign="top"><input id="A" type="radio" name="credit-card" value="A" <? echo $nilaiA; ?>>
        <label class="drinkcard-cc A" for="A">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$result[XJawab1]"; ?></td></tr>
        <br /><input id="B" type="radio" name="credit-card" value="B" onclick='alertt(this.value)'/>
        <label class="drinkcard-cc B"for="B">&nbsp;</label><p class="jawaban"><? echo "$result[XJawab2]"; ?></p> 
       	<tr><td valign="top"><input id="B" type="radio" name="credit-card" value="B" <? echo $nilaiB; ?>>
        <label class="drinkcard-cc B" for="B">&nbsp;</label></td><td class="pilihanjawaban">
        <? if(str_replace("  ","",$result['XGambarJawab2'])==''){} else {
	echo "<img src='pictures/$result[XGambarJawab2]'><br /><br />";} ?>
        <? echo "$result[XJawab2]"; ?></td></tr>
  		<tr><td valign="top"><input id="C" type="radio" name="credit-card" value="C" <? echo $nilaiC; ?>>
        <label class="drinkcard-cc C" for="C">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$result[XJawab3]"; ?></td></tr>
        <tr><td valign="top"><input id="D" type="radio" name="credit-card" value="D" <? echo $nilaiD; ?>>
        <label class="drinkcard-cc D" for="D">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$result[XJawab4]"; ?></td></tr>
  		<tr><td valign="top"><input id="E" type="radio" name="credit-card" value="E" <? echo $nilaiE; ?> >
        <label class="drinkcard-cc E" for="E">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$result[XJawab5]"; ?></td></tr>
        </table>
!-->


		<input id="soale" type="hidden" name="soale" value="<? echo $current_picture; ?>"/>
		<table border="0" cellpadding="0px" cellspacing="0px">
		<tr><td valign="top"><input id="A" type="radio" name="credit-card" value="A" <? echo $nilaiA; ?>>
        <label class="drinkcard-cc A" for="A">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$jwbA"; ?><br /><?php if($gjwbA==''){} else {
	echo "<img src='pictures/$gjwbA'></a><br /><br />";}
?></td></tr>
       	<tr><td valign="top"><input id="B" type="radio" name="credit-card" value="B" <? echo $nilaiB; ?>>
        <label class="drinkcard-cc B" for="B">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$jwbB"; ?><br /><?php if($gjwbB==''){} else {
	echo "<img src='pictures/$gjwbB'></a><br /><br />";}
?></td></tr>
  		<tr><td valign="top"><input id="C" type="radio" name="credit-card" value="C" <? echo $nilaiC; ?>>
        <label class="drinkcard-cc C" for="C">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$jwbC"; ?><br /><?php if($gjwbC==''){} else {
	echo "<img src='pictures/$gjwbC'></a><br /><br />";}
?></td></tr>
        <tr><td valign="top"><input id="D" type="radio" name="credit-card" value="D" <? echo $nilaiD; ?>>
        <label class="drinkcard-cc D" for="D">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$jwbD"; ?><br /><?php if($gjwbD==''){} else {
	echo "<img src='pictures/$gjwbD'></a><br /><br />";}
?></td></tr>
  		<tr><td valign="top"><input id="E" type="radio" name="credit-card" value="E" <? echo $nilaiE; ?> >
        <label class="drinkcard-cc E" for="E">&nbsp;</label></td><td class="pilihanjawaban"><? echo "$jwbE"; ?><br /><?php if($gjwbE==''){} else {
	echo "<img src='pictures/$gjwbE'></a><br /><br />";}
?></td></tr>
        </table>

</div></div></div>


<div class="kakisoal" id="kakisoal">
 <section class="page-section soal-navigation">
        <div class="action-wrapper">
                <div class="col-xs-4">
                <? if($prev_id==''){ 
				//echo '<a href="#" data-id="'.$prev_id.'" class="get_pic">'; ?>
                  <!--  <button id="btnPrevSoal" class="btn btn-default btn-prev" data-bind="">SOAL SEBELUMNYA1</button>!-->
                 <? //echo "</a>"; ?>
                <? } else {
				echo '<a href="#" data-id="'.$prev_id.'" class="get_pic">'; ?>
                    <button id="btnPrevSoal" class="btn btn-default btn-prev" data-bind="click: gotoBack">SOAL SEBELUMNYA</button>
                <? //echo "</a>[$prev_id]";					
				}?>
                </div>

                <? 
		$stu = $prev_id+1;
		?>

      
      
<? include "cbt_con.php";
// $cek = mysql_query("select * from cbt_jawaban where XNomerSoal='$stu' and XKodeSoal ='$xkodesoal'"); 
 $cek = mysql_query("select * from cbt_jawaban where Urut='$stu' and XKodeSoal ='$xkodesoal' and XTokenUjian = '$xtokenujian'"); 
 $var_ragu = mysql_fetch_array($cek);
 $r = $var_ragu['XRagu'];
 if($r == '1'){$ragu = 'checked';} else {$ragu = '';}
 $nilaiA = $var_ragu['$XA'];
 $nilaiB = $var_ragu['$XB'];
 $nilaiC = $var_ragu['$XC'];
 $nilaiD = $var_ragu['$XD'];
 $nilaiE = $var_ragu['$XE'];
 ?>
      
                <div class="col-xs-4 text-center">
                        <div id="content">
<label class="labele"><input type="checkbox" id="<? echo $stu; ?>" onClick="toggle_select(<? echo $stu; ?>)" <? echo $ragu; ?> />
        &nbsp;&nbsp;&nbsp;RAGU-RAGU</label>
        



    </div>
                </div>
                <div class="col-xs-4 text-right">
                <script>
                
                
                </script>
                   <? 
				   if($next_id==''){
				   echo '<a href="#" >'; ?>
                   
                   <? $cekragu = mysql_num_rows(mysql_query("select * from cbt_jawaban where XRagu ='1' and XKodeSoal ='$xkodesoal' and XTokenUjian = '$xtokenujian'")); 
 					  if($cekragu>0){ ?>
						<button id="btnSelesai" class="btn btn-primary btn-end activebutton" data-toggle="modal" data-target="#myModalR">TES SELESAI</button>
                      <? } else { ?>  
						<button id="btnSelesai" class="btn btn-primary btn-end activebutton" data-toggle="modal" data-target="#myModal2">TES SELESAI</button>
                    <? } //echo "|$next_id|";
					echo "</a>";
					} else { 
				    
				   echo '<a href="#" data-id="'.$next_id.'" class="get_pic">'; ?>  
<button id="btnNextSoal" class="btn btn-primary btn-next activebutton" data-bind="css: { &#39;activebutton&#39;:(currentNo() &lt; totalQuestions - 1)}, visible: (currentNo() &lt; totalQuestions - 1),click: gotoNext">SOAL BERIKUTNYA</button><? // echo "|$next_id|"; 
					
					 } ?>
            </div>
        </div>
    </section>	
	
<? } ?>  
</div>

<!-- Creates the bootstrap modal where the image will appear -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Image preview</h4>
      </div>
      <div class="modal-body">
        <img src="" id="imagepreview" style="width: 400px; height: 264px;" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
<div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label">Konfirmasi Tes</h1>
                </div>
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="row" style="background-color:#fff">
                            <div class="col-xs-3 glyphicon-left-panel">
                                <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-9">
                                <div class="wysiwyg-content">
                                    <p>
                                        Apakah anda yakin ingin mengakhiri tes?<br>
                                        Anda tidak akan bisa kembali ke soal jika sudah menekan tombol selesai.
                                    </p>
                                </div>
                                <div class="assent-checkbox">
                                    <input type="checkbox" data-target="#btnLanjut" id="0-ascb" onClick="document.getElementById('btnLanjut').disabled=false">
                                    <label class="assentcb-label" for="0-ascb">
                                        Centang, kemudian tekan tombol selesai. <br>Jika anda Yakin untuk Mengakhiri Tes<br>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row" style="background-color:#fff">
                        <div class="col-xs-6"> <a style="padding:0px" href=akhir.php> 
                            <button id="btnLanjut" type="submit" class="btn btn-success btn-block" disabled="">SELESAI</button>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit" class="btn btn-danger btn-block " data-dismiss="modal">TIDAK</button>
                        </div>
                    </div>
                </div>
                
            </div>
</div></div>

<div class="modal fade" id="myModalR" role="dialog">
    <div class="modal-dialog">
<div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title page-label">Konfirmasi Tes</h1>
                </div>
                <div class="panel-body">
                    <div class="inner-content">
                        <div class="row" style="background-color:#fff">
                            <div class="col-xs-3 glyphicon-left-panel">
                                <span class="glyphicon glyphicon-alert" aria-hidden="true"></span>
                            </div>
                            <div class="col-xs-9">
                                <div class="wysiwyg-content">
                                    <p>
                                        Terdapat soal yang bertanda RAGU-RAGU <br>
                                        Selesaikan lebih dulu Soal RAGU-RAGU.<br>
                                        Klik Tombol LANJUT
                                    </p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row" style="background-color:#fff">
                        
                        <div class="col-xs-6 col-center" style="margin-left:25%">
                            <button data-bind="click: handleNotConfirm" type="submit" class="btn btn-danger btn-block"  data-dismiss="modal" id="lanjut">LANJUT</button></a>
                        </div>
                    </div>
                </div>
                
            </div>
</div></div>

<script>
$('table input[type="radio"]').click(function() {
    $('input[type="button"]').removeAttr('disabled');
});
$("#pop").on("click", function() {
   $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
   $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
});

</script>


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
                                Terimakasih telah berpartisipasi dalam tes ini.<br>
                                Silahkan klik tombol LOGOUT untuk mengakhiri test.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row"  style="background-color:#fff">
                        <div class="col-xs-offset-3 col-xs-6">
                            <button id="btnLanjut" data-bind="click: redirectToDone" type="submit" class="btn btn-success btn-block" disabled="">SELESAI</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

