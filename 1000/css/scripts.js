
function zeigen(idname,xpo,ypo,breite,hoehe) 
{
	var ns4, ie4, ns6, posx, posy, xpos, ypos, px, py, breite, hoehe;
	ie4 = document.all;
	ns6 = document.getElementById && !document.all;
	if (ns6){ 
		if(document.getElementById(idname)) 
		{
			document.getElementById(idname).style.left = xpo;
			document.getElementById(idname).style.top = ypo;
			if (breite > 0) document.getElementById(idname).style.width = breite;
			if (hoehe > 0) document.getElementById(idname).style.height = hoehe;
			document.getElementById(idname).style.visibility = "visible";
		}
	}
	if (ie4){
		if(document.all[idname]) {
			document.all[idname].style.left = xpo;
			document.all[idname].style.top = ypo;
			if (breite > 0) document.all[idname].style.width = breite;
			if (hoehe > 0) document.all[idname].style.height = hoehe;
			document.all[idname].style.visibility = "visible"; 
		}
	}
}
function verstecken(idname) 
{
	var ns4, ie4, ns6, posx, posy, xpos, ypos, px, py, breite, hoehe;
	ie4 = document.all;
	ns6 = document.getElementById && !document.all;
	if (ie4) document.all[idname].style.visibility = "hidden"; 
	if (ns6) document.getElementById(idname).style.visibility = "hidden";
}
