  <div class="tab-pane" id="hasil-test-new">
  <style>
a.ex1:link, a.ex1:visited {
    background-color: #25a344;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a.ex1:hover, a.ex1:active {
    background-color: #1f8e3b;
}

a.ex2:link, a.ex2:visited {
    background-color: #f44336;
    color: white;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a.ex2:hover, a.ex2:active {
    background-color: red;
}
</style>                               
         <? 
		 $sqltes1= mysql_query("select * from cbt_ujian where XTokenUjian = 'dsd' ");
                                $sko = mysql_fetch_array($sqltes1);
                                $koso = $sko['XKodeSoal'];
								?>
                 <br><a class="ex1" href="rekap_excel.php?ujian=<? echo $koso; ?>"><i class="icon-notebook"></i> Download File Excel Rekap</a><span>
                 <a class="ex2" href="rekap_pdf.php?ujian=<? echo $koso; ?>"><i class="icon-doc"></i> Download File PDF</a>
                <script type="text/javascript">
				var auto_refresh = setInterval(
				function ()
				{

				$('#load_hasil').load('hasilpesertaessay.php').fadeIn();
				}, 1000); // refresh every 10000 milliseconds
				
				
				</script>
                
                <div  class="load_hasil" id="load_hasil">  
                </div>
                 
                 </div>
                                
                <div  class="load_comment" id="load_comment">  
                </div>
                 
                 </div>