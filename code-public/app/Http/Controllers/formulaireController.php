<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class formulaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation=DB::table('reservation')
        
        ->join('categories','reservation.id_categorie','=' ,'categories.id_categorie')
        ->select('*')
        ->get();
        return view('pages.success', compact("reservation"));
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
        
            $nom_client = $request->input('nom_client');
            $nom = $request->input('nom_reservation');
            $telephone = $request->input('telephone_reservation');
            $genre = $request->input('genre_reservation');
            $heure = $request->input('heure_reservation');
            $date = $request->input('date_reservation');
            $nombre_de_personnes = $request->input('nombre_de_personnes');
            $message = $request->input('message');
            $id = $request->input('id_categorie');
            
            // $id_categorie= $request->input('id_categorie');
          
           
             $inserte = DB::insert('insert into reservation(nom_client,nom_reservation,telephone_reservation,genre_reservation,heure_reservation,date_reservation,nombre_de_personnes,message,id_categorie) value(?,?,?,?,?,?,?,?,?)',[$nom_client,$nom,$telephone,$genre,$heure,$date,$nombre_de_personnes,$message,$id]);
             if($inserte){
              return redirect('tableau-reservation');
              
           
    
        }
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
        $reservation=DB::table('reservation')
        ->where('id_reservation',$id)
        ->join('categories','reservation.id_categorie','=' ,'categories.id_categorie')
        ->select('*')
        ->get();
  
        
        return view('pages.edit-reservation', compact('reservation'));
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
        $nom_client = $request->input('nom_client');
        // $nom = $request->input('nom_reservation');
        $telephone = $request->input('telephone_reservation');
        $genre = $request->input('genre_reservation');
        $heure = $request->input('heure_reservation');
        $date = $request->input('date_reservation');
        $nombre_de_personnes = $request->input('nombre_de_personnes');
        $message = $request->input('message');
        // $id_categorie = $request->input('id_categorie');

        // 
        //   

       DB::table('reservation')
       ->where('id_reservation',$id)
       -> update([
        'nom_client'=>$nom_client,
       
        // 'id_categorie'=>$id_categorie,
        'telephone_reservation'=> $telephone,
        'genre_reservation'=>$genre ,
        'heure_reservation'=>$heure ,
        'date_reservation'=>$date,
        'nombre_de_personnes'=>$nombre_de_personnes,
        'message'=>$message,

    ]); 


       return redirect('tableau-reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('reservation')
        ->where('id_reservation',$id)
        ->delete();
        return redirect('tableau-reservation');
    }
}
