<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php require("commands.php"); ?>
<?php include("config.inc.php"); ?>
<html>
<head>
<meta http-equiv="CONTENT-type" content="text/html; charset=iso-8859-1">
<title>Whiskyfreunde Oelde</title>
<meta name="keywords" content="Whiskyfreunde, Whiskeyfreunde, Whisky, Whiskey, Oelde">
<meta name="description" content="Whiskyfreunde Oelde">
<link rel=stylesheet type="text/css" href="css/main.css">
<link rel="shortcut icon" href="favicon.ico" type="image/ico">
<script src="js/popup.js" type="text/javascript"></script>
</head>
<body>


<?php if ($page == "overview") { ?>
<!-- to make the bots happy -->
<div id="infotxt">
	Whiskyfreunde, Whiskeyfreunde, Whisky, Whiskys, Whiskey, Oelde
</div>
<?php } ?>

<!-- background wrapper -->
<table id="sitebody" cellpadding="0" cellspacing="0">
	<tr>
		<td>

<!-- basetable -->
<table id="basetable" cellpadding="0" cellspacing="0">
	
	<!-- topic box -->
<?php
	$cms = $_GET['cms'];
	$page = $_GET['page'];
	$index = $_GET['index'];

	if( $page == "" )
	{
		$page = "overview";
	}
	if( $category == "" )
	{
		$category = "overview";
	}

	if (!empty($index))
	{
	  if (substr ($index, 0, 1) == "-" || $index == "0" || $index == "1")
	    $index = "";
	}
        $template = "inc/" . $page . $index . ".inc";

	if ($cms != 1)
	{
?>         <tr>
             <td id="topbox" class="topbox_logo" colspan="3">&nbsp;</td>
           </tr>
           <tr>
             <td id="belowtopbox" colspan="3"></td>
           </tr>
	   <tr>
<?php      // hide menu for HOME
 	   if ($page != "home")
	   { ?>
             <td id="submenu">
               <?php echo markMenu ($selectedParent, $page) ?>
             </td>
<?php      }
	 } 
         if ( $cms=="1" && isSet($login) && $login==LOGIN && $password==PASSWORD && $page!="fotos" )
         { 
?>
           <td id="content"><center>
			   <h2>Seite bearbeiten</h2>
           <form action="index.php?page=<?php echo $page; ?>&changePage=<?php echo $page; ?>&index=<?php echo $index; ?>" method="post">
             <textarea wrap="off" name="templateContent" cols="90" rows="30"><?PHP
             include($template);
             ?></textarea><br>
             &nbsp;<br>
             <input type="submit" value="       save        ">
           </form>
           </center></td>
	   <tr>
<?php 	 }
		 else if ( $cms=="1" && isSet($login) && $login==LOGIN && $password==PASSWORD && $page=="fotos" || isSet($_FILES['imagefile']['tmp_name'] ))
         {
			 include("inc/upload.php");
		 }
		 else if( $cms=="1")
		 {
		 	?>
			<td id="content"><center>
           
		   <h2>Login</h2>
		    <form action="index.php?page=<?php echo $page; ?>&cms=1" method="post">
			<table>
			    <?php if( isSet($login) || isSet($password) ) {?>
				<tr><td colspan="2" align="center"><div><p><b>Ungültiges Login oder Passwort.</b></p></div></td></tr>
				<?php } ?>
				<tr><td><p>Login:</p></td><td><input type="text" name="login"><br></td></tr>
				<tr><td><p>Password:</p></td><td><input type="password" name="password"><br></td></tr>
             	<tr><td colspan="2" align="center"><input type="submit" value="       Login        "></td></tr>
           </form>		
		   </tr></table>	
		   </center></td>
			<?php
		 }
         else
		 {
		   	if( $page == "guestbook" )
			{
				include("guestbook/guestbook.php");
			}	
			else
			{
				include( $template ); 
			}
		  } ?>
	</tr>
	<tr>
		<td id="footer" colspan="3"><p><a style="text-decoration:none;" href="index.php?cms=1&page=<?php echo $page; ?>&index=<?php echo $index?>">&copy;</a> 2006 Whiskyfreunde Oelde</p></td>
	</tr>
</table>

		</td>
	</tr>
</table>

</body>
</html>

