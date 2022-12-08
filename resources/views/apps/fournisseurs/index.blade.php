{{-- fournisseur de projet --}}

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
                            <h6 class="text-white text-capitalize ps-3">{{ __('Fournisseur') }}</h6>
                        </div>
                        <div class="col">

                        </div>
                        <div class="col">
                            <h6 class="text-white text-capitalize ps-3">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>

                                <a href="{{ Route('fournisseur.create') }}" class="text-white text-capitalize">
                                    {{ __('Nouveau') }}
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Porteur') }}
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        {{ __('Function') }}</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('contact') }}</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        {{ __('Action') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fournisseurs as $fournisseur)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/avatar.jpeg"
                                                        class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="text-xs text-secondary mb-0">{{ $fournisseur->nom }}</>
                                                    <h5 class="mb-0 text-sm">{{ $fournisseur->prenom }}</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">{{ $fournisseur->contact }}</span>
                                            <p class="text-muted">{{ $fournisseur->email }}</p>
                                        </td>

                                        <td class="align-middle">

                                            <form class="float-end"
                                                action="{{ route('fournisseur.destroy', $fournisseur->id) }}" method="Post">
                                                @csrf

                                                {{-- show --}}
                                                <a class="btn btn-success"
                                                    href="{{ Route('fournisseur.show', $fournisseur->id) }}">Voir</a>

                                                {{-- edit --}}
                                                <a class="btn btn-warning"
                                                    href="{{ Route('fournisseur.edit', $fournisseur->id) }}">Edit</a>
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
