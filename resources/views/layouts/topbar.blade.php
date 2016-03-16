<header class="header black-bg">
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
  </div>
  <!--logo start-->
  <a href="{!!URL::to('/index')!!}" class="logo"><b>INVENTARIO</b></a>
  <!--logo end-->
  <div class="nav pull-right" id="top_menu">
    <ul class="nav navbar-top-links navbar-right">                
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
          <li><a href="{!!URL::to('/admin')!!}"><i class="fa fa-gear fa-fw"></i>Configuraciones</a>
          </li>
          <li class="divider"></li>
          <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
          </li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
          <!-- /.dropdown -->
    </ul>
  </div>
</header>