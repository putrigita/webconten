
        <!-- Main content -->
        <section class="content">

              <div class="modal modal-default fade" id="modal-user">
                <div class="modal-dialog">
                  <div class="modal-content">
                    
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>

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
                  <h3 class="box-title"><i class="fa fa-list"></i> <?php echo lang('index_heading');?></h3>
                   <div class="box-tools pull-right">

                    <ul class="btn btn-success btn-sm" >
                      <li class="nav dropdown">
                        <button style="color:#fff;padding:0px;border-color:#00a65a;" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-user bigger-120 green"></i> User <span class="caret"></span></button>
                        <ul class="dropdown-menu" >
                          <li><a href="<?php echo base_url().'auth/create_user/';?>" ><i class="fa fa-plus-circle bigger-120 green"></i> Add New Users</a></li>
                          <li><a href="<?php echo base_url().'auth/reportpdf_user/';?>" target="_blank"><i class="fa fa-file-pdf-o bigger-120 green"></i> Download Pdf</a></li>
                          <li><a href="<?php echo base_url().'auth/report_user/';?>" target="_blank"><i class="fa fa-print bigger-120 green"></i> Print</a></li>
                        </ul>
                      </li>
                    </ul>

                    <ul class="btn btn-success btn-sm" >
                      <li class="nav dropdown">
                        <button style="color:#fff;padding:0px;border-color:#00a65a;" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-users bigger-120 green"></i> Groups <span class="caret"></span></button>
                        <ul class="dropdown-menu" >
                          <li><a href="<?php echo base_url().'auth/create_group/';?>" data-toggle="modal" data-target="#modal-group" ><i class="fa fa-plus-circle bigger-120 green"></i> Add New Groups</a></li>
                          <li><a href="<?php echo base_url().'auth/group_list/';?>" ><i class="fa fa-list bigger-120 green"></i> Group List</a></li>
                          
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
                            <th style="vertical-align: middle;"><?php echo lang('index_fname_th');?></th>
                            <th style="vertical-align: middle;"><?php echo lang('index_lname_th');?></th>
                            <th style="vertical-align: middle;"><?php echo lang('index_email_th');?></th>
                            <th style="vertical-align: middle;"><?php echo lang('index_status_th');?></th> 
                            <th style="vertical-align: middle;"><?php echo lang('index_groups_th');?></th>
                            <th style="text-align:center;vertical-align:middle;"><?php echo lang('index_action_th');?></th>
                          </tr>
                        </thead>
                        <tfoot>
                          
                        </tfoot>
                        <tbody>
                            <?php foreach ($users as $user):?>
                            <tr>
                                
                                
                                <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                                <td>

                                    <?php if($user->active) { ?>
                                      <a data-toggle="modal" data-target="#modal-user" href="<?php echo base_url().'auth/deactivate/'.$user->id;?>">
                                        <?php echo lang('index_active_link'); ?>
                                      </a>
                                    <?php 
                                        }else{
                                           echo anchor("auth/activate/". $user->id, lang('index_inactive_link'));
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php foreach ($user->groups as $group):?>
                                      <a data-toggle="modal" data-target="#modal-group" href="<?php echo base_url().'auth/edit_group/'.$group->id;?>">
                                        <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'); ?>
                                      </a>
                                        <br />
                                    <?php endforeach?>
                                </td>
                                
                                


                                <td style="text-align:center">
                                            
                                            <a href="<?php echo base_url().'auth/edit_user/'.$user->id;?>"
                                               class="btn btn-sm btn-warning" title="Edit">Edit Information</a>
                                            
                                        
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
       