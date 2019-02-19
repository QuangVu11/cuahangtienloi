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
                   
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Email</th>
                                <th>Hình ảnh</th>
                                <th>Ngày tạo</th>
                                <th>Ngày sửa</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($new as $n)
                            <tr class="odd gradeX" align="center">
                                <td>{{$n->id}}</td>
                                <td>{{$n->email}}</td>
                                
                                <td>
                                    <img width="100px" src="http://localhost/cuahangtienloi/public/uploads/{{$n->image}}" >
                                </td>
                                <td>{{$n->created_at}}</td>
                                <td>{{$n->updated_at}}</td>
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$n->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="sua/{{$n->id}}">Edit</a></td>
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

    <!-- jQuery -->
   @include('admin.layout.bot')
