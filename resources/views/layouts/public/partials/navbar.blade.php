<!-- Start Navbar -->
<header id="page-topbar">
    <div class="navbar-header">

        <!-- Logo -->

        <!-- Start Navbar-Brand -->
        <div class="navbar-logo-box">
            <a href="{{ url('/') }}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-sm-dark" height="20">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-dark" height="18">
                </span>
            </a>

            <a href="{{ url('/') }}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-sm-light" height="20">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="logo-light" height="18">
                </span>
            </a>

            <button type="button" class="btn btn-sm top-icon sidebar-btn" id="sidebar-btn">
                <i class="mdi mdi-menu-open align-middle fs-19"></i>
            </button>
        </div>
        <!-- End navbar brand -->

        <!-- Start menu -->
        <div class="d-flex justify-content-between menu-sm px-3 ms-auto">
            <div class="d-flex align-items-center gap-2">
                <div class="dropdown d-none d-lg-block">
                    <button type="button" class="btn btn-primary btn-sm fs-14 d-inline" data-bs-toggle="dropdown">
                        Fondation
                        <i class="mdi mdi-chevron-down align-middle"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-start dropdown-menu-animated">
                        <a href="{{ route('home') }}" class="dropdown-item">
                            <div class="dropdown-icon"><i class="fa fa-home"></i></div>
                            <span class="dropdown-content">Accueil</span>
                        </a>
                        <a href="{{ route('about') }}" class="dropdown-item">
                            <div class="dropdown-icon"><i class="fa fa-info-circle"></i></div>
                            <span class="dropdown-content">À propos</span>
                        </a>
                        <a href="{{ route('projects') }}" class="dropdown-item">
                            <div class="dropdown-icon"><i class="fa fa-project-diagram"></i></div>
                            <span class="dropdown-content">Projets</span>
                        </a>
                        <a href="{{ route('news') }}" class="dropdown-item">
                            <div class="dropdown-icon"><i class="fa fa-newspaper"></i></div>
                            <span class="dropdown-content">Actualités</span>
                        </a>
                        <a href="{{ route('donate') }}" class="dropdown-item">
                            <div class="dropdown-icon"><i class="fa fa-hand-holding-heart"></i></div>
                            <span class="dropdown-content">Faire un don</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('volunteer') }}" class="dropdown-item">
                            <div class="dropdown-icon"><i class="fa fa-users"></i></div>
                            <span class="dropdown-content">Devenir bénévole</span>
                        </a>
                        <a href="{{ route('partners') }}" class="dropdown-item">
                            <div class="dropdown-icon"><i class="fa fa-handshake"></i></div>
                            <span class="dropdown-content">Partenaires</span>
                        </a>
                        <a href="{{ route('contact') }}" class="dropdown-item">
                            <div class="dropdown-icon"><i class="fa fa-envelope"></i></div>
                            <span class="dropdown-content">Contact</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center gap-2">
                <!--Start App Search-->
                <form class="app-search d-none d-lg-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="{{ __('messages.search') }}">
                        <span class="fab fa-sistrix fs-17 align-middle"></span>
                    </div>
                </form>
                <!--End App Search-->

                <!-- Start Language Switcher -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm top-icon" id="page-header-lang-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-globe align-middle"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                        <a href="{{ url()->current() }}?lang=fr" class="dropdown-item {{ app()->getLocale() == 'fr' ? 'active' : '' }}">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/flags/french.jpg') }}" alt="French" class="me-2" height="12">
                                <span>Français</span>
                            </div>
                        </a>
                        <a href="{{ url()->current() }}?lang=en" class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="English" class="me-2" height="12">
                                <span>English</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Language Switcher -->

                <!-- Start Notification -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm top-icon" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell align-middle"></i>
                        <span class="btn-marker"><i class="marker marker-dot text-danger"></i><span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-md dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3 bg-info">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="text-white m-0"><i class="far fa-bell me-2"></i> {{ __('messages.notifications') }} </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="badge bg-info-subtle text-info"> 8+</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar style="max-height: 230px;">
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-xs avatar-label-primary me-3">
                                        <span class="rounded fs-16">
                                            <i class="mdi mdi-file-document-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-1">{{ __('messages.new_report') }}</h6>
                                        <div class="fs-12 text-muted">
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                        </div>
                                    </div>
                                    <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                </div>
                            </a>
                            <a href="" class="text-reset notification-item">
                                <div class="d-flex">
                                    <div class="avatar avatar-xs avatar-label-success me-3">
                                        <span class="rounded fs-16">
                                            <i class="mdi mdi-cart-variant"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mb-1">{{ __('messages.order_completed') }}</h6>
                                        <div class="fs-12 text-muted">
                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 heure ago</p>
                                        </div>
                                    </div>
                                    <i class="mdi mdi-chevron-right align-middle ms-2"></i>
                                </div>
                            </a>
                        </div>
                        <div class="p-2 border-top">
                            <div class="d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> {{ __('messages.view_more') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Notification -->

                <!-- Start Activities -->
                <div class="d-inline-block activities">
                    <button type="button" class="btn btn-sm top-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-rightsidabar">
                        <i class="fas fa-table align-middle"></i>
                    </button>
                </div>
                <!-- End Activities -->

                <!-- Start Profile -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm top-icon p-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded avatar-2xs p-0" src="{{ asset('assets/images/users/avatar-6.png') }}" alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-wide dropdown-menu-end dropdown-menu-animated overflow-hidden py-0">
                        <div class="card border-0">
                            <div class="card-header bg-primary rounded-0">
                                <div class="rich-list-item w-100 p-0">
                                    <div class="rich-list-prepend">
                                        <div class="avatar avatar-label-light avatar-circle">
                                            <div class="avatar-display"><i class="fa fa-user-alt"></i></div>
                                        </div>
                                    </div>
                                    <div class="rich-list-content">
                                        <h3 class="rich-list-title text-white">{{ Auth::user()->name ?? 'Visiteur' }}</h3>
                                        <span class="rich-list-subtitle text-white">{{ Auth::user()->email ?? 'Bienvenue' }}</span>
                                    </div>
                                    <div class="rich-list-append"><span class="badge badge-label-light fs-6">Public</span></div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="grid-nav grid-nav-flush grid-nav-action grid-nav-no-rounded">
                                    <div class="grid-nav-row">
                                        <a href="{{ route('login') }}" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-sign-in-alt"></i></div>
                                            <span class="grid-nav-content">Connexion</span>
                                        </a>
                                        <a href="{{ route('register') }}" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-user-plus"></i></div>
                                            <span class="grid-nav-content">Inscription</span>
                                        </a>
                                        <a href="#" class="grid-nav-item">
                                            <div class="grid-nav-icon"><i class="far fa-comments"></i></div>
                                            <span class="grid-nav-content">Support</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Profile -->
            </div>
        </div>
        <!-- End menu -->
    </div>
</header>
<!-- End Navbar -->
