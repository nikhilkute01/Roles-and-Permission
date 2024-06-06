<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)!='dashboard') collapsed @endif " href="{{url('admin/dashboard')}}">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)!='user') collapsed @endif" href="{{url('user')}}">
      <i class="bi bi-grid"></i>
      <span>User</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)!='category') collapsed @endif" href="{{url('')}}/category">
      <i class="bi bi-grid"></i>
      <span>Category</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)!='subcategory') collapsed @endif" href="{{url('')}}/subcategory">
      <i class="bi bi-grid"></i>
      <span>SubCategory</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)!='role') collapsed @endif" href="{{url('')}}/role">
      <i class="bi bi-grid"></i>
      <span>Role</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)!='product') collapsed @endif" href="{{url('')}}/product">
      <i class="bi bi-grid"></i>
      <span>Product</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)!='setting') collapsed @endif" href="{{url('')}}/setting">
      <i class="bi bi-grid"></i>
      <span>setting</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if(Request::segment(2)!='logout') collapsed @endif" href="{{url('')}}/logout">
      <i class="bi bi-grid"></i>
      <span>logout</span>
    </a>
  </li>

</ul>

</aside><!-- End Sidebar-->