<!doctype html>
<html lang="fr" data-bs-theme="dark">

<head>

    <meta charset="utf-8" />
    <title>@yield('title', 'Fondation GITHA LIDJA') | Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Codebucks" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- dark layout js -->
    <script src="{{ asset('assets/js/pages/layout.js') }}"></script>

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- simplebar css -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <!-- Custom Dark Theme and Human Styles for Admin -->
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
      --bs-card-bg: #2d2d2d;
      --bs-sidebar-bg: #1a1a1a;
      --bs-header-bg: #2d2d2d;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      line-height: 1.6;
      background-color: var(--bs-body-bg) !important;
      color: var(--bs-body-color) !important;
      font-size: 1rem;
    }

    /* Admin Layout Specific */
    .main-content {
      background-color: var(--bs-body-bg) !important;
    }

    .page-content {
      background-color: var(--bs-body-bg) !important;
    }

    /* Sidebar Styling - Dark Navy Blue Background */
    .vertical-menu {
      background: #0f172a !important; /* Dark navy blue background */
      box-shadow: 2px 0 10px rgba(15, 23, 42, 0.5) !important;
    }

    .vertical-menu .metismenu li a {
      color: #10be00ff !important; /* White text for links */
      background-color: transparent !important;
      padding: 15px 20px !important; /* Increased padding */
      margin: 3px 8px !important;
      border-radius: 8px !important;
      transition: all 0.3s ease !important;
      font-weight: 500 !important;
      font-size: 1.1rem !important; /* Larger text size */
      position: relative !important;
      display: flex !important;
      align-items: center !important;
    }

    .vertical-menu .metismenu li a:hover,
    .vertical-menu .metismenu li a:focus {
      background: rgba(59, 130, 246, 0.2) !important;
      color: #ffffff !important;
      transform: translateX(5px) !important;
      box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3) !important;
    }

    .vertical-menu .metismenu li a:hover i,
    .vertical-menu .metismenu li a:focus i {
      transform: scale(1.1) !important;
      color: #ffffff !important;
    }

    .vertical-menu .metismenu li.mm-active > a {
      background: rgba(59, 130, 246, 0.3) !important;
      color: #ffffff !important;
      box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4) !important;
      border-left: 4px solid #3b82f6 !important;
    }

    .vertical-menu .metismenu li.mm-active > a i {
      color: #3b82f6 !important;
    }

    /* Menu Icons - Better Arrangement */
    .vertical-menu .metismenu li a i {
      width: 22px !important; /* Slightly larger icons */
      height: 22px !important;
      margin-right: 15px !important; /* More space between icon and text */
      color: #0073ffff !important; /* Light gray for inactive state */
      transition: all 0.3s ease !important;
      display: inline-flex !important;
      align-items: center !important;
      justify-content: center !important;
      flex-shrink: 0 !important; /* Prevent icon shrinking */
    }

    /* Submenu Styling */
    .vertical-menu .metismenu li ul.sub-menu {
      background: rgba(30, 58, 138, 0.8) !important;
      border-radius: 8px !important;
      margin: 5px 8px !important;
      padding: 8px 0 !important;
      box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1) !important;
    }

    .vertical-menu .metismenu li ul.sub-menu li a {
      padding: 8px 20px 8px 40px !important;
      margin: 1px 8px !important;
      font-size: 0.9rem !important;
      color: #cbd5e1 !important;
    }

    .vertical-menu .metismenu li ul.sub-menu li a:hover {
      background: rgba(59, 130, 246, 0.3) !important;
      color: #ffffff !important;
    }

    /* Menu Titles */
    .vertical-menu .metismenu li.menu-title {
      color: #fbbf24 !important;
      font-weight: 600 !important;
      font-size: 0.85rem !important;
      text-transform: uppercase !important;
      letter-spacing: 0.5px !important;
      padding: 20px 20px 10px !important;
      margin: 10px 8px 5px !important;
      border-bottom: 1px solid rgba(251, 191, 36, 0.3) !important;
    }

    /* Header Styling - Dark Navy Blue Background */
    .topbar {
      background: #0f172a !important; /* Dark navy blue background */
      border-bottom: 2px solid #3b82f6 !important;
      box-shadow: 0 2px 10px rgba(15, 23, 42, 0.5) !important;
    }

    .topbar .navbar-nav .nav-link {
      color: #ffffff !important; /* White text for navigation links */
      font-weight: 500 !important;
      padding: 0.75rem 1rem !important;
      border-radius: 8px !important;
      transition: all 0.3s ease !important;
      margin: 0 2px !important;
      font-size: 1.1rem !important; /* Larger text size */

    .topbar .navbar-nav .nav-link:hover {
      background: rgba(59, 130, 246, 0.2) !important;
      color: #ffffff !important;
      transform: translateY(-1px) !important;
    }

    .topbar .navbar-nav .nav-link:focus {
      background: rgba(59, 130, 246, 0.3) !important;
      color: #ffffff !important;
      outline: 2px solid #60a5fa !important;
      outline-offset: 2px !important;
    }

    /* Header Buttons and Icons */
    .topbar .btn {
      background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
      border: none !important;
      color: #ffffff !important;
      border-radius: 8px !important;
      font-weight: 500 !important;
      transition: all 0.3s ease !important;
      box-shadow: 0 2px 8px rgba(59, 130, 246, 0.3) !important;
    }

    .topbar .btn:hover {
      background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%) !important;
      transform: translateY(-2px) !important;
      box-shadow: 0 4px 12px rgba(59, 130, 246, 0.5) !important;
    }

    .topbar .top-icon {
      background: rgba(59, 130, 246, 0.1) !important;
      border: 1px solid rgba(59, 130, 246, 0.3) !important;
      color: #93c5fd !important;
      border-radius: 8px !important;
      padding: 0.5rem !important;
      transition: all 0.3s ease !important;
    }

    .topbar .top-icon:hover {
      background: rgba(59, 130, 246, 0.2) !important;
      border-color: #3b82f6 !important;
      color: #ffffff !important;
      transform: scale(1.05) !important;
    }

    /* Search Form */
    .topbar .app-search .form-control {
      background: rgba(255, 255, 255, 0.1) !important;
      border: 1px solid rgba(59, 130, 246, 0.3) !important;
      color: #e2e8f0 !important;
      border-radius: 8px !important;
      padding-left: 2.5rem !important;
    }

    .topbar .app-search .form-control:focus {
      background: rgba(255, 255, 255, 0.15) !important;
      border-color: #3b82f6 !important;
      color: #ffffff !important;
      box-shadow: 0 0 0 0.2rem rgba(59, 130, 246, 0.25) !important;
    }

    .topbar .app-search .fab {
      color: #93c5fd !important;
      left: 0.75rem !important;
      top: 50% !important;
      transform: translateY(-50%) !important;
    }

    /* Dropdown Menus in Header */
    .topbar .dropdown-menu {
      background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%) !important;
      border: 1px solid rgba(59, 130, 246, 0.3) !important;
      border-radius: 12px !important;
      box-shadow: 0 8px 25px rgba(30, 58, 138, 0.4) !important;
      margin-top: 0.5rem !important;
    }

    .topbar .dropdown-item {
      color: #e2e8f0 !important;
      padding: 0.75rem 1rem !important;
      border-radius: 6px !important;
      margin: 2px 4px !important;
      transition: all 0.3s ease !important;
    }

    .topbar .dropdown-item:hover {
      background: rgba(59, 130, 246, 0.3) !important;
      color: #ffffff !important;
      transform: translateX(5px) !important;
    }

    .topbar .dropdown-item .dropdown-icon {
      width: 20px !important;
      text-align: center !important;
      margin-right: 10px !important;
      color: #93c5fd !important;
    }

    .topbar .dropdown-item:hover .dropdown-icon {
      color: #ffffff !important;
    }

    /* Logo Area */
    .navbar-logo-box {
      background: rgba(255, 255, 255, 0.05) !important;
      border-radius: 0 12px 12px 0 !important;
      padding: 0.5rem 1rem !important;
      margin-right: 1rem !important;
    }

    /* Sidebar Toggle Button */
    .sidebar-btn {
      background: rgba(59, 130, 246, 0.1) !important;
      border: 1px solid rgba(59, 130, 246, 0.3) !important;
      color: #93c5fd !important;
      border-radius: 8px !important;
      transition: all 0.3s ease !important;
    }

    .sidebar-btn:hover {
      background: rgba(59, 130, 246, 0.2) !important;
      border-color: #3b82f6 !important;
      color: #ffffff !important;
      transform: scale(1.05) !important;
    }

    /* Human and Modern Feel */
    .card, .btn, .form-control, .modal-content, .table {
      border-radius: 12px !important;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
      border: 1px solid var(--bs-border-color) !important;
      background-color: var(--bs-card-bg) !important;
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

    /* Table Styling */
    .table {
      background-color: var(--bs-card-bg) !important;
      color: var(--bs-body-color) !important;
    }

    .table thead th {
      background-color: var(--bs-surface-color) !important;
      color: #ffffff !important;
      border-color: var(--bs-border-color) !important;
      font-weight: 600 !important;
    }

    .table tbody tr {
      border-color: var(--bs-border-color) !important;
    }

    .table tbody tr:hover {
      background-color: var(--bs-surface-color) !important;
    }

    .table tbody td {
      border-color: var(--bs-border-color) !important;
      color: var(--bs-body-color) !important;
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

    .form-select {
      background-color: var(--bs-surface-color) !important;
      border-color: var(--bs-border-color) !important;
      color: var(--bs-body-color) !important;
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

    /* Dashboard Cards */
    .card-body {
      background-color: var(--bs-card-bg) !important;
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
    .btn:focus, .form-control:focus, a:focus, .form-select:focus {
      outline: 2px solid var(--bs-primary) !important;
      outline-offset: 2px !important;
    }

    /* Dropdown Menus */
    .dropdown-menu {
      background-color: var(--bs-surface-color) !important;
      border: 1px solid var(--bs-border-color) !important;
      border-radius: 12px !important;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
    }

    .dropdown-item {
      color: var(--bs-body-color) !important;
    }

    .dropdown-item:hover {
      background-color: var(--bs-primary) !important;
      color: #ffffff !important;
    }

    /* Breadcrumb */
    .breadcrumb {
      background-color: transparent !important;
    }

    .breadcrumb-item a {
      color: var(--bs-primary) !important;
    }

    .breadcrumb-item.active {
      color: var(--bs-body-color) !important;
    }

    /* Pagination */
    .pagination .page-link {
      background-color: var(--bs-surface-color) !important;
      border-color: var(--bs-border-color) !important;
      color: var(--bs-body-color) !important;
    }

    .pagination .page-link:hover {
      background-color: var(--bs-primary) !important;
      border-color: var(--bs-primary) !important;
      color: #ffffff !important;
    }

    .pagination .page-item.active .page-link {
      background-color: var(--bs-primary) !important;
      border-color: var(--bs-primary) !important;
    }
    </style>

    @stack('styles')
</head>

<body>

<div id="layout-wrapper">

    @include('layouts.partials.header')

    @include('layouts.partials.sidebar')

    <!-- Start right Content here -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- End Page-content -->

        @include('layouts.partials.footer')
    </div>
    <!-- end main content-->
</div>

@include('layouts.partials.right-sidebar')

<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

<!-- apexcharts -->
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

@stack('scripts')
</body>

</html>
