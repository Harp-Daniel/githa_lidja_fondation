@extends('layouts.public')

@section('title', 'Actualités - Fondation GITHA LIDJA')

@section('content')
<!-- Page Header -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Actualités</h1>
                <p class="lead">Restez informé de nos actions et de notre impact</p>
            </div>
        </div>
    </div>
</section>

<!-- News Grid -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Featured News -->
            <div class="col-12 mb-5">
                <div class="card border-0 shadow-lg">
                    <div class="row g-0">
                        <div class="col-lg-8">
                            <img src="{{ asset('assets/images/news-featured.jpg') }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="Actualité principale" style="min-height: 400px;">
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body d-flex flex-column h-100 p-4">
                                <div class="mb-3">
                                    <span class="badge bg-primary mb-2">Éducation</span>
                                    <span class="text-muted small">25 Octobre 2024</span>
                                </div>
                                <h3 class="card-title fw-bold">Inauguration de la nouvelle école de Bukavu</h3>
                                <p class="card-text">Une nouvelle école primaire moderne équipée pour accueillir 300 enfants a été inaugurée aujourd'hui dans la commune de Bukavu. Ce projet, financé par nos généreux donateurs, représente un pas important vers l'éducation pour tous.</p>
                                <div class="mt-auto">
                                    <a href="#" class="btn btn-primary">Lire l'article complet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Articles -->
            <div class="col-lg-8">
                <div class="row">
                    <!-- Article 1 -->
                    <div class="col-12 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/news-1.jpg') }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="Actualité">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <span class="badge bg-success me-2">Santé</span>
                                            <span class="text-muted small">20 Octobre 2024</span>
                                        </div>
                                        <h5 class="card-title">Campagne de vaccination réussie à Goma</h5>
                                        <p class="card-text">Notre équipe médicale a vacciné plus de 800 enfants contre la polio et d'autres maladies évitables lors de notre campagne mobile dans la région de Goma.</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Article 2 -->
                    <div class="col-12 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/news-2.jpg') }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="Actualité">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <span class="badge bg-warning me-2">Agriculture</span>
                                            <span class="text-muted small">18 Octobre 2024</span>
                                        </div>
                                        <h5 class="card-title">Formation agricole pour 150 femmes</h5>
                                        <p class="card-text">Plus de 150 femmes agricultrices ont bénéficié d'une formation intensive sur les techniques agricoles durables et la gestion des coopératives.</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Article 3 -->
                    <div class="col-12 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/news-3.jpg') }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="Actualité">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <span class="badge bg-info me-2">Communauté</span>
                                            <span class="text-muted small">15 Octobre 2024</span>
                                        </div>
                                        <h5 class="card-title">Nouveau partenariat avec l'UNESCO</h5>
                                        <p class="card-text">La Fondation GITHA LIDJA signe un partenariat stratégique avec l'UNESCO pour développer des programmes éducatifs innovants.</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Article 4 -->
                    <div class="col-12 mb-4">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('assets/images/news-4.jpg') }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="Actualité">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="mb-2">
                                            <span class="badge bg-danger me-2">Urgent</span>
                                            <span class="text-muted small">12 Octobre 2024</span>
                                        </div>
                                        <h5 class="card-title">Appel d'urgence pour les inondations</h5>
                                        <p class="card-text">Face aux récentes inondations dans la province du Nord-Kivu, nous lançons un appel à la solidarité internationale pour aider les populations affectées.</p>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Lire la suite</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Pagination des actualités" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Précédent</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Suivant</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Categories -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-light">
                        <h5 class="card-title mb-0">Catégories</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none">Éducation</a>
                                <span class="badge bg-primary rounded-pill">12</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none">Santé</a>
                                <span class="badge bg-success rounded-pill">8</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none">Agriculture</a>
                                <span class="badge bg-warning rounded-pill">6</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none">Communauté</a>
                                <span class="badge bg-info rounded-pill">10</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                <a href="#" class="text-decoration-none">Urgences</a>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Recent Posts -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-light">
                        <h5 class="card-title mb-0">Articles récents</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex mb-3">
                            <img src="{{ asset('assets/images/news-thumb-1.jpg') }}" alt="" class="me-3 rounded" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h6 class="mb-1"><a href="#" class="text-decoration-none">Distribution de kits scolaires</a></h6>
                                <small class="text-muted">22 Oct 2024</small>
                            </div>
                        </div>
                        <div class="d-flex mb-3">
                            <img src="{{ asset('assets/images/news-thumb-2.jpg') }}" alt="" class="me-3 rounded" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h6 class="mb-1"><a href="#" class="text-decoration-none">Journée mondiale de l'alimentation</a></h6>
                                <small class="text-muted">20 Oct 2024</small>
                            </div>
                        </div>
                        <div class="d-flex">
                            <img src="{{ asset('assets/images/news-thumb-3.jpg') }}" alt="" class="me-3 rounded" style="width: 60px; height: 60px; object-fit: cover;">
                            <div>
                                <h6 class="mb-1"><a href="#" class="text-decoration-none">Réunion des partenaires</a></h6>
                                <small class="text-muted">18 Oct 2024</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter -->
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">Newsletter</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-3">Restez informé de nos dernières actualités et projets.</p>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Votre email" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Vous souhaitez nous aider ?</h2>
        <p class="lead mb-4">Rejoignez notre communauté de donateurs et de bénévoles pour un impact durable.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('donate') }}" class="btn btn-light btn-lg">Faire un don</a>
            <a href="{{ route('volunteer') }}" class="btn btn-outline-light btn-lg">Devenir bénévole</a>
        </div>
    </div>
</section>
@endsection
