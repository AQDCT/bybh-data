<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

<title>Posters</title>

<?php include("includes/head.php"); ?>


<style type="text/css">
#layer1 {
 position: absolute;
 z-index:1;
 visibility: hidden;
 width: 220px;
 height: 220px;
 left: 100px;
 top: 100px;
 margin-top:20px;
 margin-left:25px;
 background-color: #FFFFFF;
 border: 1px solid #000;
 padding: 10px;
}
#layer2 {
  position: absolute;
 z-index:1;
 visibility: hidden;
 width: 220px;
 height: 220px;
 left: 100px;
 top: 100px;
 margin-top:20px;
 margin-left:25px;
 background-color: #FFFFFF;
 border: 1px solid #000;
 padding: 10px;
}
#layer3 {
 position: absolute;
 z-index:1;
 visibility: hidden;
 width: 220px;
 height: 220px;
 left: 100px;
 top: 100px;
 margin-top:20px;
 margin-left:25px;
 background-color: #FFFFFF;
 border: 1px solid #000;
 padding: 10px;
}

#close {
 float: right;
}
</style>

<!-- Ken's Code -->

<!-- Pop Up Window -->
<script type=text/javascript>
x = 20;
y = 70;
function setVisible(obj)
{
 obj = document.getElementById(obj);
 obj.style.visibility = (obj.style.visibility == 'visible') ? 'hidden' : 'visible';
}
function placeIt(obj)
{
 obj = document.getElementById(obj);
 if (document.documentElement)
 {
  theLeft = document.documentElement.scrollLeft;
  theTop = document.documentElement.scrollTop;
 }
 else if (document.body)
 {
  theLeft = document.body.scrollLeft;
  theTop = document.body.scrollTop;
 }
 theLeft += x;
 theTop += y;
 obj.style.left = theLeft + 'px' ;
 obj.style.top = theTop + 'px' ;
 setTimeout("placeIt('layer1')",500);
}
window.onscroll = setTimeout("placeIt('layer1')",500);
</script>

<script type=text/javascript>
x = 20;
y = 70;
function setVisible(obj)
{
 obj = document.getElementById(obj);
 obj.style.visibility = (obj.style.visibility == 'visible') ? 'hidden' : 'visible';
}
function placeIt(obj)
{
 obj = document.getElementById(obj);
 if (document.documentElement)
 {
  theLeft = document.documentElement.scrollLeft;
  theTop = document.documentElement.scrollTop;
 }
 else if (document.body)
 {
  theLeft = document.body.scrollLeft;
  theTop = document.body.scrollTop;
 }
 theLeft += x;
 theTop += y;
 obj.style.left = theLeft + 'px' ;
 obj.style.top = theTop + 'px' ;
 setTimeout("placeIt('layer2')",500);
}
window.onscroll = setTimeout("placeIt('layer2')",500);
</script>
<script type=text/javascript>
x = 20;
y = 70;
function setVisible(obj)
{
 obj = document.getElementById(obj);
 obj.style.visibility = (obj.style.visibility == 'visible') ? 'hidden' : 'visible';
}
function placeIt(obj)
{
 obj = document.getElementById(obj);
 if (document.documentElement)
 {
  theLeft = document.documentElement.scrollLeft;
  theTop = document.documentElement.scrollTop;
 }
 else if (document.body)
 {
  theLeft = document.body.scrollLeft;
  theTop = document.body.scrollTop;
 }
 theLeft += x;
 theTop += y;
 obj.style.left = theLeft + 'px' ;
 obj.style.top = theTop + 'px' ;
 setTimeout("placeIt('layer3')",500);
}
window.onscroll = setTimeout("placeIt('layer3')",500);
</script>



</head>


<body style="background: #7ecefd">

<!-- Facebook -->
<!--
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=412475362202298";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->


<!-- Analytics -->
<?php include("includes/ga.php"); ?>
<!--  END Analytics -->

<!-- TOP MENU -->
<?php include("includes/menu.php"); ?>

<div class="row">
  
  <div class="eleven columns">
  </div>

  <div class="three columns">
    <ul class="nav open hide-for-small tpad" style="position: fixed; padding-left: 25px">
   
    </ul>   
  </div>
  
  <div class="one column">
  </div>
  
</div>

    
<div id="sectionT" class="tpad">
  
  <div class="row">
    <div class="nine columns offset-by-one">
      <h1>Teen Pregnancy Posters Available for Download</h1>
    </div>
  </div>
  
