var heading = "#000000";
var bgcolor1 = "#bbddff";
var bgcolor2 = "#4F9DB7";
var font1 = "white";
var font2 = "#000000";
var font3 = "#ffdd00";
var height = "180";
var width = "506";
var width1 = "70";


function DaysInMonth(Y, M) {
    with (new Date(Y, M, 1, 12)) {
        setDate(0);
        return getDate();
    }
}

function setcal(mon,yea)
{
	mon=mon+1;
	var days = DaysInMonth(yea,mon);
	var D = new Date(mon+"/01/"+yea);
	var day = D.getDay();
		
	var ar = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
	var df = ar[mon-1];
	df = df+", "+D.getFullYear();
	document.xxx.ddd.value = df;

	var ddf = document.calen.length;
	var ss = 1;

	if(day == 0)
	{
		for(var xx=0; xx<6; xx++)
			document.calen[xx].value = "";

		for(var xx=6; xx<day+days-1; xx++)
			document.calen[xx].value = ss++;
	}
	
	else
	{
		for(var xx=0; xx<ddf; xx++)
			document.calen[xx].value = "";

		for(var xx=day-1; xx<day+days-1; xx++)
			document.calen[xx].value = ss++;
	}
}

var exd = new Date();
var monthe = exd.getMonth();
var yeare = exd.getFullYear();

var ar1 = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var df1 = ar1[monthe];
df1 = df1+" "+exd.getDate()+", "+exd.getFullYear();


function prev()
{
	monthe = monthe-1;
	if(monthe < 0)
	{
		yeare = yeare-1;	
		monthe = 11;
	}
	setcal(monthe, yeare);
	return false;
}

function next()
{
	monthe = monthe+1;
	if(monthe > 11)
	{
		yeare = yeare+1;	
		monthe = 0;
	}
	setcal(monthe, yeare);
	return false;
}

function today()
{
	monthe = exd.getMonth();
	yeare = exd.getFullYear();	
	setcal(monthe, yeare);
	return false;
}

function thismon()
{
	//yeare = yeare+1900;
	setcal(monthe, yeare);
}

document.write("<table width="+width+" height="+height+" bgcolor=black border=0 cellpadding=0 cellspacing=2 \
		style=\"font-family: arial, verdana; color: "+font1+"; font-size: 12px;\" bgcolor="+bgcolor1+" border=1>\
			<tr bgcolor="+heading+" align=center><td colspan=7>\
				<table width=100% align=center style=\"color: "+font2+"; font-size: 12px;\" align=center>\
				<tr align=center><td><a style=\"cursor: pointer;\" onclick=\"return prev()\"><font color=white>Prev</font></a></td>\
				<td><form name=xxx style=\"margin: 0px; padding: 0px;\"><input readonly size=32 style=\"font-size: 12px; \
				font-weight: bold; text-align: center; font-family: san-serif, verdana, arial;\" type=text name=ddd></form></td>\
				<td><a style=\"cursor: pointer;\" onclick=\"return next()\"><font color=white>Next</font></a></td></tr></table>\
			</td></tr>\
			<tr bgcolor="+bgcolor2+" align=center><td width="+width1+">Monday</td><td width="+width1+">Tuesday</td><td width="+width1+">Wednesday</td><td width="+width1+">Thursday</td><td width="+width1+">Friday</td><td width="+width1+">Saturday</td><td width="+width1+">Sunday</td></tr>");
document.write("<form name=calen style=\"border: 0px; padding:0px;\">");
for(var xx=0; xx<6; xx++)
{
	document.write("<tr>");
	for(var cc=0; cc<7; cc++){
		var dd = xx*7+cc;
		document.write("<td align=center bgcolor=#bbddff><input style=\"background-color: "+bgcolor1+"; color: "+font2+"; border: 0px; \" name=x"+dd+" readonly size=1></td>");
	}
	document.write("</tr>");
}
document.write("<tr><td align=center colspan=7><a style=\"cursor: pointer;\" onclick=\"return today()\"><font color=white>Today - "+df1+"</font></a></td></tr>");
document.write("</form></table>");

thismon();