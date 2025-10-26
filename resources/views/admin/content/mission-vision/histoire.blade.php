@extends('layouts.app')

@section('title', 'Gestion de l\'Histoire')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Modifier l'Histoire</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.histoire.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="history" class="form-label">Histoire de la Fondation</label>
                        <textarea class="form-control @error('history') is-invalid @enderror"
                                  id="history"
                                  name="history"
                                  rows="10"
                                  placeholder="Racontez l'histoire de la Fondation GITHA LIDJA, ses origines, son évolution...">{{ old('history', $missionVision->history ?? '') }}</textarea>
                        @error('history')
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
