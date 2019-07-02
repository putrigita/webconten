<section class="content">
        <div class="modal fade" id="modal-category">                
           <div class="modal-dialog">
            <div class="modal-content">
              
                   
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
  <?php if ($this->session->flashdata('message')) { ?>
              <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Success</h4>
              <?php echo  $this->session->flashdata('message'); ?>
              </div>
          <?php } ?>
    
    
    <form action="<?php echo base_url().'article/add';?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-pencil-square"></i> Add <?php echo ucfirst($this->uri->segment(1));?></h3>        
        </div>
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            

            <div class="row">
            <?php if($this->ion_auth->in_group('admin') || $this->ion_auth->in_group('members')){ ?>
                <div class="col-md-10">
                    <div class="form-group <?php echo (form_error('category_id') || isset($errors['category_id'])) ? 'has-error' : ''; ?>">
                      
                      <select class="form-control select2" name="category_id" data-placeholder="Uncategory" style="width:100%;"> 
                            <option value=""></option>
                          <?php foreach ($category as $row) { ?>
                            <option value="<?php echo $row['category_id']; ?>" <?php if (set_value('category_id') == $row['category_id']) echo "selected='selected'"; ?>><?php echo $row['category_name']; ?></option>
                          <?php } ?>
                      </select>
                      <span style="color: red;"><?php echo form_error('category_id'); ?><?php echo isset($errors['category_id'])?$errors['category_id']:''; ?></span>
                      
                    </div>
                  </div>

                  <div class="col-md-2">
                    <a data-toggle="modal" data-target="#modal-category" class="btn btn-success btn-sm" title="Add New Category" href="<?php echo base_url().'article/add_category/';?>"><i class="fa fa-plus-circle"></i> Category</a>
                  </div>

                  <br>
              <?php }else{ ?>

                  <div class="col-md-12">
                    <div class="form-group <?php echo (form_error('category_id') || isset($errors['category_id'])) ? 'has-error' : ''; ?>">
                      
                      <select class="form-control select2" name="category_id" data-placeholder="Uncategory" style="width:100%;"> 
                            <option value=""></option>
                          <?php foreach ($category as $row) { ?>
                            <option value="<?php echo $row['category_id']; ?>" <?php if (set_value('category_id') == $row['category_id']) echo "selected='selected'"; ?>><?php echo $row['category_name']; ?></option>
                          <?php } ?>
                      </select>
                      <span style="color: red;"><?php echo form_error('category_id'); ?><?php echo isset($errors['category_id'])?$errors['category_id']:''; ?></span>
                      
                    </div>
                  </div>

              <?php } ?>
            
            <!-- /.col -->
                <div class="col-md-12">

                

                  <div class="form-group has-feedback <?php echo (form_error('article_title') || isset($errors['article_title'])) ? 'has-error' : ''; ?>">
                    <input type="text" placeholder="Title" name="article_title"  class="form-control"  />
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('article_title'); ?><?php echo isset($errors['article_title'])?$errors['article_title']:''; ?></span>
                  </div>

                  <center>
                    <img alt="" class="img-thumbnail" id="display-image" src="<?php echo base_url();?>assets/upload/default_174x90.jpg" /><br/>
                  </center>
                  <p class="help-block text-center"><i>Image type, Max. 20MB</i></p>
                  <div class="form-group <?php echo (form_error('article_img') || isset($errors['article_img'])) ? 'has-error' : ''; ?>">
                    <input type="file" name="article_img" class="form-control" onchange="readImg(this, '#display-image');" accept="image/*" />

                    <span style="color: red;"><?php echo form_error('article_img'); ?><?php echo isset($errors['article_img'])?$errors['article_img']:''; ?></span>
                  </div>
                  
                  <div class="form-group has-feedback <?php echo (form_error('article_content') || isset($errors['article_content'])) ? 'has-error' : ''; ?>">
                    <textarea class="form-control" name="article_content" id="ckeditor1" rows="80" cols="80"></textarea>
                    <span style="color: red;"><?php echo form_error('article_content'); ?><?php echo isset($errors['article_content'])?$errors['article_content']:''; ?></span>
                  </div>

                  <div class="form-group">
                    <button type="submit" name="tombol" class="btn btn-primary">Save</button>
                  </div>
                  
                  
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        
    </form>           
    
      
</section>
 