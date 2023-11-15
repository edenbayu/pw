<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); 
	?>

	<form action="<?php base_url("edit") ?>" method="post"
							enctype="multipart/form-data" >


							<div class="form-group">
								<label for="name"> Nama User </label>
								<input class="form-control <?php echo form_error('nama_bayu') ? 'is-invalid':'' ?>"
								 type="text" name="nama_bayu" placeholder="Nama" value="<?php echo $mahasiswa->nama_bayu ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_bayu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Judul Buku</label>
								<input class="form-control <?php echo form_error('username_bayu') ? 'is-invalid':'' ?>"
								 type="text" name="username_bayu" min="0" placeholder="Username" value="<?php echo $mahasiswa->username_bayu?>" />
								<div class="invalid-feedback">
									<?php echo form_error('username_bayu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Pengarang</label>
								<input class="form-control <?php echo form_error('password_bayu') ? 'is-invalid':'' ?>"
								 type="text" name="password_bayu" min="0" placeholder="Password" value="<?php echo $mahasiswa->password_bayu ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password_bayu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Level</label>
								<input class="form-control <?php echo form_error('level_bayu') ? 'is-invalid':'' ?>"
								 type="text" name="level_bayu" min="0" placeholder="Level User" value="<?php echo $mahasiswa->level_bayu ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('level_bayu') ?>
								</div>
							</div>

								<input type=hidden name=id_bayu value=<?php echo $mahasiswa->id_bayu; ?>>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>
					</div>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>