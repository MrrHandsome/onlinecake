<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eCakeSHOP</title>
    

    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('user/style.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      @include('user\header');
        
        @include('user\site-branding');    
   
        @include('user\slider');
        
    
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>Quality</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Flavours</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Orders</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                         <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"><b>New Cakes</b></h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/product-1.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Choclate</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$700.00</ins> 
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/d5.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Pinaple</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> 
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img  src="img/d4.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Casata</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins> 
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/d3.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">24 Carot</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$200.00</ins> 
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/d2.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Red Velvet</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$1200.00</ins> 
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/d1.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html">Creaming</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title"><b>Flavour of Cakes</b></h2>
                        <div class="brand-list">
                            <img src="img/d1.jpg" alt="">
                            <img  src="img/d2.jpg" alt="">
                            <img src="img/d3.jpg" alt="">
                            <img src="img/d4.jpg" alt="">
                            <img src="img/d5.jpg" alt="">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                       
                        
                    </div>
                </div>
                <div   class="col-md-4">
                 <a href="single-product.html"><img src="img/d2.jpg"  alt="" style="width:500px;height:500px" ></a>
                
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    @include('user\footer')
    
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.sticky.js')}}"></script>
    
    <!-- jQuery easing -->
    <script src="{{asset('user/js/jquery.easing.1.3.min.js')}}"></script>
    
    <!-- Main Script -->
    <script src="{{asset('user/js/main.js')}}"></script>
  </body>
</html>