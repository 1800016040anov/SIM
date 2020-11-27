<?php
require 'functions.php';
//ambil data yang ada di url 
$id = $_GET["id"];

//query data mahasiswa berdasarkan id 
$mhs = query("SELECT * FROM mahasiswa WHERE id =$id")[0] ;

if (isset($_POST["submit"])) {


	
	//cek apakah data berhasil diubah atau tidak 

	if ( ubah($_POST)> 0) {

		echo "
				<script> 
						alert('data berhasil diubah!');
						document.location.href = 'index.php';
				</script>
		    ";
	} else {
		echo "<script> 
						alert('data gagal diubah');
						document.location.href = 'index.php';
				</script>";
	}

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ubah data mahasiswa </title>
</head>
<body>
	<h1> ubah data mahasiswa </h1>

	<form  action="" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
				<input type="hidden" name="gambarlama" value="<?= $mhs["gambar"];  ?>">
		<ul>
			
			<li>
				<label for="NIM"> NIM : </label>
				<input type="text" name="NIM" id="NIM" required value="<?= $mhs["NIM"]; ?>">
			</li>

			<li>
				<label for="nama"> nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
			</li>

			<li>
				<label for="email"> email : </label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan"> jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
			</li>

			<li>
				<label for="gambar"> gambar : </label> <br>
				<img src="img/<?= $mhs["gambar"];  ?>" width="50" ><br>
				<input type="file" name="gambar" id="gambar" >
			</li>

			<li>
				<button type="submit" name="submit"> Ubah</button>
			</li>

		</ul>
		
	</form>

</body>
</html>