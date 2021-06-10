<!doctype html>
<html lang="zxx">
<head>
    @include('layout.frontend.source')
</head>

<body id="home" class="cms_index">
    {{-- header --}}
    @include('layout.frontend.header')
    {{-- body --}}
    <div>
        @yield('content')
    </div>
    {{-- footer --}}
    @include('layout.frontend.footer')

    <div class="offcanvas_overlay"></div>
    <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-select.js"></script>
    <script type="text/javascript" src="js/jquery-plugin-collection.js"></script>
    <script type="text/javascript" src="js/owl-carousel.js"></script>
    <script type="text/javascript" src="js/rev/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/rev/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/rev/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="js/jquery.dlmenu.js"></script>
    <script type="text/javascript" src="js/js-functions.js"></script>
    <script type="text/javascript" src="js/flicker.js"></script>
    <script type="text/javascript" src="js/rev_slider.js"></script>

</body>

</html>
