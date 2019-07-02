<section class="content">
        

    
    
    <form action="<?php echo base_url().$this->uri->uri_string();?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-pencil-square"></i> Update <?php echo ucfirst($this->uri->segment(1));?></h3>        
        </div>
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">
                <input type="hidden" name="id" value="<?php echo $article[0]['article_id'] ;?>" />

                  <div class="form-group <?php echo (form_error('category_id') || isset($errors['category_id'])) ? 'has-error' : ''; ?>">
                      
                      <select class="form-control select2" name="category_id" data-placeholder="Select Category" style="width:100%;"> 
                        <?php foreach ($category as $row) { ?>
                            <option value="<?php echo $row['category_id']; ?>" <?php if ($article[0]['category_id'] == $row['category_id'] || set_value('category_id') == $row['category_id']) echo "selected='selected'"; ?>><?php echo $row['category_name']; ?></option>
                          <?php } ?>
                      </select>
                      <span style="color: red;"><?php echo form_error('category_id'); ?><?php echo isset($errors['category_id'])?$errors['category_id']:''; ?></span>
                      
                    </div>

                  <div class="form-group has-feedback <?php echo (form_error('article_title') || isset($errors['article_title'])) ? 'has-error' : ''; ?>">
                    
                    <input type="text" placeholder="Title" name="article_title"  class="form-control" value="<?php echo (set_value('article_title')) ? set_value('article_title') : $article[0]['article_title'];?>" />
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('article_title'); ?><?php echo isset($errors['article_title'])?$errors['article_title']:''; ?></span>
                  </div>

                  <input type="text" name="showimg" id="showimg" hidden="hidden" value="<?php echo $article[0]['article_img'];?>" />
                  <center>
                    <img alt="" class="img-thumbnail" id="display-image" src="<?php echo base_url().'assets/upload/article/'.$article[0]['article_img'];?>" /><br/>
                  </center>
                  <p class="help-block text-center"><i>Image type, Max. 20MB</i></p>
                  <div class="form-group <?php echo (form_error('article_img') || isset($errors['article_img'])) ? 'has-error' : ''; ?>">
                    <input type="file" name="article_img" class="form-control" onchange="readImg(this, '#display-image');" accept="image/*" />
                    <span style="color: red;"><?php echo form_error('article_img'); ?><?php echo isset($errors['article_img'])?$errors['article_img']:''; ?></span>
                  </div>
                  
                  <div class="form-group has-feedback <?php echo (form_error('article_content') || isset($errors['article_content'])) ? 'has-error' : ''; ?>">
                    
                    <textarea class="form-control" name="article_content" id="ckeditor1" rows="80" cols="80"><?php echo (set_value('article_content')) ? set_value('article_content') : $article[0]['article_content'];?></textarea>
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
      

 