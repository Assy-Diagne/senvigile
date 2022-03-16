

@extends('layouts.debut')


@section('content')


<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div id="home" class="first-section" style="background-image:url('images/slider_6.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight" ><strong>Contrôlez vos équipements </strong> à  distance</h2>
                                    <!--    <a href="#" class="hover-btn-new"><span>Nous Contacter</span></a>-->
                                    <p class="lead">Avec senMonitoring, vous connaissez le fonctionnement de vos appareils et êtes avertis en cas de défaillances</p>
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
            <div id="home" class="first-section" style="background-image:url('images/slider_5.png');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right textwhite ">
                                <div class="big-tagline ">
                                    <h2 data-animation="animated zoomInRight "><strong>Disposez d’un outil de </strong>télémaintenance</h2>
                                    <p class="lead" data-animation="animated fadeInRight">Vous êtes assistés pour la maintenance à distance de certaines installations ou équipements difficiles d’accès ou éloignés des centres de contrôle </p>
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
            <div id="home" class="first-section" style="background-image:url('images/slider_4.png');">
                <div class="dtab">
                    <div class="container">
                        <div class="row ">
                            <div class="col-md-12 col-sm-12 text-right mr-auto">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight text-left "><strong>Évaluez les performances énergétiques </strong></br>de vos équipements</h2>
                                    <p class="lead " data-animation="animated fadeInLeft">Vous disposez d’un détail sur vos alertes ainsi qu’une aide pour analyser le bilan de vos activités énergétiques</p>
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
            <div class="col-md-8 offset-md-2">
                <h3>Notre solution</h3>
                <p class="lead">SENMONITORING fournit une surveillance à distance améliorée des performances de vos équipements, avec une garantie de rendement, grâce à la détection immédiate des défauts et alarmes mais aussi aux rapports quotidiens, hebdomadaires et/ou mensuels sur le fonctionnement de vos installations.</p>
                <!--mon essaie message box-->
                <div class="message-box">
                    <a href="{{ route('Solutions')}}" class="hover-btn-new"><span>Decouvrir</span></a>
                </div>
            </div><!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-justify">
                    <div class="message-box">

                        <!-- <h4>2018 BEST WEB HOSTING COMPANY</h4>-->
                        <h2>Applications possibles</h2>
                        <p>En utilisant la plateforme senMonitoring, vous contrôlez vos installations distantes ou isolées afin de vous assurer de leur fonctionnement optimal. Il vous est désormais possible de contrôler l’ambiance et la disponibilité de vos salles techniques, de même que vos chambres froides. Il vous est également possible de surveiller la production / consommation énergétique de vos équipements (bâtiments, groupes électrogènes, forages, …) avec des rapports de synthèse automatisés et des alertes..</p>



                        <a href="{{ route('Application') }}" class="hover-btn-new"><span>En savoir plus</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_02.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="images/about_03.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 text-justify">
                    <div class="message-box">
                        <h2>Support 24/7</h2>
                        <p>Un centre de surveillance est mis à la disposition des clients les plus exigeants qui nous confient la supervision de premier niveau de leurs équipements. Un support composé d’experts est fourni afin non seulement de détecter les écarts dans les indicateurs mais aussi de fournir des conseils .</p>

                        <!-- <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum.</p>-->

                       <!--  <a href="{{ route('Support') }}" class="hover-btn-new"><span>En savoir plus</span></a>-->
                    </div><!-- end messagebox -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


</div><!-- end col -->



<div id="pricing" class="section lb">

    <div class="container">
        <div class="section-title text-center">
            <h3>Prêt à commencer?</h3>
            <p> Choisissez votre forfait dès maintenant </p>
        </div><!-- end title -->

        <div class="row" border="none">
            <div class="col-md-6 offset-md-4">
                <div class="message-box">
                    <div class="pricingTable-sign-up ">
                        <a href="{{ route('price') }}" class="hover-btn-new"><span>Souscription Mensuelle/Annuelle</span></a>
                    </div><!-- BUTTON BOX-->

                </div><!-- end col -->
            </div><!-- row-->
        </div><!-- container-->
    </div>
</div> <!-- section -->



<!--<div id="pricing-box" class="section wb">-->
<div id="pricing-box" class="section wb">
    <div class="container">
        <div class="row">
           

            
            

        
             <div id="pricing-box" class="section wb">
        <div class="container">

            <div class="row">
                                  

               <div class="col-md-4 col-sm-6  mu mt-5 mt-5 my-5">
                    <div class="pricingTable pink wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="pricingTable-header p">
                            <span class="heading s flex-row">


                  

            
            </div>
        </div>

    </div>

 



        </div>
    </div>
</div>





@stop