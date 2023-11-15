<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); 
	?>
	<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

						<form action="<?php  base_url('add') ?>" method="post" >
                
								<label for="nama_bayu">Nama </label>
								<input class="form-control <?php echo form_error('nama_bayu') ? 'is-invalid':'' ?>"
								 type="numeric" name="nama_bayu" placeholder="Nama" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_bayu') ?>
								</div>
							    
                        
                            
								<label for="username_bayu">Username</label>
								<input class="form-control <?php echo form_error('username_bayu') ? 'is-invalid':'' ?>"
								 type="text" name="username_bayu" placeholder="Username" />
								<div class="invalid-feedback">
									<?php echo form_error('username_bayu') ?>
								</div>
							

							
								<label for="password_bayu">Password</label>
								<input class="form-control <?php echo form_error('password_bayu') ? 'is-invalid':'' ?>"
								 type="text" name="password_bayu" min="0" placeholder="Password" />
								<div class="invalid-feedback">
									<?php echo form_error('password_bayu') ?>
								</div>

								<label for="level_bayu">Level User</label>
								<input class="form-control <?php echo form_error('level_user') ? 'is-invalid':'' ?>"
								 type="text" name="level_user" placeholder="level_user" />
								<div class="invalid-feedback">
									<?php echo form_error('level_user') ?>
								</div>
							

							<input type="submit" name="btn" value="Save" />
						</form>



	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>
