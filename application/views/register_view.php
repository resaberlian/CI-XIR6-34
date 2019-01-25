<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/bootstrap.min.css" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="<?= base_url('assets')?>/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?= base_url('assets')?>/css/style-responsive.css" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="<?= base_url('assets')?>/css/font.css" type="text/css"/>
    <link href="<?= base_url('assets')?>/css/font-awesome.css" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <script src="<?= base_url('assets')?>/js/jquery2.0.3.min.js"></script>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
                    <div class='panel-body'>
                        <!-- validation message for a successful registration -->
                        <?php if ($this->session->flashdata('success')) {?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                          <?php  } ?>

                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>

                        <?php echo form_open('Register/registerUser') ?>
                            
                                <input type="text" class="ggg" name="username" id="username" placeholder="Username">

                                <input type="text" class="ggg" name="fname" id="fname" placeholder="Full Name">
                          
                                <input type="email" class="ggg" name="email" id="email" placeholder="Email">
                            
                                <input type="text" class="ggg" name="contact" id="contact" placeholder="Contact Number">
                           
                                <input type="text" class="ggg" name="nis" id="nis" placeholder="NIS">

                                <input type="password" class="ggg" name="password" id="password" placeholder="Password">
                            
                                <input type="password" class="ggg" name="cpassword" id="password" placeholder="Confirm Password">
                            
                                <input type="submit" value="submit" name="register">
                                <p>Already Registered.<a href="<?php echo site_url('Home/Login')?>">Login</a></p>
                            

                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="<?= base_url('assets')?>/js/bootstrap.js"></script>
    <script src="<?= base_url('assets')?>/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url('assets')?>/js/scripts.js"></script>
    <script src="<?= base_url('assets')?>/js/jquery.slimscroll.js"></script>
    <script src="<?= base_url('assets')?>/js/jquery.nicescroll.js"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="<?= base_url('assets')?>/js/jquery.scrollTo.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
