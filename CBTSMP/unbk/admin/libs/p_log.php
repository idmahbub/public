<?php
ob_start();
session_start();
$user		= $_POST['user'];
$password	= $_POST['password'];
$_SESSION['user'] = $user;
include ('../cbt_con.php');
$sql = "SELECT * FROM cbt_admin where user='$user'";
$qry = mysql_query($sql);
$num = mysql_num_rows($qry);
$row = mysql_fetch_array($qry);

if ($num==0 OR $password!=$row['password']) {
?>
<script language="JavaScript">
	alert('Username atau Password tidak sesuai !');
	document.location='../login.php';
	</script>
	<?php
}
else {
	$_SESSION['login']=1;
	header("Location: ../index.php");
	}
	mysql_close($Open); //Tutup koneksi engine MySQL
?>