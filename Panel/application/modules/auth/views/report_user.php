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
<div class="wrapper">
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
            <th style="vertical-align: middle;">First Name</th>
            <th style="vertical-align: middle;">Last Name</th>
            <th style="vertical-align: middle;">Username</th>
            <th style="vertical-align: middle;">Email</th>
            <th style="vertical-align: middle;">Phone</th>
            <th style="vertical-align: middle;">Company</th>
            <th style="vertical-align: middle;">Status</th>
            <th style="vertical-align: middle;">Groups</th>
          </tr>
          </thead>
          <tbody>
          <?php $no=1; foreach ($users as $user):?>
          <tr>
            
            <td><?php echo $no++; ?></td>
            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->phone,ENT_QUOTES,'UTF-8');?></td>
            <td><?php echo htmlspecialchars($user->company,ENT_QUOTES,'UTF-8');?></td>
            <td>

              <?php 
                if($user->active) { 
                  echo lang('index_active_link');
                }else{
                  echo lang('index_inactive_link');
                }
              ?>
            </td>
            <td>
              <?php foreach ($user->groups as $group):?>
                <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'); ?>
                    <br />
                <?php endforeach?>
            </td>
                                            
            
            
                               
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
