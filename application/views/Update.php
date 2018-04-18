<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Update</title>
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

<link href="<?php blink('assets/css/datepicker.css')?>"  rel="stylesheet">
    <script type="text/javascript" src="<?php blink('assets/js/jquery-1.10.2.min.js')?>"></script> 


<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">


			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">

					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="../../assets/admin/layout3/img/avatar9.jpg">
						<span class="username username-hide-mobile"><?php echo $nama; ?></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="<?php blink('CRUD/logout')?>">
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
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?php blink('CRUD/tampildata') ?>">Home</a>
					</li>
					<li class="menu-dropdown mega-menu-dropdown active ">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Edit Data Buku <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu" style="min-width: 710px">

						</ul>
					</li>
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
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Update<small>&nbsp Data Buku</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				
				</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTENT INNER -->

				<div class="col-md-12">
					<div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
						<div class="tab-content">
							<div class="tab-pane active" id="tab_0">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Update Data Buku
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											<a href="#portlet-config" data-toggle="modal" class="config">
											</a>
											<a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<?php
										if(isset($result)) {
											echo $result;
										}

									?>
									<div class="portlet-body form">
										<?php foreach($buku as $data){ ?>
										<form action="<?php blink('CRUD/Update/'.$data->idbuku)?>" method="post" class="form-horizontal">
											<div class="form-body">
											<div class="form-group">
													<label class="col-md-3 control-label">Judul</label>
													<div class="col-md-4">
														<input type="text" value="<?php echo $data->judul ?>" class="form-control input-circle" placeholder="Judul Buku" id="judul" name="judul">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Penulis</label>
													<div class="col-md-4">
															<input type="text" class="form-control input-circle" value="<?php echo $data->penulis ?>" name="penulis" id="penulis" placeholder="Penulis">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label">Penerbit</label>
													<div class="col-md-4">
															<input type="text" value="<?php echo $data->penerbit ?>" class="form-control input-circle" name="penerbit" id="penerbit" placeholder="Penerbit">
													</div>
												</div>

												<div class="row">
												
   											 <!-- <div class="<col-xs-4></col-xs-4> col-xs-offset-3 <col-sm-4></col-sm-4> col-sm-offset-5 col-lg-5 col-lg-offset-5"> -->
   											 <div class="form-group" >
												<label class="col-md-3 control-label">Tanggal Terbit</label>
    										    		<div class="col-md-4">	
	        								    		<div class="input-group date " data-date="" data-date-format="dd-mm-yyyy">
	                									<input class="form-control" value="<?php echo $data->tglterbit ?>" type="text" name="tglterbit">
	                									<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
           												 </div>
      												  </div>
    												</div>
    											</div>
											</div>

												<div class="form-group">
													<label class="col-md-3 control-label">Sinopsis</label>
													<div class="col-md-4">
														<textarea class="form-control" value="<?php echo $data->sinopsis ?>" rows="5" id="sinopsis" name="sinopsis"  placeholder="Sinopsis"></textarea>
													</div>
												</div>

											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-offset-3 col-md-9">
														<button type="submit" class="btn btn-circle blue">Submit</button>
														<a href="<?php blink('CRUD') ?>" type="button" class="btn btn-circle default">Cancel</a>
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
			</div>
			<div class="col-md-3 col-sm-6 col-xs12 footer-block">
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
			</div>
		</div>
	</div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="container">
		 2018 &copy; lutvi. </div>
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

<script src="<?php blink('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php blink('assets/js/bootstrap-datepicker.js')?>"></script>
    <script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
    </script>

<script src="<?php blink('assets/global/plugins/jquery.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/jquery-migrate.min.js')?>" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php blink('assets/global/plugins/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/bootstrap/js/bootstrap.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/jquery.blockui.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/jquery.cokie.min.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/uniform/jquery.uniform.min.js')?>" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php blink('assets/global/plugins/select2/select2.min.js')?>"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php blink('assets/global/scripts/metronic.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/admin/layout3/scripts/layout.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/admin/layout3/scripts/demo.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/admin/pages/scripts/form-samples.js')?>"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormSamples.init();
});
</script>
<!-- END JAVASCRIPTS -->


</body>
<!-- END BODY -->
</html>
