@extends('pages.principal')
@section('content')
<div class="main-content">
    <h1 class="titre text-center ">
   <strong>Ajouter les résérvations</strong>
   </h1>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- form -->
                            <div class="card-header">Ajouter la résérvation</div>
                            <div class="card-body">
                                
                            
                                <form action="{{route('afficher-reservation.store')}}"  method="POST" novalidate="novalidate"   enctype="multipart/form-data">
                                
                                
                                @csrf 
                                   <div class="row">
                
                                     </div>
                                     <div class="row">
                                        <div class="col-12">
                                            <div class="form-group ">
                                                <label for="cc-exp" class="control-label mb-1">Nom complet</label>
                                                <input id="cc-exp" name="nom_reservation" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year"
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="cc-exp" class="control-label mb-1">Categorie</label>
                                            <select name="id_categorie" id="select" class="form-control">                                    
                                            <option selected>Choisir un catégorie</option>
                                             @forelse ($categorie as $value)
                                                 
                                              <option value="{{$value->id_categorie}}">{{$value->nom_categorie}} </option>
          
          
                                              @empty
                                                 
                                              @endforelse
                                            </select>
                                            <span class="help-block" ²data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1">telephone</label>
                                                <input id="cc-exp" name="telephone_reservation" type="number" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year" 
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1">genre</label>
                                                <input id="cc-exp" name="genre_reservation" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year" 
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1">Nombre de personnes</label>
                                                <input id="cc-exp" name="nombre_de_personnes" type="number" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year" 
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Date</label>
                                            <input id="cc-exp" name="genre_reservation" type="date" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                data-val-cc-exp="Please enter a valid month and year" 
                                                autocomplete="cc-exp">
                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">heure</label>
                                            <input id="cc-exp" name="nombre_de_personnes" type="numbre" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                                data-val-cc-exp="Please enter a valid month and year" 
                                                autocomplete="cc-exp">
                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    
                                </div>
                            
                            <div class="col-12">
                                <div class="form-group ">
                                    <label for="cc-exp" class="control-label mb-1">Message</label>
                                    <input id="cc-exp" name="nom_reservation" type="text" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration"
                                        data-val-cc-exp="Please enter a valid month and year"
                                        autocomplete="cc-exp">
                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                                    <div class="">
                                        <button class="btn btn-info au-btn--block " type="submit"> Ajouter </button>

                                      
                                    </div>
                                 </div>
                                
                                </form>
                            </div>
                        </div>
                        <!-- fin -->                        
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection