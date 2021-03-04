<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('admin/dashboard')}}">Startmin</a>
    </div>

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <ul class="nav navbar-nav navbar-left navbar-top-links">
        <li><a href="{{url('/')}}"><i class="fa fa-home fa-fw"></i> Website</a></li>
    </ul>

    <ul class="nav navbar-right navbar-top-links">
{{--        <li class="dropdown navbar-inverse">--}}
{{--            <a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
{{--                <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>--}}
{{--            </a>--}}
{{--            <ul class="dropdown-menu dropdown-alerts">--}}
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <div>--}}
{{--                            <i class="fa fa-comment fa-fw"></i> New Comment--}}
{{--                            <span class="pull-right text-muted small">4 minutes ago</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <div>--}}
{{--                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers--}}
{{--                            <span class="pull-right text-muted small">12 minutes ago</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <div>--}}
{{--                            <i class="fa fa-envelope fa-fw"></i> Message Sent--}}
{{--                            <span class="pull-right text-muted small">4 minutes ago</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <div>--}}
{{--                            <i class="fa fa-tasks fa-fw"></i> New Task--}}
{{--                            <span class="pull-right text-muted small">4 minutes ago</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">--}}
{{--                        <div>--}}
{{--                            <i class="fa fa-upload fa-fw"></i> Server Rebooted--}}
{{--                            <span class="pull-right text-muted small">4 minutes ago</span>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="divider"></li>--}}
{{--                <li>--}}
{{--                    <a class="text-center" href="#">--}}
{{--                        <strong>See All Alerts</strong>--}}
{{--                        <i class="fa fa-angle-right"></i>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> {{\Illuminate\Support\Facades\Auth::user()->name}} <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-user">
{{--                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
{{--                </li>--}}
{{--                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
{{--                </li>--}}
                <li class="divider"></li>
                <li><a href="{{url('admin/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
{{--                <li class="sidebar-search">--}}
{{--                    <div class="input-group custom-search-form">--}}
{{--                        <input type="text" class="form-control" placeholder="Search...">--}}
{{--                        <span class="input-group-btn">--}}
{{--                                        <button class="btn btn-primary" type="button">--}}
{{--                                            <i class="fa fa-search"></i>--}}
{{--                                        </button>--}}
{{--                                </span>--}}
{{--                    </div>--}}
{{--                    <!-- /input-group -->--}}
{{--                </li>--}}
                <li>
                    <a href="{{url('admin/dashboard')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                <li>
                    <a href="{{url('/admin/user')}}"><i class="fa fa-table fa-fw"></i> Manage User</a>
                </li>
                @endif
                <li>
                    <a href="{{url('/admin/post/manage')}}"><i class="fa fa-table fa-fw"></i> Manage Post</a>
                </li>

                <li>
                    <a href="{{url('/admin/post/create')}}"><i class="fa fa-table fa-fw"></i> Create Post</a>
                </li>
                <li>
                    <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                </li>



            </ul>
        </div>
    </div>
</nav>