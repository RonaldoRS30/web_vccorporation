<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php include ('head_.php'); ?>
<script type="text/javascript">
function carga_modal(vid) {

if (vid =="EN1") _vid = "videos/VideoSmartControl.mp4";
/*
if (vid =="EN2") _vid = "https://www.youtube.com/embed/RZG0AouBIY4?list=TLPQMDkwNTIwMjD4E1RVqH3fAA";
if (vid =="EN3") _vid = "https://www.youtube.com/embed/5x3xy4SaemY"; */


    $("#TariyVideo").attr('src', _vid); 
    $("#myModal").modal("show");
	$("#myModal").on('hide.bs.modal', function(){
       $("#TariyVideo").attr('src', '');
    });
}

</script>
</head>
<body>
     <?php include ('social.php'); ?>
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
                        <li  class="active" ><a href="productos.php">productos</a></li>                        
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
    
    
    <section id="pageCover" class="row productoPage">
        
        <div class="row pageTitle"><b>P R O D U C T O S</b></div>
    </section>
    
     <section id="services" class="row">


   
    
        <div class="container">
        
                                
            <br> 
        
            <div class="row">
           

                           <div class="row m0 blog">
                            <div class="row m0 blogInner">
                                <div class="col-sm-6 p0">
                                    <div class="row m0 blogDateTime">
                                        <i class="fa fa-cogs fa-2x"></i>  <a href="#" class="postTitle row m0"><h4>HPGR Smart Control</h4></a>
                                    </div>
                                    <div class="row m0 featureImg">
                                        <a href="#" onClick="carga_modal('EN1');">
                                            <img src="videos/prod00.jpg" alt="Video Smart Control" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0 postExcerpts">
                                        <div class="row m0 postExcerptInner">
                                           
                                            <p>HPGRSmartControl es una plataforma integral de diagnóstico inteligente, desarrollada para transformar cualquier equipo HPGR en un sistema autónomo, predictivo y orientado a la eficiencia total.

Su arquitectura de última generación combina analítica en tiempo real, algoritmos de inteligencia artificial, integración directa con PLCs/DCSs, y soporte técnico experto. El resultado: una solución que convierte datos crudos en acciones concretas para evitar fallas, reducir tiempos muertos y optimizar cada minuto de operación.

Diagnóstico en segundos. Predicción en minutos. Disponibilidad sostenida en el tiempo.
<br>
</p><br><br><br>
                               
  
  <a href="videos/HPGRSmartControl.pdf"  target="_blank" >Detalles...</a>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">HPGR Smart Control</h4>
        </div>
        <div class="modal-body">
		  <iframe id="TariyVideo" width="100%" height="500" src="videos/VideoSmartControl.mp4" frameborder="0" allow="accelerometer;  encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     
        </div>
        
    </div>
  </div>
  

                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
						 </div>                   

                          <div class="row m0 blog">
                            <div class="row m0 blogInner">
                                <div class="col-sm-6 p0">
                                    <div class="row m0 blogDateTime">
                                        <i class="fa fa-cogs fa-2x"></i>  <a href="#" class="postTitle row m0"><h4>Optimización de Procesos Industriales</h4></a>
                                    </div>
                                    <div class="row m0 featureImg">
                                        <a href="#">
                                            <img src="images/projects/prod01.jpg" alt="Faceted Search Has Landed" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0 postExcerpts">
                                        <div class="row m0 postExcerptInner">
                                           
                                            <p>Optimizar es llevar un proceso hacia el mínimo o máximo de su capacidad considerando sus valores nominales de operación  y tomando en cuenta las restricciones de proceso. Sin duda alcanzar el mínimo o el máximo es obtener la “mejor” solución entre otras soluciones factibles. Ahora bien, esta solución debe ajustar acciones, tareas, entradas y salidas de manera que entregue el mejor producto a menor costo y en el menor tiempo.<br>
