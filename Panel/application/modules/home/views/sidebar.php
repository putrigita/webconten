<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
       <div class="user-panel">
        <div class="pull-left image">
          <?php if($profile[0]->photo == NULL){ ?>
            <img src="<?php echo base_url().'assets/upload/guest.png';?>" class="img-circle" alt="User Image">
          <?php }else{ ?>
            <img src="<?php echo base_url().'assets/upload/users/'.$profile[0]->photo;?>" class="img-circle" alt="User Image">
          <?php } ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $profile[0]->first_name.' <br> '.$profile[0]->last_name; ?>
            <br>
            <a href="" style="font-size:10px;"><i class="fa fa-circle text-success"></i> <?php $timeago=get_timeago($profile[0]->last_login);
                        echo $timeago;
                        ?>
          </a>
          </p>
          
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php echo  ($this->uri->segment(1) == 'home') ? 'active' : '';?>">
          <a href="<?php echo  base_url();?>home"><i class="fa fa-home"></i> <span>Home</span></a>
        </li>

        <li class="<?php echo  ($this->uri->segment(1) == 'news') ? 'active' : '';?>">
          <a href="<?php echo  base_url();?>news"><i class="fa fa-newspaper-o"></i> <span>News</span></a>
        </li>

        <li class="<?php echo  ($this->uri->segment(1) == 'article') ? 'active' : '';?>">
          <a href="<?php echo  base_url();?>article"><i class="fa fa-bookmark"></i> <span>Article</span></a>
        </li>

        

      <?php if($this->ion_auth->in_group('admin')){ ?>
        <li class="<?php echo  ($this->uri->segment(1) == 'category') ? 'active' : '';?>">
          <a href="<?php echo  base_url();?>category"><i class="fa fa-tags"></i> <span>Category</span></a>
        </li>

        
        <li class="<?php echo  ($this->uri->segment(1) == 'auth') ? 'active' : '';?>">
          <a href="<?php echo  base_url();?>auth"><i class="fa fa-users"></i> <span>Users</span></a>
        </li>

        <li class="<?php echo  ($this->uri->segment(1) == 'info') ? 'active' : '';?>">
          <a href="<?php echo  base_url();?>info"><i class="fa fa-info-circle"></i> <span>Info Settings</span></a>
        </li>
      <?php } ?>

        <li class="<?php echo  ($this->uri->segment(1) == 'profile') ? 'active' : '';?>">
          <a href="<?php echo  base_url();?>profile"><i class="fa fa-gears"></i> <span>Profile Settings</span></a>
        </li>
        
       
        
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>