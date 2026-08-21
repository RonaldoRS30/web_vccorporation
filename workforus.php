<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<?php include ('head_.php'); ?>
<script type="text/javascript">
function darclick(){
 archivo.click();
 document.getElementById('_cv').value=document.getElementById('archivo').value;
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
</script>     
</head>
<body>
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

                        <li class=" dropdown active ">
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
    
    
    
    <section id="pageCover" class="row contactoPage">
        
        <div class="row pageTitle"><b>Work for Us</b></div>
    </section>
    
     <section id="services" class="row">
  
        <div class="container">

    <section id="contacts" class="row">
        <div class="container">
            <div class="row">
            
            
                <div class="col-sm-6">
                    <div class="row m0">
                        <h3>Work for Us</h3>
                        <p align="justify">V&C Corporation’s most valued resource is its employees. We develop good labor practices that offer all our employees an exceptional environment that is conducive to excellence in both their professional performance and human development.
If you would like to join our team, build a solid career and contribute to developing a better Peru, please send us your information using the form below:
</p>
                    </div>
                    <div class="row m0 commentForm">
                        <form class="row m0" id="ContacTra" method="post" name="Formulario" action="enviar.php" target='_self' enctype="multipart/form-data" >
                            <div class="col-sm-6 p0 commenterInfoInputs">
                                <div class="row m0">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="_name" id="_name"  placeholder="Name">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input validtype="email" type="text" class="form-control" name="_email" id="_email" placeholder="Email">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text"  name="_telefono" id="_telefono" class="form-control" placeholder="Phone">
                                    </div>
                                
                                                                   
                                </div>
                            </div>
                            <div class="col-sm-6 p0">
                                <div class="row m0">                                        
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-cog"></i></span>
                                        <input type="text"  name="_carrera" id="_carrera" class="form-control" placeholder="Career / Specialty">
                                    </div>     
                                    <div class="input-group">
                                      <span class="input-group-addon"> <a  onClick="darclick();" href="#"><i class="fa fa-paperclip"></i></a></span>
                                        <input type="text"  name="_cv" id="_cv" disabled class="form-control" placeholder="Attach Curriculum">
                                        
                                    </div>    
                                    <button class="btn btn-default" onClick="javascript: submitform()" id="enviar" name="enviar" >SEND</button>
                                </div>
                                    <input type="file"  id="archivo" name="archivo" style="visibility:hidden; width:2px"/>
                            </div>
                        </form>                        
                        <div id="success">
                            <span class="green textcenter">
                                <p>Your message was successfully sent! I will be in touch as soon as I can.</p>
                            </span>                        </div>
                  <div id="error">
                            <span>
                                <p>Something went wrong, try to update and submit the form again.</p>
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

    
    
     <?php include('footer_.php'); ?>

     
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