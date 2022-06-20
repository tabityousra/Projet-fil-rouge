@extends('pages.principal')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau de résérvation</h1>
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="{{route('afficher-reservation.create')}}">Ajouter un résérvation</a></li>
        <li class="breadcrumb-item active">Tableau</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Table Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nom complete</th>
                        <th>nom reservation</th>
                      
                        <th>Téléphone</th>
                        <th>Genre</th>
                        <th>Heure</th>
                        <th>Date</th>
                        <th>Nombre de personnes</th>
                        <th>Message</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($reservation as $value)
                        
                  
                    <tr>
                        <td>{{$value->nom_client}}</td>
                        <td>{{$value->nom_categorie}}</td>
                     
                        <td>{{$value->telephone_reservation}}</td>
                        <td>{{$value->genre_reservation}}</td>
                        <td>{{$value->heure_reservation}}</td>
                        <td>{{$value->date_reservation}}</td>
                        <td>{{$value->nombre_de_personnes}}</td>
                        <td>{{$value->message}}</td>
                        <td>                        
                           
                            <a href="{{route('afficher-reservation.edit',$value->id_reservation)}}"><i class="item-action fa fa-edit" data-toggle="modal"
                                    data-target="#labelModal"></i></a>
                            
                                    <form action="{{route('afficher-reservation.destroy',$value->id_reservation)}}" method="POST">
                                        @csrf
                                  @method("DELETE")
                                  <button> <i class="item-action fa fa-trash" data-toggle="modal"
                                          data-target="#deleteItemModal"></i></button>
                              
                                      </form>
                    </td>
                    </tr>
                    @empty
                        
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection