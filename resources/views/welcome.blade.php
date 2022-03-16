

@extends('layouts.debut')


@section('content')


<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active" style='color:orange'></li>
        <li data-target="#carouselExampleControls" data-slide-to="1" style='color:orange'></li>
        <li data-target="#carouselExampleControls" data-slide-to="2" ></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div id="home" class="first-section" style="background-image:url('images/surveillance.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight" ><strong style='color:orange'>Restez Zen, </strong> nous gardons le contrôle ! </h2>
                                    <!--    <a href="#" class="hover-btn-new"><span>Nous Contacter</span></a>-->
                                    <p class="lead">Profitez d’une surveillance accrue et de la rapidité de traitement des alarmes par le centre de télésurveillance!</p>
                                    <a href=" {{route ('contact')}} " class="hover-btn-new" ><span>Nous Contacter</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('Solutions')}}" class="hover-btn-new"><span>En Savoir Plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('images/securité.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right textwhite ">
                                <div class="big-tagline ">
                                    <h2 data-animation="animated zoomInRight "><strong style='color:orange'>Une sécurité de proximité assurée par </strong> nos vigiles motocyclés</h2>
                                    <p class="lead" data-animation="animated fadeInRight">Levées de doute physiques et rondes assurées par des professionnels qualifiés   </p>
                                    <a href=" {{route ('contact')}} " class="hover-btn-new"><span>Nous Contacter</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('Solutions')}}" class="hover-btn-new"><span>En Savoir Plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('images/reseau.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12 col-sm-12 text-right mr-auto">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight text-left "><strong style='color:orange'>Dispositifs de sécurité et de confort avec des </strong>technologies Smart  </h2>
                                    <p class="lead " data-animation="animated fadeInLeft">Videosurveillance, Alarme intrusion, Détection incendie et autres risques domestiques, Visiophonie, Contrôle d’accès, Pointage, Domotique ...</p>
                                    <a href=" {{route ('contact')}} " class="hover-btn-new" ><span >Nous Contacter</span></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{ route('Solutions')}}" class="hover-btn-new"><span>En Savoir Plus</span></a>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <!-- Left Control -->
        <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>




<div id="overviews" class="section lb">
    <div class="container">
        <div class="section-title row text-justify">
           <!--  <div class="col-md-8 offset-md-2" style="padding-top: 56px;">-->
                            <div class="col-md-12 " style="padding-top: 81px;">

                <h3 style="text-align: center;">Notre solution</h3>
                <p class="lead">Plateforme digitale de sécurité électronique, SENVIGILE est la solution idéale qui vous garantit Zenitude ! Elle synthétise tout ce que l’on attend d’une protection électronique et intègre tous les services nécessaires de traitement d’alarmes et levées de doute. Un concept d’ubérisation de la sécurité privée, alliant smart security et gardiennage !</p>
                <!--mon essaie message box-->
                <div class="message-box">
                     <!--<a href="{{ route('Solutions')}}" class="hover-btn-new"><span>Decouvrir</span></a> -->
                </div>
            </div><!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-justify">
                    <div class="message-box">

                        <!-- <h4>2018 BEST WEB HOSTING COMPANY</h4>-->
                        <h3> C’est pour vous!</h3>
                        <h4> Professionnels : PME-PMI, commerces :</h4>
                        <p>
Agences de banque, agences de voyage, cash-points, boutiques multiservices
Showrooms, épiceries, superettes, magasins grossistes, entrepôts
Boulangeries, cafés, bars, restos, Pharmacies, cabinets médicaux, 
Salons de coiffure, de couture, galeries</p>

</p>
                        <h4> Particuliers : habitations</h4>

<p>
Villas, appartements, résidences secondaires, champs, vergers, bergeries…
</p>   
                     <h4> Services publics, parapublics, communautaires…</h4>




<div class="message-box">
                  <!--  <a href="{{ route('Solutions')}}" class="hover-btn-new"><span>Decouvrir</span></a> -->
                </div>                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/Vousêtes.jpg" alt="" style="height:415px;" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/centre de télésurveillance.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-justify">
                    <div class="message-box">
                        <h2 style="font-weight: 500;">Centre de télésurveillance</h2>
                        <p>La télésurveillance prend le relais de votre système d’alarme en cas d’incident ou de tentative d’effraction, pour vous garantir un degré de sécurité inégalé.
Nos opérateurs assurent une permanence de service 24/7 pour vous offrir une prestation de sécurité de haute fiabilité. Il s’agit de professionnels qualifiés qui maîtrisent parfaitement la réglementation, nos systèmes et les consignes clients. 

</p>
<div class="message-box">
                    <!--<a href="{{ route('Solutions')}}" class="hover-btn-new"><span>Decouvrir</span></a>-->

                </div>

                        <!-- <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>-->

                       <!--  <a href="{{ route('Support') }}" class="hover-btn-new"><span>En savoir plus</span></a>-->
                    </div><!-- end messagebox -->
                </div><!-- end col -->



            </div><!-- end row -->





            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-justify">
                    <div class="message-box">

                        <!-- <h4>2018 BEST WEB HOSTING COMPANY</h4>-->
                        <h2 style="font-weight: 500;">Sécurité mobile</h2>
                         <p>Des agents mobiles sont mis à votre disposition pour effectuer des missions de gardiennage à pied ou à l’aide de vélos électriques pour assurer rapidité et éviter toute  nuisance sonore.
Ils effectueront des rondes ainsi que des interventions sur commande du centre de télésurveillance.

</p>
                       




<div class="message-box">
                    <!-- <a href="{{ route('Solutions')}}" class="hover-btn-new"><span>Decouvrir</span></a> -->
                </div>                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/Agentsmobiles.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>






        </div><!-- end container -->
    </div><!-- end section -->


</div><!-- end col -->



<div id="pricing" class="section lb">

    <div class="container">
        <div class="section-title text-center">
            <h3 style="margin-bottom: 1px;">Prêt à commencer?</h3>
            <p > Choisissez votre formule dès maintenant</p>
        </div><!-- end title -->

        <div class="row" border="none">
            <div class="col-md-6  " style="margin-left: 460px;">
                <div class="message-box">
                    <div class="pricingTable-sign-up ">
                        <a href="{{route('offres')}}" class="hover-btn-new"><span>Souscription</span></a>
                    </div><!-- BUTTON BOX-->

                </div><!-- end col -->
            </div><!-- row-->
        </div><!-- container-->
    </div>
</div> <!-- section -->
<div class="container">
    <div class="row" border="none" >
            <div class="col-md-12 col-sm-12" >
                
                    <div class="mx-auto w-75 " >
                        <h1 class="mx-auto py-4 text-center w-75" ><strong>Nos Formules</strong></h1>
                </div><!-- end col -->
            </div><!-- row-->
        </div><!-- container-->
        </div><!-- container-->
<!--<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3 " >
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
-->

<div id="pricing-box" class="section wb">
<div id="pricing-box" class="section wb">
    <div class="container">
        <div class="row" style="width: 95%;margin-left: 40px; margin-right: 0px; padding-top: 50px;">
             <div class="col-md-6 col-lg-4 col-xs-4  mu" >
                <div class="pricingTable wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"><!--a revoir after pricingTable-->
                    <div class="pricingTable-header">

                        <img src="images/imagezen.png" alt="" class="img-fluid img-rounded" style="max-width:100%; max-height:100% ;">

                        <!--a<span class="heading">
                            <h3>Zen </h3>
                        </span>


<span class="price-value mt-2"> A partir de: </br><span class="month"><strong>5 900 FCFA/</strong><small>mois</small></span><span class="mit1"> pour un kit au choix</span> </span>-->
  

                    </div>

                    <div class="pricingContent">
                        <ul style="padding-bottom:36px;">
                          <p style="font-size:15px;" class="font-weight-bold"><strong>KIT DE VIDEOSURVEILLANCE </strong><br/>
avec 1 caméra 
 </p>




                         <!--   <li>Vision en temps réel</li>
                            <li>Détection de mouvements</li>
                            <li>*Preuves images et Vidéos d'alerte</li>-->
                            
                        </ul>



                         <ul style="padding-top: 18px;padding-bottom: 5px;">
                            <p style="font-size:15px;" ><strong>KIT D’ALARME INTRUSION </strong></p>
