<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adv_gal_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function robot()
    { 
        $robot = "Robotic Light";
        
        return view('adv_gallery/adv_robot',['robot' => $robot]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rock()
    {
        $rock = "Rock Solid";
        
        return view('adv_gallery/adv_rock',['rock' => $rock]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function minimal()
    {
        $minimal = "Minimal Capture";

        return view('adv_gallery/adv_minimal',['minimal' => $minimal]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tattoo()
    {
        $tatoo = "Tattoo lovers";

        return view('adv_gallery/adv_tattoo',['tattoo' => $tattoo]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function develope()
    {
        $develope = "Develope & Coding";

        return view('adv_gallery/adv_develope',['develope' => $develope]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function network()
    {
        $network = "Network Inspire";

        return view('adv_gallery/adv_network',['network' => $network]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function start()
    {
        $start = "Start From Scatch";

        return view('adv_gallery/adv_start',['start' => $start]);
        //
    }

    public function stay()
    {
        $stay = "Stay Safe Watch";

        return view('adv_gallery/adv_stay',['stay' => $stay]);
        //
    }

}
