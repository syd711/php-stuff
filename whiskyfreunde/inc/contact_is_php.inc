		<td id="content">

			<p class="positionlink">
				<a class="positionlink" href="consulting.html">position_link</a>
			</p>

			<!-- header -->
			<h1 class="mainheader">Headline</h1>
			
			<?php 
			$message = $_GET['message'];
			if( $message == "1" ) 
			{ ?>
			<p>Thanks for your message.</p>	
			
			
			<?php } ?>
			
			
			
			<?php
				$email = $_POST['email'];
			  	$name = $_POST['name'];
			  	$info = $_POST['info'];
  				$sendFormular = $_GET['sendFormular'];
			
				function checkMail( $mail )
				{
					if( ( $mail == "" ) || !eregi("^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$",$mail) )
					{
					  return 0;
					}
					else
					{
					  return 1;
					} 
				}
				if( $sendFormular == "1" )
				{
					if( !$name ) $error = "Bitte geben Sie ihren Namen an.";
					if( !$email || checkMail( $email ) == 0 ) $error = "Please enter a valid email address.";
					if ( !$error )
					{
						$header  = "From:$email_from_name<mailer@" . $from . ">\n";
						//$header .= "Reply-To: " . $from . "\n"; 
						//$header .= "Bcc: $email_to_bcc\n"; 
						$header .= "X-Mailer: PHP/" . phpversion(). "\n";          
						$header .= "X-Sender-IP: website@test.com\n"; 
						$header .= "Content-Type: text/html"; 
						$subject 	= "Kontaktmail von der Seite www.test.com";
						$emailBody  = "Name: " . $name;
						$emailBody  = $emailBody . "<br>E-Mail: " . $email;
						$emailBody	= $emailBody . "<br>Inhalt der Mail:\n<br>";
						$emailBody  = $emailBody . $info;
						mail("matthias.faust@test.com",$subject,$emailBody,$header);
						echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php?page=contact&message=1\">";  
					}
					else echo $error . "<br>&nbsp;<br>";
				 }
			?>

			
			<center>
			In Bearbeitung...

			</center>			
			
		</td>
		<td id="subcontent">
			<div>

				
			</div>
		</td>			
