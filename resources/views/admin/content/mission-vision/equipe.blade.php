@extends('layouts.app')

@section('title', 'Gestion de l\'Équipe')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier l'Équipe</h4>
                <button type="button" class="btn btn-success btn-sm" onclick="addTeamMember()">
                    <i class="fas fa-plus"></i> Ajouter un membre
                </button>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.equipe.update') }}" method="POST" enctype="multipart/form-data" id="teamForm">
                    @csrf
                    @method('PUT')

                    <div id="teamMembers">
                        @if($missionVision && $missionVision->team)
                            @foreach($missionVision->team as $index => $member)
                            <div class="team-member mb-3 p-3 border rounded" data-index="{{ $index }}">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label class="form-label">Nom</label>
                                        <input type="text" class="form-control" name="team[{{ $index }}][name]" value="{{ $member['name'] ?? '' }}" placeholder="Nom du membre">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Poste</label>
                                        <input type="text" class="form-control" name="team[{{ $index }}][position]" value="{{ $member['position'] ?? '' }}" placeholder="Poste occupé">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="team[{{ $index }}][email]" value="{{ $member['email'] ?? '' }}" placeholder="Email">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Téléphone</label>
                                        <input type="text" class="form-control" name="team[{{ $index }}][phone]" value="{{ $member['phone'] ?? '' }}" placeholder="Téléphone">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Photo</label>
                                        <input type="file" class="form-control" name="team[{{ $index }}][photo]" accept="image/*">
                                        @if(isset($member['photo']) && $member['photo'])
                                            <img src="{{ asset($member['photo']) }}" alt="Photo" class="img-thumbnail mt-2" style="width: 50px; height: 50px;">
                                        @endif
                                    </div>
                                    <div class="col-md-1 d-flex align-items-end">
                                        <button type="button" class="btn btn-danger btn-sm" onclick="removeTeamMember(this)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Enregistrer l'équipe
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
let memberIndex = {{ $missionVision && $missionVision->team ? count($missionVision->team) : 0 }};

function addTeamMember() {
    const container = document.getElementById('teamMembers');
    const memberHtml = `
        <div class="team-member mb-3 p-3 border rounded" data-index="${memberIndex}">
            <div class="row">
                <div class="col-md-2">
                    <label class="form-label">Nom</label>
                    <input type="text" class="form-control" name="team[${memberIndex}][name]" placeholder="Nom du membre">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Poste</label>
                    <input type="text" class="form-control" name="team[${memberIndex}][position]" placeholder="Poste occupé">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="team[${memberIndex}][email]" placeholder="Email">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Téléphone</label>
                    <input type="text" class="form-control" name="team[${memberIndex}][phone]" placeholder="Téléphone">
                </div>
                <div class="col-md-2">
                    <label class="form-label">Photo</label>
                    <input type="file" class="form-control" name="team[${memberIndex}][photo]" accept="image/*">
                </div>
                <div class="col-md-1 d-flex align-items-end">
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeTeamMember(this)">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
        </div>
    `;
    container.insertAdjacentHTML('beforeend', memberHtml);
    memberIndex++;
}

function removeTeamMember(button) {
    button.closest('.team-member').remove();
}
</script>
@endsection
