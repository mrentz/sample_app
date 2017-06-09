<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<HTML>
<HEAD>
<TITLE></TITLE>
<FORM>
    <SELECT onChange="document.bgColor=this.options[this.selectedIndex].value">
        <OPTION VALUE="40E0D0"> Torquoise
        <OPTION VALUE="2E8B57"> Sea Green
        <OPTION VALUE="87CEEB"> Sky Blue
        <OPTION VALUE="F4A460"> Sandy Brown
        <OPTION VALUE="FFF0F5"> Lavender Blush
        <OPTION VALUE="FF1493"> Deep Pink
        <OPTION VALUE="FFFFFF" SELECTED> White
    </SELECT>
</FORM>

<form name="bgcolorForm">Try it now: 
<select onChange="if(this.selectedIndex!=0)
document.bgColor=this.options[this.selectedIndex].value">
<option value="choose">set background color    
<option value="FFFFCC">light yellow
<option value="CCFFFF">light blue
<option value="CCFFCC">light green
<option value="CCCCCC">gray
<option value="FFFFFF">white
</select></form>

<SCRIPT LANGUAGE="JavaScript"><!--

// preload images:
if (document.images) {
camera_off = new Image(42,44); camera_off.src = "images/gifs/camera_off.gif";
camera_on = new Image(42,44); camera_on.src = "images/gifs/camera_on.gif";
birds = new Image(12,14); birds.src = "images/gifs/birds.gif"; 
cangoose = new Image(12,14); cangoose.src = "images/gifs//cangoose.gif";
cockatoo = new Image(12,14); cockatoo.src = "images/gifs//cockatoo.gif";
pigeon = new Image(12,14); pigeon.src = "images/gifs//pigeon.gif";
stork = new Image(12,14); stork.src = "images/gifs//stork.gif";
swan = new Image(12,14); swan.src = "images/gifs//swan.gif";
toucan = new Image(12,14); toucan.src = "images/gifs//toucan.gif";
}

function hiLite(imgName,imgObjName) {
if (document.images) {
  document.images[imgName].src = eval(imgObjName + ".src");
}}

function nada() {
}

//-->

</SCRIPT>

</HEAD>
<BODY>

<A HREF="javascript:nada()" 
   onMouseOver="hiLite('img01','camera_on')"
   onMouseOut="hiLite('img01','camera_off')">
<IMG SRC="images/gifs/flash.gif" WIDTH="64" HEIGHT="16" BORDER="0" 
   ALT="Flash"></A>
<IMG SRC="images/gifs/camera_off.gif" WIDTH="42" HEIGHT="44" BORDER="0" 
   ALT="camera" NAME="img01">

</BODY>
</HTML>


</SCRIPT>

</HEAD>
<BODY>

<TABLE ALIGN = "center">
<TR>
<TD> <div style="text-align: center;">
<A HREF="javascript:nada()" 
   onMouseOver="hiLite('img02','cangoose')"
   onMouseOut="hiLite('img02','birds')">Canadian Goose</A>
 <br>

<A HREF="javascript:nada()" 
   onMouseOver="hiLite('img02','cockatoo')"
   onMouseOut="hiLite('img02','birds')">cockatoo</A>
<br>

<A HREF="javascript:nada()" 
   onMouseOver="hiLite('img02','pigeon')"
   onMouseOut="hiLite('img02','birds')">pigeon</A>
<br>

<A HREF="javascript:nada()" 
   onMouseOver="hiLite('img02','stork')"
   onMouseOut="hiLite('img02','birds')">stork</A>
<br>

<A HREF="javascript:nada()" 
   onMouseOver="hiLite('img02','swan')"
   onMouseOut="hiLite('img02','birds')">swan</A>
<br>

<A HREF="javascript:nada()" 
   onMouseOver="hiLite('img02','toucan')"
   onMouseOut="hiLite('img02','birds')">toucan</A>
<br>
</TD>
<TD>
  <IMG SRC="images/gifs/birds.gif" WIDTH="150" HEIGHT="120" BORDER="0" 
   ALT="" NAME="img02">
</TD>
</TR>
</TABLE>
<br>



</BODY>
</HTML>


<SCRIPT LANGUAGE="JavaScript"><!--

function hiLite2(imgName,imgSrc) {
if (document.images) {
  document.images[imgName].src = imgSrc
}}

//--></SCRIPT>

</HEAD>
<BODY>

<A HREF="first_html.htm" 
   onMouseOver="hiLite2('img03','images/gifs/anihome_up.gif')"
   onMouseOut="hiLite2('img03','images/gifs/anihome_down.gif')">
   <IMG SRC="images/gifs/anihome_static.gif" WIDTH="70" HEIGHT="70" 
BORDER="0" ALT="Home" NAME="img03"></A>
<p>
<p>


</BODY>
</HTML>
