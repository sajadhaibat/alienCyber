<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets/Admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="{{ route('blogs.index') }}"><i class="fa fa-list"></i> <span>Blogs</span></a></li>
            <li><a href="{{ route('scholarship.index') }}"><i class="fa fa-search-plus"></i> <span>Scholarships</span></a></li>
            <li><a href="{{ route('job.index')}}"><i class="fa fa-search"></i> <span>Jobs</span></a></li>
            <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 <i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>

    </section>

</aside>
