<!DOCTYPE html>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Belleza' rel='stylesheet' type='text/css'>
	<link href="/css/bootstrap.css" rel="stylesheet">
	  
	<link href="/css/bootstrap-responsive.css" rel="stylesheet">
	
<script type="text/javascript" src="/js/jquery-1.7.min.js"></script>
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
	
	
	
	var url = $(document).attr('title');
	var page_id = url.split(' - ');
 var page = page_id[0].toLowerCase();
	if(page!='claudia myers'){
		

	homeLink.transform("s 0,1");
	$('.home').live('mouseenter mouseleave', function(event){
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
				        <div class="container" style="position: relative;">
					<h1><a href="/" class="brand">Claudia<span style="font-weight: bold;">Myers</span></a></h1>
					
					<ul class="nav">

								          </ul>
									<div id="nav_canvas"></div>
	<ul class="nav pull-right top-nav main-nav">
	<span id="main-nav">
			<li><a href="/" class="home" style="color: #0ff;">Home</a></li>
			<li><a href="/profile.php" class="profile" style="color: #0df;">Profile</a></li>
			<li><a href="/work.php" class="work" style="color: #0bf;">Work</a></li>
			<li><a href="/upcoming.php" class="upcoming" style="color: #09f;">Upcoming</a></li>
			<li><a href="/contact.php" class="contact" style="color: #07f;">Contact</a></li>
		</span>
			</ul>
															</div>
					
					</div>
					
					</div>
			
					<div class="container bod">
								<div class="row">
									
									<div class="span12" style="padding: 15px 0 15px 15px;">
