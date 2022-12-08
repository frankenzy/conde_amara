{{-- PROJETS --}}

@extends('layouts.template')

@push('style')

@endpush

@section('content')
    <div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div
                            class="row bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 d-flex justify-content-around">
                            <div class="col">
                                <h6 class="text-white text-capitalize ps-3">TYPE PROJET</h6>
                            </div>
                            <div class="col">

                            </div>
                            <div class="col">
                                <h6 class="text-white text-capitalize ps-3">
                                    <i class="fa fa-plus-circle" aria-hidden="true"></i>

                                    <a href="{{ Route('typeProjet.create') }}" class="text-white text-capitalize">
                                        Nouveau TYPE
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
                                            Libelle</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Domaine</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">
                                            Status</th>

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                            Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($type_projets as $type)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2">
                                                    <div>
                                                        <img src="../assets/img/small-logos/logo-asana.svg"
                                                            class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">{{ $type->libelle }}</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm font-weight-bold mb-0">{{ $type->domaine }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span class="me-2 text-xs font-weight-bold">{{rand(30,100)}}%</span>
                                                    <div>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-gradient-info" role="progressbar"
                                                                aria-valuenow="{{rand(30,100)}}" aria-valuemin="0" aria-valuemax="100"
                                                                style="width: 60%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">

                                                <form class="float-end" action="{{ route('typeProjet.destroy', $type->id) }}"
                                                    method="Post">
                                                    @csrf
                                                    {{-- <a class="btn btn-success"
                                                        href="{{ route('typeProjet.show', $type->id) }}">Voir</a> --}}
                                                    <a class="btn btn-warning"
                                                        href="{{ route('typeProjet.edit', $type->id) }}">Edit</a>
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
