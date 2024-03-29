<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url("public/img/avatar3.png") ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>Hello, Jane</p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..." />
                    <span class="input-group-btn">
                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i
                                class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("public/pages/widgets.html") ?>">
                        <i class="fa fa-th"></i> <span>Widgets</span> <small
                            class="badge pull-right bg-green">new</small>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("public/pages/charts/morris.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Morris</a>
                        </li>
                        <li><a href="<?php echo base_url("public/pages/charts/flot.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Flot</a></li>
                        <li><a href="<?php echo base_url("public/pages/charts/inline.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Inline
                                charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("public/pages/UI/general.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> General</a>
                        </li>
                        <li><a href="<?php echo base_url("public/pages/UI/icons.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Icons</a></li>
                        <li><a href="<?php echo base_url("public/pages/UI/buttons.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Buttons</a>
                        </li>
                        <li><a href="<?php echo base_url("public/pages/UI/sliders.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Sliders</a>
                        </li>
                        <li><a href="<?php echo base_url("public/pages/UI/timeline.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Timeline</a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>Forms</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("public/pages/forms/general.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> General
                                Elements</a></li>
                        <li><a href="<?php echo base_url("public/pages/forms/advanced.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Advanced
                                Elements</a></li>
                        <li><a href="<?php echo base_url("public/pages/forms/editors.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Editors</a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("public/pages/tables/simple.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Simple
                                tables</a></li>
                        <li><a href="<?php echo base_url("public/pages/tables/data.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Data
                                tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url("public/pages/calendar.html") ?>">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <small class="badge pull-right bg-red">3</small>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("public/pages/mailbox.html") ?>">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <small class="badge pull-right bg-yellow">12</small>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("public/pages/examples/invoice.html") ?>"><i
                                    class="fa fa-angle-double-right"></i>
                                Invoice</a></li>
                        <li><a href="<?php echo base_url("public/pages/examples/login.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Login</a>
                        </li>
                        <li><a href="<?php echo base_url("public/pages/examples/register.html") ?>"><i
                                    class="fa fa-angle-double-right"></i>
                                Register</a></li>
                        <li><a href="<?php echo base_url("public/pages/examples/lockscreen.html") ?>"><i
                                    class="fa fa-angle-double-right"></i>
                                Lockscreen</a></li>
                        <li><a href="<?php echo base_url("public/pages/examples/404.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> 404 Error</a>
                        </li>
                        <li><a href="<?php echo base_url("public/pages/examples/500.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> 500 Error</a>
                        </li>
                        <li><a href="<?php echo base_url("public/pages/examples/blank.html") ?>"><i
                                    class="fa fa-angle-double-right"></i> Blank
                                Page</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>