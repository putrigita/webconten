<!-- <h1><?php echo lang('reset_password_heading');?></h1>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open('auth/reset_password/' . $code);?>

	<p>
		<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
		<?php echo form_input($new_password);?>
	</p>

	<p>
		<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
		<?php echo form_input($new_password_confirm);?>
	</p>

	<?php echo form_input($user_id);?>
	<?php echo form_hidden($csrf); ?>

	<p><?php echo form_submit('submit', lang('reset_password_submit_btn'));?></p>

<?php echo form_close();?> -->

        
    <div class="login-logo">
      <b>Change</b> Password</a>
    </div><!-- /.login-logo -->
    
    <div class="login-box-body">
      <p  class="login-box-msg">Please type and submit your new password below.</p>
                    

    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open('auth/reset_password/' . $code);?>

        <div class="form-group has-feedback <?php echo (form_error('new_password') || isset($errors['new_password'])) ? 'has-error' : ''; ?>">
                <?php echo form_input($new_password);?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span style="color: red;"><?php echo form_error('new_password'); ?><?php echo isset($errors['new_password'])?$errors['new_password']:''; ?></span>

        </div>

        <div class="form-group has-feedback <?php echo (form_error('new_password_confirm') || isset($errors['new_password_confirm'])) ? 'has-error' : ''; ?>">
                <?php echo form_input($new_password_confirm);?>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span style="color: red;"><?php echo form_error('new_password_confirm'); ?><?php echo isset($errors['new_password_confirm'])?$errors['new_password_confirm']:''; ?></span>

        </div>

       
          <?php echo form_input($user_id);?>
          <?php echo form_hidden($csrf); ?>

        <div class="row">
              
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
              </div>

        

      <?php echo form_close();?>

      
    </div>