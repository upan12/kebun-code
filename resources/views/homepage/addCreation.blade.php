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
            <form class="row" method="post" action="/create/creation">
              @csrf
              <div class="messages"></div>
              <div class="form-group col-md-6">
                <label class="font-w-6">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" required="required" data-error="Title is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-md-6">
                <label class="font-w-6">Creator</label>
                <input type="text" name="creator" class="form-control" placeholder="Creator" required="required" data-error="Creator is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group col-md-6">
                <label class="font-w-6">Technology</label>
                <input type="text" name="technology" class="form-control" placeholder="technology" required="required" data-error="Technology is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <label class="font-w-6" for="description">Description</label>
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
            </div>
                <div class="form-group col-md-12">
                  <label class="font-w-6">Category</label>
                  <select class="form-select" name="category">
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                  </select>
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
  <script>
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection