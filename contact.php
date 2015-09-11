<?php
	session_start();
	//include_once("inc/session.inc.php");
	
	// if email has been submitted
	if (!empty($_POST)) 
	{
		if (!empty($_POST['message']) && $_POST['message'] != "message")
		{
			$usrEmail = "";
			$errorMsg = "";
			$usrMsg = $_POST['message'];
			if (!empty($_POST['usrEmail']) && $_POST['usrEmail'] != "email") 
			{
				if (filter_var($_POST['usrEmail'], FILTER_VALIDATE_EMAIL)) 
				{
					$usrEmail = $_POST['usrEmail'];
				} else {
					$errorMsg = "Please enter valid email address.";
				}
			} else {
				$errorMsg = "Please enter a email and/or message.";
			}
			if (empty($errorMsg)&& !empty($_POST['usrEmail'])&& !empty($_POST['message'])) 
			{
				mail("admin@markoz.net","From: Markoz.net",$usrMsg." <<Email: ".$usrEmail.">>");
				$errorMsg = "Your message has been successfully sent.";
			}
		} else {
			$errorMsg = "Please type in a message below.";
		}
	}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Mark's Web Profolio - Contact</title>
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="This is Mark Tozer's portfolio website aimed to target possible future employees."/>
		<meta name="Keywords" content="IT, Computers, PC Repair, Maintenance, Solutions, Software issues, Custom PC Build, Web Design, Laptop, Bridgend"/>
		<meta http-equiv="content-language" content="en" /> 
		<meta name="distribution" content="UK" /> 
		<meta name="Author" content="Mark Tozer" /> 
		<meta name="Copyright" content="(c) Copyright 2012-2015 Markoz.net" /> 
		<meta name="doc-type" content="Web Page" />
		<meta name="viewport" content="initial-scale=1.0"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<link href='http://fonts.googleapis.com/css?family=Architects+Daughter|Open+Sans' rel='stylesheet' type='text/css'/>
		<link href="c/master.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="m-cont">
			<div class="full-page">
				<div id="titles-alt">
					<h1>Contact</h1>
					<h4>Drop me a line</h4>
				</div>
				<div class="clear-both">&nbsp;</div>
				
				<div id="email-form">
					<form method="POST" action="contact" >
						<ul>
							<li><h3>Email Form</h3></li>
							<li><input class="contact-input" placeholder="email" type="email" name="usrEmail" /></li>
							<li><textarea rows="6" class="contact-input" placeholder="message" name="message"><?php if(!empty($_POST['message'])) { echo $_POST['message'];} ?></textarea></li>
							<li><input type="submit" value="Send email"/></li>
						</ul>
					</form>
					<?="<p>" . $errorMsg . "</p>";?>
				</div>				
			</div>
			<img class="pc-icon" alt="www.markoz.net" src="img/pc1_icon.jpg"/>
			<?php include_once("inc/footer.inc.php");?>
		</div>
		<?php include_once("inc/nav.inc.php");?>
	</body>
</html>