@extends('dashboard.layouts.main')
@section('container')
    {{-- Layout wrapper --}}
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Sidebar -->
            @include('dashboard.partials.sidebar')
            <!-- End Sidebar -->

            {{-- Layout container --}}
            <div class="layout-page">

                <!-- Navbar -->

                @include('dashboard.partials.navbar')

                <!-- / Navbar -->

                {{-- Content wrapper --}}
                <div class="content-wrapper">
                    <!-- Content -->
                    {{-- Tabs --}}
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @if (session()->has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @elseif (session()->has('primary'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('primary') }}
                            </div>
                        @elseif (session()->has('danger'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('danger') }}
                            </div>
                        @endif
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Category</h4>
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-create" aria-controls="navs-top-create"
                                    aria-selected="true">Create Category</button>
                            </li>

                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-category" aria-controls="navs-top-category"
                                    aria-selected="true">Category</button>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <!-- Basic Layout -->
                            <div class="tab-pane fade show active" id="navs-top-create" role="tabpanel">
                                <div class="col-xxl">
                                    <div class="card mb-4">
                                        <div class="card-header d-flex align-items-center justify-content-between">
                                            <h5 class="mb-0">Create Category</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="/admin/category" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row mb-3">
                                                    <label class="col-sm-2 col-form-label"
                                                        for="basic-default-name">Category</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            id="name" name="name" placeholder="Category" autofocus
                                                            value="{{ old('name') }}" />
                                                        @error('name')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-10">
                                                        <button type="submit" class="btn btn-primary">Create</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Category --}}
                            <div class="tab-pane fade" id="navs-top-category" role="tabpanel">
                                <div class="card">
                                    <h5 class="card-header">Category</h5>
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="table-category" style="min-height: 210px">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-border-bottom-0">
                                                @if (!$categories)
                                                    <div class="alert alert-warning text-center" role="alert">There is
                                                        no data!</div>
                                                @else
                                                    @foreach ($categories as $category)
                                                        {{-- Modal edit --}}
                                                        <div class="modal fade" id="editModalCategory{{ $category->id }}"
                                                            tabindex="-1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="modalCenterCategory">
                                                                            Edit
                                                                            Category</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <form action="/admin/category/{{ $category->id }}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @method('put')
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <label for="name">Name</label>
                                                                                <input type="text"
                                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                                    id="name" placeholder="Category"
                                                                                    name="name" required autofocus
                                                                                    value="{{ old('name', $category->name) }}">
                                                                                @error('name')
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

                                                        <tr>
                                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                                <strong>{{ $category->id }}</strong>
                                                            </td>
                                                            <td>{{ $category->name }}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn p-0 dropdown-toggle hide-arrow"
                                                                        data-bs-toggle="dropdown">
                                                                        <i class="bx bx-dots-vertical-rounded"></i>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        {{-- button modal edit --}}
                                                                        <a class="dropdown-item" href=""
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editModalCategory{{ $category->id }}"><i
                                                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                        {{-- button delete --}}
                                                                        <form action="/admin/category/{{ $category->id }}"
                                                                            id="modalDeleteCategory" method="post">
                                                                            @method('delete')
                                                                            @csrf
                                                                            <button class="dropdown-item" type="button"
                                                                                onclick="deleteCategory()"><i
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

                        </div>
                    </div>
                    {{-- / Tabs --}}

                    <!-- / Content -->

                </div>
                @include('dashboard.partials.footer')
                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    <!-- / Layout wrapper -->

    {{-- Script --}}
    <script>
        function deleteCategory() {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to return this Category!",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('modalDeleteCategory').submit()
                }
            })
        }

        // data table
        $(document).ready(function() {
            $('#table-category').DataTable();
        });
    </script>
@endsection
