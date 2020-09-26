<!DOCTYPE html>
<html lang="en">
<style>
	body {font-family: Arial;}

	/* Style the tab */
	.tab {
		overflow: hidden;
		border: 1px solid #ffff;
		background-color: #ffff;
	}

	/* Style the buttons inside the tab */
	.tab button {
		background-color: inherit;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 14px 16px;
		transition: 0.3s;
		font-size: 17px;
		border: 1px dashed #eee;
	}

	/* Change background color of buttons on hover */
	.tab button:hover {
		background-color: #28a745;
		color: #ffff;
		border: 1px dashed #eee;
	}

	/* Create an active/current tablink class */
	.tab button.active {
		background-color: #28a745;
		color: #ffff;
		border: 1px dashed #eee;
	}

	/* Style the tab content */
	.tabcontent {
		display: none;
		padding: 6px 12px;
		border: 1px dashed #eee;
		border-top: none;
	}

	/* Style the close button */
	.topright {
		float: right;
		cursor: pointer;
		font-size: 28px;
	}

	.topright:hover {
		color: red;
	}

	/* Youtube Responsive */
	.post-body iframe {width:100%!important;}
	@media screen and (max-width:960px){
	  .post-body iframe {max-height:90%}
	}
	@media screen and (max-width:768px){
	  .post-body iframe {max-height:75%}
	}
	@media screen and (max-width:600px){
	  .post-body iframe {max-height:60%}
	}
	@media screen and (max-width:480px){
	  .post-body iframe {height:auto!important;max-height:auto!important}
	}
