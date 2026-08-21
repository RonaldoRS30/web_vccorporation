<?php
if (!isset($_SESSION)) {
  session_start();
}
$_cod = $_GET['_cod'];   
$_ip1    = $_GET['_ip1'];
$_ip2    = $_GET['_ip2']; 
$_mov     = $_GET['_mov'];

if ( $_mov=="" ) $_setenvio=0; else $_setenvio=1;  //aca validamos si se ha enviado un archivo desde el formulario  action='vc_mov_cotiza_reg_mail_.php'

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<title>.:.</title>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js" type="text/javascript"></script>
<script src="scripts/functions.js" type="text/javascript"></script>
<script src="js/livevalidation.js" type="text/javascript"></script>
<script src="scripts/function_t.js"           type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>
<!-- LIBRERIAS CALENDARIO -->
<link   href="calendario/tcal.css" rel="stylesheet" type="text/css"  />
<script src="calendario/tcal.js" type="text/javascript" ></script> 
<script> 
function suma(mov){	
   _otos = document.getElementById('_otos').value;
   _otof = document.getElementById('_otof').value;
   
   _porrd = document.getElementById('_porrd').value;   
  
   if( _porrd >0 )	{  
	  document.getElementById('_solrd').value = formato_numero(  ((_porrd*_otos)/100) ,2,".","");	 
	  document.getElementById('_ussrd').value = formato_numero(  ((_porrd*_otof)/100) ,2,".","");	
   } else{  
	  document.getElementById('_solrd').value = formato_numero( 0 ,2,".","");	 
	  document.getElementById('_ussrd').value = formato_numero( 0 ,2,".","");	
   }
}
</script> 
<link href="css/livevalidation.css" rel="stylesheet" type="text/css" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link href="jquery/jquery.si.css" rel="stylesheet" type="text/css" />
<script src="jquery/jquery-1.3.1.min.js" type="text/javascript"></script>
<script src="jquery/jquery.si.js" type="text/javascript"></script>
<style type="text/css" media="screen,print,projection">
@import '/css/lab.css';
body {
	font-size:90%;
}
#wrap {
	width:500px;

}
img {
	display:block;
	margin:0;
	padding:0;
	border:1px solid #ddd;
}
#wrap div {margin:1em 0}
#el01 {width:100%}
#el02 {
	color:#00f;
	background-color:#ddd;
}
#el03 {background:url(/i/icon-info.gif) no-repeat 100% 50%}
#el04 {border-width:6px}
#el05 {border: 0px solid #CCCCCC;  height:20px; width:230px; padding-top:1px}
#el06 {border:none}
#el07 {font-family:"Courier New", Courier}
#el08 {font-size:2em}
#el09 {font-size:0.5em}
#el10 {font-weight:bold}
#el11 {padding:1em}
#el12 {text-align:right}
	</style>
</head>
<body class="bg_body">
<form name='formulario' id='formulario' method='get' action='' target='_self' enctype="multipart/form-data" > 
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center"  >
 <tr  height="23">
    <td class="title" align="left">LISTA DE PARTICIPANTES INSCRITOS </td>
 </tr>
</table> 
<?php
//-------------------------------------------------//
//     Si solo se presiono Botom Subir Enviar
//-------------------------------------------------//
if ($_setenvio==1){   
//   $_cotinx  = substr($_cotin,0,6);
   
}else {
   	require("conexiones/cnx.php");
 	mysqli_select_db($conexion,$database);
	//$LoginRS__query="CALL sp_login ('".$loginUsername."','".$password."')";
	$sql= "select * from inscritos ";
	$rs = mysqli_query($conexion,$sql);
    $total_row = mysqli_num_rows($rs);

//	$row = mysqli_fetch_assoc($rSql);

	mysqli_close($conexion);	

    ?> 
	
<fieldset>	
	
<table width="100%"  border="0"  cellpadding="2" cellspacing="0" class="TablaDatos">
  <tr>
    <th colspan="6">LISTA DE PARTICIPANTES INSCRITOS </th>
    </tr>
  <tr>
    <th>No.</th>
    <th>Nombre</th>
    <th>Cargo</th>
    <th>Empresa</th>
    <th>Celular</th>
    <th>movil</th>
  </tr>
 <?php $_lin = 0;
		for($x=0;$x<$total_row;$x++)	{
		   $row = mysqli_fetch_assoc($rs);
           $_lin = 	$_lin + 1;
    ?>
            <tr class="modo1"> 
              <td><div align="center"><? echo $_lin; ?></div></td>			  
              <td align="left"><? echo $row['nombre']; ?></td>              
              <td  align="left"><? echo $row['cargo']; ?></td>                            
              <td  align="left" ><? echo $row['empresa']; ?></td>                            
              <td  align="left" ><? echo $row['celular']; ?></td>
              <td   align="left" ><? echo $row['email']; ?></td>
            </tr>
            <?php
		}
	?>   
  
 
  <tr>
    <td colspan="6">&nbsp;</td>
    </tr>
</table>
  
  
  </fieldset>
    <div align="right"><input type="hidden"  name="_mov"  id="_mov"  value="1" />
      <input name="btnCancelarCambio" type="button" class="button" id="btnCancelarCambio" onclick="location.href ='logOut.php'"  value="  Cerrar  " />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>

<?php
}?> 
</form>
</body>
</html>
