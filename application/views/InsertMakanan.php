<!DOCTYPE html>
<html>
<head>
<title>Donations Food</title>
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
						<li><a href="<?php blink('HomeLogin')?>">Home</a></li>
						<li><a class="" href="<?php blink('Resto')?>">List Approve</a></li>
            <li><a class="active" href="<?php blink('InsertMakananController')?>">Insert Makanan</a></li>
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
            <span class="caption-subject bold uppercase"><h1>Insert Food</h1></span><br>
          </div>
        </div>
        <div class="portlet-body form">

          <!--Form-->

          <form role="form" action="<?php blink('InsertMakananController/InsetData')?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-body">
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Food Name</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" required name="nama" id="nama" placeholder="The Name of The Food">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                    <label class="col-md-2 control-label" for="form_control_1">Food Image</label>
                    <div class="col-md-10">
                      <input type="file" class="form-control" required name="gambar" id="gambar" placeholder="Insert Food Image">
                      <div class="form-control-focus">
                      </div>
                    </div>
                  </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Expired Date</label>
                <div class="col-md-10">
                  <input type="date" class="form-control" required name="expire" id="expire" placeholder="Expired Date of The Food">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Halal Status</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" required name="halal" id="halal" placeholder="Is Your Food Halal?">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Available Portion</label>
                <div class="col-md-10">
                  <input type="number" min="1" class="form-control" required name="available" id="available" placeholder="Amount of Available Portion">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Ingredients</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" required name="ingredients" id="ingredients" placeholder="Ingredients of The Food">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Location To Pickup</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" required name="lokasi" id="lokasi" placeholder="Input your pickup location">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
              
            </div>
            <div class="form-actions">
              <div class="row">
                <div class="col-md-offset-2 col-md-10">
                  <!-- <button type="button" class="btn default">Cancel</button> -->
                  <button type="submit" name="simpan" class="btn btn-primary">Donate</button>
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
