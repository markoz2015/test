<?php
	session_start();
	//include_once("inc/session.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Mark's Web Profolio</title>
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Description" content="This is Mark Tozer's portfolio website aimed to target possible future employees."/>
		<meta name="Keywords" content="IT, Computers, PC Repair, Maintenance, Solutions, Software issues, Custom PC Build, Web Design, Laptop, Bridgend"/>
		<meta http-equiv="content-language" content="en" /> 
		<meta name="distribution" content="UK" /> 
		<meta name="Author" content="Mark Tozer" /> 
		<meta name="Copyright" content="(c) Copyright 2012-2015 Markoz.net" /> 
		<meta name="doc-type" content="Web Page" />
		<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width"/>
		<link rel="shortcut icon" href="img/favicon.ico"/>
		<link href='http://fonts.googleapis.com/css?family=Architects+Daughter|Open+Sans' rel='stylesheet' type='text/css'/>
		<link href="c/master.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery-1.2.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		//<![CDATA[
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				  if (target.length) {
					$('html,body').animate({
					  scrollTop: target.offset().top
					}, 1000);
					return false;
				  }
				}
			  });
			});	
			//Slideshow
			var $no = 0;
			function cycleImages(){
				$no += 1;
				if ($no == 1) {
					$('#gallery1').fadeIn(1500);
					$('#gallery2').fadeOut(1500);
					
				} else if ($no == 2) {
					$('#gallery1').fadeOut(1500);
					$('#gallery2').fadeIn(1500);
					no = 0;
				}
			}
			$(document).ready(function(){
			// run every 7s
				var Interval;
			})
			Interval = setInterval('cycleImages()', 12000);
		//]]>
		</script>
	</head>
	<body>
		<div class="m-cont">
			<div class="full-page" id="gallery1">&nbsp;</div>
			<div class="full-page" id="gallery2">&nbsp;</div>
			<div id="titles">
				<h1>I am Mark</h1>
				<h4>I like to Design &amp; Code</h4>
				<p class="hand-font" id="read-hide"><a title="read more" href="#readmore">read more</a></p>
			</div>
			<div class="clear-both">&nbsp;</div>
			<div class="full-page">
				<div class="m-wrap">
					<a name="readmore">&nbsp;</a>
					<p><span class="large-text">I</span>'m Mark Tozer I was born and raised in Bridgend South Wales, 
					I have achieved my Honours Degree in Computing Information Systems. I'm a computer enthusiast and have a 
					passion for IT technology, whether it being coding or graphics design. I've always enjoyed solving problems and 
					helping others. Being good at IT, 
					I graduated and worked as an IT Technician on a part-time basis. 
					I also like to fiddle with new technologies and coding.</p>
					
					
					<p>I am currently seeking for work. You can get in contact with me by 
					<a title="Drop me a line" href="contact">clicking here</a>.
					If you would like to take a look at some of my accomplishments on this <a title="My work" href="portfolio">website</a>. 
					
					
					I connect with my family &amp; friends on 
					<a title="Mark's Facebook" href="http://wwww.facebook.com/Mark.Tozer.2015" target="_blank">Facebook</a>.
					
					If you have any questions, would like to leave me some feedback you can contact me at admin@markoz.net, 
					or on the <a title="Drop me a line" href="contact">contact</a> page.</p>
					
					<div class="line-break">&nbsp;</div>
					
					<p>The continuing path of computing has become both personally and professionally a 
					constant dynamic environment and has become one of the most enjoyed activities I've been doing to date.
					I have always excelled at science and IT since my childhood, and finally getting an Honors in 
					Computing Information Systems, I believe it's time to put all my knowledge and experience towards 
					bigger and more exciting opportunities working for an employer.</p>
					
					<p>One of the greatest strengths about being a code &amp; designer with an computing background is that not only 
					I can handle the coding or graphical aspect of a project, but I can also fully understand and even participate 
					in the technical aspects of those same projects.</p>
				</div>
			</div>
			<img class="pc-icon" alt="www.markoz.net" src="img/pc1_icon.jpg"/>
			<?php include_once("inc/footer.inc.php");?>
		</div>
		<?php include_once("inc/nav.inc.php");?>
	</body>
</html>