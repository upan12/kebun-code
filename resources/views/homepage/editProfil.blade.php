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
                            <h2 class="mb-5 text-center">Edit Profile</h2>
                            <form id="" method="post" action="/profile/update" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div class="messages"></div>
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email" class="font-w-6">Email</label>
                                            <input id="email" type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Email" value="{{ $user->email }}" disabled>
                                            @error('email')
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
                                                value="{{ $user->nisn }}" disabled>
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
                                            <label for="name" class="font-w-6">Name</label>
                                            <input id="name" type="text" name="name"
                                                class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                                value="{{ $user->name }}">
                                            @error('name')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="wa" class="font-w-6">WhatsApp Number</label>
                                            <input id="wa" type="number" name="no_hp"
                                                class="form-control @error('no_hp') is-invalid @enderror"
                                                placeholder="No Handphone" value="{{ $user->no_hp }}">
                                            <p class="text-muted" class="text-muted"><small>*Ex: 6281234567890</small></p>
                                            @error('no_hp')
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
                                            <label for="facebook" class="font-w-6">Facebook</label><p class="text-muted ms-2 d-inline"><small>*Can be empty</small></p>
                                            <input id="facebook" type="text" name="facebook"
                                                class="form-control @error('facebook') is-invalid @enderror"
                                                placeholder="Facebook account" value="{{ $user->facebook }}">
                                            <p class="text-muted"><small>*Ex : laura.tita.503</small></p>
                                            @error('facebook')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="ig" class="font-w-6 ">Instagram</label><p class="text-muted ms-2 d-inline"><small>*Can be empty</small></p>
                                            <input id="ig" type="text" name="instagram"
                                                class="form-control @error('instagram') is-invalid @enderror"
                                                placeholder="Instagram account" value="{{ $user->instagram }}">
                                            <p class="text-muted"><small>*Ex : nin.raa_</small></p>
                                            @error('instagram')
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
                                            <label for="github" class="font-w-6">Github</label><p class="text-muted ms-2 d-inline"><small>*Can be empty</small></p>
                                            <input id="github" type="text" name="github"
                                                class="form-control @error('github') is-invalid @enderror"
                                                placeholder="Github account" value="{{ $user->github }}">
                                            <p class="text-muted"><small>*Ex : lauratita</small></p>
                                            @error('github')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="description" class="font-w-6">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Description" id="description"
                                            name="description" rows="3">{{ $user->description }}</textarea>

                                        @error('description')
                                            <div id="description" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="" class="font-w-6">User Profile</label>
                                        <div class="d-flex align-items-start gap-4">
                                            @if ($user->image)
                                                <img src="{{ asset('storage/' . $user->image) }}" alt="user-profile"
                                                    class="d-block rounded" height="200" id="uploadedAvatar" />
                                            @else
                                                <img src="/images/team/01.jpg" alt="user-profile"
                                                    class="d-block rounded" height="200" id="uploadedAvatar" />
                                            @endif
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-outline-primary" tabindex="0">
                                                    <span class="d-none d-sm-block">Set Your Profile</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload" name="image"
                                                        class="account-file-input @error('image') is-invalid @enderror"
                                                        hidden accept="image/png, image/jpeg" />
                                                </label>
                                                <button type="button"
                                                    class="btn btn-outline-secondary account-image-reset mb-1">
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button>
                                                <p class="text-muted my-0 is-invalid">Allowed JPG, GIF or PNG. Max size
                                                    of 800K and Can be empty</p>
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
                                    <div class="col"> <button class="btn btn-primary" type="submit">Update</button>
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
