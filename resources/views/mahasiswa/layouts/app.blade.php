<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="seo & digital marketing">
    <meta name="keywords" content="marketing,digital marketing,creative, agency, startup,promodise,onepage, clean, modern,seo,business, company">
    <meta name="author" content="Themefisher.com">

   <title>Welcome To Website | Sipil </title>
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('style/student/plugins/bootstrap/css/bootstrap.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{ asset('style/student/plugins/fontawesome/css/all.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('style/student/plugins/animate-css/animate.css') }}">
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('style/student/plugins/icofont/icofont.css') }}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style/student/style.css')}}">
</head>

<body data-spy="scroll" data-target=".fixed-top">
    @include('sweetalert::alert')
    <div class="banner-area banner-3">
        <div class="overlay dark-overlay"></div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                            @yield('banner')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('mahasiswa.nav.navtop')

@yield('content')
    
    <!-- Main jQuery -->
    <script src="{{ asset('style/student/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4.3.1 -->
    <script src="{{ asset('style/student/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/student/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Woow animtaion -->
    <script src="{{ asset('style/student/plugins/counterup/wow.min.js')}}"></script>
    <script src="{{ asset('style/student/plugins/counterup/jquery.easing.1.3.js')}}"></script>
     <!-- Counterup -->
    <script src="{{ asset('style/student/plugins/counterup/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('style/student/plugins/counterup/jquery.counterup.min.js')}}"></script>

    <!-- Google Map -->
    <script src="{{ asset('style/student/plugins/google-map/gmap3.min.js')}}"></script>
    
<!-- Contact Form -->
    <script src="{{ asset('style/student/plugins/jquery/contact.js')}}"></script>
    <script src="{{ asset('style/student/js/custom.js')}}"></script>
    <script>
        $(document).ready(function(){
            $(document).on('change', '.praktikum', function(){
                var id    = $('.praktikum').val().split(',')[0];
                var price = $('.praktikum').val().split(',')[1];

                $('.price').val(price);
                $('.practicum').val(id);
            });
        });
    </script>
    @include('mahasiswa.nav.footer')
  </body>
  </html>