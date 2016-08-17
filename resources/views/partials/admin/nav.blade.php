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
          <li class=""><a href="{{ url('admin/dashboard/menus/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/dashboard/menus') }}">Todos</a></li>
        </ul>
      </li>

      <li class="treeview {{ setActiveAdmin('menus') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Paginas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/dashboard/menus/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/dashboard/menus') }}">Todos</a></li>
        </ul>
      </li>

      <li class="treeview {{ setActiveAdmin('productos') }} {{ setActiveAdmin('categorias') }} {{ setActiveAdmin('marcas') }}">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Productos</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class=""><a href="{{ url('admin/dashboard/producto/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/dashboard/productos') }}">Todos</a></li>

          <li class="treeview {{ setActiveAdmin('categorias') }}">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>categorias</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class=""><a href="{{ url('admin/dashboard/categoria/new') }}">Nuevo</a></li>
              <li class=""><a href="{{ url('admin/dashboard/categorias') }}">Todos</a></li>
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
              <li class=""><a href="{{ url('admin/dashboard/marca/new') }}">Nuevo</a></li>
              <li class=""><a href="{{ url('admin/dashboard/marcas') }}">Todos</a></li>
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
          <li class=""><a href="{{ url('admin/dashboard/admin/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/dashboard/admins') }}">Todos</a></li>
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
          <li class=""><a href="{{ url('admin/dashboard/newsletters') }}">Todos</a></li>
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
          <li class=""><a href="{{ url('admin/dashboard/menus/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/dashboard/menus') }}">Todos</a></li>
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
          <li class=""><a href="{{ url('admin/dashboard/menus/new') }}">Nuevo</a></li>
          <li class=""><a href="{{ url('admin/dashboard/menus') }}">Todos</a></li>
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
          <li class=""><a href="{{ url('admin/dashboard/configuracion') }}">Pagina</a></li>
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
          <li class=""><a href="{{ url('admin/dashboard/google') }}">Analitycs</a></li>
          <!-- <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li> -->
        </ul>
      </li>


      




      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>