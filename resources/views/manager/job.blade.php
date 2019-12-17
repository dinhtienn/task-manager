@extends('manager.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Công việc</h1>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Đang xử lý</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Tên công việc</th>
                                        <th>Thời hạn</th>
                                        <th>Tiến độ</th>
                                        <th style="width: 500px;">Ý kiến</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Kiểm tra chất lượng đầu vào thuốc A</td>
                                        <td>
                                            <span>20.02.2019</span>
                                        </td>
                                        <td>
                                            <input type="range" class="custom-range" id="customRange1" value="100">
                                        </td>
                                        <td>
                                            <div class="card direct-chat direct-chat-primary collapsed-card">
                                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                                    <h5 class="card-title">Trao đổi</h5>
                                                    <div class="card-tools">
                                                        <span data-toggle="tooltip" title="1 New Messages" class="badge badge-primary">1</span>
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body" style="display: none;">
                                                    <!-- Conversations are loaded here -->
                                                    <div class="direct-chat-messages">
                                                        <!-- Message. Default to the left -->
                                                        <div class="direct-chat-msg">
                                                            <div class="direct-chat-infos clearfix">
                                                                <span class="direct-chat-name float-left">Chu Ngọc Minh</span>
                                                                <span class="direct-chat-timestamp float-right">17 Dec 2:00 pm</span>
                                                            </div>
                                                            <!-- /.direct-chat-infos -->
                                                            <img class="direct-chat-img" src="/dist/img/user1-128x128.jpg" alt="message user image">
                                                            <!-- /.direct-chat-img -->
                                                            <div class="direct-chat-text">
                                                                Làm hẳn hoi!
                                                            </div>
                                                            <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->

                                                        <!-- Message to the right -->
                                                        <div class="direct-chat-msg right">
                                                            <div class="direct-chat-infos clearfix">
                                                                <span class="direct-chat-name float-right">Tôi</span>
                                                                <span class="direct-chat-timestamp float-left">17 Dec 2:05 pm</span>
                                                            </div>
                                                            <!-- /.direct-chat-infos -->
                                                            <img class="direct-chat-img" src="/dist/img/user2-160x160.jpg" alt="message user image">
                                                            <!-- /.direct-chat-img -->
                                                            <div class="direct-chat-text">
                                                                Biết rồi
                                                            </div>
                                                            <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->

                                                        <!-- Message. Default to the left -->
                                                        <div class="direct-chat-msg">
                                                            <div class="direct-chat-infos clearfix">
                                                                <span class="direct-chat-name float-left">Chu Ngọc Minh</span>
                                                                <span class="direct-chat-timestamp float-right">17 Dec 5:37 pm</span>
                                                            </div>
                                                            <!-- /.direct-chat-infos -->
                                                            <img class="direct-chat-img" src="/dist/img/user1-128x128.jpg" alt="message user image">
                                                            <!-- /.direct-chat-img -->
                                                            <div class="direct-chat-text">
                                                                Liệu hồn
                                                            </div>
                                                            <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->

                                                    </div>
                                                    <!--/.direct-chat-messages-->
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer" style="display: none;">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input type="text" name="message" placeholder="Nhập ý kiến ..." class="form-control">
                                                            <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Gửi</button>
                    </span>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.card-footer-->
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-warning mb-1 btn-report-daily">Báo cáo ngày</button>
                                            <button class="btn btn-sm btn-outline-danger btn-miss-deadline mb-1">Xin gia hạn</button>
                                            <button class="btn btn-sm btn-success btn-done-job">Hoàn thành</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Kiểm duyệt bao bì thuốc B</td>
                                        <td>
                                            <span>25.02.2019</span>
                                        </td>
                                        <td>
                                            <input type="range" class="custom-range" id="customRange1" value="67">
                                        </td>
                                        <td>
                                            <div class="card direct-chat direct-chat-primary collapsed-card">
                                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                                    <h5 class="card-title">Trao đổi</h5>
                                                    <div class="card-tools">
                                                        <span data-toggle="tooltip" title="2 New Messages" class="badge badge-primary">2</span>
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body" style="display: none;">
                                                    <!-- Conversations are loaded here -->
                                                    <div class="direct-chat-messages">
                                                        <!-- Message. Default to the left -->
                                                        <div class="direct-chat-msg">
                                                            <div class="direct-chat-infos clearfix">
                                                                <span class="direct-chat-name float-left">Chu Ngọc Minh</span>
                                                                <span class="direct-chat-timestamp float-right">17 Dec 2:00 pm</span>
                                                            </div>
                                                            <!-- /.direct-chat-infos -->
                                                            <img class="direct-chat-img" src="/dist/img/user1-128x128.jpg" alt="message user image">
                                                            <!-- /.direct-chat-img -->
                                                            <div class="direct-chat-text">
                                                                Làm hẳn hoi!
                                                            </div>
                                                            <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->

                                                        <!-- Message. Default to the left -->
                                                        <div class="direct-chat-msg">
                                                            <div class="direct-chat-infos clearfix">
                                                                <span class="direct-chat-name float-left">Chu Ngọc Minh</span>
                                                                <span class="direct-chat-timestamp float-right">17 Dec 5:37 pm</span>
                                                            </div>
                                                            <!-- /.direct-chat-infos -->
                                                            <img class="direct-chat-img" src="/dist/img/user1-128x128.jpg" alt="message user image">
                                                            <!-- /.direct-chat-img -->
                                                            <div class="direct-chat-text">
                                                                Liệu hồn
                                                            </div>
                                                            <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->

                                                    </div>
                                                    <!--/.direct-chat-messages-->
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer" style="display: none;">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input type="text" name="message" placeholder="Nhập ý kiến ..." class="form-control">
                                                            <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Gửi</button>
                    </span>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.card-footer-->
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-warning mb-1 btn-report-daily">Báo cáo ngày</button>
                                            <button class="btn btn-sm btn-outline-danger btn-miss-deadline mb-1">Xin gia hạn</button>
                                            <button class="btn btn-sm btn-success btn-confirm disabled">Hoàn thành</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Kiểm tra đóng gói đầu ra thuốc C</td>
                                        <td>
                                            <span>25.02.2019</span>
                                        </td>
                                        <td>
                                            <input type="range" class="custom-range" id="customRange1" value="15">
                                        </td>
                                        <td>
                                            <div class="card direct-chat direct-chat-primary collapsed-card">
                                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                                    <h5 class="card-title">Trao đổi</h5>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body" style="display: none;">
                                                    <!-- Conversations are loaded here -->
                                                    <div class="direct-chat-messages">


                                                    </div>
                                                    <!--/.direct-chat-messages-->
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer" style="display: none;">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input type="text" name="message" placeholder="Nhập ý kiến ..." class="form-control">
                                                            <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Gửi</button>
                    </span>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.card-footer-->
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-warning mb-1 btn-report-daily">Báo cáo ngày</button>
                                            <button class="btn btn-sm btn-outline-danger mb-1 disabled">Xin gia hạn</button>
                                            <button class="btn btn-sm btn-success btn-confirm disabled">Hoàn thành</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Dán tem kiểm duyệt lên bao bì thuốc D</td>
                                        <td>
                                            <span>27.02.2019</span>
                                        </td>
                                        <td>
                                            <input type="range" class="custom-range" id="customRange1" value="30">
                                        </td>
                                        <td>
                                            <div class="card direct-chat direct-chat-primary collapsed-card">
                                                <div class="card-header ui-sortable-handle" style="cursor: move;">
                                                    <h5 class="card-title">Trao đổi</h5>
                                                    <div class="card-tools">
                                                        <span data-toggle="tooltip" title="2 New Messages" class="badge badge-primary">2</span>
                                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                            <i class="fas fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body" style="display: none;">
                                                    <!-- Conversations are loaded here -->
                                                    <div class="direct-chat-messages">
                                                        <!-- Message. Default to the left -->
                                                        <div class="direct-chat-msg">
                                                            <div class="direct-chat-infos clearfix">
                                                                <span class="direct-chat-name float-left">Chu Ngọc Minh</span>
                                                                <span class="direct-chat-timestamp float-right">17 Dec 2:00 pm</span>
                                                            </div>
                                                            <!-- /.direct-chat-infos -->
                                                            <img class="direct-chat-img" src="/dist/img/user1-128x128.jpg" alt="message user image">
                                                            <!-- /.direct-chat-img -->
                                                            <div class="direct-chat-text">
                                                                Việc trên đã xong đâu mà làm việc dưới
                                                            </div>
                                                            <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->

                                                        <!-- Message. Default to the left -->
                                                        <div class="direct-chat-msg">
                                                            <div class="direct-chat-infos clearfix">
                                                                <span class="direct-chat-name float-left">Chu Ngọc Minh</span>
                                                                <span class="direct-chat-timestamp float-right">17 Dec 5:37 pm</span>
                                                            </div>
                                                            <!-- /.direct-chat-infos -->
                                                            <img class="direct-chat-img" src="/dist/img/user1-128x128.jpg" alt="message user image">
                                                            <!-- /.direct-chat-img -->
                                                            <div class="direct-chat-text">
                                                                Liệu hồn
                                                            </div>
                                                            <!-- /.direct-chat-text -->
                                                        </div>
                                                        <!-- /.direct-chat-msg -->

                                                    </div>
                                                    <!--/.direct-chat-messages-->
                                                </div>
                                                <!-- /.card-body -->
                                                <div class="card-footer" style="display: none;">
                                                    <form action="#">
                                                        <div class="input-group">
                                                            <input type="text" name="message" placeholder="Nhập ý kiến ..." class="form-control">
                                                            <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Gửi</button>
                    </span>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.card-footer-->
                                            </div>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-warning mb-1 btn-report-daily">Báo cáo ngày</button>
                                            <button class="btn btn-sm btn-outline-danger mb-1 disabled">Xin gia hạn</button>
                                            <button class="btn btn-sm btn-success btn-confirm disabled">Hoàn thành</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cần xử lý lại</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Tên công việc</th>
                                        <th>Thời hạn</th>
                                        <th>Nguyên nhân</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Dán nhãn bao bì thuốc đau đầu ABC</td>
                                        <td>
                                            <span class="text-danger">Quá 2 ngày</span>
                                        </td>
                                        <td>
                                            <span>Quy trình kiểm duyệt chưa chuẩn đã dán</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-info btn-edit-job">Báo cáo lại</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Kiểm duyệt nhập kho thuốc XYZ</td>
                                        <td>
                                            <span class="text-warning">Còn 1 ngày</span>
                                        </td>
                                        <td>
                                            <span>Thiếu kiểm tra hạn sử dụng trên bao bì</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-info btn-edit-job">Báo cáo lại</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Chờ duyệt</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Tên công việc</th>
                                        <th>Thời hạn</th>
                                        <th>Hành động</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Dán nhãn bao bì thuốc đau đầu XYZ</td>
                                        <td>
                                            <span class="text-success">Còn 5 ngày</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-success btn-read-report">Xem báo cáo</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Kiểm duyệt nhập kho thuốc ABC</td>
                                        <td>
                                            <span class="text-warning">Còn 2 ngày</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-warning btn-read-report">Xem báo cáo</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('after-js')
    <script>
        $('.btn-report-daily').click(() => {
            window.location.href = "{{ route('employee.job.report-daily') }}";
        });

        $('.btn-miss-deadline').click(() => {
            Swal.mixin({
                input: 'text',
                confirmButtonText: 'Next &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3']
            }).queue([
                {
                    title: 'Nguyên nhân',
                    text: 'Nêu chi tiết rõ ràng nguyên nhân cần gia hạn công việc'
                },
                {
                    title: 'Kết quả đã làm được',
                    text: 'Mô tả phần công việc đã làm được'
                },
                {
                    title: 'Thời hạn',
                    text: 'Thời hạn đề xuất để hoàn thành công việc',
                }
            ]).then((result) => {
                if (result.value) {
                    const answers = JSON.stringify(result.value)
                    Swal.fire({
                        title: 'Chờ duyệt',
                        html: `
        Đề xuất của bạn:
        <pre><code>${answers}</code></pre>
      `,
                        confirmButtonText: 'Đóng'
                    })
                }
            })
        });

        $('.btn-done-job').click(() => {
            window.location.href = "{{ route('employee.job.done') }}";
        });

        $('.btn-edit-job').click(() => {
            window.location.href = "{{ route('employee.job.edit') }}";
        });

        $('.btn-read-report').click(() => {
            window.location.href = "{{ route('employee.job.read') }}";
        });
    </script>
@endpush
