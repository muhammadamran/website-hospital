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
				<li class="breadcrumb-item"><a href="javascript:;">Pelayanan Medis</a></li>
				<li class="breadcrumb-item active">Pelayanan Medis Rumah Sakit Khusus Ginjal Ny. R.A. Habibie</li>
			</ol>
			<h1 class="page-header">Pelayanan Medis - Alur IGD</h1>
			<hr>
			<!-- MODAL ADD -->
			<div class="modal fade" id="modal-add">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Alur IGD</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminPelayananMedis/createalurigd" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="A-IGD<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Gambar Alur IGD<font style="color: red">*</font></label>
											<input type="file" class="form-control" name="alur_igd" required="required">
										</div>
									</div>	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Isi Content Alur IGD</label>
											<textarea class="ckeditor" id="ckedtor" name="isi_alurigd" placeholder="Isi Content Alur IGD..."></textarea>
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
			<!-- END MODAL ADD -->
			<div class="row">
				<div class="col-xl-12">
					<div class="panel panel-inverse">
						<div class="panel-heading">
							<h4 class="panel-title">Table - Alur IGD</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add" title="Tambah Agenda Rapat"><i class="nav-icon far fa-plus-square"></i> Add Alur IGD
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
									$result = mysqli_query($con,"SELECT * FROM tb_alurigd WHERE berkas IS NULL ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center' style='font-size: 14px;'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail$row[id]' title='Edit'><span class='btn btn-dark'><i class='fa fa-eye'></i> </span></a>
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
											<!-- DETAILS -->
											<div class="modal fade" id="detail<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Details Alur IGD</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Alur IGD</h5>
																		<hr>
																		<?php
																		if ($row['alur_igd']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Alur IGD</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/rumah-sakit/igd/alur/'. $row['alur_igd'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_alurigd" placeholder="Isi..."><?php echo $row['isi_alurigd'];?></textarea>
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
											<div class="modal fade" id="gambar<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Upload Gambar One</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updategambaralurigd/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div align="center">
																		<h5>Gambar Alur IGD</h5>
																		<hr>
																		<?php
																		if ($row['alur_igd']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Gambar Alur IGD</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/rumah-sakit/igd/alur/'. $row['alur_igd'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																</div>
																<hr>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Gambar Alur IGD</label>
																		<input type="file" class="form-control" name="alur_igd" value="<?php echo $row['alur_igd'];?>">
																		<input type="hidden" class="form-control" name="id" value="<?php echo $row['id'];?>">
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updategambaralurigd" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END GAMBAR -->

											<!-- ISI-->
											<div class="modal fade" id="isi<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Update Isi Alur IGD</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updateisialurigd/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Isi</label>
																		<textarea class="ckeditor" id="ckedtor" name="isi_alurigd" placeholder="Isi..."><?php echo $row['isi_alurigd'];?></textarea>
																	</div>
																</div>
															</div>
															<div class="form-group">
																<button type="submit" name="updateisialurigd" class="btn btn-block btn-primary">Update</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END ISI -->

											<!-- DELETE -->
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
															<?php echo form_open_multipart(site_url('AdminPelayananMedis/deletealurigd/'.$row['id'])); ?>
															<div class="form-group">
																<label>Anda yakin akan menghapus data ini?</label>
																<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
															</div>
															<button type="submit" name="deletealurigd" class="btn btn-danger btn-block btn-flat">Yes
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
											<div class="modal fade" id="hidden<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updatehiddenalurigd/'.$row['id']));?>
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
																<button type="submit" name="updatehiddenalurigd" class="btn btn-block btn-primary">Yes</button>
																<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">No</button>
															</div>
														</div>
													</form>
												</div>
												</div>
											</div>
											<!-- END HIDE -->

											<!-- SHOW -->
											<div class="modal fade" id="show<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Show or Hide</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminPelayananMedis/updateshowalurigd/'.$row['id']));?>
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
																<button type="submit" name="updateshowalurigd" class="btn btn-block btn-primary">Yes</button>
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
		</div>
	</div>
</body>
</html>