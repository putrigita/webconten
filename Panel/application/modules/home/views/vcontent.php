        
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
          <div class="row">
          <?php if($this->ion_auth->in_group('admin')){ ?>
            <div class="col-md-6">
              <div class="col-md-6">
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo count($news);?></h3>
                  <p>News</p>
                </div>
                <div class="icon">
                  <i class="fa fa-newspaper-o"></i>
                </div>
                  <a href="<?php echo  base_url(),'news';?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

             <div class="col-md-6">
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo count($article);?></h3>
                  <p>Article</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bookmark"></i>
                </div>
                  <a href="<?php echo  base_url(),'article';?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            <div class="col-md-6">
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo count($users);?></h3>
                  <p>Users</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                  <a href="<?php echo  base_url(),'auth';?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            
            </div>

            <div class="col-md-6">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Visitors</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div>
                      <!-- ./chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                      <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-gray"></i> Site</li>
                        <li><i class="fa fa-circle-o text-red"></i> News</li>
                        <li><i class="fa fa-circle-o text-yellow"></i> Article</li>
                        
                      </ul>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                      <a href="http://localhost/WebContent/Public/" target="_blank">Site
                        <span class="pull-right"> <?php $count_my_page = ("http://localhost/WebContent/Public/hitcounter.txt"); $hits = file($count_my_page);  echo $hits[0]; ?> (People)</span>
                      </a>
                    </li>
                    <li>
                      <a href="http://localhost/WebContent/Public/news" target="_blank">News
                        <span class="pull-right"> <?php echo $sumNews->visitors; ?> (People)</span>
                      </a>
                    </li><li>
                      <a href="http://localhost/WebContent/Public/article" target="_blank">Article
                        <span class="pull-right"> <?php echo $sumArticle->visitors; ?> (People)</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- /.footer -->
              </div>
              <!-- /.box -->
            </div>
            

            
          <?php }else{ ?>
            <div class="col-md-6">
              <div class="col-md-6">
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo count($news);?></h3>
                  <p>News</p>
                </div>
                <div class="icon">
                  <i class="fa fa-newspaper-o"></i>
                </div>
                  <a href="<?php echo  base_url(),'news';?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

             <div class="col-md-6">
              <div class="small-box bg-orange">
                <div class="inner">
                  <h3><?php echo count($article);?></h3>
                  <p>Article</p>
                </div>
                <div class="icon">
                  <i class="fa fa-bookmark"></i>
                </div>
                  <a href="<?php echo  base_url(),'article';?>" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>

            

            
            </div>

            <div class="col-md-6">
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">Visitors</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div>
                      <!-- ./chart-responsive -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4">
                      <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-red"></i> News</li>
                        <li><i class="fa fa-circle-o text-yellow"></i> Article</li>
                        
                      </ul>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li>
                      <a href="http://localhost/WebContent/Public/news" target="_blank">News
                        <span class="pull-right"> <?php echo $sumNews->visitors; ?> (People)</span>
                      </a>
                    </li><li>
                      <a href="http://localhost/WebContent/Public/article" target="_blank">Article
                        <span class="pull-right"> <?php echo $sumArticle->visitors; ?> (People)</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <!-- /.footer -->
              </div>
              <!-- /.box -->
            </div>
            

          <?php } ?>
          </div>

        </section>
        