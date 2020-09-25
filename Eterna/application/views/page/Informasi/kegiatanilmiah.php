<!DOCTYPE html>
<html lang="en">
<body>
	<main id="main">
		<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">
				<ol>
					<li><a href="<?php echo base_url()."index.php/WebHome";?>">Beranda</a></li>
					<li>Informasi</li>
				</ol>
				<h2>Kegiatan Ilmiah</h2>
			</div>
		</section>
		<!-- ======= Blog Section ======= -->

		<!-- ======= Blog Section ======= -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 entries">
						<article class="entry">
							<div class="entry-img">
								<img src="<?php echo base_url('assets/images/empty/slide-empty.png');?>" alt="" class="img-fluid">
							</div>
							<h2 class="entry-title">
								<a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
							</h2>
							<div class="entry-meta">
								<ul>
									<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
									<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
									<li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
								</ul>
							</div>
							<div class="entry-content">
								<p>
									Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
									Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
								</p>
								<div class="read-more">
									<a href="blog-single.html">Read More</a>
								</div>
							</div>
						</article>
						<!-- End pagination -->
						<div class="blog-pagination">
							<ul class="justify-content-center">
								<li class="disabled"><i class="icofont-rounded-left"></i></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="icofont-rounded-right"></i></a></li>
							</ul>
						</div>
						<!-- End pagination -->
					</div>
					<!-- blog sidebar -->
					<div class="col-lg-4">
						<div class="sidebar">
							<h3 class="sidebar-title">Cari</h3>
							<div class="sidebar-item search-form">
								<form action="">
									<input type="text" placeholder="Cari disini...">
									<button type="submit"><i class="icofont-search"></i></button>
								</form>
							</div>

							<h3 class="sidebar-title">Kategori</h3>
							<div class="sidebar-item categories">
								<ul>
									<li><a href="#">Artikel Kesehatan <span>(25)</span></a></li>
									<li><a href="#">Buletin <span>(12)</span></a></li>
									<li><a href="#">Informasi Umum <span>(5)</span></a></li>
								</ul>
							</div>
							<h3 class="sidebar-title">Berita Terbaru</h3>
							<div class="sidebar-item recent-posts">
								
								<div class="post-item clearfix">
									<img src="<?php echo base_url('assets/img/blog-recent-1.jpg');?>" alt="">
									<h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

								<div class="post-item clearfix">
									<img src="<?php echo base_url('assets/img/blog-recent-1.jpg');?>" alt="">
									<h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
									<time datetime="2020-01-01">Jan 1, 2020</time>
								</div>

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
						<!-- End sidebar -->
					</div>
					<!-- End blog sidebar -->
				</div>
			</div>
		</section>
	</main>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
</html>