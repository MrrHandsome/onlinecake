<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eElectronics - HTML eCommerce Template</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

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
    
   @include('user\main-menu');
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
        
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
       
        <div class="container">
            <div class="row col-md-12">
                    @foreach ($cakes as $cake)
                    <div class="col-md-4">
                
                    <div class="single-shop-product">
                        <div class="product-upper">
                                <img width="150%"  height="100%" src="/images/{{ $cake->cake_image }}">
                        </div>
                        <form action="{{ url('user/shop') }}" method="post" >
                         @csrf
                            <h2><a href='single_product/{{$cake->cake_name}}'>{{$cake->cake_name}}</a></h2>
                        </form>
                        <div class="product-carousel-price">
                            <ins>{{$cake->cake_price}}</ins> 
                        </div>  
                       
                      
                        <div class="product-option-shop">
                            
                            <a class="add_to_cart_button" method="post" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href='user_add_cart/{{Auth::user()->id}},{{$cake->cake_id}},{{$cake->cake_name}},{{$cake->cake_type}},{{$cake->cake_price}},{{$cake->cake_image}}'>Add to cart</a>
                        </div>                       
                    </div>
                </div>
                @endforeach
               
            </div>
      
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>


     @include('user\footer')
    
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    <script>$('.add').click(function () {
		if ($(this).prev().val() < 5) {
    	$(this).prev().val(+$(this).prev().val() + 1);
		}
});
$('.sub').click(function () {
		if ($(this).next().val() > 1) {
    	if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
		}
});
</script>
  </body>
</html>