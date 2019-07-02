    <!-- Main content -->
    <section class="content">
      <div class="container" id="crop-avatar">

        <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

            </div>
          </div>
        </div><!-- /.modal -->

        <!-- Loading state -->
        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
      </div>

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Account</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
            <div class="box-body box-profile">
            <?php if($profile[0]->photo == NULL){ ?>
              <img src="<?php echo base_url().'assets/upload/guest.png';?>" class="profile-user-img img-responsive img-circle" alt="User profile picture">
            <?php }else{ ?>
              <img src="<?php echo base_url().'assets/upload/users/'.$profile[0]->photo;?>" class="profile-user-img img-responsive img-circle" alt="User profile picture">
            <?php } ?>

              <h3 class="profile-username text-center"><?php echo $profile[0]->first_name.' '.$profile[0]->last_name; ?></h3>

              <p class="text-muted text-center">
                <?php foreach ($profile[0]->groups as $group):?>
                    <?php echo $group->description;?><br />
                <?php endforeach?>
              </p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right"><?php echo $profile[0]->username; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo $profile[0]->email; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Company</b> <a class="pull-right"><?php echo $profile[0]->company; ?></a>
                </li>
                <li class="list-group-item">
                  <b>Member Since</b> <a class="pull-right"><?php echo date("d M Y", $profile[0]->created_on); ?></a>
                </li>
                <li class="list-group-item">
                  <b>Last Login</b> <a class="pull-right">
                  <?php $timeago=get_timeago($profile[0]->last_login);
                        echo $timeago;
                        ?></a>
                </li>
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
              <li><a href="#username" data-toggle="tab">Username</a></li>
              <li><a href="#email" data-toggle="tab">Email</a></li>
              <li><a href="#password" data-toggle="tab">Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="profile">
                <?php if ($this->session->flashdata('message_profile')) { ?>
                      <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Success</h4>
                        <?php echo  $this->session->flashdata('message_profile'); ?>
                      </div>
                    <?php } ?>
                    <form action="<?php echo  base_url().'profile/change';?>" method="POST" enctype="multipart/form-data" accept-charset="utf-8">
                      <input type="hidden" name="image" value="<?php echo $profile[0]->photo; ?>" />
                      <div class="box-body">
                        <div class="row">

                          <div class="col-md-4">
                            <div class="form-group has-feedback <?php echo  (form_error('photo') || isset($errors['photo'])) ? 'has-error' : ''; ?>">
                              <center>
                                <img alt="" class="img-thumbnail" id="display-photo" src="<?php echo base_url().'assets/upload/users/'.$profile[0]->photo;?>"/><br/>
                              </center>
                              <p class="help-block text-center"><i>Image type, Max. 20MB</i></p>
                              <div class="fileUpload btn btn-block">
                                  <a data-toggle="modal" data-target="#avatar-modal" href="<?php echo base_url().'profile/cropper/'?>"
                                               class="btn btn-sm btn-default" title="Add Category"><i class="fa fa-image"></i> Change Avatar</a>
                              </div>
                              
                              <span style="color: red;"><?php echo  form_error('photo'); ?><?php echo  isset($errors['photo'])?$errors['photo']:''; ?></span>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group has-feedback <?php echo  (form_error('first_name') || isset($errors['first_name'])) ? 'has-error' : ''; ?>">
                              <label class="control-label"> First Name </label>
                              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Name" value="<?php echo $profile[0]->first_name; ?>" maxlength='50'>
                              <i class="fa fa-pencil form-control-feedback"></i>
                              <span style="color: red;"><?php echo  form_error('first_name'); ?><?php echo  isset($errors['first_name'])?$errors['first_name']:''; ?></span>
                            </div>

                            <div class="form-group has-feedback <?php echo  (form_error('last_name') || isset($errors['last_name'])) ? 'has-error' : ''; ?>">
                              <label class="control-label"> Last Name </label>
                              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" value="<?php echo $profile[0]->last_name; ?>" maxlength='100'>
                              <i class="fa fa-pencil form-control-feedback"></i>
                              <span style="color: red;"><?php echo  form_error('last_name'); ?><?php echo  isset($errors['last_name'])?$errors['last_name']:''; ?></span>
                            </div>
                            
                           </div>
                          <div class="col-md-4">
                            <div class="form-group has-feedback <?php echo  (form_error('phone') || isset($errors['phone'])) ? 'has-error' : ''; ?>">
                              <label class="control-label"> Phone Number </label>
                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="<?php echo $profile[0]->phone; ?>" >
                              <i class="fa fa-mobile-phone form-control-feedback"></i>
                              <span style="color: red;"><?php echo  form_error('phone'); ?><?php echo  isset($errors['phone'])?$errors['phone']:''; ?></span>
                            </div>

                            <div class="form-group has-feedback <?php echo  (form_error('company') || isset($errors['company'])) ? 'has-error' : ''; ?>">
                              <label class="control-label"> Company </label>
                              <input type="text" name="company" id="company" class="form-control" placeholder="Company" value="<?php echo $profile[0]->company; ?>" maxlength='100'>
                              <i class="fa fa-pencil form-control-feedback"></i>
                              <span style="color: red;"><?php echo  form_error('company'); ?><?php echo  isset($errors['company'])?$errors['company']:''; ?></span>
                            </div>
                          </div>

                          



                        </div><!-- /.row -->
                      </div><!-- /.box-body -->
                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
              </div>
              
              <div class="tab-pane" id="username">
                  
                    <?php $this->load->view('auth/change_username');?>
              </div>

              <div class="tab-pane" id="email">
                  
                    <?php $this->load->view('auth/change_email');?>
              </div>

              <div class="tab-pane" id="password">
                  
                    <?php $this->load->view('auth/change_password');?>
              </div>

              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    