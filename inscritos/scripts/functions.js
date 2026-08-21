// FUNCIONES Y PROCEDIMIENTOS JAVASCRIPT Y AJAX QUE SOLICITAN INFORMACIÓN PARA EL FORMULARIO
// DE CONSULTA DE DATOS DEL SIMOP
// ---------------------------------------------------
// ULT. REV. : 07-FEB-2009
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
 /*	var xmlhttp; 
	if(window.XMLHttpRequest)
	{ 
		xmlhttp = new XMLHttpRequest(); 
	} 
	else if (window.ActiveXObject)
	{ 
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
		if (!xmlhttp)
		{ 
			xmlhttp=new ActiveXObject("Msxml2.XMLHTTP"); 
		} 
	} 
	return xmlhttp;*/
	        var xmlhttp=false;
        try
        {
                // Creacion del objeto AJAX para navegadores no IE
                xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e)
        {
                try
                {
                        // Creacion del objet AJAX para IE
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                catch(E)
                {
                        if (!xmlhttp && typeof XMLHttpRequest!="undefined") xmlhttp=new XMLHttpRequest();
                }
        }
        return xmlhttp; 
}


function MM_validateForm() 
{ //v4.0
	if (document.getElementById)
	{
    	var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    	for (i=0; i<(args.length-2); i+=3) 
		{ 
			test=args[i+2]; 
			val=document.getElementById(args[i]);
      		if (val) 
	  		{ 
	  			nm=val.name; 
				if ((val=val.value)!="") 
	  			{
        			if (test.indexOf('isEmail')!=-1) 
					{ 
						p=val.indexOf('@');
          				if (p<1 || p==(val.length-1)) 
		  					errors+='- '+nm+' must contain an e-mail address.\n';
        			} 
					else if (test!='R') 
					{ 
						num = parseFloat(val);
          				if (isNaN(val)) 
		  					errors+='- '+nm+' debe contener un número.\n';
          				if (test.indexOf('inRange') != -1) 
		  				{ 
							p=test.indexOf(':');
            				min=test.substring(8,p); max=test.substring(p+1);
            				if (num<min || max<num) 
								errors+='- '+nm+' debe contener un número entre '+min+' y '+max+'.\n';
      					} 
	  				} 
				} 
	  			else if (test.charAt(0) == 'R') 
	  				errors += '- '+nm+' vacio.\n'; 
	  		}
    	} 
		if (errors) 
			alert('Ocurrieron los sgtes. errores:\n'+errors);
		document.MM_returnValue = (errors == '');
	} 
}


////////////////////////////////////////////////////////////////////////////////////////////////////////


var numero = 0; //Esta es una variable de control para mantener nombres
            //diferentes de cada campo creado dinamicamente.
evento = function (evt) { //esta funcion nos devuelve el tipo de evento disparado
   return (!evt) ? event : evt;
}

