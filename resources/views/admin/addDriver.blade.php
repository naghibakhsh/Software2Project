@extends('admin.layouts.adminlayout')

@section('Content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Register Employee</span>
                </div>
                <div class="panel-body ">
                    <!--             begin: Form             -->
                    {!! Form::open(array('url' => 'admin/addDriver/add', 'method' => "post", 'role'=> "form", 'id' =>"addDriver" , 'class'=>"form-horizontal")) !!}
                    <div class="form-group">
                        {!! Form::label('username', 'Username',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                {!! Form::text('username', '',array('class'=>"form-control", 'id'=>"username", 'autocomplete'=>"off",
                                    'placeholder'=>"Username",'maxlength'=>"20")) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="Password" name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        {!! Form::label('name', 'Personal Detail',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="family" id="family" class="form-control" placeholder="Family">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        {!! Form::label('phonenumber', 'Phone Number',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                                <input type="number" name="phonenumber" id="phonenumber" class="form-control" placeholder="Phone Number" maxlength="11" minlenght="10">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        {!! Form::label('hourlywage', 'Cost per Hour',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="number" name="hourlywage" id="hourlywage" class="form-control" placeholder="Cost per Hour" maxlength="11">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        {!! Form::label('plate', 'License Plate',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa car fa-car"></i></span>
                                <input type="text" name="plate" id="plate" class="form-control" placeholder="License Plate" maxlength="11">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        {!! Form::label('vehicletype', 'Car Type',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa car fa-car"></i></span>
                                <select class="form-control" name="vehicletype" id="vehicletype">
                                    @foreach($vehicle as $v)
                                        <option>{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-separator"></div>

                    <div class="form-group">
                        {!! Form::label('starttime', 'Work Time',array('class'=>"col-sm-2 control-label")) !!}
                        <div class="col-sm-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                <input type="time" name="starttime" id="starttime" class="form-control" maxlength="11">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                <input type="time" name="endtime" id="endtime" class="form-control" maxlength="11">
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <div class="col-sm-12" style="text-align: -webkit-right;">
                            <div class="input-group">
                                <button id="btnsubmit" type="submit" class="btn btn-info">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                            <!--            end: Form           -->
                </div>
            </div>
        </div>
    </div>
@stop

@section('Name')
{{ $userD->name . "." .  $userD->family }}
@stop
@section('Username')
{{ $userD->username }}
@stop
@section('Email')
{{ $userD->email }}
@stop


@section('BottomScript')

        <!-- jQuery -->
<script type="text/javascript" src="{{ url('vendor') }}/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="{{ url('vendor') }}/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="{{ url('assets') }}/js/bootstrap/bootstrap.min.js"></script>

<!-- Sparklines CDN -->
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

<!-- Chart Plugins -->
<script type="text/javascript" src="{{ url('vendor') }}/plugins/highcharts/highcharts.js"></script>
<script type="text/javascript" src="{{ url('vendor') }}/plugins/circles/circles.js"></script>
<script type="text/javascript" src="{{ url('vendor') }}/plugins/raphael/raphael.js"></script>

<!-- Holder js  -->
<script type="text/javascript" src="{{ url('assets') }}/js/bootstrap/holder.min.js"></script>

<!-- Theme Javascript -->
<script type="text/javascript" src="{{ url('assets') }}/js/utility/utility.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/js/main.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/js/demo.js"></script>

<!-- Admin Panels  -->
<script type="text/javascript" src="{{ url('assets') }}/admin-tools/admin-plugins/admin-panels/json2.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="{{ url('assets') }}/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

<!-- Page Javascript -->
<script type="text/javascript" src="{{ url('assets') }}/js/pages/widgets.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init({
            sbm: "sb-l-c",
        });

        // Init Demo JS
        Demo.init();

        // Init Widget Demo JS
        // demoHighCharts.init();

        // Because we are using Admin Panels we use the OnFinish
        // callback to activate the demoWidgets. It's smoother if
        // we let the panels be moved and organized before
        // filling them with content from various plugins

        // Init plugins used on this page
        // HighCharts, JvectorMap, Admin Panels

        // Init Admin Panels on widgets inside the ".admin-panels" container
        $('.admin-panels').adminpanel({
            grid: '.admin-grid',
            draggable: true,
            preserveGrid: true,
            mobile: false,
            callback: function() {
                bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
            },
            onFinish: function() {
                $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');

                // Init the rest of the plugins now that the panels
                // have had a chance to be moved and organized.
                // It's less taxing to organize empty panels
                demoHighCharts.init();
                runVectorMaps();

                // We also refresh any "in-view" waypoints to ensure
                // the correct position is being calculated after the
                // Admin Panels plugin moved everything
                Waypoint.refreshAll();

            },
            onSave: function() {
                $(window).trigger('resize');
            }
        });

        // Widget VectorMap
        function runVectorMaps() {

            // Jvector Map Plugin
            var runJvectorMap = function() {
                // Data set
                var mapData = [900, 700, 350, 500];
                // Init Jvector Map
                $('#WidgetMap').vectorMap({
                    map: 'us_lcc_en',
                    //regionsSelectable: true,
                    backgroundColor: 'transparent',
                    series: {
                        markers: [{
                            attribute: 'r',
                            scale: [3, 7],
                            values: mapData
                        }]
                    },
                    regionStyle: {
                        initial: {
                            fill: '#E5E5E5'
                        },
                        hover: {
                            "fill-opacity": 0.3
                        }
                    },
                    markers: [{
                        latLng: [37.78, -122.41],
                        name: 'San Francisco,CA'
                    }, {
                        latLng: [36.73, -103.98],
                        name: 'Texas,TX'
                    }, {
                        latLng: [38.62, -90.19],
                        name: 'St. Louis,MO'
                    }, {
                        latLng: [40.67, -73.94],
                        name: 'New York City,NY'
                    }],
                    markerStyle: {
                        initial: {
                            fill: '#a288d5',
                            stroke: '#b49ae0',
                            "fill-opacity": 1,
                            "stroke-width": 10,
                            "stroke-opacity": 0.3,
                            r: 3
                        },
                        hover: {
                            stroke: 'black',
                            "stroke-width": 2
                        },
                        selected: {
                            fill: 'blue'
                        },
                        selectedHover: {}
                    },
                });
                // Manual code to alter the Vector map plugin to
                // allow for individual coloring of countries
                var states = ['US-CA', 'US-TX', 'US-MO',
                    'US-NY'
                ];
                var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                $.each(states, function(i, e) {
                    $("#WidgetMap path[data-code=" + e + "]").css({
                        fill: colors[i]
                    });
                });
                $('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
            }

            if ($('#WidgetMap').length) {
                runJvectorMap();
            }
        }
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

@stop

@section('NavPage')
    <div class="topbar-left">
        <ol class="breadcrumb">
            <li class="crumb-trail">
                <a href="{{ url('/admin') }}">Dashboard</a>
            </li>
            <li class="crumb-active">
                <a href="#">Add New Driver</a>
            </li>

        </ol>
    </div>
@stop