<section class="content">
        

    
    <div class="box box-success">
    <form action="<?php echo base_url().$this->uri->uri_string();?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user"></i> <?php echo lang('edit_user_heading');?></h3>        
        </div>
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">

                  

                  <div class="form-group has-feedback <?php echo (form_error('first_name') || isset($errors['first_name'])) ? 'has-error' : ''; ?>">
                    <label>First Name</label>
                    <?php echo form_input($first_name);?>
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('first_name'); ?><?php echo isset($errors['first_name'])?$errors['first_name']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('last_name') || isset($errors['last_name'])) ? 'has-error' : ''; ?>">
                    <label>Last Name</label>
                    <?php echo form_input($last_name);?>
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('last_name'); ?><?php echo isset($errors['last_name'])?$errors['last_name']:''; ?></span>
                  </div>

                  

                  <div class="form-group has-feedback <?php echo (form_error('company') || isset($errors['company'])) ? 'has-error' : ''; ?>">
                    <label>Company Name</label>
                    <?php echo form_input($company);?>
                    <i class="fa fa-briefcase form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('company'); ?><?php echo isset($errors['company'])?$errors['company']:''; ?></span>
                  </div>

                  

                  <div class="form-group has-feedback <?php echo (form_error('phone') || isset($errors['phone'])) ? 'has-error' : ''; ?>">
                    <label>Phone</label>
                    <?php echo form_input($phone);?>
                    <i class="fa fa-phone form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('phone'); ?><?php echo isset($errors['phone'])?$errors['phone']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('password') || isset($errors['password'])) ? 'has-error' : ''; ?>">
                    <label>Password (if changing password)</label>
                    <?php echo form_input($password);?>
                    <i class="fa fa-lock form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('password'); ?><?php echo isset($errors['password'])?$errors['password']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('password_confirm') || isset($errors['password_confirm'])) ? 'has-error' : ''; ?>">
                    <label>Confirm Password (if changing password)</label>
                    <?php echo form_input($password_confirm);?>
                    <i class="fa fa-lock form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('password_confirm'); ?><?php echo isset($errors['password_confirm'])?$errors['password_confirm']:''; ?></span>
                  </div>


                  <div class="form-group has-feedback <?php echo (form_error('groups') || isset($errors['groups'])) ? 'has-error' : ''; ?>">
                    <?php if ($this->ion_auth->is_admin()): ?>

                      <h3><?php echo lang('edit_user_groups_heading');?></h3>
                      <?php foreach ($groups as $group):?>
                          
                          <?php
                              $gID=$group['id'];
                              $checked = null;
                              $item = null;
                              foreach($currentGroups as $grp) {
                                  if ($gID == $grp->id) {
                                      $checked= ' checked="checked"';
                                  break;
                                  }
                              }
                          ?>
                          <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                          <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                          
                      <?php endforeach?>

                  <?php endif ?>

                  
                    <span style="color: red;"><?php echo form_error('groups'); ?><?php echo isset($errors['groups'])?$errors['groups']:''; ?></span>
                  </div>

                  <?php echo form_hidden('id', $user->id);?>
                  <?php echo form_hidden($csrf); ?>

                  
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

