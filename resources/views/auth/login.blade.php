
    @extends('layouts.debut')


@section('content')



<div class="container my-5">
            <div class="row my-5">
                    
              <div class="col-lg-12 my-3">
                <div class="alert">
                  <div class="text-white text-center">
             <h1 class="text-black"><strong>VEUILLEZ-VOUS CONNECTER</strong></h1>
                  </div>
                </div>
              </div>
          </div>








                       
 <!--<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
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
                                               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

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

                        <form  method="POST" id="registerForm" enctype="multipart/form-data">
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

                            <div class="col-md-12 mb-3">
                                <label for="pseudoInput">{{ __('Pseudo') }}</label>

                                <input id="pseudoInput" type="text" class="form-control" name="pseudo" style='color:black' value="{{ old('pseudo') }}"  autocomplete="pseudo">

                                <span class="invalid-feedback" role="alert" id="pseudoError">
                                        <strong></strong>
                                    </span>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="mobileInput">{{ __('Telephone') }}</label>

                                <input id="mobileInput" type="text" class="form-control" name="mobile" style='color:black' value="{{ old('mobile') }}"   autocomplete="mobile">

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
                                <label for="photoprofileInput">{{ __('Photo de Profile') }}</label>


                                <input id="photoprofile" type="file" class="form-control" name="photoprofile">

                                <span class="invalid-feedback" role="alert" id="photoprofileError">
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


















     </div><!-- end contenair -->


@stop