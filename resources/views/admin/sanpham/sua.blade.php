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
                         <form action="{{$sanpham->id}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}


                           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="tensanpham"  placeholder="Nhập tên sản phẩm" value="{{$sanpham->tensanpham}}" />
                               
                            </div>
                              <div class="form-group">
                                <label>Tóm tắt</label>
                               <textarea class="ckeditor" name="tomtat">{{$sanpham->tomtat}}</textarea>
                               
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="price"  placeholder="Nhập tên sản phẩm" value="{{$sanpham->price}}" />
                               
                            </div>
                              <div class="form-group">
                                <label>Nội dung</label>
                               <textarea class="ckeditor" name="content">{{$sanpham->content}}</textarea>
                               
                            </div>
                              <div class="form-group">
                                <label>Hình ảnh</label>
                                 <img width="100px" src="http://localhost/cuahangtienloi/public/uploads/{{$sanpham->image}}" >
                                <input type="file" class="form-control" name="image" placeholder="Nhập hình ảnh"   value="{{$sanpham->image}}"/>
                               
                            </div>
                              <div class="form-group">
                                <label>Nổi bật</label>
                                <input class="form-control" name="noibat" placeholder="Nổi bật" value="{{$sanpham->noibat}}" />
                               
                            </div>
                              <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="soluong" placeholder="Nhập số lượng" value="{{$sanpham->soluong}}" />
                               
                            </div>
                             <div class="form-group">
                                <label>Lượt mua</label>
                                <input class="form-control" name="luotmua" placeholder="Lượt mua" value="{{$sanpham->luotmua}}" />
                               
                            </div>
                              <div class="form-group">
                                <label>Thể loại</label>
                                <select class="form-control" name="id_theloai" id="id_theloai" >
                               @foreach($theloai as $tl)
                            <option

                                @if($sanpham->loaisanpham->theloai->id == $tl->id)
                                    {{"selected"}}
                                @endif

                             value="{{$tl->id}}">{{$tl->tentheloai}}</option>   
                            @endforeach
                            </select>
                            </div>
                             <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select class="form-control" name="id_loaisanpham" id="id_loaisanpham">
                                @foreach($loaisanpham as $lt)
                            <option 
                                @if($sanpham->loaisanpham->id == $lt->id)
                                    {{"selected"}}
                                @endif
                            value="{{$lt->id}}">{{$lt->tenloaisanpham}}</option>
                            @endforeach
                            </select>
                            </div>
                           


                         
                            <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </form>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách comment 
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Người dùng</th>
                                <th>Nội dung</th>
                                <th>Thời gian</th>
                                <th>Delete</th>
                             </tr>
                        </thead>
                        <tbody>
                           @foreach($sanpham->comment as $cm)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cm->id}}</td>
                                <td>{{$cm->user->name}}</td>
                                <td>{{$cm->noidung}}</td>
                                <td>{{$cm->create_at}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/{{$cm->id}}"> Delete</a></td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

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