
<?php

/* tahapan tahapan dalam membuatprosedural php  dengan terintegerasi dengan mysql dengan funvtion yang berbeda 
	 1. panggil functions dengan require 
	 2. isset => jika tombol regist di klik { jika funsgi registrasi mengembalikan post > 0 maka akan keluar alert berhasil di tambahkan 
	 2. else mysqli eror } 
	

*/  
require 'functions.php';

if (isset($_POST["regist"])) {

	if(registrasi($_POST) > 0 ){
		echo "<script>
				alert('data berhasil ditambahkan');
				</script> ";
	} else {

		mysqli_error($conn);
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman registrasi </title>

	<style >
		
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1> halaman registrasi </h1>

<form action="" method="post">
	
<ul>
	<li>
		
		<label for="username"> username : </label>
		<input type="text" name="username" id="username">
	</li>

	<li>
		
		<label for="password"> password : </label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		
		<label for="password2"> konfirmasi password : </label>
		<input type="password" name="password2" id="password2">
	</li>

	<li>
		<button type="submit" name="regist" >daftar</button>
	</li>

</ul>
</form>
</body>
</html>