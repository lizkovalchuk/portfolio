//==========Scroll to divs===================//


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


//=========== Mailer functioanlity===========//

// $(document).on('click', '#mail-button', function(){
//     // alert("Your message has been sent");
// });

$(document).ready(function (){
  $('#mail-button').click(button_mail_click);
});

function button_mail_click(){
  var email = $('#email').val();
  var name = $('#name').val();
  var message = $('#messagebox').val();

  $.ajax({
    url:'./mailer.php',
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