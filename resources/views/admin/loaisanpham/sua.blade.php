@include ('admin.layout.layout')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa
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
                         <form action="{{$loaisanpham->id}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}


                           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên loại sản phẩm</label>
                                <input class="form-control" name="tenloaisanpham"  placeholder="Nhập tên loại sản phảm" value="{{$loaisanpham->tenloaisanpham}}" />
                            </div>
                              <div class="form-group">
                                <label>Mã loại sản phẩm</label>
                                <select class="form-control" name="id_theloai" >
                                @foreach($theloai as $tl)
                                <option
                                @if($loaisanpham->theloai->id== $tl->id)
                                {{"selected"}}
                                @endif
                                 value="{{$tl->id}}">{{$tl->tentheloai}}</option>
                                @endforeach
                            </select>
                               
                            </div>

                           


                         
                            <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
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