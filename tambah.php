<!DOCTYPE html>
<html>

<head>
	<title>Pertemuan 15</title>
</head>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Mahasiswa</h1>
		<div class="card">
			<div class="card-header bg-primary text-white">
				Tambah Data
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="FirstName" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="LastName" class="form-control">
					</div> 
					
					<div class="form-group">
						<label>Job Date</label>
						<input type="date" name="Job_Date" class="form-control">
					</div>
					
					<div class="form-group">
						<label>Age</label>
						<input type="text" name="Age" class="form-control">
					</div>

					<button type="submit" class="btn btn-success" name="submit" value="simpan">Simpan data</button>
				</form>

				<?php
				include('koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$FirstName = $_POST['FirstName'];
					$LastName = $_POST['LastName'];
					$Job_Date = $_POST['Job_Date'];
					$Age = $_POST['Age'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into tblmhs (FirstName,LastName,Job_Date,Age)values('$FirstName', '$LastName', '$Job_Date', '$Age')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>