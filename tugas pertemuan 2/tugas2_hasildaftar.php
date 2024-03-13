<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2 class="center">Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>1</td>
					<td>Fakhirul</td>
					<td>fakhirul@gmail.com</td>
					<td>Depok</td>
					<td>+62878555169</td>
				</tr>
				<tr>
					<td> 2</td>
					<td>Rul</td>
					<td>rul@gmail.com</td>
					<td>Bogor</td>
					<td>+62856555635</td>
				</tr>
				

				<?php
				     
					 if ($_SERVER["REQUEST_METHOD"] == "POST") {
						 // Tangkap dan tampilkan data dari form
						 $nama_lengkap = isset($_POST['nama_lengkap']) ? $_POST['nama_lengkap'] : "";
						 $email = isset($_POST['email']) ? $_POST['email'] : "";
						 $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : "";
						 $telepon = isset($_POST['telepon']) ? $_POST['telepon'] : ""; // Perhatikan penulisan "Telepon" yang sesuai dengan atribut name di form
					 
						 // Menghitung nomor urutan secara dinamis
						 $nomor = 2;
						 $urutan = $nomor + 1;
					 
						 // Tampilkan data dalam tabel
						 echo "<tr>";
						 echo "<td>$urutan</td>";
						 echo "<td>$nama_lengkap</td>";
						 echo "<td>$email</td>";
						 echo "<td>$alamat</td>";
						 echo "<td>$telepon</td>";
						 echo "</tr>";
					    }

				?>

			</tbody>
		</table>
	</div>
</body>
</html>