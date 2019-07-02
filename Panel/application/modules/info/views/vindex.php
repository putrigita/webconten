
        <!-- Main content -->
        <section class="content">


          <?php if ($this->session->flashdata('message')) { ?>
              <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h4><i class="icon fa fa-check"></i> Success</h4>
              <?php echo  $this->session->flashdata('message'); ?>
              </div>
          <?php } ?>
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-list"></i> Information Settings</h3>
                   <div class="box-tools pull-right">
                    
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                   </div>
                </div><!-- /.box-suber -->
                
                <div class="box-body">
                    <div class="media">  
                      <div class="col-md-1">
                        <center><label class="control-label">No</label></center>
                      </div>
                      <div class="col-md-4">
                        <center><label class="control-label">Title Information</label></center>
                      </div>
                      <div class="col-md-3">
                        <center><label class="control-label">Content</label></center>
                      </div>
                      <div class="col-md-3">
                        <center><label class="control-label">Action</label></center>
                      </div>
                    </div>
                </div>
                <?php foreach ($infos as $row): ?>
                <div class="box-body">
                <form action="<?php echo  base_url().'info/edit/'.$row['info_id'];?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                    <div class="col-md-1">
                      <div class="media">
                        <center><label class="control-label" style="vertical-align:middle;"><?php echo $row['info_id']; ?></label></center>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group has-feedback <?php echo  (form_error('title') || isset($errors['title'])) ? 'has-error' : ''; ?>">
                      <input type="text" name="title" readonly="readonly" id="title" class="form-control" placeholder="title" value="<?php echo  (set_value('title')) ? set_value('title') : $row['info_title'];?>" maxlength='100'>
                      
                      <span style="color: red;"><?php echo  form_error('title'); ?><?php echo  isset($errors['title'])?$errors['title']:''; ?></span>
                    </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group has-feedback <?php echo  (form_error('content') || isset($errors['content'])) ? 'has-error' : ''; ?>">
                      <?php if($row['info_title'] == 'Address'){ ?>
                        <textarea name="content" id="content" class="form-control" placeholder="Content" ><?php echo  (set_value('content')) ? set_value('content') : $row['info_content'];?></textarea>
                      <?php }else{ ?>
                        <input type="text" name="content" id="content" class="form-control" placeholder="Content" value="<?php echo  (set_value('content')) ? set_value('content') : $row['info_content'];?>" maxlength='100'>
                        <i class="fa fa-pencil form-control-feedback"></i>
                      <?php } ?>
                        <span style="color: red;"><?php echo  form_error('content'); ?><?php echo  isset($errors['content'])?$errors['content']:''; ?></span>
                      </div>
                    </div>
                    <div class="col-md-2">

                      <div class="form-group">
                        <button type="submit" class="btn btn-warning">Edit Information</button>
                      </div>
                    </div>
                 </form>
                </div><!-- /.box-body -->
                <?php endforeach ?> 
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        