        
    <div class="login-logo">
      <b>Register</b> Panel</a>
    </div><!-- /.login-logo -->
    <!-- <h1><?php echo lang('login_heading');?></h1> -->

    <div class="login-box-body">
      <p  class="login-box-msg">Enter your details to begin:</p>

     

      <?php echo form_open("register/index");?>

        <div class="form-group has-feedback <?php echo (form_error('first_name') || isset($errors['first_name'])) ? 'has-error' : ''; ?>">
                    <label>First Name</label>
                    <input type="text" name="first_name"  class="form-control"  />
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('first_name'); ?><?php echo isset($errors['first_name'])?$errors['first_name']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('last_name') || isset($errors['last_name'])) ? 'has-error' : ''; ?>">
                    <label>Last Name</label>
                    <input type="text" name="last_name"  class="form-control"  />
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('last_name'); ?><?php echo isset($errors['last_name'])?$errors['last_name']:''; ?></span>
                  </div>

                  <?php
                    if($identity_column!=='email') {

                  ?>
                    <div class="form-group has-feedback <?php echo (form_error('identity') || isset($errors['identity'])) ? 'has-error' : ''; ?>">
                      <label>Identity (Username)</label>
                      <input type="text" name="identity"  class="form-control"  />
                      <i class="fa fa-user form-control-feedback"></i>
                      <span style="color: red;"><?php echo form_error('identity'); ?><?php echo isset($errors['identity'])?$errors['identity']:''; ?></span>
                    </div>
                  <?php } ?>

                  <div class="form-group has-feedback <?php echo (form_error('email') || isset($errors['email'])) ? 'has-error' : ''; ?>">
                    <label>Email</label>
                    <input type="email" name="email"  class="form-control"  />
                    <i class="fa fa-envelope form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('email'); ?><?php echo isset($errors['email'])?$errors['email']:''; ?></span>
                  </div>

                 

                  <div class="form-group has-feedback <?php echo (form_error('password') || isset($errors['password'])) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password"  class="form-control"  />
                    <i class="fa fa-lock form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('password'); ?><?php echo isset($errors['password'])?$errors['password']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('password_confirm') || isset($errors['password_confirm'])) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirm"  class="form-control"  />
                    <i class="fa fa-lock form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('password_confirm'); ?><?php echo isset($errors['password_confirm'])?$errors['password_confirm']:''; ?></span>
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
                   

                </div><!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div><!-- /.col -->
              </div>

        

      <?php echo form_close();?>

      
    </div>