@extends('layouts.master')

@section('content')







<div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-justify">
                <div class="col-md-12  mt-5 ">
                    <h3 style="text-align: center;">COMMANDE ZEN</h3>
                   <!-- <p class="lead">SenVigile permet de prévenir des intrusions & effractions, comme des dangers domestiques avec une garantie de protection grâce à ses technologies smart de dissuasion, de surveillance et d’alertes pour minimiser les risques et dégâts. </p> -->
                    
                </div>
            </div><!-- end title -->








<table class="table table-bordered table-hover" style="text-align: center;">
  <thead style="background: orange;">     
    <tr style="font-size: 1.2em; color: black;" >
    <th style="border-top-left-radius: 20px; ">

Nom
      </th>
      <th>
     Quantité

      </th>
      <th>
      Choix du kit Zen

      </th>
      <th>
      Abonnement

      </th>
      <th>
      
Surcoût abonnement 2e kit 
      </th>
      <th>
      Forfait Installation 

      </th>
      <th style="border-top-right-radius: 20px; ">
      
Surcoût Installation 2e kit 
      </th>
      
    </tr>
  </thead>
  <tbody>
   
<tr style="font-size: 1.2em;
    color: black;
        border-top-left-radius: 10px;
    border-top-left-radius: 10px;" >
    <td>

Quantité
      </td>
       <td>
      Choix du kit Zen

      </td>
       <td>
      Abonnement

      </td>
      <td>
      
Surcoût abonnement 2e kit 
     </td>
       <td>
      Forfait Installation 

     </td>
       <td>
      
Surcoût Installation 2e kit 
      </td> <td>
      

    

      </td>
    </tr>

  </tbody>

</table>
</div>
</div>
</div>
</div>






              <!-- Le total du produit = prix * quantité -->




             <span class="bordures p-3" style='border-left: 1px solid grey;'>

            <div class="container  mx-auto">

              <div class="row">









                <div class="col-lg-12 pb-5 pt-5">


                <div class="flex justify-center mt-5 px-1">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      <div class="flex-1 p-0 ">
                        <table class="table table-hover bg-white mb-0">
                          <thead  class="thead-dark my-auto">
                            <tr>
                              <th class="text-left">Image</th>
                              <th class="hidden text-left md:table-cell"> Nom</th>

                              <th class="hidden text-left md:table-cell">Quantité</th>

                             <th class="hidden text-left md:table-cell">Choix du kit Zen</th>
                             <th class="hidden text-left md:table-cell">Abonnement</th>

                                 <th class="hidden text-left md:table-cell">Sur ab 2e kit </th>

                               <th class="hidden text-left md:table-cell">Forfait Inst  </th>
                              <th class="col-lg-1 hidden text-left md:table-cell"> Sur Inst 2e kit </th>
                                                            <th class=" hidden text-left md:table-cell"> Totale </th>

                              <th class="col-lg-1 hidden text-left md:table-cell"> Retirer </th>

                            </tr>


                         </thead>



             <tbody>

                            



            

                           <strong> <p> FCFA</p></strong>


            </td>


             <td>


              

            </td>

          </tr>



                          </tbody>



                        </table>

                        






                      </div>
                    </div>
                  </div>
                  </div><!--END COL-->



                  

                      </div>
                    </div>
                  </div>
                  </div><!--END COL-->







             <span class="bordures p-3" style='border-left: 1px solid grey;'>






            <!--  </div>


              </div>-->


  <script>


document.getElementById("contactform").addEventListener("submit", function(){

Swal.fire(
  'bravo!',
  'La commande a été validée!',
  'success'
)

});


  </script>









    @stop








