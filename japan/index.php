<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<?php
    $head = "Japan";
	$folder = $_GET["folder"];
	if( isSet( $folder ) ) 
	{ 
		if( $folder == "aso" ) $head = "Mt. Aso (Kyushu)";
		if( $folder == "abashiri" ) $head = "Abashiri (Hokkaido)";
		if( $folder == "expo" ) $head = "Expo 2005 in Aichi (Honshu)";		
		if( $folder == "hakodate" ) $head = "Hakodate (Hokkaido)";				
		if( $folder == "himeji" ) $head = "Himeji (Honshu)";			
		if( $folder == "hiroshima" ) $head = "Hiroshima (Honshu)";			
		if( $folder == "kumamoto" ) $head = "Kumamoto (Kyushu)";			
		if( $folder == "kyoto" ) $head = "Kyoto (Honshu)";			
		if( $folder == "matushima" ) $head = "Matushima (Honshu)";					
		if( $folder == "miyajima" ) $head = "Miyajima (Miyajima)";					
		if( $folder == "morioka" ) $head = "Morioka (Honshu)";
		if( $folder == "muroran" ) $head = "Muroran (Hokkaido)";						
		if( $folder == "nara" ) $head = "Nara (Honshu)";		
		if( $folder == "nikko" ) $head = "Nikko (Honshu)";		
		if( $folder == "osaka" ) $head = "Osaka (Honshu)";		
		if( $folder == "park" ) $head = "Hokkaido";		
		if( $folder == "sapporo" ) $head = "Sapporo (Hokkaido)";		
		if( $folder == "sendai" ) $head = "Sendai (Honshu)";		
		if( $folder == "shodoshima" ) $head = "Shodoshima";				
		if( $folder == "takamatsu" ) $head = "Takamatsu (Honshu)";						
		if( $folder == "tokyo" ) $head = "Tokyo";						
	}
?>
	<title>Japan 20.05.2005 - 13.06.2005 <?php echo $head; ?></title>
	<link rel="STYLESHEET" type="text/css" href="css/common.css">
</head>
<map name="japan">
<area alt="Hokkaido" shape="circle" coords="340,87,18" href="index.php?folder=park">
<area alt="Sapporo" shape="circle" coords="294,93,8" href="index.php?folder=sapporo">
<area alt="Muroran" shape="circle" coords="286,106,9" href="index.php?folder=muroran">
<area alt="Hakodate" shape="CIRCLE" coords="267,123,15" href="index.php?folder=hakodate">
<area alt="Morioka" shape="circle" coords="293,193,16" href="index.php?folder=morioka">
<area alt="Sendai" shape="circle" coords="294,229,13" href="index.php?folder=sendai">
<area alt="Tokyo" shape="CIRCLE" coords="281,298,12" href="index.php?folder=tokyo">
<area alt="Mt. Aso" shape="circle" coords="80,386,8" href="index.php?folder=aso">
<!--<area alt="Miyajima" shape="circle" coords="58,405,11" href="index.php?folder=miyajima">-->
<area alt="Kumamoto" shape="circle" coords="60,383,9" href="index.php?folder=kumamoto">
<area alt="Hiroshima" shape="circle" coords="103,339,7" href="index.php?folder=hiroshima">
<area alt="Miyajima" shape="circle" coords="111,354,9" href="index.php?folder=miyajima">
<area alt="Shodoshima" shape="circle" coords="160,342,8" href="index.php?folder=shodoshima">
<area alt="Takamatsu" shape="circle" coords="146,346,8" href="index.php?folder=takamatsu">
<area alt="Osaka" shape="circle" coords="176,335,9" href="index.php?folder=osaka">
<area alt="Expo 2005" shape="circle" coords="160,323,8" href="index.php?folder=expo">
<area alt="Kyoto" shape="circle" coords="181,327,9" href="index.php?folder=kyoto">
<area alt="Nikko" shape="circle" coords="267,279,10" href="index.php?folder=nikko">
<area alt="Abashiri" shape="circle" coords="331,56,12" href="index.php?folder=abashiri">
<area alt="Nara" shape="circle" coords="214,321,10" href="index.php?folder=nara">
</map>

<body bgcolor="#000000" class="content1">

