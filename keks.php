<?php
require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa  ");

//tombol cari di klik 
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>HOME </title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="svg-injector.min.js"></script>

	<script>
		// Elements to inject
		var mySVGsToInject = document.querySelectorAll('.iconic-sprite');

		// Do the injection
		SVGInjector(mySVGsToInject);
	</script>

</head>



<body>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: url('img/navground.png');">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#"><img src="icon/logo.png" style="width: 250px;"> <span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="margin-left: 15px; margin-top: 15%; color: aliceblue;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Kategori
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Komedi</a>
						<a class="dropdown-item" href="#">Romance</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">History</a>
					</div>
				</li>
				<li style="margin-top: 2%; ">
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" name="keyword" style="width: 500px; margin-left: px; border-radius: 30px;" placeholder="Search" aria-label="Search">
					</form>
				</li>
				<li> <img src="icon/notification.png" alt="" style="width: 35px; position: relative; margin-left: 25px; top: 20px;">
				</li>
				<li><img src="icon/add-to-cart.png" alt="" style="width: 35px; margin-left: 25px; position: relative; top: 20px;"></li>
				</li>

			</ul>




	</nav>



	<div class="container" style="position: fixed; left: 50px;">
		<div class="row">
			<div class="col-md5">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" ">
		<ol class=" carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="icon/buku1.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="icon/buku.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="icon/buku1.png" class="d-block w-100" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" ">
		<ol class=" carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="icon/buku1.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="icon/buku.png" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="icon/buku1.png" class="d-block w-100" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</div>
	</div>
	<div class="iklan">


	</div>

</body>

</html>