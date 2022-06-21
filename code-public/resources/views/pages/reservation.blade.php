@include('layouts.header')
<section class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Reservation</h2>
                <p>Tomato is a delicious restaurant website template</p>
            </div>
        </div>
    </div>
</section>
<!--catégorie-->
<section class="reservation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header wow fadeInDown">
                    <h1>Les Catégories<small>Choisir la catégorie que vous voullez.</small></h1>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($categories as $value)
            <div class="col-md-3 col-sm-6 text-center">
                <div class="team-staff wow fadeInUp" data-wow-delay="0.2s">
                    <a href="/reservation-forme/{{$value->id_categorie}}"><img src="img/{{$value->photo_categorie}}" class="img-responsive center-block" alt="" /></a>
                    <h4>{{$value->nom_categorie}}</h4>
                    {{-- <p>Designation here</p>
                    <ul class="team-social">
                        <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                    </ul> --}}
                </div>
            </div>
              
                    
                @empty
                    
                @endforelse
        
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