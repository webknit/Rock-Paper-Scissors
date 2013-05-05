<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
 
  <head>
  

  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name='keywords' content='' />
  <meta name='author' content='Shane Prendergast' />

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel='icon' type='image/png' href='http://function.webknit.co.uk/graphics/favicon.ico' />
  
	
  <!-- Boilerplate first then onto Base styles (Mobile First) and then other media queries  -->
  <link rel="stylesheet" href="assets/css/boilerplate.css" media="screen">
  <link rel="stylesheet" href="style.css" media="screen">
  <link rel="stylesheet" href="assets/css/min-480.css" media="only screen and (min-width: 480px)">
  <link rel="stylesheet" href="assets/css/min-768.css" media="only screen and (min-width: 768px)">
  <link rel="stylesheet" href="assets/css/desktop.css" media="only screen and (min-width: 1170px)">
  <link rel="stylesheet" href="assets/css/high-res.css" media="print, (-o-min-device-pixel-ratio: 5/4), (-webkit-min-device-pixel-ratio: 1.25), (min-resolution: 120dpi)">
    

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="http://function.webknit.co.uk/assets/js/libs/modernizr-2.6.2.min.js"></script>
  	
    
  <!--Internet Explorer up to version 8.0 can't read HTML5 tags properly, you can't style them.-->
  <!--[if lt IE 9]>
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
   
    <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->

	<script type="text/javascript">
	  (function() {
	    var config = {
	      kitId: 'tya3yzk',
	      scriptTimeout: 3000
	    };
	    var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var
	t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g,
	" ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElem
	ent("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text
	/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this
	.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{
	Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];
	s.parentNode.insertBefore(tk,s)
	  })();
	</script>       
	
	<script type="text/javascript" src="//use.typekit.net/cjd8tnl.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>

<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  
  <div class="container" class="clear">
 
 	<header class="clear">
 	
 		<a href="http://function.webknit.co.uk/">
 			<img src="http://function.webknit.co.uk/assets/img/function.svg" class="logo" />
 		</a>
 		
 		<h2>A collection of JS projects</h2>
 		
 	</header>
 	
 	<div class="row project-single ">
 	
 		
 			<h3>Rock, paper and Scissors</h3>
 			
 			<p class="intro">Rock-paper-scissors is a hand game usually played by two people, where players simultaneously form one of three shapes with an outstretched hand. The "rock" beats scissors, the "scissors" beat paper and the "paper" beats rock; if both players throw the same shape, the game is tied. Make a choice first, the computer does the same and the results add up accordingly.</p>
 			
 	</div><!-- .row -->
 			
 	<div class="row p-r-s">
 			
		<div class="one_three center-align">
		
			<h3>Take your pick</h3>
		
			<ul class="choices">
				<li>
					<a onclick="compare('paper', computerChoice)">
						<img src="assets/img/paper.png" />
					</a>
				</li>
				
				<li>
					<a onclick="compare('rock', computerChoice)">
						<img src="assets/img/rock.png" />
					</a>
				</li>
				
				<li>
					<a onclick="compare('scissors', computerChoice)">
						<img src="assets/img/scissors.png" />
					</a>
				</li>
			</ul>
		
		</div> <!-- one_three -->
		
		<div class="two_three center-align">
		
			<h3>Scores</h3>
		
			<div class="scores">
			
	 			<div class="score-box">
	 			
		 			<div id="playerScore"></div><!-- .computerScore -->
		 			
		 			<span>Player</span>
		 			
	 			</div><!-- score-box -->
	 			
	 			<div class="score-box">
	 			
		 			<div id="computerScore"></div><!-- .computerScore -->
		 			
		 			<span>Computer</span>
		 			
	 			</div><!-- score-box -->
 			
 		</div><!-- .scores -->
 		
 	</div> <!-- two_three -->
 	
 	
		<div class="three_three">
			
			<h3>Choices</h3>
		
			<ul class="decider">
		
				<li>
		 			
		 				<span>Player:</span>
		 				<span id="playerChoice">Pick one to get started!</span><!-- .playerChoice -->
			 			
		 		</li>
				
		 		<li>
		 			
		 				<span>Computer:</span>
		 				<span id="computerChoice">You first!</span><!-- .computerChoice -->
			 						 			
		 		</li>
		 		
	 		
	 		</ul>
 			
 	</div> <!-- three_three -->
 			
 	</div><!-- .row -->	
 	
 <footer>
 		
 		<ul>
 			<li>
 				<a href="http://www.webknit.co.uk/information/" target="_blank">
 					About me
 				</a>
 			</li>
 			<li>
 				<a href="https://twitter.com/WebKnit" target="_blank">
 					Twitter
 				</a>
 			</li>
 			<li>
 				<a href="https://github.com/webknit/Function" target="_blank">
 					Download Files
 				</a>
 			</li>
 		</ul>
 	
 	</footer>
 	
 
 </div><!-- .container --> 
  
  
   <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.9.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/script.js"></script>
  <!-- end scripts -->

 


</body>
</html>