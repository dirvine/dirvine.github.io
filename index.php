<?php $title="Distributed Platform, MaidSafe"; ?>
<?php $metakeywords="Distributed Platform, MaidSafe"; ?>
<?php $metadescription="MaidSafe's distributed platform enables the creation of fast and secure applications that help ensure digital privacy, security and freedom for all."; ?>
<?php include('includes/header.php'); ?>
<body id="home">
<div id="container">
    <div id="main">
        <?php include('includes/nav.php'); ?>
        <div class="banner">
            <div class="container-12">
                <div class="plane" title="privacy secutiry freedom"></div>
            </div>
        </div>
        
        <div class="container-12">
        <div class="grid-12">
    
    <video id="video" poster="video/poster-mobile.png" tabindex="0" class="video-box" preload="auto" controls>
  				<source src="video/MaidSafe_Technology_Overview.mp4" type="video/mp4">
  				<source src="video/MaidSafe_Technology_Overview.ogv" type="video/ogv">
              <source src="video/MaidSafe_Technology_Overview.webm" type="video/webm">
				Your browser does not support the video tag.
		</video>
  
       
        </div>
        </div>
        <div class="container-12">
            <div class="grid-6">
                <a href="open-source-platform" class="home-box first"><h2 class="maidsafe-platform">MaidSafe Platform</h2><p>Learn about the MaidSafe Network</p></a>
            </div>
            
            <div class="grid-6">
                <a href="https://github.com/maidsafe" target="_blank" class="home-box last"><h2 class="github-code">GitHub</h2><p>Get straight to the code on GitHub</p></a>
            </div>
        
            <section>
                <h1>MaidSafe strive to deliver privacy, security and freedom online.</h1>
                <div class="grid-4 para">
                    <p>MaidSafe provides developers with a distributed platform that enables them to engineer fast and very secure applications.</p>
                </div>
                <div class="grid-4 para">
                    <p>We work with the Open Source community to constantly improve our software and to promote it's free distribution and use.</p>
                </div>
                <div class="grid-4 para">
                    <p>MaidSafe also makes user friendly consumer products that help ensure their privacy, security and freedom while simplifying their digital lifestyle.</p>
                </div>
            </section>
        
            <div class="grid-12">
                <div class="blog-box">
                    <div class="clearfix">
                    <h1>From the blog</h1>
                        
                        <div class="grid-5 article-1">
                            <p>We strongly believe that the community should not just obtain access to our code; but should be actively encouraged to view its development...</p>
                            <p><a href="blog/openness/">&gt; Read the article</a></p> 
                        </div>
                        <div class="grid-5 article-2">
                            <p>You have a duty to be honourable and ethical. You have an obligation to do what is legal. They are not the same things.</p>
                            <p><a href="blog/duty-and-obligation/">&gt; Read the article</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="JavaScript" type="text/javascript" src="http://trucosgoogleanalytics.com/omniture/s_code.js"></script>
<script language="JavaScript" type="text/javascript"><!--
/* You may give each page an identifying name, server, and channel on
the next lines. */
s.pageName="Home Page MaidSafe Technology "
s.channel="MaidSafe Technology"
/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
var s_code=s.t();if(s_code)document.write(s_code)//--></script>
<script language="JavaScript" type="text/javascript"><!--
if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
//--></script><noscript><img src="http://einteractive.112.2o7.net/b/ss/eintertrucosga/1/H.24.2--NS/0"
height="1" width="1" border="0" alt="" /></noscript><!--/DO NOT REMOVE/-->
<!-- End SiteCatalyst code version: H.24.2. -->

<script type="text/javascript">
	
		// Ejecutamos la función init una vez se carga el DOM
		document.addEventListener("DOMContentLoaded", init, false);
		
		function init(){
			var video = document.getElementById("video");
			video.addEventListener("play", videoPlay, false);
			video.addEventListener("pause", videoPause, false);
			video.addEventListener("ended", videoEnd, false);
			console.log(video);
		}
				
		function videoPlay(event) {
			trackEvent('Play', 'MaidSafe Technology'); 
		}
		
		function videoPause(event) {
			trackEvent('Pause', 'MaidSafe Technology'); 
		}
		
		function videoEnd(event) {
			trackEvent('Ended', 'MaidSafe Technology'); 
		}
		
		function trackEvent(action, title) {
			_gaq.push(['_trackEvent', 'Videos', action, title]);
		}
	</script>
<?php include('includes/footer.php'); ?>