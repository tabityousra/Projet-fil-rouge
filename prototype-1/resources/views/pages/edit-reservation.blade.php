@extends('pages.principal')
@section('content')


    <!-- PAGE CONTAINER-->

    <!-- HEADER DESKTOP-->


    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h1 class="titre text-center ">
            <strong>Modifier événement</strong>
        </h1>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- form -->
                            <div class="card-header">Modifier</div>
                            <div class="card-body ">
                                <div class="row tm-edit-product-row  ">
                                    <div class="col-xl-6 col-lg-12 col-md-12">

                                        <!-- start modifier -->
                                        @forelse ($edit as $value)
    

                                        <form method="POST" action="{{route('afficher-reservation.update',$value->id_reservation)}}" enctype='multipart/form-data'
                                            class="tm-edit-product-form">
                                            @method('PUT')
                                            @csrf
                                            <div class="col-6">
                                                <div class="form-group ">
                                                    <label for="cc-exp" class="control-label mb-1">Nom complet</label>
                                                    <input id="cc-exp" name="nom_reservation" value="{{$value->nom_reservation}}" type="text" class="form-control cc-exp"   data-val="true" data-val-required="Please enter the card expiration"
                                                        data-val-cc-exp="Please enter a valid month and year"
                                                        autocomplete="cc-exp">
                                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="cc-exp" class="control-label mb-1">Categorie</label>
                                                <select name="id_categorie" id="select" class="form-control">                                    
                                                <option selected value="{{$value->id_categorie}}">{{$value->nom_categorie}}</option>
                                                
                                                @forelse ($categorie as $valuee)
                                                     
                                                    
                                                  <option value="{{$valuee->id_categorie}}">{{$valuee->nom_categorie}} </option>
              
              
                                                  @empty
                                                     
                                                  @endforelse
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="cc-exp" class="control-label mb-1">telephone</label>
                                                    <input id="cc-exp" name="telephone_reservation" value="{{$value->telephone_reservation}}" type="number" class="form-control cc-exp"   data-val="true" data-val-required="Please enter the card expiration"
                                                        data-val-cc-exp="Please enter a valid month and year" 
                                                        autocomplete="cc-exp">
                                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="cc-exp" class="control-label mb-1">genre</label>
                                                    <input id="cc-exp" name="genre_reservation" {{$value->genre_reservation}} type="url" class="form-control cc-exp"   data-val="true" data-val-required="Please enter the card expiration"
                                                        data-val-cc-exp="Please enter a valid month and year" 
                                                        autocomplete="cc-exp">
                                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                           
                                            <div class="form-group">
                                                <div class="row form-group">
                                                   
                                                </div>
                                                <label for="cc-payment" class="control-label mb-1">heure</label>
                                                <textarea id="cc-pament" name="heure_reservation" {{$value->heure_reservation}} type="text "class="form-control" aria-required="true" aria-invalid="false" value="100.00"> </textarea>
                                              </div>
                        
                                              <div class="col-6">
                                                <div class="form-group">
                                                    <label for="cc-exp" class="control-label mb-1">Date</label>
                                                    <input id="cc-exp" name="date_reservation" {{$value->date_reservation}}  type="date" class="form-control cc-exp"   data-val="true" data-val-required="Please enter the card expiration"
                                                        data-val-cc-exp="Please enter a valid month and year" 
                                                        autocomplete="cc-exp">
                                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="cc-exp" class="control-label mb-1">Nombre de personnes</label>
                                                    <input id="cc-exp" name="nombre_de_personnes" {{$value->nombre_de_personnes}} type="numbre" class="form-control cc-exp"  data-val="true" data-val-required="Please enter the card expiration"
                                                        data-val-cc-exp="Please enter a valid month and year" 
                                                        autocomplete="cc-exp">
                                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="cc-exp" class="control-label mb-1">Message</label>
                                                    <input id="cc-exp" name="message" type="text" value='{{$value->message}}' class="form-control cc-exp"   data-val="true" data-val-required="Please enter the card expiration"
                                                        data-val-cc-exp="Please enter a valid month and year" 
                                                        autocomplete="cc-exp">
                                                    <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                                </div>
                                            </div>
                                           

                                    </div>
                                   
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase">Ajouter</button>
                                    </div>
                                    </form>
                                    @empty
    
                                    @endforelse
                                </div>
                            </div>





                        </div>

                    </div>
                </div>
                <!-- fin -->
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>


@endsection