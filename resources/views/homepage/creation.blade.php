@extends('layouts.main')
@section('container')

<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1 class="mb-3">Creation</h1>
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
      <div class="row">
        <div class="col-lg-8 col-12 pe-lg-10">            
        <img class="img-fluid w-100 rounded-4 mb-5" src="images/portfolio/large/01.jpg" alt="">
        <h2>{{ $creation->category->name }}</h2>
        <p class="lead text-dark mb-3">Networking solutions for worldwide communication We're a company that focuses on establishing long-term relationships with customers.</p>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue rutrum.</p>
        </div>
        <div class="col-lg-4 col-12">
          <div class="bg-white shadow p-5 rounded-4">
            <h4 class="mb-4">About The Project</h4>
            <ul class="cases-meta list-unstyled text-muted">
              <li class="mb-3 border-bottom border-light pb-3">
                <span class="text-dark font-w-6"> Title: </span> {{ $creation->title }}
              </li>
              <li class="mb-3 border-bottom border-light pb-3">
                <span class="text-dark font-w-6"> Creator: </span> {{ $creation->creator }}
              </li>
              <li class="mb-3 border-bottom border-light pb-3">
                  <span class="text-dark font-w-6"> Technology: </span> {{ $creation->technology }}
                </li>
                <li class="mb-3 border-bottom border-light pb-3">
                    <span class="text-dark font-w-6"> Category: </span> {{ $creation->category->name }}
                </li>
                <li>
                    <span class="text-dark font-w-6"> GitHub: </span> www.yourwebsite.com
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