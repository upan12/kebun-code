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
                            <form id="" method="post" action="/register" enctype="multipart/form-data">
                                @csrf
                                <div class="messages"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="font-w-6">Name</label>
                                            <input id="name" type="text" name="name"
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
                                            <label for="nisn" class="font-w-6">NISN</label>
                                            <input id="nisn" type="number" name="nisn"
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
                                            <label for="email" class="font-w-6">Email</label>
                                            <input id="email" type="text" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" value="{{ old('email') }}">
                                            @error('email')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="password" class="font-w-6">Password</label>
                                            <input id="password" type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" value="{{ old('password') }}">
                                            @error('password')
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
                                            <label for="wa" class="font-w-6">WhatsApp Number</label>
                                            <input id="wa" type="number" name="no_hp"
                                                class="form-control @error('no_hp') is-invalid @enderror"
                                                placeholder="Ex: 6281234567890" value="{{ old('no_hp') }}">
                                                @error('no_hp')
                                                    <div id="" class="invalid-feedback mt-0">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="facebook" class="font-w-6">Facebook</label><p class="text-muted ms-2 d-inline"><small>*Can be empty</small></p>
                                            <input id="facebook" type="text" name="facebook"
                                                class="form-control @error('facebook') is-invalid @enderror"
                                                placeholder="Ex : laura.tita.503" value="{{ old('facebook') }}">
                                            @error('facebook')
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
                                            <label for="ig" class="font-w-6 ">Instagram</label><p class="text-muted ms-2 d-inline"><small>*Can be empty</small></p>
                                            <input id="ig" type="text" name="instagram"
                                                class="form-control @error('instagram') is-invalid @enderror"
                                                placeholder="Ex : nin.raa_" value="{{ old('instagram') }}">
                                            @error('instagram')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="github" class="font-w-6">Github</label><p class="text-muted ms-2 d-inline"><small>*Can be empty</small></p>
                                            <input id="github" type="text" name="github"
                                                class="form-control @error('github') is-invalid @enderror"
                                                placeholder="Ex : lauratita" value="{{ old('github') }}">
                                            @error('github')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="description" class="font-w-6">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Description" id="description"
                                            name="description" rows="3">{{ old('description') }}</textarea>
                                            
                                        @error('description')
                                            <div id="description" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label class="font-w-6">User Profile</label>
                                        <div class="d-flex align-items-start gap-4">
                                            <img src="images/portfolio/large/01.jpg" alt="user-avatar" class="d-block rounded"
                                                height="200" id="uploadedAvatar" />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-outline-primary" tabindex="0">
                                                    <span class="d-none d-sm-block">Set Your Profile</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload" name="image"
                                                        class="account-file-input @error('image') is-invalid @enderror" hidden
                                                        accept="image/png, image/jpeg" />
                                                </label>
                                                <button type="button"
                                                    class="btn btn-outline-secondary account-image-reset mb-1">
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button>
                                                <p class="text-muted my-0 is-invalid">Allowed JPG, GIF or PNG. Max size of 800K and Can be empty</p>
                                                @error('image')
                                                    <div id="" class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col"> <button class="btn btn-primary">Create Account</button>
                                        <span class="mt-2 d-block">Have An Account ? <a href="/login"><i>Sign
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
