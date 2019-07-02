<div class="row">
					

					<div class="col-md-8">
	                	<div class="tim-container">
	                		<div class="tim-row" id="buttons-row">
	                			<p style="font-size:16px;color:#3c8dbc;margin-top:-80px;"><b><a href="<?php echo base_url()?>" ><?php echo $navbar_title_home; ?></a> / <a href="<?php base_url() ?>/article" ><?php echo $navbar_title_article; ?> </a>/ <a href="<?php echo base_url()?>article/categories/<?php echo $article_detail[0]['category_id']; ?>" ><?php echo $article_detail[0]['category_name']; ?></a> </b></p>
				                <h2><?php echo $article_detail[0]['article_title']; ?></h2>
				                <p style="font-size:14px;color:#000;"><b><?php echo $article_detail[0]['first_name'].' '.$article_detail[0]['last_name'];?></b></p>
				                <p style="font-size:12px;color:#666;"><?php echo date("d F Y, H:i:s",$article_detail[0]['created_on']); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" style="color:#666" title="Dilihat"><i class="fa fa-eye"> <?php echo $article_detail[0]['visitors']; ?></i></a></p>
				                <img src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/article/'.$article_detail[0]['article_img'];?>" alt="Thumbnail Image" class="img-raised img-square" width="80%">
				                <br><br>
				                <p style="font-size:16px;text-align:justify;">
				                    <?php echo $article_detail[0]['article_content']; ?>
				                </p>
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

				</div>