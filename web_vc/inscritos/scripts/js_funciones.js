	function js_validaCampo(control, mensaje){
   	    if(control.value==''){
		    alert('Ingrese el ' + mensaje) ;
			control.focus();
			return false;
		}
	    return true;
	}
/*Selecciona el texto de una caja de texto recibe como parametro una caja de texto*/
function js_seleccionaTexto(caja)
{
	if ( js_estaVacio(caja) == false )
	{
	caja.focus();
	caja.select();
	}
}
/*Pone el foco a una caja de texto*/
function js_ponerFoco(caja)
{

caja.focus();


}

/*Envia un mensaje en el explorador cliente*/
function js_mensaje(mensaje)
{
alert(mensaje);
}


/*Comprueba si la caja de texto esta vacia retorna verdadero o falso*/

function js_estaVacio(caja)
{
	if (caja.value.length > 0 )
	{ return false; }
	else 
	{ return true; }
	
}


/*Comprueba si es el valor es texto se pasa como parametro el texto de una caja de texto 
retorna verdadero o falso */

function js_esTexto(caja)
{

 if (js_estaVacio(caja) == false )
 {
	var b =0;
	
	for(i=0; i< caja.value.length ;i++)
	{
 	 
 		if (b!=0)break;
 	 
		if (js_esCaracterTexto(caja.value.substr(i,1))== -1 )
		{
			return false;
			b = 1;
  		}
	
	}

	return true;
	
 }else
 {
 return false;
 }
	
}

/*Comprueba si es el valor es numérico se pasa como parametro el texto de una caja de texto 
retorna verdadero o falso */

function js_esNumero(caja)
{

 if (js_estaVacio(caja) == false )
 {

var b =0;

for(i=0; i< caja.value.length ;i++)
  {
 	 
 	if (b!=0)break;
 	 
 	  	  
	  if (js_esCaracterNumero(caja.value.substr(i,1))== -1 )
	  {
		
	    return false;
		b = 1;
  	  }
	
  }
	return true;
	
 }else
  {
  return false;
  } 

	
}

/*Compueba si el email es correcto 
retrona verdadero o falso*/
function js_esEmail(caja)
{

	if((caja.value.indexOf('@')== -1 || caja.value.indexOf('.')== -1)  || caja.value.length < 2 )
	{
	return false;
	}
	else
	{
	return true;
	}
}

/*comprueba  si un caracter es de tipo texto 
retorna -1 en caso de no encontrar coincidencias o el valor del indice donde se encuentra el texto
*/

function js_esCaracterTexto(cad)
{ var caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZÁÉÍÓÚÑabcdefghijklmnopqrstuvwxyzáéíóúñü '
    return( caracteres.indexOf( cad ) ) } /*comprueba  si un caracter es de tipo Numérico 
retorna -1 en caso de no encontrar coincidencias o el valor del indice donde se encuentra el texto
*/

function js_esCaracterNumero(cad)
{ var caracteres = '0123456789'
    return( caracteres.indexOf( cad ) ) } /*Confirmación de Acción */

function js_confirmar(mensaje, url)
{
	if (confirm(mensaje) == true )
	{
	
	document.location.href = url;  
	
	}
}

	function js_abrirVentana(direccion,nombre,ancho,alto )
	{
	ventana = window.open(direccion,nombre,'toolbar=no,location=no ,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,' + ' width=' + ancho + ', height=' + alto );
	}

function confirmar(texto){
      input_box=confirm(texto);
          if (input_box==true){ 
             return true; 
          }else{
            return false;
          }
}

/************************************************************************************
 redirecciona la pagina
************************************************************************************/

function js_envia(pagina){
  window.location.href=pagina;
  return true;
}	

/***************************************************************
  validacion de texto de numeros
****************************************************************/

function js_soloCaracter(control){
 cadena=eval(control).value;
 var valid = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
 var ok = "yes";
 var temp;
 for (var i=0; i<cadena.length; i++) {
   temp = "" + cadena.substring(i, i+1);
    if (valid.indexOf(temp) == "-1") ok = "no";
 }

 if (ok == "no") {
   return false;
 }else{
   return true;  
 }
}


/************************************************************************************
   VALIDACION FECHAS
************************************************************************************/
function js_soloFecha(fecha){
var checkstr = "0123456789";
var DateValue = fecha;
var DateTemp = "";
var seperator = ".";
var day;
var month;
var year;
var leap = 0;
var err = 0;
var i;
   err = 0;
   /* Delete all chars except 0..9 */
   for (i = 0; i < DateValue.length; i++) {
	  if (checkstr.indexOf(DateValue.substr(i,1)) >= 0) {
	     DateTemp = DateTemp + DateValue.substr(i,1);
	  }
   }
   DateValue = DateTemp;
   /* Always change date to 8 digits - string*/
   /* if year is entered as 2-digit / always assume 20xx */
   if (DateValue.length == 6) {
      DateValue = DateValue.substr(0,4) + '20' + DateValue.substr(4,2); }
   if (DateValue.length != 8) {
      err = 19;}
   /* year is wrong if year = 0000 */
   year = DateValue.substr(4,4);
   if (year == 0) {
      err = 20;
   }
   /* Validation of month*/
   month = DateValue.substr(2,2);
   if ((month < 1) || (month > 12)) {
      err = 21;
   }
   /* Validation of day*/
   day = DateValue.substr(0,2);
   if (day < 1) {
     err = 22;
   }
   /* Validation leap-year / february / day */
   if ((year % 4 == 0) || (year % 100 == 0) || (year % 400 == 0)) {
      leap = 1;
   }
   if ((month == 2) && (leap == 1) && (day > 29)) {
      err = 23;
   }
   if ((month == 2) && (leap != 1) && (day > 28)) {
      err = 24;
   }
   /* Validation of other months */
   if ((day > 31) && ((month == "01") || (month == "03") || (month == "05") || (month == "07") || (month == "08") || (month == "10") || (month == "12"))) {
      err = 25;
   }
   if ((day > 30) && ((month == "04") || (month == "06") || (month == "09") || (month == "11"))) {
      err = 26;
   }
   /* if 00 ist entered, no error, deleting the entry */
   if ((day == 0) && (month == 0) && (year == 00)) {
      err = 0; day = ""; month = ""; year = ""; seperator = "";
   }
   

   if (err == 0) {
      return true;
   }
   else {
      return false;
   }
}

