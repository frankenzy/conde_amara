{{-- PROJETS --}}

@extends('layouts.template')


@section('content')
    <div>

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div
                            class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-around">
                            <div class="col">
                                <h6 class="text-white text-capitalize ps-3">Projets</h6>
                            </div>
                            <div class="col">

                            </div>
                            <div class="col">
                                <h6 class="text-white text-capitalize ps-3">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>

                                    <a href="{{ Route('projet.create') }}" class="text-white text-capitalize">
                                        Nouveau Projet
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nom</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Type</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            {{ __('Porteur du projet') }}</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            {{ __('Budget') }}</th>


                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            {{ __('Durée') }}</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            {{ __('Gain par an') }}</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            {{ __('Status') }}</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            {{ __('Actions') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projets as $p)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-asana.svg"
                                                            class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $p->nom }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">
                                                @if ($p->typeProjet)
                                                    {{$p->typeProjet->libelle}}
                                                @else
                                                   {{"Delfault"}}
                                                @endif</p>
                                            </td>


                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $p->porteurProjet->prenom }}
                                                </p>
                                            </td>

                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $p->budget }}</p>
                                            </td>


                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $p->duree }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $p->gain_annuelle }}</p>
                                            </td>

                                            <td>

                                                <span class="badge text-bg-secondary text-xs font-weight-bold">{{ $p->status }}</span>

                                            </td>

                                            <td class="align-middle">
                                                <form class="float-end"
                                                    action="{{ route('projet.destroy', $p->id) }}"
                                                    method="Post">
                                                    @csrf

                                                    {{-- show --}}
                                                    <a class="btn btn-success"
                                                        href="{{ Route('projet.show', $p->id) }}">Voir</a>


                                                    {{-- delete --}}
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var myDropdown = document.getElementById('myDropdown')
        myDropdown.addEventListener('show.bs.dropdown', function() {
            // do something...
        })
    </script>
@endpush
