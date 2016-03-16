<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    
    <title>Inventario</title>

    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/jquery.dataTables.css')!!}
    {!!Html::script('js/jquery-1.12.1.js')!!}

    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}

    {!!Html::style('css/font-awesome.css')!!}
    {!!Html::style('css/zabuto_calendar.css')!!}
    {!!Html::style('css/jquery.gritter.css')!!}
    {!!Html::style('css/style.css')!!}
    
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/style-responsive.css')!!}
    
    {!!Html::script('js/Chart.js')!!}

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
        <section class="wrapper">
          <div class="row">
            <div class="col-lg-9 main-chart">
              @yield('content')
            </div><!-- /col-lg-9 END SECTION MIDDLE -->

            <!-- **********************************************************************************************************************************************************
            RIGHT SIDEBAR CONTENT
            *********************************************************************************************************************************************************** -->                  
            @include('layouts.rightbar')
          </div><!--/row -->
        </section>
      </section>
            
      <!--main content end-->
      <footer start>
        <footer class="site-footer">
          <div class="text-center">
            Copyright © 2016. Todos Los Derechos Reservados.
          </div>
        </footer>
      <footer end>                  
    </section>
      
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.dcjqaccordion.2.7.js')!!}
    {!!Html::script('js/jquery.scrollTo.min.js')!!}
    {!!Html::script('js/jquery.nicescroll.js')!!}
    {!!Html::script('js/jquery.sparkline.js')!!}

    {!!Html::script('js/jquery.dataTables.js')!!}

    {!!Html::script('js/common-scripts.js')!!}
    
    {!!Html::script('js/jquery.gritter.js')!!}
    {!!Html::script('js/gritter-conf.js')!!}
    
    {!!Html::script('js/sparkline-chart.js')!!}
    {!!Html::script('js/zabuto_calendar.js')!!}

    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

    <!-- js placed at the end of the document so the pages load faster --> 
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

    @section('scripts')

    @show

  </body>
</html>
