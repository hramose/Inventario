<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    
    <title>Inventario</title>
    
    <!-- Bootstrap core CSS -->
    {!!Html::style('css/bootstrap.css')!!}

    <!--External css-->
    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::style('css/zabuto_calendar.css')!!}
    {!!Html::style('css/jquery.gritter.css')!!}
    {!!Html::style('css/style.css')!!}
  
    <!--DataTables-->
    {!!Html::style('css/jquery.dataTables.css')!!}
    {!!Html::script('js/jquery-1.12.1.js')!!}
    
    <!-- MetisMenu CSS -->
    {!!Html::style('css/metisMenu.min.css')!!}    
    
    <!-- Custom styles for this template -->
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    
    {!!Html::script('js/Chart.js')!!}
    
    <!-- Icono -->
    <link rel="shortcut icon" href="img/tigoune.ico">

  </head>

  <body>

    <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      @include('layouts.topbar')
      <!--header end-->      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      @include('layouts.siderbar')
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">        
        <div class="wrapper">
          @yield('content')
        </div>
      </section>            
      <!--main content end-->
      <footer start>
        <footer class="site-footer">
          <div class="text-center">
            Copyright © 2016 Une Telefónica de Pereira. Todos Los Derechos Reservados.
            <a href="#" class="go-top">
              <i class="fa fa-angle-up"></i>
            </a>
          </div>
        </footer>
      <footer end>                  
    </section>
      
    <!-- js placed at the end of the document so the pages load faster -->
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.dcjqaccordion.2.7.js')!!}
    {!!Html::script('js/jquery.scrollTo.min.js')!!}
    {!!Html::script('js/jquery.nicescroll.js')!!}
    {!!Html::script('js/jquery.sparkline.js')!!}
    
    <!--DataTables-->
    {!!Html::script('js/jquery.dataTables.js')!!}
    @section('scripts')

    @show
    
    <!--common script for all pages-->
    {!!Html::script('js/common-scripts.js')!!}
    
    {!!Html::script('js/jquery.gritter.js')!!}
    {!!Html::script('js/gritter-conf.js')!!}
    
    <!--script for this page-->
    {!!Html::script('js/sparkline-chart.js')!!}
    {!!Html::script('js/zabuto_calendar.js')!!}
    
    <!-- Metis Menu Plugin JavaScript -->
    {!!Html::script('js/metisMenu.min.js')!!}

    <!-- Custom Theme JavaScript -->
    {!!Html::script('js/sb-admin-2.js')!!}

    <script type="application/javascript">
      $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
          $(this).hide();
        });
    
        $("#my-calendar").zabuto_calendar({
          action: function () {
            return myDateFunction(this.id, false);
          },
          action_nav: function () {
            return myNavFunction(this.id);
          },
          ajax: {
            url: "show_data.php?action=1",
            modal: true
          },
          legend: [
            {type: "text", label: "Special event", badge: "00"},
            {type: "block", label: "Regular event", }
          ]
        });
      });
      
      
      function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
      }
    </script>

  </body>
</html>
