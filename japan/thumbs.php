	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title></title>
	<link rel="STYLESHEET" type="text/css" href="css/common.css">

</head>

<body marginleft="0" marginright="0" marginheight="0" marginwidth="0" bgcolor="#000000" onload="javascript:ScrollIt()">
		
	<table border="0" cellspacing="3" cellpadding="0" align="center" bgcolor="#000000" class="content1">

	<?PHP
	$folder = $_GET["folder"]; 
	if( isSet( $folder ) && $folder != "" )
	{ 
			$numberOfPicures = 0;
			//echo ":" . $folder;
			$verz=opendir ( "./" . $folder );
			  while ($file = readdir ($verz)) 
			  {  
			  	if( strcmp( $file, "." ) == 0 )  { continue; }
				if( strcmp( $file, ".." ) == 0 ) { continue; }
				if( !ereg( "ico", $file)  )    { continue; }
		
		    	$filename = substr( $file, 4  );
				$numberOfPicures++;
				
				//echo "./" . $folder . "/" . $filename;
				
				$info = getimagesize( "./" . $folder . "/" . $filename );
				?>
							
					<tr><td align="center">
					<a href="index.php?file=<?php echo $filename; ?>&folder=<?php echo $folder; ?>&id=<?php echo $numberOfPicures; ?>" target="_parent">
					<img src="<?php echo "./" . $folder . "/" . $file; ?>" alt="" border="0"></a>
					</td></tr>
		
				
				<?php
				}	
				
		}
				?>
				


	</table>

</body>
</html>