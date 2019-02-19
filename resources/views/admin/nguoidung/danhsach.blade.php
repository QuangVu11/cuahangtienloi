
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
                                <th>Tên</th>
                                <th>Email</th>
                                <th>password</th>
                                <th>Ngày tạo</th>
                                <th>Thời gian tạo</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$us->id}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->email}}</td>
                                <td>{{$us->password}}</td>
                                <td>{{$us->created_at}}</td>
                                <td>{{$us->updated_at}}</td>
                                
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$us->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="sua/{{$us->id}}">Edit</a></td>
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