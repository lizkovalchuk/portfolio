<!DOCTYPE html>
<html>
	<head>
		<title>Liz Kovalchuk</title>
		<meta name="viewport" content="width=device-width">
		<link href="src/assets/libs/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="images/logo.png" />
		<!-- <link href="assets/style/style.min.css" rel="stylesheet" type="text/css"> -->
		<link href="dist/style.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>
		<script src="src/assets/scripts/script.js"></script>
	</head>
	<body>
		<div id="page-wrapper">

			<header>
				<section id="header-row">
					<h1 id="h1-name">Liz Kovalchuk - Web Developer</h1>
					<nav id="desktop-nav">
						<ul id="desktop-nav-ul" >
							<li data-page="aboutme-section"><a class="header-nav-link" href="#">About</a></li>
							<li data-page="portfolio-block"><a class="header-nav-link" href="#">Portfolio</a></li>
							<li data-page="skills-and-tools-wrapper"><a class="header-nav-link" href="#">Skills and Tools</a></li>
							<li data-page="contact-frm"><a class="header-nav-link" href="#">Contact</a></li>
						</ul>
					</nav>
					<nav id="mobile-nav">
						<ul id="mobile-nav-ul" >
							<li data-page="aboutme-section"><a class="header-nav-link" href="#">About</a></li>
							<li data-page="portfolio-block"><a class="header-nav-link" href="#">Portfolio</a></li>
							<li data-page="skills-and-tools-wrapper"><a class="header-nav-link" href="#">Skills and Tools</a></li>
							<li data-page="contact-frm"><a class="header-nav-link" href="#">Contact</a></li>
						</ul>
						<i class="fal fa-bars"></i>
					</nav>
				</section>
				<div id="banner-container">
					<section id="welcome-text-section">
						<label id="welcome-text-scene-1"></label>
					</section>
					<div id="white-logo-container">				
						<img src="src/assets/images/logos/masked-logo.svg" id="logo-white">
					</div>
					<div id="orange-square"></div>
				</div>
				<div class="downward-arrow">
					<i class="fal fa-chevron-down" id="dw-arrow" data-page="portfolio-block" ></i>			
				</div>
			</header>
			<!-- ABOUT ME SECTION -->
			<section id="aboutme-section">
				<!-- <span id="aboutme-section"></span> -->
				<div id="div-aboutme-section">
					<h2 id="aboutme-heading">About Me</h2>
					<p id="aboutme-text">Front-end developer graduating from Humber College this July 2018. Trained as a classical musician, I apply inherent understanding of structure, complex pattern recognition, logical symbolism and analytical understanding into my code. My experiences as an artist 
						and performer enhance my ability to ensure that my work has a cohesive narrative that provides great user experience.
					</p>
				</div>
				<div id="portfolio-block" class="portfolio-wrapper">
					<div id="port-heading">
						<h3 id="port-heading-text">Portfolio</h3>
					</div>	
					<div id="netboost-container" class="port-piece-container">
						<div id="netboost-port-piece-img">
							<img src="src/assets/images/portfolio-pieces/nb.png" alt="picture of netboost project">
						</div>
						<div id="netboost-port-piece-text">
							<h3>Netboost.ca</h3>
							<p>Database Driven website project management feature that displays percantage and duration of milestone completion.</p>
							<p class="lower-text">Technologies: HTML, CSS, JavaScript, PHP, MySQL, Google Charts API</p>
							<a href="http://netboost.ca/" target="_blank" class="port-view-live">View Live</a>
							<a href="https://github.com/lizkovalchuk/Milestones" target="_blank" class="port-view-GH">View GitHub Code</a>								
						</div>
					</div>
					<div id="stolen-bikes-container" class="port-piece-container">
						<div id="sb-port-piece-img">
							<img src="src/assets/images/portfolio-pieces/sb.png" alt="pitcure of stolen bikes project">
						</div>
						<div id="sb-port-piece-text">
							<h3>Stolen Bikes</h3>
							<p>A web application intergrating two different APIs to help users plan bicycle trips far from reported bike thiefs.</p>
							<p class="lower-text">Technologies: HTML, CSS and JQuery, Google Maps API and Bike Index API V3.</p>
							<a href="http://stolenbikes.tk/" target="_blank" class="port-view-live">View Live</a>
							<a href="https://github.com/lizkovalchuk/API-project" target="_blank" class="port-view-GH">View GitHub Code</a>
						</div>
					</div>
					<div id="syn-key-container" class="port-piece-container">
						<div id="snc-port-piece-img">
							<img src="src/assets/images/portfolio-pieces/snc.png" id="snc-pic">
						</div>
						<div id="snc-port-piece-text">
							<h3>Synesthesia Keyboard</h3>
							<p>An exercise in keyframe animations. Click on a note on the piano keyboard to see its colour.</p>
							<p class="lower-text">Technologies: HTML, CSS and JavaScript</p>
							<a href="http://seenotecolours.tk/" target="_blank" class="port-view-live">View Live</a>
							<a href="https://github.com/lizkovalchuk/CSS-animation" target="_blank" class="port-view-GH">View GitHub Code</a>
						</div>
					</div>
					<div id="comrade-cafe-container" class="port-piece-container">
						<div id="cc-port-piece-img">
							<img src="src/assets/images/portfolio-pieces/cc.png" id="cc-pic">
						</div>
						<div id="cc-port-piece-text">
							<h3>Giftcards</h3>
							<p>An interactive interface for users to custom build giftcards on a restaurant website.</p>
							<p class="lower-text">Technologies: HTML, CSS and JQuery.</p>
							<a href="http://comradecafe.tk/giftcard.html" target="_blank" class="port-view-live">View Live</a>
							<a href="https://github.com/lizkovalchuk/JavaScript-Team-Project-Fall-2017" target="_blank" class="port-view-GH">View GitHub Code</a>
						</div>
					</div>
				</div>
			</section>
		
			<!-- SKILLS AND TOOLS SECTION -->
	