//Aqui se hace lamagia... jejeje, esta funcion crea dinamicamente los nuevos campos file
addCampo = function () { 
//Creamos un nuevo div para que contenga el nuevo campo
   nDiv = document.createElement('div');
//con esto se establece la clase de la div
   nDiv.className = 'archivo';
//este es el id de la div, aqui la utilidad de la variable numero
//nos permite darle un id unico
   nDiv.id = 'file' + (++numero);
//creamos el input para el formulario:
   nCampo = document.createElement('input');
//le damos un nombre, es importante que lo nombren como vector, pues todos los campos
//compartiran el nombre en un arreglo, asi es mas facil procesar posteriormente con php
   nCampo.name = 'archivos[]';
//Establecemos el tipo de campo
   nCampo.type = 'file';
   nCampo.className = 'file'
//Ahora creamos un link para poder eliminar un campo que ya no deseemos
   a = document.createElement('a');
//El link debe tener el mismo nombre de la div padre, para efectos de localizarla y eliminarla
   a.name = nDiv.id;
//Este link no debe ir a ningun lado
   a.href = '#';
//Establecemos que dispare esta funcion en click
   a.onclick = elimCamp;
//Con esto ponemos el texto del link
   a.innerHTML = '&nbsp;Quitar';
//Bien es el momento de integrar lo que hemos creado al documento,
//primero usamos la función appendChild para adicionar el campo file nuevo
   nDiv.appendChild(nCampo);
//Adicionamos el Link
   nDiv.appendChild(a);
//Ahora si recuerdan, en el html hay una div cuyo id es 'adjuntos', bien
//con esta función obtenemos una referencia a ella para usar de nuevo appendChild
//y adicionar la div que hemos creado, la cual contiene el campo file con su link de eliminación:
   container = document.getElementById('adjuntos');
   container.appendChild(nDiv);
}
//con esta función eliminamos el campo cuyo link de eliminación sea presionado
elimCamp = function (evt){
   evt = evento(evt);
   nCampo = rObj(evt);
   div = document.getElementById(nCampo.name);
   div.parentNode.removeChild(div);
}
//con esta función recuperamos una instancia del objeto que disparo el evento
rObj = function (evt) { 
   return evt.srcElement ?  evt.srcElement : evt.target;
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////


function AbrirVentanaTamano(pagina, alto, ancho)
{
	
	var iz=(screen.width-alto) / 2;
	var de=(screen.height-ancho) / 2;
	window.open(pagina,"CodigoBarras","location=1,status=1,scrollbars=1,width="+alto+",height="+ancho+",top="+de+",left="+iz+""); 
	
	//mywindow.moveTo(100,100);
}

function AbrirVentana3(pagina)
{
	var iz=(screen.width-800) / 2;
	var de=(screen.height-500) / 2;

	window.open(pagina,"","location=1,status=1,scrollbars=1,width=800,height=500,top="+de+",left="+iz+""); 
	//mywindow.moveTo(100,100);
}

function AbrirVentana4(pagina)
{
	var iz=(screen.width-800) / 2;
	var de=(screen.height-500) / 2;
	
	window.open(pagina,"","location=1,status=1,scrollbars=1,width=800,height=500,top="+iz+",left="+de+""); 
	//mywindow.moveTo(100,100);
}


function AbrirVentana2(pagina)
{
	var iz=(screen.width-950) / 2;
	var de=(screen.height-500) / 2;
	window.open(pagina,"","location=1,status=1,scrollbars=1,width=950,height=500,top="+de+",left="+iz+""); 
	//mywindow.moveTo(100,100);
}

function AbrirVentana(pagina)
{
	var iz=(screen.width-970) / 2;
	var de=(screen.height-440) / 2;
	mywindow = window.open(pagina,"","location=1,status=1,scrollbars=1,width=970,height=440,top="+de+",left="+iz+""); 
}


function SelectDetDocEnviados(pagina)
{
	var tipoDoc=$F("selTipoDocumento");
	var orgDestino=$F("txtCodOrg");
	var txtDesde=$F("txtDesde");
	var txtHasta=$F("txtHasta");
	var selEstado=$F("selEstado");
	var campo=$F("selcampo");
	var txtCampos=$F("txtCampos");

	var url = pagina;
    //parámetros necesarios para Ajax.Updater
    var params = "tipoDoc="+tipoDoc+"&orgDestino="+orgDestino+"&txtDesde="+txtDesde+"&txtHasta="+txtHasta+"&selEstado="+selEstado+"&campo="+campo+"&txtCampos="+txtCampos;
    //envía datos por Ajax
    var ajx = new Ajax.Updater("divResBusqueda",
								url,
								{method:"post",
								parameters:params});
	
}


/***********FUNCIONES PARA MOSTRAR U OCULTAR CARGA DE DATOS VACÍO*********/
function mostrardiv(){
	document.getElementById('loaderdiv').style.visibility='visible';

}
function ocultardiv(){
	document.getElementById('loaderdiv').style.visibility='hidden';
}
/***********FIN FUNCIONES PARA MOSTRAR U OCULTAR CARGA DE DATOS VACÍO*********/

/****************FUNCIONES DE IMPRESIÓN*********************************/
function printDocEnviados(org)
{
	var p1 	= org; 
	var p2	= $F("selTipoDocumento");
	var p3 	= $F("txtCodOrg");
	var p4	= $F("txtDesde");
	var p5	= $F("txtHasta");		
	var p6	= $F("selEstado");
	var p7	= $F("selcampo");
	var p8	= $F("txtCampos");
	var URLr 	= "rptdocEnviados.php?p1=" + escape(p1) + "&p2=" + escape(p2) + "&p3=" + escape(p3)+ "&p4=" + escape(p4)+ "&p5=" + escape(p5)+ "&p6=" + escape(p6) + "&p7=" + escape(p7) +  "&p8=" + escape(p8);
	window.open(URLr,'Reporte','');
}

/****************FIN DE FUNCIONES DE IMPRESIÓN*********************************/


function SelectDetDocRecibidos(pagina)
{
	var tipoDoc=$F("selTipoDocumento");
	var orgDestino=$F("txtCodOrg");
	var txtDesde=$F("txtDesde");
	var txtHasta=$F("txtHasta");
	var selEstado=$F("selEstado");
	var campo=$F("selcampo");
	var txtCampos=$F("txtCampos");

	var url = pagina;
    //parámetros necesarios para Ajax.Updater
    var params = "tipoDoc="+tipoDoc+"&orgDestino="+orgDestino+"&txtDesde="+txtDesde+"&txtHasta="+txtHasta+"&selEstado="+selEstado+"&campo="+campo+"&txtCampos="+txtCampos;
    //envía datos por Ajax
    var ajx = new Ajax.Updater("divResBusqueda",
								url,
								{method:"post",
								parameters:params});
	
}


//////////////////////////////////////////////////////////////////////////////////////////////////
//         FUNCIONES PROTOTYPE
//////////////////////////////////////////////////////////////////////////////////////////////////


/***************************************/

function UpdatePassword()
{
	//var resul = document.getElementById('divResBusqueda');
	var user=document.form1.txtusuario.value;
	var passAnte=document.frmPass.txtPassAct.value;
	var passNuevo=document.frmPass.txtNewPass.value;
	var passNuevo2=document.frmPass.txtNewPass2.value;
	var url = "cambiarPass.php";
    //parámetros necesarios para Ajax.Updater
    var params = "user="+user+"&passAnte="+passAnte+"&passNuevo="+passNuevo+"&passNuevo2="+passNuevo2;
    //envía datos por Ajax
    var ajx = new Ajax.Updater("divCambiarPass",
								url,
								{method:"post",
								parameters:params});
	//document.form1.txtpagina.value=parseInt(document.form1.txtpagina.value)+1;
}
//****************************************
// NUEVAS FUNCIONES DE DATOS
//****************************************
function mov_registros()
{
	var cod_ips  = $F("cod_ips");	
	var fecha_i	 = $F("fecha_i");	
	var fecha_f  = $F("fecha_f");
	var sel_cam  = $F("selcampo");
	var txt_cam  = $F("txtCampos");	
	var url = "mov_registros_.php";
    var params ="cod_ips="+cod_ips+"&fecha_i="+fecha_i+"&fecha_f="+fecha_f+"&sel_cam="+sel_cam+"&txt_cam="+txt_cam;	
    var ajx = new Ajax.Updater("divResBusqueda",url,{method:"post",	parameters:params});
}

function mov_registros_pag(pag)
{
	var cod_ips  =$F("cod_ips");	
	var fecha_i	 =$F("fecha_i");						
	var fecha_f  =$F("fecha_f");
	var sel_cam  =$F("selcampo");
	var txt_cam  =$F("txtCampos");	
	var pagina  =pag;	
	var url = "mov_registros_.php";
    var params ="cod_ips="+cod_ips+"&fecha_i="+fecha_i+"&fecha_f="+fecha_f+"&sel_cam="+sel_cam+"&txt_cam="+txt_cam+"&pagina="+pagina;	
    var ajx = new Ajax.Updater("divResBusqueda",url,{method:"post",	parameters:params});
}
function mov_master()
{
	var cod_ips  = $F("cod_ips");	
	var fecha_i	 = $F("fecha_i");	
	var fecha_f  = $F("fecha_f");
	var sel_cam  = $F("selcampo");
	var txt_cam  = $F("txtCampos");	
    document.getElementById('divResBusqueda').innerHTML = '<img src="images/ajax-loader.gif">';	
	var url = "mov_master_.php";
    var params ="cod_ips="+cod_ips+"&fecha_i="+fecha_i+"&fecha_f="+fecha_f+"&sel_cam="+sel_cam+"&txt_cam="+txt_cam;	
    var ajx = new Ajax.Updater("divResBusqueda",url,{method:"post",	parameters:params});
}

function mov_master_pag(pag)
{
	var cod_ips  =$F("cod_ips");	
	var fecha_i	 =$F("fecha_i");						
	var fecha_f  =$F("fecha_f");
	var sel_cam  =$F("selcampo");
	var txt_cam  =$F("txtCampos");	
    document.getElementById('divResBusqueda').innerHTML = '<img src="images/ajax-loader.gif">';		
	var pagina  =pag;	
	var url = "mov_master_.php";
    var params ="cod_ips="+cod_ips+"&fecha_i="+fecha_i+"&fecha_f="+fecha_f+"&sel_cam="+sel_cam+"&txt_cam="+txt_cam+"&pagina="+pagina;	
    var ajx = new Ajax.Updater("divResBusqueda",url,{method:"post",	parameters:params});
}

function Paginaxxxx(nropagina){
	//donde se mostrará los registros
	divContenido = document.getElementById('contenido');
	
	ajax=objetoAjax();
	//uso del medoto GET
	//indicamos el archivo que realizará el proceso de paginar
	//junto con un valor que representa el nro de pagina
	ajax.open("GET", "paginador.php?pag="+nropagina);
	divContenido.innerHTML= '<img src="loading.gif">';
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			//mostrar resultados en esta capa
			divContenido.innerHTML = ajax.responseText
		}
	}
	//como hacemos uso del metodo GET
	//colocamos null ya que enviamos 
	//el valor por la url ?pag=nropagina
	ajax.send(null)
}
