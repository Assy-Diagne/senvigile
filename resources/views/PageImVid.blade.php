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
                                 <option value="video" name="video" id="video" selected="selected" >Kit video </option>
                    <option value="alarme" name="alarme" id="alarme" selected="selected" >Kit Alarme </option>

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

            <div class="row"> 
                <div class="col-md-6 col-sm-6 col-xs-12   " >
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                <div class="row"> 

                  <div class="col-md-6 col-lg-6 col-xs-6   ">

                        <img src="images/im1.jpg" alt="" class="img-fluid img-rounded" >
                                           <div class="col mt-5  " style="text-align: center;">

                                              <h3>32 450FCFA</h3>
                                          </div><!-- end col -->
                   </div><!-- end col -->


                  <div class="col-md-6 col-sm-6 col-xs-6 " >






                    <h3>Camera Intérieure</h3>


                      <p >Wifi <br/>
                     Dôme  <br/>
                    PTZ<br/>
                    Smart night vision HD1080P<br/>
                      Carte SD Max.128Gb                     </p>
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

                <div class="col-md-6 col-sm-6 mb-5" >
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                <div class="row"> 

                  <div class="col-md-6 col-sm-6    " style="background-color: white; ">
                        <img src="images/img2.jpg" alt="" class="img-fluid img-rounded" >
                    <div class="col mt-4  " style="text-align: center;">



                    <h3>55 325FCFA</h3>
                   </div><!-- end col -->
                   </div><!-- end col -->




                    <div class="col-md-6 col-sm-6 col-xs-12" >
                    <h3>Camera Intérieure</h3>
                      <p >Wifi <br/>
                      Fixe <br/>
                      Batteries lithium 2*18650<br/>
                    Smart night vision HD1080P<br/>
                      Carte SD Max.32Gb
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
                   </div>     


                   </div><!-- end col -->


                 </div><!-- end row -->

                </div><!-- end col -->
                </div><!-- end col -->




           
                <div class="col-md-6 col-sm-6 col-xs-12 mb-5  " >
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                <div class="row"> 

                  <div class="col-md-6 col-sm-6 col-xs-12   ">
                        <img src="images/img3.jpg" alt="" class="img-fluid img-rounded" style="background: transparent;">
                        <div class="col mt-5  " style="text-align: center;">



                    <h3>41 600 FCFA</h3>
                   </div><!-- end col -->
                   </div><!-- end col -->
                    


                  <div class="col-md-6 col-sm-6 col-xs-12" >
                    <h3>Camera Intérieur / Extérieur</h3>
                      <p >Wifi <br/>
                      Fixe <br/>
                      Smart night vision HD1080P<br/>
                      Carte SD Max.64Gb
                   
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
                   </div>   
 
                    
                   </div><!-- end col -->

                 </div><!-- end row -->

                </div><!-- end col -->
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12 mb-5 " >
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                <div class="row"> 

                  <div class="col-md-6 col-sm-6 col-xs-12   ">
                        <img src="images/img4.jpg" alt="" class="img-fluid img-rounded" >
                    
                   </div><!-- end col -->



                    <div class="col-md-6 col-sm-6 col-xs-12" >
                    <h3>Camera Intérieur / Extérieur </h3>
                      <p >4G/Wifi <br/>
                      Fixe <br/>
                    Batteries lithium 4*18650<br/>
                      Full color night vision HD1080P<br/>
                      Carte SD Max.64Gb </p>
                                     <var>  Option panneau solaire : 14 697F</var>
                      <div class="mt-3" >


                        <form>
 
                                  <div class="form-check">
                                  <input class="form-check-input" type="Radio" value="" id="flexCheckChecked" checked>
                               <label class="form-check-label" for="flexCheckChecked" style="color: orange;font-weight: bold;">
                               Ajouter au panier
                                   </label>
                                   </div>
                        </form>
                   </div>     


                   </div><!-- end col -->


                 </div><!-- end row -->

                </div><!-- end col -->
                </div><!-- end col -->




                <div class="col-md-6 col-sm-6 col-xs-12 mb-5 " >
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                <div class="row"> 

                  <div class="col-md-6 col-sm-6 col-xs-12   ">
                        <img src="images/img5.jpg" alt="" class="img-fluid img-rounded" >
                    
                   </div><!-- end col -->


                  <div class="col-md-6 col-sm-6 col-xs-12" >
                    <h3> Camera Extérieure <var>avec flash</var></h3>
                      <p >Wifi <br/>
                      Bullet<br/>
                      PTZ<br/>
                      Full color night vision HD1080P<br/>
                      Carte SD Max.128Gb
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
                   </div>     

                   </div><!-- end col -->

                 </div><!-- end row -->

                </div><!-- end col -->
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12  mb-5 " >
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                <div class="row"> 

                  <div class="col-md-6 col-sm-6 col-xs-12   ">
                        <img src="images/img6.jpg" alt="" class="img-fluid img-rounded" >
                    
                   </div><!-- end col -->


                    <div class="col-md-6 col-sm-6 col-xs-12" >
                    <h3>Camera Extérieure<var> avec projecteur Led</var></h3>
                      <p >4G <br/>
                     Fixe <br/>
                      PTZ<br/>
                      Batteries lithium 4*18650<br/>
                      Full color night vision HD1080P<br/> 
                    </p><var>Option panneau solaire : 14 697F</var>

                    <div class="mt-3" >


                        <form>
 
                                  <div class="form-check">
                                  <input class="form-check-input" type="Radio" value="" id="flexCheckChecked" checked>
                               <label class="form-check-label" for="flexCheckChecked" style="color: orange;font-weight: bold;">
                               Ajouter au panier
                                   </label>
                                   </div>
                        </form>
                   </div>     

                   </div><!-- end col -->


                 </div><!-- end row -->

                </div><!-- end col -->
                </div><!-- end col -->




            
                <div class="col-md-6 col-sm-6 col-xs-12 mb-5  ">
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                <div class="row"> 

                  <div class="col-md-6 col-sm-6 col-xs-12   ">
                        <img src="images/img7.png" alt="" class="img-fluid img-rounded" style=" background: transparent;">
                    <div class="col mt-3  " style="text-align: center;">



                    <h3>108 395 FCFA</h3>
                   </div><!-- end col -->
                   </div><!-- end col -->
                    
                  <div class="col-md-6 col-sm-6 col-xs-12" >
                    <h3>Camera Extérieure</h3>
                      <p >4G/Wifi <br/>
                    PTZ  <br/>
                      Batteries lithium 8*18650<br/>
                      Full color night vision HD1080P<br/>
                      Carte SD Max.64Gb 
                    </p>
                       <var> Option panneau solaire : 14 697F </var>
                    <div class="mt-3" >


                        <form>
 
                                  <div class="form-check">
                                  <input class="form-check-input" type="Radio" value="" id="flexCheckChecked" checked>
                               <label class="form-check-label" for="flexCheckChecked" style="color: orange;font-weight: bold;">
                               Ajouter au panier
                                   </label>
                                   </div>
                        </form>
                   </div>     


                   </div><!-- end col -->

                 </div><!-- end row -->

                </div><!-- end col -->
                </div><!-- end col -->

                <div class="col-md-6 col-sm-6 col-xs-12 mb-5 " >
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; ">
                <div class="row"> 

                  <div class="col-md-6 col-sm-6 col-xs-12   ">
                        <img src="images/img8.jpg" alt="" class="img-fluid img-rounded" style="background: transparent;">
                    
                        <div class="col" style="text-align: center;">



                    <h3>94 670 FCFA</h3>
                   </div><!-- end col -->
                   </div><!-- end col -->
                    
                    <div class="col-md-6 col-sm-6 col-xs-12" >
                    <h3>Camera Extérieure</h3>
                      <p >4G/Wifi<br/>
                      Fixe <br/>
                      Batteries lithium 4*18650<br/>
                      Full color night vision HD1080P<br/>
                      Carte SD Max.64Gb 
                    </p>
                   <var>Option panneau solaire : 14 697F</var>
                    <div class="mt-3" >


                        <form>
 
                                  <div class="form-check">
                                  <input class="form-check-input" type="Radio" value="" id="flexCheckChecked" checked>
                               <label class="form-check-label" for="flexCheckChecked" style="color: orange;font-weight: bold;">
                               Ajouter au panier
                                   </label>
                                   </div>
                        </form>
                   </div>     

                   </div><!-- end col -->


                 </div><!-- end row -->

                </div><!-- end col -->
                </div><!-- end col -->


                <div class="col-md-6 col-sm-6 col-xs-12 mb-5 ">
                    <div class="icon-wrapper wow fadeIn fonctionnality-card text-justify" data-wow-duration="1s" data-wow-delay="0.2s" style="background-color: white; "  >
                <div class="row"> 

                  <div class="col-md-6 col-sm-6 col-xs-12   ">
                        <img src="images/img9.jpg" alt="" class="img-fluid img-rounded" >
                    
                   </div><!-- end col -->


                  <div class="col-md-6 col-sm-6 col-xs-12" >
                    <h3>Camera Intérieure</h3>
                      <p >Wifi <br/>
                      Dôme <br/>
                      PTZ<br/>
                      Smart night vision HD1080P<br/>
                      Carte SD Max.128Gb 
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
                   </div>   


                   </div><!-- end col -->

                 </div><!-- end row -->

                </div><!-- end col -->
                </div><!-- end col -->
                </div><!-- end col -->








               

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->







	

@stop