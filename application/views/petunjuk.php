<?php include"application/views/master/header.php" ?>
<div class="content" id="content-down">

	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-10 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Panduan Penggunaan Website</h3>
					<br>
					<h2>Restaurant</h2>
					<p>Restaurant merupakan pengguna website yang nantinnuya mengupload makanan yang akan dia donasikan.</p>
					<p>1. Ketika awal membuka website, Restauran bisa mengklik navigation bar, lalu memilih menu "donation now"</p>
					<p>2.Lalu Restauran dapat melakukan login ke akunnya, Atau jika pengguna belum memiliki akun ia harus mendaftar terlebih dahulu dengan
mengklik tombol "Register Now"</p>
					<p>3. Lalu Restoran harus mengisi form yang ada dan klik submit</p>
					<p>4. Setelah itu Pengguna harus melakukan konfirmasi ke emailnya</p>
					<p>5. Konfirmasi pendaftaran terdapat di inbox, buka pesan dari verifikasi802@gmail.com lalu klik link yang ada. 
Setelahitu berarti anda telah melakukan verifikasi pendaftaran anda. dan dapat melakukan akses penuh pada website sebagai restoran.</p>
					<p>6. Navigation bar Insert Donate Food adalah untuk pengguna mengupload makanan yang akan didonasikan</p>
					<p>7. Navigation bar List Food For Approve adalah untuk pengguna mellihat Picker yang menginginkan untuk mengambil donasi mereka, dan restoran dapat menerima atau menolak permintaan tersebut</p>
					<p>8. Navigation bar Logout adalah untuk keluar dari akun pengguna</p>

					<br>
					<h2>Picker</h2>
					<p>Picker merupakan pengguna website yang nantinnya bisa mengambil donasi makanan yang di upload/ diberikan oleh restoran</p>
					<p>1. Ketika awal membuka website, Restauran bisa mengklik navigation bar, lalu memilih menu picker registration"</p>
					<p>2. Lalu picker dapat mengisi form dan melakukan pendaftaran disana</p>
					<p>3. Setelah mendaftar picker harus menunggu konfirmasi pendaftarannya yang akan di terima atau tidak oleh admin fotion</p>
					<p>4. Jika pendaftar telah diterima picker dapat melakukan "pick Up Food" yang terdapat di home</p>
					<p>5. Lalu pada navigation bar terdapat menu "list request" yang menampilkan informasi makanan yang Ingin picker ambil</p>
					<p>6. Logout adalah untuk keluar dari akun pengguna</p>


				</div>

				<div class="col-md-2 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<?php if($this->session->username!=NULL){?>
				<h4>Hi, <?php echo $this->session->username; ?></h4>
					<?php }else if($this->session->user!=NULL){?>
						<h4>Hi, <?php echo $this->session->user; ?></h4>
					<?php }else{}?>

				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
	</div>
<!--//news-->
</div>
<?php include"application/views/master/footer.php" ?>
