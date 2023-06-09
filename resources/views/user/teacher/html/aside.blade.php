<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="images/logo-1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text">FPT Education</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="images/admin-icon.png" class="img-circle elevation-2" alt="User Image">
            </div>
            @if(Auth::check())
            <div class="info">
                <a href="#" class="d-block">{{Auth::user()->name}}</a>
            </div>
            @endif
        </div>
    </div>
</aside>
