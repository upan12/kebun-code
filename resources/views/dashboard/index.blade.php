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
          <div class="row">

            <!-- User Statistics -->
            <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-6">
              <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                  <div class="card-title mb-0">
                    <h5 class="m-0 me-2">User Statistics</h5>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column align-items-center gap-1">
                      <h2 class="mb-2">8,258</h2>
                      <span>Total Users</span>
                    </div>
                    <div id="orderStatisticsChart"></div>
                  </div>
                  <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-primary"><i class='bx bxs-user-minus'></i></span>
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">UnVerified User</h6>
                        </div>
                        <div class="user-progress">
                          <small class="fw-semibold">82.5k</small>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-success"><i class='bx bxs-user-check'></i></span>
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Verified User</h6>
                        </div>
                        <div class="user-progress">
                          <small class="fw-semibold">10</small>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-info"><i class='bx bxs-user-x'></i></span>
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Disable User</h6>
                        </div>
                        <div class="user-progress">
                          <small class="fw-semibold">849k</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--/ User Statistics -->

            <!-- User Statistics 2 -->
            <div class="col-md-6 col-lg-6 col-xl-6 order-0 mb-6">
              <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                  <div class="card-title mb-0">
                    <h5 class="m-0 me-2">Creation Statistics</h5>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column align-items-center gap-1">
                      <h2 class="mb-2">8,258</h2>
                      <span>Total Creations</span>
                    </div>
                    <div id="orderStatisticsCharts"></div>
                  </div>
                  <ul class="p-0 m-0">
                    <li class="d-flex mb-4 pb-1">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-primary"><i class='bx bxs-minus-circle'></i></span>
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">UnVerified Creation</h6>
                        </div>
                        <div class="user-progress">
                          <small class="fw-semibold">82.5k</small>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-success"><i class='bx bxs-check-circle'></i></span>
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Verified Creation</h6>
                        </div>
                        <div class="user-progress">
                          <small class="fw-semibold">10</small>
                        </div>
                      </div>
                    </li>
                    <li class="d-flex mb-4 pb-1">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-info"><i class='bx bxs-x-circle'></i></span>
                      </div>
                      <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                        <div class="me-2">
                          <h6 class="mb-0">Disable Creation</h6>
                        </div>
                        <div class="user-progress">
                          <small class="fw-semibold">849k</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--/ User Statistics  2 -->

          </div>
          
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