@extends('layouts.public')

@section('title', __('messages.home') . ' - ' . __('messages.foundation_name'))

@section('content')
<!-- Hero Section -->
<section class="hero-section bg-gradient-primary text-white py-5" id="home">
    <div class="container-fluid px-4">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-6 pe-lg-5">
                <div class="hero-content">
                    <h1 class="display-3 fw-bold mb-4 animate-fade-in">
                        <i class="fas fa-heart text-warning me-3"></i>
                        {{ __('messages.foundation_description') }}
                    </h1>
                    <p class="lead mb-4 fs-5 animate-slide-up">
                        La Fondation GITHA LIDJA œuvre pour le développement durable en République Démocratique du Congo
                        à travers l'éducation, la santé et l'accompagnement communautaire.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="{{ route('donate') }}" class="btn btn-warning btn-lg px-4 py-3 shadow-lg animate-bounce">
                            <i class="fas fa-hand-holding-heart me-2"></i>{{ __('messages.donate') }}
                        </a>
                        <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg px-4 py-3 animate-fade-in">
                            <i class="fas fa-info-circle me-2"></i>{{ __('messages.learn_more') }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="hero-image-container">
                    <img src="{{ asset('assets/images/hero-image.png') }}" alt="{{ __('messages.foundation_name') }}" class="img-fluid rounded-3 shadow-lg animate-float">
                    <div class="hero-badge">
                        <span class="badge bg-success fs-6 px-3 py-2">
                            <i class="fas fa-award me-1"></i>15+ {{ __('messages.years_experience') ?? 'Années d\'expérience' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-shape">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,100 100,0 100,100" fill="rgba(255,255,255,0.1)"/>
        </svg>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5 bg-light position-relative overflow-hidden">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="stat-card card border-0 shadow-sm h-100 animate-on-scroll">
                    <div class="card-body p-4">
                        <div class="stat-icon mb-3">
                            <i class="fas fa-users text-primary fa-3x"></i>
                        </div>
                        <h2 class="text-primary display-4 fw-bold mb-2">2,500+</h2>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.people_helped') ?? 'Personnes aidées' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card card border-0 shadow-sm h-100 animate-on-scroll">
                    <div class="card-body p-4">
                        <div class="stat-icon mb-3">
                            <i class="fas fa-project-diagram text-success fa-3x"></i>
                        </div>
                        <h2 class="text-success display-4 fw-bold mb-2">45</h2>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.projects_completed') ?? 'Projets réalisés' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card card border-0 shadow-sm h-100 animate-on-scroll">
                    <div class="card-body p-4">
                        <div class="stat-icon mb-3">
                            <i class="fas fa-hands-helping text-info fa-3x"></i>
                        </div>
                        <h2 class="text-info display-4 fw-bold mb-2">1,200+</h2>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.active_volunteers') ?? 'Bénévoles actifs' }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card card border-0 shadow-sm h-100 animate-on-scroll">
                    <div class="card-body p-4">
                        <div class="stat-icon mb-3">
                            <i class="fas fa-calendar-alt text-warning fa-3x"></i>
                        </div>
                        <h2 class="text-warning display-4 fw-bold mb-2">15</h2>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.years_experience') ?? 'Années d\'expérience' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="stats-bg-shape">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
            <circle cx="50" cy="50" r="40" fill="rgba(0,123,255,0.05)"/>
        </svg>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5">
                <div class="mission-content">
                    <div class="section-badge mb-3">
                        <span class="badge bg-primary px-3 py-2">
                            <i class="fas fa-bullseye me-1"></i>{{ __('messages.our_mission') }}
                        </span>
                    </div>
                    <h2 class="display-4 fw-bold mb-4 text-dark">{{ __('messages.our_mission') }}</h2>
                    <p class="lead mb-4 text-muted fs-5">
                        Créer un impact durable dans les communautés vulnérables de la RDC en promouvant
                        l'éducation, la santé et le développement économique.
                    </p>
                    <div class="mission-list">
                        <div class="mission-item d-flex align-items-center mb-3 p-3 rounded-3 bg-light">
                            <div class="mission-icon me-3">
                                <i class="fas fa-graduation-cap text-primary fa-2x"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Éducation pour tous les enfants</h6>
                                <p class="mb-0 text-muted small">Accès à l'éducation de qualité dans toutes les régions</p>
                            </div>
                        </div>
                        <div class="mission-item d-flex align-items-center mb-3 p-3 rounded-3 bg-light">
                            <div class="mission-icon me-3">
                                <i class="fas fa-heartbeat text-danger fa-2x"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Soins de santé accessibles</h6>
                                <p class="mb-0 text-muted small">Centres médicaux mobiles et prévention</p>
                            </div>
                        </div>
                        <div class="mission-item d-flex align-items-center mb-3 p-3 rounded-3 bg-light">
                            <div class="mission-icon me-3">
                                <i class="fas fa-home text-success fa-2x"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Soutien aux familles vulnérables</h6>
                                <p class="mb-0 text-muted small">Aide alimentaire et programmes sociaux</p>
                            </div>
                        </div>
                        <div class="mission-item d-flex align-items-center mb-3 p-3 rounded-3 bg-light">
                            <div class="mission-icon me-3">
                                <i class="fas fa-seedling text-warning fa-2x"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 fw-bold">Développement communautaire</h6>
                                <p class="mb-0 text-muted small">Agriculture durable et économie locale</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="mission-image-container position-relative">
                    <img src="{{ asset('assets/images/mission-image.jpg') }}" alt="{{ __('messages.our_mission') }}" class="img-fluid rounded-3 shadow-lg">
                    <div class="image-overlay">
                        <div class="overlay-content text-center text-white">
                            <i class="fas fa-quote-left fa-2x mb-3"></i>
                            <p class="mb-0 fs-5">"Chaque enfant éduqué est un avenir sauvé"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <span class="badge bg-success px-3 py-2">
                    <i class="fas fa-star me-1"></i>{{ __('messages.featured_projects') ?? 'Projets Phares' }}
                </span>
            </div>
            <h2 class="display-4 fw-bold text-dark mb-3">{{ __('messages.featured_projects') ?? 'Projets Phares' }}</h2>
            <p class="lead text-muted fs-5">{{ __('messages.discover_impactful_initiatives') ?? 'Découvrez nos initiatives les plus impactantes' }}</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 mb-4">
                <div class="card feature-card h-100 border-0 shadow-lg hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/project-1.jpg') }}" class="card-img-top" alt="Éducation">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <i class="fas fa-graduation-cap fa-3x text-white"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="project-category mb-2">
                            <span class="badge bg-primary">
                                <i class="fas fa-book me-1"></i>Éducation
                            </span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Programme Éducation</h5>
                        <p class="card-text text-muted mb-4">Construction et équipement d'écoles dans les zones rurales, formation des enseignants et distribution de matériel pédagogique.</p>
                        <a href="{{ route('projects') }}" class="btn btn-primary btn-lg w-100">
                            <i class="fas fa-arrow-right me-2"></i>{{ __('messages.read_more') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card feature-card h-100 border-0 shadow-lg hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/project-2.jpg') }}" class="card-img-top" alt="Santé">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <i class="fas fa-heartbeat fa-3x text-white"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="project-category mb-2">
                            <span class="badge bg-danger">
                                <i class="fas fa-heart me-1"></i>Santé
                            </span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Centre Médical Mobile</h5>
                        <p class="card-text text-muted mb-4">Mise en place de centres de santé mobiles pour les communautés isolées avec vaccination et soins de base.</p>
                        <a href="{{ route('projects') }}" class="btn btn-danger btn-lg w-100">
                            <i class="fas fa-arrow-right me-2"></i>{{ __('messages.read_more') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card feature-card h-100 border-0 shadow-lg hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/project-3.jpg') }}" class="card-img-top" alt="Agriculture">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <i class="fas fa-seedling fa-3x text-white"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="project-category mb-2">
                            <span class="badge bg-success">
                                <i class="fas fa-leaf me-1"></i>Agriculture
                            </span>
                        </div>
                        <h5 class="card-title fw-bold mb-3">Développement Agricole</h5>
                        <p class="card-text text-muted mb-4">Formation et équipement pour l'agriculture durable et la sécurité alimentaire des communautés.</p>
                        <a href="{{ route('projects') }}" class="btn btn-success btn-lg w-100">
                            <i class="fas fa-arrow-right me-2"></i>{{ __('messages.read_more') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-gradient-primary text-white position-relative overflow-hidden">
    <div class="container text-center">
        <div class="cta-content">
            <div class="cta-icon mb-4">
                <i class="fas fa-hands-helping fa-4x text-warning"></i>
            </div>
            <h2 class="display-4 fw-bold mb-4">{{ __('messages.join_our_cause') ?? 'Rejoignez notre cause' }}</h2>
            <p class="lead mb-4 fs-5">{{ __('messages.every_contribution_counts') ?? 'Chaque contribution compte. Ensemble, nous pouvons créer un changement durable.' }}</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('donate') }}" class="btn btn-warning btn-lg px-5 py-3 shadow-lg animate-pulse">
                    <i class="fas fa-hand-holding-heart me-2"></i>{{ __('messages.donate') }}
                </a>
                <a href="{{ route('volunteer') }}" class="btn btn-outline-light btn-lg px-5 py-3">
                    <i class="fas fa-users me-2"></i>{{ __('messages.volunteer') }}
                </a>
            </div>
        </div>
    </div>
    <div class="cta-shape-1">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
            <circle cx="20" cy="20" r="15" fill="rgba(255,255,255,0.1)"/>
        </svg>
    </div>
    <div class="cta-shape-2">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none">
            <circle cx="80" cy="80" r="20" fill="rgba(255,255,255,0.05)"/>
        </svg>
    </div>
</section>

<!-- Latest News -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <span class="badge bg-info px-3 py-2">
                    <i class="fas fa-newspaper me-1"></i>{{ __('messages.latest_news') ?? 'Dernières Actualités' }}
                </span>
            </div>
            <h2 class="display-4 fw-bold text-dark mb-3">{{ __('messages.latest_news') ?? 'Dernières Actualités' }}</h2>
            <p class="lead text-muted fs-5">{{ __('messages.stay_informed') ?? 'Restez informé de nos actions et impacts' }}</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 mb-4">
                <div class="card news-card border-0 shadow-lg h-100 hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/news-1.jpg') }}" class="card-img-top" alt="Actualité">
                        <div class="news-date">
                            <span class="badge bg-primary px-3 py-2">
                                <i class="fas fa-calendar me-1"></i>15 Oct
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="news-category mb-2">
                            <span class="badge bg-primary-light text-primary">
                                <i class="fas fa-graduation-cap me-1"></i>Éducation
                            </span>
                        </div>
                        <h6 class="card-title fw-bold mb-3">Nouvelle école inaugurée à Goma</h6>
                        <p class="card-text text-muted mb-4">Une nouvelle école primaire équipée pour 200 enfants a été inaugurée dans la région de Goma avec le soutien de nos partenaires.</p>
                        <a href="{{ route('news') }}" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-arrow-right me-1"></i>{{ __('messages.read_more') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card news-card border-0 shadow-lg h-100 hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/news-2.jpg') }}" class="card-img-top" alt="Actualité">
                        <div class="news-date">
                            <span class="badge bg-danger px-3 py-2">
                                <i class="fas fa-calendar me-1"></i>10 Oct
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="news-category mb-2">
                            <span class="badge bg-danger-light text-danger">
                                <i class="fas fa-heartbeat me-1"></i>Santé
                            </span>
                        </div>
                        <h6 class="card-title fw-bold mb-3">Campagne de vaccination réussie</h6>
                        <p class="card-text text-muted mb-4">Plus de 500 enfants ont bénéficié de notre campagne de vaccination mobile dans les zones rurales.</p>
                        <a href="{{ route('news') }}" class="btn btn-outline-danger btn-sm">
                            <i class="fas fa-arrow-right me-1"></i>{{ __('messages.read_more') }}
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card news-card border-0 shadow-lg h-100 hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/news-3.jpg') }}" class="card-img-top" alt="Actualité">
                        <div class="news-date">
                            <span class="badge bg-success px-3 py-2">
                                <i class="fas fa-calendar me-1"></i>5 Oct
                            </span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="news-category mb-2">
                            <span class="badge bg-success-light text-success">
                                <i class="fas fa-handshake me-1"></i>Partenariat
                            </span>
                        </div>
                        <h6 class="card-title fw-bold mb-3">Partenariat avec l'UNESCO</h6>
                        <p class="card-text text-muted mb-4">Signature d'un partenariat pour l'éducation inclusive dans 10 provinces de la RDC.</p>
                        <a href="{{ route('news') }}" class="btn btn-outline-success btn-sm">
                            <i class="fas fa-arrow-right me-1"></i>{{ __('messages.read_more') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
