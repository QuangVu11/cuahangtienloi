 @include('fronts.layout.header')
 												 <div class="features_product pt-90">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="section_title text-center">
                                    <h3> Tìm kiếm : {{$tukhoa}} </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="features_product_active owl-carousel">
                            	@foreach($sanpham as $sp4)
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
                                                        <li><a class="cart-fore" href="" data-toggle="modal" data-target="#my_modal"  title="Quick View" ><i class="ion-android-open"></i></a></li>
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
                                                @include('fronts.layout.footer')