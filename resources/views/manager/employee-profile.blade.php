@extends('manager.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
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
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="/dist/img/user2-160x160.jpg" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Nguyễn Hữu Khải</h3>

                                <p class="text-muted text-center">Chuyên viên kiểm duyệt</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thông tin</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong><i class="fas fa-book mr-1"></i> Trình độ</strong>

                                <p class="text-muted">
                                    Bỏ học giữa chừng tại Đại học Bách Khoa Hà Nội
                                </p>

                                <hr>

                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Địa điểm</strong>

                                <p class="text-muted">Bạch Mai, Hai Bà Trưng, Hà Nội</p>

                                <hr>

                                <strong><i class="fas fa-pencil-alt mr-1"></i> Kỹ năng</strong>

                                <p class="text-muted">
                                    <span class="tag tag-danger">UI Design</span>
                                    <span class="tag tag-success">Coding</span>
                                    <span class="tag tag-info">Javascript</span>
                                    <span class="tag tag-warning">PHP</span>
                                    <span class="tag tag-primary">Node.js</span>
                                </p>

                                <hr>

                                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                <p class="text-muted">Sống là phải hết mình!</p>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
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
                                        <th>Cấp trên đánh giá chất lượng <br> (1 - 10)% </th>
                                        <th style="width: 80px">Kết quả</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Kiểm tra chất lượng đầu vào thuốc A	</td>
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
                                        <td>Kiểm duyệt bao bì thuốc B</td>
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
                                        <td>Kiểm tra đóng gói đầu ra thuốc C</td>
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
                                        <td>Dán tem kiểm duyệt lên bao bì thuốc D</td>
                                        <td>
                                            1 - 11/12/2019
                                        </td>
                                        <td><span class="badge bg-success">100%</span></td>
                                        <td><span class="badge bg-success">10%</span></td>
                                        <td><span class="badge bg-success">10%</span></td>
                                        <td><span class="badge bg-success">120%</span></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>Kiểm tra chất lượng đầu vào thuốc A	</td>
                                        <td>
                                            1 - 10/12/2019
                                        </td>
                                        <td><span class="badge bg-danger">90%</span></td>
                                        <td><span class="badge bg-success">5%</span></td>
                                        <td><span class="badge bg-success">0%</span></td>
                                        <td><span class="badge bg-success">95%</span></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>Kiểm tra chất lượng đầu vào thuốc A	</td>
                                        <td>
                                            3 - 9/12/2019
                                        </td>
                                        <td><span class="badge bg-success">100%</span></td>
                                        <td><span class="badge bg-success">5%</span></td>
                                        <td><span class="badge bg-success">5%</span></td>
                                        <td><span class="badge bg-success">110%</span></td>
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
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
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
            };

            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            });
        });

        $('.btn-edit-profile').click(() => {
            Swal.fire(
                'Success!',
                'Chỉnh sửa thông tin thành công!',
                'success'
            )
        });
    </script>
@endpush
