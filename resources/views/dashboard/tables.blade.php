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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Account</h4>

                    <!-- Verified -->
                    <div class="card">
                        <h5 class="card-header">Verified</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Nisn</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                        <td>Albert Cook</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                                        <td>Barry Hunter</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                                        <td>Trevor Baker</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Verified -->

                    <hr class="my-5" />

                    <!-- UnVerified -->
                    <div class="card">
                        <h5 class="card-header">UnVerified</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Nisn</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                        <td>Albert Cook</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                                        <td>Barry Hunter</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                                        <td>Trevor Baker</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ UnVerified -->
                    
                    <hr class="my-5" />

                    <!-- Disable -->
                    <div class="card">
                        <h5 class="card-header">Disable</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Nisn</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                                        <td>Albert Cook</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                                        <td>Barry Hunter</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs Project</strong></td>
                                        <td>Trevor Baker</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap Project</strong>
                                        </td>
                                        <td>Jerry Milton</td>
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Disable -->
                </div>
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


@endsection