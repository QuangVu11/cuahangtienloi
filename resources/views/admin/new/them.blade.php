@include ('admin.layout.layout')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                          @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                            {{$err}}<br>
                            @endforeach
                        </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                         <form action="them" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Nhập tên người dùng" />
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="ckeditor" name="content"></textarea>
                                <!-- <input class="form-control" name="content" placeholder="Nhập nội dung" /> -->
                            </div>
                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea class="ckeditor" name="tomtat"></textarea>
                                <!-- <input class="form-control" name="content" placeholder="Nhập nội dung" /> -->
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="image" placeholder="Hình ảnh" />
                            </div>
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
 @include('admin.layout.bot')
