<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<?php
    $con=mysqli_connect("localhost","root","","rskg_website");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $result = mysqli_query($con,"SELECT * FROM tb_profile WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_array($result))
        {
	?>
  	<title><?php echo $row['title_head'];?></title>
  	<!-- Favicons -->
  	<link href="<?php echo base_url('assets/images/icon/'.$row['icon']);?>" rel="icon">
	<?php } } mysqli_close($con); ?>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/icofont/icofont.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/animate.css');?>/animate.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/vendor/venobox/venobox.css');?>" rel="stylesheet">
	<!-- Template Main CSS File -->
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
	<!-- SLIDER -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<!-- END SLIDER -->
</head>
<style type="text/css">
	.carouselExampleInterval 
	{
		content:"";
		position:absolute;
		z-index:-1;
		top:100%;
		bottom:0;
		width:120%;
		height:50px;
		left:-10%;
		right:-10%;
		background:-webkit-radial-gradient(50% -3%, ellipse cover, rgba(00, 00, 00, 0.5), rgba(97, 97, 97, 0.0) 40%);
		background:radial-gradient(ellipse at 50% -3%, rgba(00, 00, 00, 0.5), rgba(97, 97, 97, 0.0) 40%);
	}

	.d-flex 
	{
		display: -webkit-box !important;
		display: -ms-flexbox !important;
		display: flex !important; 
	}

	.d-inline-flex 
	{
		display: -webkit-inline-box !important;
		display: -ms-inline-flexbox !important;
		display: inline-flex !important; 
	}

	@media (min-width: 576px) 
	{
		.d-sm-none 
		{
			display: none !important; 
		}
		.d-sm-inline 
		{
			display: inline !important; 
		}
		.d-sm-inline-block 
		{
			display: inline-block !important;
		}
		.d-sm-block 
		{
			display: block !important; 
		}
		.d-sm-table 
		{
			display: table !important; 
		}
		.d-sm-table-row 
		{
			display: table-row !important; 
		}
		.d-sm-table-cell 
		{
			display: table-cell !important; 
		}
		.d-sm-flex 
		{
			display: -webkit-box !important;
			display: -ms-flexbox !important;
			display: flex !important; 
		}
		.d-sm-inline-flex 
		{
			display: -webkit-inline-box !important;
			display: -ms-inline-flexbox !important;
			display: inline-flex !important; 
		} 
	}

	@media (min-width: 768px) 
	{
		.d-md-none 
		{
			display: none !important; 
		}
		.d-md-inline 
		{
			display: inline !important; 
		}
		.d-md-inline-block 
		{
			display: inline-block !important; 
		}
		.d-md-block 
		{
			display: block !important; 
		}
		.d-md-table 
		{
			display: table !important; 
		}
		.d-md-table-row 
		{
			display: table-row !important; 
		}
		.d-md-table-cell 
		{
			display: table-cell !important; 
		}
		.d-md-flex 
		{
			display: -webkit-box !important;
			display: -ms-flexbox !important;
			display: flex !important; 
		}
		.d-md-inline-flex 
		{
			display: -webkit-inline-box !important;
			display: -ms-inline-flexbox !important;
			display: inline-flex !important; 
		} 
	}

	@media (min-width: 992px) 
	{
		.d-lg-none 
		{
			display: none !important; 
		}
		.d-lg-inline 
		{
			display: inline !important; 
		}
		.d-lg-inline-block 
		{
			display: inline-block !important; 
		}
		.d-lg-block 
		{
			display: block !important; 
		}
		.d-lg-table 
		{
			display: table !important; 
		}
		.d-lg-table-row 
		{
			display: table-row !important; 
		}
		.d-lg-table-cell 
		{
			display: table-cell !important; 
		}
		.d-lg-flex 
		{
			display: -webkit-box !important;
			display: -ms-flexbox !important;
			display: flex !important; 
		}
		.d-lg-inline-flex 
		{
			display: -webkit-inline-box !important;
			display: -ms-inline-flexbox !important;
			display: inline-flex !important; 
		} 
	}
	.align-self-stretch 
	{
		-ms-flex-item-align: stretch !important;
		-ms-grid-row-align: stretch !important;
		align-self: stretch !important; 
	}


	.block-20 
	{
		overflow: hidden;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		height: 250px;
		position: relative;
		display: block; 
	}

	.blog-entry 
	{
		background: #fff;
		-webkit-box-shadow: 0px 10px 18px -8px rgba(0, 0, 0, 0.1);
		-moz-box-shadow: 0px 10px 18px -8px rgba(0, 0, 0, 0.1);
		box-shadow: 0px 10px 18px -8px rgba(0, 0, 0, 0.1); }
		@media (min-width: 768px) 
		{
			.blog-entry 
			{
				margin-bottom: 40px; 
			} 
		}
		@media (max-width: 767.98px) 
		{
			.blog-entry 
			{
				margin-bottom: 30px; 
			} 
		}
		.blog-entry .text 
		{
			position: relative;
			border-top: 0;
			border-radius: 2px; 
		}
		.blog-entry .text .tag 
		{
			color: #b3b3b3; 
		}
		.blog-entry .text .heading 
		{
			font-size: 18px;
			margin-bottom: 16px;
			font-weight: 400; 
		}
		.blog-entry .text .heading a 
		{
			color: #000000; 
		}
		.blog-entry .text .heading a:hover, .blog-entry .text .heading a:focus, .blog-entry .text .heading a:active 
		{
			color: #1ba12d; 
		}
		.blog-entry .text .meta-chat 
		{
			color: #1ba12d; 
		}
		.blog-entry .text .read 
		{
			color: #000000;
			font-size: 14px; 
		}
		.blog-entry .meta > div 
		{
			display: inline-block;
			margin-right: 5px;
			margin-bottom: 5px;
			font-size: 12px;
			text-transform: uppercase;
			letter-spacing: 1px; 
		}
		.blog-entry .meta > div a 
		{
			color: #999999;
			font-weight: 500; 
		}
		.blog-entry .meta > div a:hover 
		{
			color: #333333; 
		}
		.blog-entry .btn-custom 
		{
			font-size: 12px;
			text-transform: uppercase;
			letter-spacing: 1px;
			font-weight: 500;
			color: #147521; 
		}
	}
