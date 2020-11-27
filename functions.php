<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);

	$rows = [];

	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
		# code...
	}

	return $rows;
}


function tambah($data)
{

	global $conn;
	$NIM = htmlspecialchars($data["NIM"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	//fungsi upload gambar

	$gambar = upload();
	if (!$gambar) {

		return false;
		# code...
	}

	$query = "INSERT INTO mahasiswa
			VALUES

			('','$NIM','$nama','$email', '$jurusan', '$gambar')
			 ";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function upload()
{

	$namafile = $_FILES['gambar']['name'];
	$ukuranfile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	//cek apakah tidak ada gambar yang di upload 
	if ($error === 4) {
		echo "
		<script>
		alert('pilih gambar dulu woy');
		</script> ";
		return false;
	}

	//cek  apakah yang di upload gambar 
	$ektensigv = ['jpg', 'png', 'jpeg'];
	$ektensig = explode('.', $namafile);
	$ektensig = strtolower(end($ektensig));
	if (!in_array($ektensig, $ektensigv)) {

		echo "
		<script>
		alert('pake ektensi yang bener bego');
		</script> ";
		return false;
	}
	//cek ukurannya 
	if ($ukuranfile > 1000000) {
		echo "
		<script>
		alert('kebesaran amjinc ');
		</script> ";
		return false;
	}

	//lolos pengecekan, gambar siap di upload 
	//generate nama file baru 
	$namafilebaru = uniqid();
	$namafilebaru .= '.';
	$namafilebaru .= $ektensig;
	move_uploaded_file($tmpName, 'img/' . $namafilebaru);
	return $namafilebaru;
}

function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa where id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	global $conn;
	$id =  $data["id"];
	$NIM = htmlspecialchars($data["NIM"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambarlama = htmlspecialchars($data["gambarlama"]);
	//cek user ngambil data baru tidak 
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarlama;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE mahasiswa SET 
	 NIM = '$NIM',
	 nama = '$nama',
	 email = '$email',
	 jurusan = '$jurusan',
	 gambar = '$gambar'
	 WHERE id = $id 
	 ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function cari($keyword)
{
	$query = "SELECT * FROM mahasiswa 
	WHERE 
	nama LIKE '%$keyword%' OR
	NIM LIKE '%$keyword%' OR 
	email LIKE '%$keyword%' or 
	jurusan LIKE '%$keyword%'



	";

	return query($query);
}

function registrasi($data)
{
	//penmanggilan super global
	global $conn;

	//pembuatan wadah inputan pada msqli

	/*wadah username*/
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	//cek konfirmasi  pasword
	if ($password !== $password2) {

		echo "
				<script>
			alert('pasword tidak cocok');
				</script>
		";
		return false;
	}




	//enkripsi password

	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user bru ke database
	mysqli_query($conn, "INSERT INTO users VALUES('','$username','$password')");


	return mysqli_affected_rows($conn);
}
