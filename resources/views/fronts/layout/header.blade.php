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
        <script src="http://localhost/cuahangtienloi/public/fronts/js/vendor/modernizr-2.8.3.min.js"></script>
        <base href="http://localhost/cuahangtienloi/public/fronts/">
    </head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--organicfood wrapper start--> 
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
                                                    <li class="mega_parent"><a href="#">Trang<i class="fa fa-angle-down"></i></a>
                                                        <ul class="mega_menu">
                                                           <li class="mega_item">
                                                               <a class="mega_title" href="#">Thể loại</a>
                                                                
                                                               <ul>
                                                               
                                                                  @foreach($theloai as $tl)
                                                                   <li><a href="loaisanpham/{{$tl->id}}">{{$tl->tentheloai}}</a></li>
                                                                  @endforeach
                                                               
                                                               </ul> 
                                                               
                                                            </li> 
                                                            <li class="mega_item">
                                                               <a class="mega_title" href="#">Loại sản phẩm</a>
                                                               <ul>
                                                                @foreach($loaisanpham as $ls)
                                                                   <li><a href="http://localhost/cuahangtienloi/public/loaisanpham/{{$ls->id}}">{{$ls->tenloaisanpham}}</a></li>
                                                                @endforeach
                                                               </ul> 
                                                            </li>
                                                        </ul>    
                                                    </li>
                                                
                                                 </ul>
                                            </nav>
                                        </div>
                                    </div>
                                      <div class="header_right_info d-flex">
                                        <div class="search_box">
                                            <div class="search_inner">
                                                <form action="timkiem" method="POST">
                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                    <input type="text" name="tukhoa" placeholder="Search our catalog">
                                                    <button type="submit"><i class="ion-ios-search"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="mini__cart">
                                            <div class="mini_cart_inner">
                                                <div class="cart_icon">
                                                    <a href="{{asset('cart/show')}}">
                                                        <span class="cart_icon_inner">
                                                            <i class="ion-android-cart"></i>
                                                            <span class="cart_count">{{Cart::getTotalQuantity()}}</span>
                                                        </span>
                                                        <span class="item_total">{{Cart::getTotal()}}</span>
                                                    </a>
                                                </div>
                                                 @foreach($items as $item)
                                                <div class="mini_cart_box cart_box_one">
                                                    <div class="mini_cart_item">
                                                        <div class="mini_cart_img">
                                                            <a href="#">
                                                                <img src="assets/img/cart/1.jpg" alt="">
                                                                <span class="cart_count"></span>
                                                            </a>
                                                        </div>
                                                        <div class="cart_info">
                                                            <h5><a href="product-details.html"> {{$item->name}}</a></h5>
                                                            <span class="cart_price">{{number_format($item->price,0,',','.')}}</span>
                                                        </div>
                                                        <div class="cart_remove">
                                                            <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="price_content">
                                                        <div class="cart-total-price">
                                                            <span class="label">Total </span>
                                                        
                                                            <span class="value">{{Cart::getTotal()}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="min_cart_checkout">
                                                        <a href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                       <div class="header_top_right">
                                        <ul class="header_top_right_inner">
                                            <li class="language_wrapper">
                                                <a href="{{asset('trangchu/dangki')}}">
                                                    <img src="assets/img/1.jpg" alt="">
                                                    <span class="expand-more">Đăng kí</span>                
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                            </li>
                                             @if(Auth::check())
                                            <li class="language_wrapper_two">
                                                 <a href="#">
                                                    <span>{{Auth::user()->name}} <i class="fa fa-angle-down"></i> </span>
                                                </a>
                                                <ul class="account__name">
                                                    <li><a href="http://localhost/cuahangtienloi/public/nguoidung">My account</a></li>
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