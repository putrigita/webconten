<section class="content">
        

    
    
    <form action="<?php echo base_url().$this->uri->uri_string();?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8" >
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-newspaper-o"></i> Update <?php echo ucfirst($this->uri->segment(1));?></h3>        
        </div>
                <!-- div.dataTables_borderWrap -->
        <div class="box-body">
            <div class="row">
            
            <!-- /.col -->
                <div class="col-md-12">
                <input type="hidden" name="id" value="<?php echo $news[0]['news_id'] ;?>" />

                  <div class="form-group <?php echo (form_error('category_id') || isset($errors['category_id'])) ? 'has-error' : ''; ?>">
                      
                      <select class="form-control select2" name="category_id" data-placeholder="Select Category" style="width:100%;"> 
                        <?php foreach ($category as $row) { ?>
                            <option value="<?php echo $row['category_id']; ?>" <?php if ($news[0]['category_id'] == $row['category_id'] || set_value('category_id') == $row['category_id']) echo "selected='selected'"; ?>><?php echo $row['category_name']; ?></option>
                          <?php } ?>
                      </select>
                      <span style="color: red;"><?php echo form_error('category_id'); ?><?php echo isset($errors['category_id'])?$errors['category_id']:''; ?></span>
                      
                    </div>

                  <div class="form-group has-feedback <?php echo (form_error('news_title') || isset($errors['news_title'])) ? 'has-error' : ''; ?>">
                    
                    <input type="text" placeholder="Title" name="news_title"  class="form-control" value="<?php echo (set_value('news_title')) ? set_value('news_title') : $news[0]['news_title'];?>" />
                    <i class="fa fa-pencil form-control-feedback"></i>
                    <span style="color: red;"><?php echo form_error('news_title'); ?><?php echo isset($errors['news_title'])?$errors['news_title']:''; ?></span>
                  </div>

                  <input type="text" name="showimg" id="showimg" hidden="hidden" value="<?php echo $news[0]['news_img'];?>" />
                  <center>
                    <img alt="" class="img-thumbnail" id="display-image" src="<?php echo base_url().'assets/upload/news/'.$news[0]['news_img'];?>" /><br/>
                  </center>
                  <p class="help-block text-center"><i>Image type, Max. 20MB</i></p>
                  <div class="form-group <?php echo (form_error('news_img') || isset($errors['news_img'])) ? 'has-error' : ''; ?>">
                    <input type="file" name="news_img" class="form-control" onchange="readImg(this, '#display-image');" accept="image/*" />
                    <span style="color: red;"><?php echo form_error('news_img'); ?><?php echo isset($errors['news_img'])?$errors['news_img']:''; ?></span>
                  </div>
                  
                  <div class="form-group has-feedback <?php echo (form_error('news_content') || isset($errors['news_content'])) ? 'has-error' : ''; ?>">
                    
                    <textarea class="form-control" name="news_content" id="ckeditor1" rows="80" cols="80"><?php echo (set_value('news_content')) ? set_value('news_content') : $news[0]['news_content'];?></textarea>
                    <span style="color: red;"><?php echo form_error('news_content'); ?><?php echo isset($errors['news_content'])?$errors['news_content']:''; ?></span>
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
      

 