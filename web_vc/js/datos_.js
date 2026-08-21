// FUNCIONES Y PROCEDIMIENTOS JAVASCRIPT Y AJAX QUE SOLICITAN INFORMACIÓN PARA EL FORMULARIO
// DE CONSULTA DE DATOS DEL SIMOP
// ---------------------------------------------------
// ULT. REV. : 07-FEB-2011
// POR       : DAVID VELIZ GALARZA
// PROP.     : AGRORURAL
// OFIC.	 : SISTEMAS Y TECNOLOGÍAS DE INFORMACIÓN
//
var complete="Datos incompletos";
var update='Actualización realizada con Exito';

var globalCallbacks = { 
    onCreate: function(){$('status').style.display = 'block';}, 
    onComplete : function(){ 
        if (Ajax.activeRequestCount == 0){ 
            $('status').style.display = 'none'; 
        } 
    } 
};

var http = getHTTPObject(); // We create the HTTP Object 		
function getHTTPObject()
{ 
	var xmlhttp; 
	if(window.XMLHttpRequest) 	{ 
		xmlhttp = new XMLHttpRequest(); 
	} 
	else if (window.ActiveXObject) 	{ 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		if (!xmlhttp) { 
			xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
		} 
	} 
	return xmlhttp;
	        var xmlhttp=false;
        try    {
                // Creacion del objeto AJAX para navegadores no IE
                xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e)  {
                try    {
                        // Creacion del objet AJAX para IE
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch(E)  {
                        if (!xmlhttp && typeof XMLHttpRequest!="undefined") xmlhttp=new XMLHttpRequest();
                }
        }
        return xmlhttp; 
}

function ispoption_ref ( xlink)
{
  frameWIN.location = xlink ;
}

function ispoption_LoadMe() {
  window.parent.InitFrameRef();
  window.parent.InitButtons();
  selectISP.selectedIndex = 0;
  frameMP3.location = selectISP.value;
}
function pcompleta (pagina) {
var opciones=("toolbar=no,location=no, directories=no,titlebar=0,location=0, status=no, menubar=no ,scrollbars=no, resizable=no, fullscreen=yes"); 
window.open(pagina,"",opciones);
}
function ispoption_ChangeOffer(){
  frameMP3.location = document.form1.selectISP.value; 
}
 
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_findObj(n, d) { //v4.0
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && document.getElementById) x=document.getElementById(n); return x;
}

function nuevoAjax(xmlhttp){

   try {
       xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } 
   catch (e) {
       try {
         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      } 
      catch (E) {
          xmlhttp = false;
      }
   }
   if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
   }
   return xmlhttp
}

function cargarContenido(pagina,destino){
   var contenedor;
   var ajax;
 // alert("entro");
   contenedor = document.getElementById(destino);
//   document.getElementById('ajax_img').src   = "img/ajax-loader.gif";   
   ajax = nuevoAjax(ajax);
   ajax.open("GET", pagina, true);
   ajax.onreadystatechange=function() {
      if (ajax.readyState==4) {
         contenedor.innerHTML = ajax.responseText;
      }
   }
   ajax.send(null);
}

//-------------------------------------------------//
    function win_page_size(url,ancho,alto) {
//-------------------------------------------------//	
	var win = new Window({className: "alphacube", title: "", top:5, width: ""+ancho,height: ""+alto, url:""+url, showEffectOptions: {duration:1.5}, maximizable: false, minimizable: false});
	win.setDestroyOnClose();
	win.showCenter(true);		
}

function data_winVID(pag,par){
	pagina   ="youtube.php?pagina="+pag;
	parametro="";
	var win = new Window({id: 'Contenido', className: "alphacube", title: "", top:5, width:580, height:400, url: ""+pagina, maximizable: false, minimizable: false});
	win.setDestroyOnClose();
	win.showCenter(true);	
}

function ver_url(url)
{
	var pagina = url;
/*	alert (pagina); */
	var url    = "youtube_.php";
    var params = "pagina="+pagina;	
    var ajx = new Ajax.Updater("youtube",
								url,
								{method:"post",
								parameters:params});

}


function RunSlideShow(pictureName,imageFiles,displaySecs)
{
var slideCache = new Array();
var imageSeparator = imageFiles.indexOf(";");
var nextImage = imageFiles.substring(0,imageSeparator);
if (document.all)
{
document.getElementById(pictureName).style.filter="blendTrans(duration=2)";
document.getElementById(pictureName).filters.blendTrans.Apply();
}
document.getElementById(pictureName).src = nextImage;
if (document.all)
{
document.getElementById(pictureName).filters.blendTrans.Play();
}
var futureImages= imageFiles.substring(imageSeparator+1,imageFiles.length)
+ ';' + nextImage;
setTimeout("RunSlideShow('"+pictureName+"','"+futureImages+"',"+displaySecs+")",
displaySecs*800);
// Cache the next image to improve performance.
imageSeparator = futureImages.indexOf(";");
nextImage = futureImages.substring(0,imageSeparator);
if (slideCache[nextImage] == null) {
slideCache[nextImage] = new Image;
slideCache[nextImage].src = nextImage;
}
}

function cargaPagExt(url){
	var pagina = url;
/*	alert (pagina); */
	var url    = "jukebox.php";
    var params = "pagina="+pagina;	
    var ajx = new Ajax.Updater("frameJuke",
								url,
								{method:"post",
								parameters:params});
}
function acceso_intranetIP () {
  pcompleta('intranet.php')
}
