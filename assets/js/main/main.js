jQuery(document).ready(function ($) {
  $("#burger").click(function(){
    $("#myNav").addClass('active');
  });

  $("#myNavClose").click(function(){
    $("#myNav").removeClass('active');
  });
});