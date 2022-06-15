<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $reservation= DB::table('reservation')
       ->select('*')
       ->join('categories','reservation.id_categorie','=' ,'categories.id_categorie')
       ->get();
       return view('pages.tableau-reservation', compact('reservation'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorie =DB::table('categories')
        ->select('id_categorie','nom_categorie')
        ->get();

        return view('pages.inserte-reservation', compact('categorie'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input('nom_reservation');
        $telephone = $request->input('telephone_reservation');
        $genre = $request->input('genre_reservation');
        $heure = $request->input('heure_reservation');
        $date = $request->input('date_reservation');
        $nombre_de_personnes = $request->input('nombre_de_personnes');
        $message = $request->input('message');

        $id_categorie= $request->input('id_categorie');
      
       
         $inserte = DB::insert('insert into reservation(nom_reservation,telephone_reservation,genre_reservation,heure_reservation,date_reservation,nombre_de_personnes,message,id_categorie) value(?,?,?,?,?,?,?,?)',[$nom,$telephone,$genre,$heure,$date,$nombre_de_personnes,$message,$id_categorie]);
         if($inserte){
          return redirect('afficher-reservation');
          
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
      $edit=DB::table('reservation')
      ->where('id_reservation',$id)
      ->join('categories','reservation.id_categorie','=' ,'categories.id_categorie')
      ->select('*')
      ->get();

      $categorie = DB::table('categories')
        ->select("*")
        ->get();
      return view('pages.edit-reservation', compact('edit',"categorie"));

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
        $nom = $request->input('nom_reservation');
        $telephone = $request->input('telephone_reservation');
        $genre = $request->input('genre_reservation');
        $heure = $request->input('heure_reservation');
        $date = $request->input('date_reservation');
        $nombre_de_personnes = $request->input('nombre_de_personnes');
        $message = $request->input('message');
        $id_categorie = $request->input('id_categorie');

        // 
        //   

       DB::table('reservation')
       ->where('id_reservation',$id)
       -> update(['nom_reservation'=>$nom,'id_categorie'=>$id_categorie,'telephone_reservation'=> $telephone,'genre_reservation'=>$genre ,'heure_reservation'=>$heure ,'date_reservation'=>$date,'nombre_de_personnes'=>$nombre_de_personnes,'message'=>$message]); 


       return redirect('afficher-reservation');
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
        return redirect('afficher-reservation');
    }
}
