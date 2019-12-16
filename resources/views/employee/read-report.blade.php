@extends('employee.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Báo cáo công việc</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> Công ty cổ phần dược liệu Tiến Minh Khải Nguyên Quang
                                        <small class="float-right">Ngày: 17/12/2019</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>Nguyễn Hữu Khải</strong><br>
                                        Phòng đảm bảo chất lượng sản phẩm<br>
                                        Bách Khoa, CA 94107<br>
                                        Phone: (+84) 122-198<br>
                                        Email: nhom1.vuwit15@bachkhoa.com
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">

                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <div class="col-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Thông tin công việc</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body p-0">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th style="width: 150px;"></th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Tên công việc</td>
                                                    <td>
                                                        <span>Đảm bảo chất lượng bao bì nhập hàng</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mô tả</td>
                                                    <td>
                                                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet culpa, cum eius exercitationem id ipsa nihil praesentium quos sed, suscipit vitae voluptatibus. Ab at aut dolores ea nobis odio, quas!</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Thời hạn</td>
                                                    <td>
                                                        <span>15-12-2019</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ngày hoàn thành</td>
                                                    <td>
                                                        <span>17-12-2019</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Số lần xin gia hạn</td>
                                                    <td>
                                                        <span>1</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Nguyên nhân</td>
                                                    <td>
                                                        <span>Khâu nhập hàng bị chuyển giao quá chậm</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kết quả</td>
                                                    <td>
                                                        <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Files</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                                    <i class="fas fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>File Name</th>
                                                    <th>File Size</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td>Functional-requirements.docx</td>
                                                    <td>49.8005 kb</td>
                                                    <td class="text-right py-0 align-middle">
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                    </td>
                                                </tr><tr>
                                                    <td>UAT.pdf</td>
                                                    <td>28.4883 kb</td>
                                                    <td class="text-right py-0 align-middle">
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                    </td>
                                                </tr><tr>
                                                    <td>Email-from-flatbal.mln</td>
                                                    <td>57.9003 kb</td>
                                                    <td class="text-right py-0 align-middle">
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                    </td>
                                                </tr><tr>
                                                    <td>Logo.png</td>
                                                    <td>50.5190 kb</td>
                                                    <td class="text-right py-0 align-middle">
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                    </td>
                                                </tr><tr>
                                                    <td>Contract-10_12_2014.docx</td>
                                                    <td>44.9715 kb</td>
                                                    <td class="text-right py-0 align-middle">
                                                        <div class="btn-group btn-group-sm">
                                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                    </td>

                                                </tr></tbody>
                                            </table>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <h3 class="ml-2 mb-3">Quy trình</h3>
                            </div>

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kiểm số lượng nhập</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kiểm tem, nhãn, mác nguồn gốc</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kiểm bao bì và chất lượng bao bì</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    <a href="https://dinhtienn.github.io/task-manager-report/employee-report-job.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
