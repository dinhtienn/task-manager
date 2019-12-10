@extends('employee.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Nhân viên</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">

                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h5 class="m-0">Công việc</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-text">Công việc đang xử lý</h5>
                                <p class="card-text">Tình trạng công việc, ý kiến, gia hạn, thông tin</p>
                                <a href="{{ route('employee.job') }}" class="btn btn-warning">Xem ngay</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header bg-success">
                                <h5 class="m-0">Lịch sử</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-text">Lịch sử làm việc</h5>
                                <p class="card-text">Các công việc đã hoàn thành, kết quả, đánh giá.</p>
                                <a href="{{ route('employee.history') }}" class="btn btn-sm btn-outline-success">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h5 class="m-0">KPI</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Chỉ số đánh giá chất lượng làm việc</p>
                                <a href="{{ route('employee.kpi') }}" class="btn btn-sm btn-outline-info">Xem ngay</a>
                            </div>
                        </div>

                        <div class="card card-primary card-outline">
                            <div class="card-header bg-danger">
                                <h5 class="m-0">Xử phạt</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Tình trạng xử phạt</p>
                                <a href="{{ route('employee.punish') }}" class="btn btn-outline-danger">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
