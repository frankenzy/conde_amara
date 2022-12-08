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
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-3" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                                        alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                                        <div class="row pt-1">
                                            <form class="float-end" action="{{ route('porteurProjet.destroy', $porteur_projet->id) }}"
                                                method="Post">
                                                @csrf
                                                {{-- edit --}}
                                                <a class="btn btn-warning" href="{{Route('porteurProjet.edit',$porteur_projet->id)}}">Modifier</a>
                                                {{-- delete --}}
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    <i class="far fa-edit mb-5"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body p-4">
                                        <h6>Information</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>{{ $porteur_projet->nom }}</h6>
                                                <p class="text-muted">{{ $porteur_projet->prenom }}</p>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Contact</h6>
                                                <p class="text-muted">{{ $porteur_projet->contact }}</p>
                                            </div>
                                        </div>
                                        <hr class="border bg-red">
                                        <h6>Projets</h6>
                                        <hr class="mt-0 mb-4">
                                        <div class="row pt-1">
                                            <div class="col-6 mb-3">
                                                <h6>Recent</h6>
                                                @foreach ($last as $l )
                                                <p class="text-muted">{{ ''}}</p>
                                                @endforeach
                                            </div>
                                            <div class="col-6 mb-3">
                                                <h6>Total</h6>

                                                <p class="text-muted">{{ $total}}</p>

                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-start">
                                            <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                            <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                            <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                        </div>
                                    </div>
                                </div>
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
