
window.onload = function(e) {
  var recaptcha = document.forms["contactform"]["g-recaptcha-response"];
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

document.getElementById("contactform").addEventListener("submit", function(){

Swal.fire(
  'bravo!',
  'Message envoyé!',
  'success'
)

});

/*document.getElementById("contactform").addEventListener("submit", function(){
alert('Merci, Message envoyé!');
});*/

/*function t1() {
    document.getElementById("Registration").classList.toggle("show");
}*/
