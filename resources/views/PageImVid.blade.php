@extends('layouts.debut')


@section('content')
    <!-- End header -->


    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-justify">
                <div class="col-md-12  mt-5 ">
                    <h3 style="text-align: center;">COMMANDE ZEN</h3>
                    <!-- <p class="lead">SenVigile permet de prévenir des intrusions & effractions, comme des dangers domestiques avec une garantie de protection grâce à ses technologies smart de dissuasion, de surveillance et d’alertes pour minimiser les risques et dégâts. </p> -->

                </div>
            </div><!-- end title -->


<!--<div  class="col-md-8 col-lg-8 mt-2 mb-5">
        <div class="post-media wow fadeIn mt-4">
                             <img src="{{asset('images/zenprod.png')}}" alt="" class="img-fluid"  style="color:white;max-width: 75%;float: center;">
                    </div>--> <!-- end media -->
                <!--</div>-->
    


@foreach($videos as $video)


                                        <h3 class="hidden" >{{ $video->h }} </h3>

                @endforeach


                <div class="row mt-5 ">
                    <div  class="col-md-6 col-lg-6 ">
        <div class="post-media wow fadeIn ">
                             <img src="{{asset('images/zenprod.png')}}" alt="" class="img-fluid"  style="color:white;max-width: 100%;">
                    </div><!-- end media -->

                    

                   <!--  <div class="pricingTable-sign-up mt-md-4 mt-lg-4 ">
                        <a href="#" class="hover-btn-new "><span>Voir details</span></a>
                    </div>--><!-- BUTTON BOX-->
                </div>
            
                <div class="col-md-6 col-lg-6 ">

            <table class="table  table-hover " style="text-align: left;height: 600px;">
                <thead style="background: black;
    font-size: 1.2em;
    color: #fff;
        border-bottom-left-radius: 10px;
    border-bottom-left-radius: 10px; ">
                <tr >


                </tr>
                </thead>
                <tbody>








                    




                



                <form  action="{{ route('panier.store',$video->id) }} "  id="panier2" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <tr>

 

                    
                     <input type="hidden" name="textOptSelect" value=" {{$video->textOptSelect}}">

                        <th scope="row" class="col-md-12 col-lg-12 " >Quantité</th>

                        <td colspan="3">

                            <input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2 col-md-12 " value=" {{$video->quantity}}" required min="1" style="    border: 2px solid orange;     border-radius: 1rem;">











                        </td>

                    </tr>
                    <tr >

                        <th scope="row" class="col-md-12 col-lg-12 " >Choix du kit Zen</th>

                        <td colspan="3" class="col-sm-12 col-lg-12 ">

                                          <div class="form-check  form-check-inline "  >
                                                <input class="form-check-input  @error('videochoix') is-invalid @enderror" type="checkbox"  value="video" id="video" name="videochoix">
                                                <label class="form-check-label" for="video" style="color: orange;font-weight: bold;" >
                                                    video
                                                </label>
                                               </div>


                                          <div class="form-check  form-check-inline">

                                                <input class="form-check-input @error('alarmechoix') is-invalid @enderror" type="checkbox" value="alarme" id="alarme" name="alarmechoix">
                                                <label class="form-check-label" for="alarme" style="color: orange;font-weight: bold;">
                                               alarme
                                                </label>
                                        </div>
                            </div>

                            <!--<select id="selection" name="selection" class="form-control " style="    border: 2px solid orange;     border-radius: 1rem;">
                                <option value="">Choisir un element</option>
                                <option value="video" name="video" id="video" {{ request()->input('selection') == "video" ? 'selected' : '' }}  >Kit video </option>
                                <option value="alarme" name="alarme" id="alarme"  {{ request()->input('selection') == "alarme" ? 'selected' : '' }} >Kit Alarme </option>
                            </select> -->








                        </td>


                    </tr>
                    <tr>

                        <th scope="row" class="col-md-12 col-lg-12 " >Abonnement </th>





                        <td colspan="3" class="col-sm-6">

                         <select id="selection" name="selection" class="form-control" >
                                 <option value="{{$video->abonnementmensuel}}-Abonnement Mensuel" name="mois" >Abonnement Mensuel 5900 </option>
                                 <option value="{{$video->abonnementannuel}}-Abonnement Annuel" selected="selected">Abonnement Annuel 59000</option>
                           </select>
                     <input type="hidden" name="textOptSelect" value=" {{$video->textOptSelect}}">


                             <!--<select id="selection" name="selection" class="form-control" style="    border: 2px solid orange;     border-radius: 1rem;">
                                <option value="{{$video->abonnementmensuel}}" name="mois" selected="selected" >-  Mensuel 5900  </option>
                                <option value="{{$video->abonnementannuel}} " name="annuel" >- Annuel 59000</option>

                            </select>-->
  </td>


                    </tr>
