<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php include ('head_.php'); ?>
<script type="text/javascript">
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
                        <li ><a href="/">nosotros</a></li>
                        <li class="dropdown">
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
                        <li ><a href="proyectos.php">proyectos</a></li>
                        <li class=" dropdown  active ">
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
    
    
    
    <section id="pageCover" class="row contactoPage">
        
        <div class="row pageTitle"><b>Trabaja con Nosotros</b></div>
    </section>
    
     <section id="services" class="row">
  
        <div class="container">

    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
            
            
                <div class="col-sm-6">
                    <div class="row m0">
                        <h3>Trabaja con Nosotros</h3>
                        <p align="justify">Para V&C Corporation, el recurso más preciado son los colaboradores, Desarrollamos buenas prácticas laborales que ofrecen a todos los colaboradores un ambiente privilegiado para un óptimo desempeño profesional y desarrollo humano.
Si quieres unirte a nuestro equipo, forjar una sólida carrera y aportar en el desarrollo de un Perú mejor, Envía tus datos en el siguiente Formulario:

</p>
                    </div>
                    <div class="row m0 commentForm">
                        <form class="row m0" id="ContacTra" method="post" name="Formulario" action="enviar.php" target='_self' enctype="multipart/form-data" >
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
                                <p>Su mensaje fue enviado exitosamente! Voy a estar en contacto tan pronto como pueda.</p>
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
    <script src="js/contact2.js"></script>
</body>

<!-- Mirrored from premiumlayers.com/demos/construction/blog2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Feb 2015 15:22:34 GMT -->
</html>