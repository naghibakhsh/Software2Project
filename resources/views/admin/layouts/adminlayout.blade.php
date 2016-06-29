
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - SHARED ON 20Script</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON GFXFree.Net">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets') }}/skin/default_skin/css/theme.css">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets') }}/admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets') }}/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('assets') }}/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page sb-l-o sb-r-c">

<!-- Start: Theme Preview Pane -->
<div id="skin-toolbox">
    <div class="panel">
        <div class="panel-heading">
                <span class="panel-icon"><i class="fa fa-gear text-primary"></i>
                </span>
            <span class="panel-title"> Theme Options</span>
        </div>
        <div class="panel-body pn">

            <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                <li class="active">
                    <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>

            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                    <form id="toolbox-header-skin">
                        <h4 class="mv20">Header Skins</h4>

                        <!--                             <div class="checkbox-custom checkbox-disabled mb5">
                                                        <input type="checkbox" name="headerTwoTone" id="headerTwoTone" checked>
                                                        <label for="headerTwoTone">Two Tone Header</label>
                                                    </div>

                                                    <hr class="mv10 alt">
                         -->
                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom checkbox-disabled fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin8" checked value="bg-light">
                                <label for="headerSkin8">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-primary mb5">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                <label for="headerSkin1">Primary</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-info mb5">
                                <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                <label for="headerSkin3">Info</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-warning mb5">
                                <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                <label for="headerSkin4">Warning</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-danger mb5">
                                <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                <label for="headerSkin5">Danger</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-alert mb5">
                                <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                <label for="headerSkin6">Alert</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-system mb5">
                                <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                <label for="headerSkin7">System</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-success mb5">
                                <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                <label for="headerSkin2">Success</label>
                            </div>
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                <label for="headerSkin9">Dark</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                    <form id="toolbox-sidebar-skin">

                        <h4 class="mv20">Sidebar Skins</h4>
                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                <label for="sidebarSkin3">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-light mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                <label for="sidebarSkin2">Lighter</label>
                            </div>

                        </div>

                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                    <form id="toolbox-settings-misc">
                        <h4 class="mv20 mtn">Layout Options</h4>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                        <h4 class="mv20">Layout Options</h4>
                        <div class="form-group">
                            <div class="radio-custom mb5">
                                <input type="radio" id="fullwidth-option" checked name="layout-option">
                                <label for="fullwidth-option">Fullwidth Layout</label>
                            </div>
                        </div>
                        <div class="form-group mb20">
                            <div class="radio-custom radio-disabled mb5">
                                <input type="radio" id="boxed-option" name="layout-option" disabled>
                                <label for="boxed-option">Boxed Layout <b class="text-muted">(Coming Soon)</b></label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="form-group mn br-t p15">
                <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
            </div>

        </div>
    </div>
</div>
<!-- End: Theme Preview Pane -->

