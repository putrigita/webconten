
                    <div class="modal-header">
                      <button type="button" onclick="javascript:history.go(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"><i class="fa fa-pencil-square"></i> Add Category</h4>
                    </div>
                    <div class="modal-body">
                      <form action="<?php echo base_url().'news/add_category';?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
                        <div class="form-group has-feedback <?php echo (form_error('category_name') || isset($errors['category_name'])) ? 'has-error' : ''; ?>">
                          <label>Category Name</label>
                          <input type="text" required="required" placeholder="Only 10 Character" maxlenght="10" name="category_name"  class="form-control"  />
                          <i class="fa fa-pencil form-control-feedback"></i>
                          <span style="color: red;"><?php echo form_error('category_name'); ?><?php echo isset($errors['category_name'])?$errors['category_name']:''; ?></span>
                        </div>
                        
                      

                        <div class="form-group">
                          <button type="submit" name="tombol" class="btn btn-primary">Save</button>

                          <button type="submit" onclick="javascript:history.go(0)" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                      </form>
                    </div>
                   
