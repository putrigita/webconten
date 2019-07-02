
        <!-- Main content -->
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
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-list"></i> <?php echo  ucfirst($this->uri->segment(1)); ?></h3>
                   <div class="box-tools pull-right">
                    
                    <ul class="btn btn-success btn-sm" >
                      <button style="color:#fff;padding:0px;border-color:#00a65a;" onclick="window.location.href='<?php echo  base_url().'article/add/';?>'" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Add New Article"><i class="fa fa-plus-circle"></i> Article</button>
                    </ul>

                    <?php if($this->ion_auth->in_group('admin')){ ?>
                      <ul class="btn btn-success btn-sm" >
                        <li class="nav dropdown">
                          <button style="color:#fff;padding:0px;border-color:#00a65a;" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-file bigger-120 green"></i> Report <span class="caret"></span></button>
                          <ul class="dropdown-menu" >
                            <li><a href="<?php echo base_url().'article/reportpdf/';?>" target="_blank"><i class="fa fa-file-pdf-o bigger-120 green"></i> Download Pdf</a></li>
                            <li><a href="<?php echo base_url().'article/report/';?>" target="_blank"><i class="fa fa-print bigger-120 green"></i> Print</a></li>
                          </ul>
                        </li>
                      </ul>

                      

                    <?php } ?>

                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                   </div>
                </div><!-- /.box-suber -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped nowrap display" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="vertical-align: middle;">Image</th>
                            <th style="vertical-align: middle;">Title</th>
                            <th style="vertical-align: middle;">Content</th>
                            <th style="vertical-align: middle;">Category</th>
                            <th style="vertical-align: middle;">Created On</th>
                            <th style="vertical-align: middle;">Updated On</th>
                            <th style="vertical-align: middle;width:5%;">Visitors</th>
                            <?php if($this->ion_auth->is_admin()){ ?>
                              <th style="vertical-align: middle;">Author</th>
                            <?php } ?>
                            <th style="text-align:center;vertical-align: middle;width:10%;">Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          
                        </tfoot>
                        <tbody>
                            <?php foreach ($article as $article):?>
                            <tr>
                                
                                <td style="text-align: center;"><img alt="" class="img-thumbnail" id="display-image" width="50px" src="<?php echo base_url().'assets/upload/article/'.$article['article_img'];?>" /></td>
                                <td><?php echo $article['article_title'];?></td>
                                <td><?php echo substr($article['article_content'],3,200);?> ...</td>
                                <td>
                                  <?php echo $article['category_name'];?>
                                </td>
                                <td><?php echo date("d F Y H:i:s",$article['created_on']);?></td>
                                <td><?php echo date("d F Y H:i:s",$article['updated_on']);?></td>
                                <td>
                                  <?php echo $article['visitors'];?>
                                </td>
                                <?php if($this->ion_auth->is_admin()){ ?>
                                  <td><?php echo $article['first_name'].' '.$article['last_name'];?></td>
                                <?php } ?>
                               
                                


                                <td style="text-align:center">
                                            
                                            <a href="<?php echo base_url().'article/edit/'.$article['article_id'];?>"
                                               class="btn btn-sm btn-warning" title="Edit"><i class="fa fa-pencil"></i></a>

                                            <a href="<?php echo base_url().'article/delete/'.$article['article_id'];?>"
                                               class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Are You Sure?')"><i class="fa fa-trash"></i></a>
                                            
                                        
                                </td>
                            </tr>

                    <?php endforeach ?>    

                        </tbody>
                        
                    </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        