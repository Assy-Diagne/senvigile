
window.onload = function(e) {
  var recaptcha = document.forms["contactform"]["g-recaptcha-response"];
  recaptcha.required = true;
  recaptcha.oninvalid = function(e) {
    // do something
    alert("SVP,veuillez completez le captcha");
	  e.preventDefault();
  }
}

document.getElementById("contactform").addEventListener("submit", function(){
alert('Merci, Message envoyé!');
});