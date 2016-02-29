$(document).ready(function() {
  var ingredientListTrigger = document.getElementById("eu-ingredients-title");
  var ingredientListContent = document.getElementById("eu-ingredients-list");

  $(ingredientListTrigger).click(function(){
    $(this).parent().toggleClass("eu-ingredients-list-shown");
  });
});
