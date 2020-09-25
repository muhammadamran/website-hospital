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
	<!-- THEME -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url('theme/css/animate.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('theme/css/owl.carousel.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('theme/css/owl.theme.default.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('theme/css/magnific-popup.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('theme/css/flaticon.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('theme/css/style.css');?>">
</head>
