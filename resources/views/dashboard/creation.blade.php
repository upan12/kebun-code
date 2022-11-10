@extends('dashboard.layouts.main')
@section('container')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Sidebar -->
            @include('dashboard.partials.sidebar')
            <!-- End Sidebar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('dashboard.partials.navbar')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    {{-- Tabs --}}
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{-- {{ session('success') }} --}}
                                Creation has been <span class="badge bg-label-info">{{ session('success') }}</span>
                            </div>
                        @elseif (session()->has('danger'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('danger') }}
                            </div>
                        @elseif (session()->has('primary'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('primary') }}
                            </div>
                        @endif
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Creation</h4>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-unVerified" aria-controls="navs-top-unVerified"
                                    aria-selected="true">Unverified</button>
                            </li>

                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-verified" aria-controls="navs-top-verified"
                                    aria-selected="true">Verified</button>
                            </li>

                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-disable" aria-controls="navs-top-disable"
                                    aria-selected="true">Disable</button>
                            </li>

                        </ul>



                        <div class="tab-content">
                            {{-- Status 1 --}}
                            <div class="tab-pane fade show active" id="navs-top-unVerified" role="tabpanel">
                                <!-- UnVerified -->
                                <div class="card">
                                    <h5 class="card-header">Unverified</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="min-height: 220px">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @if (!$creation1)
                                                    <div class="alert alert-warning text-center" role="alert">There is no
                                                        data!</div>
                                                @elseif ($creation1)
                                                    @foreach ($creation1 as $creation)
                                                        {{-- Modal verified --}}
                                                        <div class="modal fade" id="modalCenter{{ $creation->id }}"
                                                            tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalCenterTitle">Check
                                                                            Creation</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="/creation/check/{{ $creation->id }}" id="verifiedCreation"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $creation->id }}">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    @if ($creation->image)
                                                                                        <img src="{{ asset('storage/' . $creation->image) }}"
                                                                                            alt="img-menu"
                                                                                            class="img-fluid">
                                                                                    @else
                                                                                        <img src="https://source.unsplash.com/600x450?website"
                                                                                            alt="img-menu"
                                                                                            class="img-fluid">
                                                                                    @endif
                                                                                </div>
                                                                                <div class="col-md-8">
                                                                                    <h4 class="">
                                                                                        {{ $creation->title }}
                                                                                    </h4>
                                                                                    <ul class="list-group">
                                                                                        <li
                                                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Category :
                                                                                                {{ $creation->category }}
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="list-group-item d-flex">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Made by :
                                                                                                {{ $creation->name }}
                                                                                            </span>
                                                                                        <li
                                                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Technology use :
                                                                                                {{ $creation->technology }}
                                                                                            </span>
                                                                                        </li>
                                                                                        <li
                                                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                <p>
                                                                                                    About the app :
                                                                                                    {{ $creation->description }}
                                                                                                </p>
                                                                                            </span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-secondary"
                                                                                data-bs-dismiss="modal">
                                                                                Close
                                                                            </button>
                                                                            <button type="button" class="btn btn-primary"
                                                                                onclick="verifiedCreation()">Confirm</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- end Modal verified --}}
                                                        <tr>
                                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                                <strong>{{ $creation->id }}</strong>
                                                            </td>
                                                            <td>{{ $creation->name }}</td>
                                                            <td>{{ $creation->title }}</td>
                                                            <td>
                                                                <span class="badge bg-label-warning me-1">Unverified</span>
                                                            </td>
                                                            {{-- button check --}}
                                                            <td>
                                                                <button type="button" class="btn btn-sm btn-primary"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modalCenter{{ $creation->id }}">
                                                                    Check
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/ UnVerified -->
                            </div>
                            {{-- end status 1 --}}

                            {{-- Status 2 --}}
                            <div class="tab-pane fade" id="navs-top-verified" role="tabpanel">
                                <!-- Verified -->
                                <div class="card">
                                    <h5 class="card-header">Verified</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="min-height: 210px">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @if (!$creation2)
                                                    <div class="alert alert-warning text-center" role="alert">There is
                                                        no
                                                        data!</div>
                                                @else
                                                    @foreach ($creation2 as $creation)
                                                        {{-- Modal edit --}}
                                                        <div class="modal fade" id="editModalCenter{{ $creation->id }}"
                                                            tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalCenterTitle">Edit
                                                                            Creation</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="/admin/creation/{{ $creation->id }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="title">Title</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                                    id="title" placeholder="Title"
                                                                                    name="title" required autofocus
                                                                                    value="{{ old('title', $creation->title) }}">
                                                                                @error('title')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <label for="category">Category</label>
                                                                            <select class="form-control" name="category"
                                                                                aria-label="Default select example">
                                                                                @if (old('category', $creation->category) == 'Website')
                                                                                    <option>Website / Mobile / UI/UX /
                                                                                        Desktop
                                                                                    </option>
                                                                                    <option selected value="Website">
                                                                                        Website
                                                                                    </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option value="UI/UX">UI/UX
                                                                                    </option>
                                                                                    <option value="Desktop">Desktop
                                                                                    </option>
                                                                                @elseif (old('category', $creation->category) == 'Mobile')
                                                                                    <option>Website / Mobile / UI/UX /
                                                                                        Desktop
                                                                                    </option>
                                                                                    <option value="Website">Website
                                                                                    </option>
                                                                                    <option selected value="Mobile">Mobile
                                                                                    </option>
                                                                                    <option value="UI/UX">UI/UX
                                                                                    </option>
                                                                                    <option value="Desktop">Desktop
                                                                                    </option>
                                                                                @elseif (old('category', $creation->category) == 'UI/UX')
                                                                                    <option>Website / Mobile / UI/UX /
                                                                                        Desktop
                                                                                    </option>
                                                                                    <option value="Website">Website
                                                                                    </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option selected value="UI/UX">
                                                                                        UI/UX</option>
                                                                                    <option value="Desktop">Desktop
                                                                                    </option>
                                                                                @elseif (old('category', $creation->category) == 'Desktop')
                                                                                    <option>Website / Mobile / UI/UX /
                                                                                        Desktop
                                                                                    </option>
                                                                                    <option value="Website">Website
                                                                                    </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option value="UI/UX">UI/UX
                                                                                    </option>
                                                                                    <option selected value="Desktop">
                                                                                        Desktop</option>
                                                                                @else
                                                                                    <option selected>Website / Mobile /
                                                                                        UI/UX
                                                                                        / Desktop
                                                                                    </option>
                                                                                    <option value="Website">Website
                                                                                    </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option value="UI/UX">UI/UX
                                                                                    </option>
                                                                                    <option value="Desktop">Desktop
                                                                                    </option>
                                                                                @endif

                                                                            </select>

                                                                            <div class="form-group">
                                                                                <label for="name">Name</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    id="name" placeholder="Name"
                                                                                    name="name" required autofocus
                                                                                    value="{{ old('name', $creation->name) }}">
                                                                                @error('name')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="technology">Technology</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('technology') is-invalid @enderror"
                                                                                    id="technology"
                                                                                    placeholder="Technology"
                                                                                    name="technology" required autofocus
                                                                                    value="{{ old('technology', $creation->technology) }}">
                                                                                @error('technology')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="description">
                                                                                    About the app</label>
                                                                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                                                                    rows="3" placeholder="Description" required>{{ old('description', $creation->description) }}</textarea>
                                                                                @error('description')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group mt-3">
                                                                                <label for="image">Update Image</label>
                                                                                <img
                                                                                    class="img-preview  img-fluid mb-3 col-sm-5">
                                                                                <input type="hidden" name="oldImage"
                                                                                    value="{{ $creation->image }}">
                                                                                    <img src="{{ asset('storage/' . $creation->image) }}"
                                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                                <input
                                                                                    class="form-control @error('image') is-invalid @enderror"
                                                                                    id="image" name="image"
                                                                                    type="file" accept="image/*"
                                                                                    onchange="previewImage()">
                                                                                @error('image')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-secondary"
                                                                                data-bs-dismiss="modal">
                                                                                Close
                                                                            </button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- end modal edit --}}

                                                        {{-- Modal detail --}}
                                                        <div class="modal fade" id="detailModalCenter{{ $creation->id }}"
                                                            tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalCenterTitle">
                                                                            Detail
                                                                            Creation</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="admin/creation/{{ $creation->id }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $creation->id }}">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                        <img src="{{ asset('storage/' . $creation->image) }}"
                                                                                            alt="img-menu"
                                                                                            class="img-fluid">
                                                                                </div>
                                                                                <div class="col-md-8 demo-inline-spacing">
                                                                                    <h4 class="">
                                                                                        {{ $creation->title }}
                                                                                    </h4>
                                                                                    <ul class="list-group">
                                                                                        <li
                                                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Category :
                                                                                                {{ $creation->category }}
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="list-group-item d-flex">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Made by :
                                                                                                {{ $creation->name }}
                                                                                            </span>
                                                                                        <li
                                                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Technology use :
                                                                                                {{ $creation->technology }}
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="list-group-item d-flex justify-content-between align-items-center text-dark font-w-6"
                                                                                            style="overflow-wrap: break-word;">
                                                                                            <span>
                                                                                                <p>
                                                                                                    About the app :
                                                                                                    {{ $creation->description }}
                                                                                                </p>
                                                                                            </span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-secondary"
                                                                                data-bs-dismiss="modal">
                                                                                Close
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- end Modal detail --}}

                                                        <tr>
                                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                                <strong>{{ $creation->id }}</strong>
                                                            </td>
                                                            <td>{{ $creation->name }}</td>
                                                            <td>{{ $creation->title }}</td>
                                                            <td>
                                                                <span class="badge bg-label-primary me-1">Verified</span>
                                                            </td>
                                                            {{-- button check --}}
                                                            <td>
                                                                <form action="/creation/disable/{{ $creation->id }}"
                                                                    id="disableCreation" method="post">
                                                                    @method('put')
                                                                    @csrf
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-secondary"
                                                                        onclick="disableCreation()">
                                                                        Disable
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn p-0 dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        {{-- button modal detail --}}
                                                                        <a class="dropdown-item" href=""
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#detailModalCenter{{ $creation->id }}"><i
                                                                                class="bx bx-show me-1"></i> Detail</a>
                                                                        {{-- button modal edit --}}
                                                                        <a class="dropdown-item" href=""
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editModalCenter{{ $creation->id }}"><i
                                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                        {{-- button delete --}}
                                                                        <form action="/admin/creation/{{ $creation->id }}"
                                                                            id="modalDeleteCreationVerified"
                                                                            method="post">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button class="dropdown-item" type="button"
                                                                                onclick="deleteCreationVerified()"><i
                                                                                    class="bx bx-trash me-1"></i>
                                                                                Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--/ Verified -->
                            {{-- end status 2 --}}

                            {{-- status 3 --}}
                            <div class="tab-pane fade" id="navs-top-disable" role="tabpanel">
                                <!-- Disable -->
                                <div class="card">
                                    <h5 class="card-header">Disable</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="min-height: 210px">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Title</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @if (!$creation3)
                                                    <div class="alert alert-warning text-center" role="alert">There is
                                                        no
                                                        data!</div>
                                                @else
                                                    @foreach ($creation3 as $creation)
                                                        {{-- Modal edit --}}
                                                        <div class="modal fade"
                                                            id="editModalDisableCenter{{ $creation->id }}" tabindex="-1"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalCenterTitle">Edit
                                                                            Creation</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="/admin/creation/{{ $creation->id }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="title">Title</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('title') is-invalid @enderror"
                                                                                    id="title" placeholder="Title"
                                                                                    name="title" required autofocus
                                                                                    value="{{ old('title', $creation->title) }}">
                                                                                @error('title')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <label for="category">Category</label>
                                                                            <select class="form-control" name="category"
                                                                                aria-label="Default select example">
                                                                                @if (old('category', $creation->category) == 'Website')
                                                                                    <option>Website / Mobile / UI/UX /
                                                                                        Desktop
                                                                                    </option>
                                                                                    <option selected value="Website">
                                                                                        Website
                                                                                    </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option value="UI/UX">UI/UX
                                                                                    </option>
                                                                                    <option value="Desktop">Desktop
                                                                                    </option>
                                                                                @elseif (old('category', $creation->category) == 'Mobile')
                                                                                    <option>Website / Mobile / UI/UX /
                                                                                        Desktop
                                                                                    </option>
                                                                                    <option value="Website">Website
                                                                                    </option>
                                                                                    <option selected value="Mobile">Mobile
                                                                                    </option>
                                                                                    <option value="UI/UX">UI/UX
                                                                                    </option>
                                                                                    <option value="Desktop">Desktop
                                                                                    </option>
                                                                                @elseif (old('category', $creation->category) == 'UI/UX')
                                                                                    <option>Website / Mobile / UI/UX /
                                                                                        Desktop
                                                                                    </option>
                                                                                    <option value="Website">Website
                                                                                    </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option selected value="UI/UX">
                                                                                        UI/UX</option>
                                                                                    <option value="Desktop">Desktop
                                                                                    </option>
                                                                                @elseif (old('category', $creation->category) == 'Desktop')
                                                                                    <option>Website / Mobile / UI/UX /
                                                                                        Desktop
                                                                                    </option>
                                                                                    <option value="Website">Website
                                                                                    </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option value="UI/UX">UI/UX
                                                                                    </option>
                                                                                    <option selected value="Desktop">
                                                                                        Desktop</option>
                                                                                @else
                                                                                    <option selected>Website / Mobile /
                                                                                        UI/UX
                                                                                        / Desktop
                                                                                    </option>
                                                                                    <option value="Website">Website
                                                                                    </option>
                                                                                    <option value="Mobile">Mobile</option>
                                                                                    <option value="UI/UX">UI/UX
                                                                                    </option>
                                                                                    <option value="Desktop">Desktop
                                                                                    </option>
                                                                                @endif

                                                                            </select>

                                                                            <div class="form-group">
                                                                                <label for="name">Name</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    id="name" placeholder="Name"
                                                                                    name="name" required autofocus
                                                                                    value="{{ old('name', $creation->name) }}">
                                                                                @error('name')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="technology">Technology</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('technology') is-invalid @enderror"
                                                                                    id="technology"
                                                                                    placeholder="Technology"
                                                                                    name="technology" required autofocus
                                                                                    value="{{ old('technology', $creation->technology) }}">
                                                                                @error('technology')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label for="description">
                                                                                    About the app</label>
                                                                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                                                                    rows="3" placeholder="Description" required>{{ old('description', $creation->description) }}</textarea>
                                                                                @error('description')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="form-group mt-3">
                                                                                <label for="image">Update Image</label>
                                                                                <img
                                                                                    class="img-preview  img-fluid mb-3 col-sm-5">
                                                                                <input type="hidden" name="oldImage"
                                                                                    value="{{ $creation->image }}">
                                                                                    <img src="{{ asset('storage/' . $creation->image) }}"
                                                                                        class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                                                <input
                                                                                    class="form-control @error('image') is-invalid @enderror"
                                                                                    id="image" name="image"
                                                                                    type="file" accept="image/*"
                                                                                    onchange="previewImage()">
                                                                                @error('image')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}
                                                                                    </div>
                                                                                @enderror
                                                                            </div>
                                                                        </div>

                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-secondary"
                                                                                data-bs-dismiss="modal">
                                                                                Close
                                                                            </button>
                                                                            <button type="submit"
                                                                                class="btn btn-primary">Save
                                                                                changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- end modal edit --}}

                                                        {{-- Modal detail --}}
                                                        <div class="modal fade"
                                                            id="detailModalDisableCenter{{ $creation->id }}"
                                                            tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered modal-lg"
                                                                role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalCenterTitle">
                                                                            Detail
                                                                            Creation</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="/admin/creation/{{ $creation->id }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <input type="hidden" name="id"
                                                                                value="{{ $creation->id }}">
                                                                            <div class="row">
                                                                                <div class="col-md-4">
                                                                                    @if ($creation->image)
                                                                                        <img src="{{ asset('storage/' . $creation->image) }}"
                                                                                            alt="img-menu"
                                                                                            class="img-fluid">
                                                                                    @else
                                                                                        <img src="https://source.unsplash.com/600x450?website"
                                                                                            alt="img-menu"
                                                                                            class="img-fluid">
                                                                                    @endif
                                                                                </div>
                                                                                <div class="col-md-8 demo-inline-spacing">
                                                                                    <h4 class="">
                                                                                        {{ $creation->title }}
                                                                                    </h4>
                                                                                    <ul class="list-group">
                                                                                        <li
                                                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Category :
                                                                                                {{ $creation->category }}
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="list-group-item d-flex">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Made by :
                                                                                                {{ $creation->name }}
                                                                                            </span>
                                                                                        <li
                                                                                            class="list-group-item d-flex justify-content-between align-items-center">
                                                                                            <span
                                                                                                class="d-flex justify-content-between align-items-center text-dark font-w-6">
                                                                                                Technology use :
                                                                                                {{ $creation->technology }}
                                                                                            </span>
                                                                                        </li>
                                                                                        <li class="list-group-item d-flex justify-content-between align-items-center text-dark font-w-6"
                                                                                            style="overflow-wrap: break-word;">
                                                                                            <span>
                                                                                                About the app :
                                                                                                {{ $creation->description }}
                                                                                            </span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-outline-secondary"
                                                                                data-bs-dismiss="modal">
                                                                                Close
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- end Modal detail --}}

                                                        <tr>
                                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                                <strong>{{ $creation->id }}</strong>
                                                            </td>
                                                            <td>{{ $creation->name }}</td>
                                                            <td>{{ $creation->title }}</td>
                                                            <td>
                                                                <span class="badge bg-label-secondary me-1">Disable</span>
                                                            </td>
                                                            {{-- button check --}}
                                                            <td>
                                                                <form action="/creation/active/{{ $creation->id }}" id="activeCreation"
                                                                    method="post">
                                                                    @method('put')
                                                                    @csrf
                                                                    <button type="button" class="btn btn-sm btn-success"
                                                                        onclick="activeCreation()">
                                                                        Active
                                                                    </button>
                                                                </form>
                                                            </td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn p-0 dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        {{-- button modal detail --}}
                                                                        <a class="dropdown-item" href=""
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#detailModalDisableCenter{{ $creation->id }}"><i
                                                                                class="bx bx-show me-1"></i> Detail</a>
                                                                        {{-- button modal edit --}}
                                                                        <a class="dropdown-item" href=""
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editModalDisableCenter{{ $creation->id }}"><i
                                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                        {{-- button delete --}}
                                                                        <form action="/admin/creation/{{ $creation->id }}"
                                                                            id="modalDeleteCreationDisable"
                                                                            method="post">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button class="dropdown-item" type="button"
                                                                                onclick="deleteCreationDisable()"><i
                                                                                    class="bx bx-trash me-1"></i>
                                                                                Delete</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--/ Disable -->
                            </div>
                            {{-- end status 3 --}}

                        </div>
                    </div>
                </div>
                {{-- / Tabs --}}
                <!-- / Content -->

                @include('dashboard.partials.footer')

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    {{-- start script --}}
    <script>
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

        function deleteCreationDisable() {
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
                    document.getElementById('modalDeleteCreationDisable').submit()
                }
            })
        }

        // status 1
        function verifiedCreation() {
            Swal.fire({
                title: 'Do you want to Verified this work?',
                showCancelButton: true,
                confirmButtonText: 'Yes',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    document.getElementById('verifiedCreation').submit()
                }
            })
        }

        // status 2
        function disableCreation() {
            Swal.fire({
                title: 'Do you want to Disable this work?',
                showCancelButton: true,
                confirmButtonText: 'Yes',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    document.getElementById('disableCreation').submit()
                }
            })
        }

        // status 3
        function activeCreation() {
            Swal.fire({
                title: 'Do you want to Active this work?',
                showCancelButton: true,
                confirmButtonText: 'Yes',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    document.getElementById('activeCreation').submit()
                }
            })
        }
    </script>
    {{-- end script --}}
@endsection
