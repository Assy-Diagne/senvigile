<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Alarm;

use App\Models\Commande;
use DB;
use Cart;

class PaniertwooController extends Controller
{
     public function panier2()
    {

        return view('panier2');
    } 



    public function addToPanier(Request $request)

    {

      $video = Video::find($request->radio);
        $alarme = Alarm::find($request->radio2);


       if( ($request->has('radio')) && ($request->has('radio2') ) ){


        $surcoutab =  1500;
               $video->surcoutab =  $surcoutab - $surcoutab;



                $alarme->surcoutab =  $surcoutab;
                $alarme->save();
       $video->save();



       }
       elseif($request->has('radio2')) {
        $surcoutab =  1500;
 
                  $alarme->surcoutab =  $surcoutab - $surcoutab;



        $alarme->save();


}










if( ($request->has('radio')) && ($request->has('radio2') ) ){


        $surcoutinst1 =  5000;
               $video->surcoutinst1 =  $surcoutinst1 - $surcoutinst1  ;



                $alarme->surcoutinst1 =  $surcoutinst1 + 2500;
                $alarme->save();
       $video->save();



       }
       elseif($request->has('radio2')) {
        $surcoutinst1 =  5000;
 
                  $alarme->surcoutinst1 =  $surcoutinst1 ;



        $alarme->save();


}


else {
        $surcoutinst1 =  5000;
 
                  $video->surcoutinst1 =  $surcoutinst1 ;



        $video->save();


}






       
                 $selection = explode("-", $request->selection);

$selectionprix = $selection[0];
         $selectiotype = $selection[1];

               if(!empty($video)){ 

        Cart::add(
           $video->id,
           $video->option8,
             $request->quantity,
             $video->prix,
            array(
            'image'=>$video->image,
             'formule'=> $video->formule,
                         'typeabonnement'=> $selectiotype,


                        'surcoutab'=>$video->surcoutab,
                                      'surc'=>   $video->surcoutinst1,


            'selection'=> $selectionprix


          ) )->associate('App\Models\Video');
                 }



 $alarme = Alarm::find($request->radio2);


        if(!empty($alarme)){ 
        Cart::add(
           $alarme->id,
           $alarme->nom,
             $request->quantity,
             $alarme->prix,
            array(
'image'=>$alarme->image,
             'formule'=> $alarme->formule,
                         'typeabonnement'=> $selectiotype,


                        'surcoutab'=> $alarme->surcoutab,
                                      'surc'=>    $alarme->surcoutinst1,


            'selection'=> $selectionprix) )->associate('App\Models\Alarm');
                   }



        // return redirect()->route('panier.list')->with ('message', 'message envoyé');

                   
        return back()->withSuccess('Produit ajouté avec succé');

    }



 public function panierList(Request $request)
    {

      $video = Video::find($request->radio);

        $content = Cart::Content();
        $somme = 0;

        foreach ( $content as $prod) {
            $somme +=  ($prod->options['surcoutab'] +$prod->options['surc']+$prod->price+$prod->options['selection']) * $prod->qty;

        }

        return view('panier2', compact('content','somme'));
        

    }

     public function updatePanier(Request $request, $id)

    {

        $content = Cart::update($request->id, $request->quantity);

        return redirect()->back();

    }



public function removePanier(Request $request, $id)

    {
        //$content=Cart::remove($request->id);
        dd($request->all()) ;


        //return view('panier2',compact('content'));


    }


}
