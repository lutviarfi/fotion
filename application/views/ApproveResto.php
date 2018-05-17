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
<!-- awal header cookery -->
<link href="<?php blink('cooking/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php blink('cooking/js/jquery.min.js')?>"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php blink('cooking/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="<?php blink('cooking/css/styles.css')?>" rel="stylesheet">
<!-- animation-effect -->
<link href="<?php blink('cooking/css/animate.min.css')?>" rel="stylesheet">
<script src="<?php blink('cooking/js/wow.min.js')?>"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118961155-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118961155-1');
</script>

</head>
<body>
<!-- BEGIN HEADER -->

<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.php"><span>Fotion</span><img src="<?php blink('cooking/images/oo.png')?>" alt=""><img src="<?php blink('cooking/images/oo.png')?>" alt=""></a></h1>
		</div>
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
          <ul class="toggle-menu">
						<li><a href="<?php blink('Home')?>">Home</a></li>
						<li><a class="active" href="<?php blink('Resto')?>">List Approve</a></li>
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->

</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
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
				<h1>List Approve Food</h1>
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
												
													<th>Request Id</th>
													<th>Food Id</th>
													<th>Username</th>
													<th>Family Conditions</th>
													<th>Status</th>
                                                    <th colspan="3">Action</th>
												
												</thead>

												<?php foreach($idpesan as $data){ ?>
													<tr>
													<td><?php echo $data->idpesan;?></td>
													<td><?php echo $data->idmakanan;?></td>
													<td><?php echo $data->username;?></td>
													<td></td>
                                                    <td><?php echo $data->status;?></td>
											
                                                	<td width="20px;"><a href="#modalviewpesan<?php echo $data->idpesan ?>" data-toggle="modal" class="btn btn-info" >View </a> </td>                      
                                                    <td width="20px;"><a href="<?php blink('Resto/update/'.$data->idpesan."")?>" class="btn btn-warning" >Approve </a> </td>                      
                                                    <td width="20px;"><a href="" class="btn btn-danger" >Reject </a> </td>                                      
													</tr>
									<!-- <input type="hidden" name="id" id="id" value="<?php echo $data->idpesan;?>"> -->
													
									<?php }?> 
												</table>

									<!-- modal view buku -->
  									  <?php foreach($idpesan as $data){?>
									   <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modalviewpesan<?php echo $data->idpesan?>" aria-hidden="true">
									     <div class="modal-dialog">
									       <div class="modal-content">
									         <div class="modal-header">
									           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									           <h3 id="myModalLabel">Detail</h3>
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
									                   <td>Request Id</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><b><?php echo $data->idpesan  ?></b></td>
									                 </tr>
									                 <tr>
									                   <td>Food Id</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->idmakanan ?></td>
									                 </tr>
													 <tr>
									                   <td>Picker Name</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->username ?></td>
									                 </tr>
													 <tr>
									                   <td>Food Name</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->nama ?></td>
									                 </tr>
													 <tr>
									                   <td>Halal Description</td>
									                   <td>:</td>
									                   <td style="text-transform:capitalize;"><?php echo $data->halal ?></td>
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

<!--footer-->
<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Blog</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>
						<span>There are many variations of passages</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>

			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
	<!--//footer-->

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