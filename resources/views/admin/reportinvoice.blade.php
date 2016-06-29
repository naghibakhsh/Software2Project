@extends('admin.layouts.adminlayout')

@section('Content')
    <div class="panel invoice-panel">
        <div class="panel-heading">
                        <span class="panel-title">
                            <span class="glyphicon glyphicon-print"></span> Printable Invoice</span>
            <div class="panel-header-menu pull-right mr10">
                <button type="button" class="btn btn-xs btn-default btn-gradient mr5"> <i class="fa fa-plus-square pr5"></i> New Invoice</button>
                <a href="javascript:window.print()" class="btn btn-xs btn-default btn-gradient mr5"> <i class="fa fa-print fs13"></i> </a>
                <div class="btn-group">
                    <button type="button" class="btn btn-xs btn-default btn-gradient dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicons glyphicons-cogwheel"></span>
                    </button>
                    <ul class="dropdown-menu checkbox-persist pull-right text-left" role="menu">
                        <li>
                            <a><i class="fa fa-user"></i> View Profile </a>
                        </li>
                        <li>
                            <a><i class="fa fa-envelope-o"></i> Message </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-body p20" id="invoice-item">

            <div class="row mb30">
                <div class="col-md-6">
                    <div class="pull-left">
                        <h1 class="lh10 mt10"> INVOICE </h1>
                        <h5 class="mn"> Created: Nov 23 2013 </h5>
                        <h5 class="mn"> Status: <b class="text-success">Paid - On Time</b> </h5>
                    </div>
                </div>
               <div class="col-md-6">
                    <div class="pull-right text-right">
                        <h2 class="invoice-logo-text hidden lh10">AdminDesigns</h2>
                        <h5> Sales Rep: <b class="text-primary">Michael Ronny</b> </h5>
                    </div>
                </div>
            </div>
            <div class="row" id="invoice-info">
                <div class="col-md-4">
                    <div class="panel panel-alt">
                        <div class="panel-heading">
                            <span class="panel-title"> <i class="fa fa-user"></i> Bill To: </span>
                            <div class="panel-btns pull-right ml10">
                                <span class="panel-title-sm"> Edit</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <address>
                                <strong>Cannon Camera</strong>
                                <br> 151 Sandy Ave, Suite 200
                                <br> San Jose, CA 91503
                                <br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-alt">
                        <div class="panel-heading">
                            <span class="panel-title"> <i class="fa fa-location-arrow"></i> Ship To:</span>
                            <div class="panel-btns pull-right ml10">
                                <span class="panel-title-sm"> Edit</span>
                            </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li> <b>Driver:</b> {{ $user->name }}.{{ $user->family }}</li>
                                <li> <b>TEL:   </b> {{ $user->phonenumber }}             </li>
                                <li> <b>Email: </b> {{ $user->email }}                   </li>
                                <li> <b>Terms: </b> Ten Forty                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-alt">
                        <div class="panel-heading">
                            <span class="panel-title"> <i class="fa fa-info"></i> Invoice Details: </span>
                            <div class="panel-btns pull-right ml10"> </div>
                        </div>
                        <div class="panel-body">
                            <ul class="list-unstyled">
                                <li> <b>Score #:    </b> {{ $driver->score }}         </li>
                                <li> <b>Service  #: </b> {{ $driver->servicecounter }}</li>
                                <li> <b>Plate code: </b> {{ $driver->plate }}         </li>
                                <li> <b>Serial NO:  </b>-----------                   </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="invoice-table">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="text-center hidden-xs">#</th>
                            <th width="20%" class="text-center">Name</th>
                            <th class="text-center hidden-xs"><p>Date</th>
                            <th class="text-center">score</th>
                            <th class="text-center">Taxi Meter</th>
                            <th class="text-center">Cost</th>
                            <th class="text-right pr10">Pay</th>
                        </tr>
                        </thead>
                        <input type="hidden" value="{{ $i = 0 }}">

                        <tbody>
                        @foreach($cusotmers as $customer)
                            @if($customer->payed)
                                <tr style="opacity: 0.1;
                                            filter: alpha(opacity=10);">
                            @else
                                <tr>
                                    @endif
                                    <td class="text-center hidden-xs">{{ $i++ }}</td>
                                    <td><p>{{ $customer->name }} </p>
                                        <br/>
                                        <p>{{ $customer->family  }}</p>
                                        <br/>
                                        <p>{{ $customer->phonenumber  }}</p></td>
                                    <td class="text-center hidden-xs">
                                        <input type="hidden" value="
                                    {{ $st =  \Carbon\Carbon::parse($customer->startservice) }}
                                        {{ $et =  \Carbon\Carbon::parse($customer->endservice) }}
                                        {{ $interval =  $st->diffInHours($et, false) }}">
                                        <p><strong>From:</strong>{{  $customer->startservice }} </p><br/>
                                        <p> <strong>To:</strong>{{ $customer->endservice  }}</p></td>
                                    <td class="text-right text-primary text-bold">{{ $customer->score }}</td>
                                    <td class="text-right text-primary">{{ $customer->taximeter }} <em>km</em></td>
                                    <td class="text-right text-primary">{{  $driver->hourlywage * $interval  }}</td>
                                    <td class="text-right text-primary">
                                        @if($customer->payed)
                                            <a class="btn btn-primary" disabled="disabled"><strong>Pay</strong></a>
                                        @else
                                            <a  href="/admin/report/{{ $user->id }}/pay/{{$customer->id}}" class="btn btn-primary"><strong>Pay</strong></a>
                                        @endif
                                    </td>

                                </tr>
                                @endforeach
                        </tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" id="invoice-footer">
                <div class="col-md-12">
                    <div class="pull-left mt20 fs15 text-primary"> Thank you for your business.</div>
                    <div class="pull-right">
                        <table class="table" id="invoice-summary">
                            <thead>
                            <tr>
                                <th><b>Sub Total:</b>
                                </th>
                                <th>${{ $Tpayment }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><b>Driver Contribution:</b>
                                </td>
                                <td>75.00%</td>
                            </tr>
                            <tr>
                                <td><b>Total</b>
                                </td>
                                <td>${{ $Tpayment * 0.75 }}</td>
                            </tr>
                            <tr>
                                <td><b>Balance Due:</b>
                                </td>
                                <td >${{ $Tpayment * 0.75 }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                    <div class="invoice-buttons">
                        <a href="javascript:window.print()" class="btn btn-default mr10"><i class="fa fa-print pr5"></i> Print Invoice</a>
                        <button class="btn btn-primary btn-gradient" type="button"><i class="fa fa-floppy-o pr5"></i> Save Invoice</button>
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
                <a href="#">Profile</a>
            </li>

        </ol>
    </div>
@stop