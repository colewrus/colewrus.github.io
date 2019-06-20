<?php
error_reporting(0); 
	
?><!DOCTYPE html>
<html>
<head>
	
	<meta name="description" content="Claudia Myers. Writer. Director. Producer.">
	<link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css' />
	<link href="/css/bootstrap.css" rel="stylesheet"/>
	  <link href="/nivo-slider/nivo-slider.css" rel="stylesheet"/>
	<link href="/css/bootstrap-responsive.css" rel="stylesheet" />
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<script type="text/javascript" src="/js/jquery-1.7.min.js"></script>
<script type="text/javascript" src="/nivo-slider/jquery.nivo.slider.js"></script>
<link rel="stylesheet" type="text/css" href="/js/shadowbox/shadowbox.css">
<script type="text/javascript" src="/js/shadowbox/shadowbox.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript"> 
Shadowbox.init({
	overlayOpacity: 0.8
});
</script>
<script type="text/javascript" src="/js/raphael-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	 paper = Raphael(document.getElementById('nav_canvas'), 430, 20);
	 homeLink = paper.path("M 39 16 l 49 0").attr({stroke: '#0ff','stroke-width': 2});
		
	profileLink = paper.path("M 109 16 l 56 0").attr({stroke: '#0df','stroke-width': 2});
	
	workLink = paper.path("M 186 16 l 45 0").attr({stroke: '#0bf','stroke-width': 2});
	
	upcomingLink1 = paper.path("M 252 16 l 11 0").attr({stroke: '#09f','stroke-width': 2});
	upcomingLink2 = paper.path("M 272 16 l 54 0").attr({stroke: '#09f','stroke-width': 2});
	
	contactLink = paper.path("M 358 16 l 67 0").attr({stroke: '#07f','stroke-width': 2});
	
	//default behavior on touch devices to counter the raphael underline.
	$('.home, .profile, .work, .upcoming, .contact').live('touchstart',function(event){
		event.preventDefault();
		window.location = $(this).attr('href');
	});
	
	
	var url = $(document).attr('title');
	var page_id = url.split(' - ');
 var page = page_id[0].toLowerCase();
	if(page!='claudia myers'){
		

	homeLink.transform("s 0,1");
	$('.home').live('mouseover mouseout', function(event){
		if(event.type=="mouseover"){
		homeLink.animate({
			transform: "s 1,1"
		},200);
	}else{
		homeLink.animate({
			transform: "s 0,1"
		},200);
		
	}
	

	});
	
		}
	if(page!='profile'){
		

	profileLink.transform("s 0,1");
	$('.profile').live('mouseover mouseout', function(event){
		if(event.type=="mouseover"){
		profileLink.animate({
			transform: "s 1,1"
		},200);
	}else{
		profileLink.animate({
			transform: "s 0,1"
		},200);
	}
	});
		}
		if(page!='work'){
			workLink.transform("s 0,1");
		
	$('.work').live('mouseover mouseout', function(event){
		if(event.type=="mouseover"){
		workLink.animate({
			transform: "s 1,1"
		},200);
	}else{
		workLink.animate({
			transform: "s 0,1"
		},200);
	}
	});
	}
	if(page!='upcoming'){
		
		upcomingLink2.transform("s 0,1");
		upcomingLink1.transform("s 0,1");
	$('.upcoming').live('mouseover mouseout', function(event){
		if(event.type=="mouseover"){
		upcomingLink1.animate({
			transform: "s 1,1"
		},200);
		upcomingLink2.animate({
			transform: "s 1,1"
		},200);
	}else{
		upcomingLink1.animate({
			transform: "s 0,1"
		},200);
		upcomingLink2.animate({
			transform: "s 0,1"
		},200);
	}
	});
	}
	if(page!='contact'){
		contactLink.transform("s 0,1");
	
	$('.contact').live('mouseover mouseout', function(event){
		if(event.type=="mouseover"){
		contactLink.animate({
			transform: "s 1,1"
		},200);
	}else{
		contactLink.animate({
			transform: "s 0,1"
		},200);
	}
	});
	}
});


</script>
<title><?php if(isset($page_title)){echo $page_title.' - ';}?>Claudia Myers</title>
</head><body>
	<div class="container" >

				<div class="navbar" style="margin-bottom: 0px">
				    <div class="navbar-inner">
				        <div class="container headcontainer" style="position: relative;">
					<h1 style="font-family: 'Helvetica Neue', Helvetica"><a href="/" class="brand">Claudia<span style="font-weight: bold;">Myers</span></a></h1><h3>Writer &middot; Director &middot; Producer</h3>
					
					<ul class="nav">
<!-- DO 2015-->
								          </ul>
									<div id="nav_canvas"></div>
	<ul class="nav pull-right top-nav main-nav">
	<span id="main-nav">
			<li><a href="/" class="home" style="color: #0ff;">Home</a></li>
			<li><a href="/profile.php" class="profile" style="color: #0df;">Profile</a></li>
			<li><a href="/work/" class="work" style="color: #0bf;">Work</a></li>
			<li><a href="/upcoming.php" class="upcoming" style="color: #09f;">Upcoming</a></li>
			<li><a href="/contact.php" class="contact" style="color: #07f;">Contact</a></li>
		</span>
			</ul>
															</div>
					
					</div>
					
					</div>
			
					<div class="container bod">
								<div class="row">
									
									<div class="span12 homepage" style="padding: 15px 0 15px 15px;">
