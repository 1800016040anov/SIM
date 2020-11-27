<!DOCTYPE html>
<html>

<head>
	<title> halaman login </title>
</head>

<body>

	<h1> halaman login </h1>

	<?php if (isset($error)) : ?>
		<p style="color: red; font: italic;">username /password salah</p>
	<?php endif; ?>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username"> Uname : </label>
				<input type="text" name="username" id="username">
			</li>

			<li>
				<label for="password"> password :</label>
				<input type="password" name="password" id="password">

			</li>
			<li>
				<button type="submit" name="login"> login </button>
			</li>

		</ul>


	</form>
	<?php


	if (isset($_POST["login"])) {

		$username = $_POST['user_id'];
		$password = $_POST['password'];
		$result = mysqli_query($conn, "SELECT * FROM user WHERE user_id ='$user_id'");

		//cek username 
		if (mysqli_num_rows($result) === 1) {

			//cek password 
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])) {
				header("Location: user_view.php");
				exit;
			}
		}
		$error = true;
	}



	?>

</body>

</html>