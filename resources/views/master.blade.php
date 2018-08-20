<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.aucreative.co/yumi/home-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 00:10:24 GMT -->
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/jpg" href="../images/icons/logoo1.jpg"/>
<!--===============================================================================================-->
    {{ Html::style('vendor/bootstrap/css/bootstrap.min.css') }}
<!--===============================================================================================-->
    {{ Html::style('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}
<!--===============================================================================================-->
    {{ Html::style('vendor/animate/animate.css') }}
<!--===============================================================================================-->  
    {{ Html::style('vendor/css-hamburgers/hamburgers.min.css') }}
<!--===============================================================================================-->
    {{ Html::style('vendor/animsition/css/animsition.min.css') }}
<!--===============================================================================================-->
    {{ Html::style('vendor/select2/select2.min.css') }}
<!--===============================================================================================-->  
    {{ Html::style('vendor/daterangepicker/daterangepicker.css') }}
<!--===============================================================================================-->
    {{ Html::style('vendor/slick/slick.css') }}
<!--===============================================================================================-->
    {{ Html::style('vendor/lightbox2/css/lightbox.min.css') }}
<!--===============================================================================================-->
    {{ Html::style('vendor/revolution/css/layers.css') }}
    {{ Html::style('vendor/revolution/css/navigation.css') }}
    {{ Html::style('vendor/revolution/css/settings.css') }}
<!--===============================================================================================-->
    {{ Html::style('css/util.css') }}
    {{ Html::style('css/main.css') }}
<!--===============================================================================================-->
</head>
<body class="animsition">

    @include('shared.navbar')

    @yield('content')

    @include('shared.footer')
    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="fa fa fa-angle-double-up" aria-hidden="true"></i>
        </span>
    </div>

    <!-- Modal Video 01-->
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/5k1hSu2gdKE?rel=0&amp;showinfo=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

<!--===============================================================================================-->  
    {{ Html::script('vendor/jquery/jquery-3.2.1.min.js') }}
<!--===============================================================================================-->
    {{ Html::script('vendor/animsition/js/animsition.min.js') }}
<!--===============================================================================================-->
    {{ Html::script('vendor/bootstrap/js/popper.js') }}
    {{ Html::script('vendor/bootstrap/js/bootstrap.min.js') }}
<!--===============================================================================================-->
    {{ Html::script('vendor/revolution/js/jquery.themepunch.tools.min.js') }}
    {{ Html::script('vendor/revolution/js/jquery.themepunch.revolution.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.video.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.carousel.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.slideanims.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.actions.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.kenburn.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.navigation.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.migration.min.js') }}
    {{ Html::script('vendor/revolution/js/extensions/revolution.extension.parallax.min.js') }}
    {{ Html::script('js/revo-custom.js') }}
<!--===============================================================================================-->
    {{ Html::script('vendor/select2/select2.min.js') }}
<!--===============================================================================================-->
    {{ Html::script('vendor/daterangepicker/moment.min.js') }}
    {{ Html::script('vendor/daterangepicker/daterangepicker.js') }}
<!--===============================================================================================-->
    {{ Html::script('vendor/slick/slick.min.js') }}
    {{ Html::script('js/slick-custom.js') }}
<!--===============================================================================================-->
    {{ Html::script('vendor/parallax100/parallax100.js') }}
<!--===============================================================================================-->
    {{ Html::script('vendor/lightbox2/js/lightbox.min.js') }}
<!--===============================================================================================-->
    {{ Html::script('js/main.js') }}

</body>

<!-- Mirrored from templates.aucreative.co/yumi/home-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jul 2018 00:12:24 GMT -->
</html>