<tr>
<th scope="row" class="col-md-12 col-lg-12 " > <button class="px-4 py-2 text-orange  btn btn-warning my-5 " style="background-color:black;color: orange;border-radius: 2rem ;border: 2px solid orange;">Enregistrer la commande</button></th>
                          <td>
                            <!-- end media<button class="px-4 py-2 text-orange rounded btn btn-warning my-5" style="background-color:black;color: orange;border-radius: 2rem;">+Ajouter au panier</button>-->
                          <a href="{{route('panier2', $video->id)}}" class="px-4 py-2 text-orange  btn btn-warning my-5" style="background-color:black;color: orange;border-radius: 2rem ;border: 2px solid orange;">Acceder au panier</button> 







                        </td>



                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                    </tr>

                </tbody>

            </table> </div>

</div>
<div class="row">


<div class="col-lg-2">


            <button value = "<< Retour!"  onclick = "history.back()" class=" text-orange  btn btn-warning mb-0" style="background-color:black;color: orange;border-radius: 2rem ;border: 2px solid orange;" ><< Retour!</button>


   </div>




<div class="col-lg-4 col-lg-offset-4">


         <i class="fa fa-solid fa-filter alignright  fa-2x mt-1 "></i>  

 

   </div>
                                      <div class="form-check  form-check-inline " id="checkint" >
                                                <input class="form-check-input" type="checkbox"  value="interieure" id="interieure" >
                                                <label class="form-check-label" for="interieure" style="color: orange;font-weight: bold;">
                                                  interieure
                                                </label>
                                               </div>


                                          <div class="form-check  form-check-inline">

                                                <input class="form-check-input" type="checkbox" value="alarme" id="alarme">
                                                <label class="form-check-label" for="alarme" style="color: orange;font-weight: bold;">
                                               alarme
                                                </label>
                                        </div>


</div>



            <hr class="invis">

            <div class="row mb-5 " id="boxvideos" >

                @foreach($videos as $video)
                    <div class="col-md-6 col-sm-6 col-12 mt-2  col-lg-6 " >
                        <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                            <div class="row">

                                <div class="col-md-6 col-lg-6 col-xs-6   ">

                                    <img src="images/{{ $video->image }}" alt="" class="img-fluid img-rounded" >
                                    <div class="col mb-5  " style="text-align: center;padding-bottom: 10px;">

                                        <h3 >{{ number_format($video->prix, 0, ',', ' ') }} FCFA</h3>
                                    </div><!-- end col -->


                                    @if($video->id== 4 || $video->id== 6 || $video->id==7  || $video->id== 8  )

<div class="form-check" id="panneau" style="padding-bottom:10px ;">
                          <input class="form-check-input" type="radio" name="optionvideo" id="{{ $video->id }}"  value="{{ $video->optionvideo}}" >
                                                <label class="form-check-label" for="$video->optionvideo"  id="{{ $video->id }}" style="color: orange;font-weight: bold;">
                                                     Option  panneau Solaire : 14697F
                                                </label>
                                            </div>

 
 


 @endif

                                </div><!-- end col -->


                                <div class="col-md-6 col-sm-6 col-xs-6 " >






                                    <h3 class="text-center">{{ $video->nom }}</h3>


                                    <p > <br/>
                                        {{ $video->option2 }}  <br/>
                                        {{ $video->option3 }}<br/>
                                        {{ $video->option4 }}<br/>
                                        {{ $video->option5 }} <br>
                                        {{ $video->option6 }} <br>
                                        {{ $video->option7 }} <br>
                                        {{ $video->option8 }} <br>

                                    </p>
                                    <div class="mb-1" >


                                            <div class="form-group" >

                                            <div class="form-check" >
                                                <input class="form-check-input" type="radio" name="radio" id="{{ $video->id }}"  value="{{ $video->id }}"  >
                                                <label class="form-check-label" for="{{ $video->id }}" style="color: orange;font-weight: bold;">
                                                    Sélectionner
                                                </label>
                                                <input type="hidden" name="$video->id " value="{{$video->id}}">

                    <input type="hidden" name="nom"  value=" {{ $video->nom}}">
                     <input type="hidden" name=" image" value="{{$video->image}}" >
                     <input type="hidden" name="  surcoutinst1" value="{{$video-> surcoutinst1}}" >


                    <input type="hidden" name="prix" value=" {{$video->prix}}">

                    <input type="hidden" name="option1" value=" {{$video->option1 }}">
                    <input type="hidden" name="option2" value=" {{$video->option2}}">


                    <input type="hidden" name="option3" value=" {{$video->option3}}">

                     <input type="hidden" name="option4" value=" {{$video->option4}}">

                     <input type="hidden" name="option5" value=" {{$video->option5}}">

                     <input type="hidden" name="option6" value=" {{$video->option6}}">
                     <input type="hidden" name="option7" value=" {{$video->option7}}">

                     <input type="hidden" name="option8" value=" {{$video->option8}}">
                                            </div>

                                                                                        </div>

                                    </div>               <!--<div class="col-md-12 col-sm-12 col-xs-6 " style="text-align:right;" >

