<!DOCTYPE html>


<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

<?php include("includes/head.php"); ?>
  <title>BeYouBeHealthy</title>


</head>


<body style="background: #FFF">

<!-- Analytics -->
<?php include("includes/ga.php"); ?>
<!--  END Analytics -->

<!-- TOP MENU -->
<?php include("includes/menu.php"); ?>
<!--  END MENU -->



<div class="row tpad135 home-grad">
	<div class="four mobile-four columns">
		<div class="holder smooth1">
			<a href="posters.php"><img class="bot-shadow rnd" src="http://beyoubehealthy.org/images/posters_homepage.png"></a>
		</div>
	</div>
    <div class="seven columns">
	 	<div id="featured" >
	 	
			<a href="bodies.php#section11">
			<img class="rnd" src="http://beyoubehealthy.org/images/slider3.jpg"></a>
			
			<a href="bodies.php#section11">
			<img class="rnd" src="http://beyoubehealthy.org/images/slider4.jpg"></a>
			
			<a href="love_the_glove.php#section4">
			<img class="rnd" src="http://beyoubehealthy.org/images/slider5.jpg"></a>
			
			<a href="http://sexedloop.com/2013/03/21/dont-bully-me-down" target="_blank">
			<img class="rnd" src="http://beyoubehealthy.org/images/slider6.jpg"></a>

			<a href="http://www.inspot.org" target="_blank">
			<img class="rnd" src="http://beyoubehealthy.org/images/slider7.jpg"></a>
			
		</div>

    </div>
    
    <div class="four columns">
   		<a href="love_the_glove.php"><img class="bot-shadow rnd" src="images/love_the_glove_home.png"></a>
	</div>
	
</div>

<div class="row home">
    <div class="fifteen columns centered" style="margin-top: 20px">	

		 <div class="three columns home-love" style="border-right: thin solid #dcdcdc">
			<div class="holder smooth">
				<a href="bodies.php"><img class="bot-shadow" src="http://beyoubehealthy.org/images/love.png"></a>
				<div class="go-top love">
					
					<!--Image Description-->
					<p>	</p> 
				</div>
			</div>
			<h4>Sex &amp; Relationships</h4>
		</div>
		
		 <div class="three columns home-health" style="border-right: thin solid #dcdcdc">
			<div class="holder smooth">
				<a href="health-matters.php"><img class="bot-shadow" src="http://beyoubehealthy.org/images/health.png"></a>
				<div class="go-top health">
					<!--Image Description
					<p>	</p> -->
				</div>
			</div>
			<h4>Health Matters</h4>
		</div>
		
		 <div class="three columns home-teen" style="border-right: thin solid #dcdcdc">
			<div class="holder smooth">
				<a href="teen_health_rights.php"><img class="bot-shadow" src="http://beyoubehealthy.org/images/rights.png"></a>
				<div class="go-top teen">
					<!--Image Description
					<p>	</p> -->
				</div>
			</div>
			<h4>Teen Health Care Rights</h4>
		</div>
		
		 <div class="three columns home-clinic" style="border-right: thin solid #dcdcdc">
			<div class="holder smooth">
				<a href="clinic_finder.php"><img class="bot-shadow" src="http://beyoubehealthy.org/images/clinic.png"></a>
				<div class="go-top clinic">
					<!--Image Description
					<p>	</p> -->
				</div>
			</div>
			<h4>Clinic Finder</h4>
		</div>
		
		 <div class="three columns home-data">
			<div class="holder smooth">
				<a href="health_data_research.php"><img class="bot-shadow" src="http://beyoubehealthy.org/images/data_research.png"></a>
				<div class="go-top data">
					
					<!--Image Description
					<p>	</p> -->
				</div>
				
			</div>
			<h4>Health Data & Research</h4>
		</div>

	</div>
</div>
    
<?php include("includes/footer.php"); ?>
  

  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <!-- <script src="javascripts/app.js"></script> -->

 
			<script>
		  $('#featured').orbit({
		  animation: 'fade',      // fade, horizontal-slide, vertical-slide, horizontal-push
		  animationSpeed: 1100,                // how fast animtions are
		  timer: true,                       // true or false to have the timer
		  resetTimerOnClick: true,           // true resets the timer instead of pausing slideshow progress
		  advanceSpeed: 4000,                 // if timer is enabled, time between transitions
		  pauseOnHover: true,                // if you hover pauses the slider
		  startClockOnMouseOut: true,        // if clock should start on MouseOut
		  startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
		  directionalNav: true,               // manual advancing directional navs
		  captions: false,                    // do you want captions?
		  captionAnimation: 'none',           // fade, slideOpen, none
		  captionAnimationSpeed: 800,         // if so how quickly should they animate in
		  bullets: false,                      // true or false to activate the bullet navigation
		  bulletThumbs: false,                // thumbnails for the bullets

		  afterSlideChange: function(){},     // empty function
		  fluid: true                         // or set a aspect ratio for content slides (ex: '4x3')
		});
    </script> 
    
    
  
</body>
</html>
