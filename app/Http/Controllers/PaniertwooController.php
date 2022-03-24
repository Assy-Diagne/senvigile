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
       



                 $selection = explode("-", $request->selection);

$selectionprix = $selection[0];
         $selectiotype = $selection[1];

               if(!empty($video)){ 

        Cart::add(
           $video->id,
           $video->nom,
             $request->quantity,
             $video->prix,
            array(
            'image'=>$video->image,
             'formule'=> $video->formule,
                         'typeabonnement'=> $selectiotype,


                        'surcoutab'=>$video->surcoutab,
                                      'surc'=>   $request->surcoutinst1,


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
'image'=>$video->image,
             'formule'=> $ $alarme->formule,
                         'typeabonnement'=> $selectiotype,


                        'surcoutab'=>$ $alarme->surcoutab,
                                      'surc'=>   $request->surcoutinst1,


            'selection'=> $selectionprix) )->associate('App\Models\Alarm');
                   }



        // return redirect()->route('panier.list')->with ('message', 'message envoyé');

                   
        return back()->withSuccess('Produit ajouté avec succé');

    }



 public function panierList(Request $request)
    {

      $video = Video::find($request->radio);

        $content = Cart::Content();
        return view('panier2', compact('content'));
        

    }





}
