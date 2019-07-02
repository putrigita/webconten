<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" href="<?php echo base_url();?>assets/dist/img/unnamed.png">

  <title>MRR | Report <?php echo ucfirst($this->uri->segment(1)); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();window.close();">
<div class="">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> MRR, Inc.
          <small class="pull-right">Date: <?php echo date('d F Y'); ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-2 invoice-col">
        
        <address>
          <?php echo substr($info[4]['info_content'],0,19); ?><br>
          <?php echo substr($info[4]['info_content'],19,28); ?><br>
          <?php echo $info[5]['info_content']; ?><br>
          <?php echo $info[3]['info_content']; ?><br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        
        <address>
          
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
      <b><?php echo ucfirst($this->uri->segment(1)); ?> Data Report</b><br>
        <table class="table table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th style="vertical-align: middle;">News Title</th>
            <th style="vertical-align: middle;">News Content</th>
            <th style="vertical-align: middle;">Created On</th>
            <th style="vertical-align: middle;">Updated On</th>
            <th style="vertical-align: middle;">Visitors</th>
            <th style="vertical-align: middle;">Author</th>
          </tr>
          </thead>
          <tbody>
          <?php $no=1; foreach ($news as $news):?>
          <tr>
            
            <td><?php echo $no++; ?></td> 
            <td><?php echo $news['news_title'];?></td>
            <td><?php echo substr($news['news_content'],3,200);?> ...</td>
            <td><?php echo date("d F Y H:i:s",$news['created_on']);?></td>
            <td><?php echo date("d F Y H:i:s",$news['updated_on']);?></td>
            <td><?php echo $news['visitors'];?></td>
            <td><?php echo $news['first_name'].' '.$news['last_name'];?></td>
                               
          </tr>

          <?php endforeach ?> 
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
</body>
</html>