<i class="fa fa-plus-circle" style="color: orange;background: white;font-size: 20px;"></i>ajouter au panier
</div>-->
                                    <!-- end row -->
                                </div><!-- end col -->



                            </div><!-- end row -->

                        </div><!-- end col -->
                    </div><!-- end col -->
                @endforeach
 

            </div><!-- end col -->



          











            <div class="row mb-5" id="boxalarms">

                @foreach($alarmes as $alarme)
                    <div class="col-md-6 col-sm-6 col-12 mt-1  col-lg-6 " >
                        <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                            <div class="row">

                                <div class="col-md-6 col-lg-6 col-xs-6   ">

                                    <img src="images/img9.jpg" alt="" class="img-fluid img-rounded" >
                                    <div class="col mt-5  " style="text-align: center;">

                                        <h3>{{ number_format($alarme->prix , 0, ',', ' ')}} FCFA</h3>
                                    </div><!-- end col -->
                                </div><!-- end col -->


                                <div class="col-md-6 col-sm-6 col-xs-6 " >






                                    <h3 class="text-center">{{ $alarme->nom }}</h3>


                                    <p >{{ $alarme->option1 }} <br/>
                                        {{ $alarme->option2 }}  <br/>
                                        {{ $alarme->option3 }}<br/>
                                        {{ $alarme->option4 }}<br/>
                                        {{ $alarme->option5 }} <br>
                                        {{ $alarme->option6 }} <br>
                                        {{ $alarme->option7 }} <br>
                                        {{ $alarme->option8 }} <br>


                                    </p>
                                    <div class="mt-3" >



                                            <div class="form-check">
                          <input class="form-check-input" type="radio" name="radio2" id="{{ $alarme->id }}"  value="{{ $alarme->id }}" >
                                                <label class="form-check-label" for="flexCheckChecked"  id="{{ $alarme->id }}" style="color: orange;font-weight: bold;">
                                                     Selectionner
                                                </label>
                                            </div>
                                        
                                    </div>               <!--<div class="col-md-12 col-sm-12 col-xs-6 " style="text-align:right;" >

<i class="fa fa-plus-circle" style="color: orange;background: white;font-size: 20px;"></i>ajouter au panier
</div>-->
                                    <!-- end row -->
                                </div><!-- end col -->



                            </div><!-- end row -->

                        </div><!-- end col -->
                    </div><!-- end col -->
                @endforeach


                <

            </div><!-- end col -->



</form>






        </div><!-- end row -->
    </div><!-- end container -->
    </div><!-- end section -->












@stop
@push('scripts')
    <script>

$(function () {

        document.getElementById("boxvideos").style.display = "none";


        document.getElementById("boxalarms").style.display = "none";


    $('#video').change(function() {
        $('#boxvideos').toggle();
                        document.getElementById("checkint").style.display = " ";
                        $('input[name="radio"]').prop('required',true);


    });


    


    $('#alarme').change(function() {
        $('#boxalarms').toggle();
                document.getElementById("checkint").style.display = "none";
                                        $('input[name="radio2"]').prop('required',true);


    });

     $('#selection').change(function() {
                                        $('input[name="selection"]').prop('required',true);


    });
});
     




      /*  $(function () {
                document.getElementById("boxvideos").style.display = "none";
                document.getElementById("boxalarms").style.display = "none";
            $('#selection').change(function () {
                var selectionselect = document.getElementById("selection");

                var valuesselect  = selectionselect.value;

                if (valuesselect == "video"){

                 document.getElementById("boxvideos").style.display = "";
                    document.getElementById("boxalarms").style.display = "none";
                }else if(valuesselect == "alarme") {

                 document.getElementById("boxalarms").style.display = "";
                    document.getElementById("boxvideos").style.display = "none";

                }else{
                    document.getElementById("boxvideos").style.display = "none";
                    document.getElementById("boxalarms").style.display = "none";
                }
            });
        }); */
    </script>


    
@endpush
