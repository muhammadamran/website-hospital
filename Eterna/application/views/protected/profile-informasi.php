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
				<li class="breadcrumb-item"><a href="javascript:;">Profile</a></li>
				<li class="breadcrumb-item active">Profile Informasi</li>
			</ol>
			<h1 class="page-header">Profile - Informasi</h1>
			<hr>
			<!-- MODAL ADD -->
			<div class="modal fade" id="modal-add">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<label class="modal-title">Add Profile Information</label>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="POST" action="<?php echo base_url() ?>index.php/AdminProfile/create" enctype="multipart/form-data">
							<div class="modal-body">
								<div class="row">	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Code</label>
											<input type="text" class="form-control" name="kode" value="PI<?php echo date('YmdHis') ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="user_id" value="<?php echo $this->session->userdata("user_id"); ?>" readonly="readonly">
											<input type="hidden" class="form-control" name="status" value="SHOW" readonly="readonly">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Icon<font style="color: red">*</font></label>
											<input type="file" class="form-control" name="icon" placeholder="Icon..." required="required">
										</div>
									</div>	
									<div class="col-sm-12">
										<div class="form-group">
											<label>Title<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="title_head" placeholder="Title..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Email<font style="color: red">*</font></label>
											<input type="email" class="form-control" name="mail" placeholder="Email..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>No. Telephone<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="telepone" placeholder="No. Telephone..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>No. WhatsApp<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="whatsapp" placeholder="No. Telephone..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Alamat<font style="color: red">*</font></label>
											<textarea type="text" class="form-control" name="alamat" placeholder="Alamat" required="required"></textarea>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>URL Facebook<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="facebook" placeholder="URL Facebook..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>URL Twitter<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="twitter" placeholder="URL Twitter..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>URL YouTube<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="youtube" placeholder="URL YouTube..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>URL Instagram<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="instagram" placeholder="URL Instagram..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Slogan<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="slogan" placeholder="Slogan..." required="required">
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label>Pesan<font style="color: red">*</font></label>
											<input type="text" class="form-control" name="pesan" placeholder="Pesan..." required="required">
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
							<h4 class="panel-title">Table - Informasi RS. Khusus Ginjal Ny. R.A. Habibie</h4>
							<button class="btn bg-info btn-flat" data-toggle="modal" data-target="#modal-add" title="Tambah Agenda Rapat"><i class="nav-icon far fa-plus-square"></i> Add Profile Info
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
									<tr align="center">
										<th class="text-nowrap">ID</th>
										<th class="text-nowrap">CODE</th>
										<th class="text-nowrap">Details Informations</th>
										<th class="text-nowrap">Action</th>
										<th class="text-nowrap">Images Footer</th>
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
									$result = mysqli_query($con,"SELECT * FROM tb_profile ORDER BY id DESC");

									if(mysqli_num_rows($result)>0){
										while($row = mysqli_fetch_array($result))
										{
											echo "<tr align='center'>";
											echo "<td>".$row['id'] . "</td>";
											echo "<td>".$row['kode'] . "</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#detail$row[id]' title='Edit'><span class='btn btn-dark'><i class='fa fa-eye'></i> </span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#icon$row[id]' title='Upload Logo'><span class='btn btn-dark btn-sm'><small>Icon</small></span></a>
											<a href='#' data-toggle='modal' data-target='#logo$row[id]' title='Upload Logo'><span class='btn btn-dark btn-sm'><small>Logo</small></span></a>
											<a href='#' data-toggle='modal' data-target='#logofooter$row[id]' title='Upload Logo Footer'><span class='btn btn-dark btn-sm'><small>Logo Footer</small></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#footer1$row[id]' title='1'><span class='btn btn-dark btn-sm'><small>1</small></span></a>
											<a href='#' data-toggle='modal' data-target='#footer2$row[id]' title='2'><span class='btn btn-dark btn-sm'><small>2</small></span></a>
											<a href='#' data-toggle='modal' data-target='#footer3$row[id]' title='3'><span class='btn btn-dark btn-sm'><small>3</small></span></a>
											<a href='#' data-toggle='modal' data-target='#footer4$row[id]' title='4'><span class='btn btn-dark btn-sm'><small>4</small></span></a>
											</td>";
											echo "<td>
											<a href='#' data-toggle='modal' data-target='#edit$row[id]' title='Edit'><span class='btn btn-success btn-sm'><small>Edit</small></span></a>
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
											<!-- DETAIL -->
											<div class="modal fade" id="detail<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Detail Profile</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form method="post" action="">
																<div class="form-group">
																	<h6>ID : <b><u><?php echo $row['id'];?></u></b></h6>
																	<hr>
																	<div align="center">
																		<h5>Icon</h5>
																		<hr>
																		<?php
																		if ($row['icon']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Icon</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/icon/'. $row['icon'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																	<br>
																	<hr>
																	<div align="center">
																		<h5>Logo</h5>
																		<hr>
																		<?php
																		if ($row['logo']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Logo</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/logo/'. $row['logo'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																	<hr>
																	<div align="center">
																		<h5>Logo Footer</h5>
																		<hr>
																		<?php
																		if ($row['logo_footer']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Logo</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/footer/'. $row['logo_footer'];?>" class="lingkaran4" alt="User profile picture">   
																		<?php } ?>
																	</div>
																	<hr>
																	<h6>Title : <b><u><?php echo $row['title_head'];?></u></b></h6>
																	<h6>Email : <b><u><?php echo $row['mail'];?></u></b></h6>
																	<h6>No. Telepone : <b><u><?php echo $row['telepone'];?></u></b></h6>
																	<h6>No. WhatsApps : <b><u><?php echo $row['whatsapp'];?></u></b></h6>
																	<h6>Alamat : <br><b><u><?php echo $row['alamat'];?></u></b></h6>
																	<h6>URL Facebook : <b><u><?php echo $row['facebook'];?></u></b></h6>
																	<h6>URL Twitter : <b><u><?php echo $row['twitter'];?></u></b></h6>
																	<h6>URL YouTube : <b><u><?php echo $row['youtube'];?></u></b></h6>
																	<h6>URL Instagram : <b><u><?php echo $row['instagram'];?></u></b></h6>
																	<h6>Slogan : <b><u><?php echo $row['slogan'];?></u></b></h6>
																	<h6>Pesan : <b><u><?php echo $row['pesan'];?></u></b></h6>
																	<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																</div>
																<button type="button" class="btn btn-warning btn-block btn-flat" data-dismiss="modal">Close</button>
															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- END DETAIL -->

											<!-- FOOTER ONE -->
											<div class="modal fade" id="footer1<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
																<label class="modal-title">Upload Images Footer One</label>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
														</div>
															<?php echo form_open_multipart(site_url('AdminProfile/updatefooterone/'.$row['id']));?>
															<div class="modal-body">
																<div class="row">
																	<div class="col-sm-12">
																		<div align="center">
																			<h5>Images Footer One</h5>
																			<hr>
																			<?php
																			if ($row['galerione']==NULL) { ?>
																				<h6><font style="color: red"><b><i>Anda belum mengupload Images Footer One</i></b></font></h6>
																			<?php }else{ ?>
																				<img src="<?php echo base_url().'assets/images/footer/'. $row['galerione'];?>" class="lingkaran3" alt="User profile picture">   
																			<?php } ?>
																		</div>
																		<br>
																		<hr>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Images Footer 1</label>
																			<input type="file" class="form-control" name="galerione">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<button type="submit" name="updatefooterone" class="btn btn-block btn-primary">Update</button>
																	<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- END FOOTER ONE -->

											<!-- FOOTER ONE -->
											<div class="modal fade" id="footer2<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
																<label class="modal-title">Upload Images Footer Two</label>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
														</div>
															<?php echo form_open_multipart(site_url('AdminProfile/updatefootertwo/'.$row['id']));?>
															<div class="modal-body">
																<div class="row">
																	<div class="col-sm-12">
																		<div align="center">
																			<h5>Images Footer Two</h5>
																			<hr>
																			<?php
																			if ($row['galeritwo']==NULL) { ?>
																				<h6><font style="color: red"><b><i>Anda belum mengupload Images Footer Two</i></b></font></h6>
																			<?php }else{ ?>
																				<img src="<?php echo base_url().'assets/images/footer/'. $row['galerione'];?>" class="lingkaran3" alt="User profile picture">   
																			<?php } ?>
																		</div>
																		<br>
																		<hr>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Images Footer 2</label>
																			<input type="file" class="form-control" name="galeritwo">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<button type="submit" name="updatefootertwo" class="btn btn-block btn-primary">Update</button>
																	<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- END FOOTER ONE -->

											<!-- FOOTER ONE -->
											<div class="modal fade" id="footer3<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
																<label class="modal-title">Upload Images Footer Three</label>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
														</div>
															<?php echo form_open_multipart(site_url('AdminProfile/updatefooterthree/'.$row['id']));?>
															<div class="modal-body">
																<div class="row">
																	<div class="col-sm-12">
																		<div align="center">
																			<h5>Images Footer Three</h5>
																			<hr>
																			<?php
																			if ($row['galerithree']==NULL) { ?>
																				<h6><font style="color: red"><b><i>Anda belum mengupload Images Footer Three</i></b></font></h6>
																			<?php }else{ ?>
																				<img src="<?php echo base_url().'assets/images/footer/'. $row['galerithree'];?>" class="lingkaran3" alt="User profile picture">   
																			<?php } ?>
																		</div>
																		<br>
																		<hr>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Images Footer 3</label>
																			<input type="file" class="form-control" name="galerithree">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<button type="submit" name="updatefooterthree" class="btn btn-block btn-primary">Update</button>
																	<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- END FOOTER ONE -->

											<!-- FOOTER FOUR -->
											<div class="modal fade" id="footer4<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
																<label class="modal-title">Upload Images Footer Four</label>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
														</div>
															<?php echo form_open_multipart(site_url('AdminProfile/updatefooterfour/'.$row['id']));?>
															<div class="modal-body">
																<div class="row">
																	<div class="col-sm-12">
																		<div align="center">
																			<h5>Images Footer Four</h5>
																			<hr>
																			<?php
																			if ($row['galerifour']==NULL) { ?>
																				<h6><font style="color: red"><b><i>Anda belum mengupload Images Footer Four</i></b></font></h6>
																			<?php }else{ ?>
																				<img src="<?php echo base_url().'assets/images/footer/'. $row['galerifour'];?>" class="lingkaran3" alt="User profile picture">   
																			<?php } ?>
																		</div>
																		<br>
																		<hr>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Images Footer 4</label>
																			<input type="file" class="form-control" name="galerifour">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<button type="submit" name="updatefooterfour" class="btn btn-block btn-primary">Update</button>
																	<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- END FOOTER FOUR -->

											<!-- ICON -->
											<div class="modal fade" id="icon<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
																<label class="modal-title">Upload Icon</label>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
														</div>
															<?php echo form_open_multipart(site_url('AdminProfile/updateicon/'.$row['id']));?>
															<div class="modal-body">
																<div class="row">
																	<div class="col-sm-12">
																		<div align="center">
																			<h5>Icon</h5>
																			<hr>
																			<?php
																			if ($row['icon']==NULL) { ?>
																				<h6><font style="color: red"><b><i>Anda belum mengupload Icon</i></b></font></h6>
																			<?php }else{ ?>
																				<img src="<?php echo base_url().'assets/images/icon/'. $row['icon'];?>" class="lingkaran3" alt="User profile picture">   
																			<?php } ?>
																		</div>
																		<br>
																		<hr>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Icon</label>
																			<input type="file" class="form-control" name="icon">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<button type="submit" name="updateicon" class="btn btn-block btn-primary">Update</button>
																	<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- END ICON -->

											<!-- LOGO -->
											<div class="modal fade" id="logo<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Upload Logo</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminProfile/updatelogo/'.$row['id']));?>
															<div class="modal-body">
																<div class="row">
																	<div class="col-sm-12">
																		<div align="center">
																			<h5>Logo</h5>
																			<hr>
																			<?php
																			if ($row['logo']==NULL) { ?>
																				<h6><font style="color: red"><b><i>Anda belum mengupload Logo</i></b></font></h6>
																			<?php }else{ ?>
																				<img src="<?php echo base_url().'assets/images/logo/'. $row['logo'];?>" class="lingkaran3" alt="User profile picture">   
																			<?php } ?>
																		</div>
																		<br>
																		<hr>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Logo</label>
																			<input type="file" class="form-control" name="logo">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<button type="submit" name="updatelogo" class="btn btn-block btn-primary">Update</button>
																	<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- END LOGO -->

											<!-- LOGO FOOTER -->
											<div class="modal fade" id="logofooter<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Upload Logo</label>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminProfile/updatelogofooter/'.$row['id']));?>
															<div class="modal-body">
																<div class="row">
																	<div class="col-sm-12">
																		<div align="center">
																			<h5>Logo Footer</h5>
																			<hr>
																			<?php
																			if ($row['logo_footer']==NULL) { ?>
																				<h6><font style="color: red"><b><i>Anda belum mengupload Logo Footer</i></b></font></h6>
																			<?php }else{ ?>
																				<img src="<?php echo base_url().'assets/images/footer/'. $row['logo_footer'];?>" class="lingkaran4" alt="User profile picture">   
																			<?php } ?>
																		</div>
																		<br>
																		<hr>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>ID</label>
																			<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="form-group">
																			<label>Logo</label>
																			<input type="file" class="form-control" name="logo_footer">
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<button type="submit" name="updatelogofooter" class="btn btn-block btn-primary">Update</button>
																	<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- END LOGO FOOTER -->

											<!-- UPDATE -->
											<div class="modal fade" id="edit<?php echo $row['id'];?>" role="dialog">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<label class="modal-title">Update Profile</label>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<?php echo form_open_multipart(site_url('AdminProfile/update/'.$row['id']));?>
														<div class="modal-body">
															<div class="row">
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>ID</label>
																		<input type="text" class="form-control" name="id" value="<?php echo $row['id']; ?>" readonly>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Title</label>
																		<input type="text" class="form-control" name="title_head" placeholder="Menu..." value="<?php echo $row['title_head']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Email</label>
																		<input type="email" class="form-control" name="mail" placeholder="URL..." value="<?php echo $row['mail']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>No. Telephone</label>
																		<input type="text" class="form-control" name="telepone" placeholder="No. Telephone..." value="<?php echo $row['telepone']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>No. WhatsApps</label>
																		<input type="text" class="form-control" name="whatsapp" placeholder="No. WhatsApps..." value="<?php echo $row['whatsapp']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Alamat</label>
																		<textarea type="text" class="form-control" name="alamat" placeholder="Alamat"><?php echo $row['alamat']; ?></textarea>
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>URL Facebook</label>
																		<input type="text" class="form-control" name="facebook" placeholder="URL Facebook..." value="<?php echo $row['facebook']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>URL Twitter</label>
																		<input type="text" class="form-control" name="twitter" placeholder="URL Twitter..." value="<?php echo $row['twitter']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>URL YouTube</label>
																		<input type="text" class="form-control" name="youtube" placeholder="URL YouTube..." value="<?php echo $row['youtube']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>URL Instagram</label>
																		<input type="text" class="form-control" name="instagram" placeholder="URL Instagram..." value="<?php echo $row['instagram']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Slogan</label>
																		<input type="text" class="form-control" name="slogan" placeholder="Slogan..." value="<?php echo $row['slogan']; ?>">
																	</div>
																</div>
																<div class="col-sm-12">
																	<div class="form-group">
																		<label>Pesan</label>
																		<input type="text" class="form-control" name="pesan" placeholder="Pesan..." value="<?php echo $row['pesan']; ?>">
																	</div>
																</div>
															</div>
																<div class="form-group">
																	<button type="submit" name="update" class="btn btn-block btn-primary">Update</button>
																	<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Close</button>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- END UPDATE -->

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
															<?php echo form_open_multipart(site_url('AdminProfile/delete/'.$row['id'])); ?>
															<div class="form-group">
																	<h6>ID : <b><u><?php echo $row['id'];?></u></b></h6>
																	<hr>
																	<div align="center">
																		<h5>Icon</h5>
																		<hr>
																		<?php
																		if ($row['icon']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Icon</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/icon/'. $row['icon'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																	<br>
																	<hr>
																	<div align="center">
																		<h5>Logo</h5>
																		<hr>
																		<?php
																		if ($row['logo']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Logo</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/logo/'. $row['logo'];?>" class="lingkaran3" alt="User profile picture">   
																		<?php } ?>
																	</div>
																	<hr>
																	<div align="center">
																		<h5>Logo Footer</h5>
																		<hr>
																		<?php
																		if ($row['logo_footer']==NULL) { ?>
																			<h6><font style="color: red"><b><i>Anda belum mengupload Logo</i></b></font></h6>
																		<?php }else{ ?>
																			<img src="<?php echo base_url().'assets/images/footer/'. $row['logo_footer'];?>" class="lingkaran4" alt="User profile picture">   
																		<?php } ?>
																	</div>
																	<hr>
																	<h6>Title : <b><u><?php echo $row['title_head'];?></u></b></h6>
																	<h6>Email : <b><u><?php echo $row['mail'];?></u></b></h6>
																	<h6>No. Telepone : <b><u><?php echo $row['telepone'];?></u></b></h6>
																	<h6>No. WhatsApps : <b><u><?php echo $row['whatsapp'];?></u></b></h6>
																	<h6>Alamat : <br><b><u><?php echo $row['alamat'];?></u></b></h6>
																	<h6>URL Facebook : <b><u><?php echo $row['facebook'];?></u></b></h6>
																	<h6>URL Twitter : <b><u><?php echo $row['twitter'];?></u></b></h6>
																	<h6>URL YouTube : <b><u><?php echo $row['youtube'];?></u></b></h6>
																	<h6>URL Instagram : <b><u><?php echo $row['instagram'];?></u></b></h6>
																	<h6>Slogan : <b><u><?php echo $row['slogan'];?></u></b></h6>
																	<h6>Pesan : <b><u><?php echo $row['pesan'];?></u></b></h6>
																	<input type="hidden" name="id" class="form-control" value="<?php echo $row['id'];?>" required>
																	<input type="hidden" name="berkas" class="form-control" value="HAPUS" required>
																</div>
																<button type="submit" name="delete" class="btn btn-danger btn-block btn-flat">Yes
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
														<?php echo form_open_multipart(site_url('AdminProfile/updatehidden/'.$row['id']));?>
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
																	<button type="submit" name="updatehidden" class="btn btn-block btn-primary">Yes</button>
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
														<?php echo form_open_multipart(site_url('AdminProfile/updateshow/'.$row['id']));?>
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
																	<button type="submit" name="updateshow" class="btn btn-block btn-primary">Yes</button>
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