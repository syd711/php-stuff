<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>mehr als 1000 Worte</title>
	<link rel="STYLESHEET" type="text/css" href="css/common.css">
</head>

<body>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="1"><img src="img/spacer.gif" width="1" height="10" alt="" border="0"></td>	
</tr>

</table>

<img src="img/spacer.gif" width="1" height="40" alt="" border="0">


<?php $category = $_GET['category']; ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top" align="center">
		<iframe name="content" id="content" src="category.php?category=<?php echo $category; ?>" width="200" height="550" frameborder="0" marginwidth="0" maringheight="0"></iframe>
	</td>
</tr>
</table>	

</body>
</html>
