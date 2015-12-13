<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Welcome to Laravel</title>

    {!! Html::style('public/css/bootstrap.min.css') !!}
    {!! Html::style('public/css/custom.css') !!}
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">--}}
    {{--<link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">--}}
    {{--<link rel="stylesheet" href="public/assets/animate.css/animate.min.css">--}}
    {{--<link rel="stylesheet" href="public/assets/socicon/css/socicon.min.css">--}}
    {{--<link rel="stylesheet" href="public/assets/mobirise/css/style.css">--}}
    {{--<link rel="stylesheet" href="public/assets/mobirise-slider/style.css">--}}
    {{--<link rel="stylesheet" href="public/assets/mobirise-gallery/style.css">--}}
    {{--<link rel="stylesheet" href="public/assets/mobirise/css/mbr-additional.css" type="text/css">--}}

    {!! Html::script('public/js/jquery.min.js') !!}
    {!! Html::script('public/js/bootstrap.min.js') !!}
    {!! Html::script('public/js/custom.js') !!}
    {{--<script src="public/assets/jquery/jquery.min.js"></script>--}}
    {{--<script src="public/assets/bootstrap/js/bootstrap.min.js"></script>--}}
    {{--<script src="public/assets/smooth-scroll/SmoothScroll.js"></script>--}}
    {{--<script src="public/assets/jarallax/jarallax.js"></script>--}}
    {{--<script src="public/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>--}}
    {{--<script src="public/assets/masonry/masonry.pkgd.min.js"></script>--}}
    {{--<script src="public/assets/imagesloaded/imagesloaded.pkgd.min.js"></script>--}}
    {{--<script src="public/assets/social-likes/social-likes.js"></script>--}}
    {{--<script src="public/assets/mobirise/js/script.js"></script>--}}
    {{--<script src="public/assets/mobirise-gallery/script.js"></script>--}}
    <style>

    </style>
</head>
<div >
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container navbar-section">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <img id="logo" src='public/logo.png'> <span class="brand-name">AHMMED</span> </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav btn-decorator">
                    <li class="navbar-item"><a class="menu-btn" href="">HOME</a></li>
                    <li class="navbar-item"><a class="menu-btn" href="">ABOUT</a></li>
                    <li class="navbar-item"><a class="menu-btn" href="">CONTACT</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
</div>
<body>
<div class="section-1 container">
    @yield('content')
</div>

<div class="footer-section">
    <div class="container">
        <div class="content row">
            <footer class="footer-text">

                <div class="container">
                    <div class=" row">
                        <div class="col-sm-4">
                            <img class="logo-image" alt="" src="public/logo.png">
                        </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-4">
                                    <p class="address-text"><strong>ADDRESS</strong><br>
                                        1234 Street Name<br>
                                        City, AA 99999</p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="contacts"><strong>CONTACTS</strong><br>
                                        Email: support@schedmailer.com<br>
                                        Phone: +880 <br>
                                        Fax: +880 </p>
                                </div>
                                <div class="col-sm-4">
                                    <p class="mbr-contacts__text">
                                        <strong>LINKS</strong>
                                    </p>
                                    <ul class="mbr-contacts__list">
                                        <li>Website builder</li>
                                        <li>Download for Windows</li>
                                        <li>Download for Mac</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
                <p class="mbr-footer__copyright">Copyright (c) 2015 Shahriar Ahmmed Tuhin. Terms of Use | Privacy Policy</p>
            </footer>

        </div>
    </div>
</div>


</body>
</html>