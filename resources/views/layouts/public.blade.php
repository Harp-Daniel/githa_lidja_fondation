<!doctype html>
<html lang="fr">

<head>

    <meta charset="utf-8" />
    <title>@yield('title', 'Fondation GITHA LIDJA')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Fondation GITHA LIDJA - Aide humanitaire et développement durable en République Démocratique du Congo" name="description" />
    <meta content="fondation, humanitaire, développement, RDC, Congo, aide, bénévolat" name="keywords" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- simplebar css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    @stack('styles')
</head>

<body>

<div id="layout-wrapper">

    <!-- Navigation -->
    @include('layouts.public.partials.navbar')

    <!-- Sidebar -->
    @include('layouts.public.partials.sidebar')

    <!-- Start right Content here -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Footer -->
        @include('layouts.public.partials.footer')
    </div>
    <!-- end main content-->
</div>

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

@stack('scripts')
</body>

</html>
