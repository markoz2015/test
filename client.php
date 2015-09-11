<?php
	session_start();
	//include_once("inc/session.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Mark's Web Profolio - Client</title>
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
					<h1>Client</h1>
					<h4>Client services</h4>
					<div id="login-form">
						<form method="POST">
							<ul>
								<li><h3>Login Form</h3></li>
								<li><input placeholder="username" type="text" name="username"/></li>
								<li><input placeholder="password" type="password" name="password"/></li>
								<li><input type="submit" value="Login"/></li>
							</ul>
						</form>
					</div>
				</div>
				<div class="clear-both">&nbsp;</div>
			</div>
			<img class="pc-icon" alt="www.markoz.net" src="img/pc4_icon.jpg"/>
			<?php include_once("inc/footer.inc.php");?>
		</div>
		<?php include_once("inc/nav.inc.php");?>
	</body>
</html>