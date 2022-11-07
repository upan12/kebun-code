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
            <div class="grid-item col-lg-4 col-md-6 mb-5 cat2">
              <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg" alt="">
                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <small class="mb-2">Mobile App</small>
                    <h6 class="mb-0">
                      <a class="btn-link" href="portfolio-single.html">Social Marketing</a>
                    </h6>
                  </div>
                  <a class="popup-img btn-link" href="images/portfolio/large/01.jpg">
                    <i class="bi bi-patch-plus fs-4"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item col-lg-4 col-md-6 mb-5 cat3">
              <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                <img class="img-fluid w-100 rounded-4" src="images/portfolio/02.jpg" alt="">
                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <small class="mb-2">Developing</small>
                    <h6 class="mb-0">
                      <a class="btn-link" href="portfolio-single.html">Web Development</a>
                    </h6>
                  </div>
                  <a class="popup-img btn-link" href="images/portfolio/large/02.jpg">
                    <i class="bi bi-patch-plus fs-4"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item col-lg-4 col-md-6 mb-5 cat1">
              <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                <img class="img-fluid w-100 rounded-4" src="images/portfolio/03.jpg" alt="">
                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <small class="mb-2">Web Design</small>
                    <h6 class="mb-0">
                      <a class="btn-link" href="portfolio-single.html">Design Work</a>
                    </h6>
                  </div>
                  <a class="popup-img btn-link" href="images/portfolio/large/03.jpg">
                    <i class="bi bi-patch-plus fs-4"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item col-lg-4 col-md-6 mb-5 mb-lg-0 cat2">
              <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                <img class="img-fluid w-100 rounded-4" src="images/portfolio/04.jpg" alt="">
                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <small class="mb-2">Developing</small>
                    <h6 class="mb-0">
                      <a class="btn-link" href="portfolio-single.html">App Management</a>
                    </h6>
                  </div>
                  <a class="popup-img btn-link" href="images/portfolio/large/04.jpg">
                    <i class="bi bi-patch-plus fs-4"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item col-lg-4 col-md-6 mb-5 mb-md-0 cat3">
              <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                <img class="img-fluid w-100 rounded-4" src="images/portfolio/05.jpg" alt="">
                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <small class="mb-2">Branding</small>
                    <h6 class="mb-0">
                      <a class="btn-link" href="portfolio-single.html">Hosting Service</a>
                    </h6>
                  </div>
                  <a class="popup-img btn-link" href="images/portfolio/large/05.jpg">
                    <i class="bi bi-patch-plus fs-4"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="grid-item col-lg-4 col-md-6 cat1">
              <div class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                <img class="img-fluid w-100 rounded-4" src="images/portfolio/06.jpg" alt="">
                <div class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                  <div>
                    <small class="mb-2">Web Design</small>
                    <h6 class="mb-0">
                      <a class="btn-link" href="portfolio-single.html">Clean Coding</a>
                    </h6>
                  </div>
                  <a class="popup-img btn-link" href="images/portfolio/large/06.jpg">
                    <i class="bi bi-patch-plus fs-4"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--portfolio end-->
  
</div>
  
  <!--body content end--> 

@endsection