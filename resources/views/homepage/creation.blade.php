@extends('layouts.main')
@section('container')
    <!--hero section start-->

    <section class="position-relative overflow-hidden pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="m-0">{{ $creation->title }}</h1>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
        <div class="position-absolute animation-1">
            <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
                background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
        </div>
    </section>

    <!--hero section end-->


    <!--body content start-->

    <div class="page-content">

        <!--portfolio start-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-12 pe-lg-10">
                        @if ($creation->image)
                            <img class="img-fluid w-100 rounded-4 mb-5" src="{{ asset('storage/' . $creation->image) }}"
                                alt="">
                        @else
                            <img class="img-fluid w-100 rounded-4 mb-5" src="/images/portfolio/01.jpg" alt="">
                        @endif
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="bg-white shadow p-5 rounded-4">
                            <ul class="cases-meta list-unstyled text-muted">
                                <li class="mb-3 border-bottom border-light pb-3">
                                    <a href="/profile/{{ $creation->user_id }}">
                                        <span class="text-dark font-w-6"> Creator: </span> {{ $creation->user_name }}
                                    </a>
                                </li>
                                <li class="mb-3 border-bottom border-light pb-3">
                                    <span class="text-dark font-w-6"> Technology: </span> {{ $creation->technology }}
                                </li>
                                <li class="mb-3 border-bottom border-light pb-3">
                                    <span class="text-dark font-w-6"> Category: </span> {{ $creation->category->name }}
                                </li>
                                <li class="mb-3 border-bottom border-light ">
                                    <span class="text-dark font-w-6"> Description: </span>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum quia eius recusandae
                                        magni eum maiores minus sint enim praesentium numquam earum vero minima amet aliquid
                                        ipsam quos, corporis porro nobis eligendi! Quae, cupiditate aliquam! Voluptate
                                        recusandae deleniti deserunt! Harum voluptatibus eos nemo dolore tempore quis
                                        veritatis sed enim, repudiandae ea?{!! $creation->description !!}</p>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-6">
                                            @if (!$creation->source_code)
                                                <button class="btn btn-outline-primary disabled">Source Code</button>
                                            @else
                                                <a class="text-dark btn btn-outline-primary w-100 font-w-6"
                                                    href="{{ $creation->source_code }}" target="_blank">Source Code</a>
                                            @endif
                                        </div>
                                        <div class="col-6">
                                            @if (!$creation->link_website)
                                                <button class="btn btn-outline-primary disabled">Visit Website</button>
                                            @else
                                                <a class="text-dark btn btn-outline-primary w-100 font-w-6"
                                                    href="{{ $creation->link_website }}" target="_blank">Visit Website</a>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--portfolio end-->

    </div>

    <!--body content end-->
@endsection
