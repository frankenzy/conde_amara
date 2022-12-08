{{-- add porteur de projets --}}

@extends('layouts.template')

{{-- add style --}}
@push('style')
@endpush


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('MODIFIER') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('porteurProjet.update',$porteur->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text"
                                        class="border ps-2 form-control @error('nom') is-invalid @enderror" name="nom"
                                        value="{{ $porteur->nom }}" required autofocus>

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
                                        required value="{{ $porteur->prenom }}">

                                    @error('prenom')
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
                                        required value="{{ $porteur->contact }}">

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
                                        {{ __('MODIFIER') }}
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
