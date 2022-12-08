@extends('layouts.template')


@push('style')
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #f6d365;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <section class="vh-100" style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-12 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">

                            <form method="POST" action="{{ route('projet.update', $projet->id) }}">
                                @csrf
                                @method('PUT')


                                <div class="row g-0">
                                    <div class="col-md-4 gradient-custom text-center text-white"
                                        style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                            alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                        <div class="pt-1">

                                            <button type="submit" class="btn btn-primary">
                                                {{ __('mettre à jour') }}
                                            </button>

                                        </div>
                                        <i class="far fa-edit mb-5"></i>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row g-0">
                                            <div class="p-4">
                                                <h6>Informations</h6>
                                                <hr class="mt-0 mb-2">
                                                <div class="row pt-1">
                                                    <div class="col-4 mb-3">
                                                        <h6>Nom:{{ $projet->nom }}
                                                        </h6>
                                                        <p class="text-sm"> Type: {{ $projet->typeProjet->libelle }}</p>
                                                    </div>
                                                    <div class="col-4 mb-3">
                                                        <h6>Budget:<span class="text-muted">{{ $projet->budget }}</span>
                                                        </h6>
                                                        <h6>Domaine:<span
                                                                class="text-muted">{{ $projet->typeProjet->domaine }}</span>
                                                        </h6>
                                                    </div>
                                                    <div class="col-4 mb-3">
                                                        <h6>Status</h6>
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="status">
                                                            <option selected>{{ $projet->status }}</option>
                                                            <option value="VALIDE">VALIDE</option>
                                                            <option value="REJETE">REJETE</option>
                                                            <option value="ATTENTE">ATTENTE</option>
                                                        </select>
                                                    </div>
                                                    <hr class="border bg-red">
                                                    <div class="col-4 mb-0">
                                                        <h6>Porteur: <span
                                                                class="text-muted">{{ $projet->porteurProjet->prenom }}</span>
                                                        </h6>

                                                    </div>
                                                    <div class="col-4 mb-0">
                                                        <h6>Contact: <span
                                                                class="text-muted">{{ $projet->porteurProjet->contact }}</span>
                                                        </h6>

                                                    </div>
                                                </div>
                                                <hr class="border bg-red">
                                                <h6>execution</h6>

                                                <div class="row pt-1">
                                                    <div class="col-4 mb-0">
                                                        <h6>Debut: <span
                                                                class="text-muted">{{ $projet->debut_projet }}</span></h6>

                                                    </div>
                                                    <div class="col-4 mb-3">
                                                        <h6>Fin: <span class="text-muted">{{ $projet->fin_projet }}</span>
                                                        </h6>

                                                    </div>


                                                    <div class="col-4 mb-3">
                                                        <h6>Montant</h6>
                                                        <p class="text-muted">{{ $projet->montant }}</p>
                                                    </div>
                                                </div>

                                                <div class="row pt-1">
                                                    <div class="col-4 mb-3">
                                                        <h6>V.A.N:
                                                            <input id="van" type="number"
                                                class="border ps-2 form-control @error('van') is-invalid @enderror"
                                                name="van" value="{{$projet->van}}" required autocomplete="van">
                                                        </h6>

                                                    </div>

                                                    <div class="col-4 mb-3">
                                                        <h6>TRI:
                                                            <input id="tri" type="number"
                                                class="border ps-2 form-control @error('tri') is-invalid @enderror"
                                                name="tri" value="{{ $projet->tri }}" required autocomplete="tri">
                                                        </h6>

                                                    </div>


                                                    <div class="col-4 mb-3">
                                                        <h6>RENTABILITE</h6>
                                                        <p class="text-muted">{{ $projet->budget }}</p>
                                                    </div>
                                                </div>





                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <div class="row pt-1">
                                <form class="float-end" action="{{ route('projet.destroy', $projet->id) }}" method="Post">
                                    @csrf
                                    {{-- delete --}}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
@endpush