</style>
<body>
	<?php require ('include/header.php');?>
	<?php require ('include/sidebar.php');?>
	<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" data-interval="2000">
				<img src="<?php echo base_url('assets/images/slide/1.png') ?>" class="d-block w-100" alt="gambar">
			</div>
			<?php
		    $con=mysqli_connect("localhost","root","","rskg_website");
		    if (mysqli_connect_errno())
		    {
		        echo "Failed to connect to MySQL: " . mysqli_connect_error();
		    }
		    $result = mysqli_query($con,"SELECT * FROM tb_slider WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

		    if(mysqli_num_rows($result)>0){
		        while($row = mysqli_fetch_array($result))
		        {
			?>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/images/slide/'.$row['slider']);?>" class="d-block w-100" alt="gambar">
			</div>
			<?php } } mysqli_close($con); ?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<br>
	<br>
	<br>
	<main id="main">
		<!-- ======= Sejarah Singkat RS. Khusus Ginjal Ny. R.A. Habibie Section ======= -->
		<section id="about" class="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<video width="100%" height="100%" controls><source src="<?php echo base_url('assets/vidio/profile.mp4') ?>" type="video/mp4">
						</video>
						<!-- <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tgbNymZ7vqY">
						</iframe> -->
					</div>
					<div class="col-lg-6 pt-4 pt-lg-0 content">
						<div align="left">
							<label><font style="font-family: Roboto; color: #3ca754"><b>Sejarah Singkat RS. Khusus Ginjal Ny. R.A. Habibie</b></font></label>
						</div>
						<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
						<p class="font-italic">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
						<ul>
							<li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
							<li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
							<li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
						</ul>
						<p>
							Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- ======= Tentang Kami ======= -->
		<section id="about" class="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 pt-4 pt-lg-0 content">
						<div align="left">
							<label><font style="font-family: Roboto; color: #3ca754"><b>Tentang Kami</b></font></label>
						</div>
						<h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
						<p class="font-italic">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
						<ul>
							<li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
							<li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
							<li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
						</ul>
						<p>
							Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
							velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum
						</p>
					</div>
					<div class="col-lg-6">
						<img src="<?php echo base_url('assets/images/empty/img-empty.png');?>" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</section>
		<!-- ======= Pelayanan Kami Section ======= -->
		<section id="featured" class="featured">
			<div class="container">
				<div class="section-title" data-aos="fade-up">
					<div align="center">
						<label><font style="font-family: Roboto; color: #3ca754"><b>Tentang Kami</b></font></label>
					</div>
					<h2>Pelayanan Kami</h2>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="icon-box">
							<i class="icofont-computer"></i>
							<h3><a href="">Lorem Ipsum</a></h3>
							<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
						</div>
					</div>
					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="icon-box">
							<i class="icofont-image"></i>
							<h3><a href="">Dolor Sitema</a></h3>
							<p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
						</div>
					</div>
					<div class="col-lg-4 mt-4 mt-lg-0">
						<div class="icon-box">
							<i class="icofont-tasks-alt"></i>
							<h3><a href="">Sed ut perspiciatis</a></h3>
							<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ======= Jumlah Section ======= -->
		<section id="counts" class="counts" style="background-image: url(<?php echo base_url('theme/images/image_2.jpg');?>); background-repeat: no-repeat; background-position: center center;background-size: cover;padding: 0; margin-top: 5px; background: linear-gradient(to right, rgba(75, 123, 211, 0.5), rgba(22, 215, 177, 0.3)); ">
			<br>
			<br>
			<br>
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
						<div class="count-box">
							<i class="icofont-simple-smile"></i>
							<span data-toggle="counter-up">232</span>
							<p><strong>Happy Clients</strong> consequuntur quae qui deca rode</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
						<div class="count-box">
							<i class="icofont-document-folder"></i>
							<span data-toggle="counter-up">521</span>
							<p><strong>Projects</strong> adipisci atque cum quia aut numquam delectus</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
						<div class="count-box">
							<i class="icofont-live-support"></i>
							<span data-toggle="counter-up">1,463</span>
							<p><strong>Hours Of Support</strong> aut commodi quaerat. Aliquam ratione</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
						<div class="count-box">
							<i class="icofont-users-alt-5"></i>
							<span data-toggle="counter-up">15</span>
							<p><strong>Hard Workers</strong> rerum asperiores dolor molestiae doloribu</p>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
			<br>
		</section><!-- End Counts Section -->
		<br>
		<br>
		<!-- ======= Berita & Acara Section ======= -->
		<section id="clients" class="clients">
			<div class="container">
				<div class="section-title">
					<div align="center">
						<label><font style="font-family: Roboto; color: #3ca754"><b>Berita & Acara</b></font></label>
					</div>
					<h2>Seputar Kesehatan</h2>
					<div class="row d-flex">
						<div class="col-md-4 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch">
								<a href="blog-single.html" class="block-20 rounded" style="background-image: url(<?php echo base_url('theme/images/image_2.jpg');?>);">
								</a>
								<div class="text p-4">
									<div class="meta mb-2">
										<div><a href="#">March 31, 2020</a></div>
										<div><a href="#">Admin</a></div>
									</div>
									<label><a href="#"><font style="color: black; font-family: Roboto; font-size: 16px"><b>Even the all-powerful Pointing has no control about the blind texts</b></font></a></label>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch">
								<a href="blog-single.html" class="block-20 rounded" style="background-image: url(<?php echo base_url('theme/images/image_2.jpg')?>);">
								</a>
								<div class="text p-4">
									<div class="meta mb-2">
										<div><a href="#">March 31, 2020</a></div>
										<div><a href="#">Admin</a></div>
									</div>
									<label><a href="#"><font style="color: black; font-family: Roboto; font-size: 16px;"><b>Even the all-powerful Pointing has no control about the blind texts</b></font></a></label>
								</div>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="blog-entry align-self-stretch">
								<a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo base_url('theme/images/image_3.jpg')?>');">
								</a>
								<div class="text p-4">
									<div class="meta mb-2">
										<div><a href="#">March 31, 2020</a></div>
										<div><a href="#">Admin</a></div>
									</div>
									<label><a href="#"><font style="color: black; font-family: Roboto; font-size: 16px"><b>Even the all-powerful Pointing has no control about the blind texts</b></font></a></label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients">
			<div class="container">
				<div class="section-title">
					<div align="center">
						<label><font style="font-family: Roboto; color: #3ca754"><b>Mitra</b></font></label>
					</div>
					<h2>Rekanan</h2>
				</div>
				<div class="owl-carousel clients-carousel">
				<?php
			    $con=mysqli_connect("localhost","root","","rskg_website");
			    if (mysqli_connect_errno())
			    {
			        echo "Failed to connect to MySQL: " . mysqli_connect_error();
			    }
			    $result = mysqli_query($con,"SELECT * FROM tb_rekan WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

			    if(mysqli_num_rows($result)>0){
			        while($row = mysqli_fetch_array($result))
			        {
				?>
					<img src="<?php echo base_url('assets/img/clients/'.$row['rekan']);?>);?>" alt="">
				<?php } } mysqli_close($con); ?>
				</div>
			</div>
		</section>
	</main><!-- End #main -->
	<?php require ('include/footer.php');?>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
	<!-- Vendor JS Files -->
	<?php require ('include/thirdpart.php');?>
</body>
</html>