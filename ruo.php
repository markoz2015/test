<?php
	session_start();
	//include_once("inc/session.inc.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Mark's Web Profolio - Rifted Universe Online</title>
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
			var $no = 1;
			function cycleImages(){
				$no += 1;
				if ($no == 1) {
					$('#gallery1-ruo').fadeIn(1500);
					$('#gallery2-ruo').fadeOut(1500);
					$('#gallery3-ruo').fadeOut(1500);
					
				} else if ($no == 2) {
					$('#gallery1-ruo').fadeOut(1500);
					$('#gallery2-ruo').fadeIn(1500);
					$('#gallery3-ruo').fadeOut(1500);
				} else if ($no == 3) {
					$('#gallery1-ruo').fadeOut(1500);
					$('#gallery2-ruo').fadeOut(1500);
					$('#gallery3-ruo').fadeIn(1500);
					$no = 0;
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
			<div class="full-page" id="gallery1-ruo">&nbsp;</div>
			<div class="full-page" id="gallery2-ruo">&nbsp;</div>
			<div class="full-page" id="gallery3-ruo">&nbsp;</div>
			<div id="titles">
				<h1>Rifted Universe Online</h1>
				<h4>R U Online?</h4>
				<p class="hand-font" id="read-hide"><a title="read more" href="#readmore">read more</a></p>
			</div>
			<div class="clear-both">&nbsp;</div>
			<div class="full-page">
				<div class="m-wrap">
					<a name="readmore">&nbsp;</a>
					<p><span class="large-text">R</span>ifted Universe online is a MMORPG game based in a large epic space opera.
					In this game you will be put in charge of your own spaceship in which is your virtual life. 
					Your ship will be everything of yours until you advance further and colonise planets.</p>
					
					<p>Within this game, you will be placed in the time period between 4050. 
					During this time period, the humans have travelled far into space, and made some allies, 
					and same for foes. There are 2 Groups of alliances,;the Polates, and the K'Poh, within each 
					alliances there are 3 factions, giving you a total number of 6 factions. Out of the 6 factions, 
					you may choose to be be one.</p>
					<p>In the Polates' Alliance, you can choose from either: The Polates themselves, The Humanoids, or The Pittochks</p>
					<p>And the opponents of the Polates, the K'Poh contains the 4 factions which are: The Tun'Q, The Yonsto's, The Pokta</p>				
					<p>The 2 Alliances have been battling for over 3 centuries now, 
					they are waiting...waiting for the one pilot turn up, might that be you, 
					it's your call....should you bravely step up to justice and combine forces with the 
					Polates, or should do you dare walk the plank path of a pirate's and raid the Polates 
					for deep treasures hidden within with vast power, so much to the point where it is just 
					unimaginable by man! It is your choice, your game, your risk, try the game, <i>Rifted Universe.</i></p>
					<div class="line-break">&nbsp;</div>
					<p>The current status of this project is on hold due to 5 prototypes made all starting from the beginning 
					have all yield poor results, due from using an engine that is incapable of supporting such an idea.</p>
					<p>Future plans to allow this project to proceed will be to learn how to use the 
					<a title="" href="https://unity3d.com/" target="_new">Unity game engine</a>. The approach will possibly be 
					still towards a top down space shooter.</p>
					<p>There is a few people that I acknowledge in first creating the game is 'Spirit of the Poor'; Others with 
					content and ideas towards the game: S. Muka, P. Emma, T, Tracy, and many more within the community created 
					when the game development was starting.</p>
					<p>Below are some snapshots of development of RUO.</p>
				</div>
			</div>
			<div id="prev-work">
				<ul>
					<li>
						<ul>
							<li><img alt="Protoype 5" src="img/ruo/screen/screen4.jpg"/></li>
							<li><img alt="Login Window" src="img/ruo/screen/screen2.jpg"/></li>
						</ul>
					</li>
					<li>
						<ul>
							<li><img alt="Spaceships" src="img/ruo/screen/screen1.jpg"/></li>	
							<li><img alt="Docking GUI" src="img/ruo/screen/screen6.jpg"/></li>		
							<li><img alt="Trading GUI" src="img/ruo/screen/screen7.jpg"/></li>								
						</ul>						
					</li>
					<li>
						<ul>
							<li><img alt="Option GUI" src="img/ruo/screen/screen3.jpg"/></li>
							<li><img alt="Equiptment GUI" src="img/ruo/screen/screen5.jpg"/></li>
						</ul>						
					</li>
				</ul>
			</div>			
			<div class="clear-both">&nbsp;</div>
			
			
			<img class="pc-icon" alt="www.markoz.net/ruo" src="img/ruo/footer.jpg"/>
			<?php include_once("inc/footer.inc.php");?>
		</div>
		<?php include_once("inc/nav.inc.php");?>
	</body>
</html>