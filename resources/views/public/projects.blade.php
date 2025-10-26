@extends('layouts.public')

@section('title', 'Nos Projets')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Accueil</a></li>
                        <li class="breadcrumb-item active">Projets</li>
                    </ol>
                </div>
                <h4 class="page-title">Nos Projets</h4>
            </div>
        </div>
    </div>

    <div class="row">
        @forelse($projects ?? [] as $project)
        <div class="col-lg-4 col-md-6">
            <div class="card">
                @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ Str::limit($project->description, 150) }}</p>

                    @if($project->status)
                    <span class="badge badge-{{ $project->status == 'completed' ? 'success' : ($project->status == 'in_progress' ? 'primary' : ($project->status == 'planned' ? 'secondary' : 'warning')) }}">
                        {{ $project->status == 'completed' ? 'Terminé' : ($project->status == 'in_progress' ? 'En cours' : ($project->status == 'planned' ? 'Planifié' : 'En pause')) }}
                    </span>
                    @endif

                    @if($project->results)
                    <div class="mt-3">
                        <h6>Résultats:</h6>
                        <p class="text-muted">{{ $project->results }}</p>
                    </div>
                    @endif

                    @if($project->location)
                    <p class="card-text"><small class="text-muted"><i class="fas fa-map-marker-alt"></i> {{ $project->location }}</small></p>
                    @endif

                    @if($project->start_date || $project->end_date)
                    <p class="card-text">
                        <small class="text-muted">
                            @if($project->start_date) Du {{ \Carbon\Carbon::parse($project->start_date)->format('d/m/Y') }} @endif
                            @if($project->end_date) au {{ \Carbon\Carbon::parse($project->end_date)->format('d/m/Y') }} @endif
                        </small>
                    </p>
                    @endif

                    @if($project->video)
                    <a href="{{ $project->video }}" target="_blank" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-video"></i> Voir la vidéo
                    </a>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="text-center">
                <h4>Aucun projet disponible pour le moment.</h4>
                <p>Veuillez revenir plus tard pour découvrir nos projets à venir.</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection
