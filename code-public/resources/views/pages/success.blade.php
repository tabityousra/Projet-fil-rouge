@include('layouts.header')
<section class="page_header vertical-padding">

</section>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="giant-space">
                <p><img src="img/check.png" alt="Tick" /></p>
                <h2>Merci pour votre résérvation! </h2>
                <p class="wow fadeInUp">Votre résérvation est bien recue </p>
                <p class="top-space-lg"><a href="#" onclick="history.go(-1);" class="btn btn-success btn-lg">Revenir en arrière</a></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="giant-space">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">categorie</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Heure</th>
                        <th scope="col">Date</th>
                        <th scope="col">Nombre de personnes</th>
                        <th scope="col">Message</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($reservation as $value)
                      <tr>
                             
                      
                        <th scope="row">{{$value->nom_client}}</th>
                        <td>{{$value->nom_reservation}}</td>
                        <td>{{$value->telephone_reservation}}</td>
                        <td>{{$value->genre_reservation}}</td>
                        <td>{{$value->heure_reservation}}</td>
                        <td>{{$value->date_reservation}}</td>
                        <td>{{$value->nombre_de_personnes}}</td>
                        <td>{{$value->message}}</td>
                    </tr>
                   
                        
                    @empty
                            
                    @endforelse 
                     
                    </tbody>
                </table>
                  
            </div>
        </div>
    </div>
</div>

<!-- subscribe -->
<section class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <h1>Subscribe</h1>
                <p>Get updates about new dishes and upcoming events</p>
                <form class="form-inline" action="php/subscribe.php" id="invite" method="POST">
                    <div class="form-group">
                        <input class="e-mail form-control" name="email" id="address" type="email" placeholder="Your Email Address" required>
                    </div>
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-angle-right"></i>
                    </button>
                </form> --}}

            </div>
        </div>
    </div>
</section>

@include('layouts.footer')

