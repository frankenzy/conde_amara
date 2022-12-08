{{-- ressource de projet --}}

@extends('layouts.template')



{{-- add style --}}

@push('style')
@endpush

{{-- end style --}}
@if (session()->has('message'))
    <div class="alert alert-{{ session('notification.type') }}">
        <span>{{ session('notification.message') }}</span>
    </div>
@endif

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div
                        class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-around">
                        <div class="col">
                            <h6 class="text-white text-capitalize ps-3">Ressources</h6>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">
                            <h6 class="text-white text-capitalize ps-3">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>

                                <a href="{{ Route('ressource.create') }}" class="text-white text-capitalize">
                                    Nouveau
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fournisseur
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Type</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Libelle</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Quatite</th>
                                        <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Coût</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($ressources as $ressource)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/avatar.jpeg"
                                                        class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $ressource->fournisseur->nom. ' ' .$ressource->fournisseur->prenom }}</h6>

                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{$ressource->type}}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">{{ $ressource->libelle }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">{{ $ressource->quantite }}</span>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">{{ $ressource->montant }}</span>
                                        </td>

                                        <td class="align-middle">

                                            <form class="float-end" action="{{ route('ressource.destroy', $ressource->id) }}"
                                                method="Post">
                                                @csrf

                                                {{-- show --}}
                                                <a class="btn btn-success" href="{{Route('ressource.show',$ressource->id)}}">Voir</a>

                                                {{-- edit --}}
                                                <a class="btn btn-warning" href="{{Route('ressource.edit',$ressource->id)}}">Edit</a>
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
@endsection
