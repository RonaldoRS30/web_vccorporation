<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
 <?php include ('head_.php'); ?>
</head>      
    
</head>
<body>
     <?php include ('social.php'); ?>
    <!--Header-->
  
    <?php include ('header_.php'); ?>

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
                        <span class="btn-text">Select</span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="nav navbar-nav">
                        <li class="active "><a href="index.php">ABOUT US</a></li>
                        <li class=" dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SERVICES</a>
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
                            <h2><strong>We Automate and Optimize Processes</strong></h2>
                       </div>
                       <div class="caption sfl stl"  
                           data-x="center" 
                           data-y="225" 
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack">
                            <div class="cont-row">Your solution is in our hands.s</div>
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
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico2.png" alt="brifcase"></div>
                       </div>
                       <div class="caption skewfromright skewtoright"  
                           data-x="center" 
                           data-y="310" 
                           data-hoffset="176"
                           data-speed="500" 
                           data-start="1900" 
                           data-easing="easeOutBack"><div class="ico_box"><img src="images/slider/ico3.png" alt="brifcase"></div>
                       </div>                       
                    </li>  
                    <!-- SLIDE 2 -->
                    <li data-transition="boxslide" data-slotamount="7" >
                       <img src="images/slider/slide2<?php echo rand(1,3); ?>.jpg" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                       <div class="caption sfr str"  
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">  
                            <h4><strong>We are a team of professionals associated with the <br>industrial sector and the newest technologies.</strong></h4>
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
                           <a type="button" class="btn btn-default" href="contact.php">Contact</a>                       </div>
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
                           data-x="-100" 
                           data-y="135" 
                           data-speed="700"  
                           data-start="1700" 
                           data-easing="easeOutBack">
                            <h4><strong><br>We specialize in providing solutions.</strong></h4>
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
                           <a type="button" class="btn btn-default" href="contact.php">Contact</a>                       </div>
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
                <h3 class="sectionTitle" align="center">ABOUT US</h3>
                  <div class="panel-body"><div >
                    <div align="justify" style="font-family: 'Raleway',sans-serif; font-size: 16px;color: #9c9c9c;"><p>We began our activities in May 2004 to meet the needs of businesses that understand that, by automating their processes, they gain competitive advantages, while increasing their quality and safety standards, thus directly reducing their production costs and conserving resources and the environment.</p>
                      
                     <p> Based on the experience of our staff, we have gained a position in the market as a local company with high technical standards, outstanding levels of service and excellent customer support. Validation through a variety of certifications obtained both nationally and internationally has made us a company renowned for providing comprehensive solutions in the automation and optimization of industrial processes, and that is always focused on improving process efficiency, productivity and safety.</p>

                      <p> We look at the implementation of a wide range of technology to achieve optimum performance in the various processes of an industrial facility, taking into account data acquisition, monitoring, process optimization, and information analysis and management, all under a centralized and comprehensive platform.</p>
                      
                      <p>The efforts of our staff, and the confidence placed in us by top-level companies in our own country, have enabled us to cross borders and carry out projects in the United States, Chile, Colombia and Bolivia.</p></div>
                  </div>
</div>
                <div class="col-sm-6" style="background-image:url(images/bgmision.png); background-position:right; background-repeat:no-repeat" >
                    <div class="row m0 leftAlignedTap">
                        <ul class="nav nav-tabs" role="tablist" id="myTab">
                         <li role="presentation" class="active"><a href="#h_tab1" aria-controls="h_tab2" role="tab" data-toggle="tab">
                                <i class="fa fa-laptop"></i>OUR VISION</a></li>                        
                          <li role="presentation" ><a href="#h_tab2" aria-controls="h_tab1" role="tab" data-toggle="tab">
                                <i class="fa fa-briefcase"></i> OUR MISSION</a></li>
                          <li role="presentation"><a href="#h_tab3" aria-controls="h_tab3" role="tab" data-toggle="tab">
                                <i class="fa fa-pagelines"></i>ENVIRONMENT</a></li>
                          <li role="presentation"><a href="#h_tab4" aria-controls="h_tab4" role="tab" data-toggle="tab">
                                <i class="fa fa-users"></i>O H S</a></li>                            
                        </ul>
                        <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="h_tab1">
                                <div align="justify">To become the leading company in Latin America by the year 2020, developing the Engineering for automating and optimizing industrial processes, aligning our procedures with those of the Integrated Business Management System, and maintaining and developing a competent human team within an open, trusting atmosphere that encourages continuous improvement and permits us to generate high-quality services.
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane " id="h_tab2">
                                <div align="justify">To develop and provide high quality and value added comprehensive solutions in the automation and optimization of industrial processes, aimed at improving efficiency and profitability within the processes, investing in the professionalization of each of our employees and the innovation of our technology, while having a positive effect on the community and the environment.
                                </div>
                            </div>                            
                            <div role="tabpanel" class="tab-pane" id="h_tab3">
                                <div align="justify">At V&C Corporation we offer an efficient service that protects the environment at all times. By so doing, we aim to achieve excellent social and environmental performance and create favorable conditions for the development of our activities, achieving our goals by promoting compliance with applicable environmental regulations and their supporting standards.
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="h_tab4">
                                <div align="justify">The health and safety of our employees, strategic partners and all external staff who visit our facilities are of the utmost importance to V&C Corporation. For this reason, we aim to minimize and control all existing occupational hazards, and focus on complying with the existing national and international standards that reinforce our zero injuries and zero accidents approach.
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
                                        
Automation of Industrial Processes<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body"><a  href="automatizacion.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-cogs fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                       We provide complete industrial automation solutions using state-of-the-art hardware and software tools, in order to achieve the proposed objective.
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #1--> 
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading2">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Electrical Engineering<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                <div class="panel-body"><a  href="electrica.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-bolt fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                       We provide comprehensive and specialist services for electrical power systems.
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #2--> 
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading3">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Industrial Instrumentation<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                <div class="panel-body"><a  href="industrial.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-code-fork fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                        We have the expertise to select the instrumentation required for the correct operation of your process.
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #3--> 
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading4">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Information Technology and Networking<span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                <div class="panel-body"><a  href="networking.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-desktop fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                       We offer a full range of services, networks, software and devices in order to provide reliable and immediate information. We use a multitude of IT resources to store, process and distribute information.
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #4--> 
                        <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading5">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase">Industrial Maintenance <span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                <div class="panel-body"><a  href="mantenimiento.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-wrench fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                       We implement and continually improve our maintenance strategies to ensure maximum benefit for our customers by means of innovative, economical and safe practices that comply with the procedures recommended by manufacturers.
                                    </div></a>
                                </div>
                            </div>
                        </div> <!--hAccordion No #5-->      
                       <div class="panel panel-default" style="background-image:url(images/bg2.png); background-position:right; background-repeat:no-repeat">
                            <div class="panel-heading" role="tab" id="heading5">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#hAccordion" href="#collapse6" aria-expanded="false" aria-controls="collapse5">
                                        &nbsp;&nbsp;<img src="images/slider/ico4.png"  width="16px" height="16px" alt="brifcase"> Employee Training <span class="sign fa"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                <div class="panel-body"><a  href="capacitacion.php">
                                    <div class="fleft icon">
                                        <i class="fa fa-graduation-cap fa-2x"></i>
                                    </div>
                                    <div class="fleft texts">
                                       We offer a wide range of courses to train your technical, maintenance, engineering and operations personnel. 
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