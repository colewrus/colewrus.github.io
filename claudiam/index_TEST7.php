<?php require_once('header.php');?>
<script type="text/javascript"> 
   $(window).load(function() {
       $('#slider').nivoSlider({ 
   effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'  
   
          animSpeed: 1000, // Slide transition speed
          pauseTime: 5000, // How long each slide will show
          startSlide: 0, // Set starting Slide (0 index)
          directionNav: false, // Next & Prev navigation
          directionNavHide: false, // Only show on hover
          controlNav: false, // 1,2,3... navigation
          controlNavThumbs: false, // Use thumbnails for Control Nav
          controlNavThumbsFromRel: true, // Use image rel for thumbs
          controlNavThumbsSearch: '.jpg', // Replace this with...
          controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
          keyboardNav: true, // Use left & right arrows
          pauseOnHover: false, // Stop animation while hovering
          manualAdvance: false, // Force manual transitions
          captionOpacity: 1, // Universal caption opacity
          prevText: '', // Prev directionNav text
          nextText: '', // Next directionNav text
          randomStart: false, // Start on a random slide
          beforeChange: function(){}, // Triggers before a slide transition
          afterChange: function(){
   
   
   }, // Triggers after a slide transition
         
          afterLoad: function(){} // Triggers when slider has loaded
   
   
   });  
   
   
   });
   
</script>
<script type='text/javascript'>
   $(document).ready(function(){
   		
   });
   
</script> 
<style> 
   .homepage-accolade {
   position: relative;
   margin-left: 75px;
   }
   .homepage-accolade h3{
   font-family: Helvetica, sans-serif; 
   font-weight: normal; 
   letter-spacing: 0.15em; 
   color: #7d7d7d;
   }
   .nivoSlider {
   position:relative;
   left: -10px;
   margin: 10px auto; 
   width:800px; /* width:600px Change this to your images width  was 480*/
   height:550px; /* height:350px Change this to your images height  was 280*/
   margin-bottom: 0px;
   margin-top: 20px;  /*50px;*/
   }
   .nivoSlider img {
   position:absolute; 
   top:0px;
   left:0px;
   display:none;
   height: 550px;
   }
   .nivoSlider a {
   border:0;
   display:block;
   }
   #slidertext{
   text-align: center;
   font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
   }
   #slider .nivo-controlNav {
   position:absolute;
   bottom:-170px; /* Put the nav below the slider */
   left: 15px;
   width: 103%;
   }
   #slider .nivo-controlNav img {
   display:inline; /* Unhide the thumbnails */
   position:relative;
   margin-right:20px;
   width: 97px;
   height: 57px;
   float: left;
   margin-bottom: 20px;
   }
/*   .nivo-caption {
   background: #000;
   opacity: 0.1;
   left: 0px;
   top: 350px;  y offset position 
   }
   .nivo-caption p{
   font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
   font-size: 25px;
   letter-spacing: .1em;
   font-weight: lighter;
   }*/
</style>
<!-- Shine.io-->
<div id="page-home" class="home-frame">

	<!--homepage-accolade-->
   <div class="homepage-accolade">
      <h3>NAMED BY INDEPENDENT MAGAZINE AMONG 10 FILMMAKERS TO WATCH IN 2015</h3>
   </div><!--/homepage-accolade-->
   
   
   <!--nivoSlider-->
   <div id="slider" class="nivoSlider">
      <a href="/work/fort-bliss.php"><img src="/portfolio_frames/large/fb_1.jpg" alt="" title="#fbcaption" rel="/portfolio_frames/large/fb_1.jpg" /></a>
      <a href="/work/fort-bliss.php"><img src="/portfolio_frames/large/fb_2.jpg" alt="" title="#fbcaption" rel="/portfolio_frames/large/fb_2.jpg" /></a>
      <a href="/work/kettle-of-fish.php"><img src="/portfolio_frames/large/kof_1.jpg" alt="" title="#kofcaption" rel="/portfolio_frames/large/kof_1.jpg" /></a>
      <a href="/work/kettle-of-fish.php"><img src="/portfolio_frames/large/kof_2.jpg" alt="" title="#kofcaption" rel="/portfolio_frames/large/kof_2.jpg" /></a>
      <a href="/work/below-beltway.php"><img src="/portfolio_frames/large/btb.jpg" alt="" title="#btbwcaption" rel="/portfolio_frames/large/btb.jpg"/></a>
      <a href="/work/outside-wire.php"><img src="/portfolio_frames/large/otwc_1.jpg" alt="" title="#otwcaption" rel="/portfolio_frames/large/otwc_1.jpg"/></a>
      <a href="/work/outside-wire.php"><img src="/portfolio_frames/large/otw_2.jpg" alt="" title="#otwcaption" rel="/portfolio_frames/large/otw_2.jpg"/></a>
      <a href="/work/long-road-back.php"><img src="/portfolio_frames/large/lrb.jpg" alt="" title="#longroadbackcap" rel="/portfolio_frames/large/lrb.jpg"/></a>
      <a href="/work/women-at-war.php"><img src="/portfolio_frames/large/waw.jpg" alt="" title="#wawcaption" rel="/portfolio_frames/large/waw.jpg"/></a>
      <a href="/work/kindness-of-strangers.php"><img src="/portfolio_frames/large/kos.jpg" alt="" title="#strangercaption" rel="/portfolio_frames/large/kos.jpg"/></a>
      <a href="/work/buddy-grace.php"><img src="/portfolio_frames/large/bag.jpg" alt="" title="#bngcaption" rel="/portfolio_frames/bag.jpg"/></a>
      <a href="/work/women-on-wing.php"><img src="/portfolio_frames/large/wotw.jpg" alt="" title="#wotwcaption" rel="/portfolio_frames/large/wotw.jpg"/></a>
   </div><!--/nivoSlider-->
   



</div><!--/home-frame-->


</div>
<?php require_once('footer.php');?>