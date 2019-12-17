@extends('manager.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Quyết định xử phạt</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nhân viên phòng ban</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="#">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email Nhân viên</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập vào địa chỉ Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nguyên nhân</label>
                                        {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
                                        <textarea name="" class="form-control" id="exampleInputPassword1" cols="30" rows="5" style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button class="btn btn-primary btn-cf">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('after-js')
    <script>
        $('.btn-cf').click(() => {
            if ($('#exampleInputPassword1').val() === '' || $('#exampleInputEmail1').val() === '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Bạn cần điền đầy đủ thông tin!',
                })
            } else {
                Swal.fire(
                    'Success!',
                    'Quyết định xử phạt ban hành thành công!',
                    'success'
                )
            }
        });
    </script>
@endpush
