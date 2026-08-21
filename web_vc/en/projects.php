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
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="../favicon/favicon.ico" sizes="16x16">
    <link rel="icon" type="image/png" href="../favicon/favicon.ico" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    
    <!--Bootstrap and Other Vendors-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/owl.carousel/css/owl.carousel.css">    
    <link rel="stylesheet" type="text/css" href="../vendors/rs-plugin/css/settings.css" media="screen" />
    
    <link rel="stylesheet" type="text/css" href="../vendors/lightbox/css/lightbox.css" media="screen" />
    
    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
    <!--Construction Styles-->
    <link rel="stylesheet" href="../css/style.css">
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
    function acceso_intranetIP () {
  pcompleta('intranet.php')
}
function pcompleta (pagina) {
var opciones=("toolbar=no,location=no, directories=no,titlebar=0,location=0, status=no, menubar=no ,scrollbars=no, resizable=no, fullscreen=yes"); 
window.open(pagina,"",opciones);
}
</script>     
</head>
<body>
    <div id="pageloader" class="row m0">
        <div class="loader-item"><img src="../images/loader.gif" alt="loading"></div>
    </div> 
    <section id="nr_topStrip" class="row">
        <div class="container">
            <div class="row">
                <ul class="list-inline c-info fleft">
                    <li><a href="tel:123456789012"><i class="fa fa-phone"></i> +511-349-6930</a></li>
                    <li><a href="mailto:ventas@vc-corporation.com"><i class="fa fa-envelope-o"></i> ventas@vc-corporation.com</a></li>
                </ul>
                <ul class="list-inline c-info fright">
                    <li><a  href="javascript:pcompleta('http://vc-corporation.com/webmail')" style="cursor:pointer;color:#FFFFFF" ><i class="fa fa-envelope">&nbsp;Email</i></a></li>
                    <li><a style="cursor:pointer;color:#FFFFFF" href="javascript:acceso_intranetIP ()"><i class="fa fa-cog"></i>&nbsp;Intranet</a>  </li>  
                   <li><a href="../proyectos.php"><img src="../images/sp.png" WIDTH=18 HEIGHT=18 alt="lang_sp" title="Español" /></a></li>
                    <li><a href="projects.php"><img src="../images/uk.png" " WIDTH=18 HEIGHT=18 alt="lang_uk" title="English" /></a></li>            
                </ul>
            </div>
        </div>
    </section> <!--Top Strip-->
    
   <header class="row" style="background-image:url(../images/fondovc.png); background-position:center; background-repeat:no-repeat">
        <div class="container">
            <div class="row">
                <div class="logo col-sm-6" >
                    <div class="row">
                        <a href="https://vc-corporation.com/main.php"><img src="../images/logo.png" alt="V&C Corporation Automatizacion de Procesos"></a>
                    </div>
                </div>
                
                <?php include('../social.php'); ?>
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
                              <li><a href="industrial.php">Industrial Instrumentation</a></li>
                              <li><a href="networking.php">Information and Networking Technology</a></li>
                              <li><a href="maintenance.php">Industrial Maintenance</a></li>
                              <li><a href="training.php">Employee Training</a></li>
                          </ul>
                        </li>
                        <li><a href="products.php">PRODUCTS</a></li>                        
                        <li class=" dropdown active "><a href="projects.php">PROJECTS</a></li>

                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">CONTACT</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="contact.php">Contact</a></li>
                              <li><a href="workforus.php">Work for Us</a></li>
                          </ul>
                        </li>
                        <li><a href="news.php">news</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!-- FIN MENU -->
    
    
    <section id="pageCover" class="row projectPage">
        
        <div class="row pageTitle"><b>P R O J E C T S</b></div>
    </section>
    
     <section id="services" class="row">
        <div class="container">
        
                        <div class="row m0 whatOffer">
                            <div class="col-sm-12">
                              <div class="row m0 whatOfferInner">

                                    <div align="justify"><span class="fleft bigLetter">E</span> <span>ngineering</span>  development projects that integrate and modernize industrial processes, including the development of electrical control and power diagrams, and the programming and commissioning of equipment, all on the basis of Programmable Logic Controllers (PLCs) and Distributed Control Systems (DCSs), velocity control equipment (Drives) and instrumentation equipment. Control, monitoring and statistical management software applications can also be developed, with the possibility of storing the information, printing it and exchanging information at managerial level.
                                    </div>
                                </div>
                            </div>
                        </div>    
         <br>
                       <div class="row m0">
                            <div class="col-sm-12">
                            

                            
                                <div class="row m0 serviceFeature">
                                

                                    
                                                                   
                                
                                
                                    <div class="col-sm-4">

