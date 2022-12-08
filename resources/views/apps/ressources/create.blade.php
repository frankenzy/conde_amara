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
                    <div class="card-header">{{ __('Ajouter Ressources') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('ressource.store') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="fournisseur_id"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Fournisseur de ressource') }}</label>

                                <div class="col-md-6">
                                    <select id="fournisseur_id"
                                        class="border form-select ps-2 form-control @error('type') is-invalid @enderror"
                                        name="fournisseur_id" value="{{ old('fournisseur_id') }}" required
                                        autocomplete="fournisseur_id" autofocus aria-label="Default select example">
                                        <option selected>Fournisseur</option>
                                        @foreach ($fournisseurs as $fournisseur)
                                            <option value="{{ $fournisseur->id }}"> {{ $fournisseur->nom. ' ' .$fournisseur->prenom }}</option>
                                        @endforeach


                                    </select>

                                    @error('fournisseur_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="type"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Type de ressource') }}</label>

                                <div class="col-md-6">
                                    <select id="type"
                                        class="border form-select ps-2 form-control @error('type') is-invalid @enderror"
                                        name="type" value="{{ old('type') }}" required autocomplete="type" autofocus
                                        aria-label="Default select example">
                                        <option selected>Type de Ressource</option>
                                        <option value="humain">Humaine</option>
                                        <option value="materiel">Materielle</option>

                                    </select>

                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nom"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nom(titre)') }}</label>

                                <div class="col-md-6">
                                    <input id="nom" type="text"
                                        class="border ps-2 form-control @error('nom') is-invalid @enderror" name="libelle"
                                        value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="quantite"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nombre(quantité)') }}</label>

                                <div class="col-md-6">
                                    <input id="quantite" type="text"
                                        class="border ps-2 form-control @error('quantite') is-invalid @enderror"
                                        name="quantite" required autocomplete="quantite">

                                    @error('quantite')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="montant"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Montant/budget') }}</label>

                                <div class="col-md-6">
                                    <input id="montant" type="text"
                                        class="border ps-2 form-control @error('montant') is-invalid @enderror"
                                        name="montant" required autocomplete="montant">

                                    @error('montant')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enregistrer') }}
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
