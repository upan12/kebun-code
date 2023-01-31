@extends('layouts.main')
@section('container')
    <!--hero section start-->

    <section class="overflow-hidden position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 order-lg-1 ms-auto mb-8 mb-lg-0">
                    <!-- Image -->
                    <lottie-player src="https://lottie.host/3ddc0e30-a9f7-48e1-9b8d-a0ead2fa5ee4/JrQpGMHV6n.json"
                        background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                    </lottie-player>
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="font-w-4 mb-4">
                        Show your <span
                            class="title-bg text-primary position-relative font-w-5 d-inline-block">skill</span>. and build
                        your <span class="title-bg text-primary position-relative font-w-5 d-inline-block">portfolio.</span>
                        {{-- <br class="d-md-block d-none"> with taypo. --}}
                    </h1>
                    <!-- Text -->
                    <p class="lead text-dark mb-5">A career in technology such as Web Development, or User-Interface
                        Designer, we need real work result.</p>
                    <a class="btn btn-dark mx-2" href="/allCreation" name="seeAllWorks">See All Works</a>
                    <a class="btn btn-dark mx-2" href="/addCreation" name="uploadWorks">Upload Works</a>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
        <div class="position-absolute animation-1">
            <lottie-player src="https://lottie.host/0de28702-1a29-48d3-892d-16f278889351/i4201FkTJi.json"
                background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
            </lottie-player>
        </div>
    </section>

    <!--hero section end-->


    <!--body content start-->

    <div class="page-content">

        <!--feature start-->

        <section class="px-lg-7 px-2 pb-0">
            <div class="bg-light py-10 px-3 px-lg-8 rounded-4 position-relative overflow-hidden">
                <div class="container z-index-1">
                    <div class="row align-items-end justify-content-between mb-6">
                        <div class="col-12 col-lg-6 col-xl-5">
                            <div>
                                <h2>Let's Show your creation here</h2>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-5 ms-auto mt-5 mt-lg-0">
                            <p class="lead">Digital talent crisis! Indonesia needs 600,000 digital talents in one year. In
                                the next 15 years it will require 9 million digital talents</p>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="col-lg-3 col-md-8 mt-6 mt-lg-0">
                            <div class="bg-white p-6 rounded-4 f-icon-hover">
                                <div class="mb-4 rounded f-icon-shape-sm">
                                    <img src="/images/web.png" alt="">
                                </div>
                                <div>
                                    <h5 class="mb-3">Web Developer</h5>
                                    <p class="mb-5">
                                        Build dynamic, fast and accessible web applications.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8 mt-6 mt-lg-0">
                            <div class="bg-white p-6 rounded-4 f-icon-hover">
                                <div class="mb-4 rounded f-icon-shape-sm">
                                    <img src="/images/mobile.png" alt="">
                                </div>
                                <div>
                                    <h5 class="mb-3">Mobile Developer</h5>
                                    <p class="mb-4">
                                        develop mobile applications that can run on Android and iOS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8 mt-6 mt-lg-0">
                            <div class="bg-white p-6 rounded-4 f-icon-hover">
                                <div class="mb-4 rounded f-icon-shape-sm">
                                    <img src="/images/uiux.png" alt="">
                                </div>
                                <div>
                                    <h5 class="mb-3">UI/UX Designer</h5>
                                    <p class="mb-0">Design an attractive display design to make the application look even
                                        more beautiful.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-8 mt-6 mt-lg-0">
                            <div class="bg-white p-6 rounded-4 f-icon-hover">
                                <div class="mb-4 rounded f-icon-shape-sm">
                                    <img src="/images/more.png" alt="">
                                </div>
                                <div>
                                    <h5 class="mb-3">
                                        There is much more</h5>
                                    <p class="mb-5">There is no limit to a career in IT, so keep the spirit!.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-absolute animation-2">
                    <lottie-player src="https://lottie.host/07242462-1734-4c98-95e6-25d242832636/EPSY6EuqM7.json"
                        background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                    </lottie-player>
                </div>
            </div>
        </section>

        <!--feature end-->

        <!--about start-->

        <section class="py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-6 mb-8 mb-lg-0 order-lg-1">
                        <!-- Image -->
                        <lottie-player src="https://lottie.host/59b582ff-e14a-46cc-bdcf-26c9113d5578/vAWK9sbfhe.json"
                            background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay>
                        </lottie-player>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div>
                            <h2 class="mb-5">About Us</h2>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <div class="me-3">
                                <i class="bi bi-columns-gap fs-3 text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-2">Creative space</h5>
                                <p class="mb-0">
                                    A place for creation of software engineering students.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <div class="me-3">
                                <i class="bi bi-gear fs-3 text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-2">Show off Creation</h5>
                                <p class="mb-0">To showcase the work of software engineering students.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="me-3">
                                <i class="bi bi-pencil-square fs-3 text-primary"></i>
                            </div>
                            <div>
                                <h5 class="mb-2">Reference</h5>
                                <p class="mb-0">Making software engineering student references.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--about end-->


        <!--testimonial start-->

        <section class="px-lg-7 px-2 pb-0">
            <div class="bg-light-2 py-10 px-3 px-lg-8 rounded-4">
                <div class="container">
                    <div class="row justify-content-center text-center mb-6">
                        <div class="col-12 col-lg-8">
                            <div>
                                <h2>Client All Over The World Sent Us Awesome Feedback</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-lg-n10">
                        <div class="col">
                            <div class="owl-carousel owl-center" data-center="true" data-dots="false" data-nav="true"
                                data-items="3" data-md-items="2" data-sm-items="1" data-margin="30">
                                <div class="item">
                                    <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                        <div class="card-body p-0">
                                            <p class="font-w-5 lead mb-3">yaa ini nanti isinya adalah komentar ya ges ya.
                                                yaa komentar apa aja gitu. yaa jadi begitulah</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div>

                                                        <img alt="Image" src="images/testimonial/03.jpg"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="font-w-6 text-dark mb-0">MIMIN</span>
                                                        <small class="text-muted fst-italic">- CEO</small>
                                                    </div>
                                                </div>
                                                <i class="bi bi-quote fs-1 text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                        <div class="card-body p-0">
                                            <p class="font-w-5 lead mb-3">Semoga aplikasi web ini bisa bermanfaat bagi kita
                                                semua. yeyyy.</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image" src="images/testimonial/02.jpg"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="font-w-6 text-dark mb-0">Ires</span>
                                                        <small class="text-muted fst-italic">- Founder</small>
                                                    </div>
                                                </div>
                                                <i class="bi bi-quote fs-1 text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                        <div class="card-body p-0">
                                            <p class="font-w-5 lead mb-3">Berkat saya tidak sekolah 2 tahun karena corona,
                                                saya bisa menjadi desainer berkelas. itu semua berkat papoy</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image" src="images/testimonial/01.jpg"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="font-w-6 text-dark mb-0">Yefti</span>
                                                        <small class="text-muted fst-italic">-Designer Berkelas</small>
                                                    </div>
                                                </div>
                                                <i class="bi bi-quote fs-1 text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card p-3 p-md-5 border-0 bg-white rounded-4">
                                        <div class="card-body p-0">
                                            <p class="font-w-5 lead mb-3">Hasil karya anak anak didik saya baguss. pake
                                                bangett. itu berkat saya</p>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img alt="Image" src="images/testimonial/04.jpg"
                                                            class="img-fluid rounded-circle">
                                                    </div>
                                                    <div class="ms-3">
                                                        <span class="font-w-6 text-dark mb-0">Papoy</span>
                                                        <small class="text-muted fst-italic">- Master Java</small>
                                                    </div>
                                                </div>
                                                <i class="bi bi-quote fs-1 text-dark"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--testimonial end-->


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
                                <button data-filter=".cat{{ $cat->id }}">{{ $cat->name }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="grid columns-3 row popup-gallery">
                            <div class="grid-sizer"></div>
                            @if (!count($allCreations))
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
                                                    <p class="font-w-2">You can upload your creation
                                                        <a href="/addCreation">Upload Now</a>
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
                                        <a class="popup-img btn-link" href="">
                                            <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg"
                                                alt="">
                                        </a>
                                        <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                <small class="mb-2">{{ $allCr->categories_name }}</small>
                                                <h6 class="mb-0">
                                                    <a class="btn-link"
                                                        href="/creation/{{ $allCr->categories_id }}">{{ $allCr->title }}</a>
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
