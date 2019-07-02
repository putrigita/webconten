
        <!-- Main content -->
        <section class="content">

              

              <div class="modal fade" id="modal-group">                
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
                  <h3 class="box-title"><i class="fa fa-list"></i> Groups</h3>
                   <div class="box-tools pull-right">

                      <a class="btn btn-success btn-sm" href="<?php echo base_url().'auth/create_group/';?>" data-toggle="modal" data-target="#modal-group" ><i class="fa fa-plus-circle bigger-120 green"></i> Groups</a></li>

                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                   </div>
                </div><!-- /.box-suber -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped nowrap display" cellspacing="0">
                        <thead>
                          <tr>
                            <th style="vertical-align: middle;">Name</th>
                            <th style="vertical-align: middle;">Description</th>
                            <th style="text-align:center;vertical-align:middle;">Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          
                        </tfoot>
                        <tbody>
                            <?php foreach ($groups as $groups):?>
                            <tr>
                                
                                
                                <td><?php echo $groups['name'];?></td>
                                <td><?php echo $groups['description'];?></td>


                                <td style="text-align:center">
                                            
                                            <a data-toggle="modal" data-target="#modal-group" href="<?php echo base_url().'auth/edit_group/'.$groups['id'];?>"
                                               class="btn btn-sm btn-warning" title="Edit"><i class="fa fa-pencil"></i></a>
                                            
                                        
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
       