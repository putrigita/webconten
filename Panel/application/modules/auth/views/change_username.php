
    <form method="POST" id="form_username_change">
      
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">

                  

                  <div class="form-group <?php echo (form_error('old_psw_usr') || isset($errors['old_psw_usr'])) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="old_psw_usr" id="old_psw_usr" class="form-control" placeholder="Password" value="<?php echo set_value('old_psw_usr');?>" >
                    <span style="color: red;"><?php echo form_error('old_psw_usr'); ?><?php echo isset($errors['old_psw_usr'])?$errors['old_psw_usr']:''; ?></span>
                  </div>

                  <div class="form-group <?php echo (form_error('new_usr') || isset($errors['new_usr'])) ? 'has-error' : ''; ?>">
                    <label>New Username</label>
                    <input type="text" name="new_usr" id="new_usr" class="form-control" placeholder="Username" value="<?php echo set_value('new_usr');?>"  >
                    <span style="color: red;"><?php echo form_error('new_usr'); ?><?php echo isset($errors['new_usr'])?$errors['new_usr']:''; ?></span>
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
               
      

