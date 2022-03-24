<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }



     public function affichage()
    {
        return view('produits');

    }

     public function enregistrement(Request $request)
    {

        $video= new Video();
         

        $video->nom= $request->name;

        // $prod->description= $request->description;

        $video->image= $request->image;
        $video->abonnementmensuel= $request->abonnementmensuel;   

        $video->abonnementannuel= $request->abonnementannuel;
        $video->surcoutinst1= $request->surcoutinst1;   

       $video->prix= $request->prix;

        $video->option1= $request->option1;

        $video->option2= $request->option2;

        $video->option3= $request->option3;

        $video->option4= $request->option4;
        $video->option5= $request->option5;
        $video->option6= $request->option6;

        $video->option7= $request->option7;
                $video->option8 = $request->option8;

           $prod->save();

            return view('PageImVid');
        

    }  





}
