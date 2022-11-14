@extends('layouts.main')
@section('container')

<!--hero section start-->

<section class="position-relative overflow-hidden">
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
      <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json" background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
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
            <button data-filter="" class="is-checked mb-2 mb-sm-0">All</button>
            <button data-filter=".cat1" class="mb-2 mb-sm-0">Web Design</button>
            <button data-filter=".cat2">App Design</button>
            <button data-filter=".cat3">Branding</button>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="grid columns-3 row popup-gallery">
            <div class="grid-sizer"></div>
            @foreach ($categories as $category)
            <div class="grid-item col-lg-4 col-md-6 mb-5 cat2">
              <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                <a class="popup-img btn-link" href="">
                <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg" alt="">
              </a>
                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <small class="mb-2">{{ $category->name }}</small>
                    <h6 class="mb-0">
                      <a class="btn-link" href="/creation/{{ $category->id }}">{{ $category->name }}</a>
                    </h6>
                  </div>
                  <a class="popup-img btn-link" href="images/portfolio/large/01.jpg">
                    <i class="bi bi-patch-plus fs-4"></i>
                  </a>
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