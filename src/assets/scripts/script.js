/*******************************************
*TABLE OF CONTENTS
*=================
*1. Scroll to divs
*2. Contact Form Front-End
*3. Mailer Functionality
*4. Welcome Text
*5. Toggle Class
*6. IPMP header
*7. Hamburger
*8. IsFocus for Tabbing
*9. Thanks for Visiting (viewport)
*********************************************/


//=========== 1. Scroll to Divs ===========//


$(document).ready(function (){
	var skillsAndToolsDestination = document.querySelector('#skills-and-tools-data-page');
	var portfolioDestination = document.querySelector('#portfolio-data-page');		
	var aboutDestination = document.querySelector('#aboutme-data-page');		


	$('#desktopMenu__a-portfolio').click(function() {
		$('html, body').animate({
		  scrollTop: $(portfolioDestination).offset().top
		},100)
	})
	$('#mobileMenu__a-portfolio').click(function() {
		$('html, body').animate({
		  scrollTop: $(portfolioDestination).offset().top
		},100)
	})
	$('#banner__i--downward-arrow').click(function() {
		$('html, body').animate({
		  scrollTop: $(portfolioDestination).offset().top
		},100)
	})

	$('#desktopMenu__a-about').click(function() {
		$('html, body').animate({
		  scrollTop: $(aboutDestination).offset().top
		},100)
	})
	$('#mobileMenu__a-about').click(function() {
		$('html, body').animate({
		  scrollTop: $(aboutDestination).offset().top
		},100)
	})

	$('#desktopMenu__a-skills-and-tools').click(function() {
		$('html, body').animate({
		  scrollTop: $(skillsAndToolsDestination).offset().top
		},100)
	})
	$('#mobileMenu__a-skills-and-tools').click(function() {
		$('html, body').animate({
		  scrollTop: $(skillsAndToolsDestination).offset().top
		},100)
	})
});




//=========== 2. Contact Form Front-End ===========//

$(document).ready(function (){
	$('#menu__li_desktop-contact-form').click(contactFormModalOpen);
	$('#menu__li_mobile-contact-form').click(contactFormModalOpen);
	$('#contactForm__i_closeIcon').click(contactFormModalClose);
	// $('#body__div__modal-wrapper').click(contactFormModalClose);
});

function contactFormModalOpen(){	
	$(".modal").css("display", "block");	
	$("#body__div__modal-wrapper").addClass("modal-wrapper-modal-clicked");
	$(".modal").addClass("modal-clicked");
	
	$("#header__section--toprow").addClass("modal-post-clicked-header__section--toprow");
	$("#body__div_page-wrapper").addClass("modal-post-clicked-page-wrapper");


	// var windowHeight = $(window).height();
	// // console.log("the window height as is is "+ windowHeight);

	// var topPercentage = windowHeight * 0.1;
	// // console.log("10% of the window height is "+ topPercentage)
}

function contactFormModalClose(){
	$(".modal").css("display", "none");		
	$("#body__div__modal-wrapper").removeClass("modal-wrapper-modal-clicked");
	$(".modal").removeClass("modal-clicked");
	
	$("#header__section--toprow").removeClass("modal-post-clicked-header__section--toprow");
	$("#body__div_page-wrapper").removeClass("modal-post-clicked-page-wrapper");
}

//=========== 3. Mailer functioanlity===========//

$(document).ready(function (event){
	$('#contactForm__button-sendButton').click(button_mail_click);
});


