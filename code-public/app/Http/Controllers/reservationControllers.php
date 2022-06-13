<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reservationControllers extends Controller
{
    

    function afficher_categories(){

        $categories=  DB::table('categories')
          ->select("*")
          ->get();
        
          return view("pages.reservation",compact("categories"));
      }
  
      function afficher_places_id($id){
  
      $places = DB::table('reservation')
      ->select('*')
      ->where("reservation.id_categorie",$id)
      ->join("categories","reservation.id_categorie",'=',"categories.id_categorie")
      ->get();
      return view('pages.categorie',compact("reservation"));

       

      

    

      }


      
    
  
    
  
  
    
  
}