<!DOCTYPE html>
<html>
  <head>
    <?php echo  $css; ?>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php echo  $navbar; ?>

      <?php echo  $sidebar; ?>

      <div class="content-wrapper">
        <?php echo  $breadcrumb; ?>

        <?php echo  $content; ?>
        
               <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" onclick="javascript:history.go(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Sign Out Confirmation</h4>
                    </div>
                    <div class="modal-body">
                      <p>Are You Sure ?</p>
                      <div class="pull-right">
                          <a href="<?php echo  base_url().'auth/logout';?>" class="btn btn-primary"><i class="fa fa-sign-out"></i> Oke</a>

                          <button type="submit" onclick="javascript:history.go(0)" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                        <br><br>
                    </div>
                    
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
      
      </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          Page rendered in <strong>{elapsed_time}</strong> seconds.
        </div>
        <center>
            <strong>Copyright &copy; 2017 Gita</strong> All rights reserved.
        </center>
      </footer>
    </div>
    <?php echo  $js; ?>
    <?php include'chart.php'; ?>
  </body>
</html>
