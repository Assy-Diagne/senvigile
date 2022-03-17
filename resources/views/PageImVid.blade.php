@extends('layouts.debut')


@section('content')
    <!-- End header -->

    <div class="all-title-box">
        <div id="testimonials" class="parallax section db parallax-off" style="background-image:url('images/banner.jpg');">
            <div class="container text-center text-white ">
                <!--<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span> entre les h1 -->
                <h1>Solutions </h1>
                <p class="m_1 text-justify">Des solutions de lutte efficace contre l’insécurité et le vol avec des services de télésurveillance et d'interventions 24/7. </p></h1>
            </div>
        </div>
    </div>


    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-justify">
                <div class="col-md-12  mt-5 ">
                    <h3 style="text-align: center;">COMMANDE ZEN</h3>
                    <!-- <p class="lead">SenVigile permet de prévenir des intrusions & effractions, comme des dangers domestiques avec une garantie de protection grâce à ses technologies smart de dissuasion, de surveillance et d’alertes pour minimiser les risques et dégâts. </p> -->

                </div>
            </div><!-- end title -->








            <table class="table table-bordered table-hover" style="text-align: center;height: 100px;">
                <thead style="background: black;
    font-size: 1.2em;
    color: #fff;
        border-bottom-left-radius: 10px;
    border-bottom-left-radius: 10px; ">
                <tr >


                </tr>
                </thead>
                <tbody>
                <form  action="{{route('panier2')}}" id="panier2" method="POST" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <tr>

                        <th scope="row" class="col-md-6 col-lg-6" style="background-color: orange;">Quantité</th>

                        <td colspan="3">








                            <input type="number" name="quantity" placeholder="Quantité ?" class="form-control mr-2 col-md-12 aligncenter" value=" quantity" required min="1" style="    border: 2px solid orange;     border-radius: 1rem;">











                        </td>

                    </tr>
                    <tr>

                        <th scope="row" class="col-md-6 col-lg-6" style="background-color: orange;">Choix du kit Zen</th>

                        <td colspan="3" class="col-sm-6">



                            <select id="selection" name="selection" class="form-control" style="    border: 2px solid orange;     border-radius: 1rem;">
                                <option value="">Choisir un element</option>
                                <option value="video" name="video" id="video" {{ request()->input('selection') == "video" ? 'selected' : '' }}  >Kit video </option>
                                <option value="alarme" name="alarme" id="alarme"  {{ request()->input('selection') == "alarme" ? 'selected' : '' }} >Kit Alarme </option>
                            </select>








                        </td>


                    </tr>
                    <tr>

                        <th scope="row" class="col-md-6 col-lg-6" style="background-color: orange;">Abonnement</th>

                        <td colspan="3" class="col-sm-6">



                            <select id="selection" name="selection" class="form-control" style="    border: 2px solid orange;     border-radius: 1rem;">
                                <option value="Abonnement Mensuel" name="mois" selected="selected" >-  Mensuel 5900  </option>
                                <option value="Abonnement Mensuel" name="mois" selected="selected" >Annuel 59000</option>

                            </select>

                            <button class="px-4 py-2 text-orange rounded btn btn-warning my-5" style="background-color:black;color: orange;">+Ajouter au panier</button>









                        </td>


                    </tr>





                </form>

                </tbody>

            </table>

            <hr class="invis">

            <div class="row mb-5" id="boxvideos">

                @foreach($videos as $video)
                    <div class="col-md-6 col-sm-6 col-12 mt-2  col-lg-6 " >
                        <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                            <div class="row">

                                <div class="col-md-6 col-lg-6 col-xs-6   ">

                                    <img src="images/{{ $video->image }}" alt="" class="img-fluid img-rounded" >
                                    <div class="col mt-5  " style="text-align: center;">

                                        <h3>{{ $video->prix }} FCFA</h3>
                                    </div><!-- end col -->
                                </div><!-- end col -->


                                <div class="col-md-6 col-sm-6 col-xs-6 " >






                                    <h3 class="text-center">{{ $video->nom }}</h3>


                                    <p >{{ $video->option1 }} <br/>
                                        {{ $video->option2 }}  <br/>
                                        {{ $video->option3 }}<br/>
                                        {{ $video->option4 }}<br/>
                                        {{ $video->option5 }} <br>
                                        {{ $video->option6 }} <br>
                                        {{ $video->option7 }} <br>
                                        {{ $video->option8 }} <br>

                                    </p>
                                    <div class="mt-3" >


                                        <form>

                                            <div class="form-check">
                                                <input class="form-check-input" type="Radio" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked" style="color: orange;font-weight: bold;">
                                                    Ajouter au panier
                                                </label>
                                            </div>
                                        </form>
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

                                        <h3>{{ $alarme->prix }} FCFA</h3>
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


                                        <form>

                                            <div class="form-check">
                                                <input class="form-check-input" type="Radio" value="" id="flexCheckChecked" checked>
                                                <label class="form-check-label" for="flexCheckChecked" style="color: orange;font-weight: bold;">
                                                    Ajouter au panier
                                                </label>
                                            </div>
                                        </form>
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










        </div><!-- end row -->
    </div><!-- end container -->
    </div><!-- end section -->









@stop
@push('scripts')
    <script>
        $(function () {
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
        });
    </script>
@endpush
