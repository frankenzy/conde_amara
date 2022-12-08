{{-- add fournisseur de projets --}}

@extends('layouts.template')

{{-- add style --}}
@push('style')
@endpush


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Ajouter') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('fournisseur.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text"
                                        class="border ps-2 form-control @error('nom') is-invalid @enderror" name="nom"
                                         required autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="prenom"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                                <div class="col-md-6">
                                    <input id="prenom" type="text"
                                        class="border ps-2 form-control @error('tri') is-invalid @enderror" name="prenom"
                                        required>

                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                        class="border ps-2 form-control @error('tri') is-invalid @enderror" name="email"
                                        required>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="contact"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Contact') }}</label>

                                <div class="col-md-6">
                                    <input id="contact" type="text"
                                        class="border ps-2 form-control @error('tri') is-invalid @enderror" name="contact"
                                        required>

                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Creer') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- add script --}}

@push('script')
@endpush
