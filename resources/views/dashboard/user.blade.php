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

                <div class="container-xxl flex-grow-1 container-p-y">
                    @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{-- {{ session('success') }} --}}
                        User has been <span class="badge bg-label-info">{{ session('success') }}</span>
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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> User</h4>

                    <ul class="nav nav-tabs" role="tablist">

                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-unVerified" aria-controls="navs-top-unVerified" aria-selected="true">Unverified</button>
                        </li>

                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-verified" aria-controls="navs-top-verified" aria-selected="true">Verified</button>
                        </li>

                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-disable" aria-controls="navs-top-disable" aria-selected="true">Disable</button>
                        </li>

                    </ul>

                    <div class="tab-content">

                        <!-- UnVerified -->
                        <div class="tab-pane fade show active" id="navs-top-unVerified" role="tabpanel">
                            <div class="card">
                                <h5 class="card-header">UnVerified</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover p-4" id="table-unverified" style="min-height: 220px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Nisn</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @if (!$users)
                                            <div class="alert alert-warning text-center" role="alert">There is no
                                                data!</div>
                                            @elseif ($users)
                                            @foreach ($users as $user)

                                            {{-- Modal edit --}}
                                            <div class="modal fade" id="editModalCenter{{ $user->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Edit
                                                                User</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="/admin/user/{{ $user->id }}" method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" required autofocus value="{{ old('name', $user->name) }}">
                                                                    @error('name')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Technology" name="email" required autofocus value="{{ old('email', $user->email) }}">
                                                                    @error('email')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="nisn">Nisn</label>
                                                                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="Technology" name="nisn" required autofocus value="{{ old('nisn', $user->nisn) }}">
                                                                    @error('nisn')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal edit --}}


                                            <tr>
                                                <td>
                                                    {{ $user->id }}
                                                </td>

                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->name }}</strong></td>
                                                <td>
                                                    {{ $user->nisn }}
                                                </td>

                                                <td>
                                                    {{ $user->email }}
                                                </td>

                                                <td>
                                                    <span class="badge bg-label-warning me-1">Unverified</span>
                                                </td>

                                                <td>
                                                    <form action="/user/check/{{ $user->id }}" id="verifiedUser" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <button type="button" class="btn btn-sm btn-primary" onclick="verifiedUser()">
                                                            Verified
                                                        </button>
                                                    </form>
                                                </td>

                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#editModalCenter{{ $user->id }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <form action="/admin/user/{{$user->id}}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i> Delete</button>

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
                        <!--/ UnVerified -->

                        <!-- Verified -->
                        <div class="tab-pane fade" id="navs-top-verified" role="tabpanel">
                            <div class="card">
                                <h5 class="card-header">Verified</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table-verified" style="min-height: 210px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Nisn</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @if (!$user2)
                                            <div class="alert alert-warning text-center" role="alert">There is no
                                                data!</div>
                                            @elseif ($user2)
                                            @foreach ($user2 as $user)

                                            {{-- Modal edit --}}
                                            <div class="modal fade" id="editModalCenter{{ $user->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Edit
                                                                User</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="/admin/user/{{ $user->id }}" method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" required autofocus value="{{ old('name', $user->name) }}">
                                                                    @error('name')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Technology" name="email" required autofocus value="{{ old('email', $user->email) }}">
                                                                    @error('email')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="nisn">Nisn</label>
                                                                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="Technology" name="nisn" required autofocus value="{{ old('nisn', $user->nisn) }}">
                                                                    @error('nisn')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal edit --}}



                                            <tr>

                                                <td>
                                                    {{ $user->id }}
                                                </td>

                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->name }}</strong>
                                                </td>

                                                <td>
                                                    {{ $user->nisn }}
                                                </td>

                                                <td>
                                                    {{ $user->email }}
                                                </td>

                                                <td>
                                                    <span class="badge bg-label-primary me-1">Verified</span>
                                                </td>

                                                <td>
                                                    <form action="/user/disable/{{ $user->id }}" id="disableUser" method="post">
                                                        @method('put')
                                                        @csrf
                                                        <button type="button" class="btn btn-sm btn-warning" onclick="disableUser()">
                                                            Disable
                                                        </button>
                                                    </form>
                                                </td>

                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#editModalCenter{{ $user->id }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                                                            <form action="/admin/user/{{$user->id}}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i> Delete</button>

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

                        <!-- Disable -->
                        <div class="tab-pane fade" id="navs-top-disable" role="tabpanel">
                            <div class="card">
                                <h5 class="card-header">Disable</h5>
                                <div class="table-responsive">
                                    <table class="table table-hover" id="table-disable" style="min-height: 210px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Nisn</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @if (!$user3)
                                            <div class="alert alert-warning text-center" role="alert">There is no
                                                data!</div>
                                            @elseif ($user3)
                                            @foreach ($user3 as $user)

                                            {{-- Modal edit --}}
                                            <div class="modal fade" id="editModalCenter{{ $user->id }}" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="modalCenterTitle">Edit
                                                                User</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="/admin/user/{{ $user->id }}" method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <div class="modal-body">

                                                                <div class="form-group">
                                                                    <label for="name">Name</label>
                                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" name="name" required autofocus value="{{ old('name', $user->name) }}">
                                                                    @error('name')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Technology" name="email" required autofocus value="{{ old('email', $user->email) }}">
                                                                    @error('email')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="nisn">Nisn</label>
                                                                    <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" placeholder="Technology" name="nisn" required autofocus value="{{ old('nisn', $user->nisn) }}">
                                                                    @error('nisn')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                    @enderror
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                                    Close
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal edit --}}





                                            <tr>

                                                <td>
                                                    {{ $user->id }}
                                                </td>

                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $user->name }}</strong>
                                                </td>

                                                <td>
                                                    {{ $user->nisn }}
                                                </td>

                                                <td>
                                                    {{ $user->email }}
                                                </td>

                                                <td>
                                                    <span class="badge bg-label-secondary me-1">Disable</span>
                                                </td>

                                                <td>
                                                    <form action="/user/active/{{ $user->id }}" id="activeUser_{{$user->id}}" method="post">
                                                        @method('put')
                                                        @csrf   
                                                        <button type="button" class="btn btn-sm btn-success" onclick="activeUser({{$user->id}})">
                                                            Active
                                                        </button>
                                                    </form>
                                                </td>

                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#editModalCenter{{ $user->id }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <form action="/admin/user/{{$user->id}}" method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="dropdown-item" onclick="return confirm('Are you sure?')"><i class="bx bx-trash me-1"></i> Delete</button>

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
                        <!--/ Disable -->
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                @include('dashboard.partials.footer')
                <!-- / Footer -->

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
    function deleteUserVerified() {
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
                document.getElementById('modalDeleteUserVerified').submit()
            }
        })
    }

    function deleteUserDisable() {
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
                document.getElementById('modalDeleteUserDisable').submit()
            }
        })
    }

    // status 1
    function verifiedUser() {
        Swal.fire({
            title: 'Do you want to Verified this work?',
            showCancelButton: true,
            confirmButtonText: 'Yes',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                document.getElementById('verifiedUser').submit()
            }
        })
    }

    // status 2
    function disableUser() {
        Swal.fire({
            title: 'Do you want to Disable this work?',
            showCancelButton: true,
            confirmButtonText: 'Yes',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                document.getElementById('disableUser').submit()
            }
        })
    }

    // status 3
    function activeUser(id) {
        Swal.fire({
            title: 'Do you want to Active this work?',
            showCancelButton: true,
            confirmButtonText: 'Yes',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                document.getElementById(`activeUser_${id}`).submit()
            }
        })
    }

    // Data table
    $(document).ready(function() {
        $('#table-unverified').DataTable({});
    });
    $(document).ready(function() {
        $('#table-verified').DataTable();
    });
    $(document).ready(function() {
        $('#table-disable').DataTable();
    });
</script>
{{-- end script --}}

@endsection