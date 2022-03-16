
window.onload = function() {
  var recaptcha = document.forms["contactform"]["g-recaptcha-response"];
  recaptcha.required = true;
  recaptcha.oninvalid = function(e) {
    // do something
    alert("Please complete the captcha");
  }
}

