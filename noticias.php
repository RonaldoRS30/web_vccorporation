<!DOCTYPE html>
<html>
   <?php 
      $index       = "";
      $empresa     = "";
      $lineas      = ""; 
      $proyectos   = "";
      $control     = "";
      $contactenos = "current";
      
      if( isset( $_GET['_notice'] ) ) { 
         $_notice = $_GET['_notice'];
      }else{ 
         $_notice = "X";
      }
      
      ?>   
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>V&amp;C Corporation</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Favicons-->
      <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-touch-icon-60x60.png">
      <link rel="icon" type="image/png" href="favicon/favicon.ico" sizes="16x16">
      <link rel="icon" type="image/png" href="favicon/favicon.ico" sizes="32x32">
      <meta name="msapplication-TileColor" content="#da532c">
      <?php  if( $_notice=="1" ) {  ?>
      <meta property="og:title"       content="V&C Corporation es nombrado Recognized System Integrator de Rockwell Automation en Seguridad Funcional de Maquinarias.">
      <meta property="og:description" content="Lima, Perú, May 23, 2017 – V&C Corporation SAC, a system integrator specializing in automation and the optimization of industrial processes..."  />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news01.jpg">
      <meta property="og:type"        content="Website">
      <?php  }  ?>   
      <?php  if( $_notice=="1t" ) {  ?>
      <meta name="twitter:card"       content="summary_large_image"/>
      <meta name="twitter:site"       content="@corporation_v"/>
      <meta name="twitter:creator"    content="@corporation_v"/>
      <meta name="twitter:title"      content="V&C Corporation es nombrado Recognized System Integrator de Rockwell Automation en Seguridad Funcional de Maquinarias.">
      <meta name="twitter:image"      content="http://vc-corporation.com/images/team/news01.jpg"/>
      <meta name="twitter:description" content="Lima, Perú, May 23, 2017 – V&C Corporation SAC, a system integrator specializing in automation and the optimization of industrial processes... "/>
      <?php  }  ?>   
      <?php  if( $_notice=="2" ) {  ?>
      <meta property="og:title"       content="V&C Corporation es miembro de CSia Control System Integrators Association">
      <meta property="og:description" content="La Asociación de Integradores de Sistemas de Control (CSIA) busca avanzar en las prácticas comerciales de integración de sistemas de control..."  />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news02.jpg">
      <meta property="og:type"        content="Website">
      <?php  }  ?>   
      <?php  if( $_notice=="2t" ) {  ?>
      <meta name="twitter:card"       content="summary_large_image"/>
      <meta name="twitter:site"       content="@corporation_v"/>
      <meta name="twitter:creator"    content="@corporation_v"/>
      <meta name="twitter:title"      content="V&C Corporation es miembro de CSia Control System Integrators Association.">
      <meta name="twitter:image"      content="http://vc-corporation.com/images/team/news02.jpg"/>
      <meta name="twitter:description" content="La Asociación de Integradores de Sistemas de Control (CSIA) busca avanzar en las prácticas comerciales de integración de sistemas de control... "/>
      <?php  }  ?>   
      <?php  if( $_notice=="3" ) {  ?>
      <meta property="og:title"       content="V&C Corporation - SGS Homologacion Proveedores.">
      <meta property="og:description" content="Lima, Perú - Vigencia al:03-08-2019" />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news03.jpg">
      <meta property="og:type"        content="Website">
      <?php  }  ?> 
      <?php  if( $_notice=="3t" ) {  ?>
      <meta name="twitter:card"       content="summary_large_image"/>
      <meta name="twitter:site"       content="@corporation_v"/>
      <meta name="twitter:creator"    content="@corporation_v"/>
      <meta name="twitter:title"      content="V&C Corporation - SGS Homologacion Proveedores...">
      <meta name="twitter:image"      content="http://vc-corporation.com/images/team/news03.jpg"/>
      <meta name="twitter:description" content="Lima, Perú - Vigencia al:03-08-2019"/>
      <?php  }  ?>    
      <?php  if( $_notice=="4" ) {  ?>
      <meta property="og:title"       content="V&C Corporation BUREAU VERITAS Homologacion...">
      <meta property="og:description" content="Lima, Perú - Vigencia al: 05/05/2020"  />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news04.jpg">
      <meta property="og:type"        content="Website">
      <?php  }  ?> 
      <?php  if( $_notice=="4t" ) {  ?>
      <meta name="twitter:card"       content="summary_large_image"/>
      <meta name="twitter:site"       content="@corporation_v"/>
      <meta name="twitter:creator"    content="@corporation_v"/>
      <meta name="twitter:title"      content="V&C Corporation - BUREAU VERITAS Homologacion...">
      <meta name="twitter:image"      content="http://vc-corporation.com/images/team/news04.jpg"/>
      <meta name="twitter:description" content="Lima, Perú - Vigencia al: 05/05/2020"/>
      <?php  }  ?>   
      <?php  if( $_notice=="5" ) {  ?>
      <meta property="og:title"       content="V&C Corporation AVETTA Member...">
      <meta property="og:description" content="Lima, Perú - Vigencia desde: 21/06/2019"  />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news05.jpg">
      <meta property="og:type"        content="Website">
      <?php  }  ?> 
      <?php  if( $_notice=="5t" ) {  ?>
      <meta name="twitter:card"       content="summary_large_image"/>
      <meta name="twitter:site"       content="@corporation_v"/>
      <meta name="twitter:creator"    content="@corporation_v"/>
      <meta name="twitter:title"      content="V&C Corporation - AVETTA Member...">
      <meta name="twitter:image"      content="http://vc-corporation.com/images/team/news05.jpg"/>
      <meta name="twitter:description" content="Lima, Perú - Vigencia desde: 21/06/2019"/>
      <?php  }  ?> 
      <?php  if( $_notice=="7" ) {  ?>
      <meta property="og:title"       content="V&C Corporation - CORPORACION HODELPE Homologacion...">
      <meta property="og:description" content="Lima, Perú - Vigencia desde: 13/05/2019"  />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news10.jpg">
      <meta property="og:type"        content="Website">
      <?php  }  ?> 
      <?php  if( $_notice=="7t" ) {  ?>
      <meta name="twitter:card"       content="summary_large_image"/>
      <meta name="twitter:site"       content="@corporation_v"/>
      <meta name="twitter:creator"    content="@corporation_v"/>
      <meta name="twitter:title"      content="V&C Corporation - CORPORACION HODELPE Homologacion...">
      <meta name="twitter:image"      content="http://vc-corporation.com/images/team/news10.jpg"/>
      <meta name="twitter:description" content="Lima, Perú - Vigencia desde: 13/05/2019"/>
      <?php  }  ?>       
      <?php  if( $_notice=="8" ) {  ?>
      <meta property="og:title"       content="V&C Corporation MEGA Homologacion...">
      <meta property="og:description" content="Lima, Perú "  />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news08.jpg">
      <meta property="og:type"        content="Website">
      <?php  }  ?> 
      <?php  if( $_notice=="8t" ) {  ?>
      <meta name="twitter:card"       content="summary_large_image"/>
      <meta name="twitter:site"       content="@corporation_v"/>
      <meta name="twitter:creator"    content="@corporation_v"/>
      <meta name="twitter:title"      content="V&C Corporation MEGA Homologacion...">
      <meta name="twitter:image"      content="http://vc-corporation.com/images/team/news08.jpg"/>
      <meta name="twitter:description" content="Lima, Perú"/>
      <?php  }  ?>   
      <?php  if( $_notice=="9" ) {  ?>
      <meta property="og:title"       content="V&C Corporation, Sistema de Alerta Infrarojo...">
      <meta property="og:description" content="Lima, Perú "  />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news09.jpg">
      <meta property="og:type"        content="Website">
      <?php  }  ?> 
      <?php  if( $_notice=="9t" ) {  ?>
      <meta name="twitter:card"       content="summary_large_image"/>
      <meta name="twitter:site"       content="@corporation_v"/>
      <meta name="twitter:creator"    content="@corporation_v"/>
      <meta name="twitter:title"      content="V&C Corporation, Sistema de Alerta Infrarojo...">
      <meta name="twitter:image"      content="http://vc-corporation.com/images/team/news09.jpg"/>
      <meta name="twitter:description" content="Lima, Perú"/>
      <?php  }  ?>   
       <?php  if( $_notice=="0" ) {  ?>
      <meta property="og:title"       content="PMI Agile Certified Practitioner - Juan José Castillo (PMI-ACP).">
      <meta property="og:description" content="Lima, Perú" />
      <meta property="og:image"       content="http://vc-corporation.com/images/team/news00.png">
      <meta property="og:type"        content="Website">
      <?php  }  ?>     
	  
	  
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
      <!-- Animate.css -->                  
      <link rel="stylesheet" href="css/animate.css">
      <!-- Icomoon Icon Fonts-->
      <link rel="stylesheet" href="css/icomoon.css">
      <!-- Magnific Popup -->
      <link rel="stylesheet" href="css/magnific-popup.css">
      <!-- Theme Style -->
      <link rel="stylesheet" href="css/style.css?a=2">
      <!-- Modernizr JS
         <script src="js/modernizr-2.6.2.min.js"></script> -->
      <script type="text/javascript">
         function carga_modal(val) {
          if (val =="9"){
		     location.href = "http://vc-corporation.com/FlyerAlertaInfrarojo.pdf";
			 return;
		  }	 		 
          if (val !="X")
             $("#myModal"+val).modal("show");
         }
         function acceso_intranetIP () {
            pcompleta('intranet.php')
         }
         function pcompleta (pagina) {
            var opciones=("toolbar=no,location=no, directories=no,titlebar=0,location=0, status=no, menubar=no ,scrollbars=no, resizable=no, fullscreen=yes"); 
            window.open(pagina,"",opciones);
         }
		 
		 
      </script>
	  <script type="text/javascript">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7H69M4');
