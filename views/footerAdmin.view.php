
    <!--   Core JS Files   -->
  <script src="<?php echo RUTA; ?>/assets/js/core/jquery.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/core/popper.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?php echo RUTA; ?>/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo RUTA; ?>/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo RUTA; ?>/assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo RUTA; ?>/assets/demo/demo.js"></script>

  <script src="<?php echo RUTA; ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/swiper.min.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/efecto.js"></script>
  <script src="<?php echo RUTA; ?>/assets/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    
    var dateToday = new Date();
        
    $('#datepicker').datepicker({
        inputs:$('.range'),
        format: "yyyy-mm-dd",
        clearBtn: true,
        language: "es",
        autoclose: true,
        todayHighlight: true,
        startDate: dateToday,
        toggleActive: true
    });
    </script>
</body>

</html>
