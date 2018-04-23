<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
mysql_connect("localhost","root","");
mysql_select_db("uts");

//$email=$_POST['email'];
//$pass=$_POST['password'];
//$kondisi=$_POST['kondisi'];
//$alamat=$_POST['alamat'];

if(isset($_POST['simpan'])){
  $sql="insert into foodpicker(id_foodpicker,email,lokasi,kondisi,gambar,pass,status) values ('','$_POST[email]','$_POST[password]','$_POST[kondisi]','','$_POST[alamat]','PENDING')";
  $eksekusi = mysql_query($sql);
  if($eksekusi == true){
    echo "<script>alert('done')</script>";
    echo "<script>document.location.href='login_3.php'</script>";
  }else{
    echo "$sql";
  }

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Blog :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.php"><span>C</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">kery</a></h1>
		</div>
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
          <ul class="toggle-menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="typo.php">Codes</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="login_3.php">Login</a></li>
						<li><a class="active" href="regis.php">Register</a></li>
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
            <span class="caption-subject bold uppercase"><h1>Registration</h1></span><br>
          </div>
        </div>
        <div class="portlet-body form">
          <form role="form" method="post" class="form-horizontal">
            <div class="form-body">
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Email</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" name="email" id="form_control_1" placeholder="Enter your Email">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
              <div class="form-group form-md-line-input">
                <label class="col-md-2 control-label" for="form_control_1">Password</label>
                <div class="col-md-10">
                  <input type="password" class="form-control" name="password" id="form_control_1" placeholder="Enter your password">
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>  <div class="form-group form-md-line-input">
                  <label class="col-md-2 control-label" for="form_control_1">Gambar</label>
                  <div class="col-md-10">
                    <input type="file" class="form-control" name="gambar" id="form_control_1" placeholder="Enter your name">
                    <div class="form-control-focus">
                    </div>
                  </div>
                </div>
                <div class="form-group form-md-line-input">
                  <label class="col-md-2 control-label" for="form_control_1">Kondisi</label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="kondisi" id="form_control_1" placeholder="Enter your kondisi">
                    <div class="form-control-focus">
                    </div>
                  </div>
                </div>
              <div class="form-group form-md-line-input has-success">
                <label class="col-md-2 control-label" for="form_control_1">Alamat</label>
                <div class="col-md-10">
                  <textarea class="form-control" name="alamat" rows="3" placeholder="Enter About your address"></textarea>
                  <div class="form-control-focus">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="row">
                <div class="col-md-offset-2 col-md-10">
                  <button type="button" class="btn default">Cancel</button>
                  <button type="submit" name="simpan" class="btn blue">Submit</button>
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

</body>
</html>
