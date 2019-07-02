<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">MRR</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg" style="text-align:left;"><b>Web</b> Panel <span class="pull-right hidden-lg" style="font-size:10px;">Page rendered in <strong>{elapsed_time}</strong> seconds.</span></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php if($profile[0]->photo == NULL){ ?>
                <img src="<?php echo base_url().'assets/upload/guest.png';?>" class="user-image" alt="User Image">
              <?php }else{ ?>
                <img src="<?php echo base_url().'assets/upload/users/'.$profile[0]->photo;?>" class="user-image" alt="User Image">
              <?php } ?>
              <span class="hidden-xs"><?php echo $profile[0]->first_name.' '.$profile[0]->last_name; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php if($profile[0]->photo == NULL){ ?>
                  <img src="<?php echo base_url().'assets/upload/guest.png';?>" class="img-circle" alt="User Image">
                <?php }else{ ?>
                  <img src="<?php echo base_url().'assets/upload/users/'.$profile[0]->photo;?>" class="img-circle" alt="User Image">
                <?php } ?>
              

                <p>
                  <?php echo $profile[0]->company; ?>
                  <small>Member since <?php echo date("M. Y", $profile[0]->created_on); ?> </small>
                  
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo  base_url().'profile';?>" class="btn btn-default btn-flat">Profile <i class="fa fa-user"></i></a>
                </div>
                <div class="pull-right">
                  <!-- <a href="<?php echo  base_url().'auth/logout';?>" onclick="return confirm('Are You Sure?')" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a> -->
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-sign-out"></i> Sign out
                  </button>


                </div>
              </li>
            </ul>
          </li>
          
       
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>