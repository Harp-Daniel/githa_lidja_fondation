@extends('layouts.app')

@section('title', 'Gestion de la Vision')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier la Vision</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.vision.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="vision" class="form-label">Vision de la Fondation</label>
                        <textarea class="form-control @error('vision') is-invalid @enderror"
                                  id="vision"
                                  name="vision"
                                  rows="6"
                                  placeholder="Décrivez la vision de la Fondation GITHA LIDJA...">{{ old('vision', $missionVision->vision ?? '') }}</textarea>
                        @error('vision')
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
