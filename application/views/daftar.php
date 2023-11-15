<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); 
	?>
		<h2>Daftar User</h2>
			<table border=1>
									<tr>
										<th>Nama User</th>
										<th>Username</th>
										<th>Password</th>
										<th>Level</th>
										<th>Action</th>
									</tr>
								
									<?php foreach ($mahasiswa as $mahasiswa): ?>
									<tr>
										<td>
											<?php echo $mahasiswa->username_bayu ?>
										</td>
										<td>
											<?php echo $mahasiswa->nama_bayu?>
										</td>
										<td>
											<?php echo $mahasiswa->password_bayu?>
										</td>
										<td>
											<?php echo $mahasiswa->level_bayu?>
										</td>
                                        <td><a href=edit/<?php echo $mahasiswa->id_bayu?>>Edit</a>||<a href=delete/<?php echo $mahasiswa->id_bayu?>>Hapus</a></td>
									</tr>
									<?php endforeach; ?>
							</table>
	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>