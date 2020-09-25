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
				<li class="breadcrumb-item active">Site Website Rumah Sakit Khusus Ginjal Ny. R.A. Habibie</li>
			</ol>
			<h1 class="page-header">Site Website - Beranda</h1>
			<hr>
			<!-- JUDUL -->
			<div class="modal fade" id="modal-add-judul">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Judul</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminBeranda/createjudul" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="JUDUL<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Judul Top</label><font style="color: red"> *</font>
											<input type="text" placeholder="Judul Top..." class="form-control" name="judul_top" required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Judul Bottom</label><font style="color: red"> *</font>
											<input type="text" placeholder="Judul Bottom..." class="form-control" name="judul_bottom" required="required">
										</div>
									</div>	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Posisi</label><font style="color: red"> *</font>
											<select type="text" class="form-control" name="letak" required="required">
												<option value="">-- Pilih Posisi --</option>
												<option value="Layout 1">Layout 1</option>
												<option value="Layout 2">Layout 2</option>
												<option value="Pelayanan">Pelayanan</option>
												<option value="Spesialis">Spesialis</option>
												<option value="Berita">Berita</option>
												<option value="Rekan">Rekan</option>
											</select>
										</div>
									</div>	
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
									<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Judul</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add-judul" title="Tambah Agenda Rapat"><i class="nav-icon far fa-plus-square"></i> Add Judul
							</button>
							&nbsp;&nbsp;&nbsp;&nbsp;
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
										<th class="text-nowrap">Posisi</th>
										<th class="text-nowrap">Details</th>
										<th class="text-nowrap">Action</th>
										<th class="text-nowrap">Berkas</th>
										<th class="text-nowrap">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$con=mysqli_connect("localhost","root","","rskg_website");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT * FROM tb_judul WHERE berkas IS NULL ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>".$row['letak'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail-judul$row[id]' title='Edit'><span class='btn btn-dark btn-sm'><i class='fa fa-eye'></i> </span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#isi-judul$row[id]' title='Judul One'><span class='btn btn-success btn-sm'><small>Edit</small></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#delete-judul$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><small>Hapus</small></span></a>
											</td>";
											if ($row['status']=='SHOW') {
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#hidden-judul$row[id]' title='Edit'><span class='btn btn-success btn-sm'><i class='fas fa-check'></i></span></a>
												</td>";
											}else{
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#show-judul$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><i class='fas fa-times'></i></span></a>
												</td>";
											}
											echo "</tr>";
											?>
											<!-- DETAILS -->
											<div class="modal fade" id="detail-judul<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Details Judul</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Judul Top</label>
																		<input type="text" class="form-control" placeholder="Judul Top..." name="judul_top" value="<?php echo $row['judul_top'] ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Judul Bottom</label>
																		<input type="text" class="form-control" placeholder="Judul Bottom..." name="judul_bottom" value="<?php echo $row['judul_bottom'] ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Posisi</label>
																		<input type="text" class="form-control" placeholder="Posisi..." name="letak" value="<?php echo $row['letak'] ?>">
																	</div>
																</div>
															</div>
															<hr>
															<div class="form-group">
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- END DETAILS -->

											<!-- ISI-->
											<div class="modal fade" id="isi-judul<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Update Isi Beranda</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updateisijudul/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Judul Top</label>
																		<input type="text" class="form-control" placeholder="Judul Top..." name="judul_top" value="<?php echo $row['judul_top'] ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Judul Bottom</label>
																		<input type="text" class="form-control" placeholder="Judul Bottom..." name="judul_bottom" value="<?php echo $row['judul_bottom'] ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Posisi</label>
																		<select type="text" class="form-control" name="letak" required="required">
																			<option value="<?php echo $row['letak'] ?>"><?php echo $row['letak'] ?></option>
																			<option value="">-- Pilih Posisi --</option>
																			<option value="Layout 1">Layout 1</option>
																			<option value="Layout 2">Layout 2</option>
																			<option value="Pelayanan">Pelayanan</option>
																			<option value="Spesialis">Spesialis</option>
																			<option value="Berita">Berita</option>
																			<option value="Rekan">Rekan</option>
																		</select>
																	</div>
																</div>	
															</div>
															<div class="form-group">
																<button type="submit" name="updateisijudul" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END ISI -->

											<!-- DELETE -->
											<div class="modal fade" id="delete-judul<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Hapus Profile</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart(site_url('AdminBeranda/deletejudul/'.$row['id'])); ?>
															<div class="form-group">
																<label>Anda yakin akan menghapus data ini?</label>
																<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
															</div>
															<button type="submit" name="deletejudul" class="btn btn-danger btn-block btn-flat">Yes
															</button>
															<button type="button" class="btn btn-warning btn-block btn-flat" data-dismiss="modal">
																No
															</button>
														</form>
													</div>
												</div>
												</div>
											</div>
											<!-- END DELETE -->

											<!-- HIDE -->
											<div class="modal fade" id="hidden-judul<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updatehiddenjudul/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Hidden this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="HIDDEN">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updatehiddenjudul" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END HIDE -->

											<!-- SHOW -->
											<div class="modal fade" id="show-judul<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updateshowjudul/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Show this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="SHOW">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateshowjudul" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END SHOW -->
									<?php } } mysqli_close($con); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- END JUDUL -->
			<!-- SLIDER -->
			<div class="modal fade" id="modal-add-slider">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Slider</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminBeranda/createslider" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="SLIDER<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Gambar Beranda</label>
											<input type="file" class="form-control" name="slider">
										</div>
									</div>	
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
									<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Slider</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add-slider" title="Tambah Agenda Rapat"><i class="nav-icon far fa-plus-square"></i> Add Slider
							</button>
							&nbsp;&nbsp;&nbsp;&nbsp;
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
										<th class="text-nowrap">Details</th>
										<th class="text-nowrap">Action</th>
										<th class="text-nowrap">Berkas</th>
										<th class="text-nowrap">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$con=mysqli_connect("localhost","root","","rskg_website");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT * FROM tb_slider WHERE berkas IS NULL ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail-slide$row[id]' title='Edit'><span class='btn btn-dark btn-sm'><i class='fa fa-eye'></i> </span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#gambar-slide$row[id]' title='Gambar'><span class='btn btn-dark btn-sm'><i class='fas fa-camera'></i></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#delete-slide$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><small>Hapus</small></span></a>
											</td>";
											if ($row['status']=='SHOW') {
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#hidden-slide$row[id]' title='Edit'><span class='btn btn-success btn-sm'><i class='fas fa-check'></i></span></a>
												</td>";
											}else{
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#show-slide$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><i class='fas fa-times'></i></span></a>
												</td>";
											}
											echo "</tr>";
											?>
											<!-- DETAILS -->
											<div class="modal fade" id="detail-slide<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Details Slider</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Slider</h5>
																		<hr>
																		<?php
																		if ($row['slider']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Slider</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/slide/'. $row['slider'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
															</div>
															<hr>
															<div class="form-group">
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- END DETAILS -->

											<!-- GAMBAR -->
											<div class="modal fade" id="gambar-slide<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Upload Gambar Slider</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updategambarslider/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Slider</h5>
																		<hr>
																		<?php
																		if ($row['slider']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Slider</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/slide/'. $row['slider'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Gambar Slider</label>
																		<input type="file" class="form-control" name="slider" value="<?php echo $row['slider'];?>">
																		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updategambarslider" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END GAMBAR -->

											<!-- DELETE -->
											<div class="modal fade" id="delete-slide<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Hapus Slider</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart(site_url('AdminBeranda/deleteslider/'.$row['id'])); ?>
															<div class="form-group">
																<label>Anda yakin akan menghapus data ini?</label>
																<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
															</div>
															<button type="submit" name="deleteslider" class="btn btn-danger btn-block btn-flat">Yes
															</button>
															<button type="button" class="btn btn-warning btn-block btn-flat" data-dismiss="modal">
																No
															</button>
														</form>
													</div>
												</div>
												</div>
											</div>
											<!-- END DELETE -->

											<!-- HIDE -->
											<div class="modal fade" id="hidden-slide<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updatehiddenslider/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Hidden this data?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="HIDDEN">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updatehiddenslider" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END HIDE -->

											<!-- SHOW -->
											<div class="modal fade" id="show-slide<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updateshowslider/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Show this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="SHOW">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateshowslider" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END SHOW -->
									<?php } } mysqli_close($con); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- END SLIDER -->
			
			<!-- LAYOUT -->
			<div class="modal fade" id="modal-add-layoutone">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Layout 1</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminBeranda/createlyone" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="LYONE<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Link YouTube<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="link_one" placeholder="Link YouTube..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Isi Content<font style="color: red">*</font></label>
											<textarea class="ckeditor" id="ckedtor" name="isi_one" placeholder="Isi Content..."></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
									<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal fade" id="modal-add-layouttwo">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Layout 2</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminBeranda/createlytwo" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="LYTWO<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Gambar Layout</label>
											<input type="file" class="form-control" name="link_two">
										</div>
									</div>	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Isi Content<font style="color: red">*</font></label>
											<textarea class="ckeditor" id="ckedtor" name="isi_two" placeholder="Isi Content..."></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
									<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- LAYOUT 1 -->
				<div class="col-xl-6">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Layout 1</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add-layoutone" title="Tambah Agenda Rapat"><i class="nav-icon far fa-plus-square"></i> Add Layout 1
							</button>
							&nbsp;&nbsp;&nbsp;&nbsp;
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
										<th class="text-nowrap">Details</th>
										<th class="text-nowrap">Action</th>
										<th class="text-nowrap">Berkas</th>
										<th class="text-nowrap">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$con=mysqli_connect("localhost","root","","rskg_website");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT * FROM tb_layoutone WHERE berkas IS NULL ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail-lyone$row[id]' title='Edit'><span class='btn btn-dark btn-sm'><i class='fa fa-eye'></i> </span></a>
											</td>";
											echo "<td width='300px'>
											<a href='#' data-toggle='modal' data-target='#isi-lyone$row[id]' title='Judul One'><span class='btn btn-dark btn-sm'><i class='fas fa-bars'></i></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#delete-lyone$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><small>Hapus</small></span></a>
											</td>";
											if ($row['status']=='SHOW') {
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#hidden-lyone$row[id]' title='Edit'><span class='btn btn-success btn-sm'><i class='fas fa-check'></i></span></a>
												</td>";
											}else{
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#show-lyone$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><i class='fas fa-times'></i></span></a>
												</td>";
											}
											echo "</tr>";
											?>
											<!-- DETAILS -->
											<div class="modal fade" id="detail-lyone<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Details Beranda</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<iframe width="100%" height="100%" class="img-fluid" alt="" src="<?php echo $row['link_one']; ?>">
																	</iframe>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_one" placeholder="Isi..."><?php echo $row['isi_one'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- END DETAILS -->

											<!-- ISI-->
											<div class="modal fade" id="isi-lyone<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Update Isi Beranda</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updateisilyone/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Link YouTube</label>
																		<input type="text" name="link_one" class="form-control" value="<?php echo $row['link_one'];?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_one" placeholder="Isi..."><?php echo $row['isi_one'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateisilyone" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END ISI -->

											<!-- DELETE -->
											<div class="modal fade" id="delete-lyone<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Hapus Profile</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart(site_url('AdminBeranda/deletelyone/'.$row['id'])); ?>
															<div class="form-group">
																<label>Anda yakin akan menghapus data ini?</label>
																<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
															</div>
															<button type="submit" name="deletelyone" class="btn btn-danger btn-block btn-flat">Yes
															</button>
															<button type="button" class="btn btn-warning btn-block btn-flat" data-dismiss="modal">
																No
															</button>
														</form>
													</div>
												</div>
												</div>
											</div>
											<!-- END DELETE -->

											<!-- HIDE -->
											<div class="modal fade" id="hidden-lyone<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updatehiddenlyone/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Hidden this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="HIDDEN">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updatehiddenlyone" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END HIDE -->

											<!-- SHOW -->
											<div class="modal fade" id="show-lyone<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updateshowlyone/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Show this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="SHOW">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateshowlyone" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END SHOW -->
									<?php } } mysqli_close($con); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- END LAYOUT 1 -->
				<!-- LAYOUT 2 -->
				<div class="col-xl-6">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Layout 2</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add-layouttwo" title="Tambah Agenda Rapat"><i class="nav-icon far fa-plus-square"></i> Add Layout 2
							</button>
							&nbsp;&nbsp;&nbsp;&nbsp;
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
										<th class="text-nowrap">Details</th>
										<th class="text-nowrap">Action</th>
										<th class="text-nowrap">Berkas</th>
										<th class="text-nowrap">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$con=mysqli_connect("localhost","root","","rskg_website");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT * FROM tb_layouttwo WHERE berkas IS NULL ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail-lytwo$row[id]' title='Edit'><span class='btn btn-dark btn-sm'><i class='fa fa-eye'></i> </span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#gambar-lytwo$row[id]' title='Gambar'><span class='btn btn-dark btn-sm'><i class='fas fa-camera'></i></span></a>
											<a href='#' data-toggle='modal' data-target='#isi-lytwo$row[id]' title='Judul One'><span class='btn btn-dark btn-sm'><i class='fas fa-bars'></i></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#delete-lytwo$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><small>Hapus</small></span></a>
											</td>";
											if ($row['status']=='SHOW') {
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#hidden-lytwo$row[id]' title='Edit'><span class='btn btn-success btn-sm'><i class='fas fa-check'></i></span></a>
												</td>";
											}else{
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#show-lytwo$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><i class='fas fa-times'></i></span></a>
												</td>";
											}
											echo "</tr>";
											?>
											<!-- DETAILS -->
											<div class="modal fade" id="detail-lytwo<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Details Layout 2</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Layout 2</h5>
																		<hr>
																		<?php
																		if ($row['link_two']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Layout 2</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/layout2/'. $row['link_two'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_two" placeholder="Isi..."><?php echo $row['isi_two'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- END DETAILS -->

											<!-- GAMBAR -->
											<div class="modal fade" id="gambar-lytwo<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Upload Gambar Layout 2</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updategambarlytwo/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Layout 2</h5>
																		<hr>
																		<?php
																		if ($row['link_two']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Layout 2</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/layout2/'. $row['link_two'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Gambar Layout 2</label>
																		<input type="file" class="form-control" name="link_two" value="<?php echo $row['link_two'];?>">
																		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updategambarlytwo" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END GAMBAR -->

											<!-- ISI-->
											<div class="modal fade" id="isi-lytwo<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Update Isi Layout 2</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updateisilytwo/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_two" placeholder="Isi..."><?php echo $row['isi_two'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateisilytwo" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END ISI -->

											<!-- DELETE -->
											<div class="modal fade" id="delete-lytwo<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Hapus Profile</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart(site_url('AdminBeranda/deletelytwo/'.$row['id'])); ?>
															<div class="form-group">
																<label>Anda yakin akan menghapus data ini?</label>
																<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
															</div>
															<button type="submit" name="deletelytwo" class="btn btn-danger btn-block btn-flat">Yes
															</button>
															<button type="button" class="btn btn-warning btn-block btn-flat" data-dismiss="modal">
																No
															</button>
														</form>
													</div>
												</div>
												</div>
											</div>
											<!-- END DELETE -->

											<!-- HIDE -->
											<div class="modal fade" id="hidden-lytwo<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updatehiddenlytwo/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Hidden this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="HIDDEN">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updatehiddenlytwo" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END HIDE -->

											<!-- SHOW -->
											<div class="modal fade" id="show-lytwo<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updateshowlytwo/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Show this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="SHOW">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateshowlytwo" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END SHOW -->
									<?php } } mysqli_close($con); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- END LAYOUT 2 -->
			</div>
			<!-- END LAYOUT -->
			<!-- LAYOUT PELAYANAN -->
			<!-- <div class="modal fade" id="modal-add-pelayanan">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Pelayanan</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminBeranda/createrekan" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="PELAYANAN<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Gambar Beranda</label>
											<input type="file" class="form-control" name="rekan">
										</div>
									</div>	
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
									<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Pelayanan Introduction</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add-pelayanan" title="Tambah Agenda Rapat"><i class="nav-icon far fa-plus-square"></i> Add Pelayanan Introduction
							</button>
							&nbsp;&nbsp;&nbsp;&nbsp;
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
										<th class="text-nowrap">Details</th>
										<th class="text-nowrap">Action</th>
										<th class="text-nowrap">Berkas</th>
										<th class="text-nowrap">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$con=mysqli_connect("localhost","root","","rskg_website");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT * FROM tb_pelayanan WHERE berkas IS NULL ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail$row[id]' title='Edit'><span class='btn btn-dark btn-sm'><i class='fa fa-eye'></i> </span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#gambar$row[id]' title='Gambar'><span class='btn btn-dark btn-sm'><small>Gambar</small></span></a>
											<a href='#' data-toggle='modal' data-target='#isi$row[id]' title='Judul One'><span class='btn btn-dark btn-sm'><small>Isi</small></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#delete$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><small>Hapus</small></span></a>
											</td>";
											if ($row['status']=='SHOW') {
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#hidden$row[id]' title='Edit'><span class='btn btn-success btn-sm'><i class='fas fa-check'></i></span></a>
												</td>";
											}else{
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#show$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><i class='fas fa-times'></i></span></a>
												</td>";
											}
											echo "</tr>";
											?>
											<div class="modal fade" id="detail<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Details Beranda</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Beranda</h5>
																		<hr>
																		<?php
																		if ($row['link_admri']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Beranda</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/rumah-sakit/rawat-inap/adm/'. $row['link_admri'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_admri" placeholder="Isi..."><?php echo $row['isi_admri'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="modal fade" id="gambar<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Upload Gambar One</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updategambaradmri/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Beranda</h5>
																		<hr>
																		<?php
																		if ($row['link_admri']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Beranda</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/rumah-sakit/rawat-inap/adm/'. $row['link_admri'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Gambar Beranda</label>
																		<input type="file" class="form-control" name="link_admri" value="<?php echo $row['link_admri'];?>">
																		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updategambaradmri" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>

											<div class="modal fade" id="isi<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Update Isi Beranda</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updateisiadmri/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_admri" placeholder="Isi..."><?php echo $row['isi_admri'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateisiadmri" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>

											<div class="modal fade" id="delete<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Hapus Profile</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart(site_url('AdminPelayananMedis/deleteadmri/'.$row['id'])); ?>
															<div class="form-group">
																<label>Anda yakin akan menghapus data ini?</label>
																<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
															</div>
															<button type="submit" name="deleteadmri" class="btn btn-danger btn-block btn-flat">Yes
															</button>
															<button type="button" class="btn btn-warning btn-block btn-flat" data-dismiss="modal">
																No
															</button>
														</form>
													</div>
												</div>
												</div>
											</div>

											<div class="modal fade" id="hidden<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updatehiddenadmri/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Hidden this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="HIDDEN">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updatehiddenadmri" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>

											<div class="modal fade" id="show<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updateshowadmri/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Show this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="SHOW">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateshowadmri" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
									<?php } } mysqli_close($con); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div> -->
			<!-- END LAYOUT PELAYANAN -->
			<!-- LAYOUT SPESIALIS -->
			<!-- <div class="modal fade" id="modal-add-spesialis">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Spesialis</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminBeranda/createrekan" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="SPESIALIS<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Gambar Beranda</label>
											<input type="file" class="form-control" name="rekan">
										</div>
									</div>	
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
									<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Spesialis</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add-spesialis" title="Tambah Agenda Rapat"><i class="nav-icon far fa-plus-square"></i> Add Spesialis
							</button>
							&nbsp;&nbsp;&nbsp;&nbsp;
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
										<th class="text-nowrap">Details</th>
										<th class="text-nowrap">Action</th>
										<th class="text-nowrap">Berkas</th>
										<th class="text-nowrap">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$con=mysqli_connect("localhost","root","","rskg_website");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT * FROM tb_spesialis WHERE berkas IS NULL ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail$row[id]' title='Edit'><span class='btn btn-dark btn-sm'><i class='fa fa-eye'></i> </span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#gambar$row[id]' title='Gambar'><span class='btn btn-dark btn-sm'><small>Gambar</small></span></a>
											<a href='#' data-toggle='modal' data-target='#isi$row[id]' title='Judul One'><span class='btn btn-dark btn-sm'><small>Isi</small></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#delete$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><small>Hapus</small></span></a>
											</td>";
											if ($row['status']=='SHOW') {
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#hidden$row[id]' title='Edit'><span class='btn btn-success btn-sm'><i class='fas fa-check'></i></span></a>
												</td>";
											}else{
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#show$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><i class='fas fa-times'></i></span></a>
												</td>";
											}
											echo "</tr>";
											?>
											<div class="modal fade" id="detail<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Details Beranda</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Beranda</h5>
																		<hr>
																		<?php
																		if ($row['link_admri']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Beranda</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/rumah-sakit/rawat-inap/adm/'. $row['link_admri'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_admri" placeholder="Isi..."><?php echo $row['isi_admri'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="modal fade" id="gambar<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Upload Gambar One</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updategambaradmri/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Beranda</h5>
																		<hr>
																		<?php
																		if ($row['link_admri']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Beranda</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/rumah-sakit/rawat-inap/adm/'. $row['link_admri'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Gambar Beranda</label>
																		<input type="file" class="form-control" name="link_admri" value="<?php echo $row['link_admri'];?>">
																		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updategambaradmri" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>

											<div class="modal fade" id="isi<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Update Isi Beranda</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updateisiadmri/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_admri" placeholder="Isi..."><?php echo $row['isi_admri'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateisiadmri" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>

											<div class="modal fade" id="delete<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Hapus Profile</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart(site_url('AdminPelayananMedis/deleteadmri/'.$row['id'])); ?>
															<div class="form-group">
																<label>Anda yakin akan menghapus data ini?</label>
																<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
															</div>
															<button type="submit" name="deleteadmri" class="btn btn-danger btn-block btn-flat">Yes
															</button>
															<button type="button" class="btn btn-warning btn-block btn-flat" data-dismiss="modal">
																No
															</button>
														</form>
													</div>
												</div>
												</div>
											</div>

											<div class="modal fade" id="hidden<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updatehiddenadmri/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Hidden this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="HIDDEN">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updatehiddenadmri" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>

											<div class="modal fade" id="show<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updateshowadmri/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Show this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="SHOW">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateshowadmri" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
									<?php } } mysqli_close($con); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div> -->
			<!-- END LAYOUT SPESIALIS -->
			<!-- LAYOUT REKANAN -->
			<div class="modal fade" id="modal-add-rekanan">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Rekanan/Mitra</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminBeranda/createrekan" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="REKAN<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Gambar Beranda</label>
											<input type="file" class="form-control" name="rekan">
										</div>
									</div>	
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<button type="submit" name="submit" class="btn btn-block btn-primary">Submit</button>
									<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Rekanan/Mitra</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add-rekanan" title="Add Rekanan/Mitra"><i class="nav-icon far fa-plus-square"></i> Add Rekanan/Mitra
							</button>
							&nbsp;&nbsp;&nbsp;&nbsp;
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
										<th class="text-nowrap">Details</th>
										<th class="text-nowrap">Action</th>
										<th class="text-nowrap">Berkas</th>
										<th class="text-nowrap">Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$con=mysqli_connect("localhost","root","","rskg_website");
									if (mysqli_connect_errno())
									{
										echo "Failed to connect to MySQL: " . mysqli_connect_error();
									}
									$result = mysqli_query($con,"SELECT * FROM tb_rekan WHERE berkas IS NULL ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail-rekan$row[id]' title='Edit'><span class='btn btn-dark btn-sm'><i class='fa fa-eye'></i> </span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#gambar-rekan$row[id]' title='Gambar'><span class='btn btn-dark btn-sm'><i class='fas fa-camera'></i></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#delete-rekan$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><small>Hapus</small></span></a>
											</td>";
											if ($row['status']=='SHOW') {
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#hidden-rekan$row[id]' title='Edit'><span class='btn btn-success btn-sm'><i class='fas fa-check'></i></span></a>
												</td>";
											}else{
												echo "<td>
												<a href='#' data-toggle='modal' data-target='#show-rekan$row[id]' title='Delete'><span class='btn btn-danger btn-sm'><i class='fas fa-times'></i></span></a>
												</td>";
											}
											echo "</tr>";
											?>
											<!-- DETAILS -->
											<div class="modal fade" id="detail-rekan<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Details Rekan/Mitra</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Rekan/Mitra</h5>
																		<hr>
																		<?php
																		if ($row['rekan']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Rekan/Mitra</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/img/clients/'. $row['rekan'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
															</div>
															<hr>
															<div class="form-group">
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!-- END DETAILS -->

											<!-- GAMBAR -->
											<div class="modal fade" id="gambar-rekan<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Upload Gambar Rekan/Mitra</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updategambarrekan/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Rekan/Mitra</h5>
																		<hr>
																		<?php
																		if ($row['rekan']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Rekan/Mitra</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/img/clients/'. $row['rekan'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Gambar Rekan/Mitra</label>
																		<input type="file" class="form-control" name="rekan" value="<?php echo $row['rekan'];?>">
																		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updategambarrekan" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END GAMBAR -->

											<!-- DELETE -->
											<div class="modal fade" id="delete-rekan<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Hapus Rekan/Mitra</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<?php echo form_open_multipart(site_url('AdminBeranda/deleterekan/'.$row['id'])); ?>
															<div class="form-group">
																<label>Anda yakin akan menghapus data ini?</label>
																<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
															</div>
															<button type="submit" name="deleterekan" class="btn btn-danger btn-block btn-flat">Yes
															</button>
															<button type="button" class="btn btn-warning btn-block btn-flat" data-dismiss="modal">
																No
															</button>
														</form>
													</div>
												</div>
												</div>
											</div>
											<!-- END DELETE -->

											<!-- HIDE -->
											<div class="modal fade" id="hidden-rekan<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updatehiddenrekan/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Hidden this data?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="HIDDEN">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updatehiddenrekan" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END HIDE -->

											<!-- SHOW -->
											<div class="modal fade" id="show-rekan<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminBeranda/updateshowrekan/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Are you sure for Show this Profile?</label>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<input type="hidden" class="form-control" name="status" value="SHOW">
																		<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateshowrekan" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END SHOW -->
									<?php } } mysqli_close($con); ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- END LAYOUT REKANAN -->
		</div>
	</div>
</body>
</html>