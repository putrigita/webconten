<section class="content">
        

    
    <div class="box box-success">
    <form action="<?php echo base_url().'auth/create_user';?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user"></i> <?php echo lang('create_user_heading');?></h3>        
        </div>
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">

                  

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

                  <div class="form-group has-feedback <?php echo (form_error('company') || isset($errors['company'])) ? 'has-error' : ''; ?>">
                    <label>Company Name</label>
                    <input type="text" name="company"  class="form-control"  />
                    <i class="fa fa-briefcase form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('company'); ?><?php echo isset($errors['company'])?$errors['company']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('email') || isset($errors['email'])) ? 'has-error' : ''; ?>">
                    <label>Email</label>
                    <input type="email" name="email"  class="form-control"  />
                    <i class="fa fa-envelope form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('email'); ?><?php echo isset($errors['email'])?$errors['email']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('phone') || isset($errors['phone'])) ? 'has-error' : ''; ?>">
                    <label>Phone</label>
                    <input type="text" name="phone"  class="form-control"  />
                    <i class="fa fa-phone form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('phone'); ?><?php echo isset($errors['phone'])?$errors['phone']:''; ?></span>
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

                  
                  <!-- /.form-group -->
                </div>

                

                <!-- /.col -->
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" name="tombol" class="btn btn-primary">Save</button>
        </div>
    </form>           
    </div>
      
</section>
 