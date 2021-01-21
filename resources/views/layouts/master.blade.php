<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="icon" href="{{ asset('/images/favicon.png') }}">
  <title>Dashboard</title>
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script><!--v 4.0.0 -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"
  integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
  crossorigin="anonymous"></script><!--v 3.2.1 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"><!--v 4.0.0 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <!--Data table cdn -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/w/bs4/jq-3.3.1/dt-1.10.18/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" />
    <link href="/css/responsive.dataTables.min.css" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/js.js') }}"></script>
      
 
    </head>
<body>
  <div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Admin Options</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name">Admin Name
            
          </span>
          <span class="user-role"></span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="">
            <a href="/admin/">
              <span>Dashboard</span>
            </a>
          </li>
          <li class="">
            <a href="">
              <i class="fa fa-shopping-cart"></i>
              <span>Orders</span>
              <span class="badge badge-pill badge-danger">
              </span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Product</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="">All Products</a>
                </li>
                <li>
                  <a href="">Add New</a>
                </li>
                <li>
                  <a href="#">Attribute</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="{{ route('advancepayment.index')}}">
              <i class="far fa-gem"></i>
              <span>Advancepayment</span>
              <span class="badge badge-pill badge-danger">
              </span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Office Purchage</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('officepurchage.index')}}">Purchage List</a>
                </li>
                <li>
                  <a href=""></a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Costs</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('cost.regular')}}">Regular Costs</a>
                </li>
                <li>
                  <a href="{{ route('officecost.index')}}">Office Costs</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a>
              <i class="fa fa-chart-line"></i>
              <span>Supplier</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('supplier.index')}}">Supplier list</a>
                </li>
                <li>
                  <a href="{{ route('supplierpayment.index')}}">Supplier Payments</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Invest</span>
              <span class="badge badge-pill badge-danger">
              </span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <!--<li>
                  <a href="#">New Reseller Request</a>
                </li>-->
                <li>
                  <a href="{{ route('invest.index')}}">Invest list</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>User</span>
              <span class="badge badge-pill badge-danger">
              </span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <!--<li>
                  <a href="#">New Reseller Request</a>
                </li>-->
                <li>
                  <a href="#">Add New</a>
                </li>
                <li>
                  <a href="">User List</a>
                </li>
                <li>
                  <a href="#">My Account</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a>
              <i class="fa fa-globe"></i>
              <span>Employee</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('employee.index')}}">Employee List</a>
                </li>
                <li>
                  <a href="{{ route('employeesalary.index')}}">Employee Salary</a>
                </li>
                <!--<li>
                  <a href="#">User List</a>
                </li>
                <li>
                  <a href="#">My Account</a>
                </li>-->
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a>
              <i class="fa fa-globe"></i>
              <span>Bkash Payment</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="{{ route('bkash.index')}}">Payment List</a>
                </li>
                <!--<li>
                  <a href="{{ route('employeesalary.index')}}">Employee Salary</a>
                </li>
                <li>
                  <a href="#">User List</a>
                </li>
                <li>
                  <a href="#">My Account</a>
                </li>-->
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="">
              <i class="fa fa-book"></i>
              <span>Order List for Admin</span>
              <!--<span class="badge badge-pill badge-primary">Beta</span>-->
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
    </div>
  </nav>

<!--<i class="fa fa-power-off"></i> -->
  @yield('content')


</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

        <!--Data table cdn -->
 
    <script type="text/javascript" src="https://cdn.datatables.net/w/bs4/jq-3.3.1/dt-1.10.18/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables-responsive/2.2.5/dataTables.responsive.min.js" integrity="sha512-+lcEupw9bvzdp2Ey2GU0VfC7kvjySIYdCC4higXahhw8zUPKO1TUG8O3xf3QZV8rUwQjF5CgJR6V43r/JRhR3w==" crossorigin="anonymous"></script>
    <script src="../js/responsive.bootstrap.min.js"></script>
</body>
</html>