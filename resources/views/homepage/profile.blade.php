@extends('layouts.main')
@section('container')
    <!--hero section start-->

    <section class="position-relative overflow-hidden">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="mb-3">Profile</h1>
                </div>
            </div>
            <!-- / .row -->
        </div>

        <!-- / .container -->
        <div class="position-absolute animation-1">
            <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
                background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
            </lottie-player>
        </div>
    </section>

    <!--hero section end-->

    <!--body content start-->

    <div class="page-content">

        <!--team details start-->

        <section class="bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12">
                        <div class="shadow p-4 bg-white rounded-4">
                            <img class="img-fluid w-100 rounded-4" src="/images/team/01.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 mt-5 mt-lg-0 ps-lg-6">
                        <div class="team-description">
                            <h2 class="mb-3">{{ $user->name }}
                            </h2>
                            @auth
                                <button class="button btn-primary">EDIT</button>
                            @endauth
                            <p class="lead my-3 text-dark">{{ $user->description }}</p>
                            <div class="team-cntct d-flex justify-content-between">
                                <ul class="media-icon list-unstyled font-w-5">
                                    <li class="mb-2">
                                        <i class="text-primary fs-4 align-middle bi bi-envelope me-2"></i>
                                        <a class="btn-link" href="{{ $user->email }}">{{ $user->email }}</a>
                                    </li>
                                    <li>
                                        <i class="text-primary fs-4 align-middle bi bi-telephone me-2"></i>
                                        <a class="btn-link" href="{{ $user->no_hp }}">{{ $user->no_hp }}</a>
                                    </li>
                                </ul>
                                <div>
                                    <h6>Follow Me:</h6>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a class="border rounded px-2 py-1 text-dark" href="{{ $user->facebook }}">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="border rounded px-2 py-1 text-dark" href="{{ $user->instagram }}">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="border rounded px-2 py-1 text-dark" href="{{ $user->github }}">
                                                <i class="bi bi-github"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--team details end-->

        <!--team start-->

        <section>
            <div class="container">
                <div class="row justify-content-center text-center mb-6">
                    <div class="col-12 col-lg-8">
                        <div>
                            <h2>{{ $user->name }}'s Creations</h2>
                            <p class="lead mb-0">We are a team of experienced developers who are passionate about their
                                work. No coding required to make customizations.</p>
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row">
                    @foreach ($creations as $creation)
                        <div class="col-12 col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <div class="hover-translate bg-white shadow px-3 pt-4 pb-5 mb-5 rounded-4">
                                <div class="d-flex align-items-center">
                                    {{-- <h6 class="mb-0 me-2"><a class="btn-link" href="team-single.html">{{ $creation->title }}</a></h6> --}}
                                    
                                </div>
                                <div class="mt-3 mb-4">
                                    <img class="img-fluid rounded-4" src="/images/team/01.jpg" alt="">
                                </div>
                                <span class="text-muted">- {{ $creation->categories_name }}</span>
                                <p>{{ $creation->title }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--team end-->
    @endsection
