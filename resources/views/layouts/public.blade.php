<!doctype html>
<html lang="fr" data-bs-theme="dark">

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

    <!-- Custom Dark Theme and Human Styles -->
    <style>
    :root {
      --bs-body-bg: #1a1a1a;
      --bs-body-color: #e9ecef;
      --bs-primary: #0d6efd;
      --bs-secondary: #6c757d;
      --bs-success: #198754;
      --bs-info: #0dcaf0;
      --bs-warning: #ffc107;
      --bs-danger: #dc3545;
      --bs-light: #f8f9fa;
      --bs-dark: #212529;
      --bs-border-color: #495057;
      --bs-surface-color: #2d2d2d;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      line-height: 1.6;
      background-color: var(--bs-body-bg) !important;
      color: var(--bs-body-color) !important;
      font-size: 1rem;
    }

    /* Human and Modern Feel */
    .card, .btn, .form-control, .modal-content {
      border-radius: 12px !important;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
      border: 1px solid var(--bs-border-color) !important;
      background-color: var(--bs-surface-color) !important;
      color: var(--bs-body-color) !important;
    }

    .card:hover {
      transform: translateY(-2px);
      transition: transform 0.2s ease;
    }

    .btn {
      font-weight: 500 !important;
      padding: 0.75rem 1.5rem !important;
      transition: all 0.2s ease !important;
    }

    .btn:hover {
      transform: translateY(-1px) !important;
    }

    /* Typography for Readability and Accessibility */
    h1, h2, h3, h4, h5, h6 {
      color: #ffffff !important;
      font-weight: 600 !important;
      line-height: 1.3 !important;
      margin-bottom: 1rem !important;
    }

    .display-4 {
      font-size: 3.5rem !important;
      font-weight: 700 !important;
      line-height: 1.2 !important;
    }

    .display-5 {
      font-size: 3rem !important;
      font-weight: 700 !important;
      line-height: 1.2 !important;
    }

    .lead {
      font-size: 1.25rem !important;
      line-height: 1.5 !important;
      color: #adb5bd !important;
    }

    p {
      margin-bottom: 1rem !important;
      line-height: 1.6 !important;
    }

    /* Dark Gradients and Backgrounds */
    .bg-gradient-primary {
      background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%) !important;
    }

    .bg-primary {
      background-color: #0d6efd !important;
    }

    .bg-light {
      background-color: #2d2d2d !important;
    }

    .bg-white {
      background-color: #1a1a1a !important;
    }

    /* Text Colors for Contrast */
    .text-muted {
      color: #adb5bd !important;
    }

    .text-primary {
      color: #0d6efd !important;
    }

    .text-success {
      color: #198754 !important;
    }

    .text-info {
      color: #0dcaf0 !important;
    }

    .text-warning {
      color: #ffc107 !important;
    }

    .text-danger {
      color: #dc3545 !important;
    }

    /* Human Elements */
    .avatar {
      border-radius: 50% !important;
      border: 2px solid var(--bs-border-color) !important;
    }

    .section-badge {
      background: linear-gradient(45deg, #0d6efd, #6610f2) !important;
      color: white !important;
      padding: 8px 16px !important;
      border-radius: 20px !important;
      font-size: 0.875rem !important;
      font-weight: 500 !important;
      display: inline-block !important;
    }

    /* Form Elements */
    .form-control {
      background-color: var(--bs-surface-color) !important;
      border-color: var(--bs-border-color) !important;
      color: var(--bs-body-color) !important;
    }

    .form-control:focus {
      background-color: var(--bs-surface-color) !important;
      border-color: var(--bs-primary) !important;
      color: var(--bs-body-color) !important;
      box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25) !important;
    }

    /* Links */
    a {
      color: #0d6efd !important;
      text-decoration: none !important;
      transition: color 0.2s ease !important;
    }

    a:hover {
      color: #0b5ed7 !important;
    }

    /* Animations for Human Feel */
    .animate-fade-in {
      animation: fadeIn 1s ease-in;
    }

    .animate-slide-up {
      animation: slideUp 0.8s ease-out;
    }

    .animate-pulse {
      animation: pulse 2s infinite;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slideUp {
      from { transform: translateY(20px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .display-4 {
        font-size: 2.5rem !important;
      }
      .display-5 {
        font-size: 2rem !important;
      }
      .lead {
        font-size: 1.1rem !important;
      }
    }

    /* Accessibility */
    .sr-only {
      position: absolute !important;
      width: 1px !important;
      height: 1px !important;
      padding: 0 !important;
      margin: -1px !important;
      overflow: hidden !important;
      clip: rect(0, 0, 0, 0) !important;
      white-space: nowrap !important;
      border: 0 !important;
    }

    /* Focus States */
    .btn:focus, .form-control:focus, a:focus {
      outline: 2px solid var(--bs-primary) !important;
      outline-offset: 2px !important;
    }
    </style>

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
