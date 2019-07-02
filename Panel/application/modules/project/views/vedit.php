<section class="content">
        

    
    <div class="box box-primary">
    <form action="<?php echo base_url().$this->uri->uri_string();?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-pencil-square"></i> Update Data</h3>        
        </div>
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">
                <input type="hidden" name="id" value="<?php echo $project[0]['project_id'] ;?>" />
                  <div class="form-group has-feedback <?php echo (form_error('project_nama') || isset($errors['project_nama'])) ? 'has-error' : ''; ?>">
                    <label>Project Name</label>
                    <input type="text" name="project_nama"  class="form-control" value="<?php echo (set_value('project_nama')) ? set_value('project_nama') : $project[0]['project_nama'];?>" />
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('project_nama'); ?><?php echo isset($errors['project_nama'])?$errors['project_nama']:''; ?></span>
                  </div>
                  
                  <div class="form-group has-feedback <?php echo (form_error('project_deskripsi') || isset($errors['project_deskripsi'])) ? 'has-error' : ''; ?>">
                    <label>Description</label>
                    <textarea class="form-control" name="project_deskripsi" rows="5" cols="80"><?php echo (set_value('project_deskripsi')) ? set_value('project_deskripsi') : $project[0]['project_deskripsi'];?></textarea>
                    <span style="color: red;"><?php echo form_error('project_deskripsi'); ?><?php echo isset($errors['project_deskripsi'])?$errors['project_deskripsi']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('project_url_local') || isset($errors['project_url_local'])) ? 'has-error' : ''; ?>">
                    <label>Local Address</label>
                    <input type="url" name="project_url_local"  class="form-control" value="<?php echo (set_value('project_url_local')) ? set_value('project_url_local') : $project[0]['project_url_local'];?>"  />
                    <i class="fa fa-link form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('project_url_local'); ?><?php echo isset($errors['project_url_local'])?$errors['project_url_local']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('project_url_public') || isset($errors['project_url_public'])) ? 'has-error' : ''; ?>">
                    <label>Public Address</label>
                    <input type="url" name="project_url_public"  class="form-control" value="<?php echo (set_value('project_url_public')) ? set_value('project_url_public') : $project[0]['project_url_public'];?>"  />
                    <i class="fa fa-link form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('project_url_public'); ?><?php echo isset($errors['project_url_public'])?$errors['project_url_public']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('project_company') || isset($errors['project_company'])) ? 'has-error' : ''; ?>">
                    <label>Company</label>
                    <input type="text" name="project_company"  class="form-control" value="<?php echo (set_value('project_company')) ? set_value('project_company') : $project[0]['project_company'];?>" />
                    <i class="fa fa-briefcase form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('project_company'); ?><?php echo isset($errors['project_company'])?$errors['project_company']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('developed_in') || isset($errors['developed_in'])) ? 'has-error' : ''; ?>">
                    <label>Developed In (Years)</label>
                    <input type="text" name="developed_in"  class="form-control" value="<?php echo (set_value('developed_in')) ? set_value('developed_in') : $project[0]['developed_in'];?>"  />
                    <span style="color: red;"><?php echo form_error('developed_in'); ?><?php echo isset($errors['developed_in'])?$errors['developed_in']:''; ?></span>
                  </div>

                  <div class="form-group has-feedback <?php echo (form_error('shows_order') || isset($errors['shows_order'])) ? 'has-error' : ''; ?>">
                    <label>Show Order</label>
                    <select class="form-control" name="shows_order" data-placeholder="Uncategory" style="width:100%;"> 
                          <option value="0" <?php if ($project[0]['shows_order'] == 0 || set_value('shows_order') == 0) echo "selected='selected'"; ?>>None</option>
                          <option value="1" <?php if ($project[0]['shows_order'] == 1 || set_value('shows_order') == 1) echo "selected='selected'"; ?>>First</option>
                          <option value="2" <?php if ($project[0]['shows_order'] == 2 || set_value('shows_order') == 2) echo "selected='selected'"; ?>>Shows Order</option>
                      </select>
                    <span style="color: red;"><?php echo form_error('shows_order'); ?><?php echo isset($errors['shows_order'])?$errors['shows_order']:''; ?></span>
                  </div

                <input type="text" name="documentation" id="documentation" hidden="hidden" value="<?php echo $project[0]['project_img'];?>" />
                <center>
                    <img alt="" class="img-thumbnail" id="display-image" src="<?php echo base_url().'assets/upload/projects/'.$project[0]['project_img'];?>" /><br/>
                  </center>
                  <p class="help-block text-center"><i>Image type, Max. 20MB</i></p>
                  <div class="form-group <?php echo (form_error('project_img') || isset($errors['project_img'])) ? 'has-error' : ''; ?>">
                    <label>Documentation</label>
                    <input type="file" name="project_img" class="form-control" onchange="readImg(this, '#display-image');" accept="image/*" />
                    <span style="color: red;"><?php echo form_error('project_img'); ?><?php echo isset($errors['project_img'])?$errors['project_img']:''; ?></span>
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
 