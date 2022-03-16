/*window.onload = function() {
var $recaptcha = document.querySelector('#g-recaptcha-response');

var myBtn = document.getElementById("contactform");

   myBtn.addEvenetListener('click', function () {
	   if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
     console.log("veuillez cocher le catcha!");
	   };
   
   });
   };*/
   
   
 
 window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');


    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
	
		
    };
};
document.getElementById("contactform").addEventListener("submit", function(){
	var recaptcha_check_empty=document.getElementById("capi");
	 document.getElementById("capi").value
	 
	 if(!capi){
		 
		erreur=" veuillez cocher le captcha"); 
	 }
		 
	
alert('formulaire envoyé!');
});
  
 /*  window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');
	 


    if(!$recaptcha) {
        $recaptcha.setAttribute("required", "required");
		
	 //status.innerText=('veuillez cocher le catcha!');

	
		
    };
	al
};


document.getElementById("contactform").addEventListener("submit", function(){
alert('formulaire envoyé!');
});*/

/*function recaptchaCallback() {
	
    $('#submit').removeAttr("required", "required");
	
	alert('Merci, vous avez coché le recaptcha et maintenant veuillez  cliquer sur envoyer le message pour terminer !');
	
};*/


/*function isCaptchaChecked() {
  return grecaptcha && grecaptcha.getResponse().length !== 0;
}

if (isCaptchaChecked()) {
  
  alert('Well, recaptcha is checked !');
}
if(grecaptcha && grecaptcha.getResponse().length > 0)
{
     //the recaptcha is checked
     // Do what you want here
     alert('Well, recaptcha is checked !');
}
else
{
    //The recaptcha is not cheched
    //You can display an error message here
    alert('Oops, you have to check the recaptcha !');
}*/