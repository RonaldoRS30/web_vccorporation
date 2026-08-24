<?php

include_once dirname(__FILE__) . '/inc_asset.php';

$page = basename($_SERVER['PHP_SELF'], ".php");

?>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if ($page == "industria") {
	echo '
	<title>Empresa de Instrumentación y Control de Procesos Industriales | VC Corporation</title>
	<meta name="description" content="Empresa de instrumentación industrial con amplia experiencia en el control y medición de los procesos industriales con el fin de optimizar los recursos utilizados.">
	';
} elseif ($page == "redes-informaticas") {
	echo '
	<title>Instalación y Mantenimiento de Redes Informáticas | VC Corporation</title>
	<meta name="description" content="En VC Corporation brindamos servicios de instalación, configuración y mantenimiento de redes informáticas para empresas a cargo de nuestros especialistas.">
	';
} elseif ($page == "mantenimiento") {
	echo '
	<title>Empresa de Mantenimiento Industrial | VC Corporation</title>
	<meta name="description" content="En VC Corporation brindamos servicios de mantenimiento de instalaciones y maquinaria industrial para empresas asegurando su correcto funcionamiento.">
	';
} elseif ($page == "mediatension") {
	echo '
	<title>Instalación y Mantenimiento de Equipos de Media Tensión |  V&C Corporation</title>
	<meta name="description" content="Brindamos servicios de instalación, mantenimiento preventivo y capacitación del personal para el manejo de equipos y celdas de media tensión.">
	<link rel="canonical" href="https://vc-corporation.com/mediatension.php" />
	';
} else {
	echo '
	<title>V&amp;C Corporation</title>
	';	
}

if ($page == "index") {
	echo '
	<link rel="canonical" href="https://vc-corporation.com/" />	
	';
}
	
if ($page == "industria") {
	echo'
<link rel="canonical" href="https://vc-corporation.com/industria.php" />
<link rel="alternate" hreflang="es-PE" href="https://vc-corporation.com/industria.php"/>
<link rel="alternate" hreflang="en-US" href="https://vc-corporation.com/industrial.php"/>
	';
} elseif ($page == "index" || $page == "main") {
	echo'
	<link rel="alternate" hreflang="es-PE" href="https://vc-corporation.com"/> 
	<link rel="alternate" hreflang="en-US" href="https://vc-corporation.com/main.php"/>
	';	
} elseif ($page == "redes-informaticas" || $page == "networking") {
	echo'
<link rel="alternate" hreflang="es-PE" href="https://vc-corporation.com/redes-informaticas.php"/>
<link rel="alternate" hreflang="en-US" href="https://vc-corporation.com/networking.php"/>

	';	
} elseif ($page == "mantenimiento" || $page == "maintenance") {
	echo'
<link rel="alternate" hreflang="es-PE" href="https://vc-corporation.com/mantenimiento.php"/>
<link rel="alternate" hreflang="en-US" href="https://vc-corporation.com/maintenance.php"/>
	';	
} elseif ($page == "automatizacion" || $page == "automation") {
	echo'
<link rel="alternate" hreflang="es-PE" href="https://vc-corporation.com/automatizacion.php"/>
<link rel="alternate" hreflang="en-US" href="https://vc-corporation.com/automation.php"/>

	';	
} elseif ($page == "capacitacion" || $page == "training") {
	echo'
<link rel="alternate" hreflang="es-PE" href="https://vc-corporation.com/capacitacion.php"/>
<link rel="alternate" hreflang="en-US" href="https://vc-corporation.com/training.php"/>

	';		
	
}
?>

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
<link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!--Construction Styles-->
<link rel="stylesheet" href="<?php echo asset_v('css/style.css'); ?>">
	
<script type="text/javascript">
function acceso_intranetIP () {
   pcompleta('intranet.php')
}
function pcompleta (pagina) {
 var opciones=("toolbar=no,location=no, directories=no,titlebar=0,location=0, status=no, menubar=no ,scrollbars=no,  resizable=no, fullscreen=yes"); 
 window.open(pagina,"",opciones);
}
function carga_modal() {
    $("#myModal").modal("show");
	$("#myModal").on('hide.bs.modal', function(){
       $("#cartoonVideo").attr('src', '');
    });
}
</script>
<script type="text/javascript">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7H69M4');
</script>
<!-- End Google Tag Manager -->

