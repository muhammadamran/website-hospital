<!DOCTYPE html>
<html lang="en">
<body>
	<main id="main">
		<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">
				<ol>
					<li><a href="<?php echo base_url()."index.php/WebHome";?>">Beranda</a></li>
					<li>Pelayanan Medis</li>
				</ol>
				<h2>Instalasi Gawat Darurat</h2>
			</div>
		</section>
		<!-- ======= Blog Section ======= -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 entries">
						<article class="entry entry-single">
							<div align="center">
								<!-- <img src="<?php echo base_url('assets/img/blog-1.jpg');?>" alt="" class="img-fluid"> -->
							<?php
						    $con=mysqli_connect("localhost","root","","rskg_website");
						    if (mysqli_connect_errno())
						    {
						        echo "Failed to connect to MySQL: " . mysqli_connect_error();
						    }
						    $result = mysqli_query($con,"SELECT * FROM tb_igd WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
							<?php
							if ($row['link_igd']==NULL) {
							?>
								<img src="<?php echo base_url('assets/images/empty/img-empty.png');?>" alt="" class="img-fluid">
							<?php
							}else{
							?>
								<img src="<?php echo base_url('assets/images/rumah-sakit/igd/'.$row['link_igd']);?>" alt="" class="img-fluid">
							<?php } ?>
							<?php } } mysqli_close($con); ?>
							</div>
							<br>
							<hr>
							<h2 class="entry-title">
							<?php
						    $con=mysqli_connect("localhost","root","","rskg_website");
						    if (mysqli_connect_errno())
						    {
						        echo "Failed to connect to MySQL: " . mysqli_connect_error();
						    }
						    $result = mysqli_query($con,"SELECT * FROM tb_igd WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
								<a href=""><?php echo $row['judul_igd']; ?></a>
							<?php } } mysqli_close($con); ?>
							</h2>
							<div class="entry-content">
							<?php
						    $con=mysqli_connect("localhost","root","","rskg_website");
						    if (mysqli_connect_errno())
						    {
						        echo "Failed to connect to MySQL: " . mysqli_connect_error();
						    }
						    $result = mysqli_query($con,"SELECT * FROM tb_igd WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
							<?php echo $row['isi_igd']; ?>
							<?php } } mysqli_close($con); ?>
							</div>
							<div class="entry-footer clearfix">
								<div class="float-left">
									<i class="icofont-folder"></i>
									<ul class="cats">
										<li><a href="#">RS. Khusus Ginjal NY. R.A. Habibie</a></li>
									</ul>
									<i class="icofont-tags"></i>
									<ul class="tags">
										<li><a href="#">Instalasi Gawat Darurat</a></li>
									</ul>
								</div>
								<div class="float-right share">
									<a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
									<a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
									<a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
									<a href="" title="Share on YouTube"><i class="icofont-YouTube"></i></a>
								</div>
							</div>
						</article>
					</div>
					<div class="col-lg-4">
						<div class="sidebar">
							<h3 class="sidebar-title">Search</h3>
							<div class="sidebar-item search-form">
								<form action="">
									<input type="text">
									<button type="submit"><i class="icofont-search"></i></button>
								</form>
							</div>
							<h3 class="sidebar-title">Berkaitan</h3>
							<div class="sidebar-item categories">
								<ul>
									<li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexIGD";?>"><font style="color: #28a745">Instalasi Gawat Darurat (IGD) </font></a></li>
									<li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexAlurIGD";?>">Alur Pelayanan Instalasi Gawat Darurat (IGD) </a></li>
								</ul>
							</div>
							<h3 class="sidebar-title">Pelayanan Medis</h3>
							<div class="sidebar-item categories">
								<ul>
									<li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexHD";?>">Hemodialisa & CAPD </a></li>
									<li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexIGD";?>"><font style="color: #28a745">Instalasi Gawat Darurat (IGD) </font></a></li>
									<li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexRJ";?>">Instalasi Rawat Jalan</a></li>
									<li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexRI";?>">Instalasi Rawat Inap</a></li>
									<!-- <li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexCAPD";?>">CAPD</a></li> -->
									<li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexBedah";?>">Pelyanan Bedah</a></li>
									<li><a href="<?php echo base_url()."index.php/WebPelayananMedis/indexMCU";?>">Medical Check Up</a></li>
								</ul>
							</div>
							<h3 class="sidebar-title">Kontak Kami</h3>
							<hr>
							<div>
								<?php
							    $con=mysqli_connect("localhost","root","","rskg_website");
							    if (mysqli_connect_errno())
							    {
							        echo "Failed to connect to MySQL: " . mysqli_connect_error();
							    }
							    $result = mysqli_query($con,"SELECT * FROM tb_kontakkami WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

							    if(mysqli_num_rows($result)>0){
							        while($row = mysqli_fetch_array($result))
							        {
								?>
								<label><b><?php echo $row['label_kk']; ?></b></label> : <label><?php echo $row['isi_kk']; ?></label><br>
								<?php } } mysqli_close($con); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
</html>
