<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>List Approve Food</title>
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


			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">

					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="../../assets/admin/layout3/img/avatar9.jpg">
                        <span class="username username-hide-mobile"><?php echo $status; ?></span>
						
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
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="<?php blink('CRUD') ?>">List Picker</a>
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
				<h1>List<small> Approve</small> Food</h1>
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
											<i class="fa fa-gift"></i>List Approve
										</div>
										<div class="tools">
									
											<a href="javascript:;" class="reload">
											</a>
										
										</div>
									</div>
									<?php
										if(isset($result)) {
											echo $result;
										}
									?>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
											<div class="form-body">
												<table id="tableuser" class="table table-bordered" name="tableuser" border="1">
												<thead>
													<th>Id Pesan</th>
													<th>Id Makanan</th>
													<th>Username</th>
                                                    <th>Status</th>
                                                    <th colspan="3">Action</th>
												</thead>

												<?php 
												
												foreach($idpesan as $data){
													if($data->status=="0") {
													?>
												<tr>
													<td><?php echo $data->idpesan;?></td>
													<td><?php echo $data->idmakanan;?></td>
                                                    <td><?php echo $data->username;?></td>
                                                    <td><?php echo $data->status;?></td>

                                                         <td width="20px;"><a href="#modalviewpesan<?php echo $data->idpesan ?>" data-toggle="modal" class="btn btn-info" >View </a> </td>                      
                                                            <td width="20px;"><a href="<?php blink('Resto/update/'.$data->idpesan.'')?>" class="btn btn-warning" >Approve </a> </td>                      
                                                    <td width="20px;"><a href="" class="btn btn-danger" >Reject </a> </td>
                                                              
                                </tr>
								<!-- <input type="hidden" name="id" id="id" value="<?php echo $data->idpesan;?>"> -->
												<?php }} ?>
												</table>

	<!-- modal view buku -->
    <?php foreach($idpesan as $data){?>
									   <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modalviewpesan<?php echo $data->idmakanan?>" aria-hidden="true">
									     <div class="modal-dialog">
									       <div class="modal-content">
									         <div class="modal-header">
									           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									           <h3 id="myModalLabel">Detail Pesan</h3>
									         </div>
									         <div class="modal-body">
									           <form method="POST" action="" enctype="multipart/form-data">
									             <table class="table table-striped" border="0">
									               <thead>
									                 <td width="20%" ></td>
									                 <td width="10%"  ></td>
									                 <td width="60%" ></td>
									               </thead>
									               <tbody>
									                 <tr>
									                   <td>Id pesan</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><b><?php echo $data->idpesan  ?></b></td>
									                 </tr>
									                 <tr>
									                   <td>Id Makanan</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->idmakanan ?></td>
									                 </tr>
													 <tr>
									                   <td>Nama Picker</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->username ?></td>
									                 </tr
													 <tr>
									                   <td>Halal</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->halal ?></td>
									                 </tr>
									                 <tr>
									                   <td>Nama Makanan</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->nama_m ?></td>
									                 </tr>
													 <tr>
									                   <td>Available</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->available ?></td>
									                 </tr>
									               </tbody>
									             </table>
									           </form>
									         </div>
									         <div class="modal-footer">
									           <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
									           <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>
									         </div>
									       </div>
									     </div>
									   </div>
									   <?php } ?>
										<!-- end modal view buku -->

											</div>
											<div class="form-actions">
												<div class="row">
													
												</div>
											</div>
										<!-- </form> -->
										<!-- END FORM-->
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
		 2018 &copy; UBL</div>
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
<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>

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