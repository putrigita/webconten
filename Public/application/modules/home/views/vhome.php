<!doctype html>
<html lang="en">
<head>
  <?php echo  $css; ?>

</head>

<body <?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''){ echo'class="index-page"'; }elseif($this->uri->segment(1) == 'about'){ echo'class="profile-page"'; }else{ echo'class="components-page"'; } ?>>

<?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'about'){ echo'<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">'; }else{ echo'<nav class="navbar navbar-fixed-top">'; } ?>

  <?php echo  $navbar; ?>
</nav>

<div class="wrapper">
  <?php echo $header; ?>

  <div class="main main-raised">

    <?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'about'){ echo''; }else{ echo'<div class="section">'; } ?>
    
    <div class="container">
      <?php echo  $content; ?>

      <hr  style="margin-top: 30px;">
      
      <?php echo  $contact_me; ?>      
    </div>
    
    <?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'about'){ echo''; }else{ echo'</div>'; } ?>
    
    <a id="tombolScrollTop" onclick="scrolltotop()"><img style="margin-left:4px;margin-top:2px;" width="25px" src="<?php echo base_url(); ?>assets/img/back-to-top-arrow-white.png"></a>
  </div>


</div>

<?php echo  $footer; ?>


</body>
  <?php echo  $js; ?>

  
</html>
