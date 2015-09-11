<?php 
	session_start();
	include_once("inc/session.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Markoz.net - Favourites</title>
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="This is Mark J Tozer's portfolio website to allow users to get in contact about any IT related problems or IT required services."/>
		<meta name="Keywords" content="IT, Computers, PC Repair, Maintenance, Solutions, Software issues, Custom PC Build, Web Design, Laptop, Bridgend"/>
		<meta http-equiv="content-language" content="en" /> 
		<meta name="distribution" content="UK" /> 
		<meta name="Author" content="Mark J Tozer" /> 
		<meta name="Copyright" content="(c) Copyright 2012-2013 Markoz.net" /> 
		<meta name="doc-type" content="Web Page" />
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<link href="c/master.css" rel="stylesheet" type="text/css" /> 
		<!--[if lte IE 8]><link href="c/screen/ie.css" rel="stylesheet" type="text/css" /> <![endif]-->
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.latest.js"></script>
		<script type="text/javascript" src="js/jquery-nav.js"></script>
	</head>
	<body>
<?php 
	// include top bar navigation from inc folder
	include_once("inc/main-nav.inc.php");
?>
		<div id="s-nav">
			<div class="m-wrap">
				<a title="Markoz.net" href="index.php"><span id="logo"></span></a>
				<a title="Contact" href="contact.php"><span id="con-d"></span></a>
				<ul>
					<li class="dropdown" id="s-selected"><a title="Homepage" href="index.php">Home<span></span></a>
						<ul>
							<li><a title="About Me" href="about.php"><span>How and why IT</span>About</a></li>
							<li><a title="My Favourites" href="fav.php"><span>Inspiration content used</span>Favourites</a></li>
							<li><a title="My Skillsets" href="ups/cv.pdf"><span>Curriculum Vitae</span>Skillsets</a></li>
							<li><a title="Sitemap" href="sitemap.php"><span>Website Layout</span>Sitemap</a></li>
						</ul>
					</li>
<?php
	include_once("inc/sub-nav.inc.php");
?>
					<li><a title="Contact" href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="clear"></div>
		<div class="m-wrap">
			<div class="float-left">
				<h2><span class='high-txt'>Inspiration</span> &amp; Resources</h2>
				<p>The most commonly used resources that I gain inspiration and knowlegde from, ranging from hardware stores, website ideas, programming debugging and much more. Here is a few sources I use below:</p>
				<div class='quad-cont'>
					<h3>Inspiration</h3>
					<ul>
						<li><a href='http://www.templatemonster.com' title="Template Monster" target="_new">Template Monster</a></li>
						<li><a href='http://www.hongkiat.com' title="Hongkiat" target="_new">Hongkiat</a></li>
						<li><a href='http://www.jazzytemplates.com' title="Jazzy Templates" target="_new">Jazzy Templates</a></li>
						<li><a href='http://www.goodtemplate.com' title="Good Template!" target="_new">Good Template!</a></li>
					</ul>
				</div>
				<div class='quad-cont'>
					<h3>Resources</h3>
					<ul>
						<li><a href='http://www.w3schools.com' title="w3schools" target="_new">W3Schools</a></li>
						<li><a href='http://www.hotscripts.com' title="HotScripts" target="_new">HotScrips</a></li>
						<li><a href='http://www.phphelp.com' title="PHP Help" target="_new">PHP Help</a></li>
						<li><a href='http://www.dev.mysql.com' title="MySQL" target="_new">MySQL</a></li>
						<li><a href='http://www.bridgend.ac.uk' title="Bridgend College" target="_new">Bridgend College</a></li>
						<li><a href='http://www.ebuyer.com' title="Ebuyer" target="_new">Ebuyer</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			
			<div class='quad-cont'>
				<h3>My Knowledge</h3>
				<ul class="img-lst">
					<li><a title="MySQL" href="http://www.mysql.com/" target="_new"><img src='img/webkg/01.jpg' alt="MySQL" /></a></li>
					<li><a title="PHP" href="http://www.php.net/" target="_new"><img src='img/webkg/02.jpg' alt="PHP" /></a></li>
					<li><a title="HTML 5" href="http://www.html5rocks.com/en/" target="_new"><img src='img/webkg/03.jpg' alt="HTML 5" /></a></li>
					<li><a title="World Wide Web Consortium" href="http://www.w3.org/" target="_new"><img src='img/webkg/10.jpg' alt="W3C" /></a></li>
					<li><a title="Dreamweaver" href="http://www.adobe.com/products/dreamweaver.html" target="_new"><img src='img/webkg/04.jpg' alt="Dreamweaver" /></a></li>
					<li><a title="Photoshop" href="http://www.photoshop.com/" target="_new"><img src='img/webkg/05.jpg' alt="Photoshop" /></a></li>
					<li><a title="Flash" href="http://www.adobe.com/products/flash.html" target="_new"><img src='img/webkg/06.jpg' alt="Flash" /></a></li>
					<li><a title="WampServer" href="http://www.wampserver.com/en/" target="_new"><img src='img/webkg/07.jpg' alt="WampServer" /></a></li>
					<li><a title="GIMP" href="http://www.gimp.org/" target="_new"><img src='img/webkg/08.jpg' alt="GIMP" /></a></li>
					<li><a title="PayPal" href="http://www.paypal.com/" target="_new"><img src='img/webkg/09.jpg' alt="PayPal" /></a></li>
					<li><a title="MS Office 2003-365" href="http://office.microsoft.com/" target="_new"><img src='img/webkg/11.jpg' alt="MS Office 2003-365" /></a></li>
					<li><a title="3D Wings" href="http://www.wings3d.com/" target="_new"><img src='img/webkg/12.jpg' alt="3D Wings" /></a></li>
					<li><a title="Visual Studio" href="http://www.microsoft.com/visualstudio/" target="_new"><img src='img/webkg/13.jpg' alt="Visual Studio" /></a></li>
					<li><a title="Darkbasic" href="http://www.thegamecreators.com/" target="_new"><img src='img/webkg/14.jpg' alt="Darkbasic" /></a></li>
				</ul>
			</div>
<?php 
	// include footer from inc folder
	include_once("inc/footer.inc.php");
?>
	</div>
	</body>
</html>