<?php

namespace App\Http\Controllers;

use App\Models\trip;
use Illuminate\Http\Request;

class TripController extends Controller
{/*
    public function __construct()
    {
        $this->middleware('check_token:api');
    }


public function creatproduct(Request $request)
   {
$validate=Validator::make($request->all(),
       [
         


         'name'=>'required|min:2',
         'age'=>'required',
         'type'=>'required',
         'price'=>'required|numeric',
         'start_date'=>'required|date',
         'expiry_date'=>'required|date',
         'start_trip'=>'required|date',
         'end_trip'=>'required|date',
         'rest'=>'required|integer',
         'total'=>'required|integer',
         'image'=>'required',
         'reiteration'=>'required|integer',
         'coutinent'=>'required',
         'name_team'=>'required',  
         'about'=>'required'
       ]);
k

    }*/
    sdklkfl
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
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(trip $trip)
    {
        //
    }
}
