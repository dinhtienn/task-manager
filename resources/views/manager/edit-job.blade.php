@extends('manager.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Báo cáo công việc sau duyệt</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin chung</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Tên Công việc</label>
                                <input type="text" id="inputName" class="form-control" value="Đảm bảo chất lượng bao bì nhập hàng">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Mô tả công việc</label>
                                <textarea style="resize: none" id="inputDescription" class="form-control" rows="4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet culpa, cum eius exercitationem id ipsa nihil praesentium quos sed, suscipit vitae voluptatibus. Ab at aut dolores ea nobis odio, quas!</textarea>
                            </div>
                            <div class="form-group">
                                <label for="inputDate1">Thời hạn</label>
                                <input type="date" class="form-control" id="inputDate1" value="2019-12-15">
                            </div>
                            <div class="form-group">
                                <label for="inputDate">Ngày hoàn thành</label>
                                <input type="date" class="form-control" id="inputDate" value="2019-12-17">
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Số lần gia hạn</label>
                                <input type="number" id="inputClientCompany" class="form-control" value="1">
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-6">
                    <div class="card card-secondary">
                        <div class="card-header">
                            <h3 class="card-title">Thông tin chi tiết</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputDescription">Mô tả kết quả</label>
                                <textarea style="resize: none" id="inputDescription1" class="form-control" rows="4">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                                </textarea>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Tải lên tài liệu</label>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

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
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <td>UAT.pdf</td>
                                    <td>28.4883 kb</td>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <td>Email-from-flatbal.mln</td>
                                    <td>57.9003 kb</td>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <td>Logo.png</td>
                                    <td>50.5190 kb</td>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <td>Contract-10_12_2014.docx</td>
                                    <td>44.9715 kb</td>
                                    <td class="text-right py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                <div class="col-12">
                    <button class="btn btn-success btn-submit-report-done">Báo cáo</button>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('after-js')
    <script>
        $('.btn-submit-report-done').click(() => {
            if ($('#inputDescription1').val() === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Hãy điền đầy đủ thông tin!',
                })
            } else {
                Swal.fire(
                    'Success!',
                    'Đã gửi báo cáo hoàn thành công việc, hãy chờ duyệt!',
                    'success'
                )
            }
        });
    </script>
@endpush
