
@include ('admin.layout.layout')


        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Oder
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Địa chỉ</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Delete</th>
                                <th>Chi tiết</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($oder as $ls)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ls->id}}</td>
                                <td>{{$ls->name}}</td>
                                <td>{{$ls->address}}</td>
                                <td>{{$ls->email}}</td>
                                <td>{{$ls->phone_number}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$ls->id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="chitiet/{{$ls->id}}">Chi tiết</a></td>
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