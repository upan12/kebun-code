@extends('layouts.main')
@section('container')

<!--hero section start-->

<section class="position-relative overflow-hidden">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1 class="mb-3">Add Creation</h1>
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
  
  <!--contact start-->
  
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="bg-white shadow p-5 rounded-4">
            <form id="contact-form" class="row" method="post" action="https://themeht.com/taypo/html/php/contact.php">
              <div class="messages"></div>
              <div class="form-group col-md-6">
                <label class="font-w-6">First Name</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name" required="required" data-error="Name is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-md-6">
                <label class="font-w-6">Last Name</label>
                <input id="form_name1" type="text" name="name" class="form-control" placeholder="Last Name" required="required" data-error="Name is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-md-6">
                <label class="font-w-6">Email Address</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-md-6">
                <label class="font-w-6">Phone Number</label>
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone" required="required" data-error="Phone is required">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-md-12">
                <label class="font-w-6">Topic</label>
                <select class="form-select">
                  <option selected>- Select Topic</option>
                  <option value="1">Consulting</option>
                  <option value="2">Finance</option>
                  <option value="3">Marketing</option>
                  <option value="4">Avanced Analytics</option>
                  <option value="5">planning</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <label class="font-w-6">Message</label>
                <textarea id="form_message" name="message" class="form-control rounded-4 h-auto" placeholder="Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <div class="col mt-4">
                <button class="btn btn-primary">Send Messages</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row mt-8">
        <div class="col-12 col-lg-6 mb-6 mb-lg-0">
          <div>
            <img class="img-fluid rounded-4 mb-3" src="images/contact-img.jpg" alt="">
            <p class="font-w-6">We help companies develop powerful corporate social responsibility, grantmaking, and employee engagement strategies. </p>
            <div class="row">
              <div class="col-md-6">
                <h6>North America:</h6>
                <ul class="contact-info list-unstyled">
                  <li class="mb-4 text-dark">
                    <i class="text-primary fs-4 align-middle bi bi-geo-alt me-2"></i> 423B, Road Wordwide Country, USA
                  </li>
                  <li class="mb-4">
                    <i class="text-primary fs-4 align-middle bi bi-telephone me-2"></i>
                    <a class="btn-link" href="tel:+912345678900">+91-234-567-8900</a>
                  </li>
                  <li>
                    <i class="text-primary fs-4 align-middle bi bi-envelope me-2"></i>
                    <a class="btn-link" href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>United Kingdom:</h6>
                <ul class="contact-info list-unstyled">
                  <li class="mb-4 text-dark">
                    <i class="text-primary fs-4 align-middle bi bi-geo-alt me-2"></i> 423B, Road Wordwide Country, USA
                  </li>
                  <li class="mb-4">
                    <i class="text-primary fs-4 align-middle bi bi-telephone me-2"></i>
                    <a class="btn-link" href="tel:+912345678900">+91-234-567-8900</a>
                  </li>
                  <li>
                    <i class="text-primary fs-4 align-middle bi bi-envelope me-2"></i>
                    <a class="btn-link" href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="map h-100">
            <iframe class="w-100 h-100 border-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    </section>
  
  <!--contact end-->
  
</div>
  
  <!--body content end--> 

@endsection