@extends('layouts.main')
@section('container')
    <!--hero section start-->

    <section class="position-relative overflow-hidden pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="mb-3">All Creation</h1>
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
                <div class="row align-items-end mb-8">
                    <div class="col-12 col-md-12 col-lg-5">
                        <div>
                            <h2 class="mb-5 mb-lg-0">Some of our Creative & Finest Work.</h2>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 ms-auto">
                        <div class="portfolio-filter d-sm-flex align-items-center justify-content-lg-end">
                            <button data-filter=".all" class="is-checked mb-2 mb-sm-0">All</button>
                            @foreach ($categories as $cat)
                            <button data-filter=".cat{{ $cat->id }}" class="mb-2 mb-sm-0">{{ $cat->name }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="grid columns-3 row popup-gallery">
                            <div class="grid-sizer"></div>
                            @if (!count($allCreations) )
                                <div class="grid-item col-lg-12 col-md-12 bg-light-2 py-8 px-3 px-lg-6 rounded-4 all">
                                    <div class="container">
                                        <div class="row justify-content-center text-center ">
                                            <div class="col-12 col-lg-10">
                                                <div class="card p-2 p-md-4 border-0 bg-white rounded-4">
                                                    <div class="card-body p-0">
                                                    </div>
                                                    <i class="bi bi-x fs-1 text-dark"></i>
                                                    <p class="font-w-5 lead mb-1">No Works have been added yet.
                                                    </p>
                                                    <p class="font-w-2">Please Check your search keyword or
                                                        <a href="/allCreation">See all Works</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @foreach ($allCreations as $allCr)
                                <div class="grid-item col-lg-4 col-md-6 mb-5 cat{{ $allCr->categories_id }} all">
                                    <div
                                        class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                        @if ($allCr->image)
                                            <a class="popup-img btn-link"
                                                href="{{ asset('storage/' . $allCr->image) }}">
                                                <img class="img-fluid w-100 rounded-4"
                                                    src="{{ asset('storage/' . $allCr->image) }}" alt="">
                                            </a>
                                        @else
                                            <a class="popup-img btn-link" href="images/portfolio/01.jpg">
                                                <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg"
                                                    alt="">
                                            </a>
                                        @endif
                                        <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <small class="mb-2">{{ $allCr->categories_name }}</small>
                                                <h6 class="mb-0">
                                                    <a class="btn-link"
                                                        href="/creation/{{ $allCr->id }}">{{ $allCr->title }}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio end-->

    </div>

    <!--body content end-->
@endsection

@section('script')
    <script>
        window.addEventListener('load', () => {
            document.querySelector(".portfolio-filter .is-checked").click();
        });
    </script>
@endsection