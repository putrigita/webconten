        
    <div class="login-logo">
      <b>Forgot</b> Password?</a>
    </div><!-- /.login-logo -->
    <!-- <h1><?php echo lang('forgot_password_heading');?></h1> -->

    <div class="login-box-body">
      <p  class="login-box-msg"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

      <?php if ($this->session->flashdata('message')) { ?>
                      <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                        <?php echo  $this->session->flashdata('message'); ?>
                      </div>
                    <?php } ?>

      <?php echo form_open("auth/forgot_password");?>

        <div class="form-group has-feedback <?php echo (form_error('identity') || isset($errors['identity'])) ? 'has-error' : ''; ?>">
                <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
      			<?php echo form_input($identity);?>
                <span class="form-control-feedback"></span>
                <span style="color: red;"><?php echo form_error('identity'); ?><?php echo isset($errors['identity'])?$errors['identity']:''; ?></span>

        </div>

        <div class="row">
                
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-envelope"></i> Submit</button>
                </div><!-- /.col -->
              </div>

        

      
    </div>

