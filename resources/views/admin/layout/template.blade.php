<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('skydash/dist/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('skydash/dist/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('skydash/dist/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('skydash/dist/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('skydash/dist/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <!-- endinject -->
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('skydash/dist/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('skydash/dist/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}"> --}}
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.min.css"> --}}
    <link rel="stylesheet" href="{{asset('skydash/dist/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('skydash/dist/assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('skydash/dist/assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('skydash/dist/assets/images/favicon.png')}}" />
    @stack('css')
  </head>
  <body>
    <div class="wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.layout.header')
    </div>
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layout.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                {{-- @include('layout.breadcrumb') --}}
                {{-- @include('admin.layout.breadcrumb') --}}

                <!-- Main content -->
                <section class="content">
            
                  @yield('content')
            
                </section>
                <!-- /.content -->
              </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          @include('admin.layout.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('skydash/dist/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    {{-- <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}

{{-- Datatables & Plugin  --}}

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap5.min.js"></script> --}}
    {{-- <script src="{{asset('skydash/dist/assets/vendors/chart.js/Chart.min.js')}}"></script> --}}
    <script src="{{asset('skydash/dist/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('skydash/dist/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script> --}}
    {{-- <script src="{{asset('skydash/dist/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script> --}}
    <script src="{{asset('skydash/dist/assets/js/dataTables.select.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('skydash/dist/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('skydash/dist/assets/js/template.js')}}"></script>
    <script src="{{asset('skydash/dist/assets/js/settings.js')}}"></script>
    <script src="{{asset('skydash/dist/assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    {{-- <script src="{{asset('skydash/dist/assets/js/jquery.cookie.js')}}" type="text/javascript"></script> --}}
    {{-- <script src="{{asset('skydash/dist/assets/js/dashboard.js')}}"></script> --}}
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
    <script>
      $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
  </script>
  @stack('js')
  </body>
</html>