</script>
   </head>
   <body onLoad="carga_modal('<?php echo substr($_notice,0,1);  ?>');">
      <?php include ('social.php'); ?>
      <!--Header-->
      <?php include ('header.php'); ?>
      <!-- Fin Header-->
      <nav class="navbar navbar-default navbar-static-top">
         <!-- INICIO MENU -->
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
                           
                           <li><a href="industria.php">Instrumentación Industrial</a></li>
                           <li><a href="redes.php">Tecnología de Información y Networking</a></li>
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
                     <li ><a href="productos.php">productos</a></li>
                     <li><a href="proyectos.php">proyectos</a></li>
                     <li class=" dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">contacto</a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="contacto.php">Contacto</a></li>
                           <li><a href="trabajeenvc.php">Trabaje con Nosotros</a></li>
                        </ul>
                     </li>
                     <li  class="active" ><a href="noticias.php">noticias</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <!-- FIN MENU -->
      <section id="pageCover" class="row noticiasPage">
         <div class="row pageTitle"><b>N O T I C I A S</b></div>
      </section>
      
      <!-- FIN MODAL --> 
      <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true" style="background-color:#333333">
         <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body" style="padding-left:0px; padding-top:0px; padding-right:0px; padding-bottom:0px; background-color:#333333">
                  <div style="position: absolute; width:15px; right: 10px;top:5px;" >
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  
                  
                  <object class="PDFdoc" width="100%" height="500px" type="application/pdf" data="http://vc-corporation.com/FlyerAlertaInfrarojo.pdf">
                      <p style="color:#00CCCC; text-align:center"> 
                     Su navegador no soporta visualizar PDF<br>
                   <a href="http://vc-corporation.com/FlyerAlertaInfrarojo.pdf">Click para Descargar PDF</a> 
                      </p> 
                  </object>
            </div>
            </div>
         </div>
      </div>
      <!-- FIN MODAL -->
      <!-- MODAL -->   
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body"  style="padding-top:0px; padding-left:0px; padding-right:0px;">
                  <div style="position: absolute; width:15px; right: 10px;top:5px;" >
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <img src="images/team/fff1.png" alt="" class="img-responsive" style=""> 
                  <p style="font-size:11px; text-align:left; padding-right:30px; padding-left:30px;" >
                     FOR IMMEDIATE RELEASE<br>
                     Contact: <br>
                     Juan Jose Castillo Martinez<br>
                     General Manager<br>
                     V&C Corporation SAC<br>
                     Villa Rica S1 – Chaclacayo – Lima, Perú<br>
                     Av. Flora Tristán 761 Of. 201 – La Molina – Lima, Perú<br>
                     Phone:<br>
                     +511 349-69307<br>
                     +511 359-0547<br>
                     +51 9978-80338<br>
                     +51 9884-57941<br>
                     Email: 
                  </p>
                  <p style="color:blue; font-size:11px; text-align:left; padding-right:30px; padding-left:30px;"><u>
                     comercial@vc-corporation.com<br>
                     juan.castillo@vc-corporation.com</u>
                  </p>
                  </p>
                  <p style="font-size:18px; text-align:center; padding-right:30px; padding-left:30px;"><strong>
                     V&C Corporation SAC Named Rockwell Automation Machinery Safety Recognized System Integrator 
                     </strong>
                  </p>
                  <p style="text-align:justify; font-size:13px; padding-right:30px; padding-left:30px;">
                     <b>Lima, Perú, May 23, 2017 –</b> V&C Corporation SAC, a system integrator specializing in automation and the optimization of industrial processes, announced that it has demonstrated the requisite expertise and experience to become a member of the Rockwell Automation Machinery Safety System Integrator program. Qualified members of the program represent an elite group of system integrators that pass a thorough assessment of their safety application expertise, experience and capabilities. They also show a commitment to maintaining excellence in machinery safety applications over the long term. 
                  </p>
                  <p style="text-align:justify; font-size:13px; padding-right:30px; padding-left:30px;">
                     All Recognized System Integrators, as part of the Rockwell Automation PartnerNetwork program, have committed to an active, extensive relationship with Rockwell Automation to provide the most productive and cost-effective automation solutions for their customers.
                  </p>
                  <p style="text-align:justify; font-size:13px; padding-right:30px; padding-left:30px;">
                     “By becoming a Machinery Safety Recognized System Integrator, V&C Corporation SAC has committed to upholding the highest safety standards in the industry,” said Mark Eitzman, manager of safety market development, Rockwell Automation. “The company has demonstrated the depth of their technical expertise through a rigorous assessment process.”
                  </p>
                  <p style="text-align:justify; font-size:13px; padding-right:30px; padding-left:30px;">
                     Mr. Juan Jose Castillo Martinez, general manager at V&C Corporation SAC said the level of expertise validated through the program will translate to benefits for customers. 
                  </p>
                  <p style="text-align:justify; font-size:13px; padding-right:30px; padding-left:30px;">
                     “Machinery safety systems are a critical component of any industrial operation today,” said Juan Jose Castillo. “Our knowledge of current standards and evolving safety technologies can help customers improve both safety and productivity. In addition, our collaboration with Rockwell Automation, which includes TÜV-certified engineers from both companies, will help us deliver best-in-class solutions to our customers around the world.”
                  </p>
                  <p style="text-align:justify; font-size:13px; padding-right:30px; padding-left:30px;">
                     <b>V&C Corporation SAC</b><br>
                     V&C Corporation SAC is a recognized leader in providing automation solutions and optimizing industrial processes, focused on improving efficiency, productivity and safety. The company has extensive knowledge of industry tools and techniques, with a number of national and international industry certifications. The company has recently expanded to develop projects and services in countries such as Chile, Colombia and Bolivia.
                  </p>
                  <p style="text-align:justify; font-size:13px; padding-right:30px; padding-left:30px;">
                     <b>About Rockwell Automation</b><br>
                     Rockwell Automation, Inc. (NYSE: ROK), the world’s largest company dedicated to industrial automation and information, makes its customers more productive and the world more sustainable. Headquartered in Milwaukee, Wis., Rockwell Automation employs approximately 22,000 people serving customers in more than 80 countries.
                  </p>
                  <p style="text-align:justify; font-size:13px; padding-right:30px; padding-left:30px;">
                     PartnerNetwork is a trademark of Rockwell Automation Inc.
                  </p>
                  <img src="images/team/fff.png" alt="" class="img-responsive" > 
               </div>
            </div>
         </div>
      </div>
      <!-- FIN MODAL -->  
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body" style="padding-top:0px;">
                  <div style="position: absolute; width:15px; right: 10px;top:5px;" >
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <img src="images/team/pub02.jpg" alt="" class="img-responsive" style=""> 
               </div>
            </div>
         </div>
      </div>
      <!-- FIN MODAL --> 
      <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body" style="padding-top:0px;">
                  <div style="position: absolute; width:15px; right: 10px;top:5px;" >
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <img src="images/team/pub03.jpg" alt="" class="img-responsive" style=""> 
               </div>
            </div>
         </div>
      </div>
      <!-- FIN MODAL -->    
      <!-- FIN MODAL --> 
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-body" align="center" style="padding-top:0px;" >
                  <div style="position: absolute; width:15px; right: 10px;top:5px;" >
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div style="border-bottom: 1px solid #EFEFEF;">
                     <img src="images/team/news03.jpg" alt="" class="img-responsive" style="">
                  </div>
                  <br>
                  <div class="row m0" align="center">
                     <p style="font-size:18px; text-align:center;margin-left:15px;margin-right:15px;"><b><u>CONSTANCIA DE HOMOLOGACION</u></b></p>
                     <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">  
                        <b>No.</b> 00732/18<br><br>
                        <b>SGS DEL PERÚ SAC</b> Certifica que ha llevado a cabo el proceso de evaluación de proveedores por solicitud de PURE BIOFUELS DEL PERÚ S.A.C. a:<br><br>
                     </p>
                     <p align="center">
                        <b style="text-align:center">V&C CORPORATION SOCIEDAD ANONIMA CERRADA </b><br><br>
                        Lima<br><br>                        
                        <b>Servicio de Programación en PLC y desarrollo de sistema SCADA</b>
                     </p>
                     <br>
                     </p>          
                     <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">                                    
                        Periodo de Validez del: 03/08/2018 al 03/08/2019
                        <br><br>
                        SGS DEL PERÚ S.A.C.
                        <br><br>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FIN MODAL -->      
      <!-- FIN MODAL --> 
      <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content" >
               <div class="modal-body" align="center"style="padding-top:0px;" >
                  <div style="position: absolute; width:15px; right: 10px;top:5px;" >
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div style="border-bottom: 1px solid #EFEFEF;">
                     <img src="images/team/news04.jpg" alt="" class="img-responsive" style="">
                  </div>
                  <br>
                  <p style="font-size:18px; text-align:center;margin-left:15px;margin-right:15px;"><b><u>CERTIFICADO</u></b></p>
                  <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
                     <b>Code:</b> HP0008188<br>
                     <b>Date:</b> 06/05/2019<br>
                     <b>BV nº:</b> PER-440-16-008-539<br><br>
                     BUREAU VERITAS DEL PERÚ S.A. DA CONFORMIDAD QUE LA ORGANIZACIÓN CUMPLE CON LOS REQUISITOS DE EVALUACIÓN DE PROVEEDORES ESTABLECIDOS POR NUESTRO CLIENTE VOLCÁN CIA MINERA S.A.A.<br><br>
                  </p>
                  <p align="center">
                     <b>V&C CORPORATION S.A.C.</b><br><br>
                  </p>
                  <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
                     <b>RUC:</b> 20508558997<br>
                     <b>DIRECCIÓN LEGAL:</b> MZA. S LOTE. 1 ASC. VILLA RICA CHACLACAYO - CHACLACAYO - LIMA.<br><br>
                     <b>ALCANCE:</b> "SERVICIO DE AUTOMATIZACIÓN DE PROCESOS INDUSTRIALES QUE COMPRENDE LA DETECCIÓN DE FALLAS, PROGRAMACIÓN DE CONTROLADORES, IMPLEMENTACIÓN DE REDES INDUSTRIALES, DISEÑO de ARQUITECTURA DE CONTROL, DISEÑO DE SISTEMAS DE SUPERVISIÓN, INGENIERÍA E IMPLEMENTACIÓN DE TABLEROS ELÉCTRICOS, COMISIONAMIENTO DE INSTRUMENTACIÓN Y ENTRENAMIENTO EN EL MANEJO DEL NUEVO SISTEMA"<br><br>
                     <b>VIGENCIA:</b>  05/05/2020<br><br><br><br>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- FIN MODAL -->     
      <section id="aboutus" class="row">
         <div class="container">
            <div class="row">
               <div class="col-sm-9">
                  <div class="row aboutContent">
                  
                     <div class="row m0 members">
                        <div class="row member m0">
                           <div class="row m0 memberIntro">
                              <ul class="list-inline memberSocial">
                                 <li><a href="https://www.linkedin.com/company/v&c-corporation-s.a.c" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                 <li><a href="https://twitter.com/corporation_v" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="https://www.facebook.com/VCCorporation" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              </ul>
                              <div class="namePro">
                                 <span class="name">CORPORACION HODELPE </span> Homologación V&C Corporation 
                              </div>
                           </div>
                           <div class="row m0">
                              <div class="memImg"  style=" padding-left:0px; padding-right:20px; padding-top:20px; padding-bottom:20px">
                                 <a data-toggle="modal"  style="cursor: pointer;" ><img src="images/team/news10.png"  alt=""></a>
                              </div>
                              <div class="textsPart">
                                 <h3>CORPORACION HODELPE </h3>
                                 <p align="justify">
                                    <b>Lima, Perú, May 13, 2020 - </b>V&C Corporation es acreditado por CORPORACION HODELPE, empresa peruana Certificada en ISO 9001:2015 Sistema de Gestión de la Calidad, ISO 14001:2015 Sistema de Gestión Ambiental, OHSAS 18001:2007 Sistema de Gestión de Seguridad y Salud Ocupacional; con alcance en Evaluación de Perfiles Empresariales de Organizaciones, equivalente a la Homologación de Proveedores, el cual permite trabajar con estándares internacionales para la satisfacción de  Clientes. Asimismo se encuentran certificados en la norma WORLDCOB-CSR:2011.3 del Sistema de Gestión de Responsabilidad Social Empresarial (RSE) por la WORLDCOB.<br>
                                    <br>                                        
                                    <br>
                                    <a href="http://www.corporacionhodelpe.pe" target="_blank">http://www.corporacionhodelpe.pe</a> <br>
                                    <br>
                                    <a data-toggle="modal"  style="cursor: pointer;" >Leer mas...</a>   
                                 </p>
                                 </p>
                              </div>
                           </div>
                           <div class="aboutUsTexts member"></div>
                        </div>
                     </div>
                  
                     <div class="row m0 members">
                        <div class="row member m0">
                           <div class="row m0 memberIntro">
                              <ul class="list-inline memberSocial">
                                 <li><a href="https://www.linkedin.com/company/v&c-corporation-s.a.c" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                 <li><a href="https://twitter.com/corporation_v" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="https://www.facebook.com/VCCorporation" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              </ul>
                              <div class="namePro">
                                 <span class="name">MEGA</span> Homologación V&C Corporation 
                              </div>
                           </div>
                           <div class="row m0">
                              <div class="memImg"  style=" padding-left:0px; padding-right:20px; padding-top:20px; padding-bottom:20px">
                                 <a data-toggle="modal"  style="cursor: pointer;" ><img src="images/team/news08.png"  alt=""></a>
                              </div>
                              <div class="textsPart">
                                 <h3>MEGA</h3>
                                 <p align="justify">
                                    <b>Lima, Perú, Feb 28, 2020 - </b>V&C Corporation es acreditado por MEGA, organización especializada en evaluaciones de segunda parte y diagnóstico en gestión empresarial, calidad, seguridad y salud en el trabajo, entre otros aspectos. Empresa enfocada a mejorar el desempeño y competitividad de las empresas, desde un enfoque de calidad y eficiencia. dando soporte en aspectos que permiten optimizar la gestión de los recursos, minimizar los riesgos, y hacer sostenible la operación de sus Clientes.<br>
                                    Inician sus operaciones en el año 2009, ofreciendo servicios a una cartera diversificada de Clientes, cuyo principal servicio es la homologación de proveedores.
                                    <br>                                        
                                    <br>
                                    <a href="https://www.mega.net.pe/" target="_blank">https://www.mega.net.pe/</a> <br>
                                    <br>
                                    <a data-toggle="modal"  style="cursor: pointer;" >Leer mas...</a>   
                                 </p>
                                 </p>
                              </div>
                           </div>
                           <div class="aboutUsTexts member"></div>
                        </div>
                     </div>
                     
                     
                     <div class="row m0 members">
                        <div class="row member m0">
                           <div class="row m0 memberIntro">
                              <ul class="list-inline memberSocial">
                                 <li><a href="https://www.linkedin.com/company/v&c-corporation-s.a.c" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                 <li><a href="https://twitter.com/corporation_v" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="https://www.facebook.com/VCCorporation" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              </ul>
                              <div class="namePro">
                                 <span class="name">Avetta</span> Member
                              </div>
                           </div>
                           <div class="row m0">
                              <div class="memImg"  style=" padding-left:0px; padding-right:20px; padding-top:20px; padding-bottom:20px">
                                 <a data-toggle="modal" data-target="#myModal5" style="cursor: pointer;" ><img src="images/team/news05.png"  alt=""></a>
                              </div>
                              <div class="textsPart">
                                 <h3>AVETTA</h3>
                                 <p align="justify">
                                    <b>Lima, Perú, Jun 21, 2019 - </b>V&C Corporation se convirtió en miembro del Consorcio Avetta el 21/06/2019. Avetta es una plataforma que ayuda a los clientes a gestionar mejor sus conexiones con contratistas, proveedores y vendedores calificados. Los clientes se unen a Avetta para obtener una mejor visibilidad de su cadena de suministro. Con este servicio, pueden ver qué proveedores cumplen con sus estándares de salud y seguridad antes de establecer contactos. Cuando su cliente se una a Avetta, le solicitará que se una también. Esto garantiza que todos los que trabajan en su sitio con usted cumplan con los mismos estándares. <br>Este sistema lo ayuda a mantenerse más seguro con cada trabajo que completa. De hecho, en los últimos tres años, las compañías que han aprovechado la plataforma Avetta han reducido su tasa de incidentes en un 54%. Además, podrá monitorear y almacenar mejor su documentación de cumplimiento con el equipo de Avetta.
                                    <br>                                        
                                    <br>
                                    <a href="https://www.avetta.com" target="_blank">https://www.avetta.com</a> <br>
                                    <br>
                                    <a data-toggle="modal" data-target="#myModal5" style="cursor: pointer;" >Leer mas...</a>   
                                 </p>
                                 </p>
                              </div>
                           </div>
                           <div class="aboutUsTexts member"></div>
                        </div>
                     </div>
                     <div class="row m0 members">
                        <div class="row member m0">
                           <div class="row m0 memberIntro">
                              <ul class="list-inline memberSocial">
                                 <li><a href="https://www.linkedin.com/company/v&c-corporation-s.a.c" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                 <li><a href="https://twitter.com/corporation_v" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="https://www.facebook.com/VCCorporation" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              </ul>
                              <div class="namePro">
                                 <span class="name">Bureau Veritas</span> Homologación V&C Corporation 
                              </div>
                           </div>
                           <div class="row m0">
                              <div class="memImg"  style=" padding-left:0px; padding-right:20px; padding-top:20px; padding-bottom:20px">
                                 <a data-toggle="modal" data-target="#myModal4" style="cursor: pointer;" ><img src="images/team/news07.jpg"  alt=""></a>
                              </div>
                              <div class="textsPart">
                                 <h3>Bureau Veritas Homologación V&C Corporation</h3>
                                 <p align="justify">
                                    <b>Lima, Perú, May 06,  2019 - </b> V&C Corporation es acreditado por Bureau Veritas, empresa creada en 1828, líder mundial en ensayos, inspección y certificación (TIC), facilita servicios de alta calidad para ayudar a los clientes a cumplir los crecientes desafíos de la calidad, seguridad, protección del medio ambiente y la responsabilidad social.  Como un socio de confianza, Bureau Veritas ofrece soluciones innovadoras que van más allá del simple cumplimiento de las regulaciones y normas, reducir el riesgo, mejorar el rendimiento y la promoción del desarrollo sostenible. Como valores fundamentales de Bureau Veritas, están la integridad y la ética, el consejo y la validación imparcial, la orientación al cliente y la seguridad en el trabajo.
                                    <br>
                                    <a href="https://www.bureauveritas.com.ar/home/worldwide-locations/peru" target="_blank">https://www.bureauveritas.com.ar/home/worldwide-locations/peru</a> <br>
                                    <br>
                                    <a data-toggle="modal" data-target="#myModal4" style="cursor: pointer;" >Leer mas...</a>   
                                 </p>
                                 </p>
                              </div>
                           </div>
                           <div class="aboutUsTexts member"></div>
                        </div>
                     </div>
                     <div class="row m0 members">
                        <div class="row member m0">
                           <div class="row m0 memberIntro">
                              <ul class="list-inline memberSocial">
                                 <li><a href="https://www.linkedin.com/company/v&c-corporation-s.a.c" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                 <li><a href="https://twitter.com/corporation_v" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="https://www.facebook.com/VCCorporation" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              </ul>
                              <div class="namePro">
                                 <span class="name">CSia</span> Integrator Member
                              </div>
                           </div>
                           <div class="row m0">
                              <div class="memImg"  style=" padding-left:0px; padding-right:20px; padding-top:20px; padding-bottom:20px">
                                 <a data-toggle="modal" data-target="#myModal2" style="cursor: pointer;" ><img src="images/team/news02.png"  alt=""></a>
                              </div>
                              <div class="textsPart">
                                 <h3>Control System Integrators Association</h3>
                                 <p align="justify">
                                    <b>Lima, Perú, Enero, 2019 - </b> Fundada en 1994, la Asociación de Integradores de Sistemas de Control (CSIA) es una asociación comercial global sin fines de lucro que busca avanzar en la industria de la integración de sistemas de control. Los integradores de sistemas de control utilizan sus habilidades de ingeniería, técnicas y comerciales para ayudar a los fabricantes y otros a automatizar sus equipos y sistemas industriales. CSIA ayuda a los miembros a mejorar sus habilidades comerciales, proporciona un foro para compartir la experiencia de la industria y promueve los beneficios de contratar a un integrador de sistemas de control certificado. CSIA tiene más de 500 empresas miembros en 40 países.<br>
                                    Los gerentes de planta, ejecutivos de operaciones y otros cargos que toman decisiones, dentro de un amplio espectro de industrias que dependen de la automatización industrial para su éxito, reconocen cada vez más el valor de trabajar con miembros de la Asociación de Integradores de Sistemas de Control (CSIA). CSIA es un grupo de proveedores de servicios profesionales e independientes que utilizan hardware, software y productos de comunicaciones para ofrecer a los clientes, del sector industrial, las mejores opciones de control e integración de sistemas de información.
                                    <br>
                                    <a href="https://www.ControlSys.org" target="_blank">www.ControlSys.org</a> <br>
                                    <a href="https://www.csiaexchange.com/205587/VC-Corporation-SAC" target="_blank">www.CSIAExchange.com</a> <br> 
                                    <br>
                                    <a data-toggle="modal" data-target="#myModal2" style="cursor: pointer;" >Leer mas...</a>   
                                 </p>
                                 </p>
                              </div>
                           </div>
                           <div class="aboutUsTexts member"></div>
                        </div>
                     </div>
                     <div class="row m0 members">
                        <div class="row member m0">
                           <div class="row m0 memberIntro">
                              <ul class="list-inline memberSocial">
                                 <li><a href="https://www.linkedin.com/company/v&c-corporation-s.a.c" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                 <li><a href="https://twitter.com/corporation_v" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="https://www.facebook.com/VCCorporation" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              </ul>
                              <div class="namePro">
                                 <span class="name">SGS</span> Homologación V&C Corporation 
                              </div>
                           </div>
                           <div class="row m0">
                              <div class="memImg"  style=" padding-left:0px; padding-right:20px; padding-top:20px; padding-bottom:20px">
                                 <a data-toggle="modal" data-target="#myModal3" style="cursor: pointer;" ><img src="images/team/news06.jpg"  alt=""></a>
                              </div>
                              <div class="textsPart">
                                 <h3>SGS Homologación V&C Corporation</h3>
                                 <p align="justify">
                                    <b>Lima, Perú, Ago 03,  2018 - </b> V&C Corporation es acreditado por SGS, Empresa que empieza a operar el año 1986 en la ciudad de Lima. Hoy, la sede peruana de SGS es una de las más importantes, donde todas las actividades de la región sudamericana son centralizadas y coordinadas.<br>
                                    Actualmente presentes en 28 ciudades del Perú, ofreciendo una rango amplio de soluciones a prácticamente todo sector e industria existente, incluyendo medioambiente, agricultura, minería, industrial, pesca, certificación de sistemas de gestión, productos de consumo, automotriz y, petróleo, gas y productos químicos.
                                    <br>
                                    <a href="https://www.sgs.pe/es-es/our-company/about-sgs/sgs-in-brief/sgs-in-peru" target="_blank">https://www.sgs.pe</a> <br>
                                    <br>
                                    <a data-toggle="modal" data-target="#myModal3" style="cursor: pointer;" >Leer mas...</a>   
                                 </p>
                                 </p>
                              </div>
                           </div>
                           <div class="aboutUsTexts member"></div>
                        </div>
                     </div>
                     <div class="row m0 members">
                        <div class="row member m0">
                           <div class="row m0 memberIntro">
                              <ul class="list-inline memberSocial">
                                 <li><a href="https://www.linkedin.com/company/v&c-corporation-s.a.c" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                 <li><a href="https://twitter.com/corporation_v" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                 <li><a href="https://www.facebook.com/VCCorporation" target="_blank"><i class="fa fa-facebook"></i></a></li>
                              </ul>
                              <div class="namePro">
                                 <span class="name">Rockwell Automation</span> Recognized System Integrator
                              </div>
                           </div>
                           <div class="row m0" >
                              <div class="memImg"  style=" padding-left:0px; padding-right:20px; padding-top:20px; padding-bottom:20px">
                                 <a data-toggle="modal" data-target="#myModal1"><img src="images/team/news01.png" style="cursor: pointer;"  alt=""></a>
                              </div>
                              <div class="textsPart" >
                                 <h3 align="justify">V&C Corporation es nombrado Recognized  System Integrator de Rockwell Automation en Seguridad Funcional de Maquinarias.</h3>
                                 <p align="justify"><b>Lima, Perú, May 23, 2017 – </b>V&C Corporation SAC, a system integrator specializing in automation and the optimization of industrial processes, announced that it has demonstrated the requisite expertise and experience to become a member of the Rockwell Automation Machinery Safety System Integrator program. Qualified members of the program represent an elite group of system integrators that pass a thorough assessment of their safety application expertise, experience and capabilities. They also show a commitment to maintaining excellence in machinery safety applications over the long term.
                                    All Recognized System Integrators, as part of the Rockwell Automation PartnerNetwork program, have committed to an active, extensive relationship with Rockwell Automation to provide the most productive and cost-effective automation solutions for their customers.<br>
                                    <a href="https://locator.rockwellautomation.com/SystemIntegrator/CompanyDetails/317fa07b-c112-b074-f9ea-af16da3ad6a0" target="_blank">https://locator.rockwellautomation.com/SystemIntegrator</a> <br> 
                                    <br>
                                    <a data-toggle="modal" data-target="#myModal1" style="cursor: pointer;" >Leer mas...</a>   
                                 </p>
                              </div>
                           </div>
                           <div class="aboutUsTexts member" style="margin-top:0px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <aside class="col-sm-3 sidebar">
                  <div class="row m0 recentPostWidget widgetS" style=" padding-right:0px;padding-left:0px; text-align: center;background-image:url(images/bg3.png); background-position:right; background-repeat: repeat-y;">
                     <h4>HOMOLOGACIÓN</h4>
                     <div class="row m0 recentblogs">
                        <div  style=" padding-right:15px;padding-left:15px; text-align: justify">
                           <ul class="list-unstyled">
                              <li>V&C Corporation nace con la visión de ser una empresa líder en el Perú y Latinoamérica desarrollando Ingeniería para la automatización y optimización de procesos industriales; es por ello que venimos buscando certificaciones y alianzas estratégicas que nos permitan brindar y asegurar un servicio de calidad.
                              </li>
                           </ul>
                        </div>
                        <div >
                           <a data-toggle="modal" data-target="#myModal3" style="cursor: pointer;" >
                           <img src="images/slider/ho_2.png" alt="">
                           </a>
                        </div>
                        <br>
                        <div >
                           <a data-toggle="modal" data-target="#myModal4" style="cursor: pointer;" >
                           <img src="images/slider/ho_3.png" alt="">
                           </a>
                        </div>
                        <br>

                        <div >
                           <a data-toggle="modal"  style="cursor: pointer;" >
                           <img   src="images/slider/ho_6.png" alt="">
                           </a>
                        </div>
                        <br>
                        <div >
                           <a data-toggle="modal" data-target="#myModal4" style="cursor: pointer;" >
                           <img src="images/slider/ho_7.png" alt="">
                           </a>
                        </div>                        
                     </div>
                  </div>
                  <div class="row m0 contactWidget widgetS" style="background-image:url(images/bg3.png); background-position:right; background-repeat: repeat-y; ">
                     <h4>Contacto</h4>
                     <ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i> <br> +511-359-0547</li>
                        <li><i class="fa fa-envelope"></i><br>  comercial@vc-corporation.com</li>
                        <li><i class="fa fa-home"></i> <br> Asociación Villa Rica Mz. S Lote 1<br>Chaclacayo<br>Lima - Perú<br>
                        </li>
                     </ul>
                  </div>
               </aside>
            </div>
         </div>
      </section>
      <div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <!--   <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><img src="images/fondo.png" alt="" class="img-responsive" ></h4>
                  </div> -->
               <div class="modal-body">
                  <p>
                     <img src="images/web0.png" class="img-responsive" >
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!-- Placed at the end of the document so the pages load faster -->
      <script type="text/javascript">
         function mostrar(){
         document.getElementById('oculto').style.display = 'block';}
      </script> 
      <?php include('footer.php'); ?>
      <!-- jQuery -->
      <script src="js/jquery-2.1.3.min.js"></script>
      <!-- Bootstrap -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/lightbox.js"></script>
      <!-- END .container -->
      <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
      <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
      <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
      <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
      <!--Construction JS-->
      <script src="js/construction.js"></script>
   </body>
</html>