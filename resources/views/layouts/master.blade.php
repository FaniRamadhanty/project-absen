<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Halaman Admin</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/dist/img/brand/favicn.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/dist/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/dist/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body>
    <!-- navbar -->
    @Include ('layouts.components.navbar')
    <!-- navbar -->

    <!-- sidebar -->
    @Include ('layouts.components.sidebar')
    <!-- sidebar -->

    <!-- Header -->
    @Include ('layouts.components.header')
    <!-- Header -->


    @yield('konten')




    <!-- Footer -->
    @Include ('layouts.components.footer')
    <!-- Footer -->




    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('assets/dist/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/dist/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/dist/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('assets/dist/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/dist/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('assets/dist/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/dist/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('assets/dist/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
