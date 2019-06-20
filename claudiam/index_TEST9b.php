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
   .homepage {
   min-height: 575px !important;
   }
   .homepage-accolade {
   position: relative;
   margin-left: 75px;
   padding: 20px;
   }
   .homepage-accolade h3{
   font-family: Helvetica, sans-serif; 
   font-weight: normal; 
   letter-spacing: 0.15em; 
   color: #ffffff;   /*#7d7d7d;*/
   }
   .homepage-accolade a{
   color: #ffffff;   /*#7d7d7d;*/
   text-decoration:none;
   font-weight: bold;
   }
   .nivoSlider {
   position:relative;
   left: -10px;
   margin: 10px auto; 
   width:600px; /* width:740px Change this to your images width  was 480*/
   height:350px; /* Change this to your images height  was 280*/
   margin-bottom: 0px;
   margin-top: 20px;  /*50px;*/
   }
   .nivoSlider img {
   position:absolute; 
   top:0px;
   left:0px;
   display:none;
   height: 350px;
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
   .nivo-caption {
   background: #000;
   opacity: 0.1;
   left: 0px;
   top: 350px; /* y offset position */
   }
   .nivo-caption p{
   font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
   font-size: 25px;
   letter-spacing: .1em;
   font-weight: lighter;
   }
   .movie-title {margin-top: 10px; margin-bottom: 20px;}
   .award-images.bng {padding-left: 60px;}
   .award-images.lrb {padding-left: 125px;}
   .award-images.kof, .award-images.kos, .award-images.otw {padding-left: 180px;}
   .award-images.btb, .award-images.wotw {padding-left: 240px;}
</style>
<!-- Shine.io-->
<div id="page-home" class="home-frame">

	<!--homepage-accolade-->
   <div class="homepage-accolade">
      <h3>
      FEATURED IN INDEPENDENT MAGAZINE'S <a href="http://independent-magazine.org/2015/05/10-to-watch-2015-claudia-myers/" target="_blank">"10 FILMMAKERS TO WATCH IN 2015"</a>
      </h3>
   </div><!--/homepage-accolade-->
      
   <!--nivoSlider-->
   <div id="slider" class="nivoSlider">
      <a href="/work/fort-bliss.php"><img src="/portfolio_frames/large/michelle1.jpg" alt="" title="#fbcaption" rel="/portfolio_frames/large/michelle1.jpg" /></a>
      <a href="/work/fort-bliss.php"><img src="/portfolio_frames/large/michelle2.jpg" alt="" title="#fbcaption" rel="/portfolio_frames/large/michelle1.jpg" /></a>
      <a href="/work/kettle-of-fish.php"><img src="/portfolio_frames/large/kofslide3.jpg" alt="" title="#kofcaption" rel="/portfolio_frames/large/kofslide3.jpg" /></a>
      <a href="/work/kettle-of-fish.php"><img src="/portfolio_frames/large/kettlebride.jpg" alt="" title="#kofcaption" rel="/portfolio_frames/large/kettlebride.jpg" /></a>
      <a href="/work/below-beltway.php"><img src="/portfolio_frames/large/beltway2.jpg" alt="" title="#btbwcaption" rel="/portfolio_frames/large/beltway2.jpg"/></a>
      <a href="/work/outside-wire.php"><img src="/portfolio_frames/otwclouds.jpg" alt="" title="#otwcaption" rel="/portfolio_frames/otwclouds.jpg"/></a>
      <a href="/work/outside-wire.php"><img src="/portfolio_frames/otwtruck.jpg" alt="" title="#otwcaption" rel="/portfolio_frames/otwtruck.jpg"/></a>
      <a href="/work/long-road-back.php"><img src="/portfolio_frames/large/longroadback1.jpg" alt="" title="#longroadbackcap" rel="/portfolio_frames/large/longroadback1.jpg"/></a>
      <a href="/work/women-at-war.php"><img src="/portfolio_frames/large/womenatwar2.jpg" alt="" title="#wawcaption" rel="/portfolio_frames/large/womenatwar2.jpg"/></a>
      <a href="/work/kindness-of-strangers.php"><img src="/portfolio_frames/large/strangers.jpg" alt="" title="#strangercaption" rel="/portfolio_frames/large/strangers.jpg"/></a>
      <a href="/work/buddy-grace.php"><img src="/portfolio_frames/large/buddygraceopen.jpg" alt="" title="#bngcaption" rel="/portfolio_frames/buddygraceopen.jpg"/></a>
      <a href="/work/women-on-wing.php"><img src="/portfolio_frames/womenwingcowboys.jpg" alt="" title="#wotwcaption" rel="/portfolio_frames/womenwingcowboys.jpg"/></a>
   </div><!--/nivoSlider-->
   



   <!--slider captions-->  
	   <div id="fbcaption" class="nivo-html-caption">
      <div class="movie-title"><center><strong>Fort Bliss</strong></center></div>
      <div class="award-images">
      <img src="/images/fb_1.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/fb_1.jpg"/>
      <img src="/images/fb_2.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/fb_2.jpg"/>
      <img src="/images/fb_3.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/fb_3.jpg"/>
      <img src="/images/fb_4.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/fb_4.jpg"/>
      <img src="/images/fb_5.jpg" align="left" style="display:inline; position:relative; height: 70px;" alt="" title="" rel="/images/fb_5.jpg"/>
      
      </div><!--/award-images-->      
   </div><!--/fbcaption nivo-html-caption-->
      
      <div id="btbwcaption" class="nivo-html-caption">
         <div class="movie-title"><center><strong>Below the Beltway</strong></center></div>
         <div class="award-images btb">
         <img src="/images/btb_1.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/btb_1.jpg"/>
         </div><!--/award-images-->
      </div><!--/btbwcaption nivo-html-caption-->
      
      <div id="bngcaption" class="nivo-html-caption">
         <div class="movie-title"><center><strong>Buddy &amp; Grace</strong></center></div>
         <div class="award-images bng">
         <img src="/images/bag_1.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/bag_1.jpg"/>
         <img src="/images/bag_2.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/bag_2.jpg"/>
         <img src="/images/bag_3.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/bag_3.jpg"/>
         <img src="/images/bag_4.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/bag_4.jpg"/>
         </div><!--/award-images-->
      </div><!--/bngcaption nivo-html-caption-->
      
      <div id="strangercaption" class="nivo-html-caption">
         <div class="movie-title"><center><strong>The Kindness of Strangers</strong></center></div>
         <div class="award-images kos">
         <img src="/images/kos_1.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/kos_1.jpg"/>
      	  <img src="/images/kos_2.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/kos_2.jpg"/>
         </div><!--/award-images-->
      </div><!--/strangercaption nivo-html-caption-->
      
      <div id="longroadbackcap" class="nivo-html-caption">
         <div class="movie-title"><center><strong>The Long Road Back</strong></center></div>
         <div class="award-images lrb">
         <img src="/images/lrb_1.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/lrb_1.jpg"/>
        <img src="/images/lrb_2.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/lrb_2.jpg"/>
        <img src="/images/lrb_3.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/lrb_3.jpg"/>
        </div><!--/award-images-->
      </div><!--/longroadbackcap nivo-html-caption-->
      
      <div id="kofcaption" class="nivo-html-caption">
         <div class="movie-title"><center><strong>Kettle of Fish</strong></center></div>
         <div class="award-images kof">
         <img src="/images/kof_1.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/kof_1.jpg"/>
      	  <img src="/images/kof_2.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/kof_2.jpg"/>
      	  </div><!--/award-images-->
      </div><!--/kofcaption nivo-html-caption-->
      
      <div id="wawcaption" class="nivo-html-caption">
         <div class="movie-title"><center><strong>Women at War</strong></center></div>
      </div><!--/wawcaption nivo-html-caption-->
      
      <div id="wotwcaption" class="nivo-html-caption">
        <div class="movie-title"><center><strong>Women on the Wing</strong></center></div>
         <div class="award-images wotw">
         <img src="/images/wotw_1.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/wotw_1.jpg"/>
         </div><!--/award-images-->
      </div><!--/wotwcaption nivo-html-caption-->
      
      <div id="otwcaption" class="nivo-html-caption">
         <div class="movie-title"><center><strong>Outside the Wire</strong></center></div>
         <div class="award-images otw">
         <img src="/images/otw_1.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/otw_1.jpg"/>
      <img src="/images/otw_2.jpg" align="left" style="display:inline; position:relative; height: 70px; margin-right: 10px;" alt="" title="" rel="/images/otw_2.jpg"/>
      		</div><!--/award-images-->
      </div><!--/otwcaption nivo-html-caption-->
<!--/slider captions-->




   </div><!--/home-frame-->


<?php require_once('footer.php');?>