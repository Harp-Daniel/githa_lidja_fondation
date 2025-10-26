@extends('layouts.public')

@section('title', 'À propos - Fondation GITHA LIDJA')

@section('content')
<!-- Hero Section -->
<section class="hero-section bg-gradient-primary text-white py-5">
    <div class="container-fluid px-4">
        <div class="row align-items-center min-vh-50">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold mb-4">À propos de la Fondation GITHA LIDJA</h1>
                <p class="lead mb-4 fs-5">Découvrez notre mission, notre vision et notre histoire</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="h1 text-primary mb-4">Notre Mission</h2>
                                <div class="mission-content">
                                    {!! $missionVision ? nl2br(e($missionVision->mission)) : '<p class="text-muted">Contenu en cours de préparation...</p>' !!}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('assets/images/mission-icon.png') }}" alt="Mission" class="img-fluid rounded-3 shadow">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-lg-4 order-lg-2">
                                <img src="{{ asset('assets/images/vision-icon.png') }}" alt="Vision" class="img-fluid rounded-3 shadow">
                            </div>
                            <div class="col-lg-8 order-lg-1">
                                <h2 class="h1 text-success mb-4">Notre Vision</h2>
                                <div class="vision-content">
                                    {!! $missionVision ? nl2br(e($missionVision->vision)) : '<p class="text-muted">Contenu en cours de préparation...</p>' !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Histoire Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <h2 class="h1 text-warning mb-4 text-center">Notre Histoire</h2>
                        <div class="histoire-content">
                            {!! $missionVision ? nl2br(e($missionVision->history)) : '<p class="text-muted text-center">Contenu en cours de préparation...</p>' !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Équipe Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="h1 text-primary mb-5 text-center">Notre Équipe</h2>
                @if($missionVision && $missionVision->team)
                    <div class="row">
                        @foreach($missionVision->team as $member)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card border-0 shadow-lg h-100">
                                <div class="card-body p-4 text-center">
                                    @if(isset($member['photo']) && $member['photo'])
                                        <img src="{{ Storage::url($member['photo']) }}" alt="{{ $member['name'] }}" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                                    @else
                                        <div class="avatar-lg mx-auto mb-3">
                                            <div class="avatar-title rounded-circle bg-primary text-white fs-2">
                                                {{ substr($member['name'], 0, 1) }}
                                            </div>
                                        </div>
                                    @endif
                                    <h5 class="card-title">{{ $member['name'] }}</h5>
                                    <p class="text-primary fw-bold mb-2">{{ $member['position'] }}</p>
                                    @if(isset($member['email']) && $member['email'])
                                        <p class="text-muted small mb-1"><i class="fas fa-envelope me-1"></i>{{ $member['email'] }}</p>
                                    @endif
                                    @if(isset($member['phone']) && $member['phone'])
                                        <p class="text-muted small"><i class="fas fa-phone me-1"></i>{{ $member['phone'] }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center">
                        <p class="text-muted">Équipe en cours de constitution...</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container text-center">
        <h2 class="h1 mb-4">Rejoignez-nous dans notre mission</h2>
        <p class="lead mb-4">Ensemble, nous pouvons faire la différence dans la vie de nombreuses personnes.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('donate') }}" class="btn btn-warning btn-lg px-4 py-3">
                <i class="fas fa-hand-holding-heart me-2"></i>Faire un don
            </a>
            <a href="{{ route('volunteer') }}" class="btn btn-outline-light btn-lg px-4 py-3">
                <i class="fas fa-users me-2"></i>Devenir bénévole
            </a>
        </div>
    </div>
</section>
@endsection
