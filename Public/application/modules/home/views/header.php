
<?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''){ ?>

    <div class="header" style="background-image: url('assets/img/city2.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="brand">
            <h3 ><?php echo '"'.$header_quotes.'"'; ?></h3>
          </div>
        </div>
      </div>

    </div>
  </div>

<?php }elseif($this->uri->segment(1) == 'about'){ ?>
	<div class="header" style="background-image: url('assets/img/examples/city.jpg');"></div>
<?php }else{
	echo'<div class="header" style="margin-top:-250px;"></div>';
}

?>