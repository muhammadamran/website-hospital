<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	.lingkaran1{
		width: 40px;
		height: 40px;
		background: #ffffff;
		border-radius: 100%;
	}
	.lingkaran{
		width: 150px;
		height: 150px;
		background: #ffffff;
		border-radius: 100%;
	}
	.lingkaran3{
		width: 150px;
		height: 150px;
		background: #fff;
		border-radius: 100%;
	}
	.lingkaran4{
		width: 150px;
		height: 150px;
		background: #000000;
		background-color: #000000;
		border-radius: 100%;
	}
</style>
<body>
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
		<div id="content" class="content">
			<ol class="breadcrumb float-xl-right">
				<li class="breadcrumb-item"><a href="javascript:;">Site Website</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Kontak</a></li>
				<li class="breadcrumb-item active">Kontak Rumah Sakit Khusus Ginjal Ny. R.A. Habibie</li>
			</ol>
			<h1 class="page-header">Kontak - Hubungi (Pesan Pengunjung)</h1>
			<hr>
			<div class="row">
				<div class="col-xl-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Hubungi (Pesan Pengunjung)</h4>
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="panel-body">
							<table id="data-table-buttons" class="table table-striped table-bordered table-td-valign-middle">
								<thead>
									<tr align="center" style="font-size: 14px">
										<th class="text-nowrap">ID</th>
										<th class="text-nowrap">Kode</th>
										<th class="text-nowrap">Nama Pengunjung</th>
										<th class="text-nowrap">Email Pengunjung</th>
										<th class="text-nowrap">No. Tel Pengunjung</th>
										<th class="text-nowrap">Pesan Pengunjung</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$con=mysqli_connect("localhost","root","","rskg_website");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT * FROM tb_hubungi ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>".$row['nama_pengunjung'] . "</td>";
											echo "<td>".$row['email_pengunjung'] . "</td>";
											echo "<td>".$row['notel_pengunjung'] . "</td>";
											echo "<td>".$row['pesan'] . "</td>";
											echo "</tr>";
											?>
									<?php } } mysqli_close($con); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>