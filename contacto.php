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
<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!--Construction Styles-->
<link rel="stylesheet" href="css/style.css">
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7H69M4');</script>
<!-- End Google Tag Manager -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
function acceso_intranetIP () {
  pcompleta('intranet.php')
}
function pcompleta (pagina) {
 var opciones=("toolbar=no,location=no, directories=no,titlebar=0,location=0, status=no, menubar=no ,scrollbars=no, resizable=no,    fullscreen=yes"); 
 window.open(pagina,"",opciones);
}
function recaptchaCallback() {
   document.getElementById("btnSubmit").disabled = "";
}
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <?php include ('social.php'); ?><!--Top Strip-->
    
    <!--Header-->
    <?php include ('header.php'); ?>
    <!-- Fin Header-->
    
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
                        <li ><a href="index.php">nosotros</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Servicios</a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="automatizacion.php">Automatización de Procesos Industriales</a></li>
                              
                              <li><a href="industrial.php">Instrumentación Industrial</a></li>
                              <li><a href="networking.php">Tecnología de Información y Networking</a></li>
                              <li><a href="mantenimiento.php">Mantenimiento Industrial</a></li>
                              <li><a href="capacitacion.php">Capacitación de Personal</a></li>
                              <li><a href="seguridad.php"> Seguridad Funcional de Maquinaria</a></li>
                              <li><a href="mediatension.php">De equipos en media tensión
variadores y arrancadores suaves</a></li>
                              <li><a href="bajatension.php">De equipos de potencia en baja
tensión variadores de frecuencia, arrancadores
suaves y centro de control de motores CCMS</a></li>	
                          </ul>
                        </li>
                        <li><a href="productos.php">productos</a></li>                        
                        <li ><a href="proyectos.php">proyectos</a></li>
                        <li class=" dropdown  active ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">contacto</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="contacto.php">Contacto</a></li>
                              <li><a href="trabajeenvc.php">Trabaje con Nosotros</a></li>
                          </ul>
                          <li><a href="noticias.php">noticias</a></li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
	 <!-- FIN MENU -->
    
    
    <section id="pageCover" class="row contactoPage">
        
        <div class="row pageTitle"><b>C O N T A C T O</b></div>
    </section>
    
    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="row m0">
                        <h3>Contáctenos!</h3>
                        <p>Ingrese sus datos al siguiente formulario envianos sus consultas y nos estaremos comunicaremos con Ud. lo más pronto posible.</p>
                    </div>
                    <div class="row m0 commentForm">
                        <form class="row m0" id="contactForm"  method="post" name="contact" action="contacto-response.php">
                            <div class="col-sm-6 p0 commenterInfoInputs">
                                <div class="row m0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="name" id="name"  placeholder="Nombre">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-link"></i></span>
                                        <input type="text"  name="url" id="url" class="form-control" placeholder="Nombre de Empresa">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 p0">
                                <div class="row m0">                                        
                                    <div class="input-group">
                                        <textarea placeholder="Mensaje" name="message" id="message" class="form-control"></textarea>
                                    </div>
									
									 <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LfGK_ocAAAAAORgwwQBnBYGl3zEemKofXdDKP2D"></div>
									
									 <button class="btn btn-default" type="submit" id="btnSubmit" disabled="disabled" >Enviar Mensaje</button>

                                    
                                </div>
                            </div>
                        </form>    
						                    
                        <div id="success">
                            <span class="green textcenter">
                                <p>¡Su mensaje fue enviado exitosamente! Voy a estar en contacto tan pronto como pueda.</p>
                            </span>
					    </div>
						<div id="error">
                            <span>
                                <p>Algo salió mal, prueba a actualizar y enviar el formulario de nuevo.</p>
                            </span>
                        </div>
                    </div> 
                    <div class="row m0">
                        <h3>Denuncias</h3>
                        <p>Ante cualquier denuncia o sospecha relacionada con conductas delictivas de soborno, corrupción, éticos y similares, así como reclamos o quejas por parte de clientes y la comunidad, se deberá reportar al correo: <b>denuncias@vc-corporation.com</b>
						</p>
                    </div>
					
					
					
                </div>
                <div class="col-sm-6">
                    <h3>Ubicación:</h3>
                   		<div class="mapa">
                          <div class="textwidget" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.7172568190726!2d-76.82799868518786!3d-11.994055791502404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fcf4f18469de83a!2sV%26C%20Corporation%20SAC%2C%20Taller!5e0!3m2!1ses-419!2spe!4v1604597481339!5m2!1ses-419!2spe" style="width:100%; height:350px;border:0"  style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                </div>
              </div>
            </div>            
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
    <script src="js/contact.js?x=1"></script>


</body>

</html>