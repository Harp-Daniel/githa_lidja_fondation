@extends('layouts.public')

@section('title', __('messages.about') . ' - ' . __('messages.foundation_name'))

@section('content')
<!-- Page Header -->
<section class="hero-section bg-gradient-primary text-white py-5 position-relative overflow-hidden">
    <div class="container-fluid px-4">
        <div class="row align-items-center min-vh-50">
            <div class="col-12 text-center">
                <div class="hero-content">
                    <div class="section-badge mb-4">
                        <span class="badge bg-warning text-dark px-4 py-2 fs-6">
                            <i class="fas fa-info-circle me-2"></i>{{ __('messages.about_us') }}
                        </span>
                    </div>
                    <h1 class="display-3 fw-bold mb-4 animate-fade-in">
                        <i class="fas fa-heart text-warning me-3"></i>{{ __('messages.about_us') }}
                    </h1>
                    <p class="lead fs-5 mb-4 animate-slide-up">{{ __('messages.discover_our_story_mission_values') ?? 'Découvrez notre histoire, notre mission et nos valeurs' }}</p>
                    <div class="hero-stats d-flex justify-content-center gap-4 flex-wrap">
                        <div class="stat-item text-center">
                            <div class="stat-number display-6 fw-bold text-warning">15+</div>
                            <div class="stat-label small">{{ __('messages.years_experience') ?? 'Années d\'expérience' }}</div>
                        </div>
                        <div class="stat-item text-center">
                            <div class="stat-number display-6 fw-bold text-warning">15K+</div>
                            <div class="stat-label small">{{ __('messages.beneficiaries') ?? 'Bénéficiaires' }}</div>
                        </div>
                        <div class="stat-item text-center">
                            <div class="stat-number display-6 fw-bold text-warning">45+</div>
                            <div class="stat-label small">{{ __('messages.projects_completed') ?? 'Projets réalisés' }}</div>
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

