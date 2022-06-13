@include('layouts.header')
 <!-- Page Header -->
 <section class="page_header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="text-uppercase">Contact</h2>
                <p>Tomato is a delicious restaurant website template</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form / Info -->
<section class="main-content contact-content">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-left no-margin-top">Address</h3>
                    <div class="footer-address contact-info">
                        <p><i class="fa fa-map-marker"></i>28 Seventh Avenue, Neew York, 10014</p>
                        <p><i class="fa fa-phone"></i>Phone: (415) 124-5678</p>
                        <p><i class="fa fa-envelope-o"></i>support@restaurant.com</p>
                    </div>
                    <br>

                    <h3 class="text-left no-margin-top">Working hours</h3>
                    <div class="contact-info text-muted">
                        <p>10:00 am to 11:00 pm on Weekdays</p>
                        <p>11:00 am to 11:30 pm on Weekends</p>
                    </div>
                    <br>

                    <h3 class="text-left no-margin-top">Follow Us</h3>
                    <div class="contact-social">
                        <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
                        <a href="http://www.dribbble.com"><i class="fa fa-dribbble"></i></a>
                        <a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <form class="contact-form" id="contactForm" action="php/contact.php" method="post">
                        <div class="form-group">
                            <input class="form-control" name="name" id="name" placeholder="Full Name" type="text" required="required" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email Address" required="required" />
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Subject" type="text" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" placeholder="Message" rows="5"></textarea>
                        </div>
                        <button class="btn btn-default btn-lg btn-block" id="js-contact-btn">Send message</button>
                    </form>
                    <div id="js-contact-result" data-success-msg="Form submitted successfully." data-error-msg="Oops. Something went wrong."></div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Google Map -->
<!-- Set latitude and Longitude (Get it from http://google.com/maps) -->
<div id="map" data-latitude="40.6700" data-longitude="-73.9400"></div>

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

<!-- Footer-->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h1>About us</h1>
                <p>Duis leo justo, condimentum at purus eu,Aenean sed dolor sem. Etiam massa libero, auctor vitae egestas et, accumsan quis nunc.Duis leo justo, condimentum at purus eu, posuere pretium tellus.</p>
                <a href="./about.html">Read more &rarr;</a>
            </div>
            <div class="col-md-4  col-sm-6">
                <h1>Recent post</h1>
                <div class="footer-blog clearfix">
                    <a href="./blog_right_sidebar.html">
                        <img src="img/thumb8.png" class="img-responsive footer-photo" alt="blog photos">
                        <p class="footer-blog-text">Hand picked ingredients for our best customers</p>
                        <p class="footer-blog-date">29 may 2015</p>
                    </a>
                </div>
                <div class="footer-blog clearfix last">
                    <a href="./blog_right_sidebar.html">
                        <img src="img/thumb9.png" class="img-responsive footer-photo" alt="blog photos">
                        <p class="footer-blog-text">Daily special foods that you will going to love</p>
                        <p class="footer-blog-date">29 may 2015</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4  col-sm-6">
                <h1>Reach us</h1>
                <div class="footer-social-icons">
                    <a href="http://www.facebook.com">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="http://www.twitter.com">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="http://plus.google.com">
                        <i class="fa fa-google"></i>
                    </a>
                    <a href="http://www.youtube.com">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                    <a href="http://www.vimeo.com">
                        <i class="fa fa-vimeo"></i>
                    </a>
                    <a href="http://www.pinterest.com">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                    <a href="http://www.linkedin.com">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </div>
                <div class="footer-address">
                    <p><i class="fa fa-map-marker"></i>28 Seventh Avenue, Neew York, 10014</p>
                    <p><i class="fa fa-phone"></i>Phone: (415) 124-5678</p>
                    <p><i class="fa fa-envelope-o"></i>support@restaurant.com</p>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')