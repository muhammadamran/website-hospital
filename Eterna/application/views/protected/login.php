<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Admin Panel | Login Page</title>
	<link href="<?php echo base_url('assets/images/icon/icon.png');?>" rel="icon">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo base_url('nano/css/default/app.min.css');?>" rel="stylesheet" />
</head>
<body class="pace-top">
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<div id="page-container" class="fade">
		<div class="login login-with-news-feed">
			<div class="news-feed">
				<div class="news-image" style="background-image: url(<?php echo base_url('nano/img/login-bg/login-bg-11.jpg')?>)"></div>
				<div class="news-caption">
					<h4 class="caption-title"><b>Admin</b> Panel Website</h4>
					<p>
						Official Website RS. Khusus Ginjal Ny. R.A. Habibie ®.
					</p>
				</div>
			</div>
			<div class="right-content">
				<div class="login-header">
					<div class="brand">
						<span class="logo"></span> <b>Admin</b>Panel Website
						<!-- <small>development by Muhammad Amran</small> -->
						<small>RS. Khusus Ginjal Ny. R.A. Habibie ®.</small>
					</div>
					<div class="icon">
						<i class="fa fa-sign-in-alt"></i>
					</div>
				</div>
				<div class="login-content">
					<form method="POST" action="<?php echo base_url() ?>index.php/Admin/aksi_login">
						<div class="form-group m-b-15">
							<input type="email" class="form-control form-control-lg" placeholder="Email Address" name="username" required />
						</div>
						<div class="form-group m-b-15">
							<input type="password" class="form-control form-control-lg" placeholder="Password" name="password" required />
						</div>
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="remember_me_checkbox" value="" />
							<label for="remember_me_checkbox">
								Remember Me
							</label>
						</div>
						<div class="login-buttons">
							<button type="submit" class="btn btn-success btn-block btn-lg" name="submit">Login</button>
						</div>
						<div class="m-t-20 m-b-40 p-b-40 text-inverse">
							Jika belum memiliki Akun, silahkan hubungan Unit Teknologi Informasi atau buat ticket <a href="http://192.168.55.164/ITicket" target="_blank">ITicket</a> untuk membuat Akun.
						</div>
						<hr />
						<p class="text-center text-grey-darker mb-0">
							&copy; Teknologi Informasi <?php echo date('Y') ?>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url('nano/js/app.min.js');?>"></script>
	<script src="<?php echo base_url('nano/js/theme/default.min.js');?>"></script>
</body>
</html>
