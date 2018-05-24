<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Picker Form Registration</title>
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
						<li><a href="<?php blink('Login/loginPicker')?>">Login</a></li>
            <li><a class="active" href="<?php blink('RegisterPicker')?>">Picker Registration</a></li>
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
<!--content-->
<div class="blog">
	<div class="container">
		<div class="menu-top">
      <div class="portlet light">
        <div class="portlet-title">
          <div class="caption font-green-haze">
            <i class="icon-settings font-green-haze"></i>
            <span class="caption-subject bold uppercase"><h1>Picker Registration</h1></span><br>
          </div>
        </div>
        <div class="portlet-body form">
          <form role="form" action="<?php blink('RegisterPicker/InsertPicker')?>" enctype="multipart/form-data" method="post" class="form-horizontal">
            <div class="form-body">
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Picker Name</label>
                <div class="col-md-10">
                  <input type="text" class="form-control placeholder-no-fix" required name="nama" id="form_control_1" placeholder="Enter your Name">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>

              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">username</label>
                <div class="col-md-10">
                  <input type="text" class="form-control placeholder-no-fix" required name="username" id="form_control_1" placeholder="Enter your Username">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Password</label>
                <div class="col-md-10">
                  <input type="password" class="form-control placeholder-no-fix" required name="password" id="form_control_1" placeholder="Enter your password">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>  <div class="form-group form-md-line-input">
                  <label class="col-md-2 control-label" for="form_control_1">Condition Picture</label>
                  <div class="col-md-10">
                    <input type="file" class="form-control" name="gambar" id="form_control_1" placeholder="Enter your name">
                    <div class="form-control-focus">
                    </div>
                  </div>
                </div>
                <div class="form-group form-md-line-input">
                  <label class="col-md-2 control-label" for="form_control_1">Condition</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" required name="kondisi" id="form_control_1" placeholder="Enter your condition">
                    <div class="form-control-focus">
                    </div>
                  </div>
                </div>
              <div class="form-group form-md-line-input has-success">
                <label class="col-md-2 control-label" for="form_control_1">Address</label>
                <div class="col-md-10">
                  <textarea class="form-control" required name="alamat" rows="3" placeholder="Enter your address"></textarea>
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="row">
                <div class="col-md-offset-2 col-md-10">
                  <!-- <button type="button" class="btn default">Cancel</button> -->
                  <button type="submit" name="simpan" class="btn btn-primary">Proceed</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
			</div>
	</div>
</div>
<!--//content-->
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
				
			<div class="clearfix"> </div>

			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>
	</div>
	<!--//footer-->

</body>
</html>
