@extends('layouts.public')

@section('title', __('messages.projects') . ' - ' . __('messages.foundation_name'))

@section('content')
<!-- Page Header -->
<section class="hero-section bg-gradient-primary text-white py-5 position-relative overflow-hidden">
    <div class="container-fluid px-4">
        <div class="row align-items-center min-vh-50">
            <div class="col-12 text-center">
                <div class="hero-content">
                    <div class="section-badge mb-4">
                        <span class="badge bg-warning text-dark px-4 py-2 fs-6">
                            <i class="fas fa-project-diagram me-2"></i>{{ __('messages.our_projects') }}
                        </span>
                    </div>
                    <h1 class="display-3 fw-bold mb-4 animate-fade-in">
                        <i class="fas fa-cogs text-warning me-3"></i>{{ __('messages.our_projects') }}
                    </h1>
                    <p class="lead fs-5 mb-4 animate-slide-up">{{ __('messages.discover_sustainable_development_initiatives') ?? 'Découvrez nos initiatives pour un développement durable' }}</p>
                    <div class="hero-stats d-flex justify-content-center gap-4 flex-wrap">
                        <div class="stat-item text-center">
                            <div class="stat-number display-6 fw-bold text-warning">45+</div>
                            <div class="stat-label small">{{ __('messages.projects_completed') ?? 'Projets réalisés' }}</div>
                        </div>
                        <div class="stat-item text-center">
                            <div class="stat-number display-6 fw-bold text-warning">15K+</div>
                            <div class="stat-label small">{{ __('messages.beneficiaries') ?? 'Bénéficiaires' }}</div>
                        </div>
                        <div class="stat-item text-center">
                            <div class="stat-number display-6 fw-bold text-warning">$2.5M</div>
                            <div class="stat-label small">{{ __('messages.invested') ?? 'Investis' }}</div>
                        </div>
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

