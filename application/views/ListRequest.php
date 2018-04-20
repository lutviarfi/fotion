<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8"/>
<title>List Request</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="<?php blink('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')?>" rel="stylesheet" type="text/css">
<link href="<?php blink('assets/global/plugins/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css">
<link href="<?php blink('assets/global/plugins/uniform/css/uniform.default.css')?>" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME STYLES -->
<link href="<?php blink('assets/global/css/components-rounded.css')?>" id="style_components" rel="stylesheet" type="text/css">
<link href="<?php blink('assets/global/css/plugins.css')?>" rel="stylesheet" type="text/css">
<link href="<?php blink('assets/admin/layout3/css/layout.css')?>" rel="stylesheet" type="text/css">
<link href="<?php blink('assets/admin/layout3/css/themes/default.css')?>" rel="stylesheet" type="text/css" id="style_color">
<link href="<?php blink('assets/admin/layout3/css/custom.css')?>" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<body>

<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="index.html"><img src="<?php blink('assets/admin/layout3/img/logo-default.png')?>" alt="logo" class="logo-default"></a>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>

							<li>
								<a href="<?php blink('Login/logout')?>">
								<i class="icon-key"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?php blink('CRUD')?>">Data Request List</a>
					</li>
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN SAMPLE FORM PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">List Request</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body form">
                        <?php if(isset($result)) { ?><center><?php echo $result; ?></center> <?php } ?>

							<form role="form">
										<div class="portlet-body">
												<div class="table-scrollable">
													<table class="table table-hover">
														<thead>
                                                        	<tr>
                                                            	<td align="center">#</td>
                                                                <td align="center">Nama Makanan</td>
                                                                <td align="center">Nama Restoran</td>
                                                                <td align="center">Halal atau TIdak</td>
                                                                <td align="center">Status</td>
                                                             </tr>
                                                         </thead>
                                                         <?php if(isset($datauser)){?>
                                                         <tbody>
                                                         	 <?php $x = 1; ?>
                                                         	 <?php foreach($datauser as $data){ ?>
                                                             <tr>
                                                                <td align="center"><?php echo $x;?></td>
                                                                <td align="center"><?php echo $data->nama_makanan;?></td>
                                                                <td align="center"><?php echo $data->username;?></td>
                                                                <td align="center"><?php echo $data->halal;?></td>
                                                                <td align="center"><?php echo $data->status;?></td>
                                                             </tr>
                                                             <?php $x = $x+1; ?>
                                                             <?php } ?>
                                                         </tbody>
                                                         <?php }else { ?>
                                                         <tbody>
                                                         	<tr>
                                                            	<td>No data </td>
                                                            </tr>
                                                         </tbody>
                                                         <?php } ?>
                               					     </table>
												</div>
								          </div>
							</form>
						</div>
					</div>
					<!-- END SAMPLE FORM PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- START PRE-FOOTER -->
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="container">
		 2018 &copy; Fotion<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
	</div>
</div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="<?php blink('assets/global/plugins/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/jquery-migrate.min.js')?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php blink('assets/global/plugins/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/jquery.cokie.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/uniform/jquery.uniform.min.js')?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="<?php blink('assets/global/scripts/metronic.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/admin/layout3/scripts/layout.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/admin/layout3/scripts/demo.js')?>" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
