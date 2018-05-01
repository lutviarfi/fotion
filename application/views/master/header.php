<!DOCTYPE html>
<html>
<head>
<title>Fotion</title>
<link href="<?php blink('cooking/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php blink('cooking/js/jquery.min.js')?>"></script>
<!-- Custom Theme files -->
<!-- buat modal -->
<script src="<?php blink('assets/global/plugins/bootstrap/js/bootstrap.js')?>" type="text/javascript"></script>
<script src="<?php blink('assets/global/plugins/jquery.min.js')?>" type="text/javascript"></script>
<!--theme-style-->
<link href="<?php blink('cooking/css/style.css')?>" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="<?php blink('cooking/js/move-top.js')?>"></script>
		<script type="text/javascript" src="<?php blink('cooking/js/easing.js')?>"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
		<link href="<?php blink('cooking/css/styles.css')?>" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php blink('cooking/css/component.css')?>" />
	<!-- animation-effect -->
<link href="<?php blink('cooking/css/animate.min.css')?>" rel="stylesheet">
<script src="<?php blink('cooking/js/wow.min.js')?>"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
 <div class="header">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="<?php blink('Home')?>"><span>Fotion</span><img src="<?php blink('cooking/images/oo.png')?>" alt=""><img src="images/oo.png" alt=""></a></h1>
		</div>
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a class="active" href="<?php blink('Home')?>">Home</a></li>
						<?php if($username==NULL && $user==NULL){?>
						<li><a href="<?php blink('RegisterPicker')?>">Picker Registration</a></li>
							<?php }else{}?>
						<?php if($username==NULL && $user==NULL){?>
						<li><a href="<?php blink('Login')?>">Donation Now</a></li>
							<?php }else{}?>
						<?php if($username!=NULL && $user==NULL){?>
						<li><a href="<?php blink('InsertMakananController')?>">Insert Donate Food</a></li>
							<?php }else{}?>
						<?php if($username!=NULL && $user==NULL){?>
						<li><a href="<?php blink('Resto')?>">List Food for Approve</a></li>
							<?php }else{}?>
						<?php if($user!=NULL){?>
						<li><a href="<?php blink('Picker')?>">List Request Food</a></li>
							<?php }else{}?>
								<?php if($username==NULL && $user==NULL){?>
						<li><a href="<?php blink('Login/loginPicker')?>"</a>Login</li>
							<?php }else{}?>
						<?php if($username!=NULL || $user!=NULL){?>
						<li><a href="<?php blink('Login/logout'); ?>"</a>Logout</li>
							<?php }else{}?>
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
		<div class="banner">
			<p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">Satu Donasi untuk Satu Kebaikan</p>
			<label></label>
			<h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Let's Donate Now</h4>
			<a class="scroll down" href="#content-down"><img src="images/down.png" alt=""></a>
		</div>
</div>
<!--content-->
<div class="content" id="content-down">