<p style="font-size:15px;"  class="font-weight-bold ">avec 1 centrale + 1 détecteur de mouvement<br/> + 1 contact de porte + 1 télécommande + 1 tag
</p>
 
                           <!--  <li>Levée de doute à distance  </li>-->
                            <!--  <li>Alarme sonore de la centrale</li>-->
</ul>
                         <ul style="padding-bottom: 76px;">

                          <p style="font-size:15px;"><strong>TELESURVEILANCE</strong></p>

                            <li  class="font-weight-bold ">Levée de doute à distance</li>
                           
                        </ul>


                          <ul style="padding-bottom: 56px;">
                          <p style="font-size:15px;"><strong>ESPACE ABONNE  </strong></p>


                            <li  class="font-weight-bold ">1 compte unique
</li>
                           <!--  <li>Notifications et emails en illimité, 20 SMS/mois et 20 appels</li>
                           <span style="color: orange;"> <li> Stockage jusqu’à 80 événements</li></span>
                            <li>Historique événements : 1 semaine</li>-->
                          
                        </ul>





                    </div><!-- /   {type de marge}{côté}-{breakpoint}-{taille}.CONTENT BOX-->

                    <div class="pricingTable-sign-up  mt-md-3  " >

                   
                        <a href="{{route('pagezen')}}" class="hover-btn-new" id="readmore" ><span>Voir details</span></a>
                    </div><!-- BUTTON BOX-->
                </div>
            </div>




            <div class="col-md-6 col-lg-4 col-xs-4  mu "  >
                <div class="pricingTable pink wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                     <div class="pricingTable-header ">
<!--<div class="pricingTable-header p" style="background: url(images/imagezenprem.png);
 
 max-width: 100%;float:;">-->
                        <img src="images/imagezenprem.png" alt="" class="img-fluid img-rounded" style="max-width:100%; max-height:100% ;">

                        <!--a<span class="heading">
                            <h3>Zen </h3>
                        </span>


<span class="price-value mt-2"> A partir de: </br><span class="month"><strong>5 900 FCFA/</strong><small>mois</small></span><span class="mit1"> pour un kit au choix</span> </span>-->
  

                    </div>





                    <div class="pricingContent">
                       <!-- <i class="fa fa-briefcase"></i>-->
                             <ul style="padding-bottom: 36px;"> 
                            <p style="font-size:15px;" class="font-weight-bold"><strong>KIT VIDEOSURVEILLANCE </strong> <br/>
<span class=" " style= "color: #CC66CC; ">jusqu’à 3 caméras </span>
  </p>
                           <!-- <li>Vision en temps réel</li>
                            <li>Détection de mouvements</li>
                            <li>*Preuves images et Vidéos d'alerte</li>-->
                           
                        </ul>

                          <ul style="padding-top: 18px;padding-bottom: 0px;"> 
                           <p style="font-size:15px;"  class="font-weight-bold "><strong>KIT D’ALARME INTRUSION+RISQUE</strong> <br/>
avec 1 Kit Zen  
  </p>

         <p style="color: #CC66CC;"  class="font-weight-bold ">+ 1 sirène extérieure + 1 télécommande <br/>+ 1 tag
+ Jusqu’à 3 accessoires </p>

                           








                          <!--  <li>Détection de mouvements</li>
                            <li>Alarme sonore de la centrale</li>
                            <li>Détection risque domestique</li>
                            <li style="color: orange;">Alarme sonore extérieure</li>-->
                            
                        </ul>






   <ul style="padding-bottom: 46px;padding-top: 19px;"> 
                           <p style="color: #CC66CC;font-size:15px;"><strong>TELESURVEILANCE + AGENT MOBILE </strong></p>
                            <li  class="font-weight-bold ">Levée de doute à distance</li>

                            <li style="color:  #CC66CC;"  class="font-weight-bold ">Levée de doute physique </li>
                            <!-- <li>50 SMS/mois et 20 appels
