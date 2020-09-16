<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Admin Panel | 404 Error Page</title>
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
		<div class="error">
			<div class="error-code">404</div>
			<div class="error-content">
				<div class="error-message">Ada kesalahan!!!</div>
				<div class="error-desc mb-3 mb-sm-4 mb-md-5">
					Periksa kembali Email Address dan Password anda!<br/>
					atau silahkan hubungi Unit Teknologi Informasi.
				</div>
				<div>
					<a href="<?php echo base_url()."index.php/Admin";?>" class="btn btn-success p-l-20 p-r-20">Kembali ke Halaman Login</a>
				</div>
			</div>
		</div>
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	</div>
	<script src="<?php echo base_url('nano/js/app.min.js');?>"></script>
	<script src="<?php echo base_url('nano/js/theme/default.min.js');?>"></script>
</body>
</html>