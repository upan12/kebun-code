@extends('layouts.main')
@section('container')

<!--body content start-->

<div class="page-content">

    <!--forgot password start-->
    
    <section>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <div>
              <div class="mb-5">
                <h2>Forgot your password?</h2>
                <p>Enter your email to reset your password.</p>
              </div>
              <form class="px-sm-10" id="contact-form" method="post" action="https://themeht.com/taypo/html/php/contact.php">
                <div class="messages"></div>
                <div class="mb-3">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required>
                </div> <button class="btn btn-primary btn-block">Forgot Now</button>
              </form>
              <div class="mt-4"> <a class="btn-link" href="/register">Back to sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--forgot password end-->
        
</div>
    
    <!--body content end--> 

@endsection