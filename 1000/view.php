<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>mehr als 1000 Worte</title>
	<link rel="STYLESHEET" type="text/css" href="css/common.css">
</head>

<?php $category = $_GET['category']; ?>
<frameset rows="29,*"  frameborder="0" marginheight="0" marginwidth="0" noresize scrolling="no">
 <frame src="top.php?category=<?php echo $category;?>" name="top" frameborder="0" marginheight="0" marginwidth="0" noresize scrolling="no">
  <frameset cols="80%,20%"  frameborder="0" marginheight="0" marginwidth="0" noresize scrolling="no">  
	<frame src="pics.php?category=<?php echo $category;?>" name="pics" frameborder="0" marginheight="0" marginwidth="0" noresize scrolling="no">  
	<frame src="thumbs.php?category=<?php echo $category;?>" name="thumbs" frameborder="0" marginheight="0" marginwidth="0" noresize scrolling="no">		
  </frameset>
</frameset>
</html>
