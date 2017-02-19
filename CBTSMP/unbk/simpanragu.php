<? include "cbt_con.php";
 //update cbt_jawaban set XRagu = '1' where XNomerSoal='$_REQUEST[who]'
// $sql = mysql_query("update cbt_jawaban set XRagu = '$_REQUEST[chk]' where XNomerSoal='$_REQUEST[who]'");
 $sql = mysql_query("update cbt_jawaban set XRagu = '$_REQUEST[chk]' where Urut='$_REQUEST[who]'");
?>
