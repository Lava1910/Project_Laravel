<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{url("/teacher/home")}}" class="nav-link">Trang chủ</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Buổi học</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Bài tập</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <div class="navbar-nav ml-auto">
        <div class="nav-item">
            @guest
                <a href="{{route("login")}}" class="btn btn-default">Login</a>
            @endguest

            @auth
                <form action="{{route("logout")}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-default">Logout</button>
                </form>
            @endauth
        </div>
    </div>
</nav>
