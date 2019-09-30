     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       
        
        
      
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
          </ul>
        </li>
 
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('/pages/examples/login.html')}}"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="{{url('/pages/examples/register.html')}}"><i class="fa fa-circle-o"></i> Register</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Views</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::asset('admin/admin_view_customer')}}"><i class="fa fa-circle-o"></i> View Customer</a></li>
            <li><a href="{{URL::asset('admin/admin_view_product')}}"><i class="fa fa-circle-o"></i> View Product</a></li>
            <li><a href="{{URL::asset('admin/admin_view_order')}}"><i class="fa fa-circle-o"></i> View Order</a></li>
            <li><a href="{{URL::asset('admin/admin_view_feedback')}}"><i class="fa fa-circle-o"></i> View Feedback</a></li>
            <li><a href="{{URL::asset('admin/admin_view_response ')}}"><i class="fa fa-circle-o"></i> Response</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Add</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{URL::asset('admin/admin_add_product')}}"><i class="fa fa-circle-o"></i> Add Product</a></li>
           
          </ul>
        </li>
     </ul>
 