<div class="row"> 
              
          <div class="col-md-8">
            <div class="tim-container">
              <div class="tim-row" id="buttons-row">
                <p style="font-size:16px;color:#3c8dbc;margin-top:-80px;"><b><a href="<?php echo base_url()?>" ><?php echo $navbar_title_home; ?></a> / <a href="<?php echo base_url()?>article" ><?php echo $navbar_title_article; ?></a> </b></p>

<?php if($highlight != NULL){
            $total_rows = count($highlight);
            $per_page = 1 ;
            $num_links = $total_rows-2;
            $total_rows = $total_rows;
            $cur_page = 1;

            if(isset($_GET['page'])){
              $cur_page = $_GET['page'];
              $cur_page = ($cur_page < 1)? 1 : $cur_page;
            }
                        
                        
            $offset = ($cur_page-1)* $per_page;
                       
            $pages  = ceil($total_rows/$per_page);
                       
                        
            $start = (($cur_page - $num_links) > 0) ? ($cur_page - ($num_links - 1)) : 1;
            $end   = (($cur_page + $num_links) < $pages) ? ($cur_page + $num_links) : $pages;

            $this->db->select('*');
            $this->db->from('artikel');
            $this->db->like('article_title', $_GET['keyword'], 'both');
            $this->db->limit($per_page,$offset);
            $query = $this->db->get();
            $highlight2 = $query->result_array();
 ?>                        
          <div class="col-md-12">
                <h4><b>Search Result : <?php echo ucfirst($_GET['keyword']); ?></b></h4>
                
          </div>  <br><br><br>

          <div class="col-md-12">
              <?php foreach($highlight2 as $highlight){ ?>
                  <div class="padding padding col-xs-4">
                      <div class="news-content">
                        <a href="<?php echo base_url()?>article/category/<?php echo $highlight['article_slug']; ?>" style="text-decoration:none;">
                        <img class="img_highlight" src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/article/'.$highlight['article_img'];?>" width="100%" style="margin-left:-15px;">
                        <div class="top-hightlight"><b>&nbsp;<?php echo $highlight['category_name']; ?></b></div>
                        <div class="bottom-hightlight">
                          <h5 style="margin-left:5px;"><b><?php echo $highlight['article_title']; ?></b></h5>
                          
                            
                        </div>
                        </a>
                      </div>
                  </div>
              <?php } ?>

          </div>

      <ul class="pagination pagination-primary">
          <?php
                                      
                        if(isset($pages)){
            if ($pages > 1){
                if($cur_page > $num_links){
                    
                        echo '<li> <a href="?keyword='.$_GET['keyword'].'&page='.(1).'">'.$first.'</a></li>';
                        }
                if($cur_page >1){
                    
                        echo '<li> <a href="?keyword='.$_GET['keyword'].'&page='.($cur_page-1).'">'.$prev.'</a></li>';
                }else{
                    
                        echo '<li><a> '.$prev.' </a></li>';
                }
                for($x=$start ; $x<=$end ;$x++){
                        echo ($x == $cur_page) ? '<li class="active"><a><strong>'.$x.'</strong></a></li>':' <li><a href="?keyword='.$_GET['keyword'].'&page='.$x.'">'.$x.'</a></li>';
                }   
                
                if($cur_page <$pages){
                    
                        echo '<li><a href="?keyword='.$_GET['keyword'].'&page='.($cur_page+1).'">'.$next.'</a></li>';
                }else{
                    
                        echo '<li><a> '.$next.' </a></li>';
                }
                if($cur_page < ($pages-$num_links) ){
                    
                    echo '<li><a href="?keyword='.$_GET['keyword'].'&page='.$pages.'">'.$last.'</a></li>';
                    }
                    }
                    }
?>
     </ul>
  


          
            
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
                            <a href="<?php echo base_url()?>article/category/<?php echo $popular['article_slug']; ?>" style="text-decoration:none;color:#000;">
                              <div class="col-xs-3"><img src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/article/'.$popular['article_img'];?>" alt="Thumbnail Image" class="img-raised img-square" width="70px" height="35px"></div>
                              <div class="col-xs-8"><?php echo $popular['article_title']; ?></div>
                            </a>
                        </div>

                        <br><br><br>

                      <?php } ?>
                        
                        
            </div>
          </div>

          
<?php }else{ 

                  echo "<h4><b>".$search_result." : ".ucfirst($_GET['keyword'])."
                        <h2>".$not_found."</h2>";

                } ?>                  

</div>