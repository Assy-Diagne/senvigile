<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use Illuminate\Http\Request;

class AlarmController extends Controller
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
    public function enregistrementA(Request $request)
    {

        $alarme = new Alarm();
         

        $alarme->nom= $request->name;

        // $prod->description= $request->description;

        $alarme->image= $request->image;
        $alarme->abonnementmensuel= $request->abonnementmensuel;   

        $alarme->abonnementannuel= $request->abonnementannuel;
        $alarme->surcoutinst1= $request->surcoutinst1;   

       $alarme->prix= $request->prix;

        $alarme->option1= $request->option1;

        $alarme->option2= $request->option2;

        $alarme->option3= $request->option3;

        $alarme->option4= $request->option4;
        $alarme->option5= $request->option5;
        $alarme->option6= $request->option6;

        $alarme->option7= $request->option7;
                $alarme->option8 = $request->option8;

           $prod->save();

            return view('PageImVid');
        

    }  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function show(Alarm $alarm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function edit(Alarm $alarm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alarm $alarm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alarm $alarm)
    {
        //
    }
}
