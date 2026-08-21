<?php 

if( isset( $_GET['_email'] ) ) { 
   $_email = $_GET['_email'];
}else{ 
   $_email = "0";
}


?>
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


<meta property="og:title" content="Seminario 7 de agosto 2024">    
<meta property="og:description" content="Seguridad funcional de Maquinaria"  />
<meta property="og:image" content="https://vc-corporation.com/images/seminario.jpg">
<meta property="og:type" content="Website">


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
    <?php // include ('social.php'); ?><!--Top Strip-->
    <div id="pageloader" class="row m0">
        <div class="loader-item"><img src="images/loader.gif" alt="loading"></div>
    </div> 
    <!--Header-->
    <?php include ('header.php'); ?>
    <!-- Fin Header-->
    
   
	 <!-- FIN MENU -->
    
   
   <section id="contacts" class="row">
   <div class="container">
      <div class="row">
	  
	  
         <div class="col-sm-6">
             <h3>Inscripción:</h3>		 
             <div class="row m0 featureImg">
                 <img src="images/seminario1.jpg" alt="" class="img-responsive">
             </div>
         </div>	  
	  
	  
         <div class="col-sm-6">

            <div class="row m0 commentForm" style="padding-top:0px; padding-bottom:0px; margin-bottom:0px; margin-top:0px;">

             <?php if($_email=="0")  { ?>

                        <form class="row m0"  method="post"  action="inscripcion-response.php">
						    <p>Ingrese sus datos en el siguiente formulario y envianos su registro.</p>
                            <div class=" p0 commenterInfoInputs">
                                <div class="row m0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="nom" id="nom"  placeholder="Nombres y Apellidos" required >
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-suitcase"></i></span>
                                        <input type="text" class="form-control" name="car" id="car" placeholder="Cargo" required>
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-university"></i></span>
                                        <input type="text" class="form-control" name="emp" id="emp" placeholder="Empresa" required>
                                    </div>	

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control" name="cel" id="cel" placeholder="Celular" required>
                                    </div>	
																										
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" name="ema" id="ema" placeholder="Email" required>
                                    </div>

									<button class="btn" type="submit"   >✔ Enviar Registro</button>
									
									<br><br>
									<br>

                             							
									
									
                                </div>
                            </div>

                        </form>    
						
			<?php }else{ ?>			
			       <h3>MENSAJE</h3>	
				   <div align="center"><h1><br><br></h1>	
					  <span class="green textcenter" style="vertical-align:middle">
						 <p>¡Su registro fue enviado exitosamente,<br> Usted ya se encuentra Inscrito!<br>
						 Estaremos en contacto. <br>
						 ¡Gracias!</p>
					  </span>
			        <a href="index.php" ><button class="btn btn-default" type="button"  >ACEPTAR</button></a>
					
                   </div>
			<?php } ?>	
						
               <div id="error">
                  <span>
                     <p>Algo salió mal, prueba a actualizar y enviar el formulario de nuevo.</p>
                  </span>
               </div>
            </div>

         </div>
		 
		 
		 
		 
		 
      </div>
   </div>
</section>
    <section id="nr_topStrip" class="row">
        <div class="container">
            <div class="row">
                <ul class="list-inline c-info fleft">
                    <li><a href="tel: +51013496930"><i class="fa fa-phone"></i> +511-359-0547 / 988457944 / 988457941</a></li>
                    <li><a href="mailto:comercial@vc-corporation.com"><i class="fa fa-envelope-o"></i> comercial@vc-corporation.com</a></li>
                </ul>
                <ul class="list-inline c-info fright">
                    <li><a href="https://www.linkedin.com/company/v&c-corporation-s.a.c" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://twitter.com/corporation_v" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/vccorpsac" target="_blank"><i class="fa fa-facebook"></i></a></li>
 
       
                </ul>
            </div>
        </div>
    </section>    


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