<!DOCTYPE html>
<html>
<head>
	<title>Liz Kovalchuk</title>
	<meta name="viewport" content="width=device-width">
	<link href="https://use.fontawesome.com/14a8473206.css" media="all" rel="stylesheet">
	<link rel="shortcut icon" href="images/logo.png" />
	<link href="assets/style/style.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
  <script src="assets/scripts/script.js"></script>
</head>
<body>
	<header>
		<div id="nav-container">
			<nav class="top-nav">
				<ul>
					<li data-page="portfolio-block" class="nav-link"><a href="#">PORTFOLIO</a></li>
					<li data-page="aboutme-section" class="nav-link"><a href="#">ABOUT</a></li>
					<li data-page="skills-and-tools-wrapper" class="nav-link"><a href="#">SKILLS AND TOOLS</a></li>
					<li data-page="contact-frm" class="nav-link"><a href="#">CONTACT</a></li>
				</ul>
			</nav>

				<img src="assets/images/logo-final-white.svg" alt="logo" id="logo-white">	

			<div id="orange-square">
			</div>
		</div>
		<div id="creds-container">
			<h1 class="name">Liz Kovalchuk</h1>
			<h2 class="title">Web Developer</h2>
		</div>
		<div class="downward-arrow">
			<span class="fa fa-angle-down" id="dw-arrow" data-page="portfolio-block" ></span>
		</div>
	</header>




	<div id="portfolio-block" class="portfolio-wrapper">
		<div id="port-heading">
			<h3 id="port-heading-text">Portfolio</h3>
		</div>


		<!-- <div class="port-content">
			<div class="port-piece-wrapper">
				<div class="left-col">
					<h3>BerryFace</h3>
					<p>
						BerryFace is an interface that connects to a raspberry pi via an API to show the current temperature and humidity. In charge of all frontend and project management in team of four.
					</p>
					<p class="lower-text">
						Technologies: Illustrator, React, Python and Django
					</p>
					<a href="http://berryface.tk:8000" target="_blank" class="port-view-live">View Live</a>
					<a href="#" target="_blank" class="port-view-GH">View GitHub Code</a>
				</div>
				<div>
					<img src="images/bf.png" id="snc-pic">
				</div>
			</div>
		</div> -->


		<!-- FIRST PORT PIECE -->

		<div class="port-content">
			<div class="port-piece-wrapper">
				<div class="left-col">
					<h3>Milestones</h3>
					<p>
						Database Driven website project management feature that displays percantage and duration of milestone completion.
					</p>
					<p class="lower-text">
						Technologies: HTML, CSS, JavaScript, PHP, MySQL, Google Charts API
					</p>
					<a href="http://netboost.ca/" target="_blank" class="port-view-live">View Live</a>
					<a href="https://github.com/lizkovalchuk/Milestones" target="_blank" class="port-view-GH">View GitHub Code</a>
				</div>
				<div>
					<img src="images/ms.png" id="snc-pic">
				</div>
			</div>
		</div>

		<!-- FIRST SECOND PIECE -->

		<div class="port-content">
			<div class="port-piece-wrapper">
				<div class="left-col">
					<h3>Synesthesia Keyboard</h3>
					<p>
						An exercise in keyframe animations. Click on a note on the piano keyboard to see its colour.
					</p>
					<p class="lower-text">
						Technologies: HTML, CSS and JavaScript
					</p>
					<a href="http://seenotecolours.tk/" target="_blank" class="port-view-live">View Live</a>
					<a href="https://github.com/lizkovalchuk/CSS-animation" target="_blank" class="port-view-GH">View GitHub Code</a>
				</div>
				<div>
					<img src="images/snc.png" id="snc-pic">
				</div>
			</div>
		</div>

		<!-- FIRST THIRD PIECE -->

		<div class="port-content">
			<div class="port-piece-wrapper">
				<div class="left-col">
					<h3>Stolen Bikes</h3>
					<p>
						A web application intergrating two different APIs to help users plan bicycle trips far from reported bike thiefs.
					</p>
					<p class="lower-text">
						Technologies: HTML, CSS and JQuery, Google Maps API and Bike Index API V3.
					</p>
					<a href="http://stolenbikes.tk/" target="_blank" class="port-view-live">View Live</a>
					<a href="https://github.com/lizkovalchuk/API-project" target="_blank" class="port-view-GH">View GitHub Code</a>
				</div>
				<div>
					<img src="images/sb.png" id="snc-pic">
				</div>
			</div>
		</div>

		<!-- FIRST FOURTH PIECE -->

		<div class="port-content">
			<div class="port-piece-wrapper">
				<div class="left-col">
					<h3>Giftcards</h3>
					<p>
						An interactive interface for users to custom build giftcards on a restaurant website.
					</p>
					<p class="lower-text">
						Technologies: HTML, CSS and JQuery.
					</p>
					<a href="http://comradecafe.tk/giftcard.html" target="_blank" class="port-view-live">View Live</a>
					<a href="https://github.com/lizkovalchuk/JavaScript-Team-Project-Fall-2017" target="_blank" class="port-view-GH">View GitHub Code</a>
				</div>
				<div>
					<img src="images/gc.png" id="snc-pic">
				</div>
			</div>
		</div>
	</div>

	<!-- ABOUT ME SECTION -->
	<span id="aboutme-section"></span>
	<div id="aboutme-section">
		<h3 id="aboutme-heading">About Me</h3>
		<p id="aboutme-text">Front-end developer graduating from Humber College this July 2018. Trained as a classical musician, I apply inherent understanding of structure, complex pattern recognition, logical symbolism and analytical understanding into my code. My experiences as an artist 
			and performer enhance my ability to ensure that my work has a cohesive narrative that provides great user experience.
		</p>
	</div>

	<!-- SKILLS AND TOOLS SECTION -->

	<div id="skills-and-tools-wrapper">
		<div class="port-content">
			<h3 id="skills-and-tools-heading-text">Skills and Tools</h3>
		</div>
		<div id="icon-wrapper">
			<div id="icon-container">
				<div id="col1-icons">
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/html5.svg">
						<span id="html-span">HTML</span>
					</div>
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/php-logo.png">
						<span id="php-span">PHP</span>
					</div>
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/git_branch.svg">
						<span id="git-span">Git</span>
					</div>
				</div>
				<div id="col2-icons">			
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/css3.svg">
						<span id="css-span" >CSS</span>
					</div>
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/sql-logo.png">
						<span id="sql-span">SQL</span>
					</div>
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/github_full.svg" >
						<span id="GH-span">GitHub</span>
					</div>
				</div>
				<div id="col3-icons">
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/javascript.svg">
						<span id="JS-span">JavaScript</span>
					</div>	
					<div class="tool-icon-div"> 
						<img class="tool-icon" id="dotnet-img" src="images/tool-icons/dot-net.png">
						<span id="dotnet-span">.NET</span>
					</div>
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/visualstudio.svg" >
						<span id="VS-span">Visual Studio</span>
					</div>	
				</div>
				<div id="col4-icons">
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/jquery_logo.svg">
						<span id="JQ-span">JQuery</span>
					</div>	
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/mvc.png">
						<span id="mvc-span">MVC</span>
					</div>
					<div class="tool-icon-div">
						<img class="tool-icon" src="images/tool-icons/adobe.png" >
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
				<label for="message">Message:</label>
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
				<a href="https://www.instagram.com/lizthecellist/" target="_blank" class="icon"><img src="images/icons/inst.png" id="inst"></a>
				<a href="https://www.facebook.com/liz.kovalchuk" target="_blank" class="icon"><img src="images/icons/fb.png" id="fb"></a>
				<a href="https://twitter.com/lizthecellist" target="_blank" class="icon"><img src="images/icons/tw.png" id="tw"></a>
				<a href="https://ca.linkedin.com/in/liz-kovalchuk-4803b86a" target="_blank" class="icon"><img src="images/icons/li.png" id="li"></a>
				<a href="https://github.com/lizkovalchuk" target="_blank" class="icon"><img src="images/icons/gh.png" id="gh"></a>
				<a href="https://www.youtube.com/channel/UC7FfRr8dyecguF5082J23FQ" target="_blank" class="icon"><img src="images/icons/ut.png" id="ut"></a>
			</div>
		</footer>
	</div>
</body>
</html>