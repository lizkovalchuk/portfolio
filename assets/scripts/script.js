/*******************************************
*TABLE OF CONTENTS
*=================
*1. Scroll to divs
*2. Mailer Functionality
*3. Welcome Text
*4. Keyframes
*********************************************/


//========== 1. Scroll to divs===================//

function scrollToDiv($div_name){
	$("html, body").delay(500).animate({
    	scrollTop: $($div_name).offset().top
  	}, 500);
}

$(document).on('click', '.top-nav ul li', function() {
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
	setTimeout(animateText,500,"welcome-text-scene-1","Designing with code", 2.5);
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
	$("#welcome-text-scene-1").html(text);
};

