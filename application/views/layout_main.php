<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Outreach Admin | Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assests/css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assests/css/responsive.css" >
	<link href="<?php echo base_url();?>assests/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/css/animatecss/animate.min.css" />
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- TODO -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/js/jquery-todo/css/styles.css" />
	<!-- FULL CALENDAR -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/js/fullcalendar/fullcalendar.min.css" />
	<!-- GRITTER -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assests/js/gritter/css/jquery.gritter.css" />
	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
		<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="<?php echo base_url();?>assests/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="<?php echo base_url();?>assests/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?php echo base_url();?>assests/bootstrap-dist/js/bootstrap.min.js"></script>
	
		
	<!-- DATE RANGE PICKER -->
	<script src="<?php echo base_url();?>assests/js/bootstrap-daterangepicker/moment.min.js"></script>
	
	<script src="<?php echo base_url();?>assests/js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
	<!-- SLIMSCROLL -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	
	<!-- BLOCK UI -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
	
	
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/select2/select2.min.js"></script>
	<!-- SPARKLINES -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/sparklines/jquery.sparkline.min.js"></script>
	<!-- EASY PIE CHART -->
	<script src="<?php echo base_url();?>assests/js/jquery-easing/jquery.easing.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/easypiechart/jquery.easypiechart.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jquery-todo/js/paddystodolist.js"></script>
	<!-- TIMEAGO -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/timeago/jquery.timeago.min.js"></script>
	<!-- FULL CALENDAR -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/fullcalendar/fullcalendar.min.js"></script>
	<!-- COOKIE -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/jQuery-Cookie/jquery.cookie.min.js"></script>
	<!-- GRITTER -->
	<script type="text/javascript" src="<?php echo base_url();?>assests/js/gritter/js/jquery.gritter.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="<?php echo base_url();?>assests/js/script.js"></script>
	<script src="<?php echo base_url();?>assests/js/charts.js"></script>
		<script src="<?php echo base_url();?>assests/js/jquery-validate/jquery.validate.min.js"></script>
<style>
	.error{
	//border: 1px solid red;
	color : red;
	}
	.navbar {
    background: none repeat scroll 0 0 #fff;
    border-bottom: 1px solid#FFB400;
}
.navbar .dropdown-toggle .username {
    font-weight: 600;
    color: #000;
}
.metro-nav .metro-nav-block .status, .metro-nav .metro-nav-block .tile-status {
    background-color: transparent;
    bottom: -10px;
    font-size: 13px;
    left: 10px;
    min-height: 30px!important;
    position: absolute;
}
	</style>
	</head>
<body>
	<!-- HEADER -->
	<header class="navbar clearfix" id="header">
		<div class="container"style="
    height: 76px;
">
				<div class="navbar-brand">
					<!-- COMPANY LOGO -->
					<a href="<?php echo base_url('admin/home/dashboard');?>">
						<img src="<?php echo base_url();?>site/img/logo.png" alt="Cloud Admin Logo" class="img-responsive" height="66px" width="120"style="
    height: 66px;
">
					</a>
					
				</div>
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav navbar-nav pull-right">
					
					<li class="dropdown user" style="float:right" id="header-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<?php $adminDetails = $this->session->userdata('adminDetails');
							//echo "<pre>";print_r($permissions);exit;
							?>
							
							<?php if($adminDetails['image'] != "") { ?>
							<img alt="" src="<?php echo base_url();?>images/admin_images/<?php echo $adminDetails['image'];?>" />
							<?php } else { ?>
							<img alt="" src="<?php echo base_url();?>assests/img/avatars/avatar3.jpg" />
							<?php } ?>
							<span class="username"><?php echo ucfirst($adminDetails['first_name'])." ".ucfirst($adminDetails['last_name']); ?> </span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo site_url('admin/home/profile');?>"><i class="fa fa-user"></i> My Profile</a></li>
							<li><a href="<?php echo site_url('admin/home/changePassword');?>"><i class="fa fa-cog"></i> Account Settings</a></li>
							<li><a href="<?php echo site_url('admin/home/logout');?>"><i class="fa fa-power-off"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->
		</div>
	</header>
	<section id="page">
<!-- SIDEBAR -->
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
						<ul>
							<li class="<?php if($menu && $menu == "dashboard"){ echo "active";} ?>">
								<a href="<?php echo site_url('admin/home/dashboard');?>">
								<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">Dashboard</span>
								<span class="selected"></span>
								</a>		 			
							</li>
						
					
					<li class="">
								<a class="" href="<?php echo site_url('admin/home/coordinator');?>">
							<i class="fa fa-users"></i> 	<span class="menu-text">Add Outreach Coordinator</span>
								<span class="selected"></span>
								</a>					
							</li>
				
									
					
					
					
					
					<li class="has-sub">
								<a href="javascript:;">
								<i class="fa fa-users"></i>  <span class="menu-text">Documents</span>
								</a>	
								<ul class="sub">
									<li><a class="" href="<?php echo site_url('admin/guidance_metirial');?>"><span class="sub-menu-text">Add Guidance & Material</span></a></li>
									
									<li><a class="" href="<?php echo site_url('admin/workshop_material');?>"><span class="sub-menu-text">Add Workshop Material</span></a></li>
									
									<li><a class="" href="<?php echo site_url('admin/presentation_reporting');?>"><span class="sub-menu-text">Add Presentation & Reporting</span></a></li>
								</ul>	
							</li>
															
					
					
						
							
							<li class="">
								<a href="<?php echo site_url('admin/cms');?>">
								<i class="fa fa-bell"></i> <span class="menu-text">Cms</span>
								<span class="selected"></span>
								</a>					
							</li>
							
							
							
							<li class="has-sub <?php if($menu && $menu == "branch"){ echo "active";} ?>">
								<a href="javascript:;">
								<i class="fa fa-cog"></i> <span class="menu-text">Settings</span>
								
								</a>	
								<ul class="sub">
									
									<li><a class="" href="<?php echo site_url('admin/contacts');?>"><span class="sub-menu-text">Contact Us </span></a></li>
									
								</ul>								
							</li>
							
						</ul>
						<!-- /SIDEBAR MENU -->
					</div>
				</div>
				<!-- /SIDEBAR -->
   <?php echo $content_for_layout; ?>
<!--/PAGE -->
	<script>
		jQuery(document).ready(function() {		
			App.setPage("flot_charts");  //Set current page
			App.init(); //Initialise plugins and elements
			Charts.initCharts();
			Charts.initPieCharts();
		});
	</script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("index");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	
	
	<!-- /JAVASCRIPTS -->
</body>
</html>  