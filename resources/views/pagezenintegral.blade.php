

@extends('layouts.debut')


@section('content')


<div class="container">

    <div class="row">

    <div  class="col-md-12 col-lg-12 mt-2 mb-5">
        <div class="post-media wow fadeIn mt-4">
                             <img src="{{asset('images/zenintegral.png')}}" alt="" class="img-fluid"  style="color:white;max-width: 100%;">
                    </div><!-- end media -->

                    

                   <!--  <div class="pricingTable-sign-up mt-md-4 mt-lg-4 ">
                        <a href="#" class="hover-btn-new "><span>Voir details</span></a>
                    </div>--><!-- BUTTON BOX-->
                </div>
            

 </div>


    </div>    

<div class="container "  >

   





    <div class="row ">


        






<table class="table table-bordered table-hover " style="text-align: center;">
  <thead style="background: black;
    font-size: 1.2em;
    color: #fff;
        border-bottom-left-radius: 10px;
    border-bottom-left-radius: 10px; ">
    <tr>
      <th scope="col" class="col-md-6 col-lg-6"></th>
      <th scope="col" class="col-md-3 col-lg-3">VIDEO </th>
      <th scope="col" class="col-md-3 col-lg-3">ALARME</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
        border-top-left-radius: 10px;
    border-bottom-left-radius: 10px; color:black;">SURVEILLANCE A DISTANCE</th>
      <td style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
       "></td>
      <td colspan="2"  style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;border-top-right-radius: 10px;
    border-bottom-right-radius: 10px; 
        "></td>
    </tr>
    <tr>
      <th scope="row"> <sup>1</sup>Live (visualisation en temps réel)</th>
      <td class="font-weight-bold "> Y </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"  style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
       border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;color:black;   ">DETECTION</th>
      <td colspan="2"  style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;border-top-right-radius: 10px;
    border-bottom-right-radius: 10px; 
        "></td>
    </tr>
    <tr>
      <th scope="row">Détection classique de mouvement</th>
      <td class="font-weight-bold "> Y </td>
      <td colspan="2" class="font-weight-bold "> Y </td>
    </tr>
    <tr>
      <th scope="row">Détection intelligente avec analyse d’images</th>
      <td class="font-weight-bold ">Y </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Zones de détection personnalisables</th>
      <td class="font-weight-bold ">Y </td>
      <td class="font-weight-bold "> Y</td>
    </tr>
    <tr>
      <th scope="row">Détection hors service</th>
      <td class="font-weight-bold ">Y </td>
      <td class="font-weight-bold ">Y</td>
    </tr>
    <tr>
      <th scope="row">Détection du risque incendie </th>
      <td> </td>
      <td class="font-weight-bold " > Y </td>
    </tr>
    <tr>
      <th scope="row" style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
        border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;color:black; ">ALERTES PERSONNALISEES</th>
      <td style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
       "></td>
      <td colspan="2"  style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;border-top-right-radius: 10px;
    border-bottom-right-radius: 10px; 
        "></td>
    </tr>
     <tr>
      <th scope="row">Preuves images</th>
      <td class="font-weight-bold ">Y </td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Preuves videos</th>
      <td class="font-weight-bold ">Y  </td>
      <td></td>
    </tr> <tr>
      <th scope="row">Notifications</th>
      <td colspan="2" class="table-active ">Emails illimité , 100 SMS/mois et 30 appels </td>
    </tr>

    <tr>
      <th scope="row" style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
        border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;color:black; ">CENTRE DE TELESURVEILLANCE</th>




      <td style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
       "></td>
      <td colspan="2"  style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;border-top-right-radius: 10px;
    border-bottom-right-radius: 10px; 
        "></td></tr>

         <tr>
      <th scope="row">Gestion des alarmes</th>
      <td class="font-weight-bold ">Y </td>
      <td class="font-weight-bold ">Y </td>
    </tr>
    <tr>
      <th scope="row">*Enregistrements </th>
      <td class="font-weight-bold ">Y  </td>
      <td></td>
    </tr> <tr>
      <th scope="row"> <sup>1</sup>Information immédiate de l'abonné</th>
      <td class="font-weight-bold ">Y   </td>
      <td class="font-weight-bold ">Y </td>
    </tr>
     <tr>
      <th scope="row"> <sup>3</sup> Alerte des forces de l'ordre</th>
      <td class="font-weight-bold ">Y  </td>
      <td class="font-weight-bold " > Y </td>    
    </tr>
    <tr>
      <th scope="row" style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
        border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;color:black; ">SECURITE MOBILE</th>




      <td style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
       "></td>
      <td colspan="2"  style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;border-top-right-radius: 10px;
    border-bottom-right-radius: 10px; 
        "></td></tr>


<tr>
      <th scope="row">Intervention d'un agent de sécurité</th>
      <td class="font-weight-bold ">Y </td>
      <td class="font-weight-bold ">Y </td>
    </tr>
    <tr> 
      <th scope="row">Rondes </th>
      <td colspan="2" class="table-active ">3 fois </td>
    </tr> 
    <tr>
      <th scope="row"> Gardiennage des lieux</th>
      <td colspan="2">8h </td>
      
    </tr>
     <tr>
      <th scope="row" style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
        border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;color:black; ">ESPACE ABONNE</th>




      <td style="background:#FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;
       "></td>
      <td colspan="2"  style="background: #FBB226;
    font-size: 1.2em;
    color: #fff;
    text-transform: none;
    font-weight: 600;
    padding: 8px;border-top-right-radius: 10px;
    border-bottom-right-radius: 10px; 
        "></td></tr>

        <tr>
      <th scope="row">Compte Utilisateurs</th>
            <td colspan="2" class="table-active ">5</td>
    </tr>

    <tr>
      
           <th scope="row">Capacité stockage</th>
            <td colspan="2" >3Gb</td>
    </tr>



    <tr>
           <th scope="row">Historique</th>
            <td colspan="2" class="table-active ">1 mois</td>
    </tr>


    <tr>
      <th scope="row">Enregistrement continu</th>
            <td style="color:#FF9933;" class="font-weight-bold ">12h</td>
      <td style="color:#FBB226;" class="font-weight-bold "></td>
    </tr>

    <tr>
      <th scope="row"> Surveillance jour non ouvrable</th>
                        <td colspan="2" class="table-active ">24h</td>

    </tr>


     
  </tbody>

  <caption><sup>1</sup>  Visionnage limité pour les connexions 4G<br/>
  <sup>2</sup>Si nécessaire<br/>
  <sup>3</sup>Après levée de doute confirmée
</caption>
</table>

</div>


 <div class="pricingTable-sign-up  mt-md-3  " >

                   
                        <a href="{{route('offress')}}" class="hover-btn-new" id="readmore" ><span>Commandez Maintenant</span></a>
                    </div><!-- BUTTON BOX-->



</div></div>




  <div class="row" style="margin-top: 100px"> </div>

@stop