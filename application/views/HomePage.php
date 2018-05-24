<?php include"application/views/master/header.php" ?>
<div class="content" id="content-down">

	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Availabe Food</h3>
				</div>

				<div class="col-md-8 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<?php if($this->session->username!=NULL){?>
				<h4>Hi, <?php echo $this->session->username; ?></h4>
					<?php }else if($this->session->user!=NULL){?>
						<h4>Hi, <?php echo $this->session->user; ?></h4>
					<?php }else{}?>

				</div>


				<div class="clearfix"> </div>
			</div>


			<div class="news-bottom">
					<?php foreach ($getFood as $data ) {?>
						<div class="col-sm-4">
							<div class="thumbnail"><br>
							<img src="<?php blink('assets/img/'.$data->gambar.''); ?>" class="img-rounded" alt="Cinque Terre" style="width:100%; height:250px">
							<div class="caption">
								<table style="width:80%;">
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
		                <td><?php echo $username;?></td>
		              </tr>
		              <tr>
		                <td>Location</td>
		                <td><?php echo $data->lokasi;?></td>
		              </tr> -->
								</table>
								<hr>
								<?php if($user!=NULL):?>
									<a href="<?php blink('Transaksi/pesan/'.$data->idmakanan) ?>" class="btn btn-primary" role="submit">Pick up</a>|
								<?php endif;?>
									<a href="#modalviewmakanan<?php echo $data->idmakanan ?>" class="btn btn-danger" data-toggle="modal" id="btnadd">Read More</a>
							</div>

						</div>
      		</div>
				<?php } ?>
				<!-- modal view detil -->
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
