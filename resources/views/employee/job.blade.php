@extends('employee.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Nhân viên - Công việc</h1>
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
                                        <th>Đề xuất ý kiến</th>
                                        <th>Ý kiến cấp trên</th>
                                        <th>Hành động</th>
                                        <th>Báo cáo tiến độ</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Update software</td>
                                        <td>
                                            <span>Còn 3 ngày</span>
                                        </td>
                                        <td>

                                        </td>
                                        <td><button class="btn btn-sm btn-dark disabled">Kiểm tra lại số lượng</button></td>
                                        <td>
                                            <input type="text" class="form-control" style="width: 40%; display: inline-block" id="exampleInputEmail1" placeholder="Nhập ý kiến">
                                            <button class="btn btn-outline-danger">Xin gia hạn</button>
                                            <button class="btn btn-success btn-confirm">Hoàn thành</button>
                                        </td>
                                        <td>
                                            <input type="range" class="custom-range" id="customRange1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>Clean database</td>
                                        <td>
                                            <span>Còn 4 ngày</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-dark disabled">Hoá đơn gửi xuống không khớp với đầu vào</button>
                                        </td>
                                        <td>

                                        </td>
                                        <td>
                                            <input type="text" class="form-control" style="width: 40%; display: inline-block" id="exampleInputEmail1" placeholder="Nhập ý kiến">
                                            <button class="btn btn-outline-danger">Xin gia hạn</button>
                                            <button class="btn btn-success btn-confirm">Hoàn thành</button>
                                        </td>
                                        <td>
                                            <input type="range" class="custom-range" id="customRange1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>Cron job running</td>
                                        <td>
                                            <span>Còn 12 ngày</span>
                                        </td>
                                        <td>
                                            <span></span>
                                        </td>
                                        <td><button class="btn btn-sm btn-dark disabled">Chất lượng đầu ra chưa đạt yêu cầu</button></td>
                                        <td>
                                            <input type="text" class="form-control" style="width: 40%; display: inline-block" id="exampleInputEmail1" placeholder="Nhập ý kiến">
                                            <button class="btn btn-outline-danger">Xin gia hạn</button>
                                            <button class="btn btn-success btn-confirm">Hoàn thành</button>
                                        </td>
                                        <td>
                                            <input type="range" class="custom-range" id="customRange1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>Fix and squish bugs</td>
                                        <td>
                                            <span>Còn 1 ngày</span>
                                        </td>
                                        <td>
                                            <span></span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-dark disabled">Công việc này không được phép gia hạn</button>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" style="width: 40%; display: inline-block" id="exampleInputEmail1" placeholder="Nhập ý kiến">
                                            <button class="btn btn-success btn-confirm">Hoàn thành</button>
                                        </td>
                                        <td>
                                            <input type="range" class="custom-range" id="customRange1">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
