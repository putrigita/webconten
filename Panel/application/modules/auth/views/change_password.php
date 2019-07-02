
    <form method="POST" id="form_password_change">
      
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">

                  

                  <div class="form-group <?php echo (form_error('old') || isset($errors['old'])) ? 'has-error' : ''; ?>">
                    <label>Old Password</label>
                    <input type="password" name="old" id="old" class="form-control" placeholder="Password" value="<?php echo set_value('old');?>" >
                    <span style="color: red;"><?php echo form_error('old'); ?><?php echo isset($errors['old'])?$errors['old']:''; ?></span>
                  </div>

                  <div class="form-group <?php echo (form_error('new') || isset($errors['new'])) ? 'has-error' : ''; ?>">
                    <label>New Password (at least 8 characters long)</label>
                    <input type="password" name="new" id="new" class="form-control" placeholder="Password" value="<?php echo set_value('new');?>" maxlenght="<?php echo $this->config->item('min_password_length', 'ion_auth'); ?>" >
                    <span style="color: red;"><?php echo form_error('new'); ?><?php echo isset($errors['new'])?$errors['new']:''; ?></span>
                  </div>

                  <div class="form-group <?php echo (form_error('new_confirm') || isset($errors['new_confirm'])) ? 'has-error' : ''; ?>">
                    <label>New Password Confirm(at least 8 characters long)</label>
                    <input type="password" name="new_confirm" id="new_confirm" class="form-control" placeholder="Password" value="<?php echo set_value('new_confirm');?>" maxlenght="<?php echo $this->config->item('min_password_length', 'ion_auth'); ?>" >
                    <span style="color: red;"><?php echo form_error('new_confirm'); ?><?php echo isset($errors['new_confirm'])?$errors['new_confirm']:''; ?></span>
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
               
      

