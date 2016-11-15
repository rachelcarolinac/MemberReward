<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(isset($this->session->userdata['data_pengguna'])){
	$id_pengguna = $this->session->userdata['data_pengguna']['id_pengguna'];
	$level_pengguna = $this->session->userdata['data_pengguna']['level_pengguna'];
}else{
	redirect(site_url('Login'));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>AISINDO</title>

	<link href="<?php echo base_url('assets/plugin/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugin/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugin/sb-admin-2/css/sb-admin-2.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugin/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
	<script src="<?php echo base_url('assets/plugin/jquery/jquery.min.js'); ?>"></script>

</head>

<body>

	<div id="wrapper">

		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo site_url('Peserta/Dashboard') ?>">AISINDO</a>
			</div>

			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
						</li>
						<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
						</li>
						<li class="divider"></li>
						<li><a href="<?php echo site_url('Logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
						</li>
					</ul>
				</li>
			</ul>

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li class="sidebar-search">
							<div class="input-group custom-search-form">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</li>
						<li>
							<a href="<?php echo ($level_pengguna==1?site_url('Admin/Dashboard'):site_url('Peserta/Dashboard')); ?>"><i class="fa fa-dashboard fa-fw"></i>&nbsp;Dashboard</a>
						</li>
						<?php if($level_pengguna==1): ?>
							<li>
							<a href="<?php echo site_url('Admin/Keaktifan/Daftar'); ?>"><i class="fa fa-trophy fa-fw"></i>&nbsp;Keaktifan</a>
							</li>
						<?php elseif($level_pengguna==2): ?>
							<li>
								<a href="#"><i class="fa fa-trophy fa-fw"></i>&nbsp;Keaktifan<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="<?php echo site_url('Peserta/Keaktifan/Daftar'); ?>">Daftar Keaktifan</a>
									</li>
									<li>
										<a href="<?php echo site_url('Peserta/Keaktifan/Tambah'); ?>">Tambah Keaktifan</a>
									</li>
								</ul>
							</li>
						<?php endif; ?>
					</ul>
				</div>
			</div>
		</nav>