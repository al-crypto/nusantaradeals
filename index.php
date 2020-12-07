<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ini buat judul halamannya -->
	<title>Nusantara Deals | E-commerce Website Design</title>
	<!-- menghubungkan file css style.css ke halaman ini -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<!-- ini buat pasang gambar logo startup kita lebarnya diatur 125px -->
					<a href="index.php"><img src="images/NusantaraDeals.png" width="175px"></a>
				</div>
				<nav>
					<!-- ini list buat menu-menu di kanan pojok atas -->
					<ul id="MenuItems">
						<li><a href="index.php">Home</a></li>
						<li><a href="products.php">Products</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="account.php"><strong>My Account</strong></a></li>
					</ul>
				</nav>
				<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
				<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>

			<div class="row">
				<div class="col-2">
					<h1>Did you wear your #BATIK today? </h1>
					<p>Show the world how proud you are of #BATIK and their special traits!</p>
					<!-- &#8594 itu lambang arrow -->
					<a href="products.html" class="btn">Find my #BATIK &#8594;</a>
				</div>
				<div class="col-2">
					<img src="images/modelheader-1.png">
				</div>
			</div>
		</div>
	</div>

	<!----------- featured categories ------->
	<!-- INI DELETE GA YA FRENS ???? -->

	<div class="categories">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<img src="images/category-1.jpg">
				</div>
				<div class="col-3">
					<img src="images/category-2.jpg">
				</div>
				<div class="col-3">
					<img src="images/category-3.jpg">
				</div>
			</div>
		</div>
	</div>

	<!----------- featured products ------->

	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-4">
				<a href="products-detail.html" productid="7"><img src="images/produk-7.jpg"></a>
				<a href="products-detail.html">
					<h4>Kebaya Sinok Mata Dewa</h4>
				</a>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 409.000</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id="8"></a><img src="images/produk-8.jpg">
				<h4>Batik Jagad Tresno Pria</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 360.000</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id="3"></a><img src="images/produk-3.jpg">
				<h4>Batik Wanita Premium</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 219.450</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id="9"></a><img src="images/produk-9.jpg">
				<h4>Gamis Batik Wanita Premium</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 550.000</p>
			</div>
		</div>
		<h2 class="title">Latest Products</h2>
		<div class="row">
			<div class="col-4">
				<a href="products-detail.html" id=""></a><img src="images/produk-12.jpg">
				<h4>Kaos "Damn I Love Indonesia" Pria</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 150.000</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id=""></a><img src="images/produk-11.jpg">
				<h4>Kaos "Damn I Love Indonesia" Wanita</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 220.000</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id=""></a><img src="images/produk-10.jpg">
				<h4>Gamis Batik Wanita Premium</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 550.000</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id=""></a><img src="images/produk-9.jpg">
				<h4>Batik Jagad Tresno Wanita</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p>Rp 399.000</p>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<a href="products-detail.html" id=""></a><img src="images/produk-8.jpg">
				<h4>Batik Jagad Tresno Pria</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
				</div>
				<p>Rp 360.000</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id=""></a><img src="images/produk-7.jpg">
				<h4>Kebaya Sinok Mata Dewa</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 409.000</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id=""></a><img src="images/produk-6.jpg">
				<h4>Baju Koko Lengan Panjang</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 95.000</p>
			</div>
			<div class="col-4">
				<a href="products-detail.html" id=""></a><img src="images/produk-5.jpg">
				<h4>Atasan Baju Surjan Pria</h4>
				<div class="rating">
					<i class="fa fa-star"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
					<i class="fa fa-star-o"></i>
				</div>
				<p>Rp 66.000</p>
			</div>
		</div>
	</div>

	<!----------- offer ------->

	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="images/exclusive.png" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusively Available on RedStore</p>
					<h1>Smart Band 4 </h1>
					<small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.</small>
					<a href="" class="btn">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div>

	<!----------- testimonial ------->

	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/user-1.png">
					<h3>Sean Parker</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/user-2.png">
					<h3>Mike Smith</h3>
				</div>
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<img src="images/user-3.png">
					<h3>Mabel Joe</h3>
				</div>
			</div>
		</div>
	</div>

	<!----------- brands ------->

	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/logo-godrej.png">
				</div>
				<div class="col-5">
					<img src="images/logo-oppo.png">
				</div>
				<div class="col-5">
					<img src="images/logo-coca-cola.png">
				</div>
				<div class="col-5">
					<img src="images/logo-paypal.png">
				</div>
				<div class="col-5">
					<img src="images/logo-philips.png">
				</div>
			</div>
		</div>
	</div>

	<!----------- footer ------->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download Our App</h3>
					<p>Download App for Android and ios mobile phone.</p>
					<div class="app-logo">
						<img src="images/play-store.png">
						<img src="images/app-store.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/NusantaraDeals-White.png">
					<p>Our purpose is to sutainably make the pleasure and benefits of sports accessible to the many.</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				</div>
				<div class="footer-col-4">
					<h3>Follow Us</h3>
					<ul>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagram</li>
						<li>Youtube</li>
					</ul>
				</div>
			</div>
			<hr>
			<p class="copyright">Copyright 2020</p>
		</div>
	</div>

	<!----------- js for toggle menu ------->
	<script>
		var MenuItems = document.getElementById("MenuItems");
		MenuItems.style.maxHeight = "0px";

		function menutoggle() {
			if (MenuItems.style.maxHeight == "0px") {
				MenuItems.style.maxHeight = "200px";
			} else {
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>

</body>

</html>