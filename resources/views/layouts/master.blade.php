<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords"
        content="van vihar national park, van vihar bhopal, van vihar bhopal contact number, van vihar bhopal open today, national park in bhopal" />
    <meta name="description"
        content="Van Vihar National Park and Zoo is one of the most revered National Park and Zoo of Central India and is a shining beacon in the field of conservation. It is an amazing world of winged creatures, free ranging ungulates and captive carnivores in the midst of greenery." />
    <meta name="refresh" content="60" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Vanvihar National Park & Zoo @yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/assets/images/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/flaticon.css') }}" rel="stylesheet" type="text/css">

    <!-- flag-icon-css -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/flag-icon-css/css/flag-icon.min.css') }}">

    <!--Main Slider-->
    <link href="{{ asset('public/assets/css/settings.css') }}" type="text/css" rel="stylesheet" media="screen">
    <link href="{{ asset('public/assets/css/layers.css') }}" type="text/css" rel="stylesheet" media="screen">

    <!--Light box-->
    <link href="{{ asset('public/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css">

    <!-- carousel -->
    <link href="{{ asset('public/assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/owl.transitions.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/custom-slider.css') }}" rel="stylesheet">

    <!-- Toggle Switch -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <!-- Toastr -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    @if (session('locale') == 'hi')
        <style>
            .main-menu .navigation li a {
                font-size: 16px;
                margin-left: 18px;
                margin-right: 18px;
            }

        </style>
    @endif

    @stack('css')
</head>

<body>
    @include('layouts.partial.header')

    @yield('content')

    @include('layouts.partial.footer')

    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/tether.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <!-- revolution Js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/revolution.extension.layeranimation.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('public/assets/js/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/revolution.extension.parallax.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.revolution.js') }}"></script>
    <!-- fancybox Js -->
    <script src="{{ asset('public/assets/js/jquery.fancybox.js') }}"></script>

    <!-- lazyload js -->
    <script src="{{ asset('public/assets/js/lazyload.js') }}"></script>

    <!-- masonry,isotope Effect Js -->
    <script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/isotope.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/masonry.pkgd.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
    <!-- parallax Js -->
    <script src="{{ asset('public/assets/js/jquery.parallax-1.1.3.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/jquery.appear.js') }}" type="text/javascript"></script>
    <!-- matchHeight Js -->
    <script src="{{ asset('public/assets/js/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
    <!-- popup -->
    <script src="{{ asset('public/assets/js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <!-- carousel Js -->
    <script src="{{ asset('public/assets/js/owl.carousel.js') }}" type="text/javascript"></script>
    <!-- Toggle Switch -->
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- Accordion Js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery.accordion.js') }}"></script>
    <!-- map -->
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> --}}
    {{-- <script type="text/javascript" src="{{asset('public/assets/js/map.js')}}"></script> --}}
    <script type="text/javascript" src="{{ asset('public/assets/js/validation.js') }}"></script>
    <script src="{{ asset('public/assets/js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/custom-slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/assets/js/custom.isotope.js') }}" type="text/javascript"></script>

    <!-- Toastr -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    @stack('js')

    <script>
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "100",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    </script>
    
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "GovernmentOrganization",
      "name": "Van Vihar National Park and Zoo",
      "url": "https://vanviharnationalpark.org/",
      "logo": "https://vanviharnationalpark.org/public/assets/images/vanvihar-logo.png",
      "sameAs": [
        "https://www.facebook.com/VanViharNationalParkOfficialPage",
        "https://twitter.com/van_vihar?s=08",
        "https://www.instagram.com/vanviharnationalpark.bhopal/"
      ]
    }
    </script>

    @if (session('success'))
        <script>
            toastr.success("{!! session('success') !!}")
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.error("{!! session('error') !!}")
        </script>
    @endif
</body>

</html>
