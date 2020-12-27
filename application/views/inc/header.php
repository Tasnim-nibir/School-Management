<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--bootstrap css-->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css"/>

<!--font awesome css-->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/all.min.css')"/>

<!--google font-->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">

<!--custom css-->

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css"/>
	<title>School Management System</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css"/>
	<script src="<?php echo base_url()?>assets/js/jquery-3.1.0.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">
		.buttons{
			color: #2196f3;
			border: 1px solid #cabdbd;
			border-radius: 5px;
			padding: 2px 10px 2px 10px;
		}
	</style>
</head>
<body>
<!--start navigation-->

<nav class="navbar-expand-sm container-fluid bg-dark text-align p-2">
	
<!--<nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">--
  <a class="navbar-brand" href="<?=base_url()?>"></a>
  <span class="navbar-text"></span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">-->
  <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item"><a href="<?=base_url()?>home" class="nav-link">Home</a></li>
      <li class="nav-item custom-nav-item"><a href="<?=base_url()?>classes" class="nav-link">Classes</a></li>
      <li class="nav-item custom-nav-item"><a href="<?=base_url()?>event" class="nav-link">Event</a></li>
      <li class="nav-item custom-nav-item"><a href="<?=base_url()?>contact" class="nav-link">Contact</a></li>
      <li class="nav-item custom-nav-item"><a href="<?=base_url()?>about" class="nav-link">About Us</a></li>
      <li class="nav-item custom-nav-item nav-link"><?php echo anchor("admin/dashboard",'Dashboard');?></li>
       
    </ul>
    
</nav>

<!--end navigation-->

<!--<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header col-lg-10">
			  <a href="" class="navbar-brand" style="color: black;">School management System</a>
		</div>
		<div class="col-lg-2" style="margin-top: 15px;" id="bs-example-navbar-collapse-2">
			<div class="btn-group">
				<a href="#" class="btn btn-default">Settings</a>
				<a  href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></a>
					
				<ul class="dropdown">
					<?php
					    $user_id = $this->session->userdata('user_id'); 
					?>
					<?php if($user_id == '1'): ?>
					<li><?php echo anchor("admin/dashboard",'Dashboard');?></li>
					<li><?php echo anchor("admin/coadmins",'View Co Admins');?></li>
					<li><?php echo anchor("welcome/logout",'Logout');?></li>
					<?php else: ?>
					<li><?php echo anchor("welcome/logout",'Logout');?></li>
				<?php endif;?>
				</ul>
			</div>
		</div>
	</div>
</nav>-->
</body>