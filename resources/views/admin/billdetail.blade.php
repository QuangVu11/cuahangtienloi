
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
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($billdt as $ls)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ls->id}}</td>
                                <td>{{$ls->sanpham->tensanpham}}</td>
                                <td>{{$ls->quantity}}</td>
                                <td>{{$ls->price}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="xoa/{{$ls->id}}"> Vận chuyển thành công</a></td>
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