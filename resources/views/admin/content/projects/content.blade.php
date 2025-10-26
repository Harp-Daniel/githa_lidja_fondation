@extends('layouts.admin.app')

@section('title', 'Gestion du Contenu des Projets')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Nouveau Projet
                    </a>
                </div>
                <h4 class="page-title">Gestion du Contenu des Projets</h4>
            </div>
        </div>
    </div>

    <!-- Success/Error Messages -->
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="header-title">Projets Publiés</h4>
                    <p class="text-muted mb-0">Ces projets sont automatiquement affichés sur la page publique</p>
                </div>
                <div class="card-body">
                    @if($projects->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-centered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Résultats</th>
                                    <th>Statut</th>
                                    <th>Publié</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                <tr>
                                    <td>
                                        @if($project->image)
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="img-thumbnail" width="60">
                                        @else
                                        <div class="bg-light rounded p-2 text-center" style="width: 60px; height: 60px;">
                                            <i class="fas fa-image text-muted"></i>
                                        </div>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $project->title }}</strong>
                                        @if($project->location)
                                        <br><small class="text-muted"><i class="fas fa-map-marker-alt"></i> {{ $project->location }}</small>
                                        @endif
                                    </td>
                                    <td>{{ Str::limit($project->description, 100) }}</td>
                                    <td>
                                        @if($project->results)
                                        <span class="badge badge-success">✓</span>
                                        {{ Str::limit($project->results, 50) }}
                                        @else
                                        <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge badge-{{ $project->status == 'completed' ? 'success' : ($project->status == 'in_progress' ? 'primary' : ($project->status == 'planned' ? 'secondary' : 'warning')) }}">
                                            {{ $project->status == 'completed' ? 'Terminé' : ($project->status == 'in_progress' ? 'En cours' : ($project->status == 'planned' ? 'Planifié' : 'En pause')) }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($project->is_active)
                                        <span class="badge badge-success">Publié</span>
                                        @else
                                        <span class="badge badge-secondary">Brouillon</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-outline-info" onclick="previewProject({{ $project->id }})">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="text-center py-5">
                        <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                        <h4>Aucun projet trouvé</h4>
                        <p class="text-muted">Commencez par créer votre premier projet.</p>
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Créer un Projet
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="row">
        <div class="col-md-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-right">
                        <i class="fas fa-project-diagram widget-icon bg-primary"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0">Total Projets</h5>
                    <h3 class="mt-3 mb-0">{{ $projects->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-right">
                        <i class="fas fa-check-circle widget-icon bg-success"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0">Terminés</h5>
                    <h3 class="mt-3 mb-0">{{ $projects->where('status', 'completed')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-right">
                        <i class="fas fa-clock widget-icon bg-warning"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0">En Cours</h5>
                    <h3 class="mt-3 mb-0">{{ $projects->where('status', 'in_progress')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card widget-flat">
                <div class="card-body">
                    <div class="float-right">
                        <i class="fas fa-eye widget-icon bg-info"></i>
                    </div>
                    <h5 class="text-muted font-weight-normal mt-0">Publiés</h5>
                    <h3 class="mt-3 mb-0">{{ $projects->where('is_active', true)->count() }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Preview Modal -->
<div class="modal fade" id="previewModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Aperçu du Projet</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body" id="previewContent">
                <!-- Content will be loaded here -->
            </div>
        </div>
    </div>
</div>

<script>
function previewProject(projectId) {
    // This would typically make an AJAX call to get project preview
    // For now, we'll redirect to the public projects page
    window.open('/projects', '_blank');
}
</script>
@endsection
