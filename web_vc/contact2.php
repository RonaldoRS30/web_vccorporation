
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from premiumlayers.com/demos/construction/blog2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Feb 2015 15:22:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>V&amp;C Corporation</title>
    
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="favicon/favicon.ico" sizes="16x16">
    <link rel="icon" type="image/png" href="favicon/favicon.ico" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">    
    <link rel="stylesheet" type="text/css" href="vendors/rs-plugin/css/settings.css" media="screen" />
    
    <link rel="stylesheet" type="text/css" href="vendors/lightbox/css/lightbox.css" media="screen" />
    
    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!--Construction Styles-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">

function darclick(){
 archivo.click();
 document.getElementById('_cv').value=document.getElementById('archivo').value;

}

function acceso_intranetIP () {
  pcompleta('intranet.php')
}


function submitform() {
  _mail    = document.getElementById('_mail').value;
  if (_mail=='' ) {
      document.getElementById('_mail').focus()     
      return(0);
  } 
  _nombre    = document.getElementById('_nombre').value;  
  if (_nombre=='' ) {
      document.getElementById('_nombre').focus()       
      return(0);
  } 
  
  _carrera    = document.getElementById('_carrera').value;
  if (_carrera=='' ) {
      document.getElementById('_carrera').focus()      
      return(0);
  } 
  _telefono    = document.getElementById('_telefono').value;
  if (_telefono=='' ) {
      document.getElementById('_telefono').focus()     
      return(0);
  } 
 
  document.forms["Formulario"].submit();
}

function pcompleta (pagina) {
var opciones=("toolbar=no,location=no, directories=no,titlebar=0,location=0, status=no, menubar=no ,scrollbars=no, resizable=no, fullscreen=yes"); 
window.open(pagina,"",opciones);
}
</script>     
</head>
<body>
    <div id="pageloader" class="row m0">
        <div class="loader-item"><img src="images/loader.gif" alt="loading"></div>
    </div> 
    <section id="nr_topStrip" class="row">
        <div class="container">
            <div class="row">
                <ul class="list-inline c-info fleft">
                    <li><a href="tel:123456789012"><i class="fa fa-phone"></i> +511-349-6930</a></li>
                    <li><a href="mailto:ventas@vc-corporation.com"><i class="fa fa-envelope-o"></i> ventas@vc-corporation.com</a></li>
                </ul>
                <ul class="list-inline c-info fright">
                    <li><a  href="javascript:pcompleta('http://vc-corporation.com/webmail')" style="cursor:pointer;color:#FFFFFF" ><i class="fa fa-envelope">&nbsp;Correo</i></a></li>
                    <li><a style="cursor:pointer;color:#FFFFFF" href="javascript:acceso_intranetIP ()"><i class="fa fa-cog"></i>&nbsp;Intranet</a>  </li>  
                  
                </ul>
            </div>
        </div>
    </section> <!--Top Strip-->
    
   <header class="row" style="background-image:url(images/fondovc.png); background-position:center; background-repeat:no-repeat">
        <div class="container">
            <div class="row">
                <div class="logo col-sm-6" >
                    <div class="row">
                        <a href="index.php"><img src="images/logo.png" alt="V&C Corporation Automatizacion de Procesos"></a>
                    </div>
                </div>
                
               <?php include('social.php'); ?>
            </div>
        </div>
    </header> <!--Header-->
    
    <nav class="navbar navbar-default navbar-static-top"> <!-- INICIO MENU -->
        <div class="container-fluid container">
            <div class="row m04m">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav">
                        <span class="bars">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                        <span class="btn-text">Seleccione</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li ><a href="/">nosotros</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Servicios</a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="automatizacion.php">Automatización de Procesos Industriales</a></li>
                              <li><a href="electrica.php">Ingeniería Eléctrica</a></li>
                              <li><a href="industrial.php">Instrumentación Industrial</a></li>
                              <li><a href="networking.php">Tecnología de Información y Networking</a></li>
                              <li><a href="mantenimiento.php">Mantenimiento Industrial</a></li>
                              <li><a href="capacitacion.php">Capacitación de Personal</a></li>
                          </ul>
                        </li>
                        <li><a href="productos.php">productos</a></li>                        
                        <li ><a href="proyectos.php">proyectos</a></li>
                        <li class=" dropdown  active ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">contacto</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="contact.php">Contacto</a></li>
                              <li><a href="contact2.php">Trabaje con Nosotros</a></li>
                          </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!-- FIN MENU -->
    
    
    <section id="pageCover" class="row contactoPage">
        
        <div class="row pageTitle"><b>TRABAJE CON NOSOTROS</b></div>
    </section>
    
     <section id="services" class="row">
  
        <div class="container">

    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
            
            
                <div class="col-sm-6">
                    <div class="row m0">
                        <h3>Trabaja con nosotros</h3>
                        <p align="justify">Para V&C Corporation, el recurso más preciado son los colaboradores, Desarrollamos buenas prácticas laborales que ofrecen a todos los colaboradores un ambiente privilegiado para un óptimo desempeño profesional y desarrollo humano.<br>
Si quieres unirte a nuestro equipo, forjar una sólida carrera y aportar en el desarrollo de un Perú mejor, Envia tus datos en el siguiente Formulario:</p>
                    </div>
                    <div class="row m0 commentForm">
                        <form class="row m0" id="Formulario" method="post" name="Formulario" action="enviar.php" target='_self' enctype="multipart/form-data" >
                            <div class="col-sm-6 p0 commenterInfoInputs">
                                <div class="row m0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="_name" id="_name"  placeholder="Nombre">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input validtype="email" type="text" class="form-control" name="_email" id="_email" placeholder="Email">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text"  name="_telefono" id="_telefono" class="form-control" placeholder="Telefono">
                                    </div>
                                
                                                                   
                                </div>
                            </div>
                            <div class="col-sm-6 p0">
                                <div class="row m0">                                        
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-cog"></i></span>
                                        <input type="text"  name="_carrera" id="_carrera" class="form-control" placeholder="Carrera / Especialidad">
                                    </div>     
                                    <div class="input-group">
                                      <span class="input-group-addon"> <a  onClick="darclick();" href="#"><i class="fa fa-paperclip"></i></a></span>
                                        <input type="text"  name="_cv" id="_cv" disabled class="form-control" placeholder="Adjuntar Curriculum">
                                        
                                    </div>    
                                    <button class="btn btn-default" onClick="javascript: submitform()" id="enviar" name="enviar" >Enviar Mensaje</button>
                                </div>
                                    <input type="file"  id="archivo" name="archivo" style="visibility:hidden; width:2px"/>
                            </div>
                        </form>                        
                        <div id="success">
                            <span class="green textcenter">
                                <p>¡Su mensaje fue enviado exitosamente! Voy a estar en contacto tan pronto como pueda.</p>
                            </span>                        </div>
                  <div id="error">
                            <span>
                                <p>Algo salió mal, prueba a actualizar y enviar el formulario de nuevo.</p>
                            </span>
                        </div>
                    </div> 
                </div>
            
                <div class="col-sm-6">
                         <img src="images/trabaje.jpg" style="border-color:#CCCCCC;border-style:solid;border-width:1px;" >

               </div>
              </div>
            </div>            
        </div>
    </section>


        

        </div>
    </section>

    
    
   <?php include('footer.php'); ?>

     
    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/contact_2.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/blog2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Feb 2015 15:22:34 GMT -->
</html>