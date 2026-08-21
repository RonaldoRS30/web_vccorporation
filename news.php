<!DOCTYPE html>
<html lang="en">
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
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>V&C Corporation</title>
    
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
    <link rel="stylesheet" href="css/styleno.css">
    <link rel="stylesheet" href="vendors/owl.carousel/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="vendors/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="vendors/js-flickr-gallery/css/js-flickr-gallery.css" media="screen" />
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
 function carga_modal(val) {
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
  
    <?php include ('header_.php'); ?>
    
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
                        <span class="btn-text">Select</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">ABOUT US</a></li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Services</a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="automation.php">The Automation of Industrial Processes</a></li>
                              <li><a href="electrical.php">Electrical Engineering</a></li>
                              <li><a href="industry.php">Industrial Instrumentation</a></li>
                              <li><a href="networking.php">Information and Networking Technology</a></li>
                              <li><a href="maintenance.php">Industrial Maintenance</a></li>
                              <li><a href="training.php">Employee Training</a></li>
                          </ul>
                        </li>
                        <li><a href="products.php">PRODUCTS</a></li>                        
                        <li><a href="projects.php">PROJECTS</a></li>

                        <li class=" dropdown ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CONTACT</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="contact.php">Contact</a></li>
                              <li><a href="workforus.php">Work for Us</a></li>
                          </ul>
                        </li>
                        <li class="dropdown active"><a href="news.php">news</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!-- FIN MENU -->

    <section id="pageCover" class="row noticiasPage">        
        <div class="row pageTitle"><b>NEWS</b></div>
    </section>    
    
    <!-- MODAL -->   
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <!-- Modal content-->
              <div class="modal-content">
        
                <div class="modal-body" >
                   <img src="images/team/fff1.png" alt="" class="img-responsive" style=""> 
                   <p style="font-size:11px; text-align:left; margin-left:15px;" >
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
        <p style="color:blue; font-size:11px; text-align:left; margin-left:15px; margin-right:15px;"><u>
        comercial@vc-corporation.com<br>
        juan.castillo@vc-corporation.com</u></p>
        </p>
        <p style="font-size:18px; text-align:center;margin-left:15px;margin-right:15px;"><strong>
            V&C Corporation SAC Named Rockwell Automation Machinery Safety Recognized System Integrator 
        </strong></p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
            <b>Lima, Perú, May 23, 2017 –</b> V&C Corporation SAC, a system integrator specializing in automation and the optimization of industrial processes, announced that it has demonstrated the requisite expertise and experience to become a member of the Rockwell Automation Machinery Safety System Integrator program. Qualified members of the program represent an elite group of system integrators that pass a thorough assessment of their safety application expertise, experience and capabilities. They also show a commitment to maintaining excellence in machinery safety applications over the long term. 
        </p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
            All Recognized System Integrators, as part of the Rockwell Automation PartnerNetwork program, have committed to an active, extensive relationship with Rockwell Automation to provide the most productive and cost-effective automation solutions for their customers.
        </p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
            “By becoming a Machinery Safety Recognized System Integrator, V&C Corporation SAC has committed to upholding the highest safety standards in the industry,” said Mark Eitzman, manager of safety market development, Rockwell Automation. “The company has demonstrated the depth of their technical expertise through a rigorous assessment process.”
        </p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
            Mr. Juan Jose Castillo Martinez, general manager at V&C Corporation SAC said the level of expertise validated through the program will translate to benefits for customers. 
        </p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
            “Machinery safety systems are a critical component of any industrial operation today,” said Juan Jose Castillo. “Our knowledge of current standards and evolving safety technologies can help customers improve both safety and productivity. In addition, our collaboration with Rockwell Automation, which includes TÜV-certified engineers from both companies, will help us deliver best-in-class solutions to our customers around the world.”
        </p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
        <b>V&C Corporation SAC</b><br>
        V&C Corporation SAC is a recognized leader in providing automation solutions and optimizing industrial processes, focused on improving efficiency, productivity and safety. The company has extensive knowledge of industry tools and techniques, with a number of national and international industry certifications. The company has recently expanded to develop projects and services in countries such as Chile, Colombia and Bolivia.
        
        </p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
        <b>About Rockwell Automation</b><br>
        Rockwell Automation, Inc. (NYSE: ROK), the world’s largest company dedicated to industrial automation and information, makes its customers more productive and the world more sustainable. Headquartered in Milwaukee, Wis., Rockwell Automation employs approximately 22,000 people serving customers in more than 80 countries.
        
        </p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
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
        
                <div class="modal-body" >
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
                       <div style="border-bottom: 1px solid #EFEFEF;">
                         <img src="images/team/news03.jpg" alt="" class="img-responsive" style="">
                       </div>                     
                       <br>
                       <div class="row m0" align="center">
                             <p style="font-size:18px; text-align:center;margin-left:15px;margin-right:15px;"><b>CONSTANCIA DE HOMOLOGACION</b></p>
                             <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">  
                                    <b>No.</b> 00732/18<br><br>
                                    <b>SGS DEL PERÚ SAC</b> Certifica que ha llevado a cabo el proceso de evaluación de proveedores por solicitud de PURE BIOFUELS DEL PERÚ S.A.C. a:<br><br>
                                    </p>
                                    <p align="center">
                                    <b style="text-align:center">V&C CORPORATION SOCIEDAD ANONIMA CERRADA </b><br><br>
                                    Lima<br><br>                        
                                    
                                    <b>Servicio de Programación en PLC y desarrollo de sistema SCADA</b></p>
                                    <br><br>
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
          <!-- Modal content-->
              <div class="modal-content" >
        
                <div class="modal-body" align="center"style="padding-top:0px;" >
                   <div style="border-bottom: 1px solid #EFEFEF;">
                     <img src="images/team/news04.jpg" alt="" class="img-responsive" style="">
                   </div>                     
                   <br>
                     
                

        <p style="font-size:18px; text-align:center;margin-left:15px;margin-right:15px;"><b>CERTIFICADO</b></p>
        <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;">
                                    <b>Code:</b> HP0008188<br>
                                    <b>Date:</b> 06/05/2019<br>
                                    <b>BV nº:</b> PER-440-16-008-539<br><br>
                                    BUREAU VERITAS DEL PERÚ S.A. DA CONFORMIDAD QUE LA ORGANIZACIÓN CUMPLE CON LOS REQUISITOS DE EVALUACIÓN DE PROVEEDORES ESTABLECIDOS POR NUESTRO CLIENTE VOLCÁN CIA MINERA S.A.A.<br><br>
                                     </p>
                        <p align="center">
                                    <b s>V&C CORPORATION S.A.C.</b><br><br>
                                    </p>
 <p style="text-align:justify; font-size:13px;margin-left:15px;margin-right:15px;"
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
    <b>Lima, Perú, Jun 21, 2019 - </b> Became a member of the Avetta Conssortium on 21/06/2019. Avetta is a platform that helps clients better manage their connections with qualified contractors, suppliers and vendors. Clients join Avetta to get better visibility into their supply chain. With this service they are able to see which suppliers are compliant with their health and safety standards prior to contacts being made. When your client joins Avetta, they will request that you join as well. This ensures that everyone that works on their site with you is up to the same standards.<br>
    
    This system helps keep you safer with every job you complete. In fact, over the last three years, companies that have leveraged the Avetta platform have lowered their incident rate by 54%. Additionally, you will be better able to monitor and store your compliance documentation with the Avetta team.
    <br>                                        
    
     <br>
     <a href="https://www.avetta.com" target="_blank">https://www.avetta.com</a> <br>
    
    <br>
    <a data-toggle="modal" data-target="#myModal5" style="cursor: pointer;" >Leer mas...</a>   </p>
    
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
    <b>Lima, Perú, Enero, 2019 - </b> Founded in 1994, the Association of Control Systems Integrators (CSIA) is a non-profit global trade association that seeks to advance in the industry of control systems integration. Control system integrators use their engineering, technical and commercial skills to help manufacturers and others automate their equipment and industrial systems. CSIA helps members improve their business skills, provides a forum to share industry experience and promotes the benefits of hiring a certified control systems integrator. CSIA has more than 500 member companies in 40 countries.<br>
    
    Plant managers, operations executives and other decision-makers within a broad spectrum of industries that rely on industrial automation for their success increasingly recognize the value of working with members of the Systems Integrators Association. Control (CSIA). CSIA is a group of professional and independent service providers that use hardware, software and communications products to offer customers in the industrial sector the best options for control and integration of information systems.
     <br>
     <a href="https://www.ControlSys.org" target="_blank">www.ControlSys.org</a> <br>
    <a href="https://www.csiaexchange.com/205587/VC-Corporation-SAC" target="_blank">www.CSIAExchange.com</a> <br> 
    
    <br>
    <a data-toggle="modal" data-target="#myModal2" style="cursor: pointer;" >Leer mas...</a>   </p>
    
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
    <a data-toggle="modal" data-target="#myModal1" style="cursor: pointer;" >Leer mas...</a>   </p>
    
                                      </div>
                                        
    
                                    </div>
                                    <div class="aboutUsTexts member" style="margin-top:0px;"></div>  
                                    
                                </div>
                            </div>
                        
                    </div>
                </div>
                
                
                <aside class="col-sm-3 sidebar">
                    <div class="row m0 recentPostWidget widgetS" style=" padding-right:0px;padding-left:0px; text-align: center">
                        <h4>HOMOLOGATION</h4>
                        <div class="row m0 recentblogs">
                            <div  style=" padding-right:15px;padding-left:15px; text-align: justify">
                               <ul class="list-unstyled">
                                  <li>V&C Corporation born with the vision of being a leading company in Peru and Latin America developing Engineering for the automation and optimization of industrial processes; that is why we have been looking for certifications and strategic alliances that allow us to provide and ensure a quality service.
                            
                                   </li>
                              </ul>
                   
                            </div>
                            <div >
                                   <a data-toggle="modal" data-target="#myModal3" style="cursor: pointer;" >
                                        <img src="images/slider/ho_2.png" alt="">
                                    </a>

                            </div><br>
                            <div >
                              <a data-toggle="modal" data-target="#myModal4" style="cursor: pointer;" >
                                        <img   src="images/slider/ho_3.png" alt="">
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

 <?php include('footer_.php'); ?>


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

<!-- Mirrored from premiumlayers.com/demos/construction/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Feb 2015 15:20:39 GMT -->
</html>