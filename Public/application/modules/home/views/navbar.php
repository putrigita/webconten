<!-- Navbar -->

  <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="<?php echo base_url()?>">
            <div class="logo-container">
                  <div class="logo">
                      <img src="<?php echo base_url()?>assets/img/logo.png" alt="MRR" >
                  </div>
                 
                    <div style="margin-left:3px;margin-top:-5px;">
                      <a href="<?php echo '?lang=en'; ?>" rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'style="color:#808080;" title="You are in English Language"';}else{echo'style="color:#ffffff;" title="Ubah ke dalam bahasa Inggris"';} ?> data-placement="bottom" data-html="true"><b>EN</b></a> / 
                      <a href="<?php echo '?lang=id'; ?>" rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'style="color:#ffffff;" title="Change To Indonesian Language"';}if(isSet($_GET['lang']) && $_GET['lang']=='id'){echo'style="color:#808080;" title="Anda sedang dalam bahasa Indonesia"';} ?> data-placement="bottom" data-html="true"><b>ID</b></a>
                    </div>
                  



        </div>
          </a>
      </div>

      <div class="collapse navbar-collapse" id="navigation-index">
        <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="<?php echo base_url()?>" >
            <?php echo $navbar_title_home;?>
          </a>
        </li>
        <!-- <li>
          <a href="<?php echo base_url()?>about" >
            <?php echo $navbar_title_about;?>
          </a>
        </li> -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php echo $navbar_title_news;?> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <?php foreach ($news_category as $news_category):?>
              <li><a href="<?php echo base_url().'news/categories/'.$news_category['category_id'];?>"><?php echo $news_category['category_name'];?></a></li>
            <?php endforeach ?>   
            <li><a href="<?php echo base_url()?>news">Show All <i class="fa fa-caret-right"></i></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php echo $navbar_title_article;?> <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <?php foreach ($article_category as $article_category):?>
              <li><a href="<?php echo base_url().'article/categories/'.$article_category['category_id'];?>"><?php echo $article_category['category_name'];?></a></li>
            <?php endforeach ?> 
            <li><a href="<?php echo base_url()?>article">Show All <i class="fa fa-caret-right"></i></a></li>
          </ul>
        </li>

  <?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'about'){ ?>
        <li>
          <a rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'title="Follow me on Twitter"';}else{echo'title="Follow saya di Twitter"';} ?> data-placement="bottom" href="https://twitter.com/<?php echo $info[7]['info_content']; ?>" target="_blank" class="btn btn-white btn-simple btn-just-icon">
            <i class="fa fa-twitter"></i>
          </a>
        </li>
         <li>
          <a rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'title="Follow me on Instagram"';}else{echo'title="Follow saya di Instagram"';} ?> data-placement="bottom" href="https://www.instagram.com/<?php echo $info[8]['info_content']; ?>" target="_blank" class="btn btn-white btn-simple btn-just-icon">
            <i class="fa fa-instagram"></i>
          </a>
        </li>
        <li>
          <a rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'title="See me on Facebook"';}else{echo'title="Lihat saya di Facebook"';} ?> data-placement="bottom" href="https://www.facebook.com/<?php echo $info[6]['info_content']; ?>" target="_blank" class="btn btn-white btn-simple btn-just-icon">
            <i class="fa fa-facebook-square"></i>
          </a>
        </li>
        <li>
          <a rel="tooltip" <?php if(!isSet($_GET['lang']) || $_GET['lang']=='en'){echo'title="See me on LinkedIn"';}else{echo'title="Lihat saya di LinkedIn"';} ?> data-placement="bottom" href="https://www.linkedin.com/in/<?php echo $info[5]['info_content']; ?>/" target="_blank" class="btn btn-white btn-simple btn-just-icon">
            <i class="fa fa-linkedin-square"></i>
          </a>
        </li>
  <?php }elseif($this->uri->segment(1) == 'news'){ ?>

        <li>
        <form class="contact-form" method="GET" action="<?php echo base_url().'news/filter';?>">
          <div class="col-md-8">
                      <div class="form-group label-floating" style="margin-top:3px;">
                        <label class="control-label"><?php echo $search.' '.$navbar_title_news.' '.$here; ?></label>
                        <input type="text" name="keyword" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group label-floating" style="margin-top:15px;">
                        <button type="submit" style="background-color:#ffffff;color:#3c8dbc;" class="btn btn-raised btn-sm">
                                      <?php echo $search; ?>
                        </button>
                      </div>
                    </div>
                  </div>
            </form>
        </li>

  <?php }elseif($this->uri->segment(1) == 'article'){ ?>
      <li>
        <form class="contact-form" method="GET" action="<?php echo base_url().'article/filter';?>">
          <div class="col-md-8">
                      <div class="form-group label-floating" style="margin-top:3px;">
                        <label class="control-label"><?php echo $search.' '.$navbar_title_article.' '.$here; ?></label>
                        <input type="text" name="keyword" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group label-floating" style="margin-top:15px;">
                        <button type="submit" style="background-color:#ffffff;color:#3c8dbc;" class="btn btn-raised btn-sm">
                                      Seacrh
                        </button>
                      </div>
                    </div>
                  </div>
            </form>
        </li>

    <?php } ?>

        </ul>
      </div>
  </div>

<!-- End Navbar -->