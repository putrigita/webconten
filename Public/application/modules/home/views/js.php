<!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/material.min.js"></script>

  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url();?>assets/js/nouislider.min.js" type="text/javascript"></script>

  <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
  <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

  <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
  <script src="<?php echo base_url();?>assets/js/material-kit.js" type="text/javascript"></script>

  <script src="<?php echo base_url();?>assets/pace/pace.min.js"></script>



  <script>
    $(document).ajaxStart(function() { Pace.restart(); });
      $('.ajax').click(function(){
          $.ajax({url: '#', success: function(result){
              $('.ajax-content').html('<hr>Ajax Request Completed !');
          }});
      });

      $(document).ready(function(){
        $(window).scroll(function(){
          if ($(window).scrollTop() > 100) {
            $('#tombolScrollTop').fadeIn();
          } else {
            $('#tombolScrollTop').fadeOut();
          }
        });
      });

      function scrolltotop()
      {
        $('html, body').animate({scrollTop : 0},500);
      }

  </script>