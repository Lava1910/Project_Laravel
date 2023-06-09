<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{ url("/") }}"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","FPT - Education")</title>
    @include("user.teacher.html.css")
    @yield("custom_css")
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    @include('admin.html.nav')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('user.teacher.html.aside')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    @yield("content_header")
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield("main_content")
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('user.teacher.html.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
{{--@include("admin.html.notification")--}}

@include('user.teacher.html.js')
@yield("custom_js")
</body>
</html>
