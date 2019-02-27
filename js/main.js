$(document).ready(function(){

  var email = $("#email");
  var msg = $("#msg");
  $("#myform").submit(function(){
    if ((email.val() == "") || (msg.val() == "")) {
      alert("enter email and message");
      return false;
    }else {
      return true;
    }
  });

  $("#signup").hide();

  $("#loginbtn").click(function(){
    $("#login").show();
    $("#signup").hide();
    $("#loginbtn").addClass("active");
    $("#signupbtn").removeClass("active");
  });

  $("#signupbtn").click(function(){
    $("#login").hide();
    $("#signup").show();
    $("#signupbtn").addClass("active");
    $("#loginbtn").removeClass("active");
  });

  $('.form').find('input, textarea').on('keyup blur focus', function (e) {

    var $this = $(this),
        label = $this.prev('label');

      if (e.type === 'keyup') {
        if ($this.val() === '') {
            label.removeClass('active highlight');
          } else {
            label.addClass('active highlight');
          }
      } else if (e.type === 'blur') {
        if( $this.val() === '' ) {
          label.removeClass('active highlight');
        } else {
          label.removeClass('highlight');
        }
      } else if (e.type === 'focus') {

        if( $this.val() === '' ) {
          label.removeClass('highlight');
        }
        else if( $this.val() !== '' ) {
          label.addClass('highlight');
        }
      }

  });

  $("#top_menu").localScroll({duration:1000});

});
