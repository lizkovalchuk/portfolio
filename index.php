<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Liz Kovalchuk - Web Developer</title>
		<!-- <meta name="viewport" content="width=device-width"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Liz Kovalchuk, a fullstack developer based in Toronto. He does front and back end coding for web and mobile applications to be more interactive.">
		<link href="src/assets/libs/hamburgers.min.css" rel="stylesheet">
		<link href="src/assets/libs/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
		<link rel="shortcut icon" href="src/assets/images/logos/logo-favicon.png" />
		<link href="dist/style.css" rel="stylesheet" type="text/css">
		<!-- <link href="//db.onlinewebfonts.com/c/c1abe50701241db4325576abf409ee8c?family=HelveticaWorldW01-Bold" rel="stylesheet"> -->
		<!-- <script
		src="https://code.jquery.com/jquery-3.3.1.min.js"
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script> -->
		<script src="src/assets/libs/jquery-3.3.1.js"></script>
		<script src="src/assets/libs/waypoints.min.js"></script>
		<script src="src/assets/scripts/script.js"></script>
	</head>
	<body>
		<div id="body__div__modal-wrapper">
			<div id="body__div_page-wrapper">
				<header>
					<section id="header__section--toprow">
						<div id="header__div--container">
							<div id="header__div--h1-container">
								<a href="#"><h1 id="header__h1--name">Liz Kovalchuk - Web Developer</h1></a>
							</div>							
							<nav id="menu--desktop">
								<ul id="menu__ul--desktop" >
									<li><a tabindex="0" id="desktopMenu__a-portfolio" class="header-nav-link" href="#">Portfolio</a></li>																	
									<li><a tabindex="0" id="desktopMenu__a-about" class="header-nav-link" href="#">About</a></li>
									<li><a tabindex="0" id="desktopMenu__a-skills-and-tools" class="header-nav-link" href="#">Skills & Tools</a></li>
									<li><a tabindex="0" id="menu__li_desktop-contact-form" class="header-nav-link">Contact</a></li>
								</ul>
							</nav>
							<nav id="menu--mobile">
								<button tabindex="0" class="hamburger hamburger--squeeze" type="button">
									<span class="hamburger-box">
										<span class="hamburger-inner"></span>
									</span>
								</button>						
								<ul id="menu__ul--mobile" >
									<li><a id="mobileMenu__a-portfolio" class="header-nav-link" href="#">Portfolio</a></li>
									<li><a id="mobileMenu__a-about" class="header-nav-link" href="#">About</a></li>									
									<li><a id="mobileMenu__a-skills-and-tools" class="header-nav-link" href="#">Skills & Tools</a></li>
									<li><a tabindex="0" id="menu__li_mobile-contact-form" class="header-nav-link">Contact</a></li>
								</ul>
							</nav>
						</div>
					</section>
					<div id="banner__div--container">
						<div id="banner__section--welcome-text">
							<p id="banner__label--welcome-text-1"><span id="hidden-letter">L</span></p>
							<svg id="header__svg_underline">
								<g fill="none">
									<path stroke="black" d="M5 20 l1000 0" pathLength=""/>
								</g>
							</svg>
						</div>

						<script>
							window.onload = function(){
								// Opera 8.0+
								var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

								// Firefox 1.0+
								var isFirefox = typeof InstallTrigger !== 'undefined';

								// Safari 3.0+ "[object HTMLElementConstructor]" 
								var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);

								// Internet Explorer 6-11
								var isIE = /*@cc_on!@*/false || !!document.documentMode;

								// Edge 20+
								var isEdge = !isIE && !!window.StyleMedia;

								// Chrome 1+
								var isChrome = !!window.chrome && !!window.chrome.webstore;

								// Blink engine detection
								var isBlink = (isChrome || isOpera) && !!window.CSS;

								var logoContainer = document.getElementById("banner__div--logo-container");

								if(isIE || isEdge){
									var x = document.createElement("IMG");
									x.setAttribute("src", "src/assets/images/logos/logo-final-black.png");
									logoContainer.appendChild(x);
								}else{
									var x = document.createElement("IMG");
									x.setAttribute("src", "src/assets/images/logos/with-joshua1.svg");
									logoContainer.appendChild(x);
								}
							};
							
						</script>


						<div id="banner__div--logo-container">	
							<!--[if IE ]>
								<img src="src/assets/images/logos/logo-final-black.png" id="banner__img--logo-white" alt="Logo for Liz Kovalchuk">							
							<![endif]-->			
							<!-- <img src="src/assets/images/logos/with-joshua1.svg" id="banner__img--logo-white" alt="Logo for Liz Kovalchuk">							 -->
						</div>
						<div id="banner__div--orange-square"></div>
					</div>
					<div id="banner__div--downward-arrow">
						<i class="fal fa-chevron-down" id="banner__i--downward-arrow"></i>			
					</div>
				</header>


				<!-- PORTFOLIO BLOCK -->

				<div id="portfolio-data-page"></div>
				<section id="portfolio_section">				
					<div id="portfolio__div-h2-wrapper">
						<h2 id="portfolio-block">Portfolio</h2>				
						<svg id="portfolio__svg_underline">
							<g fill="none">
								<path stroke="black" d="M5 20 l600 0" pathLength=""/>
							</g>
						</svg>
					</div>
					<div class="portfolio-wrapper">						
						<div id="berryface-container" class="port-piece-container">
							<div id="berryface-port-piece-img">
								<img src="src/assets/images/portfolio-pieces/bf.png" alt="picture of berryface project">
							</div>
							<div class="portfolio__div--port-piece-text-container" id="berryface-port-piece-text">
								<h3>BerryFace</h3>
								<p>BerryFace is an interface that connects to a raspberry pi via an API to show the current temperature and humidity.</p>
								<p class="lower-text">Technologies: Raspberry Pi, React, Python, and Firebase</p>
								<div class="portfolio__div--links-container">
									<a tabindex="0" id="portfolio__a-berryFace-live" class="portfolio__links port-view-live" href="https://berryface.herokuapp.com/" target="_blank">View Live</a>
									<a tabindex="0" id="portfolio__a-berryFace-GH" class="portfolio__links port-view-GH" href="https://github.com/lizkovalchuk/React-BerryFace" target="_blank">View React Code</a>								
									<a tabindex="0" id="portfolio__a-berryFace-GH2" class="portfolio__links port-view-GH" href="https://github.com/lizkovalchuk/Python-BerryFace" target="_blank">View Python Code</a>								
								</div>
							</div>
						</div>
						<div id="stolen-bikes-container" class="port-piece-container">
							<div id="sb-port-piece-img">
								<img src="src/assets/images/portfolio-pieces/sb.png" alt="pitcure of stolen bikes project">
							</div>
							<div class="portfolio__div--port-piece-text-container" id="sb-port-piece-text">
								<h3>Stolen Bikes</h3>
								<p>A web application intergrating two different APIs to help users plan bicycle trips far from reported bike thiefs.</p>
								<p class="lower-text">Technologies: HTML, CSS, PHP and JQuery, Google Maps API and Bike Index API V3.</p>
								<div class="portfolio__div--links-container">
									<a tabindex="0" id="portfolio__a-sb-live" class="portfolio__links port-view-live" href="http://stolenbikes.tk/" target="_blank">View Live</a>
									<a tabindex="0" id="portfolio__a-sb-GH" class="portfolio__links port-view-GH" href="https://github.com/lizkovalchuk/API-project" target="_blank">View GitHub Code</a>
								</div>
							</div>
						</div>
						<div id="netboost-container" class="port-piece-container">
							<div id="netboost-port-piece-img">
								<img src="src/assets/images/portfolio-pieces/nb.png" alt="picture of netboost project">
							</div>
							<div class="portfolio__div--port-piece-text-container" id="netboost-port-piece-text">
								<h3>Netboost.ca</h3>
								<p>Project management feature that displays percantage and duration of milestone completion, task manager and teacher approve student choices.</p>
								<p class="lower-text">Technologies: HTML, CSS, JS, PHP, MySQL, Google Charts API</p>
								<div class="portfolio__div--links-container">
									<a tabindex="0" id="portfolio__a-netboost-live" class="portfolio__links port-view-live" href="http://netboost.ca/" target="_blank">View Live</a>
									<a tabindex="0" id="portfolio__a-netboost-GH" class="portfolio__links port-view-GH" href="https://github.com/lizkovalchuk/Milestones" target="_blank">View GitHub Code</a>								
									<a tabindex="0" id="portfolio__a-netboost-demo" class="portfolio__links port-view-demo" href="#" target="_blank">View Demo</a>								
								</div>
							</div>
						</div>
						<div id="symptom-tracker-container" class="port-piece-container">
							<div id="st-port-piece-img">
								<img src="src/assets/images/portfolio-pieces/st.png" id="st-pic" alt="picture of symptom tracker project">
							</div>
							<div class="portfolio__div--port-piece-text-container" id="st-port-piece-text">
								<h3>Symptom Tracker</h3>
								<p>Databse driven application that allows users to register and login to track their symptoms.</p>
								<p class="lower-text">Technologies: C#, .NET, MSSQL and CSS.</p>
								<div class="portfolio__div--links-container">
									<a tabindex="0" id="portfolio__a-st-live" class="portfolio__links port-view-live" href="http://symptomtrackermvc.azurewebsites.net/" target="_blank">View Live</a>
									<a tabindex="0" id="portfolio__a-st-GH" class="portfolio__links port-view-GH" href="#" target="_blank">View GitHub Code</a>
									<a tabindex="0" id="portfolio__a-st-demo" class="portfolio__links port-view-demo" href="#" target="_blank">View Demo</a>
								</div>
							</div>
						</div>
						<div id="ipmp-container" class="port-piece-container">
							<div id="ipmp-port-piece-img">
								<img src="src/assets/images/portfolio-pieces/ipmp.png" alt="picture of IPMP project">
							</div>
							<div class="portfolio__div--port-piece-text-container" id="ipmp-port-piece-text">
								<h3 id="portfolio__h3-ipmp">Humber College - International Project Management Alumni Network</h3>
								<p>Coded two custom WordPress plugins, one for custom profiles and the other to alter the GeoDirectory Theme style and content.</p>
								<p class="lower-text">Technologies: WordPress, JQuery, CSS and PHP.</p>
								<div class="portfolio__div--links-container">
									<a tabindex="0" id="portfolio__a-ipmp-live" class="portfolio__links port-view-live" href="http://ipmpalumninetwork.ca/" target="_blank">View Live</a>
									<a tabindex="0" id="portfolio__a-ipmp-GH" class="portfolio__links port-view-GH" href="https://github.com/lizkovalchuk/IPMP-WordPress-Custom-Plugins" target="_blank">View GitHub Code</a>								
									<a tabindex="0" id="portfolio__a-ipmp-demo" class="portfolio__links port-view-demo" href="#" target="_blank">View Demo</a>								
								</div>
							</div>
						</div>

						<div id="cm-container" class="port-piece-container">
							<div id="cm-port-piece-img">
								<img src="src/assets/images/portfolio-pieces/cm.png" id="cm-pic" alt="picture of contact manager application">
							</div>
							<!-- <div > -->
								<div class="portfolio__div--port-piece-text-container" id="cm-port-piece-text">								
									<h3>Contact Manager</h3>
									<p>Simple one page application to manage contacts using React, axios and JSON placeholder API.</p>
									<p class="lower-text">Technologies: React, Axios</p>
									<div class="portfolio__div--links-container">
										<a tabindex="0" id="portfolio__a-cm-live" class="portfolio__links port-view-live" href="https://lizkovalchuk.github.io/Contact-Manager/#/" target="_blank">View Live</a>
										<a tabindex="0" id="portfolio__a-cm-GH" class="portfolio__links port-view-GH" href="https://github.com/lizkovalchuk/Contact-Manager" target="_blank">View GitHub Code</a>
									</div>
								</div>
							<!-- </div> -->
						</div>



						<!-- <div id="comrade-cafe-container" class="port-piece-container">
							<div id="cc-port-piece-img">
								<img src="src/assets/images/portfolio-pieces/cc.png" id="cc-pic" alt="picture of comrade cafe project">
							</div>
							<div id="cc-port-piece-text">
								<div class="portfolio__div--port-piece-text-container">								
									<h3>Comrade Cafe</h3>
									<p>Built location, giftcard and about pages, project managed (this was a group project) and designed branding.</p>
									<p class="lower-text">Technologies: HTML, CSS and JQuery.</p>
									<div class="portfolio__div--links-container">
										<a tabindex="0" id="portfolio__a-cc-live" class="portfolio__links port-view-live" href="http://comradecafe.tk" target="_blank">View Live</a>
										<a tabindex="0" id="portfolio__a-cc-GH" class="portfolio__links port-view-GH" href="https://github.com/lizkovalchuk/JavaScript-Team-Project-Fall-2017" target="_blank">View GitHub Code</a>
									</div>
								</div>
							</div>
						</div> -->

						<!-- <div id="syn-key-container" class="port-piece-container">
							<div id="snc-port-piece-img">
								<img src="src/assets/images/portfolio-pieces/snc.png" id="snc-pic" alt="picture of synthesia keyboard project">
							</div>
							<div id="snc-port-piece-text">
								<h3>Synesthesia Keyboard</h3>
								<p>An exercise in keyframe animations. Click on a note on the piano keyboard to see its colour.</p>
								<p class="lower-text">Technologies: HTML, CSS and JavaScript</p>
								<a href="http://seenotecolours.tk/" target="_blank" class="port-view-live">View Live</a>
								<a href="https://github.com/lizkovalchuk/CSS-animation" target="_blank" class="port-view-GH">View GitHub Code</a>
							</div>
						</div> -->
					</div>
				</section>
				<div id="aboutme-data-page"></div>			
				<section id="aboutme__section">
					<div id="aboutme__div--header-svg-container">
						<h2 id="aboutme__h2">About</h2>
						<svg id="aboutme__svg_underline">
							<g fill="none">
								<path stroke="black" d="M5 20 l600 0" pathLength=""/>
							</g>
						</svg>
					</div>
					<div id="aboutme__div--container">					
						<h3 id="aboutme__h3">Creating beautiful, clean and highly functional websites.</h3>
						<div id="aboutme__div--resume">
							<a tabindex="0" href="src/assets/resume.pdf" target="_blank">View Resume</a>
						</div>					
						<div class="aboutme__div--items" id="imagine__div">
							<h3>Imagine</h3>
							<p>Great user experience for both frontend websites and backend applications start with great imagination.</p>
						</div>
						<div class="aboutme__div--items" id="organize__div">
							<h3>Organize</h3>
							<p>My meticulous attention to detail make for a smooth transition when transforming a vision into tangible results.</p>
						</div>
						<div class="aboutme__div--items" id="produce__div">
							<h3>Produce</h3>
							<p>Coding with complete concentration takes place after prototypes and specs are crystal clear.</p>
						</div>
					</div>
				</section>
			
				<!-- SKILLS AND TOOLS SECTION -->
				
				<div class="here-destination" id="skills-and-tools-data-page"></div>
				<section id="skills-and-tools-wrapper">			
					<div id="skills-and-tools--header-svg-container">
						<h2 id="skills-and-tools-heading-text">Skills and Tools</h2>
						<svg id="skills-and-tools__svg_underline">
							<g fill="none">
								<path stroke="black" d="M5 20 l2000 0" pathLength=""/>
							</g>
						</svg>				
					</div>	

					<div id="icon-container">			
						<div class="tool-icon-div" id="item-1">
							<img class="tool-icon" src="src/assets/images/tool-icons/html5.svg" alt="html logo">
							<span id="html-span">HTML</span>
						</div>
						<div class="tool-icon-div" id="item-2">
							<img class="tool-icon" src="src/assets/images/tool-icons/css3.svg" alt="css logo">					
							<span id="css-span">CSS</span>
						</div>
						<div class="tool-icon-div" id="item-3">
							<img class="tool-icon" src="src/assets/images/tool-icons/sass.svg" alt="git logo">
							<span id="sass-span">Sass</span>
						</div>
						<div class="tool-icon-div" id="item-4">
						<img class="tool-icon" src="src/assets/images/tool-icons/JS.png" alt="javascript logo">					
							<span id="javascript-span">JavaScript</span>
						</div>
						<div class="tool-icon-div" id="item-5">
							<img class="tool-icon" src="src/assets/images/tool-icons/jquery_logo.svg" alt="jquery logo">					
							<span id="jquery-span">JQuery</span>
						</div>
						<div class="tool-icon-div" id="item-6">
							<img class="tool-icon" src="src/assets/images/tool-icons/react.svg" alt="git logo">
							<span id="react-span">React</span>
						</div>		
					
						<div class="tool-icon-div" id="item-7">
							<img class="tool-icon" src="src/assets/images/tool-icons/angular.png" alt="sql logo">
							<span id="angular-span">Angular</span>
						</div>
						<div class="tool-icon-div" id="item-8">
							<img class="tool-icon" src="src/assets/images/tool-icons/gulp.svg" alt="sql logo">
							<span id="gulp-span">Gulp</span>
						</div>
						<div class="tool-icon-div" id="item-9">
						<img class="tool-icon" src="src/assets/images/tool-icons/webpack.png" alt="php logo">										
							<span id="webpack-span">Webpack</span>
						</div>
						<div class="tool-icon-div" id="item-10">
							<img class="tool-icon" src="src/assets/images/tool-icons/git_branch.svg" alt="github logo" >
							<span id="git-span">Git</span>
						</div>
						<div class="tool-icon-div" id="item-11">
							<img class="tool-icon" src="src/assets/images/tool-icons/visualstudio.svg" alt="Visual Studio logo">		
							<span id="vs-span">Visual Studio</span>
						</div>
						<div class="tool-icon-div" id="item-12">
							<img class="tool-icon" id="dotnet-img" src="src/assets/images/tool-icons/dot-net.png" alt="dot net logo">					
							<span id="dotnet-span">.NET</span>
						</div>
						<div class="tool-icon-div" id="item-13">
							<img class="tool-icon" src="src/assets/images/tool-icons/w3c.svg" alt="git logo">					
							<span id="wcag-span">WCAG</span>
						</div>	
						<div class="tool-icon-div" id="item-14"> 
							<img class="tool-icon" src="src/assets/images/tool-icons/wordpress.png" alt="git logo">					
							<span id="wordpress-span">WordPress</span>
						</div>
						<div class="tool-icon-div" id="item-15">
							<img class="tool-icon" src="src/assets/images/tool-icons/laravel.png" alt="Visual Studio logo">
							<span id="laravel-span">Laravel</span>
						</div>	
						<div class="tool-icon-div" id="item-16">
							<img class="tool-icon" src="src/assets/images/tool-icons/php-logo.png" alt="jquery logo">
							<span id="php-span">PHP</span>
						</div>	
						<div class="tool-icon-div" id="item-17">
							<img class="tool-icon" src="src/assets/images/tool-icons/sql-logo.png" alt="sql logo">					
							<span id="sql-span">SQL</span>
						</div>
						<div class="tool-icon-div" id="item-18">
							<img class="tool-icon" src="src/assets/images/tool-icons/mvc.png" alt="mvc logo">
							<span id="mvc-span">MVC</span>
						</div>
					</div>
				</section>
				
				<!-- FOOTER -->
				<div id="thank-you-section">
					<span id="thank-you-text"></span>
				</div>
				<div>
					<footer>	
						<div class="social-links">
							<a tabindex="0" href="https://github.com/lizkovalchuk" target="_blank" class="icon"><i class="fab fa-github"></i></a>
							<a tabindex="0" href="https://ca.linkedin.com/in/liz-kovalchuk-4803b86a" target="_blank" class="icon"><i class="fab fa-linkedin-in"></i></a>
							<a tabindex="0" href="https://www.instagram.com/lizthecellist/" target="_blank" class="icon"><i class="fab fa-instagram"></i></a>
							<a tabindex="0" href="https://twitter.com/lizthecellist" target="_blank" class="icon"><i class="fab fa-twitter"></i></a>
							<a tabindex="0" href="https://www.facebook.com/liz.kovalchuk" target="_blank" class="icon"><i class="fab fa-facebook-f"></i></a>
							<a tabindex="0" href="https://www.youtube.com/channel/UC7FfRr8dyecguF5082J23FQ" target="_blank" class="icon"><i class="fab fa-youtube"></i></a>																										
						</div>
					</footer>
				</div>
			</div>
		</div>
		<form id="contact-form" class="modal" action="?" method="post" onsubmit="return false">		
			<div class="modal-content">
				<div id="contactForm__div-h2Container">
					<h2 id="_contact">Contact</h2>
				</div>
				<i id="contactForm__i_closeIcon" class="fal fa-times"></i>				
				<label id="contactForm__label-name" for="contactForm__input-name">Name:</label>
				<input type="text" id="contactForm__input-name" name="name">
				<label id="contactForm__label-email" for="contactForm__input-email">Email:</label>
				<input type="text" id="contactForm__input-email" name="email">
				<label id="contactForm__label-message" for="contactForm__input-message">Message:</label>
				<textarea rows="10" id="contactForm__input-message" name="message"></textarea>
				<div id="contactForm__div-sendButton" class="custom-button">				
					<button tabindex="0" id="contactForm__button-sendButton">Send</button>
				</div>
			</div>
		</form>
	</body>
</html>