<!-- Projects Filter -->
<section class="py-5 bg-light position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-4">
                    <h3 class="fw-bold text-dark mb-4">{{ __('messages.filter_projects') ?? 'Filtrer les projets' }}</h3>
                </div>
                <div class="d-flex justify-content-center flex-wrap gap-2">
                    <div class="filter-group">
                        <input type="radio" class="btn-check filter-radio" name="project-filter" id="all" checked>
                        <label class="btn btn-outline-primary filter-btn animate-fade-in" for="all">
                            <i class="fas fa-th-large me-2"></i>{{ __('messages.all') ?? 'Tous' }}
                        </label>
                    </div>

                    <div class="filter-group">
                        <input type="radio" class="btn-check filter-radio" name="project-filter" id="education">
                        <label class="btn btn-outline-primary filter-btn animate-fade-in" for="education">
                            <i class="fas fa-graduation-cap me-2"></i>{{ __('messages.education') ?? 'Éducation' }}
                        </label>
                    </div>

                    <div class="filter-group">
                        <input type="radio" class="btn-check filter-radio" name="project-filter" id="health">
                        <label class="btn btn-outline-success filter-btn animate-fade-in" for="health">
                            <i class="fas fa-heartbeat me-2"></i>{{ __('messages.health') ?? 'Santé' }}
                        </label>
                    </div>

                    <div class="filter-group">
                        <input type="radio" class="btn-check filter-radio" name="project-filter" id="agriculture">
                        <label class="btn btn-outline-warning filter-btn animate-fade-in" for="agriculture">
                            <i class="fas fa-seedling me-2"></i>{{ __('messages.agriculture') ?? 'Agriculture' }}
                        </label>
                    </div>

                    <div class="filter-group">
                        <input type="radio" class="btn-check filter-radio" name="project-filter" id="community">
                        <label class="btn btn-outline-info filter-btn animate-fade-in" for="community">
                            <i class="fas fa-users me-2"></i>{{ __('messages.community') ?? 'Communauté' }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <!-- Project 1 -->
            <div class="col-lg-6 mb-4">
                <div class="card project-card border-0 shadow-lg h-100 hover-lift animate-on-scroll" data-category="education">
                    <div class="row g-0 h-100">
                        <div class="col-md-6 position-relative">
                            <div class="project-image-container">
                                <img src="{{ asset('assets/images/project-education.jpg') }}" class="img-fluid h-100 object-fit-cover rounded-start" alt="Éducation">
                                <div class="project-overlay">
                                    <div class="overlay-content">
                                        <i class="fas fa-graduation-cap fa-3x text-white"></i>
                                    </div>
                                </div>
                                <div class="project-badge">
                                    <span class="badge bg-primary">
                                        <i class="fas fa-book me-1"></i>{{ __('messages.education') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div class="mb-3">
                                    <h5 class="card-title fw-bold mb-3 text-dark">Programme Éducation Pour Tous</h5>
                                    <p class="card-text text-muted mb-4">Construction et équipement de 25 écoles primaires dans les zones rurales de la RDC avec formation des enseignants.</p>
                                </div>
                                <div class="mt-auto">
                                    <div class="progress-section mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <small class="text-muted fw-semibold">{{ __('messages.progress') ?? 'Progression' }}: 85%</small>
                                            <small class="text-primary fw-bold">85%</small>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-primary animate-progress" style="width: 85%"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="funding-info">
                                            <small class="text-muted d-block">{{ __('messages.goal') ?? 'Objectif' }}: $500,000</small>
                                            <small class="text-success fw-semibold">{{ __('messages.funded') ?? 'Financé' }}: $425,000</small>
                                        </div>
                                        <button class="btn btn-primary btn-lg px-4 py-2 shadow-sm learn-more-btn" data-bs-toggle="modal" data-bs-target="#projectModal" data-project="education">
                                            <i class="fas fa-arrow-right me-2"></i>{{ __('messages.learn_more') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-6 mb-4">
                <div class="card project-card border-0 shadow-lg h-100 hover-lift animate-on-scroll" data-category="health">
                    <div class="row g-0 h-100">
                        <div class="col-md-6 position-relative">
                            <div class="project-image-container">
                                <img src="{{ asset('assets/images/project-health.jpg') }}" class="img-fluid h-100 object-fit-cover rounded-start" alt="Santé">
                                <div class="project-overlay">
                                    <div class="overlay-content">
                                        <i class="fas fa-heartbeat fa-3x text-white"></i>
                                    </div>
                                </div>
                                <div class="project-badge">
                                    <span class="badge bg-success">
                                        <i class="fas fa-heart me-1"></i>{{ __('messages.health') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div class="mb-3">
                                    <h5 class="card-title fw-bold mb-3 text-dark">Centres Médicaux Mobiles</h5>
                                    <p class="card-text text-muted mb-4">Mise en place de 12 centres de santé mobiles pour desservir les communautés isolées avec vaccination et soins de base.</p>
                                </div>
                                <div class="mt-auto">
                                    <div class="progress-section mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <small class="text-muted fw-semibold">{{ __('messages.progress') ?? 'Progression' }}: 70%</small>
                                            <small class="text-success fw-bold">70%</small>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-success animate-progress" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="funding-info">
                                            <small class="text-muted d-block">{{ __('messages.goal') ?? 'Objectif' }}: $300,000</small>
                                            <small class="text-success fw-semibold">{{ __('messages.funded') ?? 'Financé' }}: $210,000</small>
                                        </div>
                                        <button class="btn btn-success btn-lg px-4 py-2 shadow-sm learn-more-btn" data-bs-toggle="modal" data-bs-target="#projectModal" data-project="health">
                                            <i class="fas fa-arrow-right me-2"></i>{{ __('messages.learn_more') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-6 mb-4">
                <div class="card project-card border-0 shadow-lg h-100 hover-lift animate-on-scroll" data-category="agriculture">
                    <div class="row g-0 h-100">
                        <div class="col-md-6 position-relative">
                            <div class="project-image-container">
                                <img src="{{ asset('assets/images/project-agriculture.jpg') }}" class="img-fluid h-100 object-fit-cover rounded-start" alt="Agriculture">
                                <div class="project-overlay">
                                    <div class="overlay-content">
                                        <i class="fas fa-seedling fa-3x text-white"></i>
                                    </div>
                                </div>
                                <div class="project-badge">
                                    <span class="badge bg-warning">
                                        <i class="fas fa-leaf me-1"></i>{{ __('messages.agriculture') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div class="mb-3">
                                    <h5 class="card-title fw-bold mb-3 text-dark">Développement Agricole Durable</h5>
                                    <p class="card-text text-muted mb-4">Formation de 2000 agriculteurs aux techniques durables et distribution de semences améliorées.</p>
                                </div>
                                <div class="mt-auto">
                                    <div class="progress-section mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <small class="text-muted fw-semibold">{{ __('messages.progress') ?? 'Progression' }}: 60%</small>
                                            <small class="text-warning fw-bold">60%</small>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-warning animate-progress" style="width: 60%"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="funding-info">
                                            <small class="text-muted d-block">{{ __('messages.goal') ?? 'Objectif' }}: $150,000</small>
                                            <small class="text-success fw-semibold">{{ __('messages.funded') ?? 'Financé' }}: $90,000</small>
                                        </div>
                                        <button class="btn btn-warning btn-lg px-4 py-2 shadow-sm learn-more-btn" data-bs-toggle="modal" data-bs-target="#projectModal" data-project="agriculture">
                                            <i class="fas fa-arrow-right me-2"></i>{{ __('messages.learn_more') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="col-lg-6 mb-4">
                <div class="card project-card border-0 shadow-lg h-100 hover-lift animate-on-scroll" data-category="community">
                    <div class="row g-0 h-100">
                        <div class="col-md-6 position-relative">
                            <div class="project-image-container">
                                <img src="{{ asset('assets/images/project-community.jpg') }}" class="img-fluid h-100 object-fit-cover rounded-start" alt="Communauté">
                                <div class="project-overlay">
                                    <div class="overlay-content">
                                        <i class="fas fa-users fa-3x text-white"></i>
                                    </div>
                                </div>
                                <div class="project-badge">
                                    <span class="badge bg-info">
                                        <i class="fas fa-hands-helping me-1"></i>{{ __('messages.community') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div class="mb-3">
                                    <h5 class="card-title fw-bold mb-3 text-dark">Programme d'Empowerment Féminin</h5>
                                    <p class="card-text text-muted mb-4">Formation professionnelle et accompagnement de 500 femmes dans 5 provinces pour l'autonomie économique.</p>
                                </div>
                                <div class="mt-auto">
                                    <div class="progress-section mb-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <small class="text-muted fw-semibold">{{ __('messages.progress') ?? 'Progression' }}: 45%</small>
                                            <small class="text-info fw-bold">45%</small>
                                        </div>
                                        <div class="progress" style="height: 8px;">
                                            <div class="progress-bar bg-info animate-progress" style="width: 45%"></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="funding-info">
                                            <small class="text-muted d-block">{{ __('messages.goal') ?? 'Objectif' }}: $200,000</small>
                                            <small class="text-success fw-semibold">{{ __('messages.funded') ?? 'Financé' }}: $90,000</small>
                                        </div>
                                        <button class="btn btn-info btn-lg px-4 py-2 shadow-sm learn-more-btn" data-bs-toggle="modal" data-bs-target="#projectModal" data-project="community">
                                            <i class="fas fa-arrow-right me-2"></i>{{ __('messages.learn_more') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Details Modal -->
<div class="modal fade project-modal" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg">
            <div class="modal-header bg-gradient-primary text-white border-0">
                <h5 class="modal-title fw-bold" id="projectModalLabel">
                    <i class="fas fa-project-diagram me-2"></i>{{ __('messages.project_details') ?? 'Détails du Projet' }}
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="project-details" class="p-4">
                    <!-- Project details will be loaded here via JavaScript -->
                    <div class="text-center py-5">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">{{ __('messages.loading') ?? 'Chargement...' }}</span>
                        </div>
                        <p class="mt-3 text-muted">{{ __('messages.loading_project_details') ?? 'Chargement des détails du projet...' }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 bg-light">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('messages.close') ?? 'Fermer' }}</button>
                <a href="{{ route('donate') }}" class="btn btn-primary">
                    <i class="fas fa-hand-holding-heart me-2"></i>{{ __('messages.support_this_project') ?? 'Soutenir ce projet' }}
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Impact Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <span class="badge bg-success px-3 py-2">
                    <i class="fas fa-chart-line me-1"></i>{{ __('messages.our_projects_impact') ?? 'Impact de nos Projets' }}
                </span>
            </div>
            <h2 class="display-4 fw-bold text-dark mb-3">{{ __('messages.our_projects_impact') ?? 'Impact de nos Projets' }}</h2>
            <p class="lead text-muted fs-5">{{ __('messages.concrete_results_communities') ?? 'Résultats concrets pour les communautés' }}</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card impact-card border-0 shadow-lg text-center p-4 h-100 hover-lift">
                    <div class="card-body">
                        <div class="impact-icon mb-4">
                            <div class="avatar avatar-xl avatar-primary rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-graduation-cap fs-1 text-white"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-primary mb-2">5,000+</h3>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.children_schooled') ?? 'Enfants scolarisés' }}</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar bg-primary" style="width: 95%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card impact-card border-0 shadow-lg text-center p-4 h-100 hover-lift">
                    <div class="card-body">
                        <div class="impact-icon mb-4">
                            <div class="avatar avatar-xl avatar-success rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-user-md fs-1 text-white"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-success mb-2">15,000+</h3>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.medical_consultations') ?? 'Consultations médicales' }}</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar bg-success" style="width: 88%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card impact-card border-0 shadow-lg text-center p-4 h-100 hover-lift">
                    <div class="card-body">
                        <div class="impact-icon mb-4">
                            <div class="avatar avatar-xl avatar-warning rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-seedling fs-1 text-white"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-warning mb-2">2,000+</h3>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.farmers_trained') ?? 'Agriculteurs formés' }}</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar bg-warning" style="width: 92%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card impact-card border-0 shadow-lg text-center p-4 h-100 hover-lift">
                    <div class="card-body">
                        <div class="impact-icon mb-4">
                            <div class="avatar avatar-xl avatar-info rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-users fs-1 text-white"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-info mb-2">800+</h3>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.women_supported') ?? 'Femmes accompagnées' }}</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar bg-info" style="width: 85%"></div>
                        </div>
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
            <h2 class="display-4 fw-bold mb-4">{{ __('messages.support_our_projects') ?? 'Soutenez nos Projets' }}</h2>
            <p class="lead mb-4 fs-5">{{ __('messages.your_contribution_realize_projects') ?? 'Votre contribution permet de réaliser ces projets et d\'aider des milliers de personnes.' }}</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('donate') }}" class="btn btn-warning btn-lg px-5 py-3 shadow-lg animate-pulse">
                    <i class="fas fa-hand-holding-heart me-2"></i>{{ __('messages.donate') }}
                </a>
