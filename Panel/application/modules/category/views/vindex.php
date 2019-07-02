
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
                    <a data-toggle="modal" data-target="#modal-category" href="<?php echo base_url().'category/add/'?>"
                                               class="btn btn-sm btn-success" title="Add Category"><i class="fa fa-plus-circle"></i> Add</a>
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                   </div>
                </div><!-- /.box-suber -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped nowrap display" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="vertical-align: middle;width:50%;">Name</th>
                            <th style="vertical-align: middle;width:25%;">Chain For</th>
                            <th style="text-align:center;vertical-align: middle;width:25%;">Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          
                        </tfoot>
                        <tbody>
                            <?php foreach ($categories as $categories):?>
                            <tr>
                                
                                
                                
                                <td><?php echo $categories['category_name'];?></td>
                                <td><?php echo $categories['chain_for'];?></td>
                                
                               
                                


                                <td style="text-align:center">
                                            
                                            <a data-toggle="modal" data-target="#modal-category" href="<?php echo base_url().'category/edit/'.$categories['category_id'];?>"
                                               class="btn btn-sm btn-warning" title="Edit"><i class="fa fa-pencil"></i></a>

                                            <a href="<?php echo base_url().'category/delete/'.$categories['category_id'];?>"
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
        