<!-- Mission & Vision -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6 mb-4">
                <div class="card mission-vision-card border-0 shadow-lg h-100 hover-lift">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-wrapper me-4">
                                <div class="avatar avatar-xl avatar-primary rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-bullseye fs-1 text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="card-title mb-1 fw-bold text-dark">{{ __('messages.our_mission') }}</h3>
                                <div class="card-subtitle text-primary small fw-semibold">{{ __('messages.what_drives_us') ?? 'Ce qui nous anime' }}</div>
                            </div>
                        </div>
                        <p class="card-text text-muted fs-6 mb-4">
                            Créer un impact durable dans les communautés vulnérables de la République Démocratique du Congo
                            en promouvant l'éducation, la santé et le développement économique durable.
                        </p>
                        <div class="mission-highlights">
                            <div class="highlight-item d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle text-success me-3"></i>
                                <span class="small">{{ __('messages.education_for_all') ?? 'Éducation pour tous' }}</span>
                            </div>
                            <div class="highlight-item d-flex align-items-center mb-2">
                                <i class="fas fa-check-circle text-success me-3"></i>
                                <span class="small">{{ __('messages.healthcare_access') ?? 'Accès aux soins' }}</span>
                            </div>
                            <div class="highlight-item d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-3"></i>
                                <span class="small">{{ __('messages.economic_development') ?? 'Développement économique' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="card mission-vision-card border-0 shadow-lg h-100 hover-lift">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-wrapper me-4">
                                <div class="avatar avatar-xl avatar-success rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="fas fa-eye fs-1 text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="card-title mb-1 fw-bold text-dark">{{ __('messages.our_vision') }}</h3>
                                <div class="card-subtitle text-success small fw-semibold">{{ __('messages.where_we_going') ?? 'Où nous allons' }}</div>
                            </div>
                        </div>
                        <p class="card-text text-muted fs-6 mb-4">
                            Une RDC où chaque individu, indépendamment de sa condition sociale, a accès à l'éducation,
                            aux soins de santé et aux opportunités de développement économique.
                        </p>
                        <div class="vision-quote p-3 bg-light rounded-3">
                            <i class="fas fa-quote-left text-success fs-4 me-2"></i>
                            <span class="fst-italic">"{{ __('messages.vision_quote') ?? 'Un avenir meilleur pour chaque Congolais' }}"</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-5 bg-light position-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 pe-lg-5 mb-4">
                <div class="story-content">
                    <div class="section-badge mb-3">
                        <span class="badge bg-info px-3 py-2">
                            <i class="fas fa-book-open me-1"></i>{{ __('messages.our_story') }}
                        </span>
                    </div>
                    <h2 class="display-4 fw-bold mb-4 text-dark">{{ __('messages.our_story') }}</h2>
                    <p class="lead mb-4 text-muted fs-5">
                        Fondée en 2009, la Fondation GITHA LIDJA est née de la volonté de quelques visionnaires
                        déterminés à apporter un changement positif dans leur communauté.
                    </p>
                    <div class="story-timeline mb-4">
                        <div class="timeline-item d-flex mb-3">
                            <div class="timeline-marker bg-primary me-3"></div>
                            <div>
                                <h6 class="fw-bold text-primary mb-1">2009</h6>
                                <p class="small text-muted mb-0">{{ __('messages.foundation_year') ?? 'Création de la fondation' }}</p>
                            </div>
                        </div>
                        <div class="timeline-item d-flex mb-3">
                            <div class="timeline-marker bg-success me-3"></div>
                            <div>
                                <h6 class="fw-bold text-success mb-1">2015</h6>
                                <p class="small text-muted mb-0">{{ __('messages.first_projects') ?? 'Premiers projets éducatifs' }}</p>
                            </div>
                        </div>
                        <div class="timeline-item d-flex">
                            <div class="timeline-marker bg-warning me-3"></div>
                            <div>
                                <h6 class="fw-bold text-warning mb-1">2024</h6>
                                <p class="small text-muted mb-0">{{ __('messages.expansion') ?? 'Expansion nationale' }}</p>
                            </div>
                        </div>
                    </div>
                    <p class="mb-4 text-muted">
                        Au fil des années, nous avons grandi et étendu notre impact à travers le pays,
                        touchant des milliers de vies et construisant des partenariats durables avec
                        les communautés locales et les organisations internationales.
                    </p>
                    <a href="{{ route('projects') }}" class="btn btn-primary btn-lg px-4 py-3 shadow-lg">
                        <i class="fas fa-arrow-right me-2"></i>{{ __('messages.view_our_projects') }}
                    </a>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5">
                <div class="story-image-container position-relative">
                    <img src="{{ asset('assets/images/about-story.jpg') }}" alt="{{ __('messages.our_story') }}" class="img-fluid rounded-3 shadow-lg">
                    <div class="image-overlay">
                        <div class="overlay-content text-center text-white">
                            <i class="fas fa-users fa-2x mb-3"></i>
                            <h5 class="mb-0">{{ __('messages.our_team') }}</h5>
                            <p class="small mb-0">{{ __('messages.dedicated_professionals') ?? 'Professionnels dédiés' }}</p>
                        </div>
                    </div>
                    <div class="floating-badge">
                        <span class="badge bg-primary px-3 py-2">
                            <i class="fas fa-award me-1"></i>15 {{ __('messages.years_experience') ?? 'ans' }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <span class="badge bg-warning px-3 py-2">
                    <i class="fas fa-star me-1"></i>{{ __('messages.our_values') }}
                </span>
            </div>
            <h2 class="display-4 fw-bold text-dark mb-3">{{ __('messages.our_values') }}</h2>
            <p class="lead text-muted fs-5">{{ __('messages.principles_guide_action') ?? 'Les principes qui guident notre action' }}</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 mb-4">
                <div class="card value-card border-0 shadow-lg text-center h-100 hover-lift">
                    <div class="card-body p-5">
                        <div class="value-icon mb-4">
                            <div class="avatar avatar-xxl avatar-primary rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-hand-holding-heart fs-1 text-white"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark">{{ __('messages.solidarity') }}</h4>
                        <p class="text-muted mb-0">{{ __('messages.solidarity_description') ?? 'Nous croyons en la force de l\'entraide et du soutien mutuel au sein des communautés.' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card value-card border-0 shadow-lg text-center h-100 hover-lift">
                    <div class="card-body p-5">
                        <div class="value-icon mb-4">
                            <div class="avatar avatar-xxl avatar-success rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-balance-scale fs-1 text-white"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark">{{ __('messages.transparency') }}</h4>
                        <p class="text-muted mb-0">{{ __('messages.transparency_description') ?? 'Nous agissons avec intégrité et rendons compte de nos actions à nos donateurs et partenaires.' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card value-card border-0 shadow-lg text-center h-100 hover-lift">
                    <div class="card-body p-5">
                        <div class="value-icon mb-4">
                            <div class="avatar avatar-xxl avatar-info rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-seedling fs-1 text-white"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark">{{ __('messages.sustainability') }}</h4>
                        <p class="text-muted mb-0">{{ __('messages.sustainability_description') ?? 'Nos projets sont conçus pour créer un impact durable et autonome dans les communautés.' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <span class="badge bg-danger px-3 py-2">
                    <i class="fas fa-users me-1"></i>{{ __('messages.our_team') }}
                </span>
            </div>
            <h2 class="display-4 fw-bold text-dark mb-3">{{ __('messages.our_team') }}</h2>
            <p class="lead text-muted fs-5">{{ __('messages.people_make_possible') ?? 'Les personnes qui rendent tout cela possible' }}</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card team-card border-0 shadow-lg text-center h-100 hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/team-1.jpg') }}" class="card-img-top" alt="Équipe">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <i class="fas fa-user-md fa-2x text-white"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Dr. Marie Kabila</h5>
                        <p class="text-primary small fw-semibold mb-3">{{ __('messages.executive_director') ?? 'Directrice Générale' }}</p>
                        <p class="card-text small text-muted mb-3">{{ __('messages.experience_community_development') ?? 'Plus de 15 ans d\'expérience en développement communautaire.' }}</p>
                        <div class="social-links">
                            <a href="#" class="text-primary me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-primary"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card team-card border-0 shadow-lg text-center h-100 hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/team-2.jpg') }}" class="card-img-top" alt="Équipe">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <i class="fas fa-project-diagram fa-2x text-white"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Jean-Pierre Mbuyi</h5>
                        <p class="text-success small fw-semibold mb-3">{{ __('messages.program_manager') ?? 'Responsable Programmes' }}</p>
                        <p class="card-text small text-muted mb-3">{{ __('messages.expert_educational_health_projects') ?? 'Expert en gestion de projets éducatifs et sanitaires.' }}</p>
                        <div class="social-links">
                            <a href="#" class="text-success me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-success"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card team-card border-0 shadow-lg text-center h-100 hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/team-3.jpg') }}" class="card-img-top" alt="Équipe">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <i class="fas fa-bullhorn fa-2x text-white"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">Sophie Lumbu</h5>
                        <p class="text-info small fw-semibold mb-3">{{ __('messages.communication_manager') ?? 'Responsable Communication' }}</p>
                        <p class="card-text small text-muted mb-3">{{ __('messages.specialist_community_mobilization') ?? 'Spécialiste en mobilisation communautaire et plaidoyer.' }}</p>
                        <div class="social-links">
                            <a href="#" class="text-info me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-info"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card team-card border-0 shadow-lg text-center h-100 hover-lift">
                    <div class="card-img-container">
                        <img src="{{ asset('assets/images/team-4.jpg') }}" class="card-img-top" alt="Équipe">
                        <div class="card-img-overlay d-flex align-items-center justify-content-center">
                            <i class="fas fa-calculator fa-2x text-white"></i>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h5 class="card-title fw-bold mb-2">David Nkosi</h5>
                        <p class="text-warning small fw-semibold mb-3">{{ __('messages.financial_manager') ?? 'Responsable Financier' }}</p>
                        <p class="card-text small text-muted mb-3">{{ __('messages.expert_financial_management') ?? 'Expert en gestion financière et transparence.' }}</p>
                        <div class="social-links">
                            <a href="#" class="text-warning me-2"><i class="fab fa-linkedin"></i></a>
                            <a href="#" class="text-warning"><i class="fab fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge mb-3">
                <span class="badge bg-success px-3 py-2">
                    <i class="fas fa-chart-line me-1"></i>{{ __('messages.our_impact') }}
                </span>
            </div>
            <h2 class="display-4 fw-bold text-dark mb-3">{{ __('messages.our_impact') }}</h2>
            <p class="lead text-muted fs-5">{{ __('messages.key_figures_action') ?? 'Chiffres clés de notre action' }}</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card impact-card border-0 shadow-lg text-center p-4 h-100 hover-lift">
                    <div class="card-body">
                        <div class="impact-icon mb-4">
                            <div class="avatar avatar-xl avatar-primary rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-users fs-1 text-white"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-primary mb-2">15,000+</h3>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.direct_beneficiaries') ?? 'Bénéficiaires directs' }}</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar bg-primary" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card impact-card border-0 shadow-lg text-center p-4 h-100 hover-lift">
                    <div class="card-body">
                        <div class="impact-icon mb-4">
                            <div class="avatar avatar-xl avatar-success rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-school fs-1 text-white"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-success mb-2">25</h3>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.schools_built') ?? 'Écoles construites' }}</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar bg-success" style="width: 92%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card impact-card border-0 shadow-lg text-center p-4 h-100 hover-lift">
                    <div class="card-body">
                        <div class="impact-icon mb-4">
                            <div class="avatar avatar-xl avatar-info rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-hospital fs-1 text-white"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-info mb-2">12</h3>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.health_centers') ?? 'Centres de santé' }}</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar bg-info" style="width: 78%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card impact-card border-0 shadow-lg text-center p-4 h-100 hover-lift">
                    <div class="card-body">
                        <div class="impact-icon mb-4">
                            <div class="avatar avatar-xl avatar-warning rounded-circle d-flex align-items-center justify-content-center mx-auto">
                                <i class="fas fa-hand-holding-usd fs-1 text-white"></i>
                            </div>
                        </div>
                        <h3 class="fw-bold text-warning mb-2">$2.5M</h3>
                        <p class="text-muted mb-0 fw-semibold">{{ __('messages.funds_raised') ?? 'Fonds mobilisés' }}</p>
                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar bg-warning" style="width: 95%"></div>
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
            <h2 class="display-4 fw-bold mb-4">{{ __('messages.join_us') }}</h2>
            <p class="lead mb-4 fs-5">{{ __('messages.your_support_difference') ?? 'Votre soutien peut faire la différence dans la vie de milliers de personnes.' }}</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="{{ route('donate') }}" class="btn btn-warning btn-lg px-5 py-3 shadow-lg animate-pulse">
                    <i class="fas fa-hand-holding-heart me-2"></i>{{ __('messages.donate') }}
                </a>
                <a href="{{ route('volunteer') }}" class="btn btn-outline-light btn-lg px-5 py-3">
                    <i class="fas fa-users me-2"></i>{{ __('messages.volunteer') }}
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg px-5 py-3">
                    <i class="fas fa-envelope me-2"></i>{{ __('messages.contact_us') }}
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
@endsection
