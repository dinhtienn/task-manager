@extends('employee.layout')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Nhân viên - Profile</h1>
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
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <form class="form-horizontal" action="#">
                                            <div class="form-group row">
                                                <label for="inputName" class="col-sm-2 col-form-label">Họ tên</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName" placeholder="Name" value="Nguyễn Hữu Khải">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail" class="col-sm-2 col-form-label">Địa chỉ Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="boyhanoi.deptrai@gmail.com">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Trình độ</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputName2" placeholder="Trình độ" value="Bỏ học giữa chừng tại Đại học Bách Khoa Hà Nội">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label">Địa điểm</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" id="inputExperience" placeholder="Địa điểm" value="Bạch Mai, Hai Bà Trưng, Hà Nội">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Kĩ năng</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputSkills" placeholder="Kĩ năng" value="UI Design Coding Javascript PHP Node.js">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputSkills" class="col-sm-2 col-form-label">Notes</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="inputSkills" placeholder="Notes" value="Sống là phải hết mình!">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="offset-sm-2 col-sm-10">
                                                    <button type="submit" class="btn btn-success btn-edit-profile">Chỉnh sửa</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.nav-tabs-custom -->
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
        $('.btn-edit-profile').click(() => {
            Swal.fire(
                'Success!',
                'Chỉnh sửa thông tin thành công!',
                'success'
            )
        });
    </script>
@endpush
