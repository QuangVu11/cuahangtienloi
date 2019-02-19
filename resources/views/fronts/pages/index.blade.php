@include('fronts.layout.header')
                <div class="slider_area">
                    <div class="slider_list  owl-carousel">
                    	@foreach($banner as $bn)
                        <div class="single_slide" style="background-image: url(http://localhost/cuahangtienloi/public/uploads/{{$bn->image}});">
                        	
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="slider__content">
                                            <p>Exclusive Offer -10% Off This Week</p>
                                            <h2>Live <strong>healthy</strong> with a glass</h2>
                                            <h3>of <strong>fruit juice</strong> every day</h3>  
                                            <h6>Starting at<span>$42.99</span></h6>
                                            <div class="slider_btn">
                                                <a href="shop.html">Shopping now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="banner_area home1_banner mt-30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="http://localhost/Quangdemo/public/img/banner/1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="http://localhost/Quangdemo/public/img/banner/2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single_banner banner_three">
                                    <a href="#">
                                        <img src="http://localhost/Quangdemo/public/img/banner/3.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="features_product pt-90">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="section_title text-center">
                                    <h3> Sản phẩm nổi bật </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="features_product_active owl-carousel">
                            	@foreach($sanpham4 as $sp4)
                                <div class="col-lg-2">
                                    <div class="single__product">
                                        <div class="single_product__inner">
                                            <span class="new_badge">hot</span>
                                            <div class="product_img">
                                            <a href="#">
                                                <img src="http://localhost/cuahangtienloi/public/uploads/{{$sp4->image}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content text-center">
                                                <div class="produc_desc_info">
                                                    <div class="product_title">
                                                        <h4><a href="product-details.html">{{$sp4->tensanpham}}</a></h4>
                                                    </div>
                                                    <div class="product_price">
                                                        <p>{{number_format($sp4->price)}}$</p>
                                                    </div>
                                                </div>
                                                <div class="product__hover">
                                                    <ul>
                                                        <li><a href="{{asset('cart/add/'.$sp4->id)}}"><i class="ion-android-cart"></i></a></li>
                                                        <li><a class="cart-fore" href="http://localhost/cuahangtienloi/public/{{$sp4->id}}" data-toggle="modal" data-target="#my_modal"   ><i class="ion-android-open"></i></a></li>
                                                        <li><a href="http://localhost/cuahangtienloi/public/chitietsanpham/{{$sp4->id}}"><i class="ion-clipboard"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              	@endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shipping_area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="shipping_list d-flex justify-content-between flex-xs-column">
                                    <div class="single_shipping_box d-flex">
                                        <div class="shipping_icon">
                                            <img src="http://localhost/Quangdemo/public/img/ship/1.png" alt="shipping icon">
                                        </div>
                                        <div class="shipping_content">
                                            <h6>Free Shipping On Order Over $120</h6>
                                            <p>Free shipping on all order</p>
                                        </div>
                                    </div>
                                    <div class="single_shipping_box one d-flex">
                                        <div class="shipping_icon">
                                            <img src="http://localhost/Quangdemo/public/img/ship/2.png" alt="shipping icon">
                                        </div>
                                        <div class="shipping_content">
                                            <h6>Money Return</h6>
                                            <p>Back guarantee under 7 days</p>
                                        </div>
                                    </div>
                                    <div class="single_shipping_box two d-flex">
                                        <div class="shipping_icon">
                                            <img src="http://localhost/Quangdemo/public/img/ship/3.png" alt="shipping icon">
                                        </div>
                                        <div class="shipping_content">
                                            <h6>Member Discount</h6>
                                            <p>Support online 24 hours a day</p>
                                        </div>
                                    </div>
                                    <div class="single_shipping_box three d-flex">
                                        <div class="shipping_icon">
                                            <img src="http://localhost/Quangdemo/public/img/ship/4.png" alt="shipping icon">
                                        </div>
                                        <div class="shipping_content">
                                            <h6>Online Support 24/7</h6>
                                            <p>Free shipping on all order</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shop_product">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop_product_head d-flex justify-content-between mb-30">
                                    <div class="section_title space_2 text-left">
                                        <h3>Cửa hàng</h3>
                                    </div>
                                     <div class="home_shop_product text-right">
                                        <ul class="product-tab-list nav d-flex flex-wrap justify-content-end" role="tablist">
                                            <li><a class="active" href="#fresh" data-toggle="tab" role="tab" aria-selected="true" aria-controls="fresh">
                                               Ăn liền 
                                            </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="shop_larg_product">
                                    <div class="single__product_2">
                                        <div class="product_img">
                                            <a href="#">
                                                <img src="http://localhost/Quangdemo/public/img/product/big-1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="product__content text-center">
                                            <div class="product_title">
                                                <h4><a href="product-details.html">Wayfarer Messenger Bag</a></h4>
                                            </div>
                                            <div class="product_price">
                                                <p>$65.66</p>
                                            </div>
                                            <div class="product-add-to-cart">
                                                <a href="#">add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="tab-content">
                                    <div class="tab-pane active show fade" id="fresh" role="tabpanel">
                                        <div class="row">
                                            <div class="shop-product_list owl-carousel">
                                            	@foreach($sanpham8 as $sp8)
                                              <div class="col-12">
                                                    <div class="shop_single_prduct_item">
                                                        <div class="single__product">
                                                            <div class="single_product__inner">
                                                                <span class="new_badge">new</span>
                                                                <div class="product_img">
                                                                    <a href="#">
                                                                        <img src="http://localhost/cuahangtienloi/public/uploads/{{$sp8->image}}" alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="product__content text-center">
                                                                    <div class="produc_desc_info">
                                                                        <div class="product_title">
                                                                            <h4><a href="product-details.html">{{$sp8->tensanpham}}</a></h4>
                                                                        </div>
                                                                        <div class="product_price">
                                                                            <p>{{number_format($sp8->price)}}$</p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="product__hover">
                                                                        <ul>
                                                                            <li><a href="{{asset('cart/add/'.$sp8->id)}}"><i class="ion-android-cart"></i></a></li>
                                                                           <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                            <li><a href="http://localhost/cuahangtienloi/public/chitietsanpham/{{$sp8->id}}"><i class="ion-clipboard"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div> 
                                                </div> 
                                                @endforeach 
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_area home1_banner2 pb-90">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="http://localhost/Quangdemo/public/img/banner/big-1.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="http://localhost/Quangdemo/public/img/banner/big-2.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recommended_product">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="shop_product_head d-flex justify-content-between mb-30">
                                    <div class="section_title space_2 text-left">
                                        <h3>Sản phẩm nên sử dụng</h3>
                                    </div>
                                    <div class="home_shop_product text-right">
                                        <ul class="product-tab-list nav d-flex flex-wrap justify-content-end" role="tablist">
                                            <li><a class="active" href="#fresh_fruit" data-toggle="tab" role="tab" aria-selected="true" aria-controls="fresh_fruit">
                                               Hoa quả
                                            </a></li>
                                            <li><a href="#cucumber " data-toggle="tab" role="tab" aria-selected="false" aria-controls="cucumber"> Đồ uống </a></li>
                                            <li><a href="#tomato" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tomato">Rau </a></li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="tab-content">
                                <div class="tab-pane active show fade" id="fresh_fruit" role="tabpanel">
                                    <div class="row">
                                        <div class="features_product_active owl-carousel">
                                        	@foreach($sanpham9 as $sp9)
                                    <div class="col-lg-2">
                                        <div class="single__product">
                                            <div class="single_product__inner">
                                                <span class="new_badge">new</span>
                                                <div class="product_img">
                                                <a href="#">
                                                    <img src="http://localhost/cuahangtienloi/public/uploads/{{$sp9->image}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="product__content text-center">
                                                    <div class="produc_desc_info">
                                                        <div class="product_title">
                                                            <h4><a href="product-details.html">{{$sp9->tensanpham}}</a></h4>
                                                        </div>
                                                        <div class="product_price">
                                                            <p>{{number_format($sp9->price)}}$</p>
                                                        </div>
                                                    </div>
                                                    <div class="product__hover">
                                                        <ul>
                                                            <li><a href="{{asset('cart/add/'.$sp9->id)}}"><i class="ion-android-cart"></i></a></li>
                                                             <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                            <li><a href="http://localhost/cuahangtienloi/public/chitietsanpham/{{$sp9->id}}"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="cucumber" role="tabpanel">
                                    <div class="row">
                                        <div class="features_product_active owl-carousel">
                                        	@foreach($sanpham10 as $sp10)
                                            <div class="col-lg-2">
                                                <div class="single__product">
                                                    <div class="single_product__inner">
                                                        <span class="new_badge">new</span>
                                                        <div class="product_img">
                                                        <a href="#">
                                                            <img src="http://localhost/cuahangtienloi/public/uploads/{{$sp10->image}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product__content text-center">
                                                            <div class="produc_desc_info">
                                                                <div class="product_title">
                                                                    <h4><a href="product-details.html">{{$sp10->tensanpham}}</a></h4>
                                                                </div>
                                                                <div class="product_price">
                                                                    <p>{{number_format($sp10->price)}}$</p>
                                                                </div>
                                                            </div>
                                                            <div class="product__hover">
                                                                <ul>
                                                                    <li><a href="{{asset('cart/add/'.$sp10->id)}}"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                    <li><a href="http://localhost/cuahangtienloi/public/chitietsanpham/{{$sp10->id}}"><i class="ion-clipboard"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          	@endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tomato" role="tabpanel">
                                    <div class="row">
                                        <div class="features_product_active owl-carousel">
                                        	@foreach($sanpham11 as $sp11)
                                            <div class="col-lg-2">
                                                <div class="single__product">
                                                    <div class="single_product__inner">
                                                        <span class="new_badge">new</span>
                                                        <div class="product_img">
                                                        <a href="#">
                                                            <img src="http://localhost/cuahangtienloi/public/uploads/{{$sp11->image}}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="product__content text-center">
                                                            <div class="produc_desc_info">
                                                                <div class="product_title">
                                                                    <h4><a href="product-details.html">{{$sp11->tensanpham}}</a></h4>
                                                                </div>
                                                                <div class="product_price">
                                                                    <p>{{number_format($sp11->price)}}$</p>
                                                                </div>
                                                            </div>
                                                            <div class="product__hover">
                                                                <ul>
                                                                    <li><a href="{{asset('cart/add/'.$sp11->id)}}"><i class="ion-android-cart"></i></a></li>
                                                                    <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                                    <li><a href="http://localhost/cuahangtienloi/public/chitietsanpham/{{$sp11->id}}"><i class="ion-clipboard"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="banner_area banner_area-2 pb-90">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="http://localhost/Quangdemo/public/img/banner/banner-4.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="http://localhost/Quangdemo/public/img/banner/banner-5.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="single_banner">
                                    <a href="#">
                                        <img src="http://localhost/Quangdemo/public/img/banner/banner-6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="features_product pt-90">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="section_title text-center">
                                    <h3> Sản phẩm bán chạy</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="features_product_active owl-carousel">
                            	@foreach($sanpham7 as $sp7)
                                <div class="col-lg-2">
                                    <div class="single__product">
                                        <div class="single_product__inner">
                                            <span class="new_badge">hot</span>
                                            <div class="product_img">
                                            <a href="#">
                                                <img src="http://localhost/cuahangtienloi/public/uploads/{{$sp7->image}}" alt="">
                                                </a>
                                            </div>
                                            <div class="product__content text-center">
                                                <div class="produc_desc_info">
                                                    <div class="product_title">
                                                        <h4><a href="product-details.html">{{$sp7->tensanpham}}</a></h4>
                                                    </div>
                                                    <div class="product_price">
                                                        <p>{{number_format($sp7->price)}}$</p>
                                                    </div>
                                                </div>
                                                <div class="product__hover">
                                                    <ul>
                                                        <li><a href="{{asset('cart/add/'.$sp7->id)}}"><i class="ion-android-cart"></i></a></li>
                                                        <li><a class="cart-fore" href="#" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
                                                        <li><a href="http://localhost/cuahangtienloi/public/chitietsanpham/{{$sp7->id}}"><i class="ion-clipboard"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              	@endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="brand_logo">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="brand_list_carousel owl-carousel">
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/1.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/2.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/3.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/4.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/5.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/1.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/2.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/3.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/4.png" alt="brand logo">
                                        </a>
                                    </div>
                                    <div class="single_brand_logo">
                                        <a href="#">
                                            <img src="http://localhost/Quangdemo/public/img/brand/5.png" alt="brand logo">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            <div class="modal fade" id="my_modal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-body shop">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <div class="product-flags madal">  
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="imgeone" role="tabpanel" >
                                                    <div class="product_tab_img">
                                                        <a href="#"><img src="http://localhost/Quangdemo/public/img/cart/nav12.jpg" alt=""></a>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div> 
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <div class="modal_right">
                                            <div class="shop_reviews">
                                                <div class="demo_product">
                                                    <h2></h2> 
                                                </div>
                                                <div class="current_price">
                                                    <span class="regular">$64.99</span>    
                                                    <span class="regular_price" >$78.99</span>    
                                                </div>
                                                <div class="product_information product_modal">
                                                    <div id="product_modal_content">
                                                        <p>Short-sleeved blouse with feminine draped sleeve detail.</p>    
                                                    </div>
                                                    <div class="product_variants">
                                                        <div class="product_variants_item modal_item">
                                                            <span class="control_label">Size</span>
                                                            <select id="group_1">
                                                                <option value="1">S</option>
                                                                <option value="2" selected="selected">M</option>
                                                                <option value="3">L</option>
                                                            </select>    
                                                        </div>   
                                                        
                                                       <div class="quickview_plus_minus">
                                                            <span class="control_label">Quantity</span>
                                                            <div class="quickview_plus_minus_inner">
                                                                <div class="cart-plus-minus">
                                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                                </div>
                                                               <div class="add_button add_modal">
                                                                    <button type="submit"> Add to cart</button> 
                                                                </div>
                                                            </div>    
                                                        </div> 
                                                        
                                                        <div class="cart_description">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>    
                                                        </div> 
                                                    </div>
                                                </div>   
                                            </div>    
                                        </div>    
                                    </div>    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="social-share">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>    
                                        </div>    
                                    </div>    
                                </div>     
                            </div>
                        </div>    
                    </div>
                </div>
            </div> 
       @include('fronts.layout.footer')