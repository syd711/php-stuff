<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>mehr als 1000 Worte</title>
	<link rel="STYLESHEET" type="text/css" href="css/common.css">
</head>

<body>
<?php
	
		$dir = "pics/" . rand(1,4) . "/";
		$verz=opendir ( $dir );
		$counter = 0;
		while ($file = readdir ($verz)) 
		{  
			if( strcmp( $file, "." ) == 0 )  { continue; }
			if( strcmp( $file, ".." ) == 0 ) { continue; }
			if( $file == "thumb.db" ) { continue; }
			$prefix = substr($file, 0, 3);
			if( $prefix != "tn_" ) {continue;}
			$counter++;
		}
		closedir($verz); 
		
		$verz=opendir ( $dir );
		$compare = rand(1, $counter);
		$counter2 = 0;
		while ($file = readdir ($verz)) 
		{  
			if( strcmp( $file, "." ) == 0 )  { continue; }
			if( strcmp( $file, ".." ) == 0 ) { continue; }
			if( $file == "thumb.db" ) { continue; }			
			$prefix = substr($file, 0, 3);
			if( $prefix != "tn_" ) {continue;}			
	
			$counter2++;
			if( $counter2 == $compare ) 
			{
			?>
			<div align="center"><table height="500">
			<tr>
			<td width="1">
				<img src="img/spacer.gif" width="1" height="430" alt="" border="0">
			</td>
			<td>
<!-- 				<a href="navi.php"><img class="pic" src="<?php echo $dir . $file; ?>" alt="" border="1"></a><br> -->
				<a href="navi.php"><img class="pic" src="img/start.jpg" alt="" border="1"></a><br>
			</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><img src="img/mehr.gif" alt="" border="0"></td>
			</tr>
			</table></div>
			<?php
			break;
			}
		}
?>		

</body>
</html>