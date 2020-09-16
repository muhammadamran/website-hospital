<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
	<div class="container d-flex">
		<div class="contact-info mr-auto">
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
			<i class="icofont-envelope"></i><a href="mailto:<?php echo $row['mail'];?>"><?php echo $row['mail'];?></a>
			<i class="icofont-phone"></i> <?php echo $row['telepone'];?>
		<?php } } mysqli_close($con); ?>
		</div>

		<div class="social-links">
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
			<a href="<?php echo $row['twitter'];?>" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
			<a href="<?php echo $row['facebook'];?>" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
			<a href="<?php echo $row['instagram'];?>" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
			<a href="<?php echo $row['youtube'];?>" target="_blank" class="youtube"><i class="icofont-youtube"></i></a>
		<?php } } mysqli_close($con); ?>
		</div>
	</div>
</section>