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












              <!-- Le total du produit = prix * quantité -->





            <div class="container  mx-auto">

              <div class="row">









                <div class="col-lg-12 pb-5 pt-5">


                <div class="flex justify-center mt-5 px-1">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      <div class="flex-1 p-0 ">
                        <table class="table table-hover bg-white mb-0">
                          <thead  class=" my-auto" style="background-color: orange;">
                            <tr>
                              <th class="text-left">Image</th>
                              <th class="hidden text-left md:table-cell"> Nom</th>
                              <th class="hidden text-left md:table-cell"> Quantité</th>


                              <th class="hidden text-left md:table-cell">P.U</th>
                              <th class="hidden text-left md:table-cell"></th>

                             <th class="hidden text-left md:table-cell">Abonnement</th>

                                 <th class="hidden text-left md:table-cell">Sur Ab.  </th>

                               <th class="hidden text-left md:table-cell">Forfait Inst.  </th>
                              <th class="col-lg-1 hidden text-left md:table-cell"> Sur Inst.</th>
                                                            <th class=" hidden text-left md:table-cell"> Totale </th>

                              <th class="col-lg-1 hidden text-left md:table-cell"> Retirer </th>

                            </tr>


                         </thead>



             <tbody>

                             <tbody>

                              @foreach (Cart::content() as $content)
                            <tr>
                                 <!-- <td class="hidden pb-4 md:table-cell">-->

                                  <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ $content->nom }}</a></strong>
                                <td>
                                      <img   src="{{ asset('images/'.$content->options['image'])}}" alt="thumbnail" width="50" class="rounded-circle img-rounded">
                                </td>
                                 <!-- </td>-->

                                  <td>

                                <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ $content->name }}</a></strong>
                              </td>
                              


                             


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



              <strong><a href="{{ route('panier.list',$content->id) }}" title="Afficher le produit" >{{ number_format($content->price, 0, ',', ' ') }} FCFA</a></strong>

            </td>

 



                               <td>

                               
                              </td>

  <td>
                                <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ $content->options['selection']}} </a></strong>
                                </td>
                    

                                <td>
                                <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ $content->options['formule']}} </a></strong>
                                </td>
                                <td>
                                <strong><a href="{{ route('panier.list', $content->id) }}" title="Afficher le produit" >{{ $content->options['surc']}} </a></strong>
                                </td>

  

                                
                            
                               <td>

                               
                              </td>




                                 <td>
                                
                                </td>


                                 <td>
                                </td>




             






            <td>

              


                           <strong> <p>{{$content->price * $content->qty }}</p></strong>


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


                          </tbody>




                          </tbody>



                        </table>

                        
  @if( Cart::content()->count()  > 0)

                         <a class="btn btn-danger float-right mt-5 mb-2 mx-1" href="{{ url('/videpanier') }}" title="Retirer tous les produits du panier" >Vider le panier</a>

                                       @else
                         <a class="btn btn-danger float-right mt-5 mb-2 mx-1 disabled" href="#" title="Retirer tous les produits du panier"  aria-disabled="true">Vider le panier</a>

                                     @endif






                            <!--<a class="btn float-left mt-5 mb-2 mx-1" href="{{ url('/continuer') }}" title="Retirer tous les produits du panier" >payer la commande du panier</a>-->

                            <form method="POST" action="{{ route('validerpanier.store') }}" class="form-inline d-inline-block" id="contactform"  >
                             {{ csrf_field() }}


                                    <!-- verifier si le panier est vide pour desactiver le bouton -->
                                @if( Cart::content()->count()  > 0)
                <input type="submit" class="btn btn-success mt-5 mb-2 mx-1" value="valider la commande"    onclick='calltouchpay()' title="Valider la commande"/>

                                @else
                                <input type="submit" class="btn btn-success mt-5 mb-2 mx-1" value="valider la commande"     disabled="disabled" title="Valider la commande"/>
                                @endif


              </form>


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