<!-- Start: Main -->
<div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top bg-light">
        <div class="navbar-branding">
            <a class="navbar-brand" href="dashboard.html"> <b>Admin</b>Designs
            </a>
            <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
            <ul class="nav navbar-nav pull-right hidden">
                <li>
                    <a href="#" class="sidebar-menu-toggle">
                        <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                    </a>
                </li>
            </ul>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li class="ph10 pv20 hidden-xs"> <i class="fa fa-circle text-tp fs8"></i>
            </li>
            <li class="dropdown">
                <a href="{{ url('/admin/profile') }}" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
                    <!-- TODO: Name & Family Place -->
                    <span>@yield('Name')</span>
                    <span class="caret caret-tp hidden-xs"></span>
                </a>
                <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                    <!--  Username -->
                    <li class="bg-light br-b br-light p8">
                        <!-- TODO: Username Place -->
                        <a href="{{ url('/admin/profile') }}" class="fw600 p12 animated animated-short fadeInUp">
                            <span class="fa fa-user pr5"></span> @yield('Username')
                        </a>
                        <div class="clearfix"></div>

                    </li>
                    <!--  Email    -->
                    <li class="of-h">
                        <a href="{{ url('/admin/profile') }}" class="fw600 p12 animated animated-short fadeInUp">
                            <span class="fa fa-envelope pr5"></span> @yield('Email')
                        </a>
                    </li>
                    <!--  Logout   -->
                    <li class="br-t of-h">
                        <a href="/logout" class="fw600 p12 animated animated-short fadeInDown">
                            <span class="fa fa-power-off pr5"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>

    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary">
        <div class="nano-content">

            <!-- Start: Sidebar Header -->
            <header class="sidebar-header">

            </header>
            <!-- End: Sidebar Header -->

            <!-- sidebar menu -->
            <ul class="nav sidebar-menu">
                <li class="active">
                    <a href="{{ url('/admin') }}">
                        <span class="glyphicons glyphicons-home"></span>
                        <span class="sidebar-title">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-label pt15">Manager Tools</li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="glyphicons glyphicons-fire"></span>
                        <span class="sidebar-title">Employee</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ url('/admin/addDriver') }}">
                                <span class="glyphicons glyphicons-book"></span>Add New Employee</a>
                        </li>
                        <li>
                            <a href="{{ url('/admin/Drivers/view') }}">
                                <span class="glyphicons glyphicons-show_big_thumbnails"></span>View Employee</a>
                        </li>
                    </ul>
                </li>
                 <li class="sidebar-label pt20">Reports Tools</li>
                <li>
                    <a href="{{ url('/admin/report') }}">
                        <span class="fa fa-envelope-o"></span>
                        <span class="sidebar-title">Report By date</span>
                    </a>
                </li>

            </ul>
            <div class="sidebar-toggle-mini">
                <a href="#">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
        </div>
    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">


    </section>
    <!-- End: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar-Dropdown -->
        <div id="topbar-dropmenu">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-success">
                        <span class="metro-icon glyphicons glyphicons-inbox"></span>
                        <p class="metro-title">Messages</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-info">
                        <span class="metro-icon glyphicons glyphicons-parents"></span>
                        <p class="metro-title">Users</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-alert">
                        <span class="metro-icon glyphicons glyphicons-headset"></span>
                        <p class="metro-title">Support</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-primary">
                        <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                        <p class="metro-title">Settings</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-warning">
                        <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                        <p class="metro-title">Videos</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-system">
                        <span class="metro-icon glyphicons glyphicons-picture"></span>
                        <p class="metro-title">Pictures</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- End: Topbar-Dropdown -->

        <!-- Start: Topbar -->
        <header id="topbar">
            @yield('NavPage')
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id="content" class="">
            @yield('Content')
        </section>
        <!-- End: Content -->

    </section>
    <!-- Start: Right Sidebar -->
    <aside id="sidebar_right" class="nano">
        <div class="sidebar_right_content nano-content">
            <div class="tab-block sidebar-block br-n">
                <ul class="nav nav-tabs tabs-border nav-justified hidden">
                    <li class="active">
                        <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                    </li>
                    <li>
                        <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                    </li>
                    <li>
                        <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                    </li>
                </ul>
                <div class="tab-content br-n">
                    <div id="sidebar-right-tab1" class="tab-pane active">

                        <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                <span class="fs11">DB Request</span>
                            </div>
                        </div>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                <span class="fs11 text-left">Server Load</span>
                            </div>
                        </div>
                        <div class="progress mh5">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                <span class="fs11 text-left">Server Connections</span>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">132</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">212</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                        <div class="row">
                            <div class="col-xs-5">
                                <h3 class="text-primary mn pl5">82.5</h3>
                            </div>
                            <div class="col-xs-7 text-right">
                                <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                            </div>
                        </div>

                        <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                        <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                    </div>
                    <div id="sidebar-right-tab2" class="tab-pane"></div>
                    <div id="sidebar-right-tab3" class="tab-pane"></div>
                </div>
                <!-- end: .tab-content -->
            </div>
        </div>
    </aside>
    <!-- End: Right Sidebar -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
@yield('BottomScript')
</body>

</html>
