<div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index">Home</a></li>
                        <li><a href="shop">Shop page</a></li>
                       
                        <li><a href="cart">Cart</a></li>
                        <li><a href="checkout">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        
                        
                        <li><a href='myprofile/{{Auth::user()->id}}'>{{Auth::user()->name}}</a></li>
                        <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                        </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        
                        {{-- <a href='admin_view_customer/{{$value->id}}'> --}}
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->