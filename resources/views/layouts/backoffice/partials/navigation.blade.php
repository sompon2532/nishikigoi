<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <p>
            <a href="{{ route('admin.logout') }}" class="btn btn-danger btn-xs">Logout</a>
        </p>
    </div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li class="header">Main Menu</li>
    <li>
        <a href="{{ route('dashboard.index') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>

    <li>
        <a href="{{ route('event.index') }}">
            <i class="fa fa-gamepad"></i> <span>Event</span>
        </a>
    </li>

    <li>
        <a href="{{ route('news.index') }}">
            <i class="fa fa-newspaper-o"></i> <span>News</span>
        </a>
    </li>

    <li>
        <a href="{{ route('category.index') }}">
            <i class="fa fa-bars"></i></i> <span>Category</span>
        </a>
    </li>

    <li>
        <a href="{{ route('farm.index') }}">
            <i class="fa fa-dot-circle-o"></i> <span>Farm</span>
        </a>
    </li>

    <li>
        <a href="{{ route('strain.index') }}">
            <i class="fa fa-deviantart"></i> <span>Breed</span>
        </a>
    </li>

    <li>
        <a href="{{ route('store.index') }}">
            <i class="fa fa-stop"></i> <span>Store</span>
        </a>
    </li>

    <li>
        <a href="{{ route('koi.index') }}">
            <i class="fa fa-archive"></i> <span>Fish</span>
        </a>
    </li>

    <li>
        <a href="{{ route('country.index') }}">
            <i class="fa fa-globe"></i> <span>Country</span>
        </a>
    </li>

    <li>
        <a href="{{ route('partner.index') }}">
            <i class="fa fa-handshake-o"></i> <span>Partner</span>
        </a>
    </li>

    <li>
        <a href="{{ route('manage.index') }}">
            <i class="fa fa-users"></i> <span>Admin</span>
        </a>
    </li>
</ul>