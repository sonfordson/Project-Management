<aside class="main-sidebar" style=" height:100%; position:fixed; bottom:0px;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->


        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#"><i class="fa fa-cog"></i> <span>Account Setting</span>
                    </i>
                </a>

            </li>
            <li class="treeview">
                <a href="{{ route('project.index') }}"><i class="fa fa-files-o"></i><span>Projects</span>
                    <small class="label pull-right bg-green">new</small>
                </a>
            </li>
            <li class="treeview">
                <a href="{{ route('milestone.index') }}"><i class="fa fa-files-o"></i><span>Milestones</span>
                    <small class="label pull-right bg-green">new</small>
                </a>
            </li>
            <li>
                <a href="{{ route('team.index') }}">
                    <i class="fa fa-group"></i> <span>Teams</span>
                    <small class="label pull-right bg-green">new</small>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-th"></i> <span>Todos</span>
                    <small class="label pull-right bg-green">new</small>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-group"></i> <span>Users</span>
                    <small class="label pull-right bg-green">new</small>
                </a>
            </li>
            <li>
                <a href="/auth/logout"><i class="fa fa-lock"></i> <span>Logout</span></a>
            </li> 

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>