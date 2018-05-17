<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title>List Approve Picker</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="<?php blink('cooking/bootstrap.min.css')?>">
 <script src="<?php blink('cooking/jquery.min.js')?>"></script>
 <script src="<?php blink('cooking/bootstrap.min.js')?>"></script>
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
<div class="page-header">
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="<?php blink('admin') ?>">List Request Picker</a>
					</li>
					<li>
						<a href="<?php blink('admin/getAllResto') ?>">List Point</a>
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
				<h1>List<small> Approve</small> Picker</h1>
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

													<th>Username</th>
													<th>Active Status</th>
                                                    <th colspan="3">Action</th>
												</thead>

												<?php foreach($picker as $data){?>
												<tr>

													<td><?php echo $data->username;?></td>
                                                    <td><?php echo $data->active;?></td>

                                                         <td width="20px;"> <a href="#myModal<?php echo $data->username?>" class="btn btn-info" data-toggle="modal">View Profil</a> </td>
                                                    	<?php if($data->active=="Not Yet") {  ?>
                                                            <td width="20px;"><a href="#myModalUpdate<?php echo $data->username?>" class="btn btn-warning" data-toggle="modal">Approve </a> </td>
                                                    <td width="20px;"><a href="" class="btn btn-danger" >Reject </a> </td>
                                                              <?php }else { ?>
                       										 <?php } ?>

                                                    	</tr>
												<?php } ?>
												</table>

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

<!-- modal update -->
<?php foreach($picker as $data){?>
		<div class="modal fade" id="myModalUpdate<?php echo $data->username?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Approve</h4>
        </div>
        <div class="modal-body">
		<table class="table table-responsive" border="0">
                           <tbody>
                             <tr>
                               <td>Name</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->nama?></td>
                             </tr>
                             <tr>
                               <td>Username</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->username?></td>
                             </tr>
                             <tr>
                               <td>Family Conditions</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->kondisi?></td>
                             </tr>
                             <tr>
                               <td>Address</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->alamat?></td>
                             </tr>
                             <tr>
                               <td>Photo</td>
                               <td>:</td>
                               <td><img src="<?php blink('assets/img/'.$data->gambar.'');?>" width="200px"></td>
                             </tr>
                           </tbody>
                         </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <a href="<?php blink('Admin/update/'.$data->username."")?>" class="btn btn-primary"><i class="fa fa-save"></i> Approve Now</a>
        </div>
      </div>
    </div>
  </div>
  <?php }?>

			   <!-- akhir modal update -->

      <!-- Modal content-->
	  <?php foreach($picker as $data){?>
		<div class="modal fade" id="myModal<?php echo $data->username?>" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Profile Picker</h4>
        </div>
        <div class="modal-body">
		<table class="table table-responsive" border="0">
                           <tbody>
                             <tr>
                               <td>Name</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->nama?></td>
                             </tr>
                             <tr>
                               <td>Username</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->username?></td>
                             </tr>
                             <tr>
                               <td>Family Conditions</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->kondisi?></td>
                             </tr>
                             <tr>
                               <td>Address</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->alamat?></td>
                             </tr>
														 <tr>
                               <td>Active Status</td>
                               <td>:</td>
                               <td style="text-transform:capitalize;"><?php echo $data->active?></td>
                             </tr>
                             <tr>
                               <td>Photo</td>
                               <td>:</td>
                               <td><img src="<?php blink('assets/img/'.$data->gambar.'');?>" width="200px"></td>
                             </tr>
                           </tbody>
                         </table>
        
      </div>

    </div>
  </div>
  <?php }?>
  <!-- akhir modal detil -->

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
