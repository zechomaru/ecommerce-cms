<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
<!--     <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::guard('admin')->user()->name }} {{ Auth::guard('admin')->user()->last_name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div> -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MENU</li>

      <li class="treeview  {{ setActiveAdmin('/') }}">
        <a href="{{ url('admin/dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li class="treeview {{ setActiveAdmin('menus') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Menús</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/menus/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/menus') }}">Todos</a></li>
        </ul>
      </li>

      <li class="treeview {{ setActiveAdmin('paginas') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Paginas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/menus/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/menus') }}">Todos</a></li>
        </ul>
      </li>

      <li class="treeview {{ setActiveAdmin('productos') }} {{ setActiveAdmin('categorias') }} {{ setActiveAdmin('marcas') }} {{ setActiveAdmin('categoria/new') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Productos</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{action('Admin\ProductsController@create')}}">Nuevo</a></li>
          <li class=""><a href="{{action('Admin\ProductsController@index')}}">Todos</a></li>

          <li class="treeview {{ setActiveAdmin('categorias') }} {{ setActiveAdmin('categoria/new') }}">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Categorias</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ setActiveAdmin('categoria/new') }}"><a href="{{action('Admin\CategoriesController@create')}}">Nuevo</a></li>
              <li class=""><a href="{{action('Admin\CategoriesController@index')}}">Todos</a></li>
            </ul>
          </li>

          <li class="treeview {{ setActiveAdmin('grupos') }} {{ setActiveAdmin('grupo/new') }}">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Grupos</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ setActiveAdmin('grupo/new') }}"><a href="{{action('Admin\GroupsController@create')}}">Nuevo</a></li>
              <li class="{{ setActiveAdmin('grupos') }}"><a href="{{action('Admin\GroupsController@index')}}">Todos</a></li>
            </ul>
          </li>

          <li class="treeview {{ setActiveAdmin('sub-grupos') }} {{ setActiveAdmin('sub-grupo/new') }}">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Sub-Grupos</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ setActiveAdmin('sub-grupo/new') }}"><a href="{{action('Admin\SubGroupsController@create')}}">Nuevo</a></li>
              <li class="{{ setActiveAdmin('sub-grupos') }}"><a href="{{action('Admin\SubGroupsController@index')}}">Todos</a></li>
            </ul>
          </li>

          <li class="treeview {{ setActiveAdmin('marcas') }}">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Marcas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="{{ setActiveAdmin('marca/new') }}"><a href="{{action('Admin\BrandsController@create')}}">Nuevo</a></li>
              <li class="{{ setActiveAdmin('marcas') }}"><a href="{{action('Admin\BrandsController@index')}}">Todos</a></li>
            </ul>
          </li>

        </ul>
      </li>


      <li class="treeview {{ setActiveAdmin('admins')}}{{  setActiveAdmin('admin') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Administradores</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{action('Admin\AdminsController@create')}}">Nuevo</a></li>
          <li class=""><a href="{{action('Admin\AdminsController@index')}}">Todos</a></li>
        </ul>
      </li>

      <li class="treeview {{ setActiveAdmin('newsletter') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Newsletter</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/newsletters') }}">Todos</a></li>
        </ul>
      </li>

      <li class="treeview ">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Paypal</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/menus/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/menus') }}">Todos</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>WebPay</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/menus/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/menus') }}">Todos</a></li>
        </ul>
      </li>

      <li class="treeview {{ setActiveAdmin('configuracion') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Configuracion</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/configuracion') }}">Pagina</a></li>
          <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
        </ul>
      </li>

      <li class="treeview {{ setActiveAdmin('google') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Google</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/google') }}">Analitycs</a></li>
          <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
        </ul>
      </li>


      




      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>