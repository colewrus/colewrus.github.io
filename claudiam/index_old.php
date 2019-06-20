<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<script type="text/javascript" src="/js/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/js/jquery.cycle.all.js"></script>

<title>Claudia Myers</title>
<style type="text/css" media="all">
html{
	background-color: black;
	color: white;
	font-family: "Optima", Helvetica, Verdana, sans-serif;
}
body {

}
#shell{
	width: 798px;
	margin: auto;
	margin-top: 10px;
}
#header{
	width: 798px;
	height: 242px;
	position: relative;
	background: url('/images/header2.png') no-repeat transparent;
	z-index: 2;
	
}
#footer{
	width: 798px;
	height: 126px;
	background: url('/images/footer2.png') no-repeat transparent;
	position: relative;
	top: -286px;
	z-index: 1;
}
#footer p{
	position: absolute;
	float: right;
	top: 112px;
	left: 538px;
	font-size: 11px;
}
#content_shell{
	min-height: 360px;
	width: 780px;
	margin: auto;
	position: relative;
	top: -185px;
	z-index: 4;
}
#slideshow{
	margin: auto;
	margin-top: 25px;
	margin-bottom: 40px;
}

</style>




<script type="text/javascript">
$(document).ready(function() {
    $('#slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>



</head><body>

<div id="shell">
<div id="header"></div>
<div id="content_shell">
	
	<div id="slideshow">
		<img src="/images/slides/slide1.png" class="first" />
		<img src="/images/slides/slide2.png" />
	</div>
	
	
	
	
	
	
	
	
	
	
	</div>
<div id="footer"><p>Copyright 2011 Claudia Myers. Design by Nick Ray.</p></div>
</div>

</body></html>



