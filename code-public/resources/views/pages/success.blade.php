@include('layouts.header')
<section class="page_header vertical-padding">

</section>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="giant-space">
                <p><img src="img/check.png" alt="Tick" /></p>
                <h2>Thank you!</h2>
                <p class="wow fadeInUp">Aweomse. Your request is recived and will get back to you soon. </p>
                <p class="top-space-lg"><a href="#" onclick="history.go(-1);" class="btn btn-success btn-lg">Go back</a></p>
            </div>
        </div>
    </div>
</div>
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

