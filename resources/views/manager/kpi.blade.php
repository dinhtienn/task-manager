@extends('manager.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>KPI phòng đảm bào chất lượng sản phẩm</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">KPI 6 tháng</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="areaChart" style="height: 250px; min-height: 250px; display: block; width: 631px;" width="1262" height="500" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col (LEFT) -->
                    <div class="col-md-6">
                        <!-- LINE CHART -->
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">KPI tuần</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="lineChart" style="height: 250px; min-height: 250px; display: block; width: 631px;" width="1262" height="500" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col (RIGHT) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Chi tiết</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Tên công việc</th>
                                        <th>Thời gian</th>
                                        <th>Hoàn thành</th>
                                        <th>Chỉ số Công việc <br> (5 - 20%)</th>
                                        <th>Cấp trên đánh giá chất lượng <br> (1 - 20)% </th>
                                        <th style="width: 80px">Kết quả</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Kiểm tra đầu vào thuốc A	</td>
                                        <td>
                                            10 - 17/12/2019
                                        </td>
                                        <td><span class="badge bg-success">100%</span></td>
                                        <td><span class="badge bg-success">5%</span></td>
                                        <td><span class="badge bg-success">5%</span></td>
                                        <td><span class="badge bg-success">110%</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Kiểm tra xuất hàng thuốc B</td>
                                        <td>
                                            9 - 15/12/2019
                                        </td>
                                        <td><span class="badge bg-success">100%</span></td>
                                        <td><span class="badge bg-success">0%</span></td>
                                        <td><span class="badge bg-success">2%</span></td>
                                        <td><span class="badge bg-success">102%</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Kiểm tra đóng gói thuốc C</td>
                                        <td>
                                            5 - 13/12/2019
                                        </td>
                                        <td><span class="badge bg-danger">95%</span></td>
                                        <td><span class="badge bg-success">5%</span></td>
                                        <td><span class="badge bg-success">0%</span></td>
                                        <td><span class="badge bg-success">100%</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Kiểm duyệt nhãn hiệu thuốc D</td>
                                        <td>
                                            1 - 11/12/2019
                                        </td>
                                        <td><span class="badge bg-success">100%</span></td>
                                        <td><span class="badge bg-success">10%</span></td>
                                        <td><span class="badge bg-success">10%</span></td>
                                        <td><span class="badge bg-success">120%</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="row w-100 d-flex justify-content-center">
                                    <div class="spinner-border text-info mt-5" style="width: 6rem; height: 6rem;" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('after-js')
    <script>
        $(function () {
            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

            var areaChartData = {
                labels  : ['July', 'August', 'September', 'October', 'November', 'December'],
                datasets: [
                    {
                        label               : 'Digital Goods',
                        backgroundColor     : 'rgba(60,141,188,0.9)',
                        borderColor         : 'rgba(60,141,188,0.8)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [87, 98, 105, 110, 103, 105]
                    },
                    {
                        label               : 'Electronics',
                        backgroundColor     : 'rgba(210, 214, 222, 1)',
                        borderColor         : 'rgba(210, 214, 222, 1)',
                        pointRadius         : false,
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : [89, 102, 101, 115, 120, 113]
                    },
                ]
            };

            var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }],
                    yAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            });

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
            var lineChartOptions = jQuery.extend(true, {}, areaChartOptions);
            var lineChartData = {
                labels  : ['Tuần 1', 'Tuần 2', 'Tuần 3', 'Tuần 4'],
                datasets: [
                    {
                        label               : 'Digital Goods',
                        backgroundColor     : 'rgba(60,141,188,0.9)',
                        borderColor         : 'rgba(60,141,188,0.8)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [105, 110, 103, 105],
                        fill                : false,
                    },
                    {
                        label               : 'Electronics',
                        backgroundColor     : 'rgba(210, 214, 222, 1)',
                        borderColor         : 'rgba(210, 214, 222, 1)',
                        pointRadius         : false,
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : [101, 115, 120, 113],
                        fill                : false,
                    },
                ]
            };
            lineChartOptions.datasetFill = false;

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            });
        })
    </script>
@endpush
