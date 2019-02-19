
@include ('admin.layout.layout')


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại 
                            <small>Danh sách</small>
                        </h1>
                    </div>
                     @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Image</th>
                                <th>Create at</th>
                                <th>Update at</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($banner as $sl)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sl->id}}</td>
                                <td>  <img width="100px" src="http://localhost/cuahangtienloi/public/uploads/{{$sl->image}}" ></td>
                                <td>{{$sl->created_at}}</td>
                                <td>{{$sl->updated_at}}</td>
                                
                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$sl->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="sua/{{$sl->id}}">Edit</a></td>
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