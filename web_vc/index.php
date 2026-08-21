<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from premiumlayers.com/demos/construction/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Feb 2015 15:18:18 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php include ('head_.php'); ?>
</head>
<body >


     <?php include ('social.php'); ?>
    <!--Header-->
  
    <?php include ('header.php'); ?>
    
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
                        <li class="active "><a href="/">nosotros</a></li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Servicios</a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="automatizacion.php">Automatización de Procesos Industriales</a></li>
                              
                              <li><a href="industria.php">Instrumentación Industrial</a></li>
                              <li><a href="redes-informaticas.php">Tecnología de Información y Networking</a></li>
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
                        <li><a href="proyectos.php">proyectos</a></li>

                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">contacto</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="contacto.php">Contacto</a></li>
                              <li><a href="trabajeenvc.php">Trabaje con Nosotros</a></li>
                          </ul>
                        </li>
                        <li><a href="noticias.php">noticias</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav> <!-- FIN MENU -->
    
   <!-- MODAL -->   
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#316262; color:#5FAFAF; height:35px; padding-top:8px;border-bottom:1px solid #448888; ">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">V&C Video</h4>
                </div>
                <div class="modal-body" style="padding-left:0px; padding-top:0px; padding-right:0px; padding-bottom:0px; background-color:#183232">
                   <video id="cartoonVideo" controls  width="100%" autoplay muted >
                      <source src="https://vc-corporation.com/vc.mp4" type="video/mp4">
                      <source src="https://vc-corporation.com/vc.ogg" type="video/ogg">
                      Su navegador no Soporta Videos.
                   </video> 
                </div>
            </div>
        </div>
    </div>
    
       

      <!-- FIN MODAL -->      
    
    
    
    
   <section id="nr_slider" class="row">
    
    
        <div class="mainSliderContainer">
            <div class="mainSlider" >
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide1<?php echo rand(1,3); ?>.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="center" 
                           data-y="140" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h2 style="color: #fff;text-shadow: 0 3px 9px #999999, 0px -2px 1px #000000;border-radius: 10px;"><strong> Automatizamos y Optimizamos Procesos</strong></h2>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="center" 
                           data-y="225" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <div class="cont-row" style="background: rgba(0, 0, 0, 0.2);"><b>La solucion esta en nuestras manos</b></div>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="center" 
                           data-y="310"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico1.png" alt="brifcase"></div>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="center" 
                           data-y="310" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico3.png" alt="brifcase"></div>
                       </div>
                       <div class="caption skewfromright skewtoright"  
                           data-x="center" 
                           data-y="310" 
                           data-hoffset="176"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico2.png" alt="brifcase"></div>
                       </div>                       
                    </li>  
                    <!-- SLIDE 2 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2<?php echo rand(1,3); ?>.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="center" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h4 style="color: #fff;text-shadow: 0 3px 9px #999999, 0px -2px 1px #000000;border-radius: 10px;"><strong>Constituimos un equipo de profesionales vinculados <br>al sector  industrial y las nuevas tecnologías.</strong></h4>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="-100" 
                           data-y="265"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <p></p>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="-100" 
                           data-y="375" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <a type="button" class="btn btn-default" href="contact.php">Contacto</a></div>
                       <div class="caption skewfromright skewtoright"  
                           data-x="right" 
                           data-y="130" 
                           data-hoffset="176"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="tools"><img src="images/slider/construction_tools.png" alt="brifcase"></div>
                       </div>                      
                    </li>  
                    <!-- SLIDE 3 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide3<?php echo rand(1,3); ?>.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="center" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h4 style="color: #fff;text-shadow: 0 3px 9px #999999, 0px -2px 1px #000000;border-radius: 10px;"><strong><br>Somos especialistas en brindar soluciones.</strong></h4>
                       </div>
                       <div class="caption skewfromleft skewtoleft"  
                           data-x="-100" 
                           data-y="265"
                           data-hoffset="-176" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <p></p>
                       </div>
                       <div class="caption sfb stb"  
                           data-x="-100" 
                           data-y="375" 
                           data-hoffset="0"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                           <a type="button" class="btn btn-default" href="contact.php">Contacto</a>                       </div>
                       <div class="caption skewfromright skewtoright"  
                           data-x="right" 
                           data-y="0"
                           data-hoffset="176"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="sketch"><img src="images/slider/sketch.png" alt="brifcase"></div>
                       </div>                       
                    </li>                          
                </ul>
            </div>
        </div>
        
      <div class="container sliderAfterTriangle"></div> <!--Triangle After Slider-->
      
      
    </section> <!--Slider-->

        <div class="container">
            <div class="row">
                <h3 class="sectionTitle" align="center">NOSOTROS</h3>
                  <div class="panel-body"><div >
                    <div align="justify" style="font-family: 'Raleway',sans-serif; font-size: 16px;color: #9c9c9c;"><p>Iniciamos nuestras actividades en Mayo del 2004, para cubrir las necesidades de empresas que entienden que la automatización de sus procesos otorga ventajas competitivas elevando los estándares de calidad y seguridad, lo cual incide de forma directa en los costos de producción y en la conservación de los recursos y el medio ambiente.</p>
                      
                     <p> Cimentada en la experiencia de nuestros integrantes, nos hemos posicionado en el mercado como una empresa cercana, con altos estándares técnicos, sobresaliente servicio y excelente atención al cliente;  validado por diversas certificaciones obtenidas a nivel nacional e internacional, nos hemos posicionado como una empresa reconocida en brindar soluciones integrales para la automatización y optimización de procesos industriales, enfocados siempre en mejorar la eficiencia, productividad y seguridad de los procesos.</p>

                      <p> Consideramos una amplia gama de tecnologías a implementar para el correcto desempeño de los distintos procesos de una planta industrial, considerando la adquisición de datos, el control, la optimización de procesos, el análisis y gestión de la información, todo esto bajo una plataforma centralizada e integral.</p>
                      
                      <p> Gracias al esfuerzo de nuestros integrantes  y respaldados por la confianza de empresas de primer nivel en nuestro país, pudimos atravesar fronteras llevando a cabo proyectos en Estados Unidos, Chile, Colombia y Bolivia.</p></div>
                  </div>
