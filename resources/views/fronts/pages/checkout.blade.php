<!doctype html>
<html class="no-js" lang="zxx">

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       <title>Shopping Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="http://localhost/Quangdemo/public/img/favicon.png">
        
        <!-- all css here -->
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/animate.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/owl.carousel.min.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/chosen.min.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/ionicons.min.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/meanmenu.min.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/bundle.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/style.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/css/responsive.css">
        <link rel="stylesheet" href="http://localhost/cuahangtienloi/public/fronts/js/jquery-3.2.1.min.js">
        <script src="http://localhost/cuahangtienloi/public/fronts/js/vendor/modernizr-2.8.3.min.js"></script>
        <base href="http://localhost/cuahangtienloi/public/fronts/">
    </head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--organicfood wrapper start--> 
            <script type="text/javascript">
                function updateCart(quantity,id){
                    $.get(
                        '{{asset('cart/update')}}',
                        {quantity:quantity,id:id},
                        function(){
                            location.reload();
                        }
                        );
                }
            </script>
            <div class="organic_food_wrapper">
                <!--Header start-->
                <header class="header sticky-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="header_wrapper_inner">
                                   
                                    <div class="logo col-xs-12">
                                        <a href="{{asset('trangchu')}}">
                                            <img src="http://localhost/cuahangtienloi/public/fronts/img/logo/logo.png" alt="">
                                        </a>
                                    </div>
                                    
                                    
                                    <div class="main_menu_inner">
                                      
                                        <div class="menu">
                                            <nav>
                                                <ul>
                                                    <li class="active"><a href="http://localhost/cuahangtienloi/public/trangchu">Trang chủ <i class="fa fa-angle-down"></i></a>
                                                      
                                                    </li>
                                                    <li><a href="http://localhost/cuahangtienloi/public/blog">Bài viết </a> </li>
                                                    <li><a href="http://localhost/cuahangtienloi/public/sanpham">Cửa hàng</a>  </li>
                                                    <li><a href="blog.html">Về chúng tôi </a>
                                                    </li>
                                                  
                                                
                                                 </ul>
                                            </nav>
                                        </div>
                                    </div>
                                      <div class="header_right_info d-flex">
                                        <div class="search_box">
                                            <div class="search_inner">
                                                <form action="#">
                                                    <input type="text" placeholder="Search our catalog">
                                                    <button type="submit"><i class="ion-ios-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        @if(Session::has('cart'))
                                        <div class="mini__cart">
                                            <div class="mini_cart_inner">
                                                <div class="mini_cart_box cart_box_one">
                                                    <div class="mini_cart_item">
                                                        <div class="mini_cart_img">
                                                            <a href="#">
                                                                <img src="assets/img/cart/1.jpg" alt="">
                                                                <span class="cart_count">Giỏ hàng</span>
                                                            </a>
                                                        </div>
                                                        @foreach($product_cart as $product)
                                                        <div class="cart_info">
                                                            <h5><a href="product-details.html">{{$product['item']['name']}}</a></h5>
                                                            <span class="cart_price">{{$product['qty']}}*<span>{{$product['item']['unit_price']}}</span></span>
                                                        </div>
                                                        @endforeach
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="min_cart_checkout">
                                                        <a href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                                <!--Mini Cart Box End -->
                                            </div>
                                        </div>
                                        @endif
                                       <div class="header_top_right">
                                        <ul class="header_top_right_inner">
                                            <li class="language_wrapper">
                                                <a href="#">
                                                    <img src="assets/img/1.jpg" alt="">
                                                    <span class="expand-more">English</span>                
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="language__name">
                                                    <li><a href="#"><img src="assets/img/1.jpg" alt=""><span>English</span></a></li>
                                                    <li><a  href="#"><img src="assets/img/banner/frances2.jpg" alt=""><span> Français</span></a></li>
                                                </ul>
                                            </li>
                                             @if(Auth::check())
                                            <li class="language_wrapper_two">
                                                 <a href="#">
                                                    <span>{{Auth::user()->name}} <i class="fa fa-angle-down"></i> </span>
                                                </a>
                                                <ul class="account__name">
                                                    <li><a href="my-account.html">My account</a></li>
                                                    <li><a href="http://localhost/cuahangtienloi/public/dangxuat">Đăng xuất</a></li>
                                                    
                                                </ul>
                                                
                                            @else
                                               <li><a href="{{asset('trangchu/dangnhap')}}">Sign in</a></li>
                                            </li>
                                            @endif
                                        </ul>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            <div class="breadcrumb_container ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li>
                                <a href="index.html">Home ></a>
                            </li>
                            <li>checkout</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
             <!--breadcrumb area end-->
            
             
            <!--Checkout page section-->
            <div class="Checkout_page_section">
                <div class="container">
                    <div class="row">
                       <div class="col-12">
                            <div class="customer-login mb-40">
                                <h3> 
                                    <i class="fa fa-file-o" aria-hidden="true"></i>
                                    Bạn có muốn đăng nhập
                                    <a class="Returning" href="#" data-toggle="collapse" data-target="#Returning_customer" aria-expanded="true">Nhấn để đăng nhập</a>     
                                   
                                </h3>
                                 <div id="Returning_customer" class="collapse" data-parent="#accordion">
                                    <div class="card-bodyfive">
                                        <div class="col-12">
                                            <p>Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est sit amet ipsum luctus..</p>  
                                        </div>
                                        <div class="col-lg-4">
                                            <form action="#">  
                                                <div class="Returning_cart_body mb-20">
                                                    <label for="b_names">Username or email <span>*</span></label>
                                                    <input id="b_names" type="text">     
                                                </div>
                                                <div class="Returning_cart_body mb-20">
                                                    <label for="names">Password  <span>*</span></label>
                                                    <input id="names" type="text">     
                                                </div> 
                                                <div class="Returning_cart_body returning_three login mb-20">
                                                    <input value="Login" type="submit">
                                                    <label for="remember-me-box">
                                                        <input id="remember-me-box" type="checkbox">
                                                         Remember me 
                                                    </label>     
                                                </div>
                                                <a href="#">Lost your password?</a>
                                            </form>          
                                        </div>
                                    </div>
                                </div>    
                            </div>   
                       </div>
                    </div>
                    <div class="checkout-form">
                    	<form action="http://localhost/cuahangtienloi/public/cart/checkout" method="POST" enctype="multipart/form-data">
                    		    {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                    <h3>Hóa đơn</h3>
                                    @if(count($errors) >0)
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li class="text-danger">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                	@endif
                                    <div class="row">
                                    	  <div class="col-lg-6 mb-30">
                                            <input type="text" name="address" placeholder="Địa Chỉ *">    
                                        </div>	
                                        <div class="col-12 mb-30">
                                           <input type="text" name="name" placeholder="Họ và Tên *"> 
                                        </div>
                                        <div class="col-lg-6 mb-30">
                                            <input type="text" name="email" placeholder="Email *">
                                        </div> 
                                         <div class="col-lg-6 mb-30">
                                           <input type="text" name="phone_number"  placeholder="Số điện thoại *">    
                                        </div> 
                                        <div class="col-12">
                                            <div class="order-notes">
                                                 <label for="order_note">Ghi chú</label>
                                               <textarea name="note"   placeholder="Ghi chú" rows="10"></textarea>
                                            </div>    
                                        </div>     	    	    	    	    	    	    
                                    </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="order-wrapper">
                                    <h3>Your order</h3>
                                    <div class="order-table table-responsive mb-30">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<input type="" name="">
                                            	@foreach($items as $item)
                                                <tr>

                                                    <td class="product-name"><input value="{{$item->name}}" type="" name="sanpham"> <strong>* <input value=" {{$item->quantity}}" type="" name="quantity"></strong></td>
                                                    <td class="amount">{{number_format($item->price*$item->quantity,0,',','.')}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Order Total</th>
                                                    <td><strong><input value="{{$total}}" type="" name="tonggia"></strong></td>
                                                </tr>
                                            </tfoot>
                                        </table>    
                                    </div>
                                    <div class="payment-method">
                                       <div class="panel-default">
                                            <label class="righ_10" data-toggle="collapse" data-target="#collapsethree" aria-controls="collapseOne">Direct Bank Transfe</label>

                                            <div id="collapsethree" class="collapse"  data-parent="#accordion">
                                                <div class="card-body2">
                                                   <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="panel-default">
                                            <label class="righ_10" data-toggle="collapse" data-target="#collapsefour" aria-controls="collapseOne">Cheque Payment</label>

                                            <div id="collapsefour" class="collapse" data-parent="#accordion">
                                                <div class="card-body2">
                                                   <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="panel-default">
                                            <label class="righ_10" data-toggle="collapse" data-target="#collapsefive"  aria-controls="collapseOne"> PayPal</label>

                                            <div id="collapsefive" class="collapse"  data-parent="#accordion">
                                                <div class="card-body2">
                                                   <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button">
                                            <button  type="submit">Đặt hàng</button> 
                                        </div>    
                                    </div>    
                                </div>  
                            </div>
                        </div> 
                    </form>
                    </div>     
                </div>    
            </div>
            <!--Checkout page section end-->
            
          @include('fronts.layout.footer')