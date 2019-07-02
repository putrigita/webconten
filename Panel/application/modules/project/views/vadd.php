<section class="content">
        

    
    <div class="box box-primary">
    <form action="<?php echo base_url().'project/add';?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-pencil-square"></i> Form Data</h3>        
        </div>
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">

                  <div class="form-group has-feedback <?php echo (form_error('project_nama') || isset($errors['project_nama'])) ? 'has-error' : ''; ?>">
                    <label>Project Name</label>
                    <input type="text" name="project_nama"  class="form-control"  />
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('project_nama'); ?><?php echo isset($errors['project_nama'])?$errors['project_nama']:''; ?></span>
                  </div>
                  
                  <div class="form-group has-feedback <?php echo (form_error('project_deskripsi') || isset($errors['project_deskripsi'])) ? 'has-error' : ''; ?>">
                    <label>Description</label>
                    <textarea class="form-control" name="project_deskripsi" rows="5" cols="80"></textarea>
                    <span style="color: red;"><?php echo form_error('project_deskripsi'); ?><?php echo isset($errors['project_deskripsi'])?$errors['project_deskripsi']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('project_url_local') || isset($errors['project_url_local'])) ? 'has-error' : ''; ?>">
                    <label>Local Address</label>
                    <input type="url" name="project_url_local" placeholder="'http://' or 'https://' ..." class="form-control"  />
                    <i class="fa fa-link form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('project_url_local'); ?><?php echo isset($errors['project_url_local'])?$errors['project_url_local']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('project_url_public') || isset($errors['project_url_public'])) ? 'has-error' : ''; ?>">
                    <label>Public Address</label>
                    <input type="url" name="project_url_public" placeholder="'http://' or 'https://' ..."  class="form-control"  />
                    <i class="fa fa-link form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('project_url_public'); ?><?php echo isset($errors['project_url_public'])?$errors['project_url_public']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('project_company') || isset($errors['project_company'])) ? 'has-error' : ''; ?>">
                    <label>Company</label>
                    <input type="text" name="project_company"  class="form-control"  />
                    <i class="fa fa-briefcase form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('project_company'); ?><?php echo isset($errors['project_company'])?$errors['project_company']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('developed_in') || isset($errors['developed_in'])) ? 'has-error' : ''; ?>">
                    <label>Developed In (Years)</label>
                    <input type="text" name="developed_in"  class="form-control"  />
                    <span style="color: red;"><?php echo form_error('developed_in'); ?><?php echo isset($errors['developed_in'])?$errors['developed_in']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('shows_order') || isset($errors['shows_order'])) ? 'has-error' : ''; ?>">
                    <label>Show Order</label>
                    <select class="form-control" name="shows_order" data-placeholder="Uncategory" style="width:100%;"> 
                          <option value="0">None</option>
                          <option value="1">First</option>
                          <option value="2">Shows Order</option>
                      </select>
                    <span style="color: red;"><?php echo form_error('shows_order'); ?><?php echo isset($errors['shows_order'])?$errors['shows_order']:''; ?></span>
                  </div>

                  <center>
                    <img alt="" class="img-thumbnail" id="display-image" src="<?php echo base_url();?>assets/upload/default_174x90.jpg" /><br/>
                  </center>
                  <p class="help-block text-center"><i>Image type, Max. 20MB</i></p>
                  <div class="form-group <?php echo (form_error('project_img') || isset($errors['project_img'])) ? 'has-error' : ''; ?>">
                    <label>Documentation</label>
                    <input type="file" name="project_img" class="form-control" onchange="readImg(this, '#display-image');" accept="image/*" />
                    <span style="color: red;"><?php echo form_error('project_img'); ?><?php echo isset($errors['project_img'])?$errors['logo']:''; ?></span>
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
 