<?php
	session_start();
	$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASS = '';
	$DATABASE_NAME = 'web';
	$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

	function query($query)  {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_object($result)){
      $rows[]=$row;
    }
    return $rows;
  	}
  	$produk = query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ini buat judul halamannya -->
	<title>NusantaraDeals</title>
	<!-- menghubungkan file css style.css ke halaman ini -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="header">
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<!-- ini buat pasang gambar logo startup kita lebarnya diatur 125px -->
					<a href="index.php"><img src="images/logo.png" width="125px"></a>
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
					<h1>Selamat Datang di <br> Nusantara Deals</h1>
					<p>Selamat berbelanja fashion buatan Nusantara</p>
					<!-- &#8594 itu lambang arrow -->
					<a href="products.php" class="btn">Mulai Belanja &#8594;</a>
				</div>
				<div class="col-2">
					<img src="images/image1.png">
				</div>
			</div>
		</div>
	</div>

	<!----------- featured categories ------->

<!-- 	<div class="categories">
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
	</div> -->

<br><br><br><br>
	<!----------- Produk Rekomendasi ------->

	<div class="small-container">
		<h2 class="title">Produk Rekomendasi</h2>
		<div class="row">
			<?php foreach ($produk as $prd): ?>
				<div class="col-4">
					<a href="products-detail.php?id=<?= $prd->productID?>">
						<img src="<?= $prd->thumbnail?>">
						<h4><?= $prd->productName?></h4>
					</a>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<p>Rp <?= $prd->price?></p>
				</div>
			<?php endforeach; ?>

			
		</div>

		<h2 class="title">Produk Terbaru</h2>
		
		<div class="row">
			<?php foreach (array_slice($produk, 0, 4) as $prd): ?>
				<div class="col-4">
					<a href="products-detail.php?id=<?= $prd->productID?>">
						<img src="<?= $prd->thumbnail?>">
						<h4><?= $prd->productName?></h4>
					</a>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<p>$50.00</p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

	<!----------- offer ------->

	<!-- <div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="images/exclusive.png" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusively Available on RedStore</p>
					<h1>Smart Band 4 </h1>
					<small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display
						with adjustable brightness, so everything is clear as can be.</small>
					<a href="" class="btn">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div> -->

	<!----------- testimonial ------->

	<!-- <div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<i class="fa fa-quote-left"></i>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever</p>
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
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever</p>
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
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
						the industry's standard dummy text ever</p>
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
	</div> -->

	<!----------- brands ------->

	<!-- <div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/logo.png">
				</div>
				<div class="col-5">
					<img src="images/logo.png">
				</div>
				<div class="col-5">
					<img src="images/logo.png">
				</div>
				<div class="col-5">
					<img src="images/logo.png">
				</div>
				<div class="col-5">
					<img src="images/logo.png">
				</div>
			</div>
		</div>
	</div> -->

	<!----------- footer ------->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col-1">
					<h3>Download aplikasi kami</h3>
					<p>Download aplikasi untuk Android and IOS.</p>
					<div class="app-logo">
						<img src="images/play-store.png">
						<img src="images/app-store.png">
					</div>
				</div>
				<div class="footer-col-2">
					<img src="images/logo-white.png">
					<p>Kami mempunyai tujuan untuk mengangkat pasar fashion lokal asli Nusantara</p>
				</div>
				<div class="footer-col-3">
					<h3>Useful Links</h3>
					<ul>
						<li>Coupons</li>
						<li>Blog</li>
						<li>Policy</li>
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
			}
			else {
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>

</body>

</html>