function button_mail_click(){
	var email = $('#contactForm__input-email').val();
	var name = $('#contactForm__input-name').val();
	var message = $('#contactForm__input-message').val();
	var emailValidation = pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

	$.ajax({
		url:'../lkcode/mailer.php',
		type: 'POST',
		data:{
				name:name,
				email:email,
				message:message
		},
		error:function(){
			alert("didnt work");
		},
		success: function(data){
		
			if(data == "No arguments Provided!" ){

				// ==================== Error messages code

				//Name
				if( $('#contactForm__input-name').val() == '' || $('#contactForm__input-name').val() == null ){
					if ($('#contactForm__p-name-errorMessage').length == 0){
						$("#contactForm__input-name").after( "<p id='contactForm__p-name-errorMessage'>Name cannot be empty</p>" );
					}
				} else {
					$('#contactForm__p-name-errorMessage').remove();
				}

				//Email
				if (emailValidation.test(email) == false){	
					 if ($('#contactForm__p-email-errorMessage').length == 0){
						$("#contactForm__input-email").after( "<p id='contactForm__p-email-errorMessage'>Must be a valid email</p>" );
					}				
				}
				if (emailValidation.test(email) == true){										
					$('#contactForm__p-email-errorMessage').remove();
				}

				//Message
				if( $('#contactForm__input-message').val() == '' || $('#contactForm__input-message').val() == null ){
					if ($('#contactForm__p-message-errorMessage').length == 0){
						$("#contactForm__input-message").after( "<p id='contactForm__p-message-errorMessage'>Message cannot be empty</p>" );
					}
				} else {
					$('#contactForm__p-message-errorMessage').remove();
				}
			}  
			else { // this else is when arguments are provided and ajax is successful

				$('#contactForm__button-sendButton').attr("disabled", true);
				$('#contactForm__button-sendButton').text('Loading...');
				
				function delayModalContentRemoval(){
					$('.modal-content').remove();
					$('#contact-form').append("<div id='contactForm__div-message-sent-container'><p id='contactForm__p-message-sent'></p></div>")
					// $('#contact-form').append("<div id='contactForm__div-message-sent-container'></div>")
					setTimeout(animateMessageSentText,500,"#contactForm__p-message-sent","Thanks for reaching out!", 2);
	
					function animateMessageSentText(label_name, text, timer){
						t = 0;
						text = text;
						var milisecondPerFrame = Math.ceil(timer * 500 / text.length);
						for (var i = 0; i < text.length; i++) 
						{		
							setTimeout(textFrame, i*milisecondPerFrame, text.substring(0, i + 1));
						}
					};
	
					function textFrame(text){
						$("#contactForm__p-message-sent").html(text);
					};
	
					function addCloseIcon(){
						$('#contactForm__div-message-sent-container').append('<i id="contactForm__i-closeIcon-messageSent" class="fal fa-times" onClick="contactFormModalCloseMessageSent()"></i>');
					}
					setTimeout(addCloseIcon, 2000);
				}
				setTimeout(delayModalContentRemoval, 500);

				
			}
		},		
	});
}
		
function contactFormModalCloseMessageSent(){			
	$(".modal").css("display", "none");		
	$("#body__div__modal-wrapper").removeClass("modal-wrapper-modal-clicked");
	$(".modal").removeClass("modal-clicked");
	
	$("#header__section--toprow").removeClass("modal-post-clicked-header__section--toprow");
	$("#body__div_page-wrapper").removeClass("modal-post-clicked-page-wrapper");
}


//=========== 4. Welcome Text =============//

$(document).ready(function(){
	setTimeout(animateText,500,"banner__label--welcome-text-1","Designing with code", 2.5);
});

function animateText(label_name, text, timer){
	t = 0;
	text = text;
	var milisecondPerFrame = Math.ceil(timer * 500 / text.length);
	for (var i = 0; i < text.length; i++) 
	{		
		setTimeout(textFrame, i*milisecondPerFrame, text.substring(0, i + 1));
	}
};

function textFrame(text){
	$("#banner__label--welcome-text-1").html(text);
};


//=========== 5. Toggle Class with JavaScript =============//

window.addEventListener('load', function() {
	var smallScreen = false;
	var widthOnLoad = window.innerWidth;
	
	if(widthOnLoad < 500){
		smallScreen = true;
	} 

	if(smallScreen == false) {
		toggleBlurImageClass();
	}
});

// RESIZER

var resizeId;
window.addEventListener("resize", function(){
	clearTimeout(resizeId);
	resizeId = setTimeout(widthWatcher, 500);
});

function widthWatcher(){
	var widthOnResize = window.innerWidth;
	// console.log(widthOnResize + " from widthWatcher function");	

	if(widthOnResize > 500){
		// console.log(widthOnResize + " from if inside widthWatcher function");
		toggleBlurImageClass();
	} 
	if(widthOnResize < 500){
		var berryFaceText = document.querySelector('#berryface-port-piece-text');
		var berryFaceImg = document.querySelector('.port-piece-container #berryface-port-piece-img img');

		var stolenBikesText = document.querySelector('#sb-port-piece-text');
		var stolenBikesImg = document.querySelector('.port-piece-container #sb-port-piece-img img');

		var netboostText = document.querySelector('#netboost-port-piece-text');
		var netboostImg = document.querySelector('.port-piece-container #netboost-port-piece-img img');

		var symptomTrackerText = document.querySelector('#st-port-piece-text');
		var symptomTrackerImg = document.querySelector('.port-piece-container #st-port-piece-img img');

		var ipmpText = document.querySelector('#ipmp-port-piece-text');
		var ipmpImg = document.querySelector('.port-piece-container #ipmp-port-piece-img img');

		var ccText = document.querySelector('#cc-port-piece-text');
		var ccImg = document.querySelector('.port-piece-container #cc-port-piece-img img');

		berryFaceText.onmouseover = noBlurImg;
		function noBlurImg() {
			berryFaceImg.classList.remove("blur-img");
		}

		stolenBikesText.onmouseover = noBlurImg;
		function noBlurImg() {
			stolenBikesImg.classList.remove("blur-img");
		}

		netboostText.onmouseover = noBlurImg;
		function noBlurImg() {
			netboostImg.classList.remove("blur-img");
		}

		symptomTrackerText.onmouseover = noBlurImg;
		function noBlurImg() {
			symptomTrackerImg.classList.remove("blur-img");
		}

		ipmpText.onmouseover = noBlurImg;
		function noBlurImg() {
			ipmpImg.classList.remove("blur-img");
		}

		ccText.onmouseover = noBlurImg;
		function noBlurImg() {
			ccImg.classList.remove("blur-img");
		}

	} // end of if(widthOnResize < 500)
} // end of widthWatcher function