</style>
<body>
	<main id="main">
		<!-- ======= PAGE TITLE ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">
				<ol>
					<li><a href="<?php echo base_url()."index.php/WebHome";?>">Beranda</a></li>
					<li>Tentang Kami</li>
				</ol>
				<h2>Rumah Sakit Khusus Ginjal Ny. R.A. Habibie</h2>
			</div>
		</section>
		<!-- ======= Blog Section ======= -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 entries">
						<article class="entry entry-single">
							<div align="center">
								<!-- <img src="<?php echo base_url('assets/img/blog-1.jpg');?>" alt="" class="img-fluid"> -->
							<?php
						    $con=mysqli_connect("localhost","root","","rskg_website");
						    if (mysqli_connect_errno())
						    {
						        echo "Failed to connect to MySQL: " . mysqli_connect_error();
						    }
						    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
							<?php
							if ($row['link_1']==NULL) {
							?>
								<img src="<?php echo base_url('assets/images/empty/img-empty.png');?>" alt="" class="img-fluid">
							<?php
							}else{
							?>
								<img src="<?php echo base_url('assets/images/rumah-sakit/'.$row['link_1']);?>" alt="" class="img-fluid">
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
						    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
								<a href=""><?php echo $row['judul_1']; ?></a>
							<?php } } mysqli_close($con); ?>
							</h2>
							<div class="entry-content">
							<?php
						    $con=mysqli_connect("localhost","root","","rskg_website");
						    if (mysqli_connect_errno())
						    {
						        echo "Failed to connect to MySQL: " . mysqli_connect_error();
						    }
						    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
							<?php echo $row['isi_1']; ?>
							<?php } } mysqli_close($con); ?>
							</div>
							<?php
						    $con=mysqli_connect("localhost","root","","rskg_website");
						    if (mysqli_connect_errno())
						    {
						        echo "Failed to connect to MySQL: " . mysqli_connect_error();
						    }
						    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
							<div align="center">
								<!-- <iframe controls><source src="https://www.youtube.com/embed/<?php echo $row['link_2'];?>"></iframe> -->
								<iframe id="ytplayer" type="text/html" width="720" height="405"
								src="https://www.youtube.com/embed/<?php echo $row['link_2'];?>"
								frameborder="0" allowfullscreen>
								</iframe>
							</div>
							<?php } } mysqli_close($con); ?>
							<hr>
							<h2 class="entry-title">
							<?php
						    $con=mysqli_connect("localhost","root","","rskg_website");
						    if (mysqli_connect_errno())
						    {
						        echo "Failed to connect to MySQL: " . mysqli_connect_error();
						    }
						    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
								<a href=""><?php echo $row['judul_2']; ?></a>
							<?php } } mysqli_close($con); ?>
							</h2>
							<div class="entry-content">
							<?php
						    $con=mysqli_connect("localhost","root","","rskg_website");
						    if (mysqli_connect_errno())
						    {
						        echo "Failed to connect to MySQL: " . mysqli_connect_error();
						    }
						    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

						    if(mysqli_num_rows($result)>0){
						        while($row = mysqli_fetch_array($result))
						        {
							?>
							<?php echo $row['isi_2']; ?>
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
										<li><a href="#">Ginjal</a></li>
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
				</div>
			</div>
		</section>

		<section id="blog" class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 entries">
						<article class="entry entry-single">
							<div class="tab">
								<button class="tablinks" onclick="openCity(event, 'MOTTO')" id="defaultOpen"><b><font style="font-family: Roboto"><i class="icofont-checked"></i> MOTTO</font></b></button>
								<button class="tablinks" onclick="openCity(event, 'VISI')"><b><font style="font-family: Roboto"><i class="icofont-checked"></i> VISI</font></b></button>
								<button class="tablinks" onclick="openCity(event, 'MISI')"><b><font style="font-family: Roboto"><i class="icofont-checked"></i> MISI</font></b></button>
							</div>
							<div id="MOTTO" class="tabcontent">
								<?php
							    $con=mysqli_connect("localhost","root","","rskg_website");
							    if (mysqli_connect_errno())
							    {
							        echo "Failed to connect to MySQL: " . mysqli_connect_error();
							    }
							    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

							    if(mysqli_num_rows($result)>0){
							        while($row = mysqli_fetch_array($result))
							        {
								?>
								<?php echo $row['motto']; ?>
								<?php } } mysqli_close($con); ?>
							</div>
							<div id="VISI" class="tabcontent">
								<?php
							    $con=mysqli_connect("localhost","root","","rskg_website");
							    if (mysqli_connect_errno())
							    {
							        echo "Failed to connect to MySQL: " . mysqli_connect_error();
							    }
							    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

							    if(mysqli_num_rows($result)>0){
							        while($row = mysqli_fetch_array($result))
							        {
								?>
								<?php echo $row['visi']; ?>
								<?php } } mysqli_close($con); ?>
							</div>
							<div id="MISI" class="tabcontent">
								<?php
							    $con=mysqli_connect("localhost","root","","rskg_website");
							    if (mysqli_connect_errno())
							    {
							        echo "Failed to connect to MySQL: " . mysqli_connect_error();
							    }
							    $result = mysqli_query($con,"SELECT * FROM tb_rumahsakit WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

							    if(mysqli_num_rows($result)>0){
							        while($row = mysqli_fetch_array($result))
							        {
								?>
								<?php echo $row['misi']; ?>
								<?php } } mysqli_close($con); ?>
							</div>
							<script>
								function openCity(evt, cityName) {
									var i, tabcontent, tablinks;
									tabcontent = document.getElementsByClassName("tabcontent");
									for (i = 0; i < tabcontent.length; i++) {
										tabcontent[i].style.display = "none";
									}
									tablinks = document.getElementsByClassName("tablinks");
									for (i = 0; i < tablinks.length; i++) {
										tablinks[i].className = tablinks[i].className.replace(" active", "");
									}
									document.getElementById(cityName).style.display = "block";
									evt.currentTarget.className += " active";
								}
								document.getElementById("defaultOpen").click();
							</script>
						</article>
					</div>
				</div>
			</div>
		</section>
	</main>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<script> //<![CDATA[
/* Youtube Responsive by igniel.com */
window.onload = function ignielYtube() {
var youtube = $('iframe[src*="youtube.com"]');
youtube.each(function() {
$(this).attr('aspectRatio', this.height / this.width).attr('style', 'width:100%');
});
$(window).resize(function() {
youtube.each(function() {
$(this).attr('height', $(this).width() * $(this).attr('aspectRatio'));
});
}).resize();
};
//]]> </script>
</body>
</html>