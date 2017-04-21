<?php
//MySQL Connection
echo "hola";
/*require("constants.php");
$tbl_name = 'members';
$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$connection) {
	die("Database connection failed: " . mysql_error());
	}
$db_select = mysql_select_db(DB_NAME,$connection);
if (!$db_select) {
	die("Database selection failed: " . mysql_error());
	}
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes(md5($mypassword));
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
  // Register $myusername, $mypassword and redirect to file "login_success.php"
  session_start();
  $_SESSION['nickname']=$myusername;
  $sql = "SELECT * FROM `members` WHERE `username` = '".$myusername."'";
  $rs = mysql_query($sql) or die(mysql_error());
  $row = mysql_fetch_array($rs);
  $_SESSION['PID']=$row["PID"];
  $_SESSION['group']=$row["group"];
  $_SESSION['company']=$row["company"];
  $_SESSION['chilePlus']=$row["chilePlus"];
  $_SESSION['clase_usuario']=$row["clase_usuario"];
  $_SESSION['idioma']=$row["idioma"];
  $_SESSION['GID']=$row["GID"];
	$_SESSION['logo']=$row["logo"];
  header('location: initcalif.php');
  }
else {
  require 'header.php';
  echo Nombre o contrasena incorrectos";
}
echo '<a href="logout.php">Volver al Inicio</a>';
require 'footer.php';
exit;*/
?>
