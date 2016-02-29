$(document).ready(function() {
  var reviewTrigger = document.getElementById("reply-title");
  var reviewContent = document.getElementById("commentform");

  $(reviewTrigger).click(function(){
    $(this).parent().toggleClass("review-form-shown");
  });
});
