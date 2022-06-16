@include('layouts.header')
            <!-- Reservations page-->
            <section class="reservation">
                <div class="container">
                    <div class="row">
                        
                      <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                @forelse ($reservation as $value)
                                    
                               
                                <h1>{{$value->nom_categorie}}</h1>
                           
                            </div>
                            
                        </div>
                    </div>
                    <div class="reservation-form wow fadeInUp">
                        <form  action="{{route('tableau-reservation.update',$value->id_reservation)}}" method="POST">
                            @method('PUT')
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Nom</label>
                                        <input type="text" value="{{$value->nom_client}}" class="form-control" id="name" name="nom_client" placeholder="Full Name" title="Your Full Name please" required>
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                </div>
                                
                                        <input type="hidden" value="{{$value->nom_categorie}}" class="form-control" id="name" name="nom_reservation" placeholder="Full Name" title="Your Full Name please" required>
                                        <input type="hidden" value="{{$value->id_categorie}}" name="id_categorie" >
                                 
                                    @empty
                                    
                                    @endforelse 
                              
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="datepicker">Date</label>
                                        <input type="Date" value="{{$value->date_reservation}}" name="date_reservation" class="form-control" id="datepicker" placeholder="Pick a date" title="Please choose a date" required>
                                       
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="timepicker">Heure</label>
                                        <input type="time" class="form-control" value="{{$value->heure_reservation}}" id="timepicker" name="heure_reservation" placeholder="Pick a time" title="Choose Preferred Time" required>
                                       
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Genre</label>
                                        <input type="text" class="form-control" value="{{$value->genre_reservation}}" name="genre_reservation" placeholder="le genre de perssones de cette événement" title=" entrer le genre de perssones de cette événement" required>
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="guests">Nombre de personnes</label>
                                        <input class="form-control" value="{{$value->nombre_de_personnes}}" type="number" id="guests" name="nombre_de_personnes" placeholder="How many of you?" title="Please enter number of guests" required>
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Téléphone</label>
                                        <input type="number" class="form-control" id="phone"value="{{$value->telephone_reservation}}" name="telephone_reservation" placeholder="Enter your Phone Number" title="Please enter your phone number" required>
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Message</label>
                                        <input type="text" class="form-control" id="name" value="{{$value->message}}" name="message" placeholder="Full Name" title="Your Full Name please" required>
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="reservation-btn">
                                        {{-- <a href="success"> --}}
                                            <button type="submit" class="btn btn-default btn-lg" id="">Make Reservation</button>
                                        
                                    </div>
                                </div>
                              
                            </div>
                        </form>
                    </div>
                    <div class="reservation-footer">
                        <p>You can also call: <strong>+1 224 6787 004</strong> to make a reservation.</p>
                        <span></span>
                    </div>
                </div>
            </section>

            <!-- subscribe -->
            <section class="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Subscribe</h1>
                            <p>Get updates about new dishes and upcoming events</p>
                            <form class="form-inline" action="php/subscribe.php" id="invite" method="POST">
                                <div class="form-group">
                                    <input class="e-mail form-control" name="email" id="address" type="email" placeholder="Your Email Address" required>
                                </div>
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-angle-right"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </section>

            @include('layouts.footer')