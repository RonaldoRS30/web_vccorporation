	//**************************************************//
	//	Menu Dinámico									//
	//**************************************************//
	//Declaro las variables para la fecha de las cookies
		var expdate = new Date ();
		expdate.setTime (expdate.getTime() + (365 * 24 * 60 * 60 * 1000));//1 año mas desde ahora
	
	//*******************************************************************************	
	//Escribe las cookies del sitio
	
		function SetCookie (name,value,expires,path,domain,secure) 
		{
			document.cookie = name + "=" + escape (value) +

			((expires) ? "; expires=" + expires.toGMTString() : "") +

			((path) ? "; path=" + path : "") +

			((domain) ? "; domain=" + domain : "") +

			((secure) ? "; secure" : "");
		
		 }
	//*******************************************************************************
	//Lee las cookies del sitio
	
		function GetCookie (name) 
		{
		  var arg = name + "=";

		  var alen = arg.length;

		  var clen = document.cookie.length;

		  var i = 0;

		  while (i < clen) 
		  {
		    var j = i + alen;

		    if (document.cookie.substring(i, j) == arg)

		      return getCookieVal (j);

		    i = document.cookie.indexOf(" ", i) + 1;

		    if (i == 0) break; 

		  }

		  return "block";

		}
		
		function getCookieVal (offset) 
		{
		  var endstr = document.cookie.indexOf (";", offset);

		 if (endstr == -1)

		   endstr = document.cookie.length;
	
		 return unescape(document.cookie.substring(offset, endstr));

		}
	//*******************************************************************************	
	//Carga el estado de las cajitas
	
	
	function LoadBoxes()
	{
		var colCajas=document.getElementsByTagName("DIV")
		for (i=0;i<=colCajas.length-1;i++) 
		{
			if (colCajas[i].id.substring(0,4)=='Caja')
			{
					CookieVal=GetCookie(colCajas[i].id)
					BoxManager(document.getElementById('Img' + colCajas[i].id.substring(4,colCajas[i].id.length)),colCajas[i].id,CookieVal)
			}
		}
	}
	//*******************************************************************************
	//Cambia el estilo en los textos de los botones con o sin linea

		function UnderLink(Obj)
		{	
			if(Obj.style.textDecoration=="underline")
			{
				Obj.style.textDecoration="none";
			}
			else
			{	
				Obj.style.textDecoration="underline";
			}
		}
	//*******************************************************************************
	//Cambia el estilo en los textos con otra clase
		function OnText(Obj,Clase,onClase)
		{	 
	
			if (Obj.className==Clase)
			{
				Obj.className=onClase;
				
			}
			else
			{	
				Obj.className=Clase;
			}
		}
	//*******************************************************************************	
	//Abre y cierra las cajitas
		function BoxManager(Obj,Box,BoxDisplay)
		{				
			if (BoxDisplay!="")
			{	
				if (BoxDisplay=="none")
				{					    								    
					if (Obj.className.substr(11,2)=="Up" || Obj.className.substr(16,2)=="Up")
					{
						var Aux=Obj.className.substr(13)
												
						if (Obj.className.substr(13,7) =="Lateral")
						{
							Obj.className="FlechaCajasDownLateral"
						}else{
						    if(Obj.className.substr(16,2)!="Up")
							   Obj.className="FlechaCajasDown" + Aux;
						}							
						
						if (Obj.className.substr(13,7) =="LatITBC")
						{
							Obj.className="FlechaCajasDownLatITBC"
						}
						if (Obj.className.substr(11,7)=="BarraUp")
						{
							Obj.className="FlechaCajasBarraDown"
							
						}
											
					}
					else
					{ 
						if (Obj.className.substr(11,4)=="Down" || Obj.className.substr(16,4)=="Down")
						{
							var Aux=Obj.className.substr(15)
							if (Obj.className.substr(15,7) =="Lateral")
							{
								Obj.className="FlechaCajasUpLateral"
							}else{
							    if(Obj.className.substr(16,4)!="Down")
								   Obj.className="FlechaCajasUp" + Aux;
							}
							if (Obj.className.substr(15,7) =="LatITBC")
							{
								Obj.className="FlechaCajasUpLatITBC"
							}
							if (Obj.className.substr(11,9)=="BarraDown")
							{
								Obj.className="FlechaCajasBarraUp"
							}
						}
					}
				}
			
				document.getElementById(Box).style.display=BoxDisplay;
				
			}
			else
			{
				if(document.getElementById(Box).style.display=="")
				{
					document.getElementById(Box).style.display="block"
				}
			
				if (document.getElementById(Box).style.display=="block")
				{	
					if (Obj.className.substr(11,2) =="Up" || Obj.className.substr(16,2)=="Up")
					{
						var Aux=Obj.className.substr(13)
						if (Obj.className.substr(13,7) =="Lateral")
						{
							Obj.className="FlechaCajasDownLateral"
						}else{
						    if(Obj.className.substr(16,2)!="Up")
							   Obj.className="FlechaCajasDown" + Aux;
						}						
						if (Obj.className.substr(13,7) =="LatITBC")
						{
							Obj.className="FlechaCajasDownLatITBC"
						}
						if (Obj.className.substr(11,7)=="BarraUp")
						{
							Obj.className="FlechaCajasBarraDown"
						}						
						
					}
					else
					{					    
						if (Obj.className.substr(11,4) =="Down" || Obj.className.substr(16,4)=="Down")
						{
							var Aux=Obj.className.substr(15)
							if (Obj.className.substr(15,7) =="Lateral")
							{
								Obj.className="FlechaCajasUpLateral"
							}else{
							    if(Obj.className.substr(16,4)!="Down")
								   Obj.className="FlechaCajasUp" + Aux;
							}
							if (Obj.className.substr(15,7) =="LatITBC")
							{
								Obj.className="FlechaCajasUpLatITBC"
							}		
							if (Obj.className.substr(11,9)=="BarraDown")
							{
								Obj.className="FlechaCajasBarraUp"
							}												
						}
					}

					document.getElementById(Box).style.display="none";
					SetCookie(Box,document.getElementById(Box).style.display,expdate,'/',null,false)
				}
				else
				{
					if (Obj.className.substr(11,2) =="Up" || Obj.className.substr(16,2)=="Up")
					{
						var Aux=Obj.className.substr(13)
						if (Obj.className.substr(13,7) =="Lateral")
						{
							Obj.className="FlechaCajasDownLateral"
						}else{
						    if(Obj.className.substr(16,2)!="Up")
							   Obj.className="FlechaCajasDown" + Aux;
						}						
						if (Obj.className.substr(13,7) =="LatITBC")
						{
							Obj.className="FlechaCajasDownLatITBC"
						}
						if (Obj.className.substr(11,7)=="BarraUp")
						{
							Obj.className="FlechaCajasBarraDown"
						}						
					}
					else
					{
						
						if (Obj.className.substr(11,4) =="Down" || Obj.className.substr(16,4)=="Down")
						{
							var Aux=Obj.className.substr(15)
							if (Obj.className.substr(15,7) =="Lateral")
							{
								Obj.className="FlechaCajasUpLateral"
							}else{
							    if(Obj.className.substr(16,4)!="Down")
								   Obj.className="FlechaCajasUp" + Aux;
							}															
							if (Obj.className.substr(15,7) =="LatITBC")
							{
								Obj.className="FlechaCajasUpLatITBC"
							}
							if (Obj.className.substr(11,9)=="BarraDown")
							{
								Obj.className="FlechaCajasBarraUp"
							}		
											
						}
					}
					
					document.getElementById(Box).style.display="block";
					SetCookie(Box,document.getElementById(Box).style.display,expdate,'/',null,false)
				}
		   }
		}
		
