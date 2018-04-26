<?php include"application/views/master/header.php" ?>
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
				<div class=" service-grid">
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

<!--news-->

	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Availabe Food</h3>  
				</div>
				<?php if($username!=NULL){
					?>
				<div class="col-md-8 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h4>Hi, <?php echo $username; ?>  <a href="<?php blink('Login/logout'); ?>" class="btn btn-danger">Logout</a></h4> 
				</div>
				<?php }else{

				}?>
	

				<div class="clearfix"> </div>
			</div>


			<div class="news-bottom">
				<!-- <div class="news-bot">
					<div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
										<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
									</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 news-bottom1 animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item content-item1">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="news-bot">
					<div class="col-md-6 news-bottom1">
						<a href="single.html">
							<div class="content-item content-item2 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 news-bottom1 animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="single.html">
							<div class="content-item content-item3">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
											<li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
											<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
										</ul>
									<p>There are many variations of passages of Lorem Ipsum available</p>
								</div>
							</div>
						</a>
					</div> -->
					<?php foreach ($getFood as $data ) {?>
        	<div class="col-md-4 col-sm-4 col-xs-4 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
						<div class="container"><br>
							<a class="photo_hover3" href="#"><img src="<?php blink('assets/img/'.$data->gambar.'') ?>" width="215" height="137" alt=""></a>
							<table style="width:20%;">
	              <tr>
	                <td>Food Name</td>
	                <td> <?php echo $data->nama;?></td>
	              </tr>
	              <tr>
	                <td>Halal Description<br></td>
	                <td><?php echo $data->halal;?></td>
	              </tr>
	              <!-- <tr>
	                <td>Expired</td>
	                <td><?php echo $data->expire;?></td>
	              </tr>
	              <tr>
	                <td>Ingredients</td>
	                <td><?php echo $data->ingredients;?></td>
	              </tr>
	              <tr>
	                <td>Restaurant Name</td>
	                <td><?php echo $data->username;?></td>
	              </tr>
	              <tr>
	                <td>Location</td>
	                <td><?php echo $data->lokasi;?></td>
	              </tr> -->
	            </table>
							<a href="#" class="btn btn-primary" role="submit">Pick up</a>|
							<a href="#modalviewmakanan<?php echo $data->idmakanan ?>" class="btn btn-danger" data-toggle="modal" id="btnadd">Read More</a>
						</div>
      		</div>
				<?php } ?>
				<!-- modal view buku -->
				<?php foreach($getFood as $data){?>
					<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="modalviewmakanan<?php echo $data->idmakanan?>" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h3 id="myModalLabel">Detail Makanan</h3>
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
									    	<!-- <tr>
									      	<td>ID Buku</td>
									        <td>:</td>
									        <td style="text-transform:capitalize;"><b><?php echo $data->idbuku  ?></b></td>
									      </tr> -->
									      <tr>
									      	<td>Nama Makanan</td>
									        <td>:</td>
									        <td style="text-transform:capitalize;"><?php echo $data->nama ?></td>
									      </tr>
									     	<tr>
									      	<td>Halal Description</td>
									        <td>:</td>
									        <td style="text-transform:capitalize;"><?php echo $data->halal ?></td>
									     	</tr>
												<tr>
									      	<td>Expired Date</td>
									      	<td>:</td>
									        <td style="text-transform:capitalize;"><?php echo $data->expire ?></td>
									      </tr>
												<tr>
									      	<td>Ingredients</td>
									        <td>:</td>
									        <td style="text-transform:capitalize;"><?php echo $data->ingredients ?></td>
									      </tr>
									      <tr>
									      	<td>Restaurant Name</td>
									        <td>:</td>
									        <td style="text-transform:capitalize;"><?php echo $data->username ?></td>
									      </tr>
												<tr>
									      	<td>Location</td>
									        <td>:</td>
									        <td style="text-transform:capitalize;"><?php echo $data->lokasi ?></td>
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

					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
	</div>
<!--//news-->
</div>
<?php include"application/views/master/footer.php" ?>