</div>
                <div class="col-sm-6" style="background-image:url(images/bgmision.png); background-position:right; background-repeat:no-repeat" >
                    <div class="row m0 leftAlignedTap">
                        <ul class="nav nav-tabs" role="tablist" id="myTab">
                         <li role="presentation" class="active"><a href="#h_tab1" aria-controls="h_tab2" role="tab" data-toggle="tab">
                                <i class="fa fa-laptop"></i> VISION</a></li>                        
                          <li role="presentation" ><a href="#h_tab2" aria-controls="h_tab1" role="tab" data-toggle="tab">
                                <i class="fa fa-briefcase"></i> MISION</a></li>
                          <li role="presentation"><a href="#h_tab3" aria-controls="h_tab3" role="tab" data-toggle="tab">
                                <i class="fa fa-pagelines"></i> MEDIO AMBIENTE</a></li>
                          <li role="presentation"><a href="#h_tab4" aria-controls="h_tab4" role="tab" data-toggle="tab">
                                <i class="fa fa-users"></i>S  S  O</a></li>                            
                        </ul>
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="h_tab1">
                                <div align="justify">“Llegar a ser, en el año 2025, la empresa líder en Latinoamérica, desarrollando Ingeniería para la automatización, optimización y la seguridad de procesos industriales, con un Sistema
Integrado de Gestión Empresarial alineado a las normativas vigentes, manteniendo y
desarrollando un equipo humano competente, dentro de un clima abierto y de confianza, que
fomente la mejora continua y permitan brindar servicios de alta calidad”.
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="h_tab2">
                                <div align="justify">“Ser una empresa sostenible, enfocados en evaluar, proponer e implementar soluciones integrales de alta calidad y valor agregado para la automatización, optimización y la seguridad
de procesos industriales, impulsando la eficiencia de los procesos y seguridad operacional de
nuestros clientes, apostando por la innovación de nuestra tecnología y el desarrollo de
nuestros colaboradores, dentro de un agradable clima laboral”.
                                </div>
                            </div>                            
                            <div role="tabpanel" class="tab-pane" id="h_tab3">
                                <div align="justify">En V&C Corporation brindamos un servicio eficiente protegiendo el medio ambiente en todo momento. Así, buscamos lograr un excelente desempeño social y ambiental, generando condiciones favorables para el desarrollo de nuestras actividades, promoviendo el cumplimiento de las regulaciones ambientales vigentes y normativas de apoyo que nos permitan lograr nuestras metas.
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="h_tab4">
                                <div align="justify">Para V&C Corporation es de vital importancia la salud y la seguridad de nuestros colaboradores, socios estratégicos y todo el personal externo que visita nuestras instalaciones, por ello, buscamos minimizar y controlar todos los riesgos laborales presentes, enfocándonos en el cumplimiento de la normativa nacional vigente y normas internacionales que refuercen nuestro enfoque de cero lesiones y cero accidentes.
                                </div>
                            </div>                                                        
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel-group" id="hAccordion" role="tablist" aria-multiselectable="true" >
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#hAccordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">&nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase">  
                                        
Automatización de Procesos Industriales<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body"><a  href="automatizacion.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-cogs fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                        Suministramos soluciones completas de automatización industrial utilizando herramientas de hardware y software de última generación, para conseguir el objetivo propuesto.
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #1--> 
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Ingeniería Eléctrica<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body"><a  href="electrica.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-bolt fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                        Brindamos  servicios integrales y especializados para los sistemas de energía eléctrica.
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #2--> 
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Instrumentación Industrial<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body"><a  href="industria.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-code-fork fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                        Tenemos el conocimiento para elegir la instrumentación necesaria para la correcta operación de su proceso.
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #3--> 
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading4">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Tecnología de Información y Networking<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="panel-body"><a  href="redes.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-desktop fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                       Brindamos un conjunto de servicios, redes, software y dispositivos que tienen como fin el disponer de  información fiable e inmediata. Usamos múltiples medios informáticos para almacenar, procesar y distribuir la información.
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #4--> 
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading5">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Mantenimiento Industrial <span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                <div class="panel-body"><a  href="mantenimiento.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-wrench fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                       Implementamos y mejoramos en forma continúa  las estrategias de mantenimiento para asegurar el máximo beneficio a nuestros clientes mediante prácticas innovadoras, económicas y seguras, cumpliendo los procedimientos recomendados por los fabricantes.
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #5-->      
                       <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading5">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse6" aria-expanded="false" aria-controls="collapse5">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Capacitación de Personal <span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                <div class="panel-body"><a  href="capacitacion.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-graduation-cap fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                       Contamos con una amplia gama de cursos para la preparación de vuestro personal técnico, mantenimiento,  ingeniería y  operación. 
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #6-->                          
                    </div>
                </div>                
            </div>
            


  <?php include('footer_.php'); ?>

    <!--  fin footer -->  
    
    <!--jQuery, Bootstrap and other vendor JS-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    <!--Isotope-->
    <script src="vendors/isotope/isotope-custom.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
	
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Feb 2015 15:20:39 GMT -->
</html>