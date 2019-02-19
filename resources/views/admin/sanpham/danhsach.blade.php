
@include ('admin.layout.layout')


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại 
                            <small>Danh sách</small>
                        </h1>
                         @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Nổi bật</th>
                                <th>Số lượng</th>
                                <th>Lượt mua</th>
                                <th>Thể loại</th>
                                <th>Loại sản phẩm</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($sanpham as $sp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp->id}}</td>
                                <td>{{$sp->tensanpham}}</td>
                                <td>
                                    <img width="100px" src="http://localhost/cuahangtienloi/public/uploads/{{$sp->image}}" >
                                </td>
                                <td>{{$sp->noibat}}</td>
                                <td>{{$sp->soluong}}</td>
                                <td>{{$sp->luotmua}}</td>
                                <td>{{$sp->loaisanpham->theloai->tentheloai}}</td>
                                <td>{{$sp->loaisanpham->tenloaisanpham}}</td>
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$sp->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="sua/{{$sp->id}}">Edit</a></td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@include('admin.layout.bot')