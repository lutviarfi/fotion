<!DOCTYPE html>
<html>
<head>
<title>Fotion</title>
<link href="<?php blink('cooking/css/bootstrap.css')?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php blink('cooking/js/jquery.min.js')?>"></script>
<!-- Custom Theme files -->
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
			<h1><a href="<?php echo('Home')?>"><span>Fotion</span><img src="<?php blink('cooking/images/oo.png')?>" alt=""><img src="images/oo.png" alt=""></a></h1>
		</div>
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a class="active" href="<?php echo('Home')?>">Home</a></li>
						<li><a href="<?php echo('RegisterPicker')?>">Picker Registration</a></li>
						<li><a href="<?php echo('RestoranRegistController')?>">Restaurant Registration</a></li>
						<li><a href="<?php echo('InsertMakananController')?>">Insert Donate Food</a></li>
						<li><a href="<?php echo('Resto')?>">List Food for Approve</a></li>
						<li><a href="#"</a>Login</li>
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

<!--services-->
<!-- <div class="services">
	<div class="container">
		<div class="services-top">
			<div class="col-md-8 services-right animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
			</div>
			<div class="col-md-4 services-left animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Services</h3>
				<label><i class="glyphicon glyphicon-menu-up"></i></label>
				<span>There are many variations</span>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="service-top">
			<div class="col-md-5 service-top animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class=" ser	vice-grid">
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-leaf"></a>
						</div>
					</div>
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-star-empty"></a>
						</div>
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-grid">
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-folder-open"></a>
						</div>
						</div>
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-home"></a>
						</div>
						</div>
					<div class="clearfix"> </div>
				</div>

			</div>
			<div class="col-md-7 service-bottom animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top ">
						<h5>Beautiful &amp; enjoyable designs</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa1.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top ">
						<h5>Beautiful &amp; enjoyable designs</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-bottom1">
					<div class=" ser-bottom">
						<img src="images/sa2.jpg" class="img-responsive" alt="">
					</div>
					<div class="ser-top ">
						<h5>Beautiful &amp; enjoyable designs</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div> -->
<!--//services-->
