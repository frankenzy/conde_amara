@extends('layouts.template')


@push('style')
@endpush


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('CREER UN NOUVEAU TYPE') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('typeProjet.store') }}">
                            @csrf


                            @foreach(old('libelle', isset($type) ? $types->libelle : []) as $key => $libelle)
                                <div class="row mb-3">
                                    <label for="libelle"
                                        class="col-md-4 col-form-label text-md-end">{{ __('libelle') }}</label>

                                    <div class="col-md-6">
                                        <input id="libelle" type="text"
                                            class="border form-control @error('libelle') is-invalid @enderror"
                                            name="libelle" value="{{ old('libelle') }}" required autocomplete="libelle"
                                            autofocus>

                                        @error('libelle')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="domaine"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Domaine activité') }}</label>

                                    <div class="col-md-6">
                                        <input id="domaine" type="domaine"
                                            class="border form-control @error('domaine') is-invalid @enderror" name="domaine"
                                            value="{{ old('domaine') }}" required autocomplete="domaine">

                                        @error('domaine')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach



                            {{-- ******************************************* --}}


                            <div class="row mb-3">
                                <label for="libelle"
                                    class="col-md-4 col-form-label text-md-end">{{ __('libelle') }}</label>

                                <div class="col-md-6">
                                    <input id="libelle" type="text"
                                        class="border form-control @error('libelle') is-invalid @enderror" name="libelle"
                                        value="{{ old('libelle') }}" required autocomplete="libelle" autofocus>

                                    @error('libelle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="domaine"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Domaine activité') }}</label>

                                <div class="col-md-6">
                                    <input id="domaine" type="domaine"
                                        class="border form-control @error('domaine') is-invalid @enderror" name="domaine"
                                        value="{{ old('domaine') }}" required autocomplete="domaine">

                                    @error('domaine')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- *********************************************** --}}

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('CREER') }}
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


@push('script')
@endpush
