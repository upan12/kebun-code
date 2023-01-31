@extends('layouts.main')
@section('container')
    <!--hero section start-->

    <!--hero section start-->

    <section class="position-relative overflow-hidden pb-0">
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
            <lottie-player src="https://lottie.host/59ba3e9a-bef6-400b-adbb-0eb8c20c9f65/WPBRmjAinD.json"
                background="transparent.html" speed="1" style="width: auto; height: auto;" loop autoplay></lottie-player>
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
                            <form class="row" method="post" action="/create/creation" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="status" value="1">
                                <input type="hidden" name="user_id" value="{{ auth()->user()['id'] }}">
                                <div class="messages"></div>
                                <div class="form-group col-md-6">
                                    <label class="font-w-6">Title</label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <div id="" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="form-group col-md-6">
                                    <label class="font-w-6">Creator</label>
                                    <input type="text" name="creator"
                                        class="form-control @error('creator') is-invalid @enderror" placeholder="Creator"
                                        value="{{ old('creator') }}">
                                    @error('creator')
                                        <div id="" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="form-group col-md-6">
                                    <label class="font-w-6">Technology</label>
                                    <input type="text" name="technology"
                                        class="form-control @error('technology') is-invalid @enderror"
                                        placeholder="Technology" value="{{ old('technology') }}">
                                    @error('technology')
                                        <div id="" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label class="font-w-6">Link Source Code</label>
                                    <input type="text" name="source_code" class="form-control"
                                        placeholder="Link Source Code" value="{{ old('source_code') }}">
                                    <div class="help-block with-errors"></div>
                                    <p class="m-0"><small>*can be empty</small></p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-w-6">Link Website</label>
                                    <input type="text" name="link_website" class="form-control"
                                        value="{{ old('link_website') }}" placeholder="Link Website">
                                    <p class="m-0"><small>*can be empty</small></p>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="font-w-6">Category</label>
                                    <select class="form-select @error('category_id') is-invalid @enderror"
                                        name="category_id">
                                        <option value="">Select your category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <div id="" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                        <label for="description" class="form-label font-w-6">Description</label>
                                        <textarea class="form-control @error('category_id') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div id="" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!-- Account -->
                                <div class="form-group col-md-12">
                                    <div class="d-flex align-items-start gap-4">
                                        <img src="images/portfolio/large/01.jpg" alt="user-avatar" class="d-block rounded"
                                            height="200" id="uploadedAvatar" />
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary" tabindex="0">
                                                <span class="d-none d-sm-block">Upload photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" name="image"
                                                    class="account-file-input @error('image') is-invalid @enderror" hidden
                                                    accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button"
                                                class="btn btn-outline-secondary account-image-reset mb-1">
                                                <span class="d-none d-sm-block">Reset</span>
                                            </button>
                                            <p class="text-muted my-0 is-invalid">Allowed JPG, GIF or PNG. Max size of 800K
                                            </p>
                                            @error('image')
                                                <div id="" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                </div>
                                

                        </div>
                        <div class="col mt-4">
                            <button type="submit" class="btn btn-primary">Create Creation</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>

    </div>

    <!--body content end-->

    <!--hero section end-->

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
