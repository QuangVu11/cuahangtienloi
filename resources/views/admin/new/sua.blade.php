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
                    <div class="col-lg-7" style="padding-bottom:120px">
                         <form action="{{$new->id}}" method="POST" enctype="multipart/form-data">

                           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Người viết</label>
                                <input class="form-control" name="email" placeholder="Nhập tên người viết" value="{{$new->email}}" />
                               
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                 <textarea class="ckeditor" name="content">{{$new->content}}</textarea>
                            </div>
                              <div class="form-group">
                                <label>Tóm tắt</label>
                                 <textarea class="ckeditor" name="tomtat">{{$new->tomtat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <img width="100px" src="http://localhost/cuahangtienloi/public/uploads/{{$new->image}}" >
                                <input type="file" class="form-control" name="image" placeholder="Nhập hình ảnh" value="{{$new->image}}" />
                               
                            </div>
                         
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
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
                           @foreach($new->comment as $cm)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cm->id}}</td>
                                <td>{{$cm->user->name}}</td>
                                <td>{{$cm->content}}</td>
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

    <!-- jQuery -->
   @include('admin.layout.bot')
