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
             <!--organicfood wrapper end-->
             
            <!--breadcrumb area start-->
            <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li><a href="index.html">Home ></a></li>
                            <li>Cart</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
             <!--breadcrumb area end-->
            <div class="cart_main_area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">  
                                <div class="table-content table-responsive">
                                    <table>
                                        <thead>
                                            @if(Cart::getTotal()>=1)
                                            <tr>
                                                <th class="img-thumbnail">Image</th>
                                                <th class="product-name">Product</th>
                                                 <th class="product-price">Price</th>
                                                <th class="product-quantity">Quantity</th>
                                                <th class="product-subtotal">Total</th>
                                                <th class="product-remove">Remove</th>
                                            </tr>
                                            @endif
                                        </thead>
                                        <tbody>
                                            @foreach($items as $item)
                                            <tr>
                                                <td class="product-thumbnail"><img src="http://localhost/cuahangtienloi/public/uploads/{{$item->attributes->image}}" alt=""></td>
                                                <td class="product-name"><a href="#">{{$item->name}}</a></td>
                                                <td class="product-price"><span class="amount">{{number_format($item->price,0,',','.')}}</span></td>
                                                <td class="product-quantity">
                                                    <div class="quickview_plus_minus quick_cart">
                                                        <div class="quickview_plus_minus_inner">
                                                            <a href="{{asset('update-quantity/'.$item->id.'/1')}}"></a>
                                                            <div class="cart-plus-minus cart_page">
                                                                <input type="text" value="{{$item->quantity}}" name="qtybutton" class="cart-plus-minus-box" >
                                                            </div>
                                                            @if($item->quatity>1)
                                                            <a href="{{asset('update-quantity/'.$item->id.'/-1')}}"></a>
                                                            @endif
                                                        </div>    
                                                    </div> 
                                                </td>
                                                <td class="product-subtotal">{{number_format($item->price*$item->quantity,0,',','.')}}</td>
                                                <td class="product-remove"><a href="{{asset('cart/delete/'.$item->id)}}">X</a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row table-responsive_bottom">
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                       <div class="buttons-carts">
                                            <a href="#">Next</a> <a href="{{asset('cart/delete/all')}}">Delete all cart</a> <a href="#">Update</a>     
                                        </div> 
                                        <div class="buttons-carts coupon">
                                            <h3>Coupon</h3>
                                            <p>Enter your coupon code if you have one.</p>
                                            <input placeholder="Coupon code" type="text"> 
                                            <input value="Apply Coupon" type="submit">     
                                        </div>
                                    </div> 
                                    <div class="col-lg-5 col-sm-5 col-md-5">
                                         <div class="cart_totals  text-right">
                                            <h2>Cart Totals</h2>
                                            <div class="order-total">
                                                <span><strong>Total</strong> </span>          
                                                <span><strong>{{$total}}Đ</strong> </span>
                                            </div>
                                            <div class="wc-proceed-to-checkout">
                                                <a href="{{asset('cart/checkout')}}">Proceed to Checkout</a>
                                            </div>
                                         </div>    
                                    </div>    
                                </div>
                            </form>         
                        </div>    
                    </div>    
                </div>   
            </div>
        
            <!--organicfood wrapper start--> 
            <div class="footer_food_wrapper">         
                <!-- footer start -->
                <footer class="footer pt-80">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-12 col-xs-12">
                                <!--Single Footer-->
                                <div class="single_footer widget">
                                    <div class="single_footer_widget_inner">
                                        <div class="footer_logo">
                                            <a href="#"><img src="assets/img/logo/logo_footer.png" alt=""></a>
                                        </div>
                                        <div class="footer_content">
                                            <p>Address: 123 BUI THI XUAN, HA NOI.</p>
                                            <p>Phone: +0868 31 32 05 </p>
                                            <p>Email: Contact@demo.com</p>
                                        </div>
                                        <div class="footer_social">
                                            <h4>Get in Touch:</h4>
                                            <div class="footer_social_icon">
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-youtube"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Single Footer-->
                            </div>
                            <div class="col-lg-6 col-md-12 col-xs-12">
                                <div class="footer_menu_list d-flex justify-content-between">
                                    <!--Single Footer-->
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2>Products</h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Prices drop</a></li>
                                                    <li><a href="#"> New products</a></li>
                                                    <li><a href="#"> Best sales</a></li>
                                                    <li><a href="#"> Contact us</a></li>
                                                    <li><a href="#"> My account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single footer end-->   
                                    <!--Single footer start-->   
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2>Login</h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Sitemap</a></li>
                                                    <li><a href="#"> Stores</a></li>
                                                    <li><a href="#"> Login</a></li>
                                                    <li><a href="#"> Contact us</a></li>
                                                    <li><a href="#"> My account</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Footer end-->
                                    <!--Single footer start-->   
                                    <div class="single_footer widget">
                                        <div class="single_footer_widget_inner">   
                                            <div class="footer_title">
                                                <h2> Your account </h2>
                                            </div>
                                            <div class="footer_menu">
                                                <ul>
                                                    <li><a href="#">Personal info</a></li>
                                                    <li><a href="#"> Orders</a></li>
                                                    <li><a href="#"> Login</a></li>
                                                    <li><a href="#"> Credit slips</a></li>
                                                    <li><a href="#"> Addresses</a></li>
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--Single Footer end-->
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-12 col-xs-12">
                                <div class="footer_title">
                                    <h2> Join Our Newsletter Now </h2>
                                </div>
                                <div class="footer_news_letter">
                                    <p>Get E-mail updates about our latest shop and special offers.</p>
                                    <div class="newsletter_form">
                                        <form action="#">
                                            <input type="email" required placeholder="Your Email Address">
                                            <input type="submit" value="Subscribe">
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="copyright">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="copyright_text">
                                        <p>Copyright 2018 . All Rights Reserved</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="footer_mastercard text-right">
                                        <a href="#"><img src="assets/img/brand/payment.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </footer>
                
                <!-- footer end -->
                
                
                
            </div>
           
           
           
           
           
           
           <!--organicfood wrapper end--> 
            
    
            
  
        
        
        <!-- all js here -->
     @include('fronts.layout.footer')
