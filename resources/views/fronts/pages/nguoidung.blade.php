@include('fronts.layout.header')
             <!--organicfood wrapper end-->
             
            <!--breadcrumb area start-->
            <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="#">Home</a> ></li>
                            <li>My account</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
             <!--breadcrumb area end-->
            
			<!-- Start Maincontent  -->
            <section class="main-content-area my-account ptb-100">
				<div class="container">
	                <div class="account-dashboard">
	                    <div class="row">
	                        <div class="col-sm-12 col-md-3 col-lg-3">
	                            <!-- Nav tabs -->
	                            <ul role="tablist" class="nav flex-column dashboard-list">
	                                <li><a href="#account-details" data-toggle="tab" class="nav-link">Account details</a></li>
	                                <li><a href="#doimatkhau" data-toggle="tab" class="nav-link">Đổi mật khẩu</a></li>
	                            </ul>
	                        </div>
	                        <div class="col-sm-12 col-md-9 col-lg-9">
	                            <!-- Tab panes -->
	                            <div class="tab-content dashboard-content">
	                                <div class="tab-pane fade" id="account-details">
	                                    <h3>Account details </h3>
	                                    <div class="login">
	                                        <div class="login-form-container">
	                                            <div class="account-login-form">
	                                                <form action="#">
	                                                    <p>Already have an account? <a href="#">Log in instead!</a></p>
	                                                    <label>First Name</label>
	                                                    <input type="text" name="name" value="{{$nguoidung->name}}">
	                                                    <label>Email</label>
	                                                    <input type="text" name="email" value="{{$nguoidung->email}}">
	                                                    <label>Password</label>
	                                                    <input type="password" name="password" value="{{$nguoidung->password}}">
	                                                   <a href="" style="color: green">Lưu thông tin</a>
	                                                </form>
	                                            </div>
	                                        </div>
			                            </div>
	                                </div>
	                                <div class="tab-pane fade" id="doimatkhau">
	                                    <h3>Account details </h3>
	                                    <div class="login">
	                                        <div class="login-form-container">
	                                            <div class="account-login-form">
	                                            	@if(count($errors) > 0)
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
	                                                <form action="nguoidung" method="POST">
	                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
											    		<div>
											    			<label>Họ tên</label>
														  	<input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1" value="{{$nguoidung->name}}">
														</div>
														<br>
														<div>
											    			<label>Email</label>
														  	<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
														  	readonly value="{{$nguoidung->email}}" 
														  	 disabled>
														</div>
														<br>	
														<div>
											    			<label>Họ tên</label>
														  	<input type="text" class="form-control" placeholder="password" name="password" aria-describedby="basic-addon1" >
														</div>
														<button type="submit" class="load_more_button">Sửa
														</button>
	                                                </form>
	                                            </div>
	                                        </div>
			                            </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>       	
            </section>			
			<!-- End Maincontent  -->
			
           
            <!--organicfood wrapper start--> 
           @include('fronts.layout.footer')