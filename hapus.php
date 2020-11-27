<?php 
require'functions.php';

$id = $_GET["id"];

if (hapus($id)> 0) {
	echo "
				<script> 
						alert('data berhasil dihapuskeun!');
						document.location.href = 'index.php';
				</script>
		    ";
		# code...
	} else {
		echo "<script> 
						alert('data gagal di hapus!');
						document.location.href = 'index.php';
				</script>";
	}



?>