<div class="media"><div class="media-left"><img  src="../clientes/10069.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Vopak   </h5><p>    Automation of Fuel Dispensing System   </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/codelco.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>    Codelco </h5><p>    Implementation of Control System. Dry and wet areas, Mina Gabriela Mistral, Calama, Chile </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Integration of PSI300 with DCS ABB, Cuajone</p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/petroperu.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Petroperú - Conchán Refinery   </h5><p>    BNS Burning Management System  </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Automation of Fuel Dispensing System<br> Cuajone   </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10041.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Kimberly Clark  </h5><p>    Implementation of Wireless Communication System (Access Point) </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10041.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Kimberly Clark  </h5><p>    Automation of Rotating Filters: PF03, PF04, PF05 and PI01   </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Implementation of ControlNet network and redundant processors <br>Electrical Rooms 32, 33, 34, 35 and 36   </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Implementation of Redundancy for PLCs, ControlLogic Areas 1100 and 1200  </p></div></div>                                     
                                    </div>
                                    
                                    
                                    
                                    <div class="col-sm-4">
<div class="media"><div class="media-left"><img  src="../clientes/losquenuales.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>   Empresa Minera Los Quenuales (Iscaycruz)  </h5><p>  Automation of Worthington pumps, Levels 18 and 27 <br> Limpe Centro and Level 6, Chupa  </p></div></div>

<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>    Southern Perú   </h5><p>    Implementation of Bailey DCS as Gateway for Courier analyzer (GE Fanuc PLCs) Cuajone Concentrator   </p></div></div>

<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Implementation of ControlLogix as Gateway for Bailey DCS, Mill 11, Cuajone Concentrator</p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/petroperu.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Petroperú - Conchan Refiney </h5><p>  Migration to Control System and Installation of a new Control Room</p></div></div> 
<div class="media"><div class="media-left"><img  src="../clientes/10041.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Kimberly Clark  </h5><p>    Automation of Viola Macchine Adult Diaper Machine</p></div></div> 

<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Installation of ControlLogix as Gateway for Bailey DCS, Primary Crusher </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/petroperu.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Petroperú - Iquitos Refinery   </h5><p>  SCADA for Río Nanay Oil Pipeline (Foxboro DCS and RTU) </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/petroperu.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Petroperú - Iquitos Refinery  </h5><p>    Dispensing and Inventory Control System between Refinery and Sales Site (Foxboro DCS)</p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Migration Control System from Secondary Crushers to ControlLogix</p></div></div>

                                    
                                    </div>
                                    
                                    
                                    
                                       <div class="col-sm-4">
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Maintenance of Control System, Concentrator Plant  </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10078.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  QUIMPAC </h5><p>    Automation of Caustic Soda Filter Plant - Foxboro DCS  </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/00000.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Williams USA    </h5><p>    SCADA, Southwest Energy, United States of America   </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Energy Management System</p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Advanced PLC Programming Course, Software <br>RSLogix 5000    </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/bhpbilliton.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>    BHP Billiton    </h5><p>    Automation of Stacking System (Stacker) </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Maintenance of DCS and PLC Control Systems </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/10064.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Southern Perú   </h5><p>    Comprehensive PLC Programming Course, Software, RSLogix 5000  </p></div></div>
<div class="media"><div class="media-left"><img  src="../clientes/petroperu.png" width="91px" height="61spx" alt="" style=" border-color:#CCCCCC;border-style:solid;border-width:1px;"></div><div class="media-body"><h5>  Petroperú - Conchan Refinery  </h5><p>  Instrumentation Set-up</p></div></div> 

                                    </div>

                                </div>
                            </div>
                        </div>
        

        </div>
    </section>
 
 
   <?php include('footer.php'); ?>

    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    <script src="../vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="../vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="../vendors/nicescroll/jquery.nicescroll.js"></script>
    
    
    <script src="../vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="../vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="../js/construction.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/blog2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Feb 2015 15:22:34 GMT -->
</html>