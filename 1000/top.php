<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>mehr als 1000 Worte</title>
	<link rel="STYLESHEET" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="aussehen.css">
	<script language="JavaScript" src="css/scripts.js"></script>
</head>

<body>


<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="80%" valign="top" align="right">
<?php
	$category = $_GET['category'];
	if( $category == 1 )
	{
		 $img="act_navi_de.jpg";
	}
	else if( $category == 2 )
	{
		 $img="city_navi_de.jpg";
	}
	else if( $category == 3 )
	{
		 $img="beings_navi_de.jpg";	
	}
	else if( $category == 4 )
	{
		 $img="marriage_navi_de.jpg";		
	}
	else
	{
		 $img="act_navi_de.jpg";
	}
?>
<a href="navi.php"><img id="b1" name="b1" onload="zeigen('l1',document.getElementById('b1').offsetLeft-1600+181,-1,1600,34);" src="img/act_de.jpg" alt="" border="0"><br></a>

	
	</td>		
</tr>
</table>
<script language="JavaScript" type="text/javascript">
document.write("<div id='l1'>");
document.write("<a target=\"_parent\" onfocus='if (this.blur()) { this.blur(); }' href='navi.php'><img src='img/<?php echo $img;?>' border='0'></a>");
document.write("</div>");
</script>
</body>
</html>
