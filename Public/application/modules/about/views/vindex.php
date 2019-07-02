<div class="row">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img src="<?php echo 'http://localhost/WebContent/Panel/assets/upload/users/'.$about[0]['photo'];?>" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title"><?php echo $info[0]['info_content']; ?></h3>
								<h6><?php echo $info[1]['info_content']; ?></h6>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p align="justify"><?php echo $about_quote; ?></p>
	                </div>

	                <hr  style="margin-top: 30px;">

	                <div class="col-sm-12 col-md-6 text-center hidden-xs">
						<img style="width:80%" src="<?php echo base_url(); ?>assets/img/about.jpg" class="img-responsive">
					</div>
					<div class="col-sm-12 col-md-6">
						<br><br>
						<div style="margin-bottom: 20px;" class="" >
							<b><?php echo $full_name; ?></b><br>
							<?php echo $info[0]['info_content']; ?>
						</div>
						
						<div style="margin-bottom: 20px;" class="" >
							<b><?php echo $date_of_birth; ?></b><br>
							Bogor, 27 Desember 1998
						</div>
						
						<div style="margin-bottom: 20px;" class="" >
							<b><?php echo $address; ?></b><br>
							<?php echo $info[2]['info_content']; ?>
						</div>
						
						<div class="row">
							<div class="col-xs-12 col-sm-4 " >
								<b><?php echo $gender; ?></b><br>
								<?php echo $male; ?>
							</div>
							<div class="col-xs-12 col-sm-4 " >
								<div style="margin-top: 20px;" class="visible-xs"></div>
								<b><?php echo $nationality; ?></b><br>
								Indonesia
							</div>
						</div>
						
						<div class="row" style="margin-top: 20px;">
							<div class="col-xs-12 col-sm-4 " >
								<b><?php echo $religion; ?></b><br>
								Islam
							</div>
							<div class="col-xs-12 col-sm-4 " >
								<div style="margin-top: 20px;" class="visible-xs"></div>
								<b>Status</b><br>
								<?php echo $single; ?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
										<li class="active">
											<a href="#education" role="tab" data-toggle="tab">
												<i class="fa fa-graduation-cap"></i><?php echo $education; ?>
											</a>
										</li>
										<li>
											<a href="#skill" role="tab" data-toggle="tab">
												<i class="fa fa-tasks"></i><?php echo $skill; ?>
											</a>
										</li>
										
										<li>
				                            <a href="#work" role="tab" data-toggle="tab">
												<i class="fa fa-suitcase"></i>
												<?php echo $experience; ?>
				                            </a>
				                        </li>
				                        <li>
				                            <a href="#portfolio" role="tab" data-toggle="tab">
												<i class="fa fa-code"></i>
												<?php echo $portfolio; ?>
				                            </a>
				                        </li>
				                         
				                    </ul>

				                    <div class="tab-content gallery">
										<div class="tab-pane active" id="education">
				                            <div class="row">
												<div class="col-md-12">
													<?php $this->load->view('about/education'); ?>
												</div>
				                            </div>
				                        </div>
				                        <div class="tab-pane text-center" id="skill">
				                            <div class="row">
												<div class="col-md-12">
													<?php $this->load->view('about/skill'); ?>
												</div>
				                            </div>
				                        </div>
				                        <div class="tab-pane text-center" id="work">
											<div class="row">
												<div class="col-md-12">
												<h4><?php echo $this_is_my; ?></h4>
													<?php $this->load->view('about/experience'); ?>
												</div>
												
											</div>
				                        </div>
										<div class="tab-pane text-center" id="portfolio">

											<div class="row">
												<div class="col-md-6 col-md-offset-3">
													<h4><?php echo $this_is_my2; ?></h4>
													

													<br><br>
													<?php $this->load->view('about/project-slider'); ?>
												</div>
											
											</div>
				                        </div>
				                       


				                    </div>
								</div>
							</div>
							<!-- End Profile Tabs -->
						</div>
	                </div>