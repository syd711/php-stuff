<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>mehr als 1000 Worte</title>
	<link rel="STYLESHEET" type="text/css" href="css/common.css">
</head>



<style type="text/css">  
#divUpControl{position:absolute; width:100; left:40; top:0; z-index:1; text-align: center} 
#divDownControl{position:absolute; width:100; left:40; top:400; z-index:1; text-align: center} 
#divContainer{position:absolute; width:200; height:350; overflow:hidden; top:30; left:35; clip:rect(0,220,490,0); visibility:hidden} 
#divContent{position:absolute; top:0; left:0} 
</style>
<script language="JavaScript">// begin absolutely positioned scrollable area object scripts 
/*
Extension developed by David G. Miles (www.z3roadster.net/dreamweaver)
Original Scrollable Area code developed by Thomas Brattli 
To add more shock to your site, visit www.DHTML Shock.com
*/

function verifyCompatibleBrowser(){ 
    this.ver=navigator.appVersion 
    this.dom=document.getElementById?1:0 
    this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom)?1:0; 
    this.ie4=(document.all && !this.dom)?1:0; 
    this.ns5=(this.dom && parseInt(this.ver) >= 5) ?1:0; 
 
    this.ns4=(document.layers && !this.dom)?1:0; 
    this.bw=(this.ie5 || this.ie4 || this.ns4 || this.ns5) 
    return this 
} 
bw=new verifyCompatibleBrowser() 
 
 
var speed=30 
 
var loop, timer 
 
function ConstructObject(obj,nest){ 
    nest=(!nest) ? '':'document.'+nest+'.' 
    this.el=bw.dom?document.getElementById(obj):bw.ie4?document.all[obj]:bw.ns4?eval(nest+'document.'+obj):0; 
    this.css=bw.dom?document.getElementById(obj).style:bw.ie4?document.all[obj].style:bw.ns4?eval(nest+'document.'+obj):0; 
    this.scrollHeight=bw.ns4?this.css.document.height:this.el.offsetHeight 
    this.clipHeight=bw.ns4?this.css.clip.height:this.el.offsetHeight 
    this.up=MoveAreaUp;this.down=MoveAreaDown; 
    this.MoveArea=MoveArea; this.x; this.y; 
    this.obj = obj + "Object" 
    eval(this.obj + "=this") 
    return this 
} 
function MoveArea(x,y){ 
    this.x=x;this.y=y 
    this.css.left=this.x 
    this.css.top=this.y 
} 
 
function MoveAreaDown(move){ 
	if(this.y>-this.scrollHeight+objContainer.clipHeight){ 
    this.MoveArea(0,this.y-move) 
    if(loop) setTimeout(this.obj+".down("+move+")",speed) 
	} 
} 
function MoveAreaUp(move){ 
	if(this.y<0){ 
    this.MoveArea(0,this.y-move) 
    if(loop) setTimeout(this.obj+".up("+move+")",speed) 
	} 
} 
 
function PerformScroll(speed){ 
	if(initialised){ 
		loop=true; 
		if(speed>0) objScroller.down(speed) 
		else objScroller.up(speed) 
	} 
} 
 
function CeaseScroll(){ 
    loop=false 
    if(timer) clearTimeout(timer) 
} 
var initialised; 
function InitialiseScrollableArea(){ 
    objContainer=new ConstructObject('divContainer') 
    objScroller=new ConstructObject('divContent','divContainer') 
    objScroller.MoveArea(0,0) 
    objContainer.css.visibility='visible' 
    initialised=true; 
} 
// end absolutely positioned scrollable area object scripts 

</script>

<body bgcolor="999999" onLoad="InitialiseScrollableArea()">

<!-- begin absolutely positioned scrollable area object--> 
<div id="divUpControl"> <a href="javascript:;" onMouseOver="PerformScroll(-7)" onMouseOut="CeaseScroll()"><img src="img/top.jpg" width="16" height="16" alt="" border="0"><br></a> </div>
<div id="divDownControl"> <a href="javascript:;" onMouseOver="PerformScroll(7)" onMouseOut="CeaseScroll()"><img src="img/bottom.jpg" width="16" height="16" alt="" border="0"><br></a> </div>
<div id="divContainer"> 
  <div id="divContent">
  
  <?php
   	    $category = $_GET['category']; 
		if( !isSet($category) ) 	
		{
			$category = 3;
		}

		$dir = "pics/" . $category . "/";
		$verz=opendir ( $dir );
        $i=0;
		while ($file = readdir ($verz)) 
		{  
			if( strcmp( $file, "." ) == 0 )  { continue; }
			if( strcmp( $file, ".." ) == 0 ) { continue; }
			if( $file == "thumb.db" ) { continue; }	
			$prefix = substr($file, 0, 3);
			if( $prefix != "sn_" ) {continue;}
			
			$files[$i] = $file;
			$i++;
		}
		closedir($verz); 
		
		natsort($files);
		
		$counter = 0;
		while (list(, $value) = each ($files)) 
		{
			$counter++;
		    ?>
			<a href="pics.php?id=<?php echo $counter; ?>&category=<?php echo $category;?>" target="pics"><img class="pic" src="<?php echo $dir.$value; ?>" alt="" border="1"></a><br> 		
			<br>
			<?php
		}
?>		

			
	

  </div>
</div>
<!-- end absolutely positioned scrollable area object --> 


</body>
</html>