<div id="skills-and-tools-wrapper">
<div class="port-content">
<h3 id="skills-and-tools-heading-text">Skills and Tools</h3>
</div>
<div id="icon-wrapper">
<div id="icon-container">
<div id="col1-icons">
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/html5.svg" alt="html logo">
<span id="html-span">HTML</span>
</div>
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/php-logo.png" alt="php logo">
<span id="php-span">PHP</span>
</div>
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/git_branch.svg" alt="git logo">
<span id="git-span">Git</span>
</div>
</div>
<div id="col2-icons">			
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/css3.svg" alt="css logo">
<span id="css-span" >CSS</span>
</div>
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/sql-logo.png" alt="sql logo">
<span id="sql-span">SQL</span>
</div>
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/github_full.svg" alt="github logo" >
<span id="GH-span">GitHub</span>
</div>
</div>
<div id="col3-icons">
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/javascript.svg" alt="javascript logo">
<span id="JS-span">JavaScript</span>
</div>	
<div class="tool-icon-div"> 
<img class="tool-icon" id="dotnet-img" src="images/tool-icons/dot-net.png" alt="dot net logo">
<span id="dotnet-span">.NET</span>
</div>
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/visualstudio.svg" alt="Visual Studio logo">
<span id="VS-span">Visual Studio</span>
</div>	
</div>
<div id="col4-icons">
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/jquery_logo.svg" alt="jquery logo">
<span id="JQ-span">JQuery</span>
</div>	
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/mvc.png" alt="mvc logo">
<span id="mvc-span">MVC</span>
</div>
<div class="tool-icon-div">
<img class="tool-icon" src="images/tool-icons/adobe.png" alt="adobe logo" >
<span id="adobe-span">Adobe</span>
</div>
</div>
</div>
</div>
</div>

	
		<!-- FORM -->
	
		<!-- <form id="contact-frm" action="mailer.php" method="post"> -->
			<!-- <div id="contact-frm"> -->
				
				<div id="contact-frm" class="form-wrapper">
				<h2 id="_contact">Contact</h2>
					<div >
						<label for="name">Name:</label>
					</div>
					<div>
						<input type="text" id="name" name="name">
					</div>
					<div>
						<label for="email">Email:</label>
					</div>
					<div>
						<input type="text" id="email" name="email">
					</div>
					<div >
						<label for="messagebox">Message:</label>
					</div>
					<div>
						<!-- <input type="textarea" id="messagebox" rows="10"> -->
						<textarea rows="15" id="messagebox" name="message"></textarea>
					</div>
					<div class="custom-button">
						<button id="mail-button">SEND</button>
					</div>
				</div>
			<!-- </div> -->
		<!-- </form> -->
	
			<!-- FOOTER -->
	
	
			<div>
				<footer>	
					<div class="social-links">
						<a href="https://www.instagram.com/lizthecellist/" target="_blank" class="icon"><img src="images/icons/inst.png" id="inst" alt="instagram logo"></a>
						<a href="https://www.facebook.com/liz.kovalchuk" target="_blank" class="icon"><img src="images/icons/fb.png" id="fb" alt="facebook logo"></a>
						<a href="https://twitter.com/lizthecellist" target="_blank" class="icon"><img src="images/icons/tw.png" id="tw" alt="twitter logo"></a>
						<a href="https://ca.linkedin.com/in/liz-kovalchuk-4803b86a" target="_blank" class="icon"><img src="images/icons/li.png" id="li" alt="linked in logo"></a>
						<a href="https://github.com/lizkovalchuk" target="_blank" class="icon"><img src="images/icons/gh.png" id="gh" alt="github logo"></a>
						<a href="https://www.youtube.com/channel/UC7FfRr8dyecguF5082J23FQ" target="_blank" class="icon"><img src="images/icons/ut.png" id="ut" alt="YouTube logo"></a>
					</div>
				</footer>
			</div>
		</div>
	</body>
</html>