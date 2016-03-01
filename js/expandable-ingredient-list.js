$(document).ready(function() {
  var ingredientListTrigger = document.getElementById("eu-ingredients-title");
  var ingredientListContainer = document.getElementById("ingredients-container");
  var ingredientListContent = document.getElementById("eu-ingredients-list");

  $(ingredientListTrigger).click(function(){
    $(ingredientListContainer).toggleClass("eu-ingredients-list-shown");
  });
});
