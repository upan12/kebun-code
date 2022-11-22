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
                            <button data-filter=".cat1" class="mb-2 mb-sm-0">Web Design</button>
                            <button data-filter=".cat2">App Design</button>
                            <button data-filter=".cat3">UI /UX</button>
                            <button data-filter=".cat4">Desktop</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="grid columns-3 row popup-gallery">
                            <div class="grid-sizer"></div>
                            @if (!count($web_designs) && !count($app_designs) && !count($ui_uxs) && !count($desktops))
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
                                                    <p class="font-w-2">Please Check your search keyword or
                                                        <a href="/allCreation">See all Works</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @forelse ($web_designs as $web_design)
                                <!-- Modal -->
                                <div class="modal fade modal-lg" id="editModalCenter{{ $web_design->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Creation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/updateCreation/{{ $web_design->id }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $web_design->id }}">
                                                <div class="modal-body">
                                                    <input type="hidden" name="user" value="{{ auth()->user()['id'] }}">
                                                    <div class="messages"></div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                placeholder="Title" required="required"
                                                                data-error="Title is required."
                                                                value="{{ $web_design->title }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Creator</label>
                                                            <input type="text" name="creator" class="form-control"
                                                                placeholder="Creator" required="required"
                                                                data-error="Creator is required."
                                                                value="{{ $web_design->creator }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Technology</label>
                                                            <input type="text" name="technology" class="form-control"
                                                                placeholder="Technology" required="required"
                                                                data-error="Technology is required."
                                                                value="{{ $web_design->technology }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Category</label>
                                                            <select class="form-select" name="category_id">
                                                                @foreach ($categories as $category)
                                                                    @if (old('category_id', $web_design->category_id) == $category->id)
                                                                        <option value="{{ $category->id }}">
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
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Source Code</label>
                                                            <input type="text" name="source_code" class="form-control"
                                                                placeholder="Link Source Code" required="required"
                                                                data-error="Link is required."
                                                                value="{{ $web_design->source_code }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Website</label>
                                                            <input type="text" name="link_website"
                                                                class="form-control" placeholder="Link Website"
                                                                required="required"
                                                                value="{{ $web_design->link_website }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="d-flex align-items-start gap-4">
                                                            <img src="{{ asset('storage/' . $web_design->image) }}"
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
                                                    <div class="form-group col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description"
                                                                class="form-label font-w-6">Description</label>
                                                            <textarea class="form-control" id="description" name="description" rows="3">{{ $web_design->description }}</textarea>
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
                                <div class="grid-item col-lg-4 col-md-6 mb-5 cat1 all">
                                    <div
                                        class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                        @if ($web_design->image)
                                            <a class="popup-img btn-link"
                                                href="{{ asset('storage/' . $web_design->image) }}">
                                                <img class="img-fluid w-100 rounded-4"
                                                    src="{{ asset('storage/' . $web_design->image) }}" alt="">
                                            </a>
                                        @else
                                            <a class="popup-img btn-link" href="images/portfolio/01.jpg">
                                                <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg"
                                                    alt="">
                                            </a>
                                        @endif
                                        <div
                                            class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                @if ($web_design->status == 1)
                                                    <small class="mb-2">{{ $web_design->categories_name }} <span
                                                            class="badge rounded-pill text-bg-warning">Unverified!</span></small>
                                                @elseif($web_design->status == 2)
                                                    <small class="mb-2">{{ $web_design->categories_name }} <span
                                                            class="badge rounded-pill text-bg-success">Actived!</span></small>
                                                @elseif($web_design->status == 3)
                                                    <small class="mb-2">{{ $web_design->categories_name }} <span
                                                            class="badge rounded-pill text-bg-secondary">Disabled!</span></small>
                                                @endif
                                                <h6 class="mb-0">
                                                    <a class="btn-link"
                                                        href="/creation/{{ $web_design->id }}">{{ $web_design->title }}</a>
                                                </h6>
                                            </div>
                                            <a class=" btn-link dropdown-toggle" data-bs-toggle="dropdown"
                                                href="#">
                                                <i class="bi bi-patch-plus fs-4"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="" data-bs-toggle="modal"
                                                        data-bs-target="#editModalCenter{{ $web_design->id }}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <form action="/deleteCreation/{{ $web_design->id }}"
                                                        id="modalDeleteCreationVerified" method="post"
                                                        enctype="multipart/form-data">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="button"
                                                            onclick="deleteCreationVerified()"><i
                                                                class="bx bx-trash me-1"></i>
                                                            Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="grid-item col-lg-12 col-md-12 bg-light-2 py-8 px-3 px-lg-6 rounded-4 cat1">
                                    <div class="container">
                                        <div class="row justify-content-center text-center ">
                                            <div class="col-12 col-lg-10">
                                                <div class="card p-2 p-md-4 border-0 bg-white rounded-4">
                                                    <div class="card-body p-0">
                                                    </div>
                                                    <i class="bi bi-x fs-1 text-dark"></i>
                                                    <p class="font-w-5 lead mb-1">No Works have been added yet.
                                                    </p>
                                                    <p class="font-w-2">Please Check your search keyword or
                                                        <a href="/allCreation">See all Works</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                            @forelse ($app_designs as $app_design)
                                <div class="modal fade modal-lg" id="editModalCenter{{ $app_design->id }}"
                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Creation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/updateCreation/{{ $app_design->id }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $app_design->id }}">
                                                <div class="modal-body">
                                                    <input type="hidden" name="user"
                                                        value="{{ auth()->user()['id'] }}">
                                                    <div class="messages"></div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                placeholder="Title" required="required"
                                                                data-error="Title is required."
                                                                value="{{ $app_design->title }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Creator</label>
                                                            <input type="text" name="creator" class="form-control"
                                                                placeholder="Creator" required="required"
                                                                data-error="Creator is required."
                                                                value="{{ $app_design->creator }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Technology</label>
                                                            <input type="text" name="technology" class="form-control"
                                                                placeholder="Technology" required="required"
                                                                data-error="Technology is required."
                                                                value="{{ $app_design->technology }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Category</label>
                                                            <select class="form-select" name="category_id">
                                                                @foreach ($categories as $category)
                                                                    @if (old('category_id', $app_design->category_id) == $category->id)
                                                                        <option value="{{ $category->id }}">
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
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Source Code</label>
                                                            <input type="text" name="source_code" class="form-control"
                                                                placeholder="Link Source Code" required="required"
                                                                data-error="Link is required."
                                                                value="{{ $app_design->source_code }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Website</label>
                                                            <input type="text" name="link_website"
                                                                class="form-control" placeholder="Link Website"
                                                                required="required"
                                                                value="{{ $app_design->link_website }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="d-flex align-items-start gap-4">
                                                            <img src="{{ asset('storage/' . $app_design->image) }}"
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
                                                    <div class="form-group col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description"
                                                                class="form-label font-w-6">Description</label>
                                                            <textarea class="form-control" id="description" name="description" rows="3">{{ $app_design->description }}</textarea>
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
                                <div class="grid-item col-lg-4 col-md-6 mb-5 cat2 all">
                                    <div
                                        class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                        @if ($app_design->image)
                                            <a class="popup-img btn-link"
                                                href="{{ asset('storage/' . $app_design->image) }}">
                                                <img class="img-fluid w-100 rounded-4"
                                                    src="{{ asset('storage/' . $app_design->image) }}" alt="">
                                            </a>
                                        @else
                                            <a class="popup-img btn-link" href="images/portfolio/01.jpg">
                                                <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg"
                                                    alt="">
                                            </a>
                                        @endif
                                        <div
                                            class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                @if ($app_design->status == 1)
                                                    <small class="mb-2">{{ $app_design->categories_name }} <span
                                                            class="badge rounded-pill text-bg-warning">Unverified!</span></small>
                                                @elseif($app_design->status == 2)
                                                    <small class="mb-2">{{ $app_design->categories_name }} <span
                                                            class="badge rounded-pill text-bg-success">Actived!</span></small>
                                                @elseif($app_design->status == 3)
                                                    <small class="mb-2">{{ $app_design->categories_name }} <span
                                                            class="badge rounded-pill text-bg-secondary">Disabled!</span></small>
                                                @endif
                                                <h6 class="mb-0">
                                                    <a class="btn-link"
                                                        href="/creation/{{ $app_design->id }}">{{ $app_design->title }}</a>
                                                </h6>
                                            </div>
                                            <a class=" btn-link dropdown-toggle" data-bs-toggle="dropdown"
                                                href="#">
                                                <i class="bi bi-patch-plus fs-4"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="" data-bs-toggle="modal"
                                                        data-bs-target="#editModalCenter{{ $app_design->id }}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <form action="/deleteCreation/{{ $app_design->id }}"
                                                        id="modalDeleteCreationVerified" method="post"
                                                        enctype="multipart/form-data">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="button"
                                                            onclick="deleteCreationVerified()"><i
                                                                class="bx bx-trash me-1"></i>
                                                            Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="grid-item col-lg-12 col-md-12 bg-light-2 py-8 px-3 px-lg-6 rounded-4 cat2">
                                    <div class="container">
                                        <div class="row justify-content-center text-center ">
                                            <div class="col-12 col-lg-10">
                                                <div class="card p-2 p-md-4 border-0 bg-white rounded-4">
                                                    <div class="card-body p-0">
                                                    </div>
                                                    <i class="bi bi-x fs-1 text-dark"></i>
                                                    <p class="font-w-5 lead mb-1">No Works have been added yet.
                                                    </p>
                                                    <p class="font-w-2">Please Check your search keyword or
                                                        <a href="/allCreation">See all Works</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                            @forelse ($ui_uxs as $ui_ux)
                                <div class="modal fade modal-lg" id="editModalCenter{{ $ui_ux->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Creation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/updateCreation/{{ $ui_ux->id }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $ui_ux->id }}">
                                                <div class="modal-body">
                                                    <input type="hidden" name="user"
                                                        value="{{ auth()->user()['id'] }}">
                                                    <div class="messages"></div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                placeholder="Title" required="required"
                                                                data-error="Title is required."
                                                                value="{{ $ui_ux->title }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Creator</label>
                                                            <input type="text" name="creator" class="form-control"
                                                                placeholder="Creator" required="required"
                                                                data-error="Creator is required."
                                                                value="{{ $ui_ux->creator }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Technology</label>
                                                            <input type="text" name="technology" class="form-control"
                                                                placeholder="Technology" required="required"
                                                                data-error="Technology is required."
                                                                value="{{ $ui_ux->technology }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Category</label>
                                                            <select class="form-select" name="category_id">
                                                                @foreach ($categories as $category)
                                                                    @if (old('category_id', $ui_ux->category_id) == $category->id)
                                                                        <option value="{{ $category->id }}">
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
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Source Code</label>
                                                            <input type="text" name="source_code" class="form-control"
                                                                placeholder="Link Source Code" required="required"
                                                                data-error="Link is required."
                                                                value="{{ $ui_ux->source_code }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Website</label>
                                                            <input type="text" name="link_website"
                                                                class="form-control" placeholder="Link Website"
                                                                required="required" value="{{ $ui_ux->link_website }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="d-flex align-items-start gap-4">
                                                            <img src="{{ asset('storage/' . $ui_ux->image) }}"
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
                                                    <div class="form-group col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description"
                                                                class="form-label font-w-6">Description</label>
                                                            <textarea class="form-control" id="description" name="description" rows="3">{{ $ui_ux->description }}</textarea>
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
                                <div class="grid-item col-lg-4 col-md-6 mb-5 cat3 all">
                                    <div
                                        class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                        @if ($ui_ux->image)
                                            <a class="popup-img btn-link" href="{{ asset('storage/' . $ui_ux->image) }}">
                                                <img class="img-fluid w-100 rounded-4"
                                                    src="{{ asset('storage/' . $ui_ux->image) }}" alt="">
                                            </a>
                                        @else
                                            <a class="popup-img btn-link" href="images/portfolio/01.jpg">
                                                <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg"
                                                    alt="">
                                            </a>
                                        @endif
                                        <div
                                            class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                @if ($ui_ux->status == 1)
                                                    <small class="mb-2">{{ $ui_ux->categories_name }} <span
                                                            class="badge rounded-pill text-bg-warning">Unverified!</span></small>
                                                @elseif($ui_ux->status == 2)
                                                    <small class="mb-2">{{ $ui_ux->categories_name }} <span
                                                            class="badge rounded-pill text-bg-success">Actived!</span></small>
                                                @elseif($ui_ux->status == 3)
                                                    <small class="mb-2">{{ $ui_ux->categories_name }} <span
                                                            class="badge rounded-pill text-bg-secondary">Disabled!</span></small>
                                                @endif
                                                <h6 class="mb-0">
                                                    <a class="btn-link"
                                                        href="/creation/{{ $ui_ux->id }}">{{ $ui_ux->title }}</a>
                                                </h6>
                                            </div>
                                            <a class=" btn-link dropdown-toggle" data-bs-toggle="dropdown"
                                                href="#">
                                                <i class="bi bi-patch-plus fs-4"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="" data-bs-toggle="modal"
                                                        data-bs-target="#editModalCenter{{ $ui_ux->id }}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <form action="/deleteCreation/{{ $ui_ux->id }}"
                                                        id="modalDeleteCreationVerified" method="post"
                                                        enctype="multipart/form-data">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="button"
                                                            onclick="deleteCreationVerified()"><i
                                                                class="bx bx-trash me-1"></i>
                                                            Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="grid-item col-lg-12 col-md-12 bg-light-2 py-8 px-3 px-lg-6 rounded-4 cat3">
                                    <div class="container">
                                        <div class="row justify-content-center text-center ">
                                            <div class="col-12 col-lg-10">
                                                <div class="card p-2 p-md-4 border-0 bg-white rounded-4">
                                                    <div class="card-body p-0">
                                                    </div>
                                                    <i class="bi bi-x fs-1 text-dark"></i>
                                                    <p class="font-w-5 lead mb-1">No Works have been added yet.
                                                    </p>
                                                    <p class="font-w-2">Please Check your search keyword or
                                                        <a href="/allCreation">See all Works</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
                            @forelse ($desktops as $desktop)
                                <div class="modal fade modal-lg" id="editModalCenter{{ $desktop->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Creation</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="/updateCreation/{{ $desktop->id }}" method="post"
                                                enctype="multipart/form-data">
                                                @method('put')
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $desktop->id }}">
                                                <div class="modal-body">
                                                    <input type="hidden" name="user"
                                                        value="{{ auth()->user()['id'] }}">
                                                    <div class="messages"></div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Title</label>
                                                            <input type="text" name="title" class="form-control"
                                                                placeholder="Title" required="required"
                                                                data-error="Title is required."
                                                                value="{{ $desktop->title }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Creator</label>
                                                            <input type="text" name="creator" class="form-control"
                                                                placeholder="Creator" required="required"
                                                                data-error="Creator is required."
                                                                value="{{ $desktop->creator }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Technology</label>
                                                            <input type="text" name="technology" class="form-control"
                                                                placeholder="Technology" required="required"
                                                                data-error="Technology is required."
                                                                value="{{ $desktop->technology }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Category</label>
                                                            <select class="form-select" name="category_id">
                                                                @foreach ($categories as $category)
                                                                    @if (old('category_id', $desktop->category_id) == $category->id)
                                                                        <option value="{{ $category->id }}">
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
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Source Code</label>
                                                            <input type="text" name="source_code" class="form-control"
                                                                placeholder="Link Source Code" required="required"
                                                                data-error="Link is required."
                                                                value="{{ $desktop->source_code }}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label class="font-w-6">Link Website</label>
                                                            <input type="text" name="link_website"
                                                                class="form-control" placeholder="Link Website"
                                                                required="required" value="{{ $desktop->link_website }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <div class="d-flex align-items-start gap-4">
                                                            <img src="{{ asset('storage/' . $desktop->image) }}"
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
                                                    <div class="form-group col-md-12">
                                                        <div class="mb-3">
                                                            <label for="description"
                                                                class="form-label font-w-6">Description</label>
                                                            <textarea class="form-control" id="description" name="description" rows="3">{{ $desktop->description }}</textarea>
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
                                <div class="grid-item col-lg-4 col-md-6 mb-5 cat4 all">
                                    <div
                                        class="portfolio-item hover-translate position-relative bg-white shadow p-3 rounded-4">
                                        @if ($desktop->image)
                                            <a class="popup-img btn-link"
                                                href="{{ asset('storage/' . $desktop->image) }}">
                                                <img class="img-fluid w-100 rounded-4"
                                                    src="{{ asset('storage/' . $desktop->image) }}" alt="">
                                            </a>
                                        @else
                                            <a class="popup-img btn-link" href="images/portfolio/01.jpg">
                                                <img class="img-fluid w-100 rounded-4" src="images/portfolio/01.jpg"
                                                    alt="">
                                            </a>
                                        @endif
                                        <div
                                            class="portfolio-title d-flex justify-content-between align-items-center mt-3">
                                            <div>
                                                @if ($desktop->status == 1)
                                                    <small class="mb-2">{{ $desktop->categories_name }} <span
                                                            class="badge rounded-pill text-bg-warning">Unverified!</span></small>
                                                @elseif($desktop->status == 2)
                                                    <small class="mb-2">{{ $desktop->categories_name }} <span
                                                            class="badge rounded-pill text-bg-success">Actived!</span></small>
                                                @elseif($desktop->status == 3)
                                                    <small class="mb-2">{{ $desktop->categories_name }} <span
                                                            class="badge rounded-pill text-bg-secondary">Disabled!</span></small>
                                                @endif
                                                <h6 class="mb-0">
                                                    <a class="btn-link"
                                                        href="/creation/{{ $desktop->id }}">{{ $desktop->title }}</a>
                                                </h6>
                                            </div>
                                            <a class=" btn-link dropdown-toggle" data-bs-toggle="dropdown"
                                                href="#">
                                                <i class="bi bi-patch-plus fs-4"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="" data-bs-toggle="modal"
                                                        data-bs-target="#editModalCenter{{ $desktop->id }}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <form action="/deleteCreation/{{ $desktop->id }}"
                                                        id="modalDeleteCreationVerified" method="post"
                                                        enctype="multipart/form-data">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" type="button"
                                                            onclick="deleteCreationVerified()"><i
                                                                class="bx bx-trash me-1"></i>
                                                            Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="grid-item col-lg-12 col-md-12 bg-light-2 py-8 px-3 px-lg-6 rounded-4 cat4">
                                    <div class="container">
                                        <div class="row justify-content-center text-center ">
                                            <div class="col-12 col-lg-10">
                                                <div class="card p-2 p-md-4 border-0 bg-white rounded-4">
                                                    <div class="card-body p-0">
                                                    </div>
                                                    <i class="bi bi-x fs-1 text-dark"></i>
                                                    <p class="font-w-5 lead mb-1">No Works have been added yet.
                                                    </p>
                                                    <p class="font-w-2">Please Check your search keyword or
                                                        <a href="/allCreation">See all Works</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforelse
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
