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
                         <form action="them" method="POST" enctype="multipart/form-data">

                           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="tensanpham" placeholder="Nhập tên thể loại" />
                            </div>
                              <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea class="ckeditor" name="tomtat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="price" placeholder="Nhập tên thể loại" />
                            </div>
                              <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="ckeditor" name="content"></textarea>
                            </div>
                              <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="image" placeholder="Nhập tên thể loại" />
                            </div>
                            @for($i =1 ;$i<=3 ;$i++)
                              <div class="form-group">

                                <label>Hình ảnh phụ {{$i}}</label>
                                <input type="file" class="form-control" name="imagepd[]" placeholder="Nhập tên thể loại" />
                            </div>
                            @endfor
                              <div class="form-group">
                                <label>Nổi bật</label>
                                <input class="form-control" name="noibat" placeholder="Nhập tên thể loại" />
                            </div>
                              <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="soluong" placeholder="Nhập tên thể loại" />
                            </div>
                            <div class="form-group">
                                <label>Lượt mua</label>
                                <input class="form-control" name="luotmua" placeholder="Nhập tên thể loại" />
                            </div>
                                <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="id_theloai" id="id_theloai" >
                                <option>...</option>
                                @foreach($theloai as $tl)
                                <option value="{{$tl->id}}">{{$tl->tentheloai}}</option>
                                @endforeach
                            </select>
                            </div>
                             <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control" name="id_loaisanpham" id="id_loaisanpham">
                                <option>...</option>
                                @foreach($loaisanpham as $ls)
                                <option value="{{$ls->id}}">{{$ls->tenloaisanpham}}</option>
                                @endforeach
                            </select>
                            </div>
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->

       
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    </div>

    <!-- /#wrapper -->
    @section('script')
   <script>
       $(document).ready(function(){
        $("#id_theloai").change(function(){
            $.ajax({
                url: '{{ route("loaisanpham") }}',
                method: 'get',
                data: {
                    id_theloai: $(this).val()
                },
                success: function(data){
                    $("#id_loaisanpham").html(data);
                }
            });
        });
       });
   </script>
   @endsection

    <!-- jQuery -->
   @include('admin.layout.bot')
