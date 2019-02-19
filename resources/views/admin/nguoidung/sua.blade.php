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
                         <form action="{{$user->id}}" method="POST" >

                           <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" name="name"  placeholder="Tên người dùng" value="{{$user->name}}" />
                               
                            </div>
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Email"  value="{{$user->email}}" />
                               
                            </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Password"  value="{{$user->password}}" />
                               
                            </div>
                              <div class="form-group">
                                <label>Ghi nhớ</label>
                             
                                <input class="form-control" name="remember_token" placeholder="Nhập tên thể loại" value="{{$user->remember_token}}" />
                               
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