<?php

echo '

<!DOCTYPE html>

<html lang="en" class="no-js">
<!-- the "no-js" class is for Modernizr. -->

<head>
	<meta charset="utf-8" />

	<title>Praxis Youth Leadership Orchestra - '.$pagetitle.'</title>
	
	<meta name="description" content="Praxis Youth Leadership Orchestra - making the musical leaders of tomorrow" />
	
	<meta name="author" content="Praxis Youth Leadership Orchestra" />
	<meta name="Copyright" content="Praxis Youth Leadership Orchestra 2011. All Rights Reserved." />

	<meta name="DC.title" content="Praxis Youth Leadership Orchestra - making the musical leaders of tomorrow" />
	<meta name="DC.subject" content="Youth Orchestra/Leadership/Non-profit" />
	<meta name="DC.creator" content="http://chrisjamesbk.com" />
	
	<meta name="google-site-verification" content="..." />
	
	<link rel="shortcut icon" href="'.$path.'/favicon.ico"/>
		
	<link rel="stylesheet" href="'.$path.'/_includes/css/global.css" />
	
	<!--[if IE 7]>
	<link rel="stylesheet" href="'.$path.'/_includes/css/ie7.css" />
	<![endif]-->
	<!--[if lt IE 7]>
	<link rel="stylesheet" href="'.$path.'/_includes/css/ie6.css" />
	<![endif]-->
	
	<!--[if lt IE 8]>
		<script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js"></script>
	<![endif]-->

	<!-- MODERNIZR: http://www.modernizr.com/ -->
		<script src="'.$path.'/_includes/js/modernizr-1.5.min.js"></script>
		
	<!-- Google analytics -->
		<script>
			var _gaq = [["_setAccount", "UA-19135529-1"], ["_trackPageview"]];
			(function(d, t) {
			var g = d.createElement(t),
			s = d.getElementsByTagName(t)[0];
			g.async = true;
			g.src = "//www.google-analytics.com/ga.js";
			s.parentNode.insertBefore(g, s);
			})(document, "script");
		</script>
		
	<script src="'.$path.'/_includes/js/jquery.js"></script>
	<script src="'.$path.'/_includes/js/program-tabs.js"></script>
	<script src="'.$path.'/_includes/js/toggle.js"></script>
	
	<!-- Webkit -->
	<script type="text/javascript" src="http://use.typekit.com/knp7ggp.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
			
</head>


<body id="'.$pageid.'">	
	
	<div id="container">

		<header class="clearfix">
			
			<section id="logo">
				
				<h1>Praxis Youth Leadership Orchestra</h1>

				<a href="'.$path.'/">
					<img src="'.$path.'/_includes/img/praxis-logo.png" alt="Praxis Logo"/>
				</a>
				
			</section>
			
			<nav>
			
				<ul>
				
					<li>
						
						<a href="'.$path.'/about">about</a>
							
						<ul id="nav1" class="sub-nav">
							<li><a href="'.$path.'/about/">mission/vision<br />what we do</a></li>
							<li><a href="'.$path.'/about/letter">letter from the artistic director</a></li>
							<li><a href="'.$path.'/about/contact">contact</a></li>
						</ul>								
						
					</li>
					
					<li>
						
						<a href="'.$path.'/programs">program</a>
						
						<ul id="nav2" class="sub-nav">
							<li><a href="'.$path.'/programs/">spring institute</a></li>
							<!--<li><a href="'.$path.'/programs/2012">concerts</a></li>-->
							<li><a href="'.$path.'/programs/media">media</a></li>	
							<li><a href="http://praxisorchestra.wordpress.com/" target="_blank">blog</a></li>		
						</ul>
						
					</li>
					
					<li>
						
						<a href="'.$path.'/faculty">faculty</a>
						
					</li>
					
					<li>
						
						<a href="'.$path.'/audition">audition</a>
							
						<ul id="nav3" class="sub-nav">
							<li><a href="'.$path.'/audition/">information</a></li>
							<li><a href="'.$path.'/audition/form">sign-up</a></li>
						</ul>
						
					</li>
					
					<li>
						
						<a href="'.$path.'/support">support</a>
						
						<ul id="nav4" class="sub-nav">
							<li><a href="'.$path.'/support/#volunteer">volunteer</a></li>
							<li><a href="'.$path.'/support/#collaborate">collaborate</a></li>
							<li><a href="'.$path.'/support/#partnerships">partnerships</a></li>
						</ul>
						
					</li>
				
					<li>
					
						<a href="http://www.razoo.com/story/Praxis-Youth-Leadership-Orchestra" target="_blank"><strong>donate</strong></a>
						
					</li>
				
				</ul>
				
			</nav> 
			
			<section id="tagline">
			
				<h1>making the musical leaders of tomorrow</h1>
				
			</section>
			
		</header> 

';
?>