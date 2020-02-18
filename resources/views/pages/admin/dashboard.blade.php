@extends('pages.admin._layout')
@section('head-links')
    @parent
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/fontiran.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/skins/skin-red-light.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin_assets/dist/css/mine.css') }}">
    <style>
        .box.box-danger {
            border-top-color: #007bff;
            border-bottom-color: #007bff;
        }

        .box.box-success {
            border-bottom-color: #007bff;
            border-top-color: #007bff;
        }
    </style>
@endsection

@section('title', 'داشبورد')

@section('breadcrumb')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
    </nav>
@endsection

@section('panel')
    <div class="row">

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner ">
                    <h3>120</h3>
                    <p>بازدید ویدئو </p>
                </div>
                <div class="icon">
                    <i class="ion ion-eye"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner ">
                    <h3>13</h3>
                    <p>کاربران جدید</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner ">
                    <h3>6</h3>
                    <p>بازدید امروز</p>
                </div>
                <div class="icon">
                    <i class="ion ion-eye"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner ">
                    <h3>62</h3>
                    <p>کل کاربران</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body rtl">
            <p class="card-text">خوش آمدید!</p>
            <p class="card-text">از منوی اصلی می‌توانید بخش های قابل مدیریت سایت را مشاهده کنید.</p>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-header">داده های آماری</div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">نمودار درخواست پخش</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="investor-chart" style="height: 300px; position: relative;"></div>

                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">نمودار کاربران</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body chart-responsive">
                    <div class="chart" id="investable-chart" style="height: 300px; position: relative;"></div>


                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>


    <div class="card mt-3">
        <div class="card-header">داده های آماری کاربران</div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <!-- BAR CHART -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">کاربران فعال هفته</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="userBarChart" style="height:230px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <br><br>

    <div class="card mt-3">
        <div class="card-header">داده های آماری ویدئوها</div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-12">
            <!-- BAR CHART -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">ویدئوهای پخش شده</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="areaChart" style="height:250px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- AREA CHART -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">ستونی</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="barChart" style="height:230px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- DONUT CHART -->

            <!-- /.box -->
        </div>
        <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">خطی</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="lineChart" style="height:250px"></canvas>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('admin_assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('admin_assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Bar.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Core.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Doughnut.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Line.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.PolarArea.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/Chart.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/raphael.min.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/raphael.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/morris.min.js') }}"></script>

    <script src="{{ asset('admin_assets/dist/js/pages/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/pages/Chart.Radar.js') }}"></script>
    <script src="{{ asset('admin_assets/dist/js/polyfill.min.js') }}"></script>
    <script type='application/javascript' src="{{ asset('admin_assets/dist/js/fast_click.js') }}"></script>
    <script src="{{ asset('auth_assets/vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('admin_assets/dist/js/mine.js') }}"></script>
    @parent

    <script>
        $(function () {
            "use strict";

            //DONUT CHART
            var donut = new Morris.Donut({
                element: 'investor-chart',
                resize: true,
                colors: ["#3c8dbc", "#f56954", "#00a65a"],
                data: [
                    {label: " درخواست موفق", value: 30},
                    {label: "درخواست ناموقث", value: 5},
                ],
                hideHover: 'auto'
            });
            var donut = new Morris.Donut({
                element: 'investable-chart',
                resize: true,
                colors: ["#f56954", "#007bff"],
                data: [
                    {label: "کاربران عادی", value: 52},
                    {label: "کاربران فعال", value: 15},
                ],


                hideHover: 'auto'
            });


        });
    </script>

    <script>
        $(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = $('#userAreaChart').get(0).getContext('2d')
            // This will get the first returned node in the jQuery collection.

            var areaChart = new Chart(areaChartCanvas)
            var areaChartData = {
                labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'],
                datasets: [
                    {
                        label: 'Electronics',
                        fillColor: 'rgba(210, 214, 222, 1)',
                        strokeColor: 'rgba(210, 214, 222, 1)',
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [20, 40, 10, 6, 24, 7, 3, 20, 40, 10, 6, 24]
                    },
                    {
                        label: 'Digital Goods',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [20, 40, 10, 6, 24, 7, 3, 20, 40, 10, 6, 24]
                    }
                ]
            }

            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            }

            //Create the line chart
            areaChart.Line(areaChartData, areaChartOptions)

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = $('#userLineChart').get(0).getContext('2d')
            var lineChart = new Chart(lineChartCanvas)
            var lineChartOptions = areaChartOptions
            lineChartOptions.datasetFill = false
            lineChart.Line(areaChartData, lineChartOptions)


            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#userBarChart').get(0).getContext('2d')
            var barChart = new Chart(barChartCanvas)
            var barChartData = areaChartData
            barChartData.datasets[1].fillColor = '#00a65a'
            barChartData.datasets[1].strokeColor = '#00a65a'
            barChartData.datasets[1].pointColor = '#00a65a'
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            }

            barChartOptions.datasetFill = false
            barChart.Bar(barChartData, barChartOptions)
        })
    </script>

    <script>
        $(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
            // This will get the first returned node in the jQuery collection.

            var areaChart = new Chart(areaChartCanvas)
            var areaChartData = {
                labels: ['شنبه', 'یکشنبه', 'دوشنبه', 'سه شنبه', 'چهارشنبه', 'پنج شنبه', 'جمعه'],
                datasets: [
                    {
                        label: 'Electronics',
                        fillColor: 'rgba(210, 214, 222, 1)',
                        strokeColor: 'rgba(210, 214, 222, 1)',
                        pointColor: 'rgba(210, 214, 222, 1)',
                        pointStrokeColor: '#c1c7d1',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [20, 40, 10, 6, 24, 7, 3]
                    },
                    {
                        label: 'Digital Goods',
                        fillColor: 'rgba(60,141,188,0.9)',
                        strokeColor: 'rgba(60,141,188,0.8)',
                        pointColor: '#3b8bba',
                        pointStrokeColor: 'rgba(60,141,188,1)',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data: [20, 40, 10, 6, 24, 7, 3]
                    }
                ]
            }

            var areaChartOptions = {
                //Boolean - If we should show the scale at all
                showScale: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: false,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - Whether the line is curved between points
                bezierCurve: true,
                //Number - Tension of the bezier curve between points
                bezierCurveTension: 0.3,
                //Boolean - Whether to show a dot for each point
                pointDot: false,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 4,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                pointHitDetectionRadius: 20,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a color
                datasetFill: true,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                maintainAspectRatio: true,
                //Boolean - whether to make the chart responsive to window resizing
                responsive: true
            }

            //Create the line chart
            areaChart.Line(areaChartData, areaChartOptions)

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
            var lineChart = new Chart(lineChartCanvas)
            var lineChartOptions = areaChartOptions
            lineChartOptions.datasetFill = false
            lineChart.Line(areaChartData, lineChartOptions)


            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChart = new Chart(barChartCanvas)
            var barChartData = areaChartData
            barChartData.datasets[1].fillColor = '#00a65a'
            barChartData.datasets[1].strokeColor = '#00a65a'
            barChartData.datasets[1].pointColor = '#00a65a'
            var barChartOptions = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero: true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines: true,
                //String - Colour of the grid lines
                scaleGridLineColor: 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth: 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines: true,
                //Boolean - If there is a stroke on each bar
                barShowStroke: true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth: 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing: 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing: 1,
                //String - A legend template
                legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to make the chart responsive
                responsive: true,
                maintainAspectRatio: true
            }

            barChartOptions.datasetFill = false
            barChart.Bar(barChartData, barChartOptions)
        })
    </script>

    <script>
        $(document).ready(function () {
            $('aside .list-group-item-action[href="{{ route('admin.dashboard') }}"]').addClass('active');
        });
    </script>
@endsection