/************************************************************************************
 FIN  VALIDACION FECHAS
************************************************************************************/

/***************************************************************
  validacion de correo
****************************************************************/
function js_soloMail(emailStr) {
 var emailStr=emailStr.toLowerCase();
 var checkTLD=1;
 var knownDomsPat=/^(com|net|org|edu|int|mil|gov|arpa|biz|aero|name|coop|info|pro|museum)$/;
 var emailPat=/^(.+)@(.+)$/;
 var specialChars="\\(\\)><@,;:\\\\\\\"\\.\\[\\]";
 var validChars="\[^\\s" + specialChars + "\]";
 var quotedUser="(\"[^\"]*\")";
 var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/;
 var atom=validChars + '+';
 var word="(" + atom + "|" + quotedUser + ")";
 var userPat=new RegExp("^" + word + "(\\." + word + ")*$");
 var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$");
 var matchArray=emailStr.match(emailPat);

if (matchArray==null) {
 alert("Dirección de correo invalido(Verifique @ and .'s)");
 return false;
}
 var user=matchArray[1];
 var domain=matchArray[2];

 for (i=0; i<user.length; i++) {
  if (user.charCodeAt(i)>127) {
  alert("Tu usuario de correo contienen caracteres invalidos.");
  return false;
  }
 }

 for (i=0; i<domain.length; i++) {
    if (domain.charCodeAt(i)>127) {
    alert("El nombre del dominio del correo contiene caracteres invalidos.");
    return false;
    }
 }

 if (user.match(userPat)==null) {
   alert("Usuario de correo invalido.");
   return false;
 }

 var IPArray=domain.match(ipDomainPat);
 if (IPArray!=null) {
   for (var i=1;i<=4;i++) {
     if (IPArray[i]>255) {
       alert("IP de destino invalido!");
       return false;
     }
   }
 return true;
 }

 var atomPat=new RegExp("^" + atom + "$");
 var domArr=domain.split(".");
 var len=domArr.length;
 for (i=0;i<len;i++) {
     if (domArr[i].search(atomPat)==-1) {
         alert("Nombre de dominio invalido.");
         return false;
     }
 }

/* if (checkTLD && domArr[domArr.length-1].length!=2 && 
   domArr[domArr.length-1].search(knownDomsPat)==-1) {
   alert("Fin de dominio invalido (com,net,egu,gob...) ");
   return false;
 }*/

  if (len<2) {
    alert("Direccion de correo necesita un dominio");
    return false;
  }

return true;
}


/***************************************************************
  validacion de texto de numeros
****************************************************************/

function js_modal(ventana,texto,ancho,alto,left){
  return retorna=window.showModalDialog(ventana,texto,'dialogHeight:' + alto + 'px; dialogLeft:'+ left +'px;dialogWidth:' + ancho + 'px');
}

    function js_post(ACTION,ID_CLIENTE,FLAG){
        document.location.href=ACTION + '?ID_CLIENTE=' + ID_CLIENTE + '&FLAG='+FLAG;
    }


/************************************************************************************
 reemplaza una cadena por caracter "_"
************************************************************************************/

 function js_replace(cadena) {
   var out = "", flag = 0;
   for (i = 0; i < cadena.length; i++) {
     if (cadena.charAt(i) != "_") {
        out += cadena.charAt(i);
        flag = 0;
     }
     else {
      if(flag == 0) {
        out += " ";
        flag = 1;
      }
     }
   }
   return out;
 }

/************************************************************************************
 cambiar color a la fila cuando pasa el Mouse
************************************************************************************/

 function sombratd(src,color,tipo,letra){
   src.style.background=color;
   src.style.color=letra;
   src.style.cursor=tipo;
 }


/************************************************************************************
 cambiar color a la fila cuando pasa el Mouse
************************************************************************************/

 function js_sombra(src,color,tipo){
   src.bgColor=color;
   src.style.cursor=tipo;
 }

/*Fin de Confirmación de Acción*/

/***************************************************************
  validacion de caracteres
 
 funcion que valida que en el contro texto se digiten caracteres validos
  valid: cadena con los caracteres validos
  control: control a evaluar, de la forma "document.nombre_form.nombre_control"

****************************************************************/

function js_esCaracterValido(control,valid){
     var cadena='';

     for (var i=0; i<eval(control).value.length; i++) {
       temp = eval(control).value.substring(i, i+1);
       if (valid.indexOf(temp) != "-1") {
          cadena=cadena+temp;
       }
     }

 eval(control).value=cadena;
 return true;
}

