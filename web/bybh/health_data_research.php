<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <title>Health Data Research | Be You Be Healthy</title>
  
<?php include("includes/head.php"); ?>

  
</head>


<body style="background: #046584">

<!-- Analytics -->
<?php include("includes/ga.php"); ?>
<!--  END Analytics -->

<!-- TOP MENU -->
<?php include("includes/menu.php"); ?>
<!--  END MENU -->




<div id="sectionT" class="sectionT tpad">
	<div class="row">
		<div class="nine columns offset-by-one">
			<h1>Health Data &amp; Research</h1>
		</div>
	</div>
	<div class="row">
		<div class="ten columns offset-by-one">
      <?php 
        if($_GET['m']==1){
          echo "<div class='alert-box success'>
  Thank you for submitting your information to BeYouBeHealthy.org.
  <a href='' class='close'>&times;</a>
</div>";
        }
      ?>
<p>A full portfolio of adolescent health data, and charts like these, will be developed in the coming months. This repository of health data is being designed to provide all stakeholders easy-to-access information about adolescent health needs and opportunities.
<ul class="block-grid two-up">
<li><a href='images/birth_rates.jpg' target='_blank'><img src='images/birth_rates.jpg'/></a>
<li><a href='images/STI.jpg' target='_blank'><img src='images/STI.jpg'/></a>
</ul>
<p>If you’d like to receive updates about this health repository, 
	please provide your information: 

	<!-- Right aligned and inline labels -->
<form style="width: 50%;" data-validate="parsley" action="contact-process.php">
    <label>Your Name:</label>
    <input type="text" placeholder="Your Name" data-required="true" name="name"/>
      <label>Organization:</label>
      <input type="text" placeholder="Organization" data-required="true" name="organization"/>
     <label>Email:</label>     
      <input type="email" placeholder="you@email.com" data-type="email" data-required="true" name="email"/>

  	<input type="submit"/>
</form>
	<p>Your contact information will not be shared.
		</div>
	</div>
</div>



<?php include("includes/footer.php"); ?>



</body>
</html>	
