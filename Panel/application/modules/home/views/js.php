<?php
if($this->uri->segment(2) != 'cropper'){ 
echo ' <script src="'.base_url().'assets/plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>';
}
?>    
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url();?>assets/plugins/select2/select2.full.min.js"></script>

<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/plugins/knob/jquery.knob.js"></script>
<script src="<?php echo base_url();?>assets/plugins/chartjs/Chart.min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>

<script src="<?php echo base_url();?>assets/plugins/dataTables.rowsGroup.js"></script>

<script src="<?php echo base_url();?>assets/plugins/ckeditor/ckeditor.js"></script>

<script src="<?php echo base_url();?>assets/plugins/pace/pace.min.js"></script>



<script>
  $(document).ajaxStart(function() { Pace.restart(); });
    $('.ajax').click(function(){
        $.ajax({url: '#', success: function(result){
            $('.ajax-content').html('<hr>Ajax Request Completed !');
        }});
    });
    
  $(function () {
    $("#example1").DataTable({
      "scrollX" : true,
      "scrollCollapse" : true,
      "ordering": true,
    });
    $("#rowspan").DataTable({
      "scrollX" : true,
      "scrollCollapse" : true,
      "rowsGroup": [0],
      "ordering": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    CKEDITOR.replace('ckeditor1',{
      language : 'en',
    });

    CKEDITOR.replace('ckeditor2',{
      language : 'en',
    });
  });
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    
  });
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#checkboxAll').click(function(){
			if($(this).is(":checked"))
				$('.checkboxId').prop('checked', true);
			else
				$('.checkboxId').prop('checked', false);
		});
    $("#form_password_change" ).on( "submit", function( event ) {
                      event.preventDefault();
                      var data = $('#form_password_change').serialize();
                $.ajax({
                        type: "POST",
                        url: '<?php echo  base_url();?>auth/change_password',
                        data: data,
                        success: function (result) {
                            $('#password').html(result);
                        },
                        error: function (xhr, error, status) {
                            alert(error);
                            
                        }
                    });
                });
    $("#form_email_change" ).on( "submit", function( event ) {
                      event.preventDefault();
                      var data = $('#form_email_change').serialize();
                $.ajax({
                        type: "POST",
                        url: '<?php echo  base_url();?>auth/change_email',
                        data: data,
                        success: function (result) {
                            $('#email').html(result);
                        },
                        error: function (xhr, error, status) {
                            alert(error);
                            
                        }
                    });
                });
    $("#form_username_change" ).on( "submit", function( event ) {
                      event.preventDefault();
                      var data = $('#form_username_change').serialize();
                $.ajax({
                        type: "POST",
                        url: '<?php echo  base_url();?>auth/change_username',
                        data: data,
                        success: function (result) {
                            $('#username').html(result);
                        },
                        error: function (xhr, error, status) {
                            alert(error);
                            
                        }
                    });
                });
	});
  function readImg(input, output) {
        if (input.files && input.files[0]) {
            var FR = new FileReader();
            var str = input.files[0]['name'];
      var res = str.split(".");
            if (res[1] == "pdf"){
              $(output).attr('src', window.location.origin+'/'+window.location.pathname.split('/')[1]+'/assets/upload/pdf.png');
              $(output).attr('style', 'width:150px;height:150px;');
            }else{
              FR.onload = function(e) {
                  $(output).attr('src', e.target.result);
              };  
            }
            FR.readAsDataURL(input.files[0]);
        }
    }
</script>



<?php
  function get_timeago( $ptime )
      {
          $estimate_time = time() - $ptime;

          if( $estimate_time < 1 )
          {
              return 'less than 1 second ago';
          }

          $condition = array( 
                      12 * 30 * 24 * 60 * 60  =>  'year',
                      30 * 24 * 60 * 60       =>  'month',
                      24 * 60 * 60            =>  'day',
                      60 * 60                 =>  'hour',
                      60                      =>  'minute',
                      1                       =>  'second'
          );

          foreach( $condition as $secs => $str )
          {
              $d = $estimate_time / $secs;

              if( $d >= 1 )
              {
                  $r = round( $d );
                  return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
              }
          }
      }
?>