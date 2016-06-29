@extends('admin.layouts.adminlayout')

@section('Content')
    <input type="hidden" value="{{  $i = 0 }}">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Employee</span>
                </div>
                <div class="panel-body ">
                    <!--            begin:Search            -->
                    <div class="row">
                        {!! Form::open(array('url' => 'admin/report/date/sub', 'method' => "post",
                         'role'=> "form", 'id' =>"addDriver" , 'class'=>"form-horizontal")) !!}
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="field-2">Selected Date Range To Search</label>

                            <div class="col-md-4">
                                <div class="input-group date" id="startdate">
                                                <span class="input-group-addon cursor"><i class="fa fa-calendar"></i>
                                                </span>
                                    <input name="startdate" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group date" id="enddate">
                                                <span class="input-group-addon cursor"><i class="fa fa-calendar"></i>
                                                </span>
                                    <input name="enddate" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-1">
                                <button type="submit" class="btn btn-blue right"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <!--            end:Search              -->
                    <hr>
                    <div id="example-2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <table class="table table-bordered table-striped dataTable no-footer" id="example-2" role="grid"
                               aria-describedby="example-2_info">
                            <thead>
                            <tr role="row">
                                <th class="no-sorting sorting_disabled" rowspan="1" colspan="1" aria-label=""
                                    style="width: 22px;">
                                    No
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1"
                                    aria-label="Name: activate to sort column ascending" style="width: 140px;">Name
                                </th>
                                <th class="sorting_asc" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1"
                                    aria-label="username: activate to sort column ascending" aria-sort="ascending"
                                    style="width: 90px;">username
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1"
                                    aria-label="Phone Number: activate to sort column ascending"
                                    style="width: 100px;">Phone Number
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1"
                                    aria-label="Email: activate to sort column ascending"
                                    style="width: 130px;">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example-2" rowspan="1" colspan="1"
                                    aria-label="Actions: activate to sort column ascending" style="width: 90px;">Actions
                                </th>
                            </tr>
                            </thead>

                            <tbody class="middle-align">

                            @foreach($drivers as $driver)

                                @if($i % 2 == 0)
                                    <tr role="row" class="odd">
                                @else
                                    <tr role="row" class="even">
                                        @endif
                                        <td class="">
                                            {{ $i++ }}
                                        </td>
                                        <td>{{ $driver->name . " " . $driver->family }} <span class="badge badge-secondary pull-right">{{ $driver->user_count }}</span></td>
                                        <td class="sorting_1">{{ $driver->username }}</td>
                                        <td>{{ $driver->phonenumber }}</td>
                                        <td>{{ $driver->email }}</td>
                                        <!-- TODO: Create Button Links -->
                                        <td class="row">
                                            <a href="/admin/Drivers/view/edit/{{ $driver->uid }}" class="btn btn-success btn-block col-xs-12">
                                                Edit
                                            </a>

                                            <a href="/admin/report/{{ $driver->uid }}" class="btn btn-info btn-sm btn-icon icon-left col-xs-12">
                                                Profile
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="dataTables_info" id="example-2_info" role="status" aria-live="polite">Showing 1 to
                                    {{ $i }} entries
                                </div>
                            </div>

                        </div>
                    </div>
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
        <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('assets') }}/js/utility/highlight/styles/googlecode.css">

    <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{ url('vendor') }}/plugins/datepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor') }}/plugins/daterange/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor') }}/plugins/colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('vendor') }}/plugins/tagmanager/tagmanager.css">

    <div class="modal fade in" id="popupDlete" aria-hidden="false" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><strong class="text-danger">Are You Sure to Delete? </strong></h4>
                </div>

                <div class="modal-body">
                    if Delete Driver, all detail has been delete, if want to Delete This Driver Click to
                    <strong class="text-danger">Delete</strong>
                    else Click <strong class="text-primary">Cancel</strong>
                </div>
                <div class="driver-detail">
                </div>

                <div class="modal-footer">
                    {!! Form::open(array('url' => '', 'method'
                                => "post", 'role'=> "form" , 'class'=>"formdeleteaction")) !!}

                    <input type="hidden" value="" id="usernamedeleteform" name="username">
                    <div class="row">
                        <div class="col-xs-6">
                            <button type="button" class="btn btn-primary col-xs-12" data-dismiss="modal">Cancel</button>
                        </div>
                        <div class="col-xs-6">
                            <button type="submit"  class="btn btn-danger col-xs-12">Delete</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
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
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/globalize/0.1.1/globalize.min.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.3/moment.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="{{ url('vendor') }}/plugins/daterange/daterangepicker.js"></script>
    <script type="text/javascript" src="{{ url('vendor') }}/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script type="text/javascript" src="{{ url('vendor') }}/plugins/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script type="text/javascript" src="{{ url('vendor') }}/plugins/jquerymask/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="{{ url('vendor') }}/plugins/tagmanager/tagmanager.js"></script>


    <script type="text/javascript">
        jQuery(document).ready(function() {
            //-----------------------------------Confirm Delete
            $("a.btn-danger").click(function(){
                var href     = $(this).attr('val1');
                var username = $(this).attr('val2');
                $('form.formdeleteaction').attr("action", href);
                $('#usernamedeleteform').attr("value", username);
                $('#popupDlete').modal('show', {backdrop: 'fade'});

            });
            //-----------------------------------Confirm Delete
            $(".btn-danger").click(function(){

                var txt = $("input").val();
                $.post("Drivers/view/del",
                        {suggest: txt},
                        function(result){
                            alert(result);
                        });
            });

            //-----------------------------------
            "use strict";

            // Init Theme Core
            Core.init({
                sbm: "sb-l-c",
            });

            // Init Demo JS
            Demo.init();


            // daterange plugin options
            var rangeOptions = {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                startDate: moment().subtract('days', 29),
                endDate: moment()
            }

            // Init daterange plugin
            $('#daterangepicker1').daterangepicker();

            // Init daterange plugin
            $('#daterangepicker2').daterangepicker(
                    rangeOptions,
                    function(start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    }
            );

            // Init daterange plugin
            $('#inline-daterange').daterangepicker(
                    rangeOptions,
                    function(start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    }
            );

            // Init datetimepicker - fields
            $('#startdate').datetimepicker();
            $('#enddate').datetimepicker();


            // Init datetimepicker - inline + range detection
            $('#datetimepicker3').datetimepicker({
                defaultDate: "9/4/2014",
                inline: true,
            });

            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker5').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - fields + Date disabled (only time picker)
            $('#datetimepicker6').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
            });
            // Init datetimepicker - inline + Date disabled (only time picker)
            $('#datetimepicker7').datetimepicker({
                defaultDate: "9/25/2014",
                pickDate: false,
                inline: true
            });

            // Init colorpicker plugin
            $('#demo_apidemo').colorpicker({
                color: bgPrimary
            });
            $('.demo-auto').colorpicker();

            // Init jQuery Tags Manager
            $(".tm-input").tagsManager({
                tagsContainer: '.tags',
                prefilled: ["Miley Cyrus", "Apple", "A Long Tag", "Na uh"],
                tagClass: 'tm-tag-info',
            });

            // Init Boostrap Multiselect
            $('#multiselect1').multiselect();
            $('#multiselect2').multiselect({
                includeSelectAllOption: true
            });
            $('#multiselect3').multiselect();
            $('#multiselect4').multiselect({
                enableFiltering: true,
            });
            $('#multiselect5').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-primary'
            });
            $('#multiselect6').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-info'
            });
            $('#multiselect7').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-success'
            });
            $('#multiselect8').multiselect({
                buttonClass: 'multiselect dropdown-toggle btn btn-default btn-warning'
            });

            // Init jQuery spinner init - default
            $("#spinner1").spinner();

            // Init jQuery spinner init - currency
            $("#spinner2").spinner({
                min: 5,
                max: 2500,
                step: 25,
                start: 1000,
                //numberFormat: "C"
            });

            // Init jQuery spinner init - decimal
            $("#spinner3").spinner({
                step: 0.01,
                numberFormat: "n"
            });

            // jQuery Time Spinner settings
            $.widget("ui.timespinner", $.ui.spinner, {
                options: {
                    // seconds
                    step: 60 * 1000,
                    // hours
                    page: 60
                },
                _parse: function(value) {
                    if (typeof value === "string") {
                        // already a timestamp
                        if (Number(value) == value) {
                            return Number(value);
                        }
                        return +Globalize.parseDate(value);
                    }
                    return value;
                },

                _format: function(value) {
                    return Globalize.format(new Date(value), "t");
                }
            });
            // Init jQuery Time Spinner
            $("#spinner4").timespinner();

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
                <a href="#">Report</a>
            </li>

        </ol>
    </div>
@stop