function toggleBlurImageClass(){
	var berryFaceText = document.querySelector('#berryface-port-piece-text');
	var berryFaceImg = document.querySelector('.port-piece-container #berryface-port-piece-img img');

	var stolenBikesText = document.querySelector('#sb-port-piece-text');
	var stolenBikesImg = document.querySelector('.port-piece-container #sb-port-piece-img img');

	var netboostText = document.querySelector('#netboost-port-piece-text');
	var netboostImg = document.querySelector('.port-piece-container #netboost-port-piece-img img');

	var symptomTrackerText = document.querySelector('#st-port-piece-text');
	var symptomTrackerImg = document.querySelector('.port-piece-container #st-port-piece-img img');

	var ipmpText = document.querySelector('#ipmp-port-piece-text');
	var ipmpImg = document.querySelector('.port-piece-container #ipmp-port-piece-img img');

	var ccText = document.querySelector('#cc-port-piece-text');
	var ccImg = document.querySelector('.port-piece-container #cc-port-piece-img img');

	berryFaceText.onmouseover = logMouseOverBerryFace;
	berryFaceText.onmouseout = logMouseOutBerryFace;

	function logMouseOverBerryFace() {	
		berryFaceImg.classList.add("blur-img");
	}
	function logMouseOutBerryFace() {
		berryFaceImg.classList.remove("blur-img");
	}

	stolenBikesText.onmouseover = logMouseOverStolenBikes;
	stolenBikesText.onmouseout = logMouseOutStolenBikes;

	function logMouseOverStolenBikes() {	
		stolenBikesImg.classList.add("blur-img");
	}
	function logMouseOutStolenBikes() {
		stolenBikesImg.classList.remove("blur-img");
	}

	netboostText.onmouseover = logMouseOverNetboost;
	netboostText.onmouseout = logMouseOutNetboost;

	function logMouseOverNetboost() {	
		netboostImg.classList.add("blur-img");
	}
	function logMouseOutNetboost() {
		netboostImg.classList.remove("blur-img");
	}

	symptomTrackerText.onmouseover = logMouseOverSymptomTracker;
	symptomTrackerText.onmouseout = logMouseOutSymptomTracker;

	function logMouseOverSymptomTracker() {	
		symptomTrackerImg.classList.add("blur-img");
	}
	function logMouseOutSymptomTracker() {
		symptomTrackerImg.classList.remove("blur-img");
	}

	ipmpText.onmouseover = logMouseOverIpmp;
	ipmpText.onmouseout = logMouseOutIpmp;

	function logMouseOverIpmp() {	
		ipmpImg.classList.add("blur-img");
	}
	function logMouseOutIpmp() {
		ipmpImg.classList.remove("blur-img");
	}

	ccText.onmouseover = logMouseOverCc;
	ccText.onmouseout = logMouseOutCc;

	function logMouseOverCc() {	
		ccImg.classList.add("blur-img");
	}
	function logMouseOutCc() {
		ccImg.classList.remove("blur-img");
	}

} // end of toogleBlurImageClass function




//=========== 6. IPMP header ===========//


$(document).ready(function() {

	function myFunction(x) {
		if (x.matches) { 
			$("#portfolio__h3-ipmp").replaceWith("<h3>IPMP Network</h3>");
		} 
	}

	var x = window.matchMedia("(max-width: 768px)")
	myFunction(x) // Call listener function at run time
	x.addListener(myFunction)

});



//=========== 7. Hamburger ===========//

