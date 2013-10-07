
<!-- We have 2 footer includes. This one is for pages with scrolling section functionality 
USE WITH SCROLLING PAGES -->

<footer>
	<hr>
	<div class="row">		
		<div class="fifteen columns">
			<div class="seven mobile-two columns">
				<ul style="padding-top:7px">
					<a href="http://aqdct.com" target="_blank">Site By AQDCT</a>
				</ul>
			</div>
			<div class="eight mobile-four columns">
				<ul class="right">
				<a href="about.php">About</a>&nbsp;&nbsp;&nbsp;
				<a href="parents_teachers.php">Parents &amp; Teachers</a>&nbsp;&nbsp;&nbsp;
				<a href="contact.php">Contact</a>&nbsp;&nbsp;&nbsp;
				<a href="site-map.php">Site Map</a>&nbsp;&nbsp;&nbsp;
				<a href="privacy_policy.php">Privacy Policy</a> &nbsp;&nbsp;
					
					<img src="images/healthy_chicago_logo.png" align="absmiddle" />
				</ul>
			</div>
		</div>
	</div>
</footer>  


  <!-- Included JS Files (Uncompressed) -->

  <script src="javascripts/jquery.js"></script>

  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="javascripts/jquery.foundation.forms.js"></script>
  <script src="javascripts/jquery.event.move.js"></script>
  <script src="javascripts/jquery.event.swipe.js"></script>
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  <script src="javascripts/jquery.placeholder.js"></script>
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  <script src="javascripts/parsley.min.js"></script>
  


<!-- Included JS Files (Compressed) -->
  <script src="javascripts/foundation.min.js"></script>

<!-- Initialize JS Plugins -->
<script src="javascripts/app.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="stylesheets/jquery.easing.1.3.js"></script>

 <script type="text/javascript">
            $(function() {
                $('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');
                   
                    event.preventDefault();
                });
            });
        </script>
        
<!-- We have 2 footer includes. This one is for pages with scrolling section functionality 
USE WITH SCROLLING PAGES -->
