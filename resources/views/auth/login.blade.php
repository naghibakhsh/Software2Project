<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON GFXFree.Net">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets') }}/skin/default_skin/css/theme.css">

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

<body class="external-page sb-l-c sb-r-c">

<!-- Start: Main -->
<div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- begin canvas animation bg -->
        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- Begin: Content -->
        <section id="content">

            <div class="admin-form theme-info" id="login1">

                <div class="row mb15 table-layout">

                    <div class="col-xs-6 va-m pln">
                        <a href="#" title="Return to Dashboard">
                            <img src="{{ url('assets') }}/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">
                        </a>
                    </div>

                    <div class="col-xs-6 text-right va-b pr5">
                        <div class="login-links">
                            <a href="#" class="active" title="Sign In">Sign In</a>
                        </div>

                    </div>

                </div>

                <div class="panel panel-info mt10 br-n">

                    <div class="panel-heading heading-border bg-white">
                        <span class="panel-title hidden"><i class="fa fa-sign-in"></i>Register</span>
                        <div class="section row mn">
                            <div class="col-sm-12">
                                <h1 class="text-center text-info-light">Welcome</h1>
                            </div>
                        </div>
                    </div>

                    <!-- end .form-header section -->
                    {!! Form::open(array('url' => '/logincheck', 'method' => "post", 'role'=> "form", 'id' =>"login" )) !!}
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col-sm-7 pr30">

                                    <div class="section">
                                        <label for="username" class="field-label text-muted fs18 mb10">Username</label>
                                        <label for="username" class="field prepend-icon">
                                            {!! Form::text('username', '',array('class'=>"gui-input", 'id'=>"username",'placeholder'=>"Enter username", 'autocomplete'=>"off", 'maxlength'=>"20")) !!}
                                            <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                    <div class="section">
                                        <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                                        <label for="password" class="field prepend-icon">
                                            {!! Form::password('password', array('class'=>"gui-input", 'id'=>"passwd",'placeholder'=>"Enter password", 'autocomplete'=>"off", 'minlength'=>"6", 'maxlength'=>"60")) !!}
                                            <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <div class="col-sm-5 br-l br-grey pl30">
                                    <h3 class="mb25"> Software Eng Project</h3>
                                </div>
                            </div>
                        </div>
                        <!-- end .form-body section -->
                        <div class="panel-footer clearfix p10 ph15">
                            <button type="submit" class="button btn-primary mr10 pull-right">Login</button>
                        </div>
                        <!-- end .form-footer section -->
                    {!! Form::close() !!}
                    </form>
                </div>
            </div>

        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="{{ url('vendor') }}/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="{{ url('vendor') }}/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{{ url('assets') }}/js/bootstrap/bootstrap.min.js"></script>

<!-- Page Plugins -->
<script type="text/javascript" src="{{ url('assets') }}/js/pages/login/EasePack.min.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/js/pages/login/rAF.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/js/pages/login/TweenLite.min.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/js/pages/login/login.js"></script>

<script type="text/javascript" src="{{ url('assets') }}/js/toastr/toastr.min.js"></script>

<!-- Theme Javascript -->
<script type="text/javascript" src="{{ url('assets') }}/js/utility/utility.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/js/main.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/js/demo.js"></script>


<!-- Page Javascript -->
<script type="text/javascript">
    jQuery(document).ready(function() {


    $("a.btn-danger").click(function(){
            var href     = $(this).attr('val1');
            var username = $(this).attr('val2');
            $('form.formdeleteaction').attr("action", href);
            $('#usernamedeleteform').attr("value", username);
            $('#popupDlete').modal('show', {backdrop: 'fade'});

        });
        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2,
                y: window.innerHeight / 3.3
            },
        });

        var msgT =  '{{ \Session::get('_msgT') }}';
        var msg =  '{{ \Session::get('_msg') }}';
        var title = '';
        //---------------------------------------------------------
        var stack_top_right = {
            "dir1": "down",
            "dir2": "left",
            "push": "top",
            "spacing1": 10,
            "spacing2": 10
       }
        var width = "290px";


        function findWidth() {
            return "290px";
        }

        //---------------------------------------------------------
        @if(\Session::get('_msgT') == 1)



            new PNotify({
                title: 'Success',
                text: '{{ \Session::get('_msg') }}',
                shadow: true,
                opacity: 1,
                addclass: "stack_top_right",
                type: 'success',
                stack:  stack_top_right,
                width: findWidth(),
                delay: 2000
            });


        @elseif(\Session::get('_msgT') == 2)

            new PNotify({
                title: 'Error',
                text: '{{ \Session::get('_msg') }}',
                shadow: true,
                opacity: 1,
                addclass: "stack_top_right",
                type: 'danger',
                stack:  stack_top_right,
                width: findWidth(),
                delay: 2000
            });
        @endif

    });
</script>

<!-- END: PAGE SCRIPTS -->

</body>

</html>
