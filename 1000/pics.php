<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>mehr als 1000 Worte</title>
	<link rel="STYLESHEET" type="text/css" href="css/common.css">
</head>

<script type="text/javascript">
   var myTimeout;   
   function scrollPage(dir) {
      dir == 'down' ? frames['inhalt'].scrollBy(0,10) : frames['inhalt'].scrollBy(0,-10);
      myTimeout = setTimeout("scrollPage('" + dir + "')", 50);
   }
</script> 

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">

<tr valign="top">
	<td width="100%" valign="top" align="center">

			  <?php
			    $showPrev = 0;
				$showNext = 0;
				$category = $_GET['category'];
				$id 	  = $_GET['id'];
				$dir = "pics/" . $category . "/";
                $i = 0;
				$verz=opendir ( $dir );
				while ($file = readdir ($verz)) 
				{  
					if( strcmp( $file, "." ) == 0 )  { continue; }
					if( strcmp( $file, ".." ) == 0 ) { continue; }
					if( $file == "thumb.db" ) { continue; }
				
					$prefix = substr($file, 0, 3);
					if( $prefix != "tn_" ) {continue;}
					$files[$i] = $file;
					$i++;
				}
				closedir($verz); 
				
				natsort($files);
				
				$counter = 0;
				$selected = 0;
				while (list(, $value) = each ($files)) 
				{
			    	$counter++;
					if( (!isSet( $id ) || $counter == $id) && !isSet($pic) ) 
					{
						$pic = $value;
						$selected = $counter;
					}
				}
				
				if( $selected != 1 ) 
				{
				 	$showPrev = 1; 
				}
				if( $selected < $counter ) 
				{
				 	$showNext = 1; 
				}	
				?>
	
			<table height="500" border="0">
			<tr>
				<td colspan="4"><img src="img/spacer.gif" width="600" height="1" alt="" border="0"></td>
			</tr>
			<tr>
			<td width="1"><img src="img/spacer.gif" width="1" height="510" alt="" border="0"></td>
			<td width="49" align="center">
				<?php if( $showPrev == 1 ) { ?><a href="pics.php?id=<?php echo $selected-1; ?>&category=<?php echo $category;?>"><img src="img/left.jpg" width="26" height="26" alt="" border="0"></a><?php } ?>
			</td>
			<td width="500" align="center">
				<img class="pic" src="<?php echo $dir; ?><?php echo $pic; ?>" alt="" border="1"></a><br>				

			</td>
			<td width="50" align="center">
				<?php if( $showNext == 1 ) { ?><a href="pics.php?id=<?php echo $selected+1; ?>&category=<?php echo $category;?>"><img src="img/right.jpg" width="26" height="26" alt="" border="0"></a><?php } ?>
			</td>
			</tr>
			<tr>
				<td colspan="4"><a target="_parent" href="navi.php"><img src="img/back.jpg" alt="zurück" border="0"><br></a></td>
			</tr>
			</table>
			
	
	
	</td>
	<td><img src="img/wspacer.gif" width="1" height="1200" alt="" border="0"></td>	
</tr>
</table>

</body>
</html>