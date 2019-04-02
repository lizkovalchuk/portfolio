/*******************************************
*TABLE OF CONTENTS
*=================
*1. Scroll to divs
*2. Mailer Functionality
*3. Welcome Text
*4. Toggle Class
*6. Hamburger
*********************************************/


//========== 1. Scroll to divs===================//

function scrollToDiv($div_name){
	$("html, body").delay(300).animate({
			scrollTop: $($div_name).offset().top
		}, 500);
}

$(document).on('click', '#header__section--toprow ul li', function() {
		var page = $(this).attr("data-page");
		scrollToDiv('#'+ page);
});

$(document).on('click', '#dw-arrow', function() {
		var page = $(this).attr("data-page");
	scrollToDiv('#'+ page);
});

$(document).on('click', '#header__section--toprow #menu__ul--mobile li', function() {
		var page = $(this).attr("data-page");
		scrollToDiv('#'+ page);
});

//=========== 2. Mailer functioanlity===========//

$(document).ready(function (){
	$('#mail-button').click(button_mail_click);
});

function button_mail_click(){
		var email = $('#email').val();
		var name = $('#name').val();
		var message = $('#messagebox').val();

		$.ajax({
			url:'../mailer.php',
			type: 'POST',
			data:{
					name:name,
					email:email,
					message:message
			},
				error:function (){alert("didnt work");},
				success: function(){
					alert("Thank you for your message!");

			//grab the form feilds and make the 
			//make the value an empty string.

				$('#email').val() = "";
				$('#name').val() = "";
				$('#messagebox').val() = "";

			}
		});
}

//=========== 3. Welome Text =============//

$(document).ready(function(){
	setTimeout(animateText,500,"banner__label--welcome-text-1","Designing with code", 2.5);
});

function animateText(label_name, text, timer){
	t = 0;
	text = text;
	var milisecondPerFrame = Math.ceil(timer * 500 / text.length);
	console.log(milisecondPerFrame);
	for (var i = 0; i < text.length; i++) 
	{		
		setTimeout(textFrame, i*milisecondPerFrame, text.substring(0, i + 1));
	}
};

function textFrame(text)
{
	$("#banner__label--welcome-text-1").html(text);
};

//=========== 4. Toggle Class =============//



var smallScreen = false;

$(document).ready(function() {
    if($(window).width() < 500) {
		smallScreen = true;
//		console.log("smallScreen is "+smallScreen);
    }else{
//		console.log("smallScreen is "+smallScreen);
		window.toggleImageBlurClass();
	}
});

$(window).resize(function() {
    if($(window).width() < 500) {
		smallScreen = true;
//		console.log("smallScreen is "+smallScreen + " from resize function");
    } else if (($(window).width() > 500)) {
		smallScreen = false;
		// console.log("smallScreen is "+smallScreen + " from resize function");	
		// console.log($(window).width());	
		window.toggleImageBlurClass();
    }
});



function toggleImageBlurClass() {
	if(smallScreen == false) {
		$("#berryface-port-piece-text").hover(function(){
			$(".port-piece-container #berryface-port-piece-img img").toggleClass("blur-img");
		});
	
		$("#netboost-port-piece-text").hover(function(){
			$(".port-piece-container #netboost-port-piece-img img").toggleClass("blur-img");
		});
	
		$("#sb-port-piece-text").hover(function(){
			$(".port-piece-container #sb-port-piece-img img").toggleClass("blur-img");
		});
	
		$("#st-port-piece-text").hover(function(){
			$(".port-piece-container #st-port-piece-img img").toggleClass("blur-img");
		});
	
		$("#ipmp-port-piece-text").hover(function(){
			$(".port-piece-container #ipmp-port-piece-img img").toggleClass("blur-img");
		});
	
		$("#cc-port-piece-text").hover(function(){
			$(".port-piece-container #cc-port-piece-img img").toggleClass("blur-img");
		});
	}
}



//=========== 5. IPMP header ===========//


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



//=========== 6. Hamburger ===========//

$(document).ready(function() {
	var $hamburger = $(".hamburger");
	var $mobile__ul = $("#menu__ul--mobile");
	$hamburger.on("click", function(e) {
		$hamburger.toggleClass("is-active");
		$mobile__ul.toggleClass("mobile-menu-view");
	});
});















// OBSOLETE FOR NOW




