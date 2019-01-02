/*******************************************
*TABLE OF CONTENTS
*=================
*1. Scroll to divs
*2. Mailer Functionality
*3. Welcome Text
*4. Toggle Class
*********************************************/


//========== 1. Scroll to divs===================//

function scrollToDiv($div_name){
	$("html, body").delay(500).animate({
    	scrollTop: $($div_name).offset().top
  	}, 500);
}

$(document).on('click', '#desktop-nav ul li', function() {
    var page = $(this).attr("data-page");
  	scrollToDiv('#'+ page);
});

$(document).on('click', '#dw-arrow', function() {
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
	//setTimeout(alert("4 seconds"),4000);
	t = 0;
	text = text;
	var milisecondPerFrame = Math.ceil(timer * 500 / text.length);
	console.log(milisecondPerFrame);
	for (var i = 0; i < text.length; i++) 
	{
		//console.log(text.substring(0,i+1));
		//$("#"+label_name).html(text.substring(0,i+1));
		setTimeout(textFrame, i*milisecondPerFrame, text.substring(0, i + 1));
	}
};

function textFrame(text)
{
	$("#banner__label--welcome-text-1").html(text);
};

//=========== 4. Toggle Class =============//

$(document).ready(function() {


	$("#berryface-port-piece-text").hover(function(){
		$(".port-piece-container #berryface-port-piece-img img").toggleClass("blur-img");
	});

	$("#netboost-port-piece-text").hover(function(){
		$(".port-piece-container #netboost-port-piece-img img").toggleClass("blur-img");
	});
	$("#sb-port-piece-text").hover(function(){
		$(".port-piece-container #sb-port-piece-img img").toggleClass("blur-img");
	});
	$("#snc-port-piece-text").hover(function(){
		$(".port-piece-container #snc-port-piece-img img").toggleClass("blur-img");
	});
	$("#cc-port-piece-text").hover(function(){
		$(".port-piece-container #cc-port-piece-img img").toggleClass("blur-img");
	});
});
