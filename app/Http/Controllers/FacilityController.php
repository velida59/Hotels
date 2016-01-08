<?php
 
  namespace App\Http\Controllers;
  
  use Illuminate\Http\Request;
 
  use App\Facility;
  use App\Http\Requests;
  use App\Http\Controllers\Controller;
  
 class FacilityController extends Controller
 {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
       */
      public function index()
      {
         //
         $allFacilities = Facility::all();
        
         return view('home')->with('facilities',$allFacilities);
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
         //$datum_dolaska = new Date($request['daydropdown_checkin'];
      }
  
      /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
       */
      public function show($id)
      {
        //
         $facility = Facility::find($id);
         return view('facility')->with('facility', $facility);
      }
  
      /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
     }
 }
