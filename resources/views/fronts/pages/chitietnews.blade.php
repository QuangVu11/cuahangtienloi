@include('fronts.layout.header')
                <!--Header end-->
            </div>
             <!--organicfood wrapper end-->
             
            <!--breadcrumb area start-->
            <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li>
                                <a href="{{asset('trangchu')}}">Home ></a>
                            </li>
                            <li>Blog Details</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
             <!--breadcrumb area end-->
            
            <!--blog details area start-->      
            <div class="blog_details_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-8">
                            <div class="blog_details_left">
                                <div class="blog_left_sidebar mb-50">
                                    <div class="blog_sidebar_img">
                                        <img src="assets/img/blog/4.jpg" alt="">    
                                    </div>
                                    <div class="blog_sidebar_img_content">
                                        <p>On the other hand, dislike men who are so beguiled and the demoralized by the charms of pleasure of the moment.</p>
                                        <h4>Tayeb rayed</h4> 
                                        <div class="blog_sidebar_social">
                                            <ul>
                                                <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                                                <li><a href="#"><i class="icofont icofont-social-flikr"></i></a></li>
                                            </ul>    
                                        </div>  
                                    </div>    
                                </div>
                                <div class="blog_left_sidebar mb-50">
                                    <h3>Search </h3> 
                                    <div class="blog_sidebar_search">
                                        <form action="#">
                                            <input placeholder="Search..." type="text">
                                            <button><i class="icofont icofont-search-alt-2"></i></button>
                                        </form>    
                                    </div>   
                                </div>
                                <div class="blog_left_sidebar mb-50">
                                    <h3>Categories</h3> 
                                    <div class="blog_sidebar_categories">
                                        <ul>
                                            <li><a href="#">Accessories <span>4</span></a></li>
                                            <li><a href="#">Book <span>6</span></a></li>
                                            <li><a href="#">Clothing <span>9</span></a></li>
                                            <li><a href="#">Homelife <span>3</span></a></li>
                                            <li><a href="#">Kids & body <span>8</span></a></li>
                                        </ul>  
                                    </div>   
                                </div> 
                                <div class="blog_left_sidebar mb-50">
                                    <h3>Recent Posts</h3>
                                    <div class="recent_post mb-30">
                                        <div class="recent_post_title">
                                            <a href="#"><img src="assets/img/blog/5.jpg" alt=""></a>    
                                        </div>
                                        <div class="recent_post_content">
                                            <h4><a href="#">The other day the grass brown</a></h4>
                                            <span class="post_date">25 july,2018</span>   
                                        </div>   
                                    </div>
                                    <div class="recent_post mb-30">
                                        <div class="recent_post_title">
                                            <a href="#"><img src="assets/img/blog/2.jpg" alt=""></a>    
                                        </div>
                                        <div class="recent_post_content">
                                            <h4><a href="#">Lorem ipsum dolor sit consectetuer</a></h4>
                                            <span class="post_date">25 july,2018</span>   
                                        </div>   
                                    </div>
                                    <div class="recent_post">
                                        <div class="recent_post_title">
                                            <a href="#"><img src="assets/img/blog/4.jpg" alt=""></a>    
                                        </div>
                                        <div class="recent_post_content">
                                            <h4><a href="#">The other day the grass brown</a></h4>
                                            <span class="post_date">25 july,2018</span>   
                                        </div>   
                                    </div>
                                </div>
                                <div class="blog_left_sidebar mb-50">
                                    <h3>Tags</h3>
                                    <div class="blog-tags-style">
                                        <ul>
                                            <li><a href="#">Development</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Adobe</a></li>
                                        </ul>    
                                    </div>    
                                </div>    
                            </div>    
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="blog_details_info">
                                <div class="blog_meta">
                                    <ul>
                                        <li>Ngày viết</li>
                                        <li>{{$new->created_at}}</li>
                                    </ul>   
                                </div>
                                <h3>{{$new->tomtat}}</h3> 
                                <div class="blog_details_img">
                                    <img src="http://localhost/cuahangtienloi/public/uploads/{{$new->image}}" alt="">    
                                </div>   
                                <div class="post_excerpt">
									<p>{!! $new->content !!}</p> 
                                </div>
                           
                           
								<div class="blog_leave_area">
									<h3>Để lại bình luận</h3>
								 @foreach($new->comment as $cm)
                                                <div class="comment_details">
                                                    <h4>{{$cm->user->name}}</h4> <em>{{$cm->created_at}}</em> 
                                                    <h5>{{$cm->content}}</h5>    
                                                </div>
                                                @endforeach
                                               @if(Auth::check())
                                                    <div class="reply_form_container">
                                                        <div class="reply_form_title">Viết Bình Luận</div>
                                                        <form action="commentnew/{{$new->id}}" id="reply_form" class="reply_form" method="POST" enctype="multipart/form-data">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <textarea class="reply_input reply_textarea" name="content" placeholder="Bình Luận"></textarea>
                                                            <button class="reply_button trans_200"> Gửi</button>
                                                        </form>
                                                    </div>
                                                    @endif
								</div>
								
                            </div>
                               
                        </div>    
                    </div>    
                </div>    
            </div>
            
             <!--blog details area end-->    
            
            
          @include('fronts.layout.footer')