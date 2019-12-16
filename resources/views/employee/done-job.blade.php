@extends('employee.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Báo cáo hoàn thành công việc</h1>
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
                                <textarea style="resize: none" id="inputDescription1" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Tải lên tài liệu</label>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
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
