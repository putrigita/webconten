
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
                  <h3 class="box-title"><i class="fa fa-list"></i> <?php echo  ucfirst($this->uri->segment(1)); ?></h3>
                   <div class="box-tools pull-right">
                    
                    <ul class="btn btn-success btn-sm" >
                      <button style="color:#fff;padding:0px;border-color:#00a65a;" onclick="window.location.href='<?php echo  base_url().'project/add/';?>'" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="Add New List Project"><i class="fa fa-plus-circle"></i> Project</button>
                    </ul>

                    <ul class="btn btn-success btn-sm" >
                        <li class="nav dropdown">
                          <button style="color:#fff;padding:0px;border-color:#00a65a;" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-file bigger-120 green"></i> Report <span class="caret"></span></button>
                          <ul class="dropdown-menu" >
                            <li><a href="<?php echo base_url().'project/reportpdf/';?>" target="_blank"><i class="fa fa-file-pdf-o bigger-120 green"></i> Download Pdf</a></li>
                            <li><a href="<?php echo base_url().'project/report/';?>" target="_blank"><i class="fa fa-print bigger-120 green"></i> Print</a></li>
                          </ul>
                        </li>
                      </ul>

                      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                   </div>
                </div><!-- /.box-suber -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped nowrap display" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="vertical-align: middle;">Project Name</th>
                            <th style="vertical-align: middle;">Description</th>
                            <th style="vertical-align: middle;">Local Address</th>
                            <th style="vertical-align: middle;">Public Address</th>
                            <th style="vertical-align: middle;">Company</th>
                            <th style="vertical-align: middle;">Developed In</th>
                            <th style="vertical-align: middle;">Shows Order</th> 
                            <th style="vertical-align: middle;">Documentation</th>  
                            <th style="text-align:center;vertical-align:middle;">Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          
                        </tfoot>
                        <tbody>
                            <?php foreach ($project as $project):?>
                            <tr>
                                
                                
                                <td><?php echo $project['project_nama'];?></td>
                                <td><?php echo $project['project_deskripsi'];?></td>
                                <td><a href="<?php echo $project['project_url_local'];?>" target="_blank"><?php echo $project['project_url_local'];?></a></td>
                                <td>
                                    <a href="<?php echo $project['project_url_public'];?>" target="_blank">
                                    <?php echo $project['project_url_public'];?></a>
                                </td>
                                <td>
                                    <?php echo $project['project_company']; ?>
                                </td>
                                <td>
                                    <?php echo $project['developed_in']; ?>
                                </td>
                                <td>
                                    <?php if($project['shows_order']==1){
                                            echo 'First';
                                          }elseif($project['shows_order']==2){
                                            echo 'Shows Order';
                                          }elseif($project['shows_order']==0){
                                            echo 'None';
                                          }
                                    ?>
                                </td>
                                <td style="text-align: center;"><img alt="" class="img-thumbnail" id="display-image" width="50px" src="<?php echo base_url().'assets/upload/projects/'.$project['project_img'];?>" /></td>
                                


                                <td style="text-align:center">
                                            
                                            <a href="<?php echo base_url().'project/edit/'.$project['project_id'];?>"
                                               class="btn btn-sm btn-warning" title="Edit"><i class="fa fa-pencil"></i></a>

                                            <a href="<?php echo base_url().'project/delete/'.$project['project_id'];?>"
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
       