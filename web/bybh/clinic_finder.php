<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <title>Clinic Finder | Be You Be Healthy</title>
  

<?php include("includes/head.php"); ?>

 
</head>


<body style="background: #F29120">

<!-- Analytics -->
<?php include("includes/ga.php"); ?>
<!--  END Analytics -->

<!-- TOP MENU -->
<?php include("includes/menu.php"); ?>
<!--  END MENU -->

<div class="row">
	
		<div class="eleven columns">
		</div>
	
		<div class="three mobile-four columns">
			<ul class="nav open hide-for-small tpad" style="position: fixed; padding-left: 25px">
			<h4>Pdf files for download</h4><hr>
			
		<h4>

			<li><a href="http://sexedloop.files.wordpress.com/2012/07/shd-cdph-clinics-only.pdf" target="_blank">Neighborhood Health Clinics</a></li>
			<li><a href="http://sexedloop.files.wordpress.com/2012/07/shd-school-based-health-centers-only.pdf" target="_blank">School Based Health Centers</a></li>
			<li><a href="http://sexedloop.files.wordpress.com/2012/07/substance-abuse-treatment.pdf" target="_blank">Substance Abuse Treatment</a></li>
			<li><a href="http://sexedloop.files.wordpress.com/2012/07/mental-health-services.pdf" target="_blank">Mental Health Services</a></li>
			</h4>
			<h4><li><a href="http://beyoubehealthy.org/pdf/Sexual-Health-Directory-V4.pdf" target="_blank">Download Full Directory</a></h4>
			

		</div>
		<div class="one column">
		</div>

</div>


<div id="sectionT" class="sectionT tpad">
		<div class="row">
			<div class="nine columns offset-by-one">
			<h1>Clinic Finder</h1>
			</div>
		</div>
			<!--<div class="row">
				<div class="ten columns offset-by-one">
				<div class="row">
					<div class="nine columns">
					<img style="padding-top: 15px" src="images/health_resources_logo.png">
					</div>
				</div>
				<div class="row">
					<div class="six columns offset-by-three">
					<p>The Chicago Department of Public Health, in 
					partnership with Chicago Public Schools, policy 
					makers, health care service providers, and many 
					other stakeholders invested in adolescent health, 
					have joined together to address the health needs 
					of adolescents. This directory is just one element of 
					a larger initiative designed to help expand access 
					to health care, improve the quality of provider 
					engagement, and reduce health disparities</p>
					</div>			
				</div>
			</div>-->
			
			<div class="row">
				<div class="ten columns offset-by-one section">
		
				<iframe style="padding-top: 25px" src="http://www.scribd.com/embeds/112712806/content?start_page=1&view_mode=scroll" data-auto-height="false" data-aspect-ratio="undefined" scrolling="no" id="doc_65550" width="100%" height="600" frameborder="0"></iframe>
				</div>
			</div>
		</div>
</div>


<?php include("includes/footer.php"); ?>




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
        



</body>
</html>	
