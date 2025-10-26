@extends('layouts.admin.app')

@section('title', 'Mon Profil')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card overflow-hidden">
            <div class="bg-primary-subtle">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-4">
                            <h5 class="text-primary">Mon Profil</h5>
                            <p>Gérez vos informations personnelles</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{ asset('assets/images/profile-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="auth-logo">
                    <a href="{{ url('/') }}" class="auth-logo-light">
                        <div class="avatar-md profile-user-wid mb-4">
                            <span class="avatar-title rounded-circle bg-light">
                                <img src="{{ asset('assets/images/logo-light.svg') }}" alt="" class="rounded-circle" height="34">
                            </span>
                        </div>
                    </a>

                    <a href="{{ url('/') }}" class="auth-logo-dark">
                        <div class="avatar-md profile-user-wid mb-4">
                            <span class="avatar-title rounded-circle bg-light">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="" class="rounded-circle" height="34">
                            </span>
                        </div>
                    </a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="p-2">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Nom complet</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', Auth::user()->email) }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone', Auth::user()->phone) }}">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="social_links" class="form-label">Liens sociaux (JSON)</label>
                            <textarea class="form-control @error('social_links') is-invalid @enderror" id="social_links" name="social_links" rows="3" placeholder='{"facebook": "https://facebook.com/username", "twitter": "https://twitter.com/username"}'>{{ old('social_links', Auth::user()->social_links) }}</textarea>
                            @error('social_links')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Format JSON pour les liens sociaux (optionnel)</div>
                        </div>

                        <div class="mt-3 d-grid">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">Mettre à jour le profil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="mt-5 text-center">
            <p>© <script>document.write(new Date().getFullYear())</script> Fondation GITHA LIDJA. Développé avec <i class="mdi mdi-heart text-danger"></i></p>
        </div>
    </div>
</div>
@endsection