<!-- Social Media Popup (Ken) -->
<div class="row">
  <div class="ten columns offset-by-one">
    <p>Bring the “Unexpected” campaign to your community and start a conversation about abstinence, condom use, and preventing pregnancy and STIs. All we ask is that you give us a little shout out and share some love for healthy adolescents, this site, and our partners at Serve Marketing, who created the pregnant boy images. When you click on the download button, a simple menu option makes it easy to Tweet or post a message on your Facebook page. Free access to awesome health resources for teens? Now that’s unexpected!</p>
    <div class="five columns">
      <img src="images/poster-1.png">
      <form>
        <input type="button" class='button' value="Download" onclick="setVisible('layer1')" style="margin-top:12px; margin-left:35%;">
      </form>
    </div>
  
    <div id="layer1"><span id="close">
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      <a style="TEXT-DECORATION: none" href="javascript:setVisible('layer1')">x</a></span> 
      <p style="clear: both">Please take the time and share this with your friends.</p>
        
        <div style="clear: both">
        <a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u=http://beyoubehealthy.org/poster-test-1.php', 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"><img src="images/share_on_facebook.png" alt="Facebook"></a>


            <div style="padding-top: 7px;">
              <a href="https://twitter.com/share" class="twitter-share-button" data-text="Expect the #unexpected by getting awesome health resources from #beyoubehealthy, @ChiPublicHealth’s site for teens beyoubehealthy.org" >Tweet</a>
            </div>
    
            <div style="padding-top: 7px;">
              <script src="//platform.linkedin.com/in.js" type="text/javascript">
               lang: en_US
              </script>
              <script type="IN/Share" data-url="http://beyoubehealthy.org/poster-test-1.php" data-counter="right">
              </script>
            </div>
    
            <div style="clear: both; padding-top: 11px;" >
               <a href="pdf/TPPI_Poster_1.pdf" onClick="_gaq.push(['_trackEvent', 'Downloads', 'PDF', '/pdf/TPPI_Poster_1.pdf']);">Download your File</a>
            </div>
    
        </div>
    </div>


    <div class="five columns">
      <img src="images/poster-2.png">
      <form>
        <input type="button" class='button' value="Download" onclick="setVisible('layer2')" style="margin-top:12px; margin-left:35%;">
      </form>

      <div id="layer2"><span id="close">
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  
        <a style="TEXT-DECORATION: none" href="javascript:setVisible('layer2')">x</a></span> 
        <p style="clear: both">Please take the time and share this with your friends.</p>
  
        <div style="clear: both">
          <a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u=http://beyoubehealthy.org/poster-test-2.php', 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"><img src="images/share_on_facebook.png" alt="Facebook"></a>

            <div style="padding-top: 7px;">
              <a href="https://twitter.com/share" class="twitter-share-button" data-text="Make something #unexpected happen with #beyoubehealthy teen pregnancy prevention posters from @ChiPublicHealth. Get yours beyoubehealthy.org">Tweet</a>
            </div>
    
            <div style="padding-top: 7px;">
              <script src="//platform.linkedin.com/in.js" type="text/javascript">
               lang: en_US
              </script>
              <script type="IN/Share" data-url="http://beyoubehealthy.org/social-poster2.php" data-counter="right">
              </script>
            </div>
    
            <div style="clear: both; padding-top: 11px;" >
               <a href="pdf/TPPI_Poster_2.pdf" onClick="_gaq.push(['_trackEvent', 'Downloads', 'PDF', '/pdf/TPPI_Poster_2.pdf']);">Download your File</a>
            </div>
    
        </div>
      </div>  
    </div>




    <div class="five columns">
      <img src="images/poster-3.png">
      <form>
        <input type="button" class='button' value="Download" onclick="setVisible('layer3')" style="margin-top:12px; margin-left:35%;">
      </form>
  
      <div id="layer3"><span id="close">
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        <a style="TEXT-DECORATION: none" href="javascript:setVisible('layer3')">x</a></span> 
        <p style="clear: both">Please take the time and share this with your friends.</p>
      
        <div style="clear: both">
          <a href="#" 
  onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u=http://beyoubehealthy.org/poster-test-3.php', 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"><img src="images/share_on_facebook.png" alt="Facebook"></a>

            <div style="padding-top: 7px;">
              <a href="https://twitter.com/share" class="twitter-share-button" data-text="Exceed expectations with #unexpected teen pregnancy prevention posters. Get #beyoubehealthy info from @ChiPublicHealth beyoubehealthy.org">Tweet</a>
            </div>
    
            <div style="padding-top: 7px;">
              <script src="//platform.linkedin.com/in.js" type="text/javascript">
               lang: en_US
              </script>
              <script type="IN/Share" data-url="http://beyoubehealthy.org/social-poster3.php" data-counter="right">
              </script>
            </div>
    
            <div style="clear: both; padding-top: 11px;" >
               <a href="pdf/TPPI_Poster_3.pdf" onClick="_gaq.push(['_trackEvent', 'Downloads', 'PDF', '/pdf/TPPI_Poster_3.pdf']);">Download your File</a>
            </div>
    
        </div>
      </div>

    
  </div>
</div>

<!-- End Social -->

</body>
</html>