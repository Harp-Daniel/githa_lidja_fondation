@extends('layouts.app')

@section('title', 'Gestion de la Mission')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier la Mission</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.mission.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="mission" class="form-label">Mission de la Fondation</label>
                        <textarea class="form-control @error('mission') is-invalid @enderror"
                                  id="mission"
                                  name="mission"
                                  rows="6"
                                  placeholder="Décrivez la mission de la Fondation GITHA LIDJA...">{{ old('mission', $missionVision->mission ?? '') }}</textarea>
                        @error('mission')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
