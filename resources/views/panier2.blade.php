@extends('layouts.master')

@section('content')







<div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-justify">
                <div class="col-md-12  mt-4 ">
                    <h3 style="text-align: center;">COMMANDE ZEN</h3>
                   <!-- <p class="lead">SenVigile permet de prévenir des intrusions & effractions, comme des dangers domestiques avec une garantie de protection grâce à ses technologies smart de dissuasion, de surveillance et d’alertes pour minimiser les risques et dégâts. </p> -->
                    
                </div>
            </div><!-- end title -->




   

              <!-- Le total du produit = prix * quantité -->





            <div class="container  mx-auto">

              <div class="row">









                <div class="col-lg-12 pb-5 pt-2">


                <div class="flex justify-center mt-5 px-1">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      <div class="flex-1 p-0 ">
                        <table class="table table-hover bg-white mb-0" style="box-sizing: ;">
                          <thead  class=" my-auto" style="background-color: orange;">
                            <tr>
                              <th class="text-left">Image</th>
                            <th class="hidden text-left md:table-cell"> Formule</th>
                              <th class="hidden text-left md:table-cell"> Designation</th>

                              <th class="hidden text-left md:table-cell"> Quantité</th>


                              <th class="hidden text-left md:table-cell">P.Unitaire FCFA</th>

                             <th class="hidden text-left md:table-cell">Abonnement</th>

                                 <th class="hidden text-left md:table-cell">Sur Abonnement.  </th>

                            <th class="hidden text-left md:table-cell">Installation.  </th>
                                <!-- <th class="col-lg-1 hidden text-left md:table-cell"> Sur Inst.</th>-->
                                                            <th class=" hidden text-left md:table-cell"> Totale produit</th>

                              <th class="col-lg-1 hidden text-left md:table-cell"> Retirer </th>

                            </tr>


                         </thead>



             <tbody>

                             <tbody>

                              @foreach (Cart::content() as $content)
                            <tr>
                                 <!-- <td class="hidden pb-4 md:table-cell">-->
  <td>
                                      <img   src="{{ asset('images/'.$content->options['image'])}}" alt="thumbnail" width="50" class="rounded-circle img-rounded">
                                </td>

                                 <td>
                                <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ $content->options['formule']}} </a></strong>
                                </td>


                                  <td>
                                  <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ $content->name }}</a></strong>
                              </td>
                                 <!-- </td>-->
<td>
              <!-- Le formulaire de mise à jour de la quantité -->
              <form method="POST" action="{{ route('panier.update', $content->rowId) }}" class="form-inline d-inline-block" >
              {{ csrf_field() }}
              @method('POST')
                 <!--<input type="number" name="quantity" placeholder="Quantité" value="{{Cart::content()->count()}}" class="form-control mr-2" style="width: 80px" > -->
                  <input type="number" name="quantity" value="{{$content->qty}}" class="form-control mr-2 col-lg-4" style="width: 150px">

                  <button type="submit" class="btn btn-primary" title="Rafraichir le panier"><i class="fas fa-sync"></i></button>
              </form>
            </td>


             <td>



              <strong><a href="{{ route('panier.list',$content->id) }}" title="Afficher le produit" >{{ number_format($content->price, 0, ',', ' ') }} </a></strong>

            </td>


             <td>
                                <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ number_format($content->options['selection'], 0, ',', ' ')}} </a></strong>
                                </td>
                    






                                   <td>
  <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ number_format($content->options['surcoutab'], 0, ',', ' ')}} </a></strong>
                                </td>

                                 
                              


                             




                         
                             
 



                              
 

                               
                                <td>
                                <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ number_format($content->options['surc'], 0, ',', ' ')}} </a></strong>
                              
  

                                
                            
                           



             






            <td>

              


                           <strong> <p>{{(number_format( ($content->options['surcoutab'] +$content->options['surc']+$content->options['selection']+$content->price) * $content->qty, 0, ',', ' ')) }}</p></strong>
 

            </td>


             <td>


              <form  method="POST" action="{{ route('panier.remove', $content->rowId) }}">
                                      @csrf
                                         @method('POST')
                                   <button type="submit" class="btn btn-outline-danger height-auto btn-sm"><i class="fas fa-trash"></i></button>
              </form>

            </td>

          </tr>




                            @endforeach


                            <!-- <td colspan="2">
             On affiche total général
                        <strong> Total articles: {{ Cart::content()->count() }}</strong><br/>


                        <strong> Total articles: {{ Cart::count() }}</strong><br/>


                        <strong> TVA: {{ Cart::tax() }} FCFA</strong><br/>
                                                <strong> Totale HT: {{ Cart::subtotal() }} FCFA</strong><br/>


            <strong> Total: {{ Cart::total() }}FCFA</strong>




          </td> -->

<tr>
<form method="POST" action="{{ route('validerpanier.store') }}" class="" id="contactform"  >
                             {{ csrf_field() }}

<th  colspan="8">


                                    <!-- verifier si le panier est vide pour desactiver le bouton -->
                                @if( Cart::content()->count()  > 0)
                <input type="submit" class="btn btn-success mt-5 mb-2 mx-1" value="valider la commande"    onclick='calltouchpay()' title="Valider la commande"/>

                                @else
                                <input type="submit" class="btn btn-success  mb-2 alignright" value="valider la commande"     disabled="disabled" title="Valider la commande"/>
                                @endif


              </th>



            <td>
                        

                        
  @if( Cart::content()->count()  > 0)
 
                         <a class="btn btn-danger float-right col-lg-offset-9  mt-5 mb-2 mx-1 " href="{{ url('/videpanier') }}" title="Retirer tous les produits du panier" >Vider le panier</a>

                                       @else
                         <a class="btn btn-danger float-right  mt-5 mb-2 mx-0   disabled" href="#" title="Retirer tous les produits du panier"  aria-disabled="true">Vider le panier</a>

                                     @endif






                            <!--<a class="btn float-left mt-5 mb-2 mx-1" href="{{ url('/continuer') }}" title="Retirer tous les produits du panier" >payer la commande du panier</a>-->

                           

