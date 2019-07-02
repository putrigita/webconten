<!-- Carousel Card -->
						<div class="card-carousel">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
								<div class="carousel slide" data-ride="carousel">

									
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/projects/'.$project1[0]['project_img'];?>" alt="Awesome Image">
											<h4 class="title" style="margin-bottom: 0;"><?php echo $project1[0]['project_nama'];?></h4>
											<p><?php echo $project1[0]['project_deskripsi'];?></p>
				
											<div class="text-muted">
												<small>
													Developed in <?php echo $project1[0]['developed_in'];?>					</small>
											</div>
											
										</div>
										<?php foreach ($project as $project):?>
										<div class="item">
										<?php if($project['project_url_public']!='http://-'){ ?>
											<a style="text-decoration:none;color:#000;" target="_blank" href="<?php echo $project['project_url_public'];?>" >
										<?php } ?>
											<img src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/projects/'.$project['project_img'];?>" alt="Awesome Image">
											<h4 class="title" style="margin-bottom: 0;"><?php echo $project['project_nama'];?></h4>
											<p><?php echo $project['project_deskripsi'];?></p>
				
											<div class="text-muted">
												<small>
													Developed in <?php echo $project['developed_in'];?>					</small>
											</div>
										<?php if($project['project_url_public']!='http://-'){ ?>
											</a>
										<?php } ?>
											
										</div>
									<?php endforeach ?>
									</div>

									
								</div>
							</div>
							<a class="btn btn-sm btn-primary" href="#carousel-example-generic" data-slide="prev">
								<i class="fa fa-chevron-circle-left"></i> PREV
							</a>
							<a class="btn btn-sm btn-primary" href="#carousel-example-generic" data-slide="next">
								NEXT <i class="fa fa-chevron-circle-right"></i>
							</a>
						</div>
						<!-- End Carousel Card -->