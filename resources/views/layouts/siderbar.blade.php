<aside>
  <div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
    
  	  <p class="centered"><a href="{!!URL::to('/index')!!}"><img src="{!!URL::to('img/ui-sam.jpg')!!}" class="img-circle" width="60"></a></p>
  	  <h5 class="centered"> Agregación & Backbone </h5>

       <li class="sub-menu">
        <a href="javascript:;" >
          <i class="fa fa-desktop"></i>
          <span> Elementos Físicos </span>
        </a>
        <ul class="sub">
          <li><a  href="{!!URL::to('/eresumenf')!!}"><i class="fa fa-server fa-fw"></i> Resumen </a></li>
          <li><a  href="{!!URL::to('/efisico')!!}"><i class="fa fa-server fa-fw"></i> Elementos Físicos </a></li>
          <li><a  href="{!!URL::to('/hefisico')!!}"><i class="fa fa-list fa-fw"></i> Historial Mantenimiento </a></li>
          <li><a  href="{!!URL::to('/defisico')!!}"><i class="fa fa-book fa-fw"></i> Descripción </a></li>
          <li><a  href="{!!URL::to('/oefisico')!!}"><i class="fa fa-comment fa-fw"></i> Observaciones </a></li>
          <li><a  href="{!!URL::to('/befisico')!!}"><i class="fa fa-undo fa-fw"></i> BackUp </a></li>
          <li><a  href="{!!URL::to('/refisico')!!}"><i class="fa fa-refresh fa-fw"></i> Red </a></li>
        </ul>
      </li>

      <li class="sub-menu">
        <a href="javascript:;" >
          <i class="fa fa-cogs"></i>
          <span> Elementos Virtuales </span>
        </a>
        <ul class="sub">
          <li><a  href="{!!URL::to('/eresumenv')!!}"><i class="fa fa-server fa-fw"></i> Resumen </a></li>
          <li><a  href="{!!URL::to('/evirtual')!!}"><i class="fa fa-server fa-fw"></i> Elementos Virtuales </a></li>
          <li><a  href="{!!URL::to('/devirtual')!!}"><i class="fa fa-book fa-fw"></i> Descripción </a></li>
          <li><a  href="{!!URL::to('/oevirtual')!!}"><i class="fa fa-comment fa-fw"></i> Observaciones </a></li>
          <li><a  href="{!!URL::to('/bevirtual')!!}"><i class="fa fa-undo fa-fw"></i> BackUp </a></li>
          <li><a  href="{!!URL::to('/revirtual')!!}"><i class="fa fa-refresh fa-fw"></i> Red </a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;" >
          <i class="fa fa-database"></i>
          <span> Aplicaciones </span>
        </a>
        <ul class="sub">
          <li><a  href="{!!URL::to('/aplicacion')!!}"><i class="fa fa-eye fa-fw"></i> Aplicaciones </a></li>
          <li><a  href="{!!URL::to('/daplicacion')!!}"><i class="fa fa-book fa-fw"></i> Descripción </a></li>
          <li class="sub-menu">
            <a  href="javascript:;">
              <i class="fa fa-sort-desc fa-fw"></i>
              <span> Asignaciones </span>
            </a>
            <ul class="sub">
              <li><a  href="{!!URL::to('/asignaref')!!}"><i class="fa fa-arrows-h fa-fw"></i> Asignar E_Físico </a></li>
              <li><a  href="{!!URL::to('/asignarev')!!}"><i class="fa fa-arrows-h fa-fw"></i> Asignar E_Virtual </a></li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <!-- sidebar menu end-->
  </div>
</aside>