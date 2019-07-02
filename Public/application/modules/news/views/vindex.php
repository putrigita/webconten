<div class="row"> 
              
          <div class="col-md-8">
            <div class="tim-container">
              <div class="tim-row" id="buttons-row">
                <p style="font-size:16px;color:#3c8dbc;margin-top:-80px;"><b><a href="<?php echo base_url()?>" ><?php echo $navbar_title_home; ?></a> / <a href="<?php echo base_url()?>news" ><?php echo $navbar_title_news; ?></a> </b></p>

<?php if($headline[0] != NULL){ ?>                        
                <div class="news-content">
                      <a href="<?php echo base_url()?>news/category/<?php echo $headline[0]['news_slug']; ?>" style="text-decoration:none;">
                        <img src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/news/'.$headline[0]['news_img'];?>" alt="Thumbnail Image" class="img-raised img-square" width="100%">
                        <div class="top-headline"><b><?php echo $headline_tags; ?></b></div>
                        <div class="bottom-headline">
                          <h3 style="margin-left:15px;"><?php echo $headline[0]['news_title']; ?></h3>
                          <p style="color:#222;margin-left:15px;margin-top:-5px;"><?php echo date("d F Y, H:i:s",$headline[0]['created_on']); ?></p>
                        </div>

                   
                     </a>

                   
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div>
              <h4 style="margin-top:-10px;"><b><?php echo $popular_post; ?></b></h4>
                      <hr size="10" class="hr1">
                      <hr style="border-color:#3c8dbc;margin-top:-20px;width:100%;margin-left:0px;">
                      
                      <?php foreach($popular as $popular){ ?>
                        <div>
                            <a href="<?php echo base_url()?>news/category/<?php echo $popular['news_slug']; ?>" style="text-decoration:none;color:#000;">
                              <div class="col-xs-3"><img src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/news/'.$popular['news_img'];?>" alt="Thumbnail Image" class="img-raised img-square" width="70px" height="35px"></div>
                              <div class="col-xs-8"><?php echo $popular['news_title']; ?></div>
                            </a>
                        </div>

                        <br><br><br>

                      <?php } ?>
                        
                        
            </div>
          </div>

          <div class="col-md-8">
                <h4><b><?php echo $highlight_tags; ?></b></h4>
                <hr size="10" class="hr">
                    <hr style="border-color:#3c8dbc;margin-top:-20px;width:100%;margin-left:-1px;">
                    
          </div>  

          <div class="col-md-8">
              <?php foreach($highlight as $highlight){ ?>
                  <div class="padding padding col-xs-4">
                      <div class="news-content">
                        <a href="<?php echo base_url()?>news/category/<?php echo $highlight['news_slug']; ?>" style="text-decoration:none;">
                        <img class="img_highlight" src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/news/'.$highlight['news_img'];?>" width="100%" style="margin-left:-15px;">
                        <div class="top-hightlight"><b>&nbsp;<?php echo $highlight['category_name']; ?></b></div>
                        <div class="bottom-hightlight">
                          <h5 style="margin-left:5px;"><b><?php echo $highlight['news_title']; ?></b></h5>
                          
                            
                        </div>
                        </a>
                      </div>
                  </div>
              <?php } ?>

          </div>
<?php }else{ 

                  echo "<h2>".$no_post_yet."</h2>";

                } ?>                  

</div>