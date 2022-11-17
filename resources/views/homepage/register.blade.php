@extends('layouts.main')
@section('container')
    <!--body content start-->

    <div class="page-content">

        <!--login start-->

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
                        <div class="border border-light rounded-4 p-5">
                            <h2 class="mb-5 text-center">Fill Your Details</h2>
                            <form id="" method="post" action="/register">
                                @csrf
                                <div class="messages"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_name" type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_lastname" type="text  " name="nisn"
                                                class="form-control @error('nisn') is-invalid @enderror" placeholder="NISN"
                                                value="{{ old('nisn') }}">
                                            @error('nisn')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_email" type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email"   value="{{ old('email') }}">
                                            @error('email')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="form_password" type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password"  value="{{ old('password') }}">
                                            @error('password')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row text-center mt-4">
                                    <div class="col-md-12">
                                        <div class="remember-checkbox clearfix mb-4">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input float-none"
                                                    id="customCheck1">
                                                <label class="form-check-label" for="customCheck1">I agree to the term of
                                                    use and privacy policy</label>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="row text-center">
                                    <div class="col"> <button class="btn btn-primary">Create Account</button>
                                        <span class="mt-4 d-block">Have An Account ? <a href="/login"><i>Sign
                                                    In!</i></a></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--login end-->

    </div>

    <!--body content end-->
@endsection
