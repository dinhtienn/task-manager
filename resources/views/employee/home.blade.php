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
                {{-- Quote --}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-info">
                            <div class="card-header">
                                <h3 class="card-title">No.1</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                Phải trở thành số một trong lĩnh vực mình kinh doanh, bằng cách luôn xác định và tập trung vào những điều có thể làm giỏi nhất, đem lại giá trị cao nhất hay quan trọng nhất, với tốc độ nhanh nhất cho con người, tổ chức và môi trường.
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card bg-success">
                            <div class="card-header">
                                <h3 class="card-title">Long-term value</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                Tập trung vào xây dựng giá trị lâu dài, tạo dựng hệ thống kinh doanh giúp bản thân, khách hàng, tổ chức và môi trường có thể tự động phát triển bền vững trường tồn.
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card bg-warning">
                            <div class="card-header">
                                <h3 class="card-title">Professionalism</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                Phải luôn học hỏi, rèn giũa nâng cao thái độ, kiến thức - kĩ năng, tác phong của mình, làm cho người khác cảm thấy tin tưởng, giao phó công việc, trách nhiệm đồng thời thực thi xuất sắc tạo ra kết quả trên mong đợi của họ và nhận được thù lao xứng đáng.
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="card bg-danger">
                            <div class="card-header">
                                <h3 class="card-title">Tenacity</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                Khi xác định được mục tiêu dài hạn, quan trọng nhất thì phải dành toàn bộ tâm sức, thời gian thực hiện, sẵn sàng đón nhận những thử thách, thiên biến vạn hoá để vượt qua mọi khó khăn bằng được mục tiêu đã đề ra.
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                {{-- End Quote --}}

                {{-- Row2 --}}
                <div class="row">
                    {{-- Profile --}}
                    <div class="col-md-4">

                        <!-- Profile Image -->
                        <div class="card card-secondary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="/dist/img/user2-160x160.jpg" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Nguyễn Hữu Khải</h3>

                                <p class="text-muted text-center">Chuyên viên kiểm duyệt</p>

                                <a href="{{ route('employee.profile') }}" class="btn btn-secondary btn-block"><b>Chỉnh sửa thông tin</b></a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    {{-- End Profile --}}
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h5 class="m-0 w-100">Công việc</h5>
                            </div>
                            <div class="card-body">
                                <h5 class="card-text">Công việc đang xử lý</h5>
                                <p class="card-text">Tình trạng công việc <br> Ý kiến / Gia hạn / Thông tin</p>
                                <a href="{{ route('employee.job') }}" class="btn btn-primary">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary card-outline">
                            <div class="card-header bg-danger">
                                <h5 class="m-0">Xử phạt</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">
                                    Tình trạng xử phạt <br> Sai phạm / Trễ deadline
                                </p>
                                <a href="{{ route('employee.punish') }}" class="btn btn-outline-danger">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Row2 --}}

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h5 class="m-0">KPI</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Chỉ số đánh giá chất lượng làm việc</p>
                                <a href="{{ route('employee.kpi') }}" class="btn btn-sm btn-outline-info">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-purple">
                                <h5 class="m-0">Bảng công</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bảng chấm công hàng ngày</p>
                                <a href="{{ route('employee.checkin') }}" class="btn btn-sm btn-outline-dark">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-success">
                                <h5 class="m-0">Bảng lương</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Thông tin bảng lương hàng tháng</p>
                                <a href="{{ route('employee.salary') }}" class="btn btn-sm btn-outline-success">Xem ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection
