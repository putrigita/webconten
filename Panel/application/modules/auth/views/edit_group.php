
                    <div class="modal-header">
                      <button type="button" onclick="javascript:history.go(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"><i class="fa fa-users"></i> <?php echo lang('edit_group_heading');?></h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url().$this->uri->uri_string();?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
                        <div class="form-group has-feedback <?php echo (form_error('group_name') || isset($errors['group_name'])) ? 'has-error' : ''; ?>">
                            <label>Group Name</label>
                            <?php echo form_input($group_name);?>
                            <i class="fa fa-pencil form-control-feedback"></i>
                            <span style="color: red;"><?php echo form_error('group_name'); ?><?php echo isset($errors['group_name'])?$errors['group_name']:''; ?></span>
                          </div>

                          <div class="form-group has-feedback <?php echo (form_error('description') || isset($errors['description'])) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <?php echo form_input($group_description);?>
                            <i class="fa fa-pencil form-control-feedback"></i>
                            <span style="color: red;"><?php echo form_error('description'); ?><?php echo isset($errors['description'])?$errors['description']:''; ?></span>
                          </div>
                        

                        <div class="form-group">
                            <button type="submit" name="tombol" class="btn btn-primary">Save</button>

                            <button type="submit" onclick="javascript:history.go(0)" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                      </form>
                    </div>
                   