<div align="center"><br>&nbsp;<br>&nbsp;<br>
<table cellpadding="0" cellspacing="0" class="table">
<tr>
	<td>

	
	
	<table cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3" bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
	</tr>
	
	<tr>
		<td bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
		<td>
			<table cellpadding="0">
				<tr>
					<td><img src="img/japan.gif" width="438" height="456" alt="" border="0" usemap="#japan"><br></td>
				</tr>
			</table>
		</td>
		<td bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
	</tr>
	
	<tr>
		<td colspan="3" bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
	</tr>
	
	</table>

	
	
	</td>
	<td><img src="img/spacer.gif" width="50" height="1" alt="" border="0"><br></td>
	
	
	<td>
	<table cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3" bgcolor="#CCCCCC"><img src="img/spacer.gif" width="580" height="1" alt="" border="0"><br></td>
	</tr>
	
	<tr>
		<td bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="460" alt="" border="0"><br></td>
		<td valign="top">
			<table cellpadding="0" width="578" cellspacing="0" border="0">
				<tr>
					<td align="right" class="headline"><?php if( isSet( $id ) ) { ?><?php echo $head; ?><?php } ?><img src="img/spacer.gif" width="10" height="20" alt="" border="0"><br></td>
				</tr>
				<tr>
					<td bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
				</tr>				
				<tr>
					<td>
						<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td width="110"><iframe name="thumbs" src="thumbs.php?folder=<?php echo $folder;?>" frameborder="0" marginheight="0" marginwidth="0" width="110" height="400"></iframe></td>
							<td width="1" bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="440" alt="" border="0"><br></td>
							<td width="478" valign="top" bgcolor="#333333">
							<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table">
								<tr>
									<td colspan="3"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
								</tr>

										<tr bgcolor="#000000">
											<td><img src="img/spacer.gif" width="1" height="390" alt="" border="0"><br></td>
											<td align="center">
												<table cellpadding="0">
													<tr>
														<td>
														    
															<?php 
															$file = $_GET["file"];
															$id = $_GET["id"];
															if( isSet( $file ) ) { ?>
															<img src="./<?php echo $folder; ?>/<?php echo $file; ?>" alt="" border="0">
															<?php } else if( isSet( $id ) ) 
															{													
																$numberOfPicures = 0;
																//echo ":" . $folder;
																$verz=opendir ( "./" . $folder );
																  while ($file = readdir ($verz)) 
																  {  
																  	if( strcmp( $file, "." ) == 0 )  { continue; }
																	if( strcmp( $file, ".." ) == 0 ) { continue; }
																	//echo "./" . $folder . "/" . $file;
																	if( !ereg( "ico", $file)  )    { continue; }
															
															    	$file = substr( $file, 4 );
																	$numberOfPicures++;
																	
																	if( $numberOfPicures < $id ) continue;
																	
																	//
																	
																	?>
																	<img src="./<?php echo $folder; ?>/<?php echo $file; ?>" alt="" border="0">
																<?php
																	break;
																 }
														   }?>
										
														</td>
													</tr>
												</table>
											</td>
											<td><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
										</tr>								
								
								<tr>
									<td colspan="3"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
								</tr>	
								
								<tr>
									<td colspan="3" bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
								</tr>		
								
								<tr>
									<td colspan="3" height="100%" bgcolor="#666666" align="center">
									<?php if( isSet($folder) ) { ?>
									<?php $pos = $id-1; ?>							
									<?php if( $pos <= 0 ) $pos = 1; ?>		
									<a class="innavi" href="index.php?folder=<?php echo $folder;?>&id=<?php echo ($pos); ?>">&lt;&lt; zurück</a>									
									<?php $pos = $id+1; ?>&nbsp;&nbsp;&nbsp;&nbsp;
									<a class="innavi" href="index.php?folder=<?php echo $folder;?>&id=<?php echo ($pos); ?>">weiter >></a>
									<?php }?>
									<br></td>
								</tr>			
								
								<tr>
									<td colspan="3" bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
								</tr>																
								
								<tr>
									<td colspan="3" height="10" bgcolor="#333333"><br></td>
								</tr>																																	
								
							</table>
							</td>
						</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<td bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
	</tr>
	
	<tr>
		<td colspan="3" bgcolor="#CCCCCC"><img src="img/spacer.gif" width="1" height="1" alt="" border="0"><br></td>
	</tr>
	
	</table>	
	</td>
</tr>
</table>
</div>

</body>
</html>
