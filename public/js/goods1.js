document.getElementById("contactform1").addEventListener("submit", function(){

Swal.fire(
  'bravo!',
  'vous allez recevoir un mail de confirmtion pour terminer l \'inscription!',
  'success'
)

});


/*
		 <script>
  $("#contactform0").submit(function(){
     if($("#password").val()!=$("#confirm_password").val())
     {
         alert("password should be same");
         return false;
     }
 })
</script>*/