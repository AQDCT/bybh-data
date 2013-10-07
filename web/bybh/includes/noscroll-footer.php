<!-- We have 2 footer includes. This one is for pages with NO SCROLLING functionality 
USE WITH NON-SCROLLING PAGES -->

<footer class="noscroll-footer">
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
					<a href="about.php">About This Site</a> &nbsp;&nbsp;&nbsp;&nbsp;
					<a href="site-map.php">Site Map</a>&nbsp;&nbsp;&nbsp;
					<a href="privacy_policy.php">Privacy Policy</a> &nbsp;&nbsp;
					
					<img src="/CDC/web/bybh/images/healthy_chicago_logo.png" align="absmiddle" />
				</ul>
			</div>
		</div>
	</div>
</footer>   


  <script src="/CDC/web/bybh/javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  <script src="/CDC/web/bybh/javascripts/jquery.foundation.orbit.js"></script>
  <script src="/CDC/web/bybh/javascripts/jquery.foundation.accordion.js"></script>
  <script src="/CDC/web/bybh/javascripts/foundation.min.js"></script>
  <script type="text/javascript" src="/CDC/web/bybh/stylesheets/jquery.easing.1.3.js"></script>

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