$(document).ready(function() {
	var $hamburger = $(".hamburger");
	var $mobile__ul = $("#menu__ul--mobile");
	$hamburger.on("click", function(e) {
		$hamburger.toggleClass("is-active");
		$mobile__ul.toggleClass("mobile-menu-view");
	});
});


//========== 8. IsFocus for Tabbing===================//

document.addEventListener("keydown", function() {

	//Contact 
	$("#menu__li_desktop-contact-form").focus(function(){					
		$("#menu__li_desktop-contact-form").on('keypress',function(e) {
			if(e.which == 13) {
				$(".modal").css("display", "block");	
				$("#body__div__modal-wrapper").addClass("modal-wrapper-modal-clicked");
				$(".modal").addClass("modal-clicked");
				
				$("#header__section--toprow").addClass("modal-post-clicked-header__section--toprow");
				$("#body__div_page-wrapper").addClass("modal-post-clicked-page-wrapper");
			}
		});
	});

	//BerryFace
	$("#portfolio__a-berryFace-live").focus(function(){					
		$('.port-piece-container > #berryface-port-piece-img > img').addClass("blur-img");
		$('#berryface-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-berryFace-live').addClass("custom-focus-class");
	});
	$("#portfolio__a-berryFace-live").focusout(function(){		
		$('.port-piece-container > #berryface-port-piece-img > img').removeClass("blur-img");
		$('#berryface-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-berryFace-live').removeClass("custom-focus-class");
	});
	$("#portfolio__a-berryFace-GH").focus(function(){					
		$('.port-piece-container > #berryface-port-piece-img > img').addClass("blur-img");
		$('#berryface-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-berryFace-GH').addClass("custom-focus-class");
	});
	$("#portfolio__a-berryFace-GH").focusout(function(){		
		$('.port-piece-container > #berryface-port-piece-img > img').removeClass("blur-img");
		$('#berryface-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-berryFace-GH').removeClass("custom-focus-class");
	});

	//Stolen Bikes
	$("#portfolio__a-sb-live").focus(function(){					
		$('.port-piece-container > #sb-port-piece-img > img').addClass("blur-img");
		$('#sb-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-sb-live').addClass("custom-focus-class");
	});
	$("#portfolio__a-sb-live").focusout(function(){		
		$('.port-piece-container > #sb-port-piece-img > img').removeClass("blur-img");
		$('#sb-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-sb-live').removeClass("custom-focus-class");
	});
	$("#portfolio__a-sb-GH").focus(function(){					
		$('.port-piece-container > #sb-port-piece-img > img').addClass("blur-img");
		$('#sb-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-sb-GH').addClass("custom-focus-class");
	});
	$("#portfolio__a-sb-GH").focusout(function(){		
		$('.port-piece-container > #sb-port-piece-img > img').removeClass("blur-img");
		$('#sb-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-sb-GH').removeClass("custom-focus-class");
	});

	//Netboost
	$("#portfolio__a-netboost-live").focus(function(){					
		$('.port-piece-container > #netboost-port-piece-img > img').addClass("blur-img");
		$('#netboost-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-netboost-live').addClass("custom-focus-class");
	});
	$("#portfolio__a-netboost-live").focusout(function(){		
		$('.port-piece-container > #netboost-port-piece-img > img').removeClass("blur-img");
		$('#netboost-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-netboost-live').removeClass("custom-focus-class");
	});
	$("#portfolio__a-netboost-GH").focus(function(){					
		$('.port-piece-container > #netboost-port-piece-img > img').addClass("blur-img");
		$('#netboost-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-netboost-GH').addClass("custom-focus-class");
	});
	$("#portfolio__a-netboost-GH").focusout(function(){		
		$('.port-piece-container > #netboost-port-piece-img > img').removeClass("blur-img");
		$('#netboost-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-netboost-GH').removeClass("custom-focus-class");
	});
	$("#portfolio__a-netboost-demo").focus(function(){					
		$('.port-piece-container > #netboost-port-piece-img > img').addClass("blur-img");
		$('#netboost-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-netboost-demo').addClass("custom-focus-class");
	});
	$("#portfolio__a-netboost-demo").focusout(function(){		
		$('.port-piece-container > #netboost-port-piece-img > img').removeClass("blur-img");
		$('#netboost-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-netboost-demo').removeClass("custom-focus-class");
	});

	//Symptom Tracker
	$("#portfolio__a-st-live").focus(function(){					
		$('.port-piece-container > #st-port-piece-img > img').addClass("blur-img");
		$('#st-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-st-live').addClass("custom-focus-class");
	});
	$("#portfolio__a-st-live").focusout(function(){		
		$('.port-piece-container > #st-port-piece-img > img').removeClass("blur-img");
		$('#st-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-st-live').removeClass("custom-focus-class");
	});
	$("#portfolio__a-st-GH").focus(function(){					
		$('.port-piece-container > #st-port-piece-img > img').addClass("blur-img");
		$('#st-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-st-GH').addClass("custom-focus-class");
	});
	$("#portfolio__a-st-GH").focusout(function(){		
		$('.port-piece-container > #st-port-piece-img > img').removeClass("blur-img");
		$('#st-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-st-GH').removeClass("custom-focus-class");
	});
	$("#portfolio__a-st-demo").focus(function(){					
		$('.port-piece-container > #st-port-piece-img > img').addClass("blur-img");
		$('#st-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-st-demo').addClass("custom-focus-class");
	});
	$("#portfolio__a-st-demo").focusout(function(){		
		$('.port-piece-container > #st-port-piece-img > img').removeClass("blur-img");
		$('#st-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-st-demo').removeClass("custom-focus-class");
	});


	//IPMP
	$("#portfolio__a-ipmp-live").focus(function(){					
		$('.port-piece-container > #ipmp-port-piece-img > img').addClass("blur-img");
		$('#ipmp-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-ipmp-live').addClass("custom-focus-class");
	});
	$("#portfolio__a-ipmp-live").focusout(function(){		
		$('.port-piece-container > #ipmp-port-piece-img > img').removeClass("blur-img");
		$('#ipmp-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-ipmp-live').removeClass("custom-focus-class");
	});
	$("#portfolio__a-ipmp-GH").focus(function(){					
		$('.port-piece-container > #ipmp-port-piece-img > img').addClass("blur-img");
		$('#ipmp-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-ipmp-GH').addClass("custom-focus-class");
	});
	$("#portfolio__a-ipmp-GH").focusout(function(){		
		$('.port-piece-container > #ipmp-port-piece-img > img').removeClass("blur-img");
		$('#ipmp-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-ipmp-GH').removeClass("custom-focus-class");
	});
	$("#portfolio__a-ipmp-demo").focus(function(){					
		$('.port-piece-container > #ipmp-port-piece-img > img').addClass("blur-img");
		$('#ipmp-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-ipmp-demo').addClass("custom-focus-class");
	});
	$("#portfolio__a-ipmp-demo").focusout(function(){		
		$('.port-piece-container > #ipmp-port-piece-img > img').removeClass("blur-img");
		$('#ipmp-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-ipmp-demo').removeClass("custom-focus-class");
	});


	//Comrade Cafe
	$("#portfolio__a-cc-live").focus(function(){					
		$('.port-piece-container > #cc-port-piece-img > img').addClass("blur-img");
		$('#cc-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-cc-live').addClass("custom-focus-class");
	});
	$("#portfolio__a-cc-live").focusout(function(){		
		$('.port-piece-container > #cc-port-piece-img > img').removeClass("blur-img");
		$('#cc-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-cc-live').removeClass("custom-focus-class");
	});
	$("#portfolio__a-cc-GH").focus(function(){					
		$('.port-piece-container > #cc-port-piece-img > img').addClass("blur-img");
		$('#cc-port-piece-text').addClass("custom-opacity-class");
		$('#portfolio__a-cc-GH').addClass("custom-focus-class");
	});
	$("#portfolio__a-cc-GH").focusout(function(){		
		$('.port-piece-container > #cc-port-piece-img > img').removeClass("blur-img");
		$('#cc-port-piece-text').removeClass("custom-opacity-class");
		$('#portfolio__a-cc-GH').removeClass("custom-focus-class");
	});
});


//========== 9.  Thanks for Visiting (viewport)===================//


$.getScript("./src/assets/libs/waypoints.min.js", function() {

	// var object = new Waypoint;
	var waypoint = new Waypoint({
		element: document.getElementById('thank-you-section'),
		handler: function() {
		 //  console.log('Basic waypoint triggered');
		//	console.log("in footer view")

			$(document).ready(function(){
				setTimeout(animateFooterText,500,"thank-you-text","Thanks for visiting!", 2.5);
			});
			
			function animateFooterText(label_name, text, timer){
				t = 0;
				text = text;
				var milisecondPerFrame = Math.ceil(timer * 500 / text.length);
				for (var i = 0; i < text.length; i++) 
				{		
					setTimeout(textFooterFrame, i*milisecondPerFrame, text.substring(0, i + 1));
				}
			};
			
			function textFooterFrame(text){
				$("#thank-you-text").html(text);
			};
		},
		offset: 900 
	})
});








