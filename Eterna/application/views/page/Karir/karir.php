<!DOCTYPE html>
<html lang="en">
<?php
function tanggal_indo($tanggal, $cetak_hari = false)
{
	$hari = array ( 1 =>    'Senin',
				'Selasa',
				'Rabu',
				'Kamis',
				'Jumat',
				'Sabtu',
				'Minggu'
			);
			
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split 	  = explode('-', $tanggal);
	$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
	
	if ($cetak_hari) {
		$num = date('N', strtotime($tanggal));
		return $hari[$num] . ', ' . $tgl_indo;
	}
	return $tgl_indo;
}
?>
<body>
	<main id="main">
		<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">
				<ol>
					<li><a href="<?php echo base_url()."index.php/WebHome";?>">Beranda</a></li>
				</ol>
				<h2>Karir</h2>
			</div>
		</section>
		<!-- ======= Blog Section ======= -->

		<!-- ======= Blog Section ======= -->
		<section id="blog" class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 entries">
						<?php
			            $con=mysqli_connect("localhost","root","","rskg_website");
			            if (mysqli_connect_errno())
			            {
			              echo "Failed to connect to MySQL: " . mysqli_connect_error();
			            }
			            $result = mysqli_query($con,"SELECT * FROM tb_karir WHERE status='SHOW' AND berkas IS NULL ORDER BY id DESC");

			            if(mysqli_num_rows($result)>0){
			            	while($row = mysqli_fetch_array($result))
			            {
			            ?>
						<article class="entry">
							<div class="entry-img" align="center">
							<?php
							if ($row['link_karir']==NULL) {
							?>
								<img src="<?php echo base_url('assets/images/karir/apply.jpg');?>" alt="" class="lingkaran">
							<?php }else{ ?>
								<img src="<?php echo base_url('assets/images/karir/'.$row['link_karir']);?>" alt="">
							<?php } ?>
							</div>
							<h2 class="entry-title">
								<a href="#"><?php echo $row['judul_karir']; ?></a>
							</h2>
							<div class="entry-meta">
								<ul>
									<li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#"><?php echo $row['admin_name']; ?></a></li>
									<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> Publish Date&nbsp;
										<a href="#">
										<?php
										$tanggalcreated = date('Y-m-d', strtotime($row['created_date']));
										echo" <time datetime='2020-01-01'>". tanggal_indo($tanggalcreated, true) ."</time>";
										?>
										</a>
									</li>
									<li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> Due Date&nbsp;
										<a href="#">
										<?php
										$tanggaldue = date('Y-m-d', strtotime($row['due_date']));
										echo" <time datetime='2020-01-01'>". tanggal_indo($tanggaldue, true) ."</time>";
										?>
										</a>
									</li>
								</ul>
							</div>
							<div class="entry-content">
								<?php echo $row['isi_karir']; ?>
								<div class="read-more">
									<a href="#">Daftar Karir</a>
								</div>
							</div>
						</article>
		             	<?php } } mysqli_close($con); ?>
					</div>
				</div>
			</div>
		</section>
	</main>
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
</html>