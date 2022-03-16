window.onload = function(e) {
  var recaptcha = document.forms["#contactform"];
  recaptcha.required = true;
  recaptcha.oninvalid = function(e) {
    // do something
  Swal.fire(
   'Attention',
  
  'veuillez d\'abord cocher le captcha s\'il vous plait!',
  'error'
)
   // alert("veuillez completer le captcha s'il vous plait");
    e.preventDefault();
    
    
  }
}

document.getElementById(".grd1").addEventListener("submit", function(){

Swal.fire(
  'bravo!',
  'Message envoyé!',
  'success'
)

});