@extends('layouts.app')
@section('content')
    <!-- header logo: style can be found in header.less -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                <a href="index.php" class="logo">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    
                </a></div>
                <!-- Header Navbar: style can be found in header.less -->
               
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div class="container">
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="content files-list clearfix">
                <h2>
                @if(Auth::check())
                Welcome {{ Auth::user()->name }}
                @endif
                </h2>
                    <div class="col-xs-5">
                        <h4>Change password</h4><br />
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <p style='padding:15px;' class='bg-danger'>{{ $error }}</p>
                            @endforeach
                        @endif
                        @if(Request::get('errorMessage') !== null)
                            <p style='padding:15px;' class='bg-danger'>{{ Request::get('errorMessage') }}</p>
                        @endif
                        <form method="post" action="{{ url('user/changepassword') }}">
                            {{ csrf_field() }}
                           <div class="placeholder">Current Password</div>
                            <input style="max-width:200px;" placeholder='Current password' name="oldpass" id="oldpass"  class="form-control" type="password"><br>
                            <div class="placeholder">New password</div>
                            <input style="max-width:200px;" placeholder='New password' name="password" id="password"  class="form-control" type="password"><br>
                            <div class="placeholder">Confirm password</div>
                            <input id="password_confirmation" style="max-width:200px;" placeholder='Confirm password' name="password_confirmation"  class="form-control" type="password">
                            <hr>
                            <input type="submit" class="btn btn-primary" value="Save">
                        </form>    
                    </div>
            </aside>
            <!-- /.right-side -->
        </div>
        <div style="  height: 155px;"></div>
      
    </div>
    <!-- ./wrapper -->
    <!-- <script src="js/hub/demo.js" type="text/javascript"></script> -->
<script type="text/javascript">
    $(document).ready(function(){
        var bHeight = $("body").height();
        var wHeight = $( window ).height();
        if(bHeight < wHeight){
            $("#footer").addClass("absolute");
        }else{
            $("#footer").removeClass("absolute");
        }
        if (!$.support.htmlSerialize && !$.support.opacity){
            $(".placeholder").show();
        }
    });
</script>
@endsection