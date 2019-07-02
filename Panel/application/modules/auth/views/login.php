        
    <div class="login-logo">
      <b>Login</b> Panel</a>
    </div><!-- /.login-logo -->
    <?php if ($this->session->flashdata('success')) { ?>
                      <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        <?php echo  $this->session->flashdata('success'); ?>
                      </div>
                    <?php } ?>

    <div class="login-box-body">
      <p  class="login-box-msg">Please login with your <?php if($this->config->item('identity','ion_auth')=='username'){ echo 'username';}else{ echo 'email';} ?> and password below.</p>

     <?php if ($this->session->flashdata('message')) { ?>
                      <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                        <?php echo  $this->session->flashdata('message'); ?>
                      </div>
                    <?php } ?>

                    

      <?php echo form_open("auth/login");?>

        <div class="form-group has-feedback <?php echo (form_error('identity') || isset($errors['identity'])) ? 'has-error' : ''; ?>">
                <input type="text" name="identity" id="identity" class="form-control" <?php if($this->config->item('identity','ion_auth')=='username'){ echo 'placeholder="Username"';}else{ echo 'placeholder="Email"';} ?> value="<?php echo set_value('identity');?>" maxlength='80'>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span style="color: red;"><?php echo form_error('identity'); ?><?php echo isset($errors['identity'])?$errors['identity']:''; ?></span>

        </div>

        <div class="form-group has-feedback <?php echo (form_error('password') || isset($errors['password'])) ? 'has-error' : ''; ?>">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo set_value('password');?>" maxlength='80'>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span style="color: red;"><?php echo form_error('password'); ?><?php echo isset($errors['password'])?$errors['password']:''; ?></span>

        </div>

        <?php if ($captcha_registration) {
                if ($use_recaptcha) { ?>
              <tr>
                <td colspan="2">
                  <div id="recaptcha_image"></div>
                </td>
                <td>
                  <a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
                  <div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
                  <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="recaptcha_only_if_image">Enter the words above</div>
                  <div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
                </td>
                <td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
                <td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
                <?php echo $recaptcha_html; ?>
              </tr>
              <?php } else { ?>
              <tr>
                <td colspan="3">
                  <p>Enter the code exactly as it appears:</p>
                  <?php echo $captcha_html; ?> &nbsp; <a onclick="javascript:history.go(0)" class="btn btn-default" ><i class="fa fa-refresh"></i></a>
                </td>
              </tr>
              <tr>
              <br><br>
                <td>
                    <div class="form-group has-feedback <?php echo (form_error('captcha') || isset($errors['captcha'])) ? 'has-error' : ''; ?>">

                    <?php echo form_input($captcha); ?>
                    <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
                    <span style="color: red;"><?php echo form_error('captcha'); ?><?php echo isset($errors['captcha'])?$errors['captcha']:''; ?></span>

                  </div>
                </td>
                
              </tr>
              <?php }
              } ?>

        <div class="row">
                <div class="col-xs-8">
                    <p>
                      <?php echo lang('login_remember_label', 'remember');?>
                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                    
                    <br>
                    <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>

                    <br>
                    <a href="<?php echo base_url('register');?>">Don't have an account?</a>
                    </p>
                    

                </div><!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
              </div>

        

      <?php echo form_close();?>

      
    </div>