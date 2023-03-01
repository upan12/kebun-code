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
                            @if ($user->image)
                                <img class="img-fluid w-100 rounded-4" src="{{ asset('storage/' . $user->image) }}"
                                    alt="">
                            @else
                                <img class="img-fluid w-100 rounded-4" src="/images/team/01.jpg" alt="">
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 mt-5 mt-lg-0 ps-lg-6">
                        <div class="team-description">
                            <div class="row">
                                <h2 class="mb-3 ">{{ $user->name }}
                                    @auth

                                        <a class=" btn btn-primary ms-2" href="/profile/edit/{{ $user->code }}">edit</a>
                                    @endauth
                            </div>
                            </h2>


                            <p class="lead my-3 text-dark">{{ $user->description }}</p>
                            <div class="team-cntct d-flex justify-content-between">
                                <ul class="media-icon list-unstyled font-w-5">
                                    <li class="mb-2">
                                        <i class="text-primary fs-4 align-middle bi bi-envelope me-2"></i>
                                        <a class="btn-link" href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                                    </li>
                                    <li>
                                        <i class="text-primary fs-4 align-middle bi bi-telephone me-2"></i>
                                        <a class="btn-link" href="https://api.whatsapp.com/send?phone={{ $user->no_hp }}"
                                            target="_blank">{{ $user->no_hp }}</a>
                                    </li>
                                </ul>
                                <div>
                                    <h6>Follow Me:</h6>
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a class="border rounded px-2 py-1 text-dark"
                                                href="https://www.facebook.com/{{ $user->facebook }}" target="_blank">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="border rounded px-2 py-1 text-dark"
                                                href="https://www.instagram.com/{{ $user->instagram }}" target="_blank">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="border rounded px-2 py-1 text-dark"
                                                href="https://github.com/{{ $user->github }}" target="_blank">
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
                        </div>
                    </div>
                </div>
                <!-- / .row -->
                <div class="row">
                    @if (!count($creations))
                        <div class="grid-item col-lg-12 col-md-12 bg-light-2 py-4 px-3 px-lg-3 rounded-4">
                            <div class="container">
                                <div class="row justify-content-center text-center ">
                                    <div class="col-12 col-lg-10">
                                        <div class="card p-2 p-md-2 border-0 bg-white rounded-4">
                                            <div class="card-body p-0">
                                            </div>
                                            <i class="bi bi-x fs-1 text-dark"></i>
                                            @auth
                                                <p class="font-w-5 lead mb-1">No Works have been added by you.
                                                </p>
                                                <p class="font-w-2">You can upload your creations
                                                    <a href="/addCreation">Upload Now!</a>
                                                </p>
                                            @endauth
                                            @guest
                                                <p class="font-w-5 lead mb-1">No Works have been added by {{ $user->name }}.
                                                </p>
                                                <p class="font-w-2">See all creations.
                                                    <a href="/addCreation">See all!</a>
                                                </p>
                                            @endguest
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @foreach ($creations as $creation)
                        <div class="col-12 col-lg-3 col-md-6 mb-4 mb-lg-0">
                            <div class="hover-translate bg-white shadow px-3 pt-3 pb-2  rounded-4">

                                @if ($creation->image)
                                    <a class="popup-img btn-link" href="{{ asset('storage/' . $creation->image) }}">
                                        <img class="img-fluid w-100 rounded-4"
                                            style="height: 230px; object-fit: cover;
                                        overflow: hidden;"
                                            src="{{ asset('storage/' . $creation->image) }}" alt="">
                                    </a>
                                @else
                                    <a class="popup-img btn-link" href="images/portfolio/01.jpg">
                                        <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg" alt="">
                                    </a>
                                @endif
                                <span class="text-muted">- {{ $creation->categories_name }}</span>
                                {{-- <p>{{ $creation->title }}</p> --}}
                                <a class="btn-link" href="/creation/{{ $creation->code }}">
                                    <p>{{ $creation->title }}</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--team end-->
    @endsection
