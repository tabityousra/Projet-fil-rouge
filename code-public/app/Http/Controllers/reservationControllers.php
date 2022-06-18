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
  
      function afficher_reservation_id($id){
  
    
        $reservation=  DB::table('categories')
      ->select("*")
      ->where("id_categorie",$id)
      ->get();
      return view('pages.reservation-forme',compact("reservation"));

       

      

    

    }

    public function  index(){

      return view('pages.index');
    
    }

      
    
  
    
  
  
    
  
}