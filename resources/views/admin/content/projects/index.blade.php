@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gestion des Projets</h4>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Ajouter un Projet
                    </a>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titre</th>
                                    <th>Statut</th>
                                    <th>Image</th>
                                    <th>Actif</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->title }}</td>
                                        <td>
                                            <span class="badge badge-{{ $project->status == 'completed' ? 'success' : ($project->status == 'in_progress' ? 'warning' : 'secondary') }}">
                                                {{ $project->status == 'planned' ? 'Planifié' : ($project->status == 'in_progress' ? 'En cours' : ($project->status == 'completed' ? 'Terminé' : 'En pause')) }}
                                            </span>
                                        </td>
                                        <td>
                                            @if($project->image)
                                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" width="50">
                                            @else
                                                <span class="text-muted">Aucune image</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $project->is_active ? 'success' : 'danger' }}">
                                                {{ $project->is_active ? 'Actif' : 'Inactif' }}
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i> Modifier
                                            </a>
                                            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?')">
                                                    <i class="fas fa-trash"></i> Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Aucun projet trouvé.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
