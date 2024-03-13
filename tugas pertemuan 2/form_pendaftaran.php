<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div >
		<h1>Form Pendaftaran</h1>
		<form  method="POST" action="tugas2_hasildaftar.php" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap</label>
				<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Anda" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" class="form-control" placeholder="Masukan Email Anda" required>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat Anda"></textarea>
			</div>
			<div class="form-group">
				<label for="telepon">Telepon</label>
				<input type="number" id="telepon" name="telepon" class="form-control" placeholder="Masukan Nomor Telepon Anda" required>

			</div>
			<input type="submit" name="proses" value="Submit" class="btn btn-primary">

		</form>
	</div>
</body>
</html>