@include('layouts.header')
            <!-- Reservations page-->
            <section class="reservation">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                @forelse ($reservation as $value)
                                    
                               
                                <h1>{{$value->nom_categorie}}</h1>
                            @empty
                                    
                                @endforelse 
                            </div>
                            
                        </div>
                    </div>
                    <div class="reservation-form wow fadeInUp">
                        <form action="php/reservation.php" id="reservationform" method="POST">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" title="Your Full Name please" required>
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="datepicker">Date</label>
                                        <input type="text" name="date" class="form-control" id="datepicker" placeholder="Pick a date" title="Please choose a date" required>
                                        <i class="fa fa-calendar-o"></i>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="timepicker">Time</label>
                                        <input type="text" class="form-control" id="timepicker" name="time" placeholder="Pick a time" title="Choose Preferred Time" required>
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Genre</label>
                                        <input type="email" class="form-control" id="" name="" placeholder="le genre de perssones de cette événement" title=" entrer le genre de perssones de cette événement" required>
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="guests">Guests</label>
                                        <input class="form-control" type="number" id="guests" name="guests" placeholder="How many of you?" title="Please enter number of guests" required>
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number" title="Please enter your phone number" required>
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Message</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" title="Your Full Name please" required>
                                        <i class="fa fa-pencil-square-o"></i>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="reservation-btn">
                                        <a href="success.html">
                                        <button type="submit" class="btn btn-default btn-lg" id="js-reservation-btn">Make Reservation</button>
                                        </a>
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