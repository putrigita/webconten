<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/img/unnamed.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/logo.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Site : Web Content</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

  <!--     Fonts and icons     -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> -->

  <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- CSS Files -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/material-kit.css" rel="stylesheet"/>

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />

  <link href="<?php echo base_url();?>assets/css/agency.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?php echo base_url();?>assets/pace/pace.min.css">

  <style type="text/css">
    a {
      text-decoration:none;
      color:#3c8dbc;
    }
    .no_style{
       text-decoration:none;
        color:#000;
    }
    #tombolScrollTop
    {
      cursor: pointer;
      position:fixed;
      left:94%;
      bottom:20px;
      border:3px solid #fff;
      background:#3c8dbc;
      color:#585858;
      border-radius:30px;
      height:40px;
      width:40px;
      font-size:15px;
      display:none;
      text-decoration: none;
    }

     @media only screen and (max-width: 500px) {
       #tombolScrollTop
      {
        cursor: pointer;
        position:fixed;
        left:85%;
        bottom:50px;
        border:3px solid #fff;
        background:#3c8dbc;
        color:#585858;
        border-radius:30px;
        height:40px;
        width:40px;
        font-size:15px;
        display:none;
        text-decoration: none;
      }
    }
    /* Container holding the image and the text */
    .news-content {
        position: relative;
        text-align: left;
        
    }

    /* Top left text */
    .top-headline {
        position: absolute;
        top: 20px;
        left: 0px;
        text-align: center;
        font-size: 18px;
        background:  #fff;
        color:#3c8dbc;
        width: 85px;
        height: 23px;

    }

    /* Bottom left text */
    .bottom-headline {
        position: absolute;
        bottom: 0px;
        left: 0px;
        background:  rgba(153,153,153, 0.50);
        color:#fff;
        width: 100%;
        height: 23%;
    }
    
    @media only screen and (max-width: 500px) {
        
      .top-headline {
          position: absolute;
          top: 20px;
          left: 0px;
          text-align: center;
          font-size: 12px;
          background:  #fff;
          color:#3c8dbc;
          width: 55px;
          height: 20px;

      }
  
      .bottom-headline {
          position: absolute;
          bottom: 0px;
          left: 0px;
          background:  rgba(153,153,153, 0.50);
          color:#fff;
          width: 100%;
          height: 43%;
          font-size: 10px;
      }

      h3{
        font-size: 16px;
      }

      
    
    }

    .img_highlight{
      height: 100px;
    }
    /* Top left text */
    .top-hightlight {
        position: absolute;
        top: 10px;
        left: -15px;
        text-align: left;
        font-size: 10px;
        background:  rgba(153,153,153, 0.50);
        color:#fff;
        width: 60px;
        height: 20px;

    }
    

    /* Bottom left text */
    .bottom-hightlight {
        position: absolute;
        bottom: -40px;
        left: 0px;
        background:  #fff;
        color:#000;
        width: 85%;
        height: 85%;
        font-size: 10px;
    }

    @media only screen and (max-width: 500px) {
      /* Top left text */
      .top-hightlight {
          position: absolute;
          top: 0px;
          left: -15px;
          text-align: left;
          font-size: 6px;
          background:  rgba(153,153,153, 0.50);
          color:#fff;
          width: 40px;
          height: 15px;
      }
      

      /* Bottom left text */
      .bottom-hightlight {
          position: absolute;
          bottom: -10px;
          left: -10px;
          background:  #fff;
          color:#000;
          width: 85%;
          height: 85%;
          font-size: 6px;
      }

      h5{
        font-size: 6px;
      }

      .img_highlight{
        height:50px;
      }

    }
    
    .hr{
      background-color:#3c8dbc;
      margin-top:-10px;
      height: 8px;
      width:120px;
      margin-left:-1px;
    }

    .hr1{
      background-color:#3c8dbc;
      margin-top:-10px;
      height: 8px;
      width:150px;
      margin-left:0px;
    }

    .padding{
      padding-bottom: 50px;
    }
    

    
  </style>