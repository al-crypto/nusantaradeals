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
	$produk = query("SELECT * FROM products");
	$lowestprice = query("SELECT * FROM products ORDER BY price ASC");
	$highestprice = query("SELECT * FROM products ORDER BY price DESC");
	$sortrating = query("SELECT * FROM products ORDER BY rating DESC");
	$sortpopularity = query("SELECT * FROM products ORDER BY viewers DESC");
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
				<a href="index.php"><img src="images/NusantaraDeals.png" width="125px"></a>
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
	</div>

	<div class="small-container">
		<div class="row row-2">
			<h2>All Products</h2>
			<select id="select-sort" onchange="location.reload()">
				<option>Default Sorting</option>
				<option>Sort by Lowest Price</option>
				<option>Sort by Highest Price</option>
				<option>Sort by Popularity</option>
				<option>Sort by Rating</option>
				<option>Sort by Sale</option>
			</select>
		</div>

		<div id="sorting-default">
			<div class="row">
				<?php foreach ($produk as $prd): ?>
					<div class="col-4">
						<a href="products-detail.php?id=<?= $prd->productID?>">
							<img src="<?= $prd->thumbnail ?>">
							<h4><?= $prd->productName?></h4>
						</a>
						<div class="rating">
							<?php for($x=0; $x<$prd->rating; $x++) echo '<i class="fa fa-star"></i>'; for($x=0; $x<5-$prd->rating; $x++) echo '<i class="fa fa-star-o"></i>';?>
						</div>
						<p>Rp <?= $prd->price?></p>
						<h6><i class="fa fa-eye"></i> <?= $prd->viewers?></h6>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div id="sorting-lowest-price">
			<div class="row">
				<?php foreach ($lowestprice as $lpr): ?>
					<div class="col-4">
						<a href="products-detail.php?id=<?= $lpr->productID?>">
							<img src="<?= $lpr->thumbnail ?>">
							<h4><?= $lpr->productName?></h4>
						</a>
						<div class="rating">
						<?php for($x=0; $x<$lpr->rating; $x++) echo '<i class="fa fa-star"></i>'; for($x=0; $x<5-$lpr->rating; $x++) echo '<i class="fa fa-star-o"></i>';?>
						</div>
						<p>Rp <?= $lpr->price?></p>
						<h6><i class="fa fa-eye"></i> <?= $lpr->viewers?></h6>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div id="sorting-highest-price">
			<div class="row">
				<?php foreach ($highestprice as $hpr): ?>
					<div class="col-4">
						<a href="products-detail.php?id=<?= $hpr->productID?>">
							<img src="<?= $hpr->thumbnail ?>">
							<h4><?= $hpr->productName?></h4>
						</a>
						<div class="rating">
						<?php for($x=0; $x<$hpr->rating; $x++) echo '<i class="fa fa-star"></i>'; for($x=0; $x<5-$hpr->rating; $x++) echo '<i class="fa fa-star-o"></i>';?>
						</div>
						<p>Rp <?= $hpr->price?></p>
						<h6><i class="fa fa-eye"></i> <?= $hpr->viewers?></h6>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div id="sorting-rating">
			<div class="row">
				<?php foreach ($sortrating as $rt): ?>
					<div class="col-4">
						<a href="products-detail.php?id=<?= $rt->productID?>">
							<img src="<?= $rt->thumbnail ?>">
							<h4><?= $rt->productName?></h4>
						</a>
						<div class="rating">
							<?php for($x=0; $x<$rt->rating; $x++) echo '<i class="fa fa-star"></i>'; for($x=0; $x<5-$rt->rating; $x++) echo '<i class="fa fa-star-o"></i>';?>
						</div>
						<p>Rp <?= $rt->price?></p>
						<h6><i class="fa fa-eye"></i> <?= $rt->viewers?></h6>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

		<div id="sorting-popularity">
			<div class="row">
				<?php foreach ($sortpopularity as $ppl): ?>
					<div class="col-4">
						<a href="products-detail.php?id=<?= $ppl->productID?>">
							<img src="<?= $ppl->thumbnail ?>">
							<h4><?= $ppl->productName?></h4>
						</a>
						<div class="rating">
							<?php for($x=0; $x<$ppl->rating; $x++) echo '<i class="fa fa-star"></i>'; for($x=0; $x<5-$ppl->rating; $x++) echo '<i class="fa fa-star-o"></i>';?>
						</div>
						<p>Rp <?= $ppl->price?></p>
						<h6><i class="fa fa-eye"></i> <?= $ppl->viewers?></h6>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		
		<div class="page-btn">
			<span>1</span>
			<span>2</span>
			<span>3</span>
			<span>4</span>
			<span>&#8594;</span>
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
					<img src="images/NusantaraDeals-White.png">
					<p>Kami mempunyai tujuan untuk mengangkat pasar fashion lokal asli Nusantara.</p>
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

		var sorting = document.getElementById("select-sort");
		var sortDefault = document.getElementById("sorting-default");
		var sortLowestPrice = document.getElementById("sorting-lowest-price");
		var sortHighestPrice = document.getElementById("sorting-highest-price");
		var sortingByRating = document.getElementById("sorting-rating");
		var sortingByPopularity = document.getElementById("sorting-popularity");

		sortDefault.style.display = "none";
		sortLowestPrice.style.display = "none";
		sortHighestPrice.style.display = "none";
		sortingByRating.style.display = "none";
		sortingByPopularity.style.display = "none";
	  	
		if(sorting.value === "Sort by Lowest Price"){
			sortLowestPrice.style.display = "block";
		}
		else if(sorting.value === "Sort by Highest Price"){
			sortHighestPrice.style.display = "block";
		}
		else if(sorting.value === "Sort by Rating"){
			sortingByRating.style.display = "block";
		}
		else if(sorting.value === "Sort by Popularity"){
			sortingByPopularity.style.display = "block";
		}
		else{
			sortDefault.style.display = "block";
		}
	</script>

</body>

</html>