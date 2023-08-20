@include('admin.layouts.head')
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


    <!-- Navbar -->
@include('admin.layouts.navbar')

<!-- /.navbar -->

    <!-- Main Sidebar Container -->
@include('admin.layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.layouts.breadcramp')

        @yield('content')

    </div>
    <!-- /.content-wrapper -->
{{--  footer  --}}

@include('admin.layouts.footer')
{{--  footer  --}}

<!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('admin.layouts.scripts')
