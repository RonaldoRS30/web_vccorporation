<?php
ini_set("memory_limit","20M");
require('conexiones/cnx.php'); 

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['txtUsuario'])) {
  $loginUsername=$_POST['txtUsuario'];
  $password=$_POST['txtContrasenia'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "seg_perfil.php";
  $MM_redirectLoginFailed = "login.php";
  $MM_redirecttoReferrer = true;
  
  ########################################################
       //  CAMBIAR ESTOOOOOOOOOO
  $LoginRS__query="SELECT * FROM seg_usuarios  WHERE usuario_usu='$loginUsername' AND  password_usu='$password' "; 
	
	
// $LoginRS__query="CALL sp_login ('".$loginUsername."','".$password."')";

 // echo   $LoginRS__query;
  ########################################################
  mysqli_select_db($conexion,$database);
  $LoginRS = mysqli_query($conexion,$LoginRS__query);
  $LoginRow = mysqli_fetch_assoc($LoginRS);
  $loginFoundUser = mysqli_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	  

	$var=false;
    if (isset($_SESSION['PrevUrl']) && true) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
  $var=true;
	/*echo '<script type="text/javascript">
	alert("Usuario y/o Contraseña incorrectos");
	</script>';*/
    //header("Location: ". $MM_redirectLoginFailed );
	
  }
}
?>
<html>
<head>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>V&C COPRORATION SAC</title>
<style type="text/css">
<!--
.style2 {color: #345867;  color:#000000  ; font-size:12px }
-->
</style>
</head>
<body   background="img/bg.jpg" style=" background-image:url(img/bg.jpg);margin:0;background-color:#FFFFFF;background-repeat: no-repeat;" >
<form action="<?php echo $loginFormAction; ?>" method="POST" name="frmLogin" id="frmLogin">
<table  height="100%" width="100%" cellspacing="0" cellpadding="0" border="0">

	<tr >
		<td align="center" >
<table  background="img/pass.jpg" width="398" border="0" height="150"  style=" border:#A5D5E4;border-top-style:double;border-right-style:double;border-left-style:double;border-bottom-style:double;" >
  <tr>
    <td width="142" height="32">&nbsp;</td>
    <td width="73">&nbsp;</td>
    <td width="148"><div align="right"></div></td>
    <td width="17">&nbsp;</td>
  </tr>
  <tr>
    <td height="24">&nbsp;</td>
    <td><span class="style2">Usuario:</span></td>
    <td ><div align="right">
      <input style="background-color:#C1E1EC;border: #004080 2px solid; font-size:12px"  type="text" name="txtUsuario" id="txtUsuario" >
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="24">&nbsp;</td>
    <td><span class="style2">Clave:</span></td>
    <td ><div align="right">
      <input style="background-color:#C1E1EC;border: #004080 2px solid;font-size:12px" type="password" name="txtContrasenia" id="txtContrasenia"  />
    </div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <div align="right">
        <input   class="button_acces" type="submit" style="width:90px;vertical-align:bottom;" name="login" id="login" onClick="document.frmLogin.submit(); " value="Ingresar" />
        </div></td>
    <td><?php 
		  if ($var){
		  echo '<script type="text/javascript">
alert("Usuario y/o contraseña incorrectos");
</script>';}?></td>
  </tr>
  <tr>
    <td height="10">&nbsp;</td>
    <td>&nbsp;</td>
    <td>        <div align="right"></div></td>
    <td>&nbsp;</td>
  </tr>
</table>        
      </td>
	</tr>
    
</table>
</form>
</body>
</html>