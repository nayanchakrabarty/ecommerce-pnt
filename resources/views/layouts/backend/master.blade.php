<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.backend._head')
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        @include('layouts.backend._header')
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        @include('layouts.backend._mainNav')
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ isset($title)?$title:config('app.name') }}
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        @yield('content')
        <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        @include('layouts.backend._footer')
    </footer>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
@include('layouts.backend._scripts')

</body>
</html>
