<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use  App\UsercaseModel  ; 

class CreatCaseMobileController extends Controller
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
         $api_key        =   \Input::get('api_key') ; 
        
         $category         = \Input::get('Categiry');
 
         $sub_category     = \Input::get('Subcategory');
       
         $description      = \Input::get('Description');
        
         $gps_lat          = \Input::get('Gps_lat');
         
         $gps_lng          = \Input::get('Gps_lng');
		 
		 
           $UsercaseModel  = new UsercaseModel() ; 
		   
		   
		   $UsercaseModel->	description   = $description ;    
		   
		   $UsercaseModel->	gps_lng      = $gps_lng ;    
		   $UsercaseModel->	gps_lat      = $gps_lat ;    
		   $UsercaseModel->	category   = $description ;    
		   $UsercaseModel->	subcategory   = $description ; 
           $UsercaseModel->save() ; 		   
		   
 
		  return "OK";
		  
		 
        
        
     
		 
		 
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
