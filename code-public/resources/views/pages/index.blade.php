@include('layouts.header')

            <!-- Home page-->
            
            <section class="home">
                <div class="tittle-block">
                    <div class="logo">
                        <a href="./index">
                            <img src="img/logo.png" alt="logo">
                        </a>
                    </div>
                    <h1>DELICIOUS Food</h1>
                    <h2>Tomato est un restaurant délicieux , bienvenue chez nous</h2>
                </div>
                <div class="scroll-down">
                    <a href="#about">
                        <img src="img/arrow-down.png" alt="down-arrow">
                    </a>
                </div>
            </section>

            <!-- About page-->
            <section class="about" id="about"> 
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>A propos de nous<small>Un peu sur nos restaurant et nos service.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-4">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-12 hidden-sm about-photo">
                                        <div class="image-thumb">
                                            <img src="img/thumb1.png" data-mfp-src="img/fullImages/pic1.jpg" class="img-responsive" alt="logo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 about-photo hidden-xs">
                                        <img src="img/thumb2.png" data-mfp-src="img/fullImages/pic2.jpg" class="img-responsive" alt="logo">
                                    </div>
                                    <div class="col-sm-6 about-photo hidden-xs">
                                        <img src="img/thumb3.png" data-mfp-src="img/fullImages/pic3.jpg" class="img-responsive" alt="logo">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-8">
                            <h3>Tomato</h3>
                            <br>
                            <p>
                                En passant ses portes, vous fera découvrir et apprécier un lieu incontournable, moderne et élégant. Dans une atmosphère épurée, d’un chic absolu, où domine le bois. Notre chef vous propose une cuisine unique, à la fois contemporaine et traditionnel.                            </p>
                            <br>
                            <p>
                             L’équipe du TOMATO vous accueille chaque jour avec une chaleureuse hospitalité, tout en vous offrant un service irréprochable et convivial.                            </p>
                            <img src="img/signature.png" alt="signature">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Today's special page-->
            <section class="special">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1 class="white">LES SPÉCIAUX DU JOUR<small>Un peu sur nous et un bref historique de la façon dont nous avons commencé.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-offset-1 col-md-10">
                            <div class="flexslider special-slider">
                                <ul class="slides">
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/Sans titre(1H).jpg" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Plat de poisson<small>Si vous êtes un fan de poisson, alors vous allez adorer notre plat avec de les légumes et le calamard. Ce n’est pas épais, mais très savoureux.</small></h1>
                                            </div>
                                            <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            {{-- <a class="btn btn-default" href="./index" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index" role="button">Add to cart</a> --}}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/Sans titre.png" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Crêpe au caramel<small>Si vous êtes un fan de gâteau au caramel, alors vous allez adorer notre crêpe avec de la crème glacée au caramel. Ce n’est pas épais, mais très savoureux.</small></h1>
                                            </div>
                                            <p>If you are a fan of caramel cake, then you'll love our Pancake with caramel icecream. It's not thick, but very tasty.</p>
                                            {{-- <a class="btn btn-default" href="./index" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index" role="button">Add to cart</a> --}}
                                        </div>
                                    </li>
                                    <li>
                                        <div class="slider-img">
                                            <img src="img/fish.jpg" alt="" />
                                        </div>
                                        <div class="slider-content">
                                            <div class="page-header">
                                                <h1>Poisson épicé<small>Si vous êtes un fan de poisson épicé, alors vous allez adorer notre plat avec délicieuces épices. Ce n’est pas épais, mais très savoureux.</small></h1>
                                            </div>
                                            <p>Ultrices In massa est, dignissim in libero ac, fringilla ornare mi.Ultrices eget justo. Nam purus lacus, efficitur eget laoreet sed, finibus nec neque. Cras eget enim in diam dapibus sagittis. accumsan, habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            {{-- <a class="btn btn-default" href="./index" role="button">Order now</a>
                                            <a class="btn btn-secondary" href="./index " role="button">Add to cart</a> --}}
                                        </div>
                                    </li>
                                </ul>
                                <div class="direction-nav hidden-sm">
                                    <div class="next">
                                        <a><img src="img/right-arrow.png" alt="" /></a>
                                    </div>
                                    <div class="prev">
                                        <a><img src="img/left-arrow.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </section> -->
            <section class="reservation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Reservations<small>Nous sommes à votre disposition pour réserver nos restaurants pour votre événement.</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="team-staff wow fadeInUp" data-wow-delay="0.2s">
                                <img src="img/1655197512.jpg" class="img-responsive center-block" alt="" />
                                <h4>Réunion</h4>
                                <p>Designation here</p>
                                <ul class="team-social">
                                    <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="team-staff wow fadeInUp" data-wow-delay="0.4s">
                                <img src="img/anniversaire.png" class="img-responsive center-block" alt="" />
                                <h4>Anniversaire</h4>
                                <p>Designation here</p>
                                <ul class="team-social">
                                    <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="team-staff wow fadeInUp" data-wow-delay="0.6s">
                                <img src="img/1655200594.jpg" class="img-responsive center-block" alt="" />
                                <h4>Fête de graduation</h4>
                                <p>Designation here</p>
                                <ul class="team-social">
                                    <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center">
                            <div class="team-staff wow fadeInUp" data-wow-delay="0.8s">
                                <img src="img/1655200606.jpg" class="img-responsive center-block" alt="" />
                                <h4>Fête des mères</h4>
                                <p>Designation here</p>
                                <ul class="team-social">
                                    <li><a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our features-->
            <section class="features">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1 class="white">Notre restaurant<small>Les petites choses nous rendent meilleurs en ville</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="row wow fadeInUp">
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/11.png" alt="" />
                                </div>
                                {{-- <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/22.png" alt="" />
                                </div>
                                {{-- <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/Cg.jpg" alt="" />
                                </div>
                             
                                
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 visible-sm">
                            <div class="features-tile">
                                <div class="features-img">
                                    <img src="img/thumb5.png" alt="" />
                                </div>
                                <div class="features-content">
                                    <div class="page-header">
                                        <h1>Serving with love</h1>
                                    </div>
                                    <p>Aenean suscipit vehicula purus quis iaculis. Aliquam nec leo nisi. Nam urna arcu, maximus eget ex nec, consequat pellentesque enim. Aliquam tempor fringilla odio, vel ullamcorper turpis varius eu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- menu-->
            <section class="menu space60" id="menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Notre menu<small>Les pâtes</small></h1>
                            </div>
                        </div>
                    </div>
                    <div class="food-menu wow fadeInUp">
                       
                        <div class="row menu-items3">
                            <div class="menu-item3 col-sm-6 col-xs-12 starter dinner desserts">
                                <img src="img/menu/2/1.jpg" class="img-responsive" alt="" />
                                <div class="menu-wrapper">
                                    <h4>Pâte Chaude et Sauce</h4>
                                    <span class="price">50DH</span>
                                    <div class="dotted-bg"></div>
                                    <p>Asparagus, hens egg, toasted sunflower seeds</p>
                                </div>
                            </div>
                            <div class="menu-item3 col-sm-6 col-xs-12 starter">
                                <img src="img/menu/2/2.jpg" class="img-responsive" alt="" />
                                <div class="menu-wrapper">
                                    <h4>Les pâtes avec fromage</h4>
                                    <span class="price">60DH</span>
                                    <div class="dotted-bg"></div>
                                    <p>Asparagus, hens egg, toasted sunflower seeds</p>
                                </div>
                            </div>
                            <div class="menu-item3 col-sm-6 col-xs-12 breakfast desserts starter">
                                <img src="img/menu/2/3.jpg" class="img-responsive" alt="" />
                                <div class="menu-wrapper">
                                    <h4>Salade des pâtes</h4>
                                    <span class="price">$14.95</span>
                                    <div class="dotted-bg"></div>
                                    <p>Asparagus, hens egg, toasted sunflower seeds</p>
                                </div>
                            </div>
                            <div class="menu-item3 col-sm-6 col-xs-12 breakfast">
                                <img src="img/menu/2/4.jpg" class="img-responsive" alt="" />
                                <div class="menu-wrapper">
                                    <h4>Les pâtes avec la sauce béchamel</h4>
                                    <span class="price">45DH</span>
                                    <div class="dotted-bg"></div>
                                    <p>Asparagus, hens egg, toasted sunflower seeds</p>
                                </div>
                            </div>
                            <div class="menu-item3 col-sm-6 col-xs-12 lunch starter breakfast">
                                <img src="img/menu/2/5.jpg" class="img-responsive" alt="" />
                                <div class="menu-wrapper">
                                    <h4>Les pâtes avec Crevette</h4>
                                    <span class="price">70DH</span>
                                    <div class="dotted-bg"></div>
                                    <p>Asparagus, hens egg, toasted sunflower seeds</p>
                                </div>
                            </div>
                            <div class="menu-item3 col-sm-6 col-xs-12 lunch">
                                <img src="img/menu/2/6.jpg" class="img-responsive" alt="" />
                                <div class="menu-wrapper">
                                    <h4>Les pâtes aux légumes</h4>
                                    <span class="price">65DH</span>
                                    <div class="dotted-bg"></div>
                                    <p>Asparagus, hens egg, toasted sunflower seeds</p>
                                </div>
                            </div>
                            <div class="menu-item3 col-sm-6 col-xs-12 dinner breakfast lunch">
                                <img src="img/menu/2/7.jpg" class="img-responsive" alt="" />
                                <div class="menu-wrapper">
                                    <h4>Les Pâtes végétariennes</h4>
                                    <span class="price">35DH</span>
                                    <div class="dotted-bg"></div>
                                    <p>Asparagus, hens egg, toasted sunflower seeds</p>
                                </div>
                            </div>
                            <div class="menu-item3 col-sm-6 col-xs-12 dinner">
                                <img src="img/menu/2/8.jpg" class="img-responsive" alt="" />
                                <div class="menu-wrapper">
                                    <h4>Les pâtes italien</h4>
                                    <span class="price">35DH</span>
                                    <div class="dotted-bg"></div>
                                    <p>Asparagus, hens egg, toasted sunflower seeds</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Trusted BY-->
            <section class="trusted">
              
                <!-- Pourqoi nous section-->
                <div class="trusted-quote">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-10">
                                <div class="trusted-slider">
                                    <ul class="slides">
                                        <li>
                                            <img src="img/quote.png" alt="quote">
                                            <p class="quote-body">Pourquoi nous</p>
                                            <p>Notre culture de travail est moderne et non hiérarchique.</p>
                                            <p>Nous avons une équipe jeune représentant de nombreuses cultures différentes</p> 
                                            <p>Nous établissons des relations de confiance avec le personnel et les encourageons à prendre leurs responsabilités</p>   
                                            <p>Nous payons des salaires équitables et suivons toutes les règles et réglementations</p>
                                            <p>Nous essayons de trouver la bonne quantité d'heures de travail pour répondre aux besoins de chaque membre du personnel</p>   
                                            <p>Nous croyons qu'un état d'esprit ouvert et amical envers le personnel se reflète également dans la façon dont le personnel traite les clients</p>                                 </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="instagram">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header wow fadeInDown">
                                <h1>Restaurant<small>Nous sommes à votre disposition pour réserver nos restaurants pour votre événement.
                                </small></h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- instafeed div-->
                <!-- Change your settings in the data- attributes (See documentation for help) -->
                {{-- <div id="instafeed" data-username="YOUR_INSTAGRAM_USERNAME_HERE" data-access-token="YOUR_INSTAGRAM_ACCESS_TOKEN_HERE" data-client-id="YOUR_INSTAGRAM_CLIENT_ID_HERE"> --}}
            </section>

            <!-- subscribe -->
            <section class="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <h1>Subscribe</h1> --}}
                            {{-- <p>Get updates about new dishes and upcoming events</p> --}}
                            {{-- <form class="form-inline" action="php/subscribe.php" id="invite" method="POST">
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
