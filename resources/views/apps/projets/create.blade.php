@extends('layouts.template')

@push('style')
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
@endpush


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('projet.store') }}">
                            @csrf
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <div class="row mb-3">
                                        <label for="nom"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Nom du projet') }}</label>

                                        <div class="col-md-6">
                                            <input id="nom" type="text"
                                                class="border ps-2 form-control @error('nom') is-invalid @enderror"
                                                name="nom" value="{{ old('nom') }}" required autocomplete="nom"
                                                autofocus>

                                            @error('nom')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- porteur_projets --}}
                                    <div class="row mb-3">
                                        <label for="porteur_projets"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Porteur projet') }}</label>

                                        <div class="col-md-6">

                                            <select id="porteur_projet_id"
                                                class="form-select border ps-2 form-control @error('porteur_projet_id') is-invalid @enderror"
                                                name="porteur_projet_id" required autocomplete="porteur_projet_id"
                                                aria-label="Porteur du projet">
                                                <option selected>
                                                    {{ __('Porteur du projet') }}
                                                </option>
                                                @foreach ($porteur_projets as $p)
                                                    <option value="{{ $p->id }}" @selected(old('porteur_projet_id') == $p->nom)>
                                                        {{ $p->nom, $p->prenom }}
                                                    </option>
                                                @endforeach

                                            </select>


                                            @error('porteur_projets')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- type_projets --}}
                                    <div class="row mb-3">
                                        <label for="type_projet_id"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Type de projet') }}</label>

                                        <div class="col-md-6">

                                            <select id="type_projet_id"
                                                class="form-select border ps-2 form-control @error('type_projet_id') is-invalid @enderror"
                                                name="type_projet_id" required autocomplete="typeProjet_id">
                                                <option selected>{{ __('type de projet') }}</option>
                                                @foreach ($type_projets as $t)
                                                    <option value="{{ $t->id }}" @selected(old('type_projet_id') == $t->libelle)>
                                                        {{ $t->libelle }}

                                                    </option>
                                                @endforeach

                                            </select>

                                            @error('type_projets')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    {{-- budget --}}
                                    <div class="row mb-3">
                                        <label for="budget"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Budget') }}</label>

                                        <div class="col-md-6">
                                            <input id="budget" type="number"
                                                class="border ps-2 form-control @error('budget') is-invalid @enderror"
                                                name="budget" value="{{ old('budget') }}" required autocomplete="budget">

                                            @error('budget')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="debut_projet"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Debut de projet') }}</label>

                                        <div class="col-md-6">
                                            <input id="debut_projet" type="date"
                                                class="border ps-2 form-control @error('debut_projet') is-invalid @enderror"
                                                name="debut_projet" required autocomplete="debut_projet"
                                                value="{{ old('debut_projet') }}">


                                            @error('debut_projet')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- debut projet --}}
                                    <div class="row mb-3">
                                        <label for="fin_projet"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Fin du projet') }}</label>

                                        <div class="col-md-6">
                                            <input id="fin_projet" type="date"
                                                class="border ps-2 form-control @error('fin_projet') is-invalid @enderror"
                                                name="fin_projet" required autocomplete="fin_projet"
                                                value="{{ old('fin_projet') }}">


                                            @error('fin_projet')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('SOUMETTRE') }}
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
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script>
        const range = new mdb.Range(document.getElementById('range'));
        import {
            Range
        } from 'mdb-ui-kit';

        $('#customRange').on('change', function() {
            console.log("hello")
        })

        function updateTextInput(val) {
            $('#tri').value = val;
        }
    </script>
@endpush