</p><br><br><br>
                               
  
  <a href="" class="readMore" data-toggle="modal" data-target="#myModal01">ACD System</a>


  <!-- Modal -->
  <div class="modal fade" id="myModal01" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ACD System</h4>
        </div>
        <div class="modal-body">
           <p>Sistema basado en estrategias de Control Avanzado tales como Fuzzy Logic y MPC. Cuando hacemos  referencia a “Control Avanzado” queremos indicar la aplicación de estrategias de control que trascienden las usualmente aplicadas en control de procesos. Para esto V&C Corporation, utiliza como plataforma de desarrollo un Controlador (DCS o PAC) y un completo toolbox de herramientas basadas en Fuzzy Logic y/o MPC. El éxito del sistema radica en un adecuado análisis de la data histórica de los procesos  y en elegir una estrategia de control acorde a las necesidades de cada proceso.<br><br>
         Ventajas<br><br>

• Se logra el aumento en la producción.<br>
• V&C Corporation garantiza un incremento de producción en 1%.<br>
• El Sistema entrega estabilidad al proceso y robustez a la operación ante diferentes cambios.<br>
• Reducción en el consumo energético de la planta.<br>
• Reducción de insumos (reactivos, agua, energía, etc.)<br>
• Reducción de costos de mantenimiento<br>
• Rapidez en la toma de decisiones.<br>
• Aumento de la vida útil de los equipos.<br>
</p>
        </div>
        
    </div>
  </div>
  

                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
						 </div>



                          <div class="row m0 blog">
                            <div class="row m0 blogInner">
                                <div class="col-sm-6 p0">
                                    <div class="row m0 blogDateTime">
                                        <i class="fa fa-cogs fa-2x"></i><a href="#" class="postTitle row m0"><h4>Modelamiento de Procesos para la Gestión de Proyectos</h4></a>
                                      
                                    </div>
                                    <div class="row m0 featureImg">
                                        <a href="#">
                                            <img src="images/projects/prod02.jpg" alt="Faceted Search Has Landed" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 p0">
                                    <div class="row m0 postExcerpts">
                                        <div class="row m0 postExcerptInner">
                                                  <p>La adecuada gestión de proyectos apunta a maximizar los resultados y facilitar la generación de información para la toma de decisiones, asegurando de esta forma la materialización de los resultados esperados.
Es por ello que liderar, planificar, ejecutar y monitorear los proyectos con apropiados y modernos lineamientos de reconocimiento internacional, como los del Project Management Institute (PMI®) y la Norma ISO 9001:2015, constituye un requerimiento para asegurar una exitosa gestión de proyectos.</p><br><br>
<a href="" class="readMore" data-toggle="modal" data-target="#myModal02">SIS_GPS</a>


  <!-- Modal -->
  <div class="modal fade" id="myModal02" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SIS_GPS</h4>
        </div>
        <div class="modal-body">
           <p>
Metodología estandarizada para la gestión de proyectos, basada en herramientas, técnicas y buenas prácticas del PMBOK, OPM3 y bajo una normativa de calidad ISO 9001:2015, que permite optimizar el nivel de madurez de los procesos dentro de la organización con el fin de maximizar los resultados en el desarrollo de proyectos y servicios.<br><br>



                                                  Ventajas<br><br>

• Detecta acordonamientos de hidrociclón (Considera los obstáculos en la descarga de
  finos o gruesos).<br>
• Detecta cavitaciones de las bombas.<br>
• Identifica problemas que existan al interior del hidrociclón, (partículas o piezas 
  al interior).<br>
• Monitorea la granulometría del PSI,(En base al modelo obtenido).<br>
• Disminuye la Variabilidad de la pulpa por problemas de operación del hidrociclón.<br>
• Evita enviar toda la pulpa que requiere remolienda, a las etapas siguientes.<br>
• Garantiza un correcto funcionamiento de este equipo.<br>
• Genera un círculo de lavado para el interior de los hidrociclón.<br></p>
        </div>
        
    </div>
  </div>
  

                                        </div>
                                          
                                        </div>
                                    </div>
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
    
    <script src="vendors/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="vendors/owl.carousel/js/owl.carousel.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.js"></script>
    
    
    <script src="vendors/js-flickr-gallery/js/js-flickr-gallery.min.js"></script>
    <script src="vendors/lightbox/js/lightbox.min.js"></script>
    
    <!--Construction JS-->
    <script src="js/construction.js"></script>
</body>

</html>