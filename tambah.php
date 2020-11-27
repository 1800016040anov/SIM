<?php
require 'functions.php';
 
if (isset($_POST["submit"])) {



	
	//cek apakah data berhasil ditambahkan atau tidak 

	if ( tambah($_POST)> 0) {

		echo "
				<script> 
						alert('data berhasil ditambahkan!');
						document.location.href = 'index.php';
				</script>
		    ";
		# code...
	} else {
		echo "<script> 
						alert('data gagal ditambahkan!');
						document.location.href = 'index.php';
				</script>";
	}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah data mahasiswa </title>
</head>
<body>
	<h1> tambah data mahasiswa </h1>

	<form  action="" method="post" enctype="multipart/form-data">

		<ul>
			
			<li>
				<label for="NIM"> NIM : </label>
				<input type="text" name="NIM" id="NIM" required>
			</li>

			<li>
				<label for="nama"> nama : </label>
				<input type="text" name="nama" id="nama" required>
			</li>

			<li>
				<label for="email"> email : </label>
				<input type="text" name="email" id="email" required>
			</li>
			<li>
				<label for="jurusan"> jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li>

			<li>
				<label for="gambar"> gambar : </label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit"> Tambah Data</button>
			</li>

		</ul>
		
	</form>

</body>
</html>