</td></tr></form>

                          </tbody>




                          </tbody>
</table>

                      </div>
                    </div>
                  </div>
                  </div><!--END COL-->









<div class="row mb-5" id="boxalarms">

                    <div class="col-md-4 col-sm-6 col-12 mt-5  col-lg-4 " >
                        <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                            <div class="row">

                                <div class="col-md-6 col-lg-6 col-xs-6   ">

                                    <img src="images/img9.jpg" alt="" class="img-fluid img-rounded" > 
                                    <div class="col mt-5  " style="text-align: center;">

                                    </div><!-- end col -->
                                </div><!-- end col -->


                                <div class="col-md-6 col-sm-6 col-xs-12 " >

                                              <p class="mt-3">
                                                   <strong>+ Pack Video choisi</strong>
                                                </p>
                                 </div>               



                                <div class="col-md-12 col-lg-12 col-sm-6 col-xs-12 " >


                                      <div class="mt-3  aligncenter" ><h4><strong>Installation</strong></h4>
 <p>

                                            <s class="text-grey">
                                                   10 000 FCFA
                                                </s>

                                               <strong>
                                                   7 500 FCFA </strong>
                                                </p>
                                        
                                        
                                    </div>               <!--<div class="col-md-12 col-sm-12 col-xs-6 " style="text-align:right;" >
</div>
<i class="fa fa-plus-circle" style="color: orange;background: white;font-size: 20px;"></i>ajouter au panier
</div>-->
                                    <!-- end row -->
                                </div><!-- end col -->



                            </div><!-- end row -->

                        </div><!-- end col -->
                    </div><!-- end col -->











                      <table class="table table-hover col-md-4 col-lg-4 bg-white mb-0 my-5 px-4 mr-0   ">
                          <thead  class="thead-dark">
                        <!--  <tr>
                              <th class="text-left ">Total articles:</th>
                              <th class="hidden text-left text-justify md:table-cell"> TVA</th>
                              <th class="hidden text-left md:table-cell">Totale HT: </th>
                              <th class="hidden text-left md:table-cell">Total: </th>
                          </tr>-->


                          </thead>



                          <tbody>

                          <tr>
                              <!-- <td class="hidden pb-4 md:table-cell">-->
                                                              <td class="table-dark "><strong>Total articles  </strong></td>

                              <td>
                                  <strong>  {{ Cart::content()->count() }}</strong><br/>
                              </td>  </tr>









                               <tr>

                                  <td class="ta " style="background-color: orange;"><strong>Totale HT </strong></td>

                              <td>

                                  <strong> {{ number_format($somme, 0, ',', ' ')}} FCFA</strong><br/>

                              </td>  </tr>


                               <tr>
                              <!-- </td>-->
                               <td class="table-dark "><strong>TVA(18%)  </strong></td>

                              <td>

                                  <strong> {{  number_format((0.18* $somme), 0, ',', ' ')}}  FCFA</strong><br/>
                              </td>  </tr>



 <tr>

                                        <td class="ta " style="background-color: orange;"><strong>Total  </strong></td>

                              <td class="table-active">

                                  <strong> {{  number_format($somme+(0.18* $somme), 0, ',', ' ')}} FCFA </strong>

                              </td>









                          </tr>







                          <!-- <td colspan="2">
             On affiche total général
                        <strong> Total articles: {{ Cart::content()->count() }}</strong><br/>


                        <strong> Total articles: {{ Cart::count() }}</strong><br/>


                        <strong> TVA: {{ Cart::tax() }} FCFA</strong><br/>
                                                <strong> Totale HT: {{ Cart::subtotal() }} FCFA</strong><br/>


            <strong> Total: {{ Cart::total() }}FCFA</strong>




          </td> -->


                          </tbody>
                        </table>



                  

















<table class="table  table-hover col-md-4 mt-5 col-lg-4 ml-1" >
                <thead style="background: black;
    font-size: 1.2em;
    color: #fff;
        border-bottom-left-radius: 10px;
    border-bottom-left-radius: 10px; ">
                <tr >

                        <th class="col-md-2 " style="background-color:orange;" >Payable en</th>

                 
                    </tr>
                </thead>
                <tbody>








                    




                



                <form  action=" "  id="panier2" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    
                    

 <tr>
                        <td  class="col-sm-8 col-lg-8 table-active">

                                               <div class="">

                                      <div class="form-check  form-check-inline "  >
                                                <input class="form-check-input" type="checkbox"  value="video" id="video" >
                                                <label class="form-check-label" for="video" style="color: orange;font-weight: bold;">
                                                    1fois
                                                </label>
                                               </div>
</td>
</tr>

<tr >

   <td>
                                          <div class="form-check  form-check-inline">

                                                <input class="form-check-input" type="checkbox" value="alarme" id="alarme">
                                                <label class="form-check-label" for="alarme" style="color: orange;font-weight: bold;">
                                              3fois
                                                </label>
                                        </div>
                            </div>
 
 <td>
</tr>




                     








                </tbody>

            </table> 



                          </div><!-- end col -->
    

                      </div>
                    </div>
                  </div>


                  </div><!--END COL-->




                  </div><!--END COL-->
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








