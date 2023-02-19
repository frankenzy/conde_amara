@extends('layouts.template')


@section('content')
    <div class="row">


    </div>
    <div class="row mt-4">

    </div>
    <div class="row mb-4">
        <div class="col-lg-12 col-md-10 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-6 col-7">
                            <h6>Projects</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-check text-info" aria-hidden="true"></i>
                                <span class="font-weight-bold ms-1">{{ _("projet") }}</span> du mois
                            </p>
                        </div>
                        <div class="col-lg-6 col-5 my-auto text-end">
                            <div class="dropdown float-lg-end pe-4">
                                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-ellipsis-v text-secondary"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
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
@endsection
