@extends('employee.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Xử phạt</h1>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header bg-info">
                    <h3 class="card-title">Cá nhân</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    - Số lỗi từ 1 - 2 lần / tháng sẽ bị giảm 1% lương <br>
                    - Số lỗi từ 3 - 4 lần / tháng sẽ bị giảm 8% lương <br>
                    - Số lỗi từ 5 - 7 lần / tháng sẽ bị giảm 14% lương <br>
                    - Số lỗi vượt quá 7 lần / tháng, nhân viên sẽ được đưa ra hội đồng kỷ luật để quyết định khả năng làm việc
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <section class="content">
                <div class="container-fluid">

                    <!-- Timelime example  -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- The time line -->
                            <div class="timeline">
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-red">Dec. 2019</span>
                                </div>
                                <!-- /.timeline-label -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-user bg-warning"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><a href="#">Chu Ngọc Minh</a></h3>

                                        <div class="timeline-body">
                                            Quá 1 tuần sau khi được duỵệt báo cáo chưa đạt nhưng không hoàn thành
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-user bg-warning"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header no-border"><a href="#">Bạn</a> vượt quá thời hạn của công việc
                                            <a href="{{ route('employee.job.read') }}">Đảm bảo chất lượng bao bì nhập hàng</a></h3>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline item -->
                                <div>
                                    <i class="fas fa-user bg-warning"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><a href="#">Chu Ngọc Minh</a></h3>
                                        <div class="timeline-body">
                                            Đi làm muộn 1 tiếng
                                        </div>
                                    </div>
                                </div>
                                <!-- END timeline item -->
                                <!-- timeline time label -->
                                <div class="time-label">
                                    <span class="bg-green">Nov. 2019</span>
                                </div>
                                <!-- /.timeline-label -->
                                <div>
                                    <i class="fa fa-user bg-warning"></i>
                                    <div class="timeline-item">
                                        <h3 class="timeline-header"><a href="#">Chu Ngọc Minh</a></h3>
                                        <div class="timeline-body">
                                            Đi làm muộn liên tục
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.timeline -->

            </section>
        </section>
        <!-- /.content -->
    </div>
@endsection
