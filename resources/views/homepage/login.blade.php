@extends('layouts.main')
@section('container')

<!--body content start-->

<div class="page-content">

    <!--login start-->
    
    <section>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-6 col-12">
            <!-- Image -->
            <lottie-player src="https://lottie.host/cbbc0c83-044c-4cf0-ba2e-54438fcbafd8/6M8MI7snvI.json" background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
          </div>
          <div class="col-lg-5 col-12 mt-5 mt-lg-0">
            <div class="border border-light rounded-4 p-5">
            <h2 class="mb-5">Login Your Account</h2>
            <form id="contact-form" method="post" action="https://themeht.com/taypo/html/php/contact.php">
              <div class="messages"></div>
              <div class="form-group">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="User name" required>
              </div>
              <div class="form-group">
                <input id="form_password" type="password" name="password" class="form-control" placeholder="Password" required>
              </div>
              <div class="mt-4 mb-5">
                <div class="remember-checkbox d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="check1">
                    <label class="form-check-label" for="check1">Remember me</label>
                  </div> <a class="btn-link" href="#">Forgot Password?</a>
                </div>
              </div> <button class="btn btn-primary">Login Now</button>
            </form>
            <div class="d-flex align-items-center mt-4"> <span class="text-muted me-1">Don't have an account?</span>
              <a href="/register">Sign Up</a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--login end-->
    
</div>
    
    <!--body content end-->

@endsection