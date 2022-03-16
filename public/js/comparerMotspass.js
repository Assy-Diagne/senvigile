
  	document.forms["contactform0"].addEventListener("envoyer", function(e) {
 
	
 
	// Traitement cas par cas (input unique)
	if ("password".value != "confpassword".value) {
    alert("Les deux "+fieldalias+" ne condordent pas")
	}
	else
		
	{
	
    alert("Les deux "+fieldalias+" condordent")
	}

		});