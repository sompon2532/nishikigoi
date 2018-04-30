<!-- Sidebar user panel -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
    </div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
    <li class="header">เมนูหลัก</li>
    <li>
        <a href="{{ route('admin.index') }}">
            <i class="fa fa-dashboard"></i> <span>ข้อมูลทั่วไป</span>
        </a>
    </li>

    <li>
        <a href="{{ route('event.index') }}">
            <i class="fa fa-gamepad"></i> <span>อีเว้นท์</span>
        </a>
    </li>

    <li>
        <a href="{{ route('news.index') }}">
            <i class="fa fa-newspaper-o"></i> <span>ข่าวสาร</span>
        </a>
    </li>

    <li>
        <a href="{{ route('category.index') }}">
            <i class="fa fa-bars"></i></i> <span>หมวดหมู่</span>
        </a>
    </li>

    <li>
        <a href="{{ route('farm.index') }}">
            <i class="fa fa-dot-circle-o"></i> <span>ฟาร์ม</span>
        </a>
    </li>

    <li>
        <a href="{{ route('strain.index') }}">
            <i class="fa fa-deviantart"></i> <span>สายพันธุ์</span>
        </a>
    </li>

    <li>
        <a href="{{ route('store.index') }}">
            <i class="fa fa-stop"></i> <span>ที่เก็บปลา</span>
        </a>
    </li>

    <li>
        <a href="{{ route('koi.index') }}">
            <i class="fa fa-archive"></i> <span>ปลา</span>
        </a>
    </li>
</ul>