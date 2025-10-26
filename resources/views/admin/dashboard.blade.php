@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <div>
                <h4 class="fs-16 fw-semibold mb-1 mb-md-2">Bonjour, <span class="text-primary">{{ Auth::user()->name }}!</span></h4>
                <p class="text-muted mb-0">Voici un aperçu de l'activité de la fondation aujourd'hui.</p>
            </div>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Fondation GITHA LIDJA</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--    end row -->

<div class="row">
    <div class="col-xxl-9">
        <div class="card">
            <div class="card-header">
                <div class="card-icon">
                    <i class="fas fa-chart-line fs-14 text-muted"></i>
                </div>
                <h4 class="card-title mb-0">Statistiques générales</h4>
                <div class="dropdown card-addon">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-sidebar"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Rapport mensuel</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Exporter</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Imprimer</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                            <div>
                                <p class="text-muted text-truncate mb-2">Dons totaux</p>
                                <h5 class="mb-0">$45,231</h5>
                            </div>
                            <div class="text-success float-end">
                                <i class="mdi mdi-menu-up"> </i>12.5%
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                            <div>
                                <p class="text-muted text-truncate mb-2">Bénévoles actifs</p>
                                <h5 class="mb-0">1,245</h5>
                            </div>
                            <div class="text-success float-end">
                                <i class="mdi mdi-menu-up"> </i>8.2%
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="d-flex justify-content-between align-content-end shadow-lg p-3">
                            <div>
                                <p class="text-muted text-truncate mb-2">Projets actifs</p>
                                <h5 class="mb-0">23</h5>
                            </div>
                            <div class="text-success float-end">
                                <i class="mdi mdi-menu-up"> </i>5.7%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="sales_figures" data-colors='["--bs-info", "--bs-success"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card bg-danger-subtle" style="background: url('{{ asset('assets/images/dashboard/dashboard-shape-1.png') }}'); background-repeat: no-repeat; background-position: bottom center; ">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="avatar avatar-sm avatar-label-danger">
                                <i class="mdi mdi-buffer mt-1"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-danger mb-1">Solde disponible</p>
                                <h4 class="mb-0">$15,452.55</h4>
                            </div>
                        </div>
                        <div class="hstack gap-2 mt-3">
                            <button class="btn btn-light">Transférer</button>
                            <button class="btn btn-info">Demander</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card bg-success-subtle" style="background: url('{{ asset('assets/images/dashboard/dashboard-shape-2.png') }}'); background-repeat: no-repeat; background-position: bottom center; ">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="avatar avatar-sm avatar-label-success">
                                <i class="mdi mdi-cash-usd-outline mt-1"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-success mb-1">Paiements à venir</p>
                                <h4 class="mb-0">$120</h4>
                            </div>
                        </div>
                        <div class="mt-3 mb-2">
                            <p class="mb-0">4 non confirmés</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card bg-info-subtle" style="background: url('{{ asset('assets/images/dashboard/dashboard-shape-3.png') }}'); background-repeat: no-repeat; background-position: bottom center; ">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="avatar avatar-sm avatar-label-info">
                                <i class="mdi mdi-webhook mt-1"></i>
                            </div>
                            <div class="ms-3">
                                <p class="text-info mb-1">Événements terminés</p>
                                <h4 class="mb-0">72</h4>
                            </div>
                        </div>
                        <div class="mt-3 mb-2">
                            <p class="mb-0"><span class="text-primary me-2 fs-14"><i class="fas fa-caret-up me-1"></i>3.4%</span>vs le mois dernier</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-hockey-puck fs-14 text-muted"></i>
                        </div>
                        <h4 class="card-title mb-0">Dons par catégorie</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <div>
                                            <p><i class="mdi mdi-brightness-5 text-primary me-2"></i>Éducation <span class="text-muted fs-14">-25%</span></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <p><i class="mdi mdi-briefcase-variant-outline text-danger me-2"></i>Santé <span class="text-muted fs-14">-30%</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <div>
                                            <p><i class="mdi mdi-cart-arrow-right text-info me-2"></i>Alimentation <span class="text-muted fs-14">-20%</span></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <p><i class="mdi mdi-checkbox-multiple-blank text-warning me-2"></i>Logement <span class="text-muted fs-14">-15%</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <div>
                                            <p><i class="mdi mdi-chess-queen text-success me-2"></i>Environnement <span class="text-muted fs-14">-10%</span></p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <p><i class="mdi mdi-city text-warning me-2"></i>Culture <span class="text-muted fs-14">-5%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <div id="gradient_chart" data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger", "--bs-info", "--bs-dark", "--bs-purple", "--bs-orange"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card" style="overflow-y: auto; height: 304px;" data-simplebar="init">
                    <div class="card-header card-header-bordered">
                        <div class="card-icon text-muted"><i class="fa fa-clipboard-list fs-14"></i></div>
                        <h3 class="card-title">Activités récentes</h3>
                        <div class="card-addon">
                            <button class="btn btn-sm btn-label-primary">Voir tout</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="timeline timeline-timed">
                            <div class="timeline-item">
                                <span class="timeline-time">10:00</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-primary"></i></div>
                                <div class="timeline-content">
                                    <div>
                                        <span>Réunion avec</span>
                                        <div class="avatar-group ms-2">
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('assets/images/users/avatar-1.png') }}" alt="Avatar image" class="avatar-2xs" />
                                            </div>
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('assets/images/users/avatar-2.png') }}" alt="Avatar image" class="avatar-2xs" />
                                            </div>
                                            <div class="avatar avatar-circle">
                                                <img src="{{ asset('assets/images/users/avatar-3.png') }}" alt="Avatar image" class="avatar-2xs" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-time">14:00</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-danger"></i></div>
                                <div class="timeline-content">
                                    <p class="mb-0">Nouveau retour reçu sur le projet éducatif.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-time">15:20</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-success"></i></div>
                                <div class="timeline-content">
                                    <p class="mb-0">Distribution de nourriture terminée avec succès.</p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <span class="timeline-time">17:00</span>
                                <div class="timeline-pin"><i class="marker marker-circle text-info"></i></div>
                                <div class="timeline-content">
                                    <p class="mb-0">Nouveau bénévole s'est inscrit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card" style="height: 495px; overflow: hidden auto;" data-simplebar="init">
                    <div class="card-header">
                        <div class="card-icon text-muted"><i class="fas fa-sync-alt fs-14"></i></div>
                        <h3 class="card-title">Progrès des projets</h3>
                        <div class="card-addon dropdown">
                            <button class="btn btn-label-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown"> <i class="fas fa-filter fs-12 align-middle ms-1"></i></button>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-poll"></i></div>
                                    <span class="dropdown-content">Aujourd'hui</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div>
                                    <span class="dropdown-content">Hier</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div>
                                    <span class="dropdown-content">Semaine</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table class="table text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>ID Projet</th>
                                        <th>Statut</th>
                                        <th>Équipe</th>
                                        <th>Localisation</th>
                                        <th>Progrès</th>
                                        <th>Date début</th>
                                        <th>Échéance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">PROJ-001</td>
                                        <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-primary"></i> En cours</td>
                                        <td class="align-middle">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-1.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-2.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-3.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-4.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-5.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">Kinshasa</td>
                                        <td class="align-middle">
                                            <div class="">
                                                <h6 class="">85%</h6>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-primary" style="width: 85%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">15/01/2024</td>
                                        <td class="align-middle">15/06/2024</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">PROJ-002</td>
                                        <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-success"></i> Terminé</td>
                                        <td class="align-middle">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-6.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-7.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-8.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">Lubumbashi</td>
                                        <td class="align-middle">
                                            <div class="">
                                                <h6 class="">100%</h6>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" style="width: 100%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">01/11/2023</td>
                                        <td class="align-middle">31/03/2024</td>
                                    </tr>
                                    <tr>
                                        <td class="align-middle">PROJ-003</td>
                                        <td class="align-middle"><i class="marker marker-dot m-0 me-2 text-warning"></i> En pause</td>
                                        <td class="align-middle">
                                            <div class="avatar-group">
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-5.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-4.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-1.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                                <div class="avatar avatar-circle">
                                                    <img src="{{ asset('assets/images/users/avatar-2.png') }}" alt="Avatar image" class="avatar-2xs">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">Goma</td>
                                        <td class="align-middle">
                                            <div class="">
                                                <h6 class="">45%</h6>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" style="width: 45%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-middle">10/02/2024</td>
                                        <td class="align-middle">10/08/2024</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-3">
        <div class="row">
            <div class="col-xxl-12 col-xl-6 order-1">
                <div class="card">
                    <div class="card-body">
                        <div class="float-end">
                            <select class="form-select form-select-sm">
                                <option selected>Avr</option>
                                <option value="1">Mar</option>
                                <option value="2">Fév</option>
                                <option value="3">Jan</option>
                            </select>
                        </div>
                        <h4 class="card-title mb-4">Analyse des dons</h4>
                        <div id="pattern_chart" data-colors='["--bs-primary", "--bs-success", "--bs-warning", "--bs-danger", "--bs-info"]' class="apex-charts" dir="ltr"></div>

                        <div class="row">
                            <div class="col-4">
                                <div class="text-center mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary font-size-10 me-1"></i> En ligne</p>
                                    <h5>42 %</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success font-size-10 me-1"></i> Direct</p>
                                    <h5>26 %</h5>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center mt-4">
                                    <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-warning font-size-10 me-1"></i> Événements</p>
                                    <h5>32 %</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 order-4 order-xxl-2">
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon text-muted"><i class="fa fa-bell"></i></div>
                        <h3 class="card-title">Notifications</h3>
                        <div class="card-addon">
                            <div class="dropdown">
                                <button class="btn btn-sm py-0 btn-label-primary dropdown-toggle" data-bs-toggle="dropdown">Tous <i class="mdi mdi-chevron-down fs-17 align-middle ms-1"></i></button>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                    <a class="dropdown-item" href="#"><span class="badge badge-label-primary">Projets</span> </a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-label-info">Dons</span> </a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-label-success">Bénévoles</span> </a>
                                    <a class="dropdown-item" href="#"><span class="badge badge-label-danger">Urgent</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="rich-list rich-list-bordered rich-list-action">
                            <div class="rich-list-item">
                                <div class="rich-list-prepend">
                                    <div class="avatar avatar-xs avatar-label-info">
                                        <div class=""><i class="fa fa-file-invoice"></i></div>
                                    </div>
                                </div>
                                <div class="rich-list-content">
                                    <h4 class="rich-list-title mb-1">Nouveau rapport de projet</h4>
                                    <p class="rich-list-subtitle mb-0">2 min ago</p>
                                </div>
                                <div class="rich-list-append">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fs-12"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                                <span class="dropdown-content">Marquer comme lu</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                                <span class="dropdown-content">Supprimer</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                <span class="dropdown-content">Paramètres</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rich-list-item">
                                <div class="rich-list-prepend">
                                    <div class="avatar avatar-xs avatar-label-success">
                                        <div class=""><i class="fa fa-shopping-basket"></i></div>
                                    </div>
                                </div>
                                <div class="rich-list-content">
                                    <h4 class="rich-list-title mb-1">Don important reçu</h4>
                                    <p class="rich-list-subtitle mb-0">1 heure ago</p>
                                </div>
                                <div class="rich-list-append">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fs-12"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                                <span class="dropdown-content">Marquer comme lu</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                                <span class="dropdown-content">Supprimer</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                <span class="dropdown-content">Paramètres</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="rich-list-item">
                                <div class="rich-list-prepend">
                                    <div class="avatar avatar-xs avatar-label-danger">
                                        <div class=""><i class="fa fa-users"></i></div>
                                    </div>
                                </div>
                                <div class="rich-list-content">
                                    <h4 class="rich-list-title mb-1">Réunion d'équipe reportée</h4>
                                    <p class="rich-list-subtitle mb-0">5 heures ago</p>
                                </div>
                                <div class="rich-list-append">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-label-secondary btn-icon" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h fs-12"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-check"></i></div>
                                                <span class="dropdown-content">Marquer comme lu</span>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-trash-alt"></i></div>
                                                <span class="dropdown-content">Supprimer</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">
                                                <div class="dropdown-icon"><i class="fa fa-cog"></i></div>
                                                <span class="dropdown-content">Paramètres</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 order-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Impact des campagnes</h4>
                        <div class="dropdown card-addon">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-sidebar"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Rapport de campagne</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Exporter</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Imprimer</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="mb-3">
                                <div id="semi_donut_chart" data-colors='["--bs-primary", "--bs-warning"]' class="apex-charts" dir="ltr"></div>
                            </div>

                            <div class="row justify-content-center mt-n5">
                                <div class="col-6">
                                    <div class="p-2 shadow">
                                        <p class="text-muted text-truncate mb-2">Personnes aidées</p>
                                        <h5 class="mb-0">2,547 <span class="fs-12 text-primary ms-2"><i class="mdi mdi-arrow-up"></i> 17%</span></h5>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="p-2 shadow">
                                        <p class="text-muted text-truncate mb-2">Projets réussis</p>
                                        <h5 class="mb-0">89 <span class="fs-12 text-success ms-2"><i class="mdi mdi-arrow-up"></i> 12%</span></h5>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div id="bar_chart" data-colors='["--bs-danger"]' class="apex-charts" dir="ltr"></div>
                            </div>

                            <div class="card" style="background: url('{{ asset('assets/images/widgets-shape2.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                <div class="bg-overlay bg-primary-subtle rounded"></div>
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-7">
                                            <h4 class="fs-16 mb-1">Besoin d'idées ?</h4>
                                            <p class="text-muted mb-0">Mettez à niveau vers pro max pour des avantages supplémentaires.</p>
                                            <button class="btn btn-primary mt-4">Mettre à niveau</button>
                                        </div>
                                        <div class="col-5">
                                            <img src="{{ asset('assets/images/dashboard/upgarde-1.png') }}" alt="" class="img-fluid" style="height: 126px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-12 col-xl-6 order-2 order-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="fas fa-calendar-alt fs-14 text-muted"></i>
                        </div>
                        <h4 class="card-title mb-0">Évolution mensuelle</h4>
                    </div>
                    <div class="card-body">
                        <div id="monthly_states" data-colors='["--bs-success", "--bs-danger", "--bs-warning"]' class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
