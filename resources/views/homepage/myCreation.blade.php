@extends('layouts.main')
@section('container')
    <style>
        .portfolio-item:hover {
            z-index: 100;
        }
    </style>

    <!--hero section start-->

    <section class="position-relative overflow-hidden">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h1 class="mb-3">My Creation</h1>
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
                            <button data-filter=".all" class="is-checked mb-2 mb-sm-0">All</button>
                            @foreach ($categories as $cat)
                                <button data-filter=".cat{{ $cat->id }}">{{ $cat->name }}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="grid columns-3 row popup-gallery">
                            <div class="grid-sizer"></div>
                            @if (!count($allCreations))
                                <div class="grid-item col-lg-12 col-md-12 bg-light-2 py-8 px-3 px-lg-6 rounded-4 all">
                                    <div class="container">
                                        <div class="row justify-content-center text-center ">
                                            <div class="col-12 col-lg-10">
                                                <div class="card p-2 p-md-4 border-0 bg-white rounded-4">
                                                    <div class="card-body p-0">
                                                    </div>
                                                    <i class="bi bi-x fs-1 text-dark"></i>
                                                    <p class="font-w-5 lead mb-1">No Works have been added yet.
                                                    </p>
                                                    <p class="font-w-2">You can upload your creations
                                                        <a href="/addCreation">Upload Now!</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @foreach ($allCreations as $allCr)
                                <!-- Modal -->
                                <div class="modal fade modal-lg" id="editModalCenter{{ $allCr->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Creation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/updateCreation/{{ $allCr->id }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $allCr->id }}">
                                                <div class="modal-body">
                                                    <input type="hidden" name="user" value="{{ auth()->user()['id'] }}">
                                                    <div class="messages"></div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                placeholder="Title" required="required"
                                                                data-error="Title is required." value="{{ $allCr->title }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Technology</label>
                                                            <input type="text" name="technology" class="form-control"
                                                                placeholder="Technology" required="required"
                                                                data-error="Technology is required."
                                                                value="{{ $allCr->technology }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Category</label>
                                                            <select class="form-select" name="category_id">
                                                                @foreach ($categories as $category)
                                                                    @if (old('category_id', $allCr->category_id) == $category->id)
                                                                        <option value="{{ $category->id }} " selected>
                                                                            {{ $category->name }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $category->id }}">
                                                                            {{ $category->name }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="description"
                                                                class="form-label font-w-6">Description</label>
                                                            <textarea class="form-control" id="description" name="description" rows="3">{{ $allCr->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Source Code</label>
                                                            <input type="text" name="source_code" class="form-control"
                                                                placeholder="Link Source Code"
                                                                value="{{ $allCr->source_code }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Website</label>
                                                            <input type="text" name="link_website"
                                                                class="form-control" placeholder="Link Website"
                                                                value="{{ $allCr->link_website }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="d-flex align-items-start gap-4">
                                                            <img src="{{ asset('storage/' . $allCr->image) }}"
                                                                alt="user-avatar" class="d-block rounded" height="200"
                                                                {{-- width="200" --}} id="uploadedAvatar" />
                                                            <div class="button-wrapper">
                                                                <label for="upload" class="btn btn-primary "
                                                                    tabindex="0">
                                                                    <span class="d-none d-sm-block">Upload photo</span>
                                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                                    <input type="file" id="upload" name="image"
                                                                        class="account-file-input" hidden
                                                                        accept="image/png, image/jpeg" />
                                                                </label>
                                                                <button type="button"
                                                                    class="btn btn-outline-secondary account-image-reset mb-1">
                                                                    <span class="d-none d-sm-block">Reset</span>
                                                                </button>

                                                                <p class="text-muted my-0">Allowed JPG, GIF or PNG. Max
                                                                    size of
                                                                    800K</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update!!</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-item col-lg-4 col-md-6 mb-5 cat{{ $allCr->categories_id }} all">
                                    <div
                                        class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                        @if ($allCr->image)
                                            <a class="popup-img btn-link" href="{{ asset('storage/' . $allCr->image) }}">
                                                <img class="img-fluid w-100 rounded-4"
                                                    style="height: 230px; object-fit: cover;
                                        overflow: hidden;"
                                                    src="{{ asset('storage/' . $allCr->image) }}" alt="">
                                            </a>
                                        @else
                                            <a class="popup-img btn-link" href="images/portfolio/01.jpg">
                                                <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg"
                                                    style="height: 230px; object-fit: cover;
                                        overflow: hidden;"
                                                    alt="">
                                            </a>
                                        @endif
                                        <div
                                            class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                @if ($allCr->status == 1)
                                                    <small class="mb-2">{{ $allCr->categories_name }} <span
                                                            class="badge rounded-pill text-bg-warning">Unverified!</span></small>
                                                @elseif($allCr->status == 2)
                                                    <small class="mb-2">{{ $allCr->categories_name }} <span
                                                            class="badge rounded-pill text-bg-success">Actived!</span></small>
                                                @elseif($allCr->status == 3)
                                                    <small class="mb-2">{{ $allCr->categories_name }} <span
                                                            class="badge rounded-pill text-bg-secondary">Disabled!</span></small>
                                                @endif
                                                <h6 class="mb-0">
                                                    <a class="btn-link"
                                                        href="/creation/{{ $allCr->code }}">{{ $allCr->title }}</a>
                                                </h6>
                                            </div>
                                            <a class=" btn-link dropdown-toggle" data-bs-toggle="dropdown"
                                                href="#">
                                                <i class="bi bi-patch-plus fs-4"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="" data-bs-toggle="modal"
                                                        data-bs-target="#editModalCenter{{ $allCr->id }}"><i class="bi bi-pencil-square"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <form action="/deleteCreation/{{ $allCr->id }}"
                                                        id="modalDeleteCreationVerified" method="post"
                                                        enctype="multipart/form-data">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="button"
                                                            onclick="deleteCreationVerified()"><i class="bi bi-trash3"></i>
                                                            Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--portfolio end-->

    </div>

    <!--body content end-->
@endsection
@section('script')
    <script>
        window.addEventListener('load', () => {
            document.querySelector(".portfolio-filter .is-checked").click();
        });
    </script>
    <script>
        function deleteCreationVerified() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to return this work!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('modalDeleteCreationVerified').submit()
                }
            })
        }
    </script>
    @if (session('updateSuccess'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!!',
                    text: 'Updated!',
                    html: 'Your file has been Updated.',
                    timer: 1700,
                    showCancelButton: false,
                    showConfirmButton: false
                })
            });
        </script>
    @elseif (session('deleteSuccess'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!!',
                    text: 'Deleted!',
                    html: 'Your file has been deleted.',
                    timer: 1700,
                    showCancelButton: false,
                    showConfirmButton: false
                })
            });
        </script>
    @elseif (session('createSuccess'))
        <script>
            $(document).ready(function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success!!',
                    text: 'Created!',
                    html: 'Your file has been created.',
                    timer: 1700,
                    showCancelButton: false,
                    showConfirmButton: false
                })
            });
        </script>
    @endif
@endsection