</li>
                            <li>*Stockage jusqu’à 1.5Gb</li>
                            <li>Enregistrement continu pour 1 caméra au choix</li>
                            <li>Historique événements : 2 semaines</li>-->


                           
                        </ul>







                        <ul> 
                           <p style="color:  #CC66CC;font-size:15px;"><strong>ESPACE ABONNE</strong></p>

                            <li  class="font-weight-bold ">2 comptes utilisateurs dont 1 principal</li>

                             <!--<li>Notifications et emails en illimité</li>
                            <li>50 SMS/mois et 20 appels
</li>
                            <li>*Stockage jusqu’à 1.5Gb</li>
                            <li>Enregistrement continu pour 1 caméra au choix</li>
                            <li>Historique événements : 2 semaines</li>-->


                           
                        </ul>
                    </div><!-- /  CONTENT BOX-->

                    <div class="pricingTable-sign-up mt-md-1 my-lg-4"  >
                        <a href="{{route('pagezenpremium')}}" class="hover-btn-new"><span>Voir details</span></a> 
                    </div><!-- BUTTON BOX-->
                </div>
            </div>

            

            <div class="col-md-6 col-lg-4 col-xs-4 pb-lg-5 mu">
                <div class="pricingTable pink wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                   <div class="pricingTable-header">

                        <img src="images/imagezenint.png" alt="" class="img-fluid img-rounded" style="max-width:100%; max-height:100% ;">

                        <!--a<span class="heading">
                            <h3>Zen </h3>
                        </span>


<span class="price-value mt-2"> A partir de: </br><span class="month"><strong>5 900 FCFA/</strong><small>mois</small></span><span class="mit1"> pour un kit au choix</span> </span>-->
  

                    </div>
                    <div class="pricingContent" >
                 <ul style="padding-bottom: 8px ; padding-top: 19px;"> 



                           <p style="font-size:15px;"  class="font-weight-bold "><strong>KIT VIDEOSURVEILLANCE </strong><br/><span class=" " style= "color: #E41818;"> avec 4 caméras et 1 moniteur avec NRV intégré </span> </p> 

                          
                           
                        </ul>




                                                 <ul style="padding-bottom: 31px; padding-top: 18px;">
                            <p style="font-size:15px;"  class="font-weight-bold "><strong>KIT D’ALARME INTRUSION+RISQUE</strong><br/>
                             
avec 1 kit Zen Premium </p>

                            


                          <p style="color: #E41818;"  class="font-weight-bold ">+ 1 clavier d’alarme <br/>+ Jusqu’à 7 accessoires </p>

                           <!--  <li>Détection risque domestique</li>
                            <li>Sirène d’alarme de la centrale</li>
                            <li>Détection risque domestique</li>
                            <li>Alarme sonore extérieure </li>-->
                        </ul>




                                                 <ul style="padding-bottom: 45px; " >
                            <p style="color: #E41818; font-size: 15px;"><strong>TELESURVEILANCE + AGENT MOBILE </strong></p>

                            <li  class="font-weight-bold " style="color: #E41818;"> Levée de doute à distance</li>
                            <li style="color: #E41818;"  class="font-weight-bold ">Levée de doute physique</li>
                             <!--<li>Intervention d'un agent </li>
                            <li>Gardiennage des lieux 24h</li>
                            <li>Rondes 3 fois</li>-->
                            
                        </ul>

    <ul>
                           <p style="color: #E41818;font-size:15px;"><strong>ESPACE ABONNE</strong> </p>

                            <li  class="font-weight-bold "> 5 comptes utilisateurs dont 1 principal</li>
                             <!--<li>100 SMS/mois et 30 appels </li>
                            <li>*Stockage jusqu’à 3Gb</li>
                            <li>Enregistrement continu pour 1 caméra au choix</li>
                            <li>Historique événements : 1 mois</li>-->
                            
                        </ul>





                    </div><!-- /  CONTENT BOX-->


                    <div class="pricingTable-sign-up mt-md-4 mt-lg-4 ">
                        <a href="{{route('pagezenintegral')}}" class="hover-btn-new "><span>Voir details</span></a>
                    </div><!-- BUTTON BOX-->
                </div>
            </div>



        </div>




     </div><!-- BUTTON BOX-->
                </div>
            </div>






        


@stop