/*



function toggleBlurImageClass(){
	$("#berryface-port-piece-text").hover(function(){
		$(".port-piece-container #berryface-port-piece-img img").toggleClass("blur-img");
	});

	$("#netboost-port-piece-text").hover(function(){
		$(".port-piece-container #netboost-port-piece-img img").toggleClass("blur-img");
	});

	$("#sb-port-piece-text").hover(function(){
		$(".port-piece-container #sb-port-piece-img img").toggleClass("blur-img");
	});

	$("#st-port-piece-text").hover(function(){
		$(".port-piece-container #st-port-piece-img img").toggleClass("blur-img");
	});

	$("#ipmp-port-piece-text").hover(function(){
		$(".port-piece-container #ipmp-port-piece-img img").toggleClass("blur-img");
	});

	$("#cc-port-piece-text").hover(function(){
		$(".port-piece-container #cc-port-piece-img img").toggleClass("blur-img");
	});
}

function removeBlurImageClass(){
	$(".port-piece-container #berryface-port-piece-img img").removeClass("blur-img");
	$(".port-piece-container #netboost-port-piece-img img").removeClass("blur-img");
	$(".port-piece-container #sb-port-piece-img img").removeClass("blur-img");
	$(".port-piece-container #st-port-piece-img img").removeClass("blur-img");
	$(".port-piece-container #ipmp-port-piece-img img").removeClass("blur-img");
	$(".port-piece-container #cc-port-piece-img img").removeClass("blur-img");
}

$(document).ready(function() {

	var widthOnLoad = window.innerWidth;
	if(widthOnLoad > 500){
		toggleBlurImageClass();
	}

	var resizeId;
	window.addEventListener("resize", function(){
		clearTimeout(resizeId);
		resizeId = setTimeout(widthWatcher, 500);
		
	});

	function widthWatcher(){
		var widthOnResize = window.innerWidth;
		console.log(widthOnResize + " from widthWatcher function");	

		if(widthOnResize > 500){
			alert("bigger than 500");
			toggleBlurImageClass();
		} else if(widthOnResize < 500){
			alert("smaller than 500");
			removeBlurImageClass();
		}
	}

});

































	// 		$("#berryface-port-piece-text").hover(function(){
	// 			$(".port-piece-container #berryface-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#netboost-port-piece-text").hover(function(){
	// 			$(".port-piece-container #netboost-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#sb-port-piece-text").hover(function(){
	// 			$(".port-piece-container #sb-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#snc-port-piece-text").hover(function(){
	// 			$(".port-piece-container #snc-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#snc-port-piece-text").hover(function(){
	// 			$("#snc-port-piece-img").toggleClass("remove-border-snc");
	// 		});
	
	// 		$("#st-port-piece-text").hover(function(){
	// 			$(".port-piece-container #st-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#ipmp-port-piece-text").hover(function(){
	// 			$(".port-piece-container #ipmp-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#cc-port-piece-text").hover(function(){
	// 			$(".port-piece-container #cc-port-piece-img img").toggleClass("blur-img");
	// 		});






	/*




	var resizeId;
	window.addEventListener("resize", function(){
		clearTimeout(resizeId);
		resizeId = setTimeout(widthWatcher, 600);
	});

	function widthWatcher(){
		var widthOnResize = window.innerWidth;
		console.log(widthOnResize);		
		if(widthOnResize > 500){
			$("#berryface-port-piece-text").mouseover(function(){
				$(".port-piece-container #berryface-port-piece-img img").toggleClass("blur-img");
			});
	
			$("#netboost-port-piece-text").mouseover(function(){
				$(".port-piece-container #netboost-port-piece-img img").toggleClass("blur-img");
			});
	
			$("#sb-port-piece-text").mouseover(function(){
				$(".port-piece-container #sb-port-piece-img img").toggleClass("blur-img");
			});

			$("#st-port-piece-text").mouseover(function(){
				$(".port-piece-container #st-port-piece-img img").toggleClass("blur-img");
			});
	
			$("#ipmp-port-piece-text").mouseover(function(){
				$(".port-piece-container #ipmp-port-piece-img img").toggleClass("blur-img");
			});
	
			$("#cc-port-piece-text").mouseover(function(){
				$(".port-piece-container #cc-port-piece-img img").toggleClass("blur-img");
			});
		} else if(widthOnResize < 500){
			$("#berryface-port-piece-text").mouseover(function(){
				$(".port-piece-container #berryface-port-piece-img img").removeClass("blur-img");
			});
	
			$("#netboost-port-piece-text").mouseover(function(){
				$(".port-piece-container #netboost-port-piece-img img").removeClass("blur-img");
			});
	
			$("#sb-port-piece-text").mouseover(function(){
				$(".port-piece-container #sb-port-piece-img img").removeClass("blur-img");
			});

			$("#st-port-piece-text").mouseover(function(){
				$(".port-piece-container #st-port-piece-img img").removeClass("blur-img");
			});
	
			$("#ipmp-port-piece-text").mouseover(function(){
				$(".port-piece-container #ipmp-port-piece-img img").removeClass("blur-img");
			});
	
			$("#cc-port-piece-text").mouseover(function(){
				$(".port-piece-container #cc-port-piece-img img").removeClass("blur-img");
			});
		} 
	}





		// function myFunction(x) {
	// 	if (x.matches) { 
	// 		$("#berryface-port-piece-text").hover(function(){
	// 			$(".port-piece-container #berryface-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#netboost-port-piece-text").hover(function(){
	// 			$(".port-piece-container #netboost-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#sb-port-piece-text").hover(function(){
	// 			$(".port-piece-container #sb-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#st-port-piece-text").hover(function(){
	// 			$(".port-piece-container #st-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#ipmp-port-piece-text").hover(function(){
	// 			$(".port-piece-container #ipmp-port-piece-img img").toggleClass("blur-img");
	// 		});
	
	// 		$("#cc-port-piece-text").hover(function(){
	// 			$(".port-piece-container #cc-port-piece-img img").toggleClass("blur-img");
	// 		});
	// 	} 
	// }

	// var x = window.matchMedia("(min-width: 500px)")
	// myFunction(x) // Call listener function at run time
	// x.addListener(myFunction)


// $(window).width(function() {
// 	$("#log").append("<div>Handler for .resize() called.</div>");
// });

// document.getElementsByTagName("body")[0].onresize = function(){widthWatcher();};





	*/