
          @include('fronts.layout.header')
             <!--organicfood wrapper end--> 
            
            <!--breadcrumb area start-->
            <div class="breadcrumb_container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">     
                            <nav>
                        <ul>
                            <li>
                                <a href="index.html">Home ></a>
                            </li>
                            <li>Blog</li>
                        </ul>
                    </nav>
                        </div>
                    </div> 
                </div>        
            </div>
             <!--breadcrumb area end-->
          
           <!--blog area start-->
           <div class="blog_list_area">
                <div class="container">
                    <div class="row">
                    	@foreach($blog as $bl)
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="single_blog_list">
                                <div class="blog__thumb">
                                    <a href="blog-details.html"><img src="http://localhost/cuahangtienloi/public/uploads/{{$bl->image}}" alt=""></a>    
                                </div>
                                <div class="post__content">
                                    <h3><a href="blog-details.html">Người viết : {{$bl->email}}</a></h3>
                                    <ul>
                                        <li><a href="http://localhost/cuahangtienloi/public/chitietnews/{{$bl->id}}">Chi tiết</a></li>
                                        <li class="post_date">Ngày viết : {{$bl->created_at}}</li>
                                    </ul>    
                                </div>
                            </div>    
                        </div>
                        @endforeach 
                        <div class="col-12">
                            <div class="pagination_content">
                               
                                <ul class="pagination">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="pagination_three"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
                               
                            </div>      
                        </div>                        
                    </div>    
                </div>   
           </div>
           <!--blog area end-->
           
            
                
      
           
           
           
           
           
           
           <!--organicfood wrapper end--> 
            
    
            
  
		
		
		<!-- all js here -->
        @include('fronts.layout.footer')