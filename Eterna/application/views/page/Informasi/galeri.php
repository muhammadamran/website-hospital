<!DOCTYPE html>
<html lang="en">
<body>
	<main id="main">
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">
				<ol>
					<li><a href="<?php echo base_url()."index.php/WebHome";?>">Beranda</a></li>
					<li>Informasi</li>
				</ol>
				<h2>Galeri</h2>
			</div>
		</section>
		<section id="portfolio" class="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<li data-filter=".filter-event">Events</li>
							<li data-filter=".filter-hospital">Hospital</li>
							<li data-filter=".filter-vidio">Vidio</li>
						</ul>
					</div>
				</div>
				<div class="row portfolio-container">
					<div class="col-lg-4 col-md-6 portfolio-item filter-event">
						<div class="portfolio-wrap">
							<img src="<?php echo base_url('assets/img/portfolio/portfolio-1.jpg')?>" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>App 1</h4>
								<p>App</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-hospital">
						<div class="portfolio-wrap">
							<img src="<?php echo base_url('assets/img/portfolio/portfolio-4.jpg')?>" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Card 2</h4>
								<p>Card</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 portfolio-item filter-vidio">
						<!-- <img src="<?php echo base_url('assets/img/portfolio/portfolio-5.jpg')?>" class="img-fluid" alt=""> -->
						<iframe width="100%" height="100%" class="img-fluid" alt="" src="https://www.youtube.com/embed/tgbNymZ7vqY">
						</iframe>
					</div>
				</div>
			</div>
		</section>
	</main>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
</html>