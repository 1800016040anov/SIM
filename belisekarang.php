<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beli Sekarang</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="stylebeli.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="svg-injector.min.js"></script>

	 <!-- Font Awesome -->
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">

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
    <img src="icon/logo.png" alt="" style="width: 250px;">

    <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="color: aliceblue; margin-top: 30px; margin-left: 15px;">
            Kategori
          </a>
          <div class=" dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Sedih</a>
            <a class="dropdown-item" href="#">Senang</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Susah</a>
          </div>
        </li>
        <li>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
              style="right: 50%; width: 500px;  margin-top: 30px; border-radius: 35px;">
          </form>
        </li>

        <li>
          <i class="fa-2x far fa-bell" style="margin-top: 35px; margin-left: 15px;"></i>
        </li>
        <li>
          <i class="fa-2x fas fa-shopping-cart" style="margin-top: 35px; margin-left: 15px;"></i>
        </li>

        <li
          style="background-color: aquamarine; height: 50%; border-radius: 5px;padding-left: 20px; padding-right: 20px; margin-left: 40px; margin-top: 35px;">
          <a href="">login </a>| <a href="">daftar</a>
        </li>
      </ul>

    </div>
  </nav>

<!--beli sekarang-->
<div class="inner-container container no-padding ng-star-inserted" id="cart-area">
	<!---->
	<div class="col-md-8 no-padding wraping-summary ng-star-inserted" id="cart-container">
		<!----><div class="display-product"><p class="no-margin"> Menampilkan 
			<span class="display-product-bold"><b> 1 Produk </b></span> dalam Keranjang </p></div>
			<div class="delete-header">
				<!----><!---->
				<span class="delete-header-title ng-star-inserted"> Hapus Beberapa </span>
			<div class="toggle-cancel">
				<!----><!----></div></div>
				<ul><!---->
				<li class="wrap-cart-summary ng-star-inserted">
					<!----><gm-cart-summary><!---->
					<div class="summary-container ng-star-inserted">
						<div class="item-enabled"></div>
						<div class="summary-item">
							<gm-img-scale _nghost-web-gramedia-c25="">
								<!----><!---->
								<img _ngcontent-web-gramedia-c25="" class="cart-summary ng-star-inserted ng-lazyloaded" src="icon/6.png" alt="kita dan kata" style="width: 150px;">
								<!----><!----><!----><!----></gm-img-scale>
								<div class= "title">
									<ul class="info"><!----></ul>
									<a class="title-product" href="/products/kita dan kata"> <b>KITA DAN KATA </b></a>
										<p class="wrap-author" style="line-height: 1.3; color: grey;"> ByJein @SetiyantoHendri</p>
									<div class="summary-priceformat">
										<div class="format">
											<p class="product-format"><b> Hard Cover </b></p>
										<p class="price">Rp58,650.00 </p>
											<!----><!----><!----><!----><!---->
										</div></div></div>
	<!--tambah kurang-->
	<div class="col-sm-6 no-padding sticky-sidebar ng-star-inserted" id="tambah"><!---->
	<table id="table2">
  	<tr>
    <th><button class="button5"> - </button></th>
		<th><input class="summary-qty-material-input ng-untouched ng-pristine ng-valid ng-star-inserted" gmonlynumber="true"><!----></th>
		<th><button class="button4"> + </button></th>
</tr>
</table>
	<!----></div>
	<div class="summary-total ng-star-inserted">
		<p class="subTotal"><b> Subtotal </b></p>
		<p class="price promo">Rp58,650.00 </p><br><br>
		<a style="color: grey;"> Hapus </a></div>
		
	<!--lanjutkan pembayaran-->
	<div class="col-sm-5 no-padding sticky-sidebar ng-star-inserted" id="cart-checkout">
		<div class="checkout-area">
			<p class="total">
				<span class="total-quantity"> Total 1 jumlah produk </span>
				<span class="total-price">Rp58,650.00 </span></p>
			<button type="button"> Lanjutkan Pembayaran </button><!---->
		</div>
	</div>
</div>
</div>
</div></div>

<!-- Section Footer -->
<div class="footer">
<div class="container mt-5"
        style="background-color: rgb(230, 228, 228); padding:10px;">
        <div class="row mt-3 ml-5" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
          <div class="col">
            <h4>Tentang O'book store </h4>
            <h6 style="margin: 0%;">Tentang kami</h6>
          </div>
          <div class="col">
            <h4>lainnya</h4>
            <h6> Syarat & ketentuan </h6>
            <h6> Kebijakan & Privasi</h6>
            <h6>Hubungi Kami </h6>
          </div>
          <div class="col">
            <h4>pembayaran</h4>
            <div class="row">
              <div class="col"> <img src="icon/17.PNG" alt=""></div>
            </div>
            <h4>pengiriman</h4>
            <div class="row">
              <div class="col"><img src="icon/18.PNG" alt=""></div>
            </div>
          </div>
          <div class="col">
            <h4>
              ikuti kami
            </h4>
            <div class="row " style="width: 100px; ">
              <div class="col-md-1">
                <img src="icon/instagram.png" alt="" style="width: 25px;">
              </div>
              <div class="col-md-1">
                <img src="icon/twitter.png" alt="" style="width: 25px;">
              </div>
              <div class="col-md-1">
                <img src="icon/linkedin.png" alt="" style="width: 25px;">
              </div>
              <div class="col-md-1">
                <img src="icon/gmail.png" alt="" style="width: 25px;">
              </div>


            </div>
          </div>

        </div>
	  </div>
</div>


</body>
</html>