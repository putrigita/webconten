
    <form method="POST" id="form_email_change">
      
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">

                  

                  <div class="form-group <?php echo (form_error('old_psw_email') || isset($errors['old_psw_email'])) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="old_psw_email" id="old_psw_email" class="form-control" placeholder="Password" value="<?php echo set_value('old_psw_email');?>" >
                    <span style="color: red;"><?php echo form_error('old_psw_email'); ?><?php echo isset($errors['old_psw_email'])?$errors['old_psw_email']:''; ?></span>
                  </div>

                  <div class="form-group <?php echo (form_error('new_email') || isset($errors['new_email'])) ? 'has-error' : ''; ?>">
                    <label>New Email</label>
                    <input type="email" name="new_email" id="new_email" class="form-control" placeholder="Email" value="<?php echo set_value('new_email');?>"  >
                    <span style="color: red;"><?php echo form_error('new_email'); ?><?php echo isset($errors['new_email'])?$errors['new_email']:''; ?></span>
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
               
      

