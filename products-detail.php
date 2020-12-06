<?php
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
  	$produklain = query("SELECT * FROM products");
  	$produk = query("SELECT * FROM products WHERE productID=".$_GET["id"]);
  	$parameter = $_GET["id"];
  	$detail = query("SELECT * FROM product_details WHERE productID=".$_GET["id"]);
  	$gambar = query("SELECT * FROM thumbnail WHERE productID=".$_GET["id"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ini buat judul halamannya -->
	<title>All Products - NusantaraDeal</title>
	<!-- menghubungkan file css style.css ke halaman ini -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
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
					<li><a href="account.php">Account</a></li>
				</ul>
			</nav>
			<a href="cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
			<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		</div>
	</div>

	<!------- single product details -------->

	<div class="small-container single-product">
		<div class="row">

			<div class="col-2">
				<img src="<?= $gambar[0]->url ?>" width="100%" id="ProductImg">

				<div class="small-img-row">
					<?php foreach ($gambar as $gbr): ?>
					<div class="small-img-col">
						<img src="<?= $gbr->url ?>" width="100%" class="small-img">
					</div>
					<?php endforeach; ?>
				</div>
			</div>

			<div class="col-2">
				<p>Home / T-Shirt</p>
				<h1><?= $produk[0]->productName ?></h1>
				<h4>Rp <?= $produk[0]->price ?></h4>
				<select>
					<option value="">Select Size</option>
					<option value="">XL</option>
					<option value="">L</option>
					<option value="">M</option>
				</select>
				<input type="number" name="1">
				<a href="" class="btn">Add To Cart</a>
				<h3>Product Details <i class="fa fa-indent"></i></h3>
				<br>
				<p><?= $detail[0]->description ?></p>
			</div>
		</div>
	</div>

	<!--------title-------->

	<div class="small-container">
		<div class="row row-2">
			<h2>Produk Lain</h2>
			<p>View More</p>
		</div>
	</div>

	<!--------products-------->

	<div class="small-container">

		<div class="row">
			<?php foreach (array_slice($produklain, 0, 4) as $prd): ?>
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
					<p><?= $prd->price?></p>
				</div>
			<?php endforeach; ?>
		</div>

	</div>

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

	<!---------- js for product gallery ------->

	<script>
		var ProductImg = document.getElementById("ProductImg");
		var SmallImg = document.getElementsByClassName("small-img");
		SmallImg[0].onclick = function () {
			ProductImg.src = SmallImg[0].src;
		}
		SmallImg[1].onclick = function () {
			ProductImg.src = SmallImg[1].src;
		}
		SmallImg[2].onclick = function () {
			ProductImg.src = SmallImg[2].src;
		}
		SmallImg[3].onclick = function () {
			ProductImg.src = SmallImg[3].src;
		}

	</script>

</body>

</html>