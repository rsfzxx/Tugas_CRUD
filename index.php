<!DOCTYPE html>
<html>
<head>
<title>	Pertemuan 15</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<div class="container col-md-6 mt-4">
		<h1>Tabel Mahasiswa</h1>
		<div class="card">
			<div class="card-header bg-primary text-white ">
				DATA BARANG <a href="tambah.php" class="btn btn-sm btn-warning float-right">Tambah</a>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Nim</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Job Date</th>
							<th>Age</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include('koneksi.php'); //memanggil file koneksi
							$datas = mysqli_query($koneksi, "select * from tblmhs") or die(mysqli_error($koneksi));
							//script untuk menampilkan data barang

							$nim = 1;//untuk pengurutan nomor

							//melakukan perulangan
							while($row = mysqli_fetch_assoc($datas)) {
						?>	

					<tr>
						<td><?= $nim; ?></td>
						<td><?= $row['FirstName'];?></td>
						<td><?= $row['LastName']; ?></td>
						<td><?= $row['Job_Date']; ?></td>
						<td><?= $row['Age']; ?></td>
						<td>
								<a href="edit.php?Nim=<?= $row['Nim']; ?>" class="btn btn-sm btn-success">Edit</a>
								<a href="hapus.php?Nim=<?= $row['Nim']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
						</td>
					</tr>

						<?php $nim++; } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>