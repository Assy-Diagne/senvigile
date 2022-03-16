<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas apour teste shrink-to-fit=no-->
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <!-- Site Metas -->
    <title>SenVigilE</title>
    <meta name="keywords" content="">


<meta name="description" content="senmonitoring fournit une surveillance à distance améliorée des performances de vos équipements, avec une garantie de rendement, grâce à la détection immédiate des défauts et alarmes mais aussi aux rapports quotidiens, hebdomadaires et/ou mensuels sur le fonctionnement de vos installations">


    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />



    <link rel=”stylesheet” href=”https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css”>



    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">


    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{asset('css/versions.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>
    <link rel="stylesheet" href="{{asset('fonts/flaticon.svg')}}">
<script src="https://kit.fontawesome.com/d3e51cbf14.js" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
</head>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<!--<![endif]-->
<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>






<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/620a59519bd1f31184dc89f3/1frs6pqq3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!--End of Tawk.to Script-->


</html>
<body class="host_version">

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header tit-up">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title">Espace client</h4>
            </div>
            <div class="modal-body customer-box">
                <!-- Nav tabs -->
                <div class="row">
                    <ul class="nav nav-tabs">
                        <li><a class="active" href="#Login" data-toggle="tab">Connexion</a></li>
                        <li><a  href="#modaleinscription" data-toggle="tab" >Inscription</a></li>
                    </ul>
                    <ul class="nav nav-tabs ml-auto">
                        <li><a href="#Registration" data-toggle="tab"><strong>Compte démo</strong></a></li>
                    </ul>
                </div>

                <!-- Tab panes -->




                <div class="tab-content">
                    <div class="tab-pane active" id="Login">
                        @if (session('messageerror'))
                            <div class="alert alert-danger">{{ session('messageerror') }}</div>
                        @endif
                        <form role="form" id="loginForm" class="form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf


                            <div claass="form-horizontal form-group">
                                <div class="col-sm-12 my-5">
                                    <input id="email" type="email"  style='color:black' class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value=" {{ old('email') }}"  autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                    @enderror
                                </div>
                            </div>
                            <div claass="form-horizontal form-group">
                                <div class="col-sm-12 ">

                                    <input id="password"  style='color:black' type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="Mot de passe" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                    @enderror
                                </div>
                            </div>
                            <br/>



                            <!-- <div class="row">
                               <div class="col-sm-10">
                                   <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                       Valider
                                   </button>
                                   <a class="for-pwd" href="javascript:;">Mot de pass oublié?</a>
                               </div>
                           </div>-->



                            <div class="form-group row px-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">

                                        <label class="form-check-label" for="remember">
                                            {{ __('Se Souvenir de Moi') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Valider') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>


                    <!-- PARTICULIER -->
                    <div class="tab-pane"  id="modaleinscription">

                        <form  method="POST" href="{{route('register')}} " id="registerForm" enctype="multipart/form-data">

                            @csrf

                            <div class="col-md-12 mb-3">
                                <label for="nameInput">Choisir un type de profil</label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="typeprofil" id="typeprofil1" value="particulier" checked>
                                        <label class="form-check-label" for="typeprofil1">
                                            Je suis un particulier
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="typeprofil" id="typeprofil2" value="professionnel">
                                        <label class="form-check-label" for="typeprofil2">
                                            Je suis un professionnel
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">


                                <div class="col-md-6 mb-3">
                                    <label for="prenomInput">{{ __('Prenom') }}</label>

                                    <input  type="text" name="prenom" value="{{ old('prenom') }}" style='color:black' id="prenomInput"    class="form-control">

                                    <span class="invalid-feedback" role="alert" id="prenomError">
                                        <strong></strong>
                                </span>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="last_nameInput">{{ __('Nom') }}</label>

                                    <input id="last_nameInput" type="text" class="form-control" style='color:black' name="last_name" value="{{ old('last_name') }}"  autocomplete="last_name">

                                    <span class="invalid-feedback" role="alert" id="last_nameError">
                                        <strong></strong>
                                    </span>

                                </div>

                                  <!-- <div class="col-md-12 mb-3">
                                    <label for="pseudoInput">{{ __('Pseudo') }}</label>

                                    <input id="pseudoInput" type="text" class="form-control" name="pseudo" style='color:black' value="{{ old('pseudo') }}"  autocomplete="pseudo">

                                    <span class="invalid-feedback" role="alert" id="pseudoError">
                                        <strong></strong>
                                    </span>
                                </div>                   -->


                                <div class="col-md-12 mb-3">
                                    <label for="mobileInput">{{ __('Telephone') }}</label>

                                    <input id="mobileInput" type="number" class="form-control" name="mobile" style='color:black' value="{{ old('mobile') }}"   autocomplete="mobile">

                                    <span class="invalid-feedback" role="alert" id="mobileError">
                                        <strong></strong>
                                    </span>

                                </div>




                                <div class="col-md-12 mb-3 professionnel box">
                                    <label for="entreprise">{{ __('Nom entreprise') }}</label>


                                    <input id="entrepriseInput"  type="text" class="form-control " style='color:black' name="entreprise" value="{{ old('entreprise') }}"  autocomplete="entreprise" >

                                    <span class="invalid-feedback" role="alert" id="entrepriseError">
                                        <strong></strong>
                                </span>

                                </div>


                                <div class="col-md-12 mb-3 professionnel box">
                                    <label for="poste">{{ __('poste') }}</label>

                                    <input id="posteInput" type="text"  class="form-control" name="poste" style='color:black' value="{{ old('poste') }}"  autocomplete="poste">
                                    <span class="invalid-feedback" role="alert" id="posteError">
                                        <strong></strong>
                                    </span>

                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="emailInput">{{ __('Adresse Email') }}</label>


                                    <input id="emailInput" type="email" class="form-control" style='color:black' name="email" value="{{ old('email') }}"
                                           autocomplete="email">

                                    <span class="invalid-feedback" role="alert" id="emailError">
                                        <strong></strong>
                                    </span>

                                </div>




                                <div class="col-md-12 mb-3">
                                    <label for="passwordInput">{{ __('Mot de  passe') }}</label>


                                    <input id="passwordInput" type="password" style='color:black' class="form-control" name="password" style='color:black'autocomplete="new-password">

                                    <span class="invalid-feedback" role="alert" id="passwordError">
                                <strong></strong>
                            </span>


                                </div>
                                <small class="my-1" style='color:grey' >Le mot de passe doit contenir au moins une lettre majuscule ,une lettre minuscule,un chiffre, un caractère spécial</small>

                                <div class="col-md-12 mb-3">
                                    <label for="password-confirm">{{ __('Confirmer le mot de  passe') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  style='color:black' required autocomplete="new-password">
                                    <span class="invalid-feedback" role="alert" id="passwordError">
                                <strong></strong>
                            </span>
                                </div>

                            </div>



                            <div class="col-md-12 mb-3 mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" id="btnparticulier" class="btn btn-primary">

                                        {{ __('Créer un compte') }}
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>




                    <!-- PROFESSIONNELLE -->














                </div>
            </div>
        </div>
    </div>
</div>


<!-- END LOADER -->





<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-right: 15px; padding-left: 0px;"  >
        <div class="col-md-4">
 <ul style="padding-left: 0px; " >
                       <li> <a class="navbar-brand " href="{{route('welcome')}}" style="margin-bottom:0px;">

                        <img class="log img-fluid"  src="{{asset('images/logosignature.png')}}" alt="" /> 
                      </a>  </li>
                    </ul>
                      </div>
                    
                
  <!--<img src="images/senvigile.png" style="width:200px;" alt="" />            </a>-->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">

                <!--            <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="fas fa-search" style="color:light;"></i></button>
        </form>-->







 <ul class="navbar-nav ml-auto">


  
                                               
                               
                              
                            





                       

                            


                @auth
                    <ul class="navbar-nav ml-auto">


                        <!-- phase test<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>-->

                        <li class="nav-item {{ Request::is('accueil') ? 'active' : '' }}"><a class="nav-link" href="{{ route('Accueil') }}">Accueil</a></li>
                        <li class="nav-item {{ Request::is('features2') ? 'active' : '' }}"><a class="nav-link" href="{{ route('Solutionss')}}">Solutions </a></li>

                          <li class="nav-item {{ Request::is('ProduitsServices') ? 'active' : '' }}"><a class="nav-link" href="{{ route('Servicess') }}">Produits et Services</a></li>
                        <li class="nav-item {{ Request::is('Mesoffres') ? 'active' : '' }}"><a class="nav-link" href="{{ route('offress') }}">Offres</a></li>


                                                 <li class="nav-item {{ Request::is('services') ? 'active' : '' }}"><a class="nav-link" href="">Mes Commandes</a></li>

                        <!-- <li class="nav-item {{ Request::is('hosting') ? 'active' : ''}}"><a class="nav-link" href="{{ route('Application') }}">Applications --></a></li>

                    <!--  <li class="nav-item {{ Request::is('domain') ? 'active' : '' }}"><a class="nav-link" href="{{ route('Support') }}">Support</a></li>-->

                      

                    <!--  <li class="nav-item {{ Request::is('domain') ? 'active' : '' }}"><a class="nav-link" href="{{ route('Support') }}">Support</a></li>-->
                       
                               

<li class="nav-item mr-2">
                                    <a class="nav-link" href="{{ route('panier.list') }}">
                                        <i class="fas fa-cart-arrow-down fa-1.5x"></i>
                                        <div class="badge badge-warning ">
                                           <!-- @auth
                                            @else-->
                                                0
                                           <!-- @endauth-->
                                        </div>
                                    </a>
                                </li>

                        <li class="nav-item dropdown text-white">

                            <i class="fas fa-btn-wight fa-user fa-2x " style="color:green;"></i>  <span class="caret"></span>  {{ Auth::user()->name }}



                            <div class="dropdown-menu  dropdown-menu-right  " aria-labelledby="navbarDropdown">

                                <a class="dropdown-item " href="{{ url('users.profile')}}">



                                    Mon Profil
                                </a>




                                <a class="dropdown-item " href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">


                                    {{ __('Deconnexion') }}
                                </a>



                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>



                        @endauth








            </div>
            </div>
            
        </div>
    </nav>
    <script src="https://kit.fontawesome.com/680a3b6773.js" crossorigin="anonymous"></script>

</header>
<!-- End header -->
<body>

@yield('content')


</body>


<!-- <div class="parallax section dbcolor">
    <div class="container">
        <div class="row logos">
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="images/logo_01.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="images/logo_02.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="images/logo_03.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="images/logo_04.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="images/logo_05.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="images/logo_06.png" alt="" class="img-repsonsive"></a>
            </div>-->
<!-- </div>--><!-- end row -->
<!-- </div>--><!-- end container -->
<!--  </div>--><!-- end section -->


<footer class="footer">
    <div class="container">
        <div class="row" >
            <div class="col-lg-3 col-md-3 col-xs-12 text-justify" >
                <div class="widget clearfix" style="margin-left: 1px;">
                    <div class="widget-title">
                        <h3>A propos</h3>
                    </div>
                    <p> SENVIGILE est une start-up qui propose des solutions autour de la Smart-security (videosurveillance, contrôle d’accès, alarme intrusion, détection incendie et risques domestiques), la télésécurité (télésurveillance, télédétection), le gardiennage, l’ingénierie de sûreté et sécurité, l’analyse des risques sécuritaires.</p>

                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-lg-2 col-md-3 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Liens</h3>
                    </div>




                    <ul class="footer-links">
                        <li><a href="{{route('welcome') }}">Accueil</a></li>
                         <!-- <li><a  href="{{ route('Solutions')}}">Solutions </a></li>
                      <li><a href="{{ route('Services') }}">Produits et Services</a></li> 

                      <li><a href="#">Blog</a></li
                        <li><a href="{{ route('price') }}">Offres</a></li>
                    <li><a href="{{ route('Support') }}">Support</a></li> -->
                        <li><a href="{{ route('contact') }}">Contact</a></li>

                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->


            <div class="col-lg-4 col-md-3 col-xs-12 text-justify">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Données Personnelles</h3>
                    </div>
                    <p> 
Conformément aux règles de CDP en matière de protection des données, SenVigile s’applique à ce que vos données personnelles ne puissent être traitées que dans certaines situations et sous certaines conditions.
Un consentement de votre part sera toujours nécessaire et vous serez informé lorsque vos données personnelles sont recueillies. Vous pourrez à tout moment nous contacter afin de relever un manquement à ces obligations. SenVigile mettra tout en œuvre pour corriger le problème le cas échéant.
</p>

                </div><!-- end clearfix -->
            </div><!-- end col -->



            <div class="col-lg-2 col-md-3 col-xs-12 "style="margin-right: 1px;">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Adresses importantes</h3>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto: info@senmonitoring.com ">Email :  info@senmonitoring.com </a></li>
                        <!--<a href="https://www.linkedin.com/company/6x-smart/about/?viewAsMember=true">https://www.linkedin.com/company/6x-smart/about</a></li>-->
                        <li>Adresse : Bande verte villa numéro 85A RDC</li>
                        <li>Fixe: +221 33 864 63 60 </li>
                        <li>Tel : +221 76 817 79 54 </li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-company-name">Tout droit reservé. &copy; 2022 <a href="#">SenVigile</a> Design par : <a href="https://html.design/"> </a></p>
            </div>

            <div class="footer-right">
                <ul class="footer-links-soi">
                    <li><a href="https://www.facebook.com/SenMonitoring-108498904994925/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/showcase/senmonitoring6x-smart/?viewAsMember=true"><i class="fab fa-linkedin"></i></a></li>
                </ul><!-- end links -->
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

<!-- ALL JS FILES -->
<!-- StackWhats.com widget code -->
<!--<script async src='https://stackwhats.com/pixel/8eaa2e1ccfa5b0a49ff89e59f71fd3'></script>-->

<script src="js/all.js"></script>
<!-- ALL PLUGINS -->
<script src="js/custom.js"></script>
<script src="js/timeline.min.js"></script>

<script>
    timeline(document.querySelectorAll('.timeline'), {
        forceVerticalMode: 700,
        mode: 'horizontal',
        verticalStartPosition: 'left',
        visibleItems: 4
    });
</script>

<script>
    window.onload = () => {
        let menus = document.querySelectorAll(".dropdown-submenu a.dropdown-toggle")
        for(let menu of menus){
            menu.addEventListener("click", function(e){
                e.stopPropagation()
                e.preventDefault()
                // On masque tous les UL de sous menus
                let sousmenus = document.querySelectorAll(".multi .dropdown-menu")
                for(let sousmenu of sousmenus){
                    sousmenu.style.display = "none"
                }
                this.nextElementSibling.style.display = "initial"
            })
        }
    }

</script>


@if($errors->has('email') || $errors->has('password') || session('messageerror'))
    <script>
        $(function() {
            $('#login').modal({
                show: true
            });
        });
    </script>
@endif

<script>
    $(function () {
        $('#registerForm').submit(function (e) {
            e.preventDefault();

            $('#btnparticulier').attr('value', 'Chargement en  cours ...');
            $(this).children('button').prop('disabled', true);

            let formData = $(this).serializeArray();
            $(".invalid-feedback").children("strong").text("");
            $("#registerForm input").removeClass("is-invalid");

            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{ route('register') }}",
                data: formData,
            }).done((data) => {
                Swal.fire(
                    'bravo!',
                    'vous allez recevoir un mail de confirmation pour terminer l \'inscription!',
                    'success'
                );
                console.log('successs');
                window.location.reload();
            }).fail((response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else      {
                    console.log('erroooooo');
                    window.location.reload();
                }
            });

        });
    });
</script>




<script>
    $(document).ready(function(){
        $(".professionnel").hide();


        $('input[type="radio"]').click(function(){

            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".box").not(targetBox).hide();
            $(targetBox).show();
            $( ":input" ).not('input[type="radio"]').not('input[type="hidden"]').val("");
            $( ":input" ).removeClass("is-invalid");
        });



        $("#typeprofil1").change(function() {
            if(this.checked) {

                $("#nom_entrepriseInput").prop('required',false);

                $("#posteInput").prop('required',false);

            }
        });

        $("#typeprofil2").change(function() {
            if(this.checked) {

                $("#nom_entrepriseInput").prop('required',true);

                $("#posteInput").prop('required',true);

            }
        });



    });
</script>





<script src="{{ asset('js/goodsaa.js') }}"></script>
<script src="{{ asset('js/Registration.js') }}"></script>

<script src="{{ asset('js/goods11.js') }}"></script>
<script src="{{ asset('js/comparerMotspass.js') }}"></script>

</html>
