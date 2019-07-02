
                    <div class="modal-header">
                      <button type="button" onclick="javascript:history.go(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"><i class="fa fa-pencil-square"></i> Edit Category</h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url().$this->uri->uri_string();?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
                        <input type="hidden" name="id" value="<?php echo $category[0]['category_id'] ;?>" />
                        <div class="form-group has-feedback <?php echo (form_error('category_name') || isset($errors['category_name'])) ? 'has-error' : ''; ?>">
                          <label>Category Name</label>
                          <input type="text" required="required" name="category_name"  class="form-control" value="<?php echo (set_value('category_name')) ? set_value('category_name') : $category[0]['category_name'];?>" />
                          <i class="fa fa-pencil form-control-feedback"></i>
                          <span style="color: red;"><?php echo form_error('category_name'); ?><?php echo isset($errors['category_name'])?$errors['category_name']:''; ?></span>
                        </div>

                        <div class="form-group has-feedback <?php echo (form_error('chain_for') || isset($errors['chain_for'])) ? 'has-error' : ''; ?>">
                          <label>Chain For</label>
                          <input type="text" required="required" name="chain_for"  class="form-control" value="<?php echo (set_value('chain_for')) ? set_value('chain_for') : $category[0]['chain_for'];?>" />
                          <i class="fa fa-pencil form-control-feedback"></i>
                          <span style="color: red;"><?php echo form_error('chain_for'); ?><?php echo isset($errors['chain_for'])?$errors['chain_for']:''; ?></span>
                        </div>
                        

                        <div class="form-group">
                            <button type="submit" name="tombol" class="btn btn-primary">Save</button>

                            <button type="submit" onclick="javascript:history.go(0)" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                      </form>
                    </div>
                   
