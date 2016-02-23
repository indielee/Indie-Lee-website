$(document).ready(function() {
  var expanderTrigger = document.getElementById("reply-title");
  var expanderContent = document.getElementById("commentform");

  $(expanderTrigger).click(function(){
    $(this).parent().toggleClass("review-form